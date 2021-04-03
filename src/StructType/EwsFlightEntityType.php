<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FlightNumber = null;
    /**
     * The AirlineIataCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AirlineIataCode = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The WindowsTimeZoneName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WindowsTimeZoneName = null;
    /**
     * The DepartureAirportIataCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DepartureAirportIataCode = null;
    /**
     * The ArrivalAirportIataCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ArrivalAirportIataCode = null;
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
    public function __construct(?string $flightNumber = null, ?string $airlineIataCode = null, ?string $departureTime = null, ?string $windowsTimeZoneName = null, ?string $departureAirportIataCode = null, ?string $arrivalAirportIataCode = null)
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
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \StructType\EwsFlightEntityType
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get AirlineIataCode value
     * @return string|null
     */
    public function getAirlineIataCode(): ?string
    {
        return $this->AirlineIataCode;
    }
    /**
     * Set AirlineIataCode value
     * @param string $airlineIataCode
     * @return \StructType\EwsFlightEntityType
     */
    public function setAirlineIataCode(?string $airlineIataCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineIataCode) && !is_string($airlineIataCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineIataCode, true), gettype($airlineIataCode)), __LINE__);
        }
        $this->AirlineIataCode = $airlineIataCode;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \StructType\EwsFlightEntityType
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get WindowsTimeZoneName value
     * @return string|null
     */
    public function getWindowsTimeZoneName(): ?string
    {
        return $this->WindowsTimeZoneName;
    }
    /**
     * Set WindowsTimeZoneName value
     * @param string $windowsTimeZoneName
     * @return \StructType\EwsFlightEntityType
     */
    public function setWindowsTimeZoneName(?string $windowsTimeZoneName = null): self
    {
        // validation for constraint: string
        if (!is_null($windowsTimeZoneName) && !is_string($windowsTimeZoneName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($windowsTimeZoneName, true), gettype($windowsTimeZoneName)), __LINE__);
        }
        $this->WindowsTimeZoneName = $windowsTimeZoneName;
        
        return $this;
    }
    /**
     * Get DepartureAirportIataCode value
     * @return string|null
     */
    public function getDepartureAirportIataCode(): ?string
    {
        return $this->DepartureAirportIataCode;
    }
    /**
     * Set DepartureAirportIataCode value
     * @param string $departureAirportIataCode
     * @return \StructType\EwsFlightEntityType
     */
    public function setDepartureAirportIataCode(?string $departureAirportIataCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureAirportIataCode) && !is_string($departureAirportIataCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureAirportIataCode, true), gettype($departureAirportIataCode)), __LINE__);
        }
        $this->DepartureAirportIataCode = $departureAirportIataCode;
        
        return $this;
    }
    /**
     * Get ArrivalAirportIataCode value
     * @return string|null
     */
    public function getArrivalAirportIataCode(): ?string
    {
        return $this->ArrivalAirportIataCode;
    }
    /**
     * Set ArrivalAirportIataCode value
     * @param string $arrivalAirportIataCode
     * @return \StructType\EwsFlightEntityType
     */
    public function setArrivalAirportIataCode(?string $arrivalAirportIataCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalAirportIataCode) && !is_string($arrivalAirportIataCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalAirportIataCode, true), gettype($arrivalAirportIataCode)), __LINE__);
        }
        $this->ArrivalAirportIataCode = $arrivalAirportIataCode;
        
        return $this;
    }
}
