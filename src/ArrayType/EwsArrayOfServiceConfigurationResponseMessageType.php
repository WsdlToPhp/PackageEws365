<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceConfigurationResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfServiceConfigurationResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The ServiceConfigurationResponseMessageType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsServiceConfigurationResponseMessageType[]
     */
    public $ServiceConfigurationResponseMessageType;
    /**
     * Constructor method for ArrayOfServiceConfigurationResponseMessageType
     * @uses
     * EwsArrayOfServiceConfigurationResponseMessageType::setServiceConfigurationRespon
     * seMessageType()
     * @param \Ews\StructType\EwsServiceConfigurationResponseMessageType[]
     * $serviceConfigurationResponseMessageType
     */
    public function __construct(array $serviceConfigurationResponseMessageType = array())
    {
        $this
            ->setServiceConfigurationResponseMessageType($serviceConfigurationResponseMessageType);
    }
    /**
     * Get ServiceConfigurationResponseMessageType value
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType[]
     */
    public function getServiceConfigurationResponseMessageType()
    {
        return $this->ServiceConfigurationResponseMessageType;
    }
    /**
     * Set ServiceConfigurationResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsServiceConfigurationResponseMessageType[]
     * $serviceConfigurationResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function setServiceConfigurationResponseMessageType(array $serviceConfigurationResponseMessageType = array())
    {
        foreach ($serviceConfigurationResponseMessageType as $arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem instanceof \Ews\StructType\EwsServiceConfigurationResponseMessageType) {
                throw new \InvalidArgumentException(sprintf('The ServiceConfigurationResponseMessageType property can only contain items of \Ews\StructType\EwsServiceConfigurationResponseMessageType, "%s" given', is_object($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) ? get_class($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) : gettype($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem)), __LINE__);
            }
        }
        $this->ServiceConfigurationResponseMessageType = $serviceConfigurationResponseMessageType;
        return $this;
    }
    /**
     * Add item to ServiceConfigurationResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsServiceConfigurationResponseMessageType $item
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function addToServiceConfigurationResponseMessageType(\Ews\StructType\EwsServiceConfigurationResponseMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsServiceConfigurationResponseMessageType) {
            throw new \InvalidArgumentException(sprintf('The ServiceConfigurationResponseMessageType property can only contain items of \Ews\StructType\EwsServiceConfigurationResponseMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceConfigurationResponseMessageType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceConfigurationResponseMessageType
     */
    public function getAttributeName()
    {
        return 'ServiceConfigurationResponseMessageType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
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
