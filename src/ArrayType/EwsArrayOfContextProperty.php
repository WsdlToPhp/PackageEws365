<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContextProperty ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfContextProperty extends AbstractStructArrayBase
{
    /**
     * The ContextProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsContextPropertyType[]
     */
    protected array $ContextProperty = [];
    /**
     * Constructor method for ArrayOfContextProperty
     * @uses EwsArrayOfContextProperty::setContextProperty()
     * @param \StructType\EwsContextPropertyType[] $contextProperty
     */
    public function __construct(array $contextProperty)
    {
        $this
            ->setContextProperty($contextProperty);
    }
    /**
     * Get ContextProperty value
     * @return \StructType\EwsContextPropertyType[]
     */
    public function getContextProperty(): array
    {
        return $this->ContextProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setContextProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContextProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextPropertyForArrayConstraintsFromSetContextProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContextPropertyContextPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfContextPropertyContextPropertyItem instanceof \StructType\EwsContextPropertyType) {
                $invalidValues[] = is_object($arrayOfContextPropertyContextPropertyItem) ? get_class($arrayOfContextPropertyContextPropertyItem) : sprintf('%s(%s)', gettype($arrayOfContextPropertyContextPropertyItem), var_export($arrayOfContextPropertyContextPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContextProperty property can only contain items of type \StructType\EwsContextPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContextProperty value
     * @throws InvalidArgumentException
     * @param \StructType\EwsContextPropertyType[] $contextProperty
     * @return \ArrayType\EwsArrayOfContextProperty
     */
    public function setContextProperty(array $contextProperty): self
    {
        // validation for constraint: array
        if ('' !== ($contextPropertyArrayErrorMessage = self::validateContextPropertyForArrayConstraintsFromSetContextProperty($contextProperty))) {
            throw new InvalidArgumentException($contextPropertyArrayErrorMessage, __LINE__);
        }
        $this->ContextProperty = $contextProperty;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsContextPropertyType|null
     */
    public function current(): ?\StructType\EwsContextPropertyType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsContextPropertyType|null
     */
    public function item($index): ?\StructType\EwsContextPropertyType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsContextPropertyType|null
     */
    public function first(): ?\StructType\EwsContextPropertyType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsContextPropertyType|null
     */
    public function last(): ?\StructType\EwsContextPropertyType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsContextPropertyType|null
     */
    public function offsetGet($offset): ?\StructType\EwsContextPropertyType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsContextPropertyType $item
     * @return \ArrayType\EwsArrayOfContextProperty
     */
    public function add(\StructType\EwsContextPropertyType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContextProperty
     */
    public function getAttributeName(): string
    {
        return 'ContextProperty';
    }
}
