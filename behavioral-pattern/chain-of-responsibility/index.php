<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($dog)->setNext($squirrel);

clientCode($monkey);

/**
 * Обычно клиентский код приспособлен для работы с единственным обработчиком. В
 * большинстве случаев клиенту даже неизвестно, что этот обработчик является
 * частью цепочки.
 */
function clientCode(Handler $handler): void
{
    foreach (["Nut", "Banana", "Coffee", "MeatBall"] as $food) {

        $result = $handler->handle($food);

        if ($result) {
            echo "  " . $result . ', ';
        } else {
            echo "  " . $food . " was left ,";
        }
    }
}