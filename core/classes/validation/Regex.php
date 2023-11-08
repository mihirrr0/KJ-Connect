<?php
namespace validation;

use validation\ValidInterface;

class Regex implements ValidInterface {

    private $name, $value, $pattern;

    public function __construct($name, $value, $pattern) {
        $this->name = $name;
        $this->value = $value;
        $this->pattern = $pattern;
    }

    public function validate() {
        if (!preg_match($this->pattern, $this->value)) {
            return "Invalid format for {$this->name}.";
        }
        return '';
    }
}
