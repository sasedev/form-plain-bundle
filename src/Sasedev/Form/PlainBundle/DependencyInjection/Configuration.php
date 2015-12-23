<?php

namespace Sasedev\Form\PlainBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

	/**
	 *
	 * {@inheritDoc} @see ConfigurationInterface::getConfigTreeBuilder()
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		// $rootNode = $treeBuilder->root('sasedev_form_plain');
		$treeBuilder->root('sasedev_form_plain');
		
		// Here you should define the parameters that are allowed to
		// configure your bundle. See the documentation linked above for
		// more information on that topic.
		
		return $treeBuilder;
	}
}
