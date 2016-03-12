<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingService ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBookingService extends AbstractStructArrayBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBookingServiceType[]
     */
    public $Service;
    /**
     * Constructor method for ArrayOfBookingService
     * @uses EwsArrayOfBookingService::setService()
     * @param \Ews\StructType\EwsBookingServiceType[] $service
     */
    public function __construct(array $service = array())
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \Ews\StructType\EwsBookingServiceType[]|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingServiceType[] $service
     * @return \Ews\ArrayType\EwsArrayOfBookingService
     */
    public function setService(array $service = array())
    {
        foreach ($service as $arrayOfBookingServiceServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingServiceServiceItem instanceof \Ews\StructType\EwsBookingServiceType) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \Ews\StructType\EwsBookingServiceType, "%s" given', is_object($arrayOfBookingServiceServiceItem) ? get_class($arrayOfBookingServiceServiceItem) : gettype($arrayOfBookingServiceServiceItem)), __LINE__);
            }
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingServiceType $item
     * @return \Ews\ArrayType\EwsArrayOfBookingService
     */
    public function addToService(\Ews\StructType\EwsBookingServiceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsBookingServiceType) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \Ews\StructType\EwsBookingServiceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Service[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsBookingServiceType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsBookingServiceType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsBookingServiceType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsBookingServiceType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsBookingServiceType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Service
     */
    public function getAttributeName()
    {
        return 'Service';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfBookingService
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
