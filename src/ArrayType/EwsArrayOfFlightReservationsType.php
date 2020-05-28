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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setFlightReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightReservationForArrayConstraintsFromSetFlightReservation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFlightReservationsTypeFlightReservationItem) {
            // validation for constraint: itemType
            if (!$arrayOfFlightReservationsTypeFlightReservationItem instanceof \Ews\StructType\EwsFlightReservationEntityType) {
                $invalidValues[] = is_object($arrayOfFlightReservationsTypeFlightReservationItem) ? get_class($arrayOfFlightReservationsTypeFlightReservationItem) : sprintf('%s(%s)', gettype($arrayOfFlightReservationsTypeFlightReservationItem), var_export($arrayOfFlightReservationsTypeFlightReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightReservation property can only contain items of type \Ews\StructType\EwsFlightReservationEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FlightReservation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFlightReservationEntityType[] $flightReservation
     * @return \Ews\ArrayType\EwsArrayOfFlightReservationsType
     */
    public function setFlightReservation(array $flightReservation = array())
    {
        // validation for constraint: array
        if ('' !== ($flightReservationArrayErrorMessage = self::validateFlightReservationForArrayConstraintsFromSetFlightReservation($flightReservation))) {
            throw new \InvalidArgumentException($flightReservationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The FlightReservation property can only contain items of type \Ews\StructType\EwsFlightReservationEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
