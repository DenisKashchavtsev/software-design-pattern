<?php

namespace App\User\Application\Controller;

use App\User\Application\Service\UserServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private UserServiceInterface $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    #[Route('/', methods: ['GET'])]
    public function index(): Response
    {
        $users = $this->userService->getAllUsers();

        return $this->json($users);
    }
}