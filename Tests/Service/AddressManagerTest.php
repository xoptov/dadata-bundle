<?php

namespace Xoptov\DaDataBundle\Tests\Service;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AddressManagerTest extends KernelTestCase
{
    /**
     * @var Container
     */
    static $container;

    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass()
    {
        static::bootKernel();
        static::$container = static::$kernel->getContainer();
    }

    public function testStandardAddress()
    {
        $addressManager = static::$container->get('xoptov_da_data.address_manager');
        $response = $addressManager->standardize('Приморский край, г Уссурийск, ул Воровского 151, кв 75');
        return;
    }
    
    public function testCleanAddress()
    {
        $addressManager = static::$container->get('xoptov_da_data.address_manager');
        $response = $addressManager->clean('Уссурийск');
        return;
    }
}