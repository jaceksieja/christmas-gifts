<?php

namespace App\Tests\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * @covers \App\Infrastructure\Controller\CreateEmployeeController
 */
class CreateEmployeeControllerTest extends WebTestCase
{
    public function testCreateEmployeeEndpointWhenDataIsCorrect(): void
    {
        $client = static::createClient();

        $content = [
            'name' => 'jack',
            'interests' => ['scifi', 'techno'],
        ];

        $client->jsonRequest(method: Request::METHOD_POST, uri: '/employees/', parameters: $content);

        self::assertResponseIsSuccessful();
    }
}
