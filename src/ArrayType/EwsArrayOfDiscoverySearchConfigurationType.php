<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsDiscoverySearchConfigurationType[]
     */
    protected array $DiscoverySearchConfiguration = [];
    /**
     * Constructor method for ArrayOfDiscoverySearchConfigurationType
     * @uses EwsArrayOfDiscoverySearchConfigurationType::setDiscoverySearchConfiguration()
     * @param \StructType\EwsDiscoverySearchConfigurationType[] $discoverySearchConfiguration
     */
    public function __construct(array $discoverySearchConfiguration = [])
    {
        $this
            ->setDiscoverySearchConfiguration($discoverySearchConfiguration);
    }
    /**
     * Get DiscoverySearchConfiguration value
     * @return \StructType\EwsDiscoverySearchConfigurationType[]
     */
    public function getDiscoverySearchConfiguration(): array
    {
        return $this->DiscoverySearchConfiguration;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscoverySearchConfiguration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscoverySearchConfiguration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscoverySearchConfigurationForArrayConstraintsFromSetDiscoverySearchConfiguration(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem instanceof \StructType\EwsDiscoverySearchConfigurationType) {
                $invalidValues[] = is_object($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) ? get_class($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem) : sprintf('%s(%s)', gettype($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem), var_export($arrayOfDiscoverySearchConfigurationTypeDiscoverySearchConfigurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscoverySearchConfiguration property can only contain items of type \StructType\EwsDiscoverySearchConfigurationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscoverySearchConfiguration value
     * @throws InvalidArgumentException
     * @param \StructType\EwsDiscoverySearchConfigurationType[] $discoverySearchConfiguration
     * @return \ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public function setDiscoverySearchConfiguration(array $discoverySearchConfiguration = []): self
    {
        // validation for constraint: array
        if ('' !== ($discoverySearchConfigurationArrayErrorMessage = self::validateDiscoverySearchConfigurationForArrayConstraintsFromSetDiscoverySearchConfiguration($discoverySearchConfiguration))) {
            throw new InvalidArgumentException($discoverySearchConfigurationArrayErrorMessage, __LINE__);
        }
        $this->DiscoverySearchConfiguration = $discoverySearchConfiguration;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function current(): ?\StructType\EwsDiscoverySearchConfigurationType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function item($index): ?\StructType\EwsDiscoverySearchConfigurationType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function first(): ?\StructType\EwsDiscoverySearchConfigurationType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function last(): ?\StructType\EwsDiscoverySearchConfigurationType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsDiscoverySearchConfigurationType|null
     */
    public function offsetGet($offset): ?\StructType\EwsDiscoverySearchConfigurationType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsDiscoverySearchConfigurationType $item
     * @return \ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsDiscoverySearchConfigurationType) {
            throw new InvalidArgumentException(sprintf('The DiscoverySearchConfiguration property can only contain items of type \StructType\EwsDiscoverySearchConfigurationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscoverySearchConfiguration
     */
    public function getAttributeName(): string
    {
        return 'DiscoverySearchConfiguration';
    }
}
