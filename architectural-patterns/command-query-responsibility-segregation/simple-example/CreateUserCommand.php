<?php

class CreateUserCommand implements Command
{
    public function __construct(private $username, private $password)
    {}

    public function execute(): array
    {
        // Логика создания пользователя
        return [
            'username' => $this->username,
            'password' => $this->password,
            'status' => 'created'
        ];
    }
}