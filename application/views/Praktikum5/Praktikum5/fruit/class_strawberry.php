<?php
use Strawberry as Strawberry;

require 'class_fruit2.php';

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or berry? ";
    }
}

$set_straberry = new Strawberry("Strawberry", "red");
$set_straberry->message();
$set_straberry->intro();



?>