<?php

require __DIR__.'/../vendor/autoload.php';

//$mysql = new SON\Builder\MySqlBuilder;
$mysql = new SON\Builder\PostgresBuilder;

$result = (new SON\Builder\Director($mysql))->getQuery('users');

var_dump($result->getQuery());
