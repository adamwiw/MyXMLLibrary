<?php
class MyAttribute {
    public $name;
    public $value;
    
    function __construct($name, $value) {
	$this->name = $name;
	$this->value = $value;
    }
}

?>