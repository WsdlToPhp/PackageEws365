<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsightContextItem ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInsightContextItem extends AbstractStructArrayBase
{
    /**
     * The Context
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsInsightContextItem[]
     */
    protected array $Context = [];
    /**
     * Constructor method for ArrayOfInsightContextItem
     * @uses EwsArrayOfInsightContextItem::setContext()
     * @param \StructType\EwsInsightContextItem[] $context
     */
    public function __construct(array $context = [])
    {
        $this
            ->setContext($context);
    }
    /**
     * Get Context value
     * @return \StructType\EwsInsightContextItem[]
     */
    public function getContext(): array
    {
        return $this->Context;
    }
    /**
     * This method is responsible for validating the values passed to the setContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextForArrayConstraintsFromSetContext(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInsightContextItemContextItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightContextItemContextItem instanceof \StructType\EwsInsightContextItem) {
                $invalidValues[] = is_object($arrayOfInsightContextItemContextItem) ? get_class($arrayOfInsightContextItemContextItem) : sprintf('%s(%s)', gettype($arrayOfInsightContextItemContextItem), var_export($arrayOfInsightContextItemContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Context property can only contain items of type \StructType\EwsInsightContextItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Context value
     * @throws InvalidArgumentException
     * @param \StructType\EwsInsightContextItem[] $context
     * @return \ArrayType\EwsArrayOfInsightContextItem
     */
    public function setContext(array $context = []): self
    {
        // validation for constraint: array
        if ('' !== ($contextArrayErrorMessage = self::validateContextForArrayConstraintsFromSetContext($context))) {
            throw new InvalidArgumentException($contextArrayErrorMessage, __LINE__);
        }
        $this->Context = $context;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsInsightContextItem|null
     */
    public function current(): ?\StructType\EwsInsightContextItem
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsInsightContextItem|null
     */
    public function item($index): ?\StructType\EwsInsightContextItem
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsInsightContextItem|null
     */
    public function first(): ?\StructType\EwsInsightContextItem
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsInsightContextItem|null
     */
    public function last(): ?\StructType\EwsInsightContextItem
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsInsightContextItem|null
     */
    public function offsetGet($offset): ?\StructType\EwsInsightContextItem
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsInsightContextItem $item
     * @return \ArrayType\EwsArrayOfInsightContextItem
     */
    public function add(\StructType\EwsInsightContextItem $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Context
     */
    public function getAttributeName(): string
    {
        return 'Context';
    }
}
