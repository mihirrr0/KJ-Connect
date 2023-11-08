<?php
namespace validation;
require_once 'ValidInterface.php';

class Email implements ValidInterface {

    private $name;
    private $value;

    public function __construct($name , $value) {
         $this->name = $name;
         $this->value = $value;
    }

    public function validate() {
        // First, ensure it's a valid email format
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            return "$this->name is not a valid email";
        }

        // Next, ensure it ends with @somaiya.edu
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@somaiya\.edu$/', $this->value)) {
            return "$this->name must end with @somaiya.edu";
        }

        return '';
    }
}
