<?php

namespace Xoptov\DaDataBundle\Model;

class Coordinate
{
    const ACCURACY_EXACT = 0;
    const ACCURACY_NEAREST_HOUSE = 1;
    const ACCURACY_STREET = 2;
    const ACCURACY_SETTLEMENT = 3;
    const ACCURACY_CITY = 4;

    /** @var float */
    private $latitude;

    /** @var float */
    private $longitude;

    /** @var int */
    private $accuracy;

    /**
     * @param float $latitude
     * @return Coordinate
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     * @return Coordinate
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param int $accuracy
     * @return Coordinate
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * @return int
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }
}