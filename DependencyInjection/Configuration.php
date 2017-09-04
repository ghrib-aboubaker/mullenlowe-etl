<?php

namespace Mullenlowe\EtlBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('mullenlowe_etl');

        $rootNode
            ->children()
                ->scalarNode('param1')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end() // end param1
                ->scalarNode('param2')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end() // end param2
            ->end();

        return $treeBuilder;
    }
}
