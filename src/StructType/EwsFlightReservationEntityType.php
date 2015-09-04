<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightReservationEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFlightReservationEntityType extends AbstractStructBase
{
    /**
     * The ReservationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReservationId;
    /**
     * The ReservationStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReservationStatus;
    /**
     * The UnderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnderName;
    /**
     * The BrokerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BrokerName;
    /**
     * The BrokerPhone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BrokerPhone;
    /**
     * The Flights
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFlightReservationEntityType
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
