<?php

namespace Xoptov\DaDataBundle\Model;

class Address
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $result;

    /**
     * @var AddressObject
     */
    private $region;

    /**
     * @var AddressObject
     */
    private $area;

    /**
     * @var AddressObject
     */
    private $locality;

    /**
     * @var AddressObject
     */
    private $district;

    /**
     * @var AddressObject
     */
    private $street;

    /**
     * @var AddressObject
     */
    private $house;

    /**
     * @var string
     */
    private $fiasId;

    /**
     * @var string
     */
    private $kladrId;

    /**
     * @var int
     */
    private $fiasLevel;

    /**
     * @var Coordinates
     */
    private $coordinates;

    /**
     * @param string $source
     *
     * @return Address
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $result
     *
     * @return Address
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param AddressObject $addressObject
     *
     * @return Address
     */
    public function setRegion(AddressObject $addressObject)
    {
        $this->region = $addressObject;

        return $this;
    }

    /**
     * @return AddressObject
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param AddressObject $addressObject
     *
     * @return Address
     */
    public function setArea(AddressObject $addressObject)
    {
        $this->area = $addressObject;

        return $this;
    }

    /**
     * @return AddressObject
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param AddressObject $addressObject
     *
     * @return Address
     */
    public function setLocality(AddressObject $addressObject)
    {
        $this->locality = $addressObject;

        return $this;
    }

    /**
     * @return AddressObject
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param AddressObject $addressObject
     *
     * @return Address
     */
    public function setDistrict(AddressObject $addressObject)
    {
        $this->district = $addressObject;

        return $this;
    }

    /**
     * @return AddressObject
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param AddressObject $addressObject
     *
     * @return Address
     */
    public function setStreet(AddressObject $addressObject)
    {
        $this->street = $addressObject;

        return $this;
    }

    /**
     * @return AddressObject
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param AddressObject $addressObject
     *
     * @return Address
     */
    public function setHouse(AddressObject $addressObject)
    {
        $this->house = $addressObject;

        return $this;
    }

    /**
     * @return AddressObject
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string $fiasId
     *
     * @return Address
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
     *
     * @return Address
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
     * @param int $level
     *
     * @return Address
     */
    public function setFiasLevel($level)
    {
        $this->fiasLevel = $level;

        return $this;
    }

    /**
     * @return int
     */
    public function getFiasLevel()
    {
        return $this->fiasLevel;
    }

    /**
     * @param Coordinates $coordinates
     *
     * @return Address
     */
    public function setCoordinates(Coordinates $coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return Coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}