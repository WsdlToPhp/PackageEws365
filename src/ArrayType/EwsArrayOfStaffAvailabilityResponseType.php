<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStaffAvailabilityResponseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStaffAvailabilityResponseType extends AbstractStructArrayBase
{
    /**
     * The Response
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsStaffAvailabilityResponseType[]
     */
    public $Response;
    /**
     * Constructor method for ArrayOfStaffAvailabilityResponseType
     * @uses EwsArrayOfStaffAvailabilityResponseType::setResponse()
     * @param \Ews\StructType\EwsStaffAvailabilityResponseType[] $response
     */
    public function __construct(array $response = array())
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType[]|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStaffAvailabilityResponseType[] $response
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function setResponse(array $response = array())
    {
        foreach ($response as $arrayOfStaffAvailabilityResponseTypeResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfStaffAvailabilityResponseTypeResponseItem instanceof \Ews\StructType\EwsStaffAvailabilityResponseType) {
                throw new \InvalidArgumentException(sprintf('The Response property can only contain items of \Ews\StructType\EwsStaffAvailabilityResponseType, "%s" given', is_object($arrayOfStaffAvailabilityResponseTypeResponseItem) ? get_class($arrayOfStaffAvailabilityResponseTypeResponseItem) : gettype($arrayOfStaffAvailabilityResponseTypeResponseItem)), __LINE__);
            }
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Add item to Response value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStaffAvailabilityResponseType $item
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function addToResponse(\Ews\StructType\EwsStaffAvailabilityResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsStaffAvailabilityResponseType) {
            throw new \InvalidArgumentException(sprintf('The Response property can only contain items of \Ews\StructType\EwsStaffAvailabilityResponseType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Response[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Response
     */
    public function getAttributeName()
    {
        return 'Response';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
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
