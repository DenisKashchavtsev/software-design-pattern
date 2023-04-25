<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$command = new CreateUserCommand("john_doe", "password123");
var_dump($command->execute());


$query = new GetUserQuery(1);
var_dump($query->execute());