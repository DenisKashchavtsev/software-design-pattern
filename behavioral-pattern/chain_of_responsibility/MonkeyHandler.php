<?php
/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return " Banana ";
        } else {
            echo 'skip-'.$request.';';
            return parent::handle($request);
        }
    }
}