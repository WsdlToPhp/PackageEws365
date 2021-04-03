<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompanyInsightValue ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfCompanyInsightValue extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsCompanyInsightValue[]
     */
    protected array $Item = [];
    /**
     * Constructor method for ArrayOfCompanyInsightValue
     * @uses EwsArrayOfCompanyInsightValue::setItem()
     * @param \StructType\EwsCompanyInsightValue[] $item
     */
    public function __construct(array $item = [])
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\EwsCompanyInsightValue[]
     */
    public function getItem(): array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCompanyInsightValueItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompanyInsightValueItemItem instanceof \StructType\EwsCompanyInsightValue) {
                $invalidValues[] = is_object($arrayOfCompanyInsightValueItemItem) ? get_class($arrayOfCompanyInsightValueItemItem) : sprintf('%s(%s)', gettype($arrayOfCompanyInsightValueItemItem), var_export($arrayOfCompanyInsightValueItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \StructType\EwsCompanyInsightValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \StructType\EwsCompanyInsightValue[] $item
     * @return \ArrayType\EwsArrayOfCompanyInsightValue
     */
    public function setItem(array $item = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsCompanyInsightValue|null
     */
    public function current(): ?\StructType\EwsCompanyInsightValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCompanyInsightValue|null
     */
    public function item($index): ?\StructType\EwsCompanyInsightValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCompanyInsightValue|null
     */
    public function first(): ?\StructType\EwsCompanyInsightValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCompanyInsightValue|null
     */
    public function last(): ?\StructType\EwsCompanyInsightValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCompanyInsightValue|null
     */
    public function offsetGet($offset): ?\StructType\EwsCompanyInsightValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCompanyInsightValue $item
     * @return \ArrayType\EwsArrayOfCompanyInsightValue
     */
    public function add(\StructType\EwsCompanyInsightValue $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Item
     */
    public function getAttributeName(): string
    {
        return 'Item';
    }
}
