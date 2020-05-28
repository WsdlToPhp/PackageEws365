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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintsFromSetService(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingServiceServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingServiceServiceItem instanceof \Ews\StructType\EwsBookingServiceType) {
                $invalidValues[] = is_object($arrayOfBookingServiceServiceItem) ? get_class($arrayOfBookingServiceServiceItem) : sprintf('%s(%s)', gettype($arrayOfBookingServiceServiceItem), var_export($arrayOfBookingServiceServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \Ews\StructType\EwsBookingServiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Service value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingServiceType[] $service
     * @return \Ews\ArrayType\EwsArrayOfBookingService
     */
    public function setService(array $service = array())
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintsFromSetService($service))) {
            throw new \InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of type \Ews\StructType\EwsBookingServiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
