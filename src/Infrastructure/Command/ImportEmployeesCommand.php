<?php

namespace App\Infrastructure\Command;

use App\Application\Action\CreateEmployees;
use App\Application\ViewModel\Employee;
use JsonMachine\Items;
use JsonMachine\JsonDecoder\ExtJsonDecoder;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[AsCommand(
    'app:import:employees',
    'Import employees data from source.'
)]
class ImportEmployeesCommand extends Command
{
    public function __construct(
        private DenormalizerInterface $normalizer,
        private ValidatorInterface $validator,
        private CreateEmployees $createEmployees
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('filePath', InputArgument::REQUIRED, 'Path to file with employees data.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filePath = $input->getArgument('filePath');

        try {
            $items = Items::fromFile($filePath, ['decoder' => new ExtJsonDecoder(true)]);
        } catch (\Throwable $exception) {
            $output->write('Parsing exception: %s', $exception->getMessage());
            return Command::FAILURE;
        }

        $employees = [];
        foreach ($items as $k => $item) {

            $employees[] = $this->normalizer->denormalize($item, Employee::class);
            $errors = $this->validator->validate($item);

            if (count($errors)) {
                continue;
            }

            if ($k%100) {
                ($this->createEmployees)($employees);
                $employees = [];
            }

        }

        return Command::SUCCESS;
    }
}
