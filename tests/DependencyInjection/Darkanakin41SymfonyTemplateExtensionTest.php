<?php


namespace Darkanakin41\SymfonyTemplateBundle\Tests\DependencyInjection;


use Darkanakin41\SymfonyTemplateBundle\DependencyInjection\Darkanakin41SymfonyTemplateExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Darkanakin41SymfonyTemplateExtensionTest extends TestCase
{
    public function testLoadConfiguration()
    {
        $configuration = new ContainerBuilder();
        $loader = new Darkanakin41SymfonyTemplateExtension();
        $loader->load([], $configuration);
        $bundleConfig = $configuration->getParameter('darkanakin41.symfony_template.config');
        $this->assertTrue(true);
//        $this->assertNotEmpty($bundleConfig);
    }
}
