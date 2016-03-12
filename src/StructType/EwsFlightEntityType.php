<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlightEntityType extends AbstractStructBase
{
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The AirlineIataCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirlineIataCode;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTime;
    /**
     * The WindowsTimeZoneName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WindowsTimeZoneName;
    /**
     * The DepartureAirportIataCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureAirportIataCode;
    /**
     * The ArrivalAirportIataCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalAirportIataCode;
    /**
     * Constructor method for FlightEntityType
     * @uses EwsFlightEntityType::setFlightNumber()
     * @uses EwsFlightEntityType::setAirlineIataCode()
     * @uses EwsFlightEntityType::setDepartureTime()
     * @uses EwsFlightEntityType::setWindowsTimeZoneName()
     * @uses EwsFlightEntityType::setDepartureAirportIataCode()
     * @uses EwsFlightEntityType::setArrivalAirportIataCode()
     * @param string $flightNumber
     * @param string $airlineIataCode
     * @param string $departureTime
     * @param string $windowsTimeZoneName
     * @param string $departureAirportIataCode
     * @param string $arrivalAirportIataCode
     */
    public function __construct($flightNumber = null, $airlineIataCode = null, $departureTime = null, $windowsTimeZoneName = null, $departureAirportIataCode = null, $arrivalAirportIataCode = null)
    {
        $this
            ->setFlightNumber($flightNumber)
            ->setAirlineIataCode($airlineIataCode)
            ->setDepartureTime($departureTime)
            ->setWindowsTimeZoneName($windowsTimeZoneName)
            ->setDepartureAirportIataCode($departureAirportIataCode)
            ->setArrivalAirportIataCode($arrivalAirportIataCode);
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get AirlineIataCode value
     * @return string|null
     */
    public function getAirlineIataCode()
    {
        return $this->AirlineIataCode;
    }
    /**
     * Set AirlineIataCode value
     * @param string $airlineIataCode
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public function setAirlineIataCode($airlineIataCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineIataCode) && !is_string($airlineIataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineIataCode)), __LINE__);
        }
        $this->AirlineIataCode = $airlineIataCode;
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public function setDepartureTime($departureTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        return $this;
    }
    /**
     * Get WindowsTimeZoneName value
     * @return string|null
     */
    public function getWindowsTimeZoneName()
    {
        return $this->WindowsTimeZoneName;
    }
    /**
     * Set WindowsTimeZoneName value
     * @param string $windowsTimeZoneName
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public function setWindowsTimeZoneName($windowsTimeZoneName = null)
    {
        // validation for constraint: string
        if (!is_null($windowsTimeZoneName) && !is_string($windowsTimeZoneName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($windowsTimeZoneName)), __LINE__);
        }
        $this->WindowsTimeZoneName = $windowsTimeZoneName;
        return $this;
    }
    /**
     * Get DepartureAirportIataCode value
     * @return string|null
     */
    public function getDepartureAirportIataCode()
    {
        return $this->DepartureAirportIataCode;
    }
    /**
     * Set DepartureAirportIataCode value
     * @param string $departureAirportIataCode
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public function setDepartureAirportIataCode($departureAirportIataCode = null)
    {
        // validation for constraint: string
        if (!is_null($departureAirportIataCode) && !is_string($departureAirportIataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureAirportIataCode)), __LINE__);
        }
        $this->DepartureAirportIataCode = $departureAirportIataCode;
        return $this;
    }
    /**
     * Get ArrivalAirportIataCode value
     * @return string|null
     */
    public function getArrivalAirportIataCode()
    {
        return $this->ArrivalAirportIataCode;
    }
    /**
     * Set ArrivalAirportIataCode value
     * @param string $arrivalAirportIataCode
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public function setArrivalAirportIataCode($arrivalAirportIataCode = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalAirportIataCode) && !is_string($arrivalAirportIataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalAirportIataCode)), __LINE__);
        }
        $this->ArrivalAirportIataCode = $arrivalAirportIataCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFlightEntityType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
