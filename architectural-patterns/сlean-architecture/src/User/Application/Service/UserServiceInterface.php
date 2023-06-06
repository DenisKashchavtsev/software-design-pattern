<?php

namespace App\User\Application\Service;

use App\User\Domain\Entity\User;

interface UserServiceInterface
{
    public function createUser(string $name, string $email): User;
    public function updateUser(User $user): void;
    public function deleteUser(User $user): void;
    public function getUserById(int $userId): ?User;
}