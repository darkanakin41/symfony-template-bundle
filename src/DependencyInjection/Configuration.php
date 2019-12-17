<?php

/*
 * This file is part of the Darkanakin41SymfonyBundleTemplate package.
 */

namespace Darkanakin41\SymfonyTemplateBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('darkanakin41_symfony_template');
        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('darkanakin41_symfony_template');
        }

//        $rootNode
//            ->children()
//                ->arrayNode('template')
//                ->children()
//                    ->scalarNode('fields')->end()
//                    ->scalarNode('table')->end()
//                ->end()
//            ->end();

        return $treeBuilder;
    }
}
