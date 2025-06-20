<?php

class User
{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function create($name)
    {
        $this->logger->log("User {$name} created.");
    }
}