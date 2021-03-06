<?php

namespace ContainerUxZlhlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AjkffElService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AjkffEl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AjkffEl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AteliersController::delete' => ['privates', '.service_locator.p0oKA42', 'get_ServiceLocator_P0oKA42Service', true],
            'App\\Controller\\AteliersController::edit' => ['privates', '.service_locator.p0oKA42', 'get_ServiceLocator_P0oKA42Service', true],
            'App\\Controller\\AteliersController::index' => ['privates', '.service_locator.bPQEPm7', 'get_ServiceLocator_BPQEPm7Service', true],
            'App\\Controller\\AteliersController::new' => ['privates', '.service_locator.bPQEPm7', 'get_ServiceLocator_BPQEPm7Service', true],
            'App\\Controller\\AteliersController::show' => ['privates', '.service_locator.Fdv0ar0', 'get_ServiceLocator_Fdv0ar0Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AteliersController:delete' => ['privates', '.service_locator.p0oKA42', 'get_ServiceLocator_P0oKA42Service', true],
            'App\\Controller\\AteliersController:edit' => ['privates', '.service_locator.p0oKA42', 'get_ServiceLocator_P0oKA42Service', true],
            'App\\Controller\\AteliersController:index' => ['privates', '.service_locator.bPQEPm7', 'get_ServiceLocator_BPQEPm7Service', true],
            'App\\Controller\\AteliersController:new' => ['privates', '.service_locator.bPQEPm7', 'get_ServiceLocator_BPQEPm7Service', true],
            'App\\Controller\\AteliersController:show' => ['privates', '.service_locator.Fdv0ar0', 'get_ServiceLocator_Fdv0ar0Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AteliersController::delete' => '?',
            'App\\Controller\\AteliersController::edit' => '?',
            'App\\Controller\\AteliersController::index' => '?',
            'App\\Controller\\AteliersController::new' => '?',
            'App\\Controller\\AteliersController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AteliersController:delete' => '?',
            'App\\Controller\\AteliersController:edit' => '?',
            'App\\Controller\\AteliersController:index' => '?',
            'App\\Controller\\AteliersController:new' => '?',
            'App\\Controller\\AteliersController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
