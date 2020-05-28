<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscoverySearchConfigurationType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of discovery search configuration.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDiscoverySearchConfigurationType extends AbstractStructArrayBase
{
    /**
     * The DiscoverySearchConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDiscoverySearchConfigurationType[]
     */
    public $DiscoverySearchConfiguration;
    /**
     * Constructor method for ArrayOfDiscoverySearchConfigurationType
     * @uses EwsArrayOfDiscoverySearchConfigurationType::setDiscoverySearchConfiguration()
     * @param \Ews\StructType\EwsDiscoverySearchConfigurationType[] $discoverySearchConfiguration
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
     * This method is responsible for validating the values passed to the setDiscoverySearchConfiguration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscoverySearchConfiguration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscoverySearchConfigurationForArrayConstraintsFromSetDiscoverySearchConfiguration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem instanceof \Ews\StructType\EwsDiscoverySearchConfigurationType) {
                $invalidValues[] = is_object($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) ? get_class($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) : sprintf('%s(%s)', gettype($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem), var_export($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscoverySearchConfiguration property can only contain items of type \Ews\StructType\EwsDiscoverySearchConfigurationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscoverySearchConfiguration value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDiscoverySearchConfigurationType[] $discoverySearchConfiguration
     * @return \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public function setDiscoverySearchConfiguration(array $discoverySearchConfiguration = array())
    {
        // validation for constraint: array
        if ('' !== ($discoverySearchConfigurationArrayErrorMessage = self::validateDiscoverySearchConfigurationForArrayConstraintsFromSetDiscoverySearchConfiguration($discoverySearchConfiguration))) {
            throw new \InvalidArgumentException($discoverySearchConfigurationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The DiscoverySearchConfiguration property can only contain items of type \Ews\StructType\EwsDiscoverySearchConfigurationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
