<?php

namespace Container8x8R1a3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BIqP7KSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BIqP7KS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BIqP7KS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'answer' => ['privates', '.errored..service_locator.BIqP7KS.App\\Entity\\Answer', NULL, 'Cannot autowire service ".service_locator.BIqP7KS": it needs an instance of "App\\Entity\\Answer" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'answer' => 'App\\Entity\\Answer',
            'entityManager' => '?',
        ]);
    }
}
