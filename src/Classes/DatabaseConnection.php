<?php

namespace App\Classes;

class DatabaseConnection
{
    /**
     * @var DatabaseConfiguration
     */
    private DatabaseConfiguration $configuration;

    /**
     * DatabaseConnection constructor.
     * @param $configuration
     */
    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }

    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
