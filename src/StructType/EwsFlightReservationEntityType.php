<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightReservationEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlightReservationEntityType extends AbstractStructBase
{
    /**
     * The ReservationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReservationId;
    /**
     * The ReservationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReservationStatus;
    /**
     * The UnderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnderName;
    /**
     * The BrokerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BrokerName;
    /**
     * The BrokerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BrokerPhone;
    /**
     * The Flights
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFlightsType
     */
    public $Flights;
    /**
     * Constructor method for FlightReservationEntityType
     * @uses EwsFlightReservationEntityType::setReservationId()
     * @uses EwsFlightReservationEntityType::setReservationStatus()
     * @uses EwsFlightReservationEntityType::setUnderName()
     * @uses EwsFlightReservationEntityType::setBrokerName()
     * @uses EwsFlightReservationEntityType::setBrokerPhone()
     * @uses EwsFlightReservationEntityType::setFlights()
     * @param string $reservationId
     * @param string $reservationStatus
     * @param string $underName
     * @param string $brokerName
     * @param string $brokerPhone
     * @param \Ews\ArrayType\EwsArrayOfFlightsType $flights
     */
    public function __construct($reservationId = null, $reservationStatus = null, $underName = null, $brokerName = null, $brokerPhone = null, \Ews\ArrayType\EwsArrayOfFlightsType $flights = null)
    {
        $this
            ->setReservationId($reservationId)
            ->setReservationStatus($reservationStatus)
            ->setUnderName($underName)
            ->setBrokerName($brokerName)
            ->setBrokerPhone($brokerPhone)
            ->setFlights($flights);
    }
    /**
     * Get ReservationId value
     * @return string|null
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }
    /**
     * Set ReservationId value
     * @param string $reservationId
     * @return \Ews\StructType\EwsFlightReservationEntityType
     */
    public function setReservationId($reservationId = null)
    {
        // validation for constraint: string
        if (!is_null($reservationId) && !is_string($reservationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationId, true), gettype($reservationId)), __LINE__);
        }
        $this->ReservationId = $reservationId;
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \Ews\StructType\EwsFlightReservationEntityType
     */
    public function setReservationStatus($reservationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationStatus, true), gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
        return $this;
    }
    /**
     * Get UnderName value
     * @return string|null
     */
    public function getUnderName()
    {
        return $this->UnderName;
    }
    /**
     * Set UnderName value
     * @param string $underName
     * @return \Ews\StructType\EwsFlightReservationEntityType
     */
    public function setUnderName($underName = null)
    {
        // validation for constraint: string
        if (!is_null($underName) && !is_string($underName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($underName, true), gettype($underName)), __LINE__);
        }
        $this->UnderName = $underName;
        return $this;
    }
    /**
     * Get BrokerName value
     * @return string|null
     */
    public function getBrokerName()
    {
        return $this->BrokerName;
    }
    /**
     * Set BrokerName value
     * @param string $brokerName
     * @return \Ews\StructType\EwsFlightReservationEntityType
     */
    public function setBrokerName($brokerName = null)
    {
        // validation for constraint: string
        if (!is_null($brokerName) && !is_string($brokerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brokerName, true), gettype($brokerName)), __LINE__);
        }
        $this->BrokerName = $brokerName;
        return $this;
    }
    /**
     * Get BrokerPhone value
     * @return string|null
     */
    public function getBrokerPhone()
    {
        return $this->BrokerPhone;
    }
    /**
     * Set BrokerPhone value
     * @param string $brokerPhone
     * @return \Ews\StructType\EwsFlightReservationEntityType
     */
    public function setBrokerPhone($brokerPhone = null)
    {
        // validation for constraint: string
        if (!is_null($brokerPhone) && !is_string($brokerPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brokerPhone, true), gettype($brokerPhone)), __LINE__);
        }
        $this->BrokerPhone = $brokerPhone;
        return $this;
    }
    /**
     * Get Flights value
     * @return \Ews\ArrayType\EwsArrayOfFlightsType|null
     */
    public function getFlights()
    {
        return $this->Flights;
    }
    /**
     * Set Flights value
     * @param \Ews\ArrayType\EwsArrayOfFlightsType $flights
     * @return \Ews\StructType\EwsFlightReservationEntityType
     */
    public function setFlights(\Ews\ArrayType\EwsArrayOfFlightsType $flights = null)
    {
        $this->Flights = $flights;
        return $this;
    }
}
