<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceConfigurationType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfServiceConfigurationType extends AbstractStructArrayBase
{
    /**
     * The ConfigurationName
     * @var string
     */
    public $ConfigurationName;
    /**
     * Constructor method for ArrayOfServiceConfigurationType
     * @uses EwsArrayOfServiceConfigurationType::setConfigurationName()
     * @param string $configurationName
     */
    public function __construct($configurationName = null)
    {
        $this
            ->setConfigurationName($configurationName);
    }
    /**
     * Get ConfigurationName value
     * @return string|null
     */
    public function getConfigurationName()
    {
        return $this->ConfigurationName;
    }
    /**
     * Set ConfigurationName value
     * @param string $configurationName
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function setConfigurationName($configurationName = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsServiceConfigurationType::valueIsValid($configurationName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $configurationName, implode(', ', \Ews\EnumType\EwsServiceConfigurationType::getValidValues())), __LINE__);
        }
        $this->ConfigurationName = $configurationName;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Ews\EnumType\EwsServiceConfigurationType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function add($item)
    {
        if (!\Ews\EnumType\EwsServiceConfigurationType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsServiceConfigurationType::getValidValues())), __LINE__);
        }
        return parent::add($item);
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
