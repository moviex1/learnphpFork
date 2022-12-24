<?php

namespace App;


/**
 * @property-read ?array $db
 */
class Config
{

    protected array $config = [];

    public function __construct(array $env)
    {
        $this->config = [
            'db' => [
                'driver' => $env['DRIVER'] ?? 'mysql',
                'host' => $env['DB_HOST'],
                'user' => $env['DB_USER'],
                'password' => $env['DB_PASSWORD'],
                'database' => $env['DB_DATABASE']
            ]
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }
}