<?php

namespace App\User\Infrastructure\ServiceProviding;

use App\User\Application\Service\UserService;
use App\User\Application\Service\UserServiceInterface;
use App\User\Domain\Repository\UserRepositoryInterface;
use App\User\Infrastructure\Persistence\UserRepository;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class UserServiceProvider extends Extension implements ExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../Resources/config'));
        $loader->load('services.yaml');

        $container->autowire(UserServiceInterface::class, UserService::class);
        $container->autowire(UserRepositoryInterface::class, UserRepository::class);
    }
}