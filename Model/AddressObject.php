<?php

namespace Xoptov\DaDataBundle\Model;

/**
 * @method string getRegion()
 * @method string getArea()
 * @method string getLocality()
 * @method string getDistrict()
 * @method string getStreet()
 * @method string getHouse()
 */
class AddressObject
{
    /** @var string */
    protected $fiasId;

    /** @var string */
    protected $kladrId;

    /** @var string */
    protected $type;

    /** @var string */
    protected $withType;

    /** @var string */
    protected $typeFull;

    /** @var string */
    protected $value;

    /**
     * @param $name
     * @param $arguments
     * @return string
     */
    public function __call($name, $arguments)
    {
        return $this->value;
    }

    /**
     * @param string $fiasId
     * @return AddressObject
     */
    public function setFiasId($fiasId)
    {
        $this->fiasId = $fiasId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFiasId()
    {
        return $this->fiasId;
    }

    /**
     * @param string $kladrId
     * @return AddressObject
     */
    public function setKladrId($kladrId)
    {
        $this->kladrId = $kladrId;

        return $this;
    }

    /**
     * @return string
     */
    public function getKladrId()
    {
        return $this->kladrId;
    }

    /**
     * @param string $type
     * @return AddressObject
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $withType
     * @return AddressObject
     */
    public function setWithType($withType)
    {
        $this->withType = $withType;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithType()
    {
        return $this->withType;
    }

    /**
     * @param string $typeFull
     * @return AddressObject
     */
    public function setTypeFull($typeFull)
    {
        $this->typeFull = $typeFull;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeFull()
    {
        return $this->typeFull;
    }

    /**
     * @param string $value
     * @return AddressObject
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}