<?php
/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return " Nut ";
        } else {
            echo 'skip-'.$request.';';
            return parent::handle($request);
        }
    }
}