<?php

/**
 * Целевой класс объявляет интерфейс, с которым может работать клиентский код.
 */
interface TargetInterface
{
    public function request(): string;
}