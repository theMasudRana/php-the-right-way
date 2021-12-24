<?php
include_once 'vendor/autoload.php';

use Animals\Cat;
use Animals\Dog;
use Animals\Cow;

$cat = new Cat();
$dog = new Dog();
$cow = new Cow();
$cat->greet();
$dog->greet();
$cow->greet();