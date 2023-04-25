<?php

class GetUserQuery implements Query
{
    public function __construct(private $userId)
    {}

    public function execute(): array
    {
        // Логика получения пользователя
        return [
            'id' => $this->userId,
            'status' => 'received'
        ];
    }
}