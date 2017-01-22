<?php

require __DIR__.'/../vendor/autoload.php';

$original = new SON\Prototype\ConcretePrototype;

$original->setTitle('PHP Essencial');
$original->setAuthor('Erik Figueiredo');

$reference = $original;
$reference2 =& $original;

$reference->setTitle('Livro errado');

var_dump($original);
var_dump($reference);
var_dump($reference2);

$clone1 = clone $original;

$clone1->setTitle('Node.js para Noobies');

var_dump($clone1);

$clone2 = clone $original;

$clone2->setTitle('MongoDb bem basiquinho');

var_dump($clone2);

$clone3 = clone $clone1;

$clone3->setTitle('Laravel para artesãos');

var_dump($clone3);
