<?php
/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "MeatBall";
        } else {
            echo 'skip-'.$request.';';
            return parent::handle($request);
        }
    }
}