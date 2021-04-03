<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $ReservationId = null;
    /**
     * The ReservationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReservationStatus = null;
    /**
     * The UnderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UnderName = null;
    /**
     * The BrokerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BrokerName = null;
    /**
     * The BrokerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BrokerPhone = null;
    /**
     * The Flights
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFlightsType|null
     */
    protected ?\ArrayType\EwsArrayOfFlightsType $Flights = null;
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
     * @param \ArrayType\EwsArrayOfFlightsType $flights
     */
    public function __construct(?string $reservationId = null, ?string $reservationStatus = null, ?string $underName = null, ?string $brokerName = null, ?string $brokerPhone = null, ?\ArrayType\EwsArrayOfFlightsType $flights = null)
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
    public function getReservationId(): ?string
    {
        return $this->ReservationId;
    }
    /**
     * Set ReservationId value
     * @param string $reservationId
     * @return \StructType\EwsFlightReservationEntityType
     */
    public function setReservationId(?string $reservationId = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationId) && !is_string($reservationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationId, true), gettype($reservationId)), __LINE__);
        }
        $this->ReservationId = $reservationId;
        
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus(): ?string
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \StructType\EwsFlightReservationEntityType
     */
    public function setReservationStatus(?string $reservationStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationStatus, true), gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
        
        return $this;
    }
    /**
     * Get UnderName value
     * @return string|null
     */
    public function getUnderName(): ?string
    {
        return $this->UnderName;
    }
    /**
     * Set UnderName value
     * @param string $underName
     * @return \StructType\EwsFlightReservationEntityType
     */
    public function setUnderName(?string $underName = null): self
    {
        // validation for constraint: string
        if (!is_null($underName) && !is_string($underName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($underName, true), gettype($underName)), __LINE__);
        }
        $this->UnderName = $underName;
        
        return $this;
    }
    /**
     * Get BrokerName value
     * @return string|null
     */
    public function getBrokerName(): ?string
    {
        return $this->BrokerName;
    }
    /**
     * Set BrokerName value
     * @param string $brokerName
     * @return \StructType\EwsFlightReservationEntityType
     */
    public function setBrokerName(?string $brokerName = null): self
    {
        // validation for constraint: string
        if (!is_null($brokerName) && !is_string($brokerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brokerName, true), gettype($brokerName)), __LINE__);
        }
        $this->BrokerName = $brokerName;
        
        return $this;
    }
    /**
     * Get BrokerPhone value
     * @return string|null
     */
    public function getBrokerPhone(): ?string
    {
        return $this->BrokerPhone;
    }
    /**
     * Set BrokerPhone value
     * @param string $brokerPhone
     * @return \StructType\EwsFlightReservationEntityType
     */
    public function setBrokerPhone(?string $brokerPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($brokerPhone) && !is_string($brokerPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brokerPhone, true), gettype($brokerPhone)), __LINE__);
        }
        $this->BrokerPhone = $brokerPhone;
        
        return $this;
    }
    /**
     * Get Flights value
     * @return \ArrayType\EwsArrayOfFlightsType|null
     */
    public function getFlights(): ?\ArrayType\EwsArrayOfFlightsType
    {
        return $this->Flights;
    }
    /**
     * Set Flights value
     * @param \ArrayType\EwsArrayOfFlightsType $flights
     * @return \StructType\EwsFlightReservationEntityType
     */
    public function setFlights(?\ArrayType\EwsArrayOfFlightsType $flights = null): self
    {
        $this->Flights = $flights;
        
        return $this;
    }
}
