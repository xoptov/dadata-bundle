<?php

namespace Xoptov\DaDataBundle\Model;

class StandardResponse
{
    /** @var array */
    private $addresses;

    /**
     * @param array $addresses
     *
     * @return StandardResponse
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return array
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}