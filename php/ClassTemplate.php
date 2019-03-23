<?php

// This class is a template for classes in PHP.
class ClassTemplate
{

    // This is a member variable.
    private $variableClass;

    // This is a class constructor method.
    function __construct() {
        $this->variableClass = "initial data";
    }

    // This is a class destructor method.
    private function __destruct() {
        $this->variableClass;
    }

    // This is a getter method.
    private function __get($variableMethod) {
        return $this->variableClass;
    }

    // This is a setter method.
    private function __set($variableMethod1, $variableMethod2) {
        $this->variableClass = $variableMethod2;
    }

    // This is the main method.
    function main($variableMethod) {
        $this->__construct($variableMethod);
        $this->__set(0, $variableMethod);
        return $this->__get($variableMethod);
    }

}

?>
