<?php

namespace ContainerXbTuoIs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4xIyKvdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4xIyKvd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4xIyKvd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'question' => ['privates', '.errored..service_locator.4xIyKvd.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.4xIyKvd": it needs an instance of "App\\Entity\\Question" but this type has been excluded in "config/services.yaml".'],
        ], [
            'question' => 'App\\Entity\\Question',
        ]);
    }
}