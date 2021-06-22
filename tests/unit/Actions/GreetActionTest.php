<?php

namespace Tests\Ecommerce\CustomerService\Actions;

use Ecommerce\CustomerService\Actions\GreetAction;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use Psr\Log\LoggerInterface;
use PHPUnit\Framework\TestCase;

class GreetActionTest extends TestCase
{
    /** @var string */
    private $greeting;

    /** @var LoggerInterface */
    private $logger;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->greeting = 'Welcome';
        $this->logger = $this->createMock(LoggerInterface::class);
    }

    public function testAction()
    {
        $this->logger->debug('Greeting was invoked');

        $greetAction = new GreetAction(
            $this->greeting,
            $this->logger
        );

        /** @var Request $request */
        $request = new Request();

        $response = $greetAction->__invoke($request);
        $this->assertNotNull($response);
    }
}
