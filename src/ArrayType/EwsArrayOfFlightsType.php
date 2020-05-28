<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFlightsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFlightsType extends AbstractStructArrayBase
{
    /**
     * The Flight
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFlightEntityType[]
     */
    public $Flight;
    /**
     * Constructor method for ArrayOfFlightsType
     * @uses EwsArrayOfFlightsType::setFlight()
     * @param \Ews\StructType\EwsFlightEntityType[] $flight
     */
    public function __construct(array $flight = array())
    {
        $this
            ->setFlight($flight);
    }
    /**
     * Get Flight value
     * @return \Ews\StructType\EwsFlightEntityType[]|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * This method is responsible for validating the values passed to the setFlight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlight method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightForArrayConstraintsFromSetFlight(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFlightsTypeFlightItem) {
            // validation for constraint: itemType
            if (!$arrayOfFlightsTypeFlightItem instanceof \Ews\StructType\EwsFlightEntityType) {
                $invalidValues[] = is_object($arrayOfFlightsTypeFlightItem) ? get_class($arrayOfFlightsTypeFlightItem) : sprintf('%s(%s)', gettype($arrayOfFlightsTypeFlightItem), var_export($arrayOfFlightsTypeFlightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Flight property can only contain items of type \Ews\StructType\EwsFlightEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Flight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFlightEntityType[] $flight
     * @return \Ews\ArrayType\EwsArrayOfFlightsType
     */
    public function setFlight(array $flight = array())
    {
        // validation for constraint: array
        if ('' !== ($flightArrayErrorMessage = self::validateFlightForArrayConstraintsFromSetFlight($flight))) {
            throw new \InvalidArgumentException($flightArrayErrorMessage, __LINE__);
        }
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Add item to Flight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFlightEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfFlightsType
     */
    public function addToFlight(\Ews\StructType\EwsFlightEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFlightEntityType) {
            throw new \InvalidArgumentException(sprintf('The Flight property can only contain items of type \Ews\StructType\EwsFlightEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Flight[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFlightEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFlightEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFlightEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFlightEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFlightEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Flight
     */
    public function getAttributeName()
    {
        return 'Flight';
    }
}
