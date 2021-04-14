<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsServiceConfigurationResponseMessageType[]
     */
    protected array $ServiceConfigurationResponseMessageType = [];
    /**
     * Constructor method for ArrayOfServiceConfigurationResponseMessageType
     * @uses EwsArrayOfServiceConfigurationResponseMessageType::setServiceConfigurationResponseMessageType()
     * @param \StructType\EwsServiceConfigurationResponseMessageType[] $serviceConfigurationResponseMessageType
     */
    public function __construct(array $serviceConfigurationResponseMessageType)
    {
        $this
            ->setServiceConfigurationResponseMessageType($serviceConfigurationResponseMessageType);
    }
    /**
     * Get ServiceConfigurationResponseMessageType value
     * @return \StructType\EwsServiceConfigurationResponseMessageType[]
     */
    public function getServiceConfigurationResponseMessageType(): array
    {
        return $this->ServiceConfigurationResponseMessageType;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceConfigurationResponseMessageType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceConfigurationResponseMessageType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceConfigurationResponseMessageTypeForArrayConstraintsFromSetServiceConfigurationResponseMessageType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem instanceof \StructType\EwsServiceConfigurationResponseMessageType) {
                $invalidValues[] = is_object($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) ? get_class($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) : sprintf('%s(%s)', gettype($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem), var_export($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceConfigurationResponseMessageType property can only contain items of type \StructType\EwsServiceConfigurationResponseMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceConfigurationResponseMessageType value
     * @throws InvalidArgumentException
     * @param \StructType\EwsServiceConfigurationResponseMessageType[] $serviceConfigurationResponseMessageType
     * @return \ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function setServiceConfigurationResponseMessageType(array $serviceConfigurationResponseMessageType): self
    {
        // validation for constraint: array
        if ('' !== ($serviceConfigurationResponseMessageTypeArrayErrorMessage = self::validateServiceConfigurationResponseMessageTypeForArrayConstraintsFromSetServiceConfigurationResponseMessageType($serviceConfigurationResponseMessageType))) {
            throw new InvalidArgumentException($serviceConfigurationResponseMessageTypeArrayErrorMessage, __LINE__);
        }
        $this->ServiceConfigurationResponseMessageType = $serviceConfigurationResponseMessageType;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsServiceConfigurationResponseMessageType|null
     */
    public function current(): ?\StructType\EwsServiceConfigurationResponseMessageType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsServiceConfigurationResponseMessageType|null
     */
    public function item($index): ?\StructType\EwsServiceConfigurationResponseMessageType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsServiceConfigurationResponseMessageType|null
     */
    public function first(): ?\StructType\EwsServiceConfigurationResponseMessageType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsServiceConfigurationResponseMessageType|null
     */
    public function last(): ?\StructType\EwsServiceConfigurationResponseMessageType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsServiceConfigurationResponseMessageType|null
     */
    public function offsetGet($offset): ?\StructType\EwsServiceConfigurationResponseMessageType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsServiceConfigurationResponseMessageType $item
     * @return \ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsServiceConfigurationResponseMessageType) {
            throw new InvalidArgumentException(sprintf('The ServiceConfigurationResponseMessageType property can only contain items of type \StructType\EwsServiceConfigurationResponseMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceConfigurationResponseMessageType
     */
    public function getAttributeName(): string
    {
        return 'ServiceConfigurationResponseMessageType';
    }
}
