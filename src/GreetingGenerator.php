<?php

namespace App;

use Psr\Log\LoggerInterface;

class GreetingGenerator
{
    private $logger;
    public function _construct(loggerInterface $logger)
{
    $this->logger = $logger;
}
    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Aloha'];
        $greeting = $greetings[array_rand($greetings)];



        return $greeting;
    }
}
?>