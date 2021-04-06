<?php

namespace config;
require('vendor/autoload.php');
use Medoo\Medoo;
class Database extends Medoo{
    private $settings = [
        'database_type' => 'mysql',
        'database_name' => 'newspaper',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'laravellaravel',
        'charset' => 'utf8',
        'port' => 3306
    ];

    public function __construct()
    {
        parent::__construct($this->settings);
    }


}


