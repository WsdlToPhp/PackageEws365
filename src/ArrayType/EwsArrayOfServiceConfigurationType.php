<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceConfigurationType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfServiceConfigurationType extends AbstractStructArrayBase
{
    /**
     * The ConfigurationName
     * @var array
     */
    public $ConfigurationName;
    /**
     * Constructor method for ArrayOfServiceConfigurationType
     * @uses EwsArrayOfServiceConfigurationType::setConfigurationName()
     * @param array $configurationName
     */
    public function __construct(array $configurationName = array())
    {
        $this
            ->setConfigurationName($configurationName);
    }
    /**
     * Get ConfigurationName value
     * @return array
     */
    public function getConfigurationName()
    {
        return $this->ConfigurationName;
    }
    /**
     * Set ConfigurationName value
     * @param array $configurationName
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function setConfigurationName(array $configurationName = array())
    {
        $this->ConfigurationName = $configurationName;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string[]|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string[]|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string[]|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string[]|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string[]|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @uses \Ews\EnumType\EwsServiceConfigurationType::valueIsValid()
     * @param string[] $item
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType|bool
     */
    public function add($item)
    {
        return \Ews\EnumType\EwsServiceConfigurationType::valueIsValid($item) ? parent::add($item) : false;
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConfigurationName
     */
    public function getAttributeName()
    {
        return 'ConfigurationName';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
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
