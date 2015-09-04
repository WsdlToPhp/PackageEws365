<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceConfigurationResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfServiceConfigurationResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The ServiceConfigurationResponseMessageType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $ServiceConfigurationResponseMessageType;
    /**
     * Constructor method for ArrayOfServiceConfigurationResponseMessageType
     * @uses
     * EwsArrayOfServiceConfigurationResponseMessageType::setServiceConfigurationRespon
     * seMessageType()
     * @param array $serviceConfigurationResponseMessageType
     */
    public function __construct(array $serviceConfigurationResponseMessageType = array())
    {
        $this
            ->setServiceConfigurationResponseMessageType($serviceConfigurationResponseMessageType);
    }
    /**
     * Get ServiceConfigurationResponseMessageType value
     * @return array
     */
    public function getServiceConfigurationResponseMessageType()
    {
        return $this->ServiceConfigurationResponseMessageType;
    }
    /**
     * Set ServiceConfigurationResponseMessageType value
     * @param array $serviceConfigurationResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function setServiceConfigurationResponseMessageType(array $serviceConfigurationResponseMessageType = array())
    {
        $this->ServiceConfigurationResponseMessageType = $serviceConfigurationResponseMessageType;
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
