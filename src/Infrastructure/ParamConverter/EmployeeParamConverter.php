<?php

namespace App\Infrastructure\ParamConverter;

use App\Application\ViewModel\Employee;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;

class EmployeeParamConverter implements ParamConverterInterface
{
    public function apply(Request $request, ParamConverter $configuration): bool
    {
        $param = $configuration->getName();

        $request->attributes->set($param, new Employee(
            $request->get('name'),
            $request->get('interests')
        ));

        return true;
    }

    public function supports(ParamConverter $configuration): bool
    {
        return Employee::class === $configuration->getClass();
    }
}
