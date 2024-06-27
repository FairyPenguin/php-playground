<?php

require "./views/about.view.php";

$heading = "About Page Heading";

class ClassName
{
    //Start everthign in private visiblity and then change.
    public $prop1;
    public $prop2;

    public function __construct($arg1, $arg2)
    {

        $this->prop1 = $arg1;
        $this->prop2 = $arg2;

        $one = $this->prop1;
        $two = $this->prop2;

        echo $one . "  " . $two;
    }

    public function setProp1($value)
    {
        $this->prop1 = $value;
    }

    public function getProp1()
    {
        return $this->prop1;
    }

}

try {

    $objectFromTheClass = new ClassName("1", "2");

    newLineBreak();

    $objectFromTheClass->setProp1("Prop1 value passed from the object try/catch block");

    newLineBreak();

    $prop1 = $objectFromTheClass->getProp1();

    newLineBreak();

    echo $prop1;

} catch (Exception $e) {

    echo 'Error:', $e->getMessage();
}

// require "./views/partials/vars.php";
