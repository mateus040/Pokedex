<?php

class MySQL extends PDO
{
    public $dsn = 'mysql:host=localhost:3307;dbname=pokedex';
    public $user = 'root';
    public $pass = 'etecjau';

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}