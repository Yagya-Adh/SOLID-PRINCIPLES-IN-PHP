<?php

class User
{
    protected $logger;
   
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function create(array $data)
    {
        try {
            // Save User to database
        } catch (DatabaseException $e) {
            $this->logger->writeToFile($e->getMessage());
        }
    }


}