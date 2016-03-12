<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscoverySearchConfigurationType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of discovery search configuration.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDiscoverySearchConfigurationType extends AbstractStructArrayBase
{
    /**
     * The DiscoverySearchConfiguration
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDiscoverySearchConfigurationType[]
     */
    public $DiscoverySearchConfiguration;
    /**
     * Constructor method for ArrayOfDiscoverySearchConfigurationType
     * @uses
     * EwsArrayOfDiscoverySearchConfigurationType::setDiscoverySearchConfiguration()
     * @param \Ews\StructType\EwsDiscoverySearchConfigurationType[]
     * $discoverySearchConfiguration
     */
    public function __construct(array $discoverySearchConfiguration = array())
    {
        $this
            ->setDiscoverySearchConfiguration($discoverySearchConfiguration);
    }
    /**
     * Get DiscoverySearchConfiguration value
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType[]|null
     */
    public function getDiscoverySearchConfiguration()
    {
        return $this->DiscoverySearchConfiguration;
    }
    /**
     * Set DiscoverySearchConfiguration value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDiscoverySearchConfigurationType[]
     * $discoverySearchConfiguration
     * @return \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public function setDiscoverySearchConfiguration(array $discoverySearchConfiguration = array())
    {
        foreach ($discoverySearchConfiguration as $arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem instanceof \Ews\StructType\EwsDiscoverySearchConfigurationType) {
                throw new \InvalidArgumentException(sprintf('The DiscoverySearchConfiguration property can only contain items of \Ews\StructType\EwsDiscoverySearchConfigurationType, "%s" given', is_object($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) ? get_class($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) : gettype($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem)), __LINE__);
            }
        }
        $this->DiscoverySearchConfiguration = $discoverySearchConfiguration;
        return $this;
    }
    /**
     * Add item to DiscoverySearchConfiguration value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDiscoverySearchConfigurationType $item
     * @return \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public function addToDiscoverySearchConfiguration(\Ews\StructType\EwsDiscoverySearchConfigurationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsDiscoverySearchConfigurationType) {
            throw new \InvalidArgumentException(sprintf('The DiscoverySearchConfiguration property can only contain items of \Ews\StructType\EwsDiscoverySearchConfigurationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DiscoverySearchConfiguration[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscoverySearchConfiguration
     */
    public function getAttributeName()
    {
        return 'DiscoverySearchConfiguration';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
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
