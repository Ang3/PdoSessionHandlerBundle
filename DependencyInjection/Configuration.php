<?php

namespace Ang3\Bundle\PdoSessionHandlerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ang3_pdo_session_handler');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('host')->defaultValue('%database_host%')->cannotBeEmpty()->end()
                ->integerNode('port')->defaultValue(3306)->end()
                ->scalarNode('database')->defaultValue('%database_name%')->cannotBeEmpty()->end()
                ->scalarNode('username')->defaultValue('%database_user%')->cannotBeEmpty()->end()
                ->scalarNode('password')->defaultValue('%database_password%')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
