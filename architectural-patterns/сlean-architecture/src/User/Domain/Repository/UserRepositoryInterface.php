<?php

namespace App\User\Domain\Repository;

use App\User\Domain\Entity\User;

interface UserRepositoryInterface
{
    public function findAll();
    public function find($id, $lockMode = null, $lockVersion = null);
    public function save(User $user): void;
    public function delete(User $user): void;
}