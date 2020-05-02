<?php

class Singleton
{
    //reason for private is that we dont want it to be modified
    private static $instance;


    /*
     * setting the constructor to protected, this makes sure that the class can't be instantiated from outside the class
     * so we wont be able to do $test = new Config();
    */
    protected function __construct()
    {
        //
    }

    /*
     * By setting the magic method of __clone to protected, it stops the current object being cloned from outside of the class
     */
    protected function __clone()
    {

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static;
        }

        return self::$instance;
    }

}



class Config extends Singleton
{
    public $data = [
        'db' => [
            'host' => '127.0.0.1',
        ]
    ];
}


$config = Config::getInstance();

$anotherConfig = clone $config;
var_dump($anotherConfig === $config);