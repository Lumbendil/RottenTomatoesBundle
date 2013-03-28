<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Lumbendil
 * Date: 28/03/13
 * Time: 9:25
 * To change this template use File | Settings | File Templates.
 */

namespace Lumbendil\RottenTomatoesBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class LumbendilRottenTomatoesExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
