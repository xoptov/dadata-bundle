<?php

namespace Xoptov\DaDataBundle\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AddressManagerTest extends KernelTestCase
{
    public function testAddressStandard()
    {
        static::bootKernel();
        $service = static::$kernel->getContainer()->get("xoptov_da_data.address_manager");
        $service->standardize("Приморский край, г Уссурийск, ул Воровского 151, кв 75");
    }
}