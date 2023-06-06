<?php

namespace App\User\Application\Service;

use App\User\Domain\Entity\User;
use App\User\Domain\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers(): array
    {
        return $this->userRepository->findAll();
    }

    public function createUser(string $name, string $email): User
    {
        // Реализация метода создания нового пользователя
    }

    public function updateUser(User $user): void
    {
        // Реализация метода обновления информации о пользователе
    }

    public function deleteUser(User $user): void
    {
        // Реализация метода удаления пользователя
    }

    public function getUserById(int $userId): ?User
    {
        // Реализация метода получения пользователя по идентификатору
    }
}