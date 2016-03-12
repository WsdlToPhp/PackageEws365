<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFlightReservationsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFlightReservationsType extends AbstractStructArrayBase
{
    /**
     * The FlightReservation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFlightReservationEntityType[]
     */
    public $FlightReservation;
    /**
     * Constructor method for ArrayOfFlightReservationsType
     * @uses EwsArrayOfFlightReservationsType::setFlightReservation()
     * @param \Ews\StructType\EwsFlightReservationEntityType[] $flightReservation
     */
    public function __construct(array $flightReservation = array())
    {
        $this
            ->setFlightReservation($flightReservation);
    }
    /**
     * Get FlightReservation value
     * @return \Ews\StructType\EwsFlightReservationEntityType[]|null
     */
    public function getFlightReservation()
    {
        return $this->FlightReservation;
    }
    /**
     * Set FlightReservation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFlightReservationEntityType[] $flightReservation
     * @return \Ews\ArrayType\EwsArrayOfFlightReservationsType
     */
    public function setFlightReservation(array $flightReservation = array())
    {
        foreach ($flightReservation as $arrayOfFlightReservationsTypeFlightReservationItem) {
            // validation for constraint: itemType
            if (!$arrayOfFlightReservationsTypeFlightReservationItem instanceof \Ews\StructType\EwsFlightReservationEntityType) {
                throw new \InvalidArgumentException(sprintf('The FlightReservation property can only contain items of \Ews\StructType\EwsFlightReservationEntityType, "%s" given', is_object($arrayOfFlightReservationsTypeFlightReservationItem) ? get_class($arrayOfFlightReservationsTypeFlightReservationItem) : gettype($arrayOfFlightReservationsTypeFlightReservationItem)), __LINE__);
            }
        }
        $this->FlightReservation = $flightReservation;
        return $this;
    }
    /**
     * Add item to FlightReservation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFlightReservationEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfFlightReservationsType
     */
    public function addToFlightReservation(\Ews\StructType\EwsFlightReservationEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFlightReservationEntityType) {
            throw new \InvalidArgumentException(sprintf('The FlightReservation property can only contain items of \Ews\StructType\EwsFlightReservationEntityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightReservation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFlightReservationEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFlightReservationEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFlightReservationEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFlightReservationEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFlightReservationEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FlightReservation
     */
    public function getAttributeName()
    {
        return 'FlightReservation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFlightReservationsType
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
