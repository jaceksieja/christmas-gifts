<?php

namespace App\Infrastructure\Controller;

use App\Application\ViewModel\Employee;
use App\Domain\Action\CreateEmployeeInterface;
use App\Application\Factory\EmployeeFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateEmployeeController
{
    public function __construct(
        private readonly CreateEmployeeInterface $createEmployee,
        private readonly EmployeeFactoryInterface $employeeFactory
    ) {
    }

    #[Route(path: '/employees/', methods: ['POST'])]
    public function __invoke(Employee $employee): Response
    {
        try {
            ($this->createEmployee)(
                $this->employeeFactory->create($employee->getName(), $employee->getInterests())
            );
        } catch (\Throwable $exception) {
            return new JsonResponse(sprintf('Unhandled exception %s', $exception->getMessage()), Response::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($employee);
    }
}
