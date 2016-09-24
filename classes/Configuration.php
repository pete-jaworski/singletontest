<?php
namespace PiotrJaworski\SingletonTest;

class Configuration
{

    private function __construct(){}
    private function __clone(){}
    
    private static $instance = null;
    private $conf = array("url" => "http://www.onet.pl");
    
    
    public static function getInstance()
    {
        if(empty(self::instance)){
            self::$instance = new Configuration();
        }
        
        return self::$instance;
    }
    
    
    public function getConfiguration($index = "url")
    {
        return $this->conf[$index];
    }
    
    
}
