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
     * Meta informations extracted from the WSDL
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
     * Set Flight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFlightEntityType[] $flight
     * @return \Ews\ArrayType\EwsArrayOfFlightsType
     */
    public function setFlight(array $flight = array())
    {
        foreach ($flight as $arrayOfFlightsTypeFlightItem) {
            // validation for constraint: itemType
            if (!$arrayOfFlightsTypeFlightItem instanceof \Ews\StructType\EwsFlightEntityType) {
                throw new \InvalidArgumentException(sprintf('The Flight property can only contain items of \Ews\StructType\EwsFlightEntityType, "%s" given', is_object($arrayOfFlightsTypeFlightItem) ? get_class($arrayOfFlightsTypeFlightItem) : gettype($arrayOfFlightsTypeFlightItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Flight property can only contain items of \Ews\StructType\EwsFlightEntityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFlightsType
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
