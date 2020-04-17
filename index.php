<?php
include "Stack.php";

$stack = new Stack();
$stack->push("num1");
$stack->push("num2");
$stack->push("num3");
$stack->push("num4");
$stack->push("num5");

$stack->pop();
$stack->pop();
$stack->pop();

$stack->push("add1");
$stack->push("add2");

$stack->isEmply();
var_dump($stack->isEmply());

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack->getStack());
var_dump($stack->isEmply());
//echo $stack->pop();