<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUploadItemsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUploadItemsType extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsUploadItemType[]
     */
    protected array $Item = [];
    /**
     * Constructor method for NonEmptyArrayOfUploadItemsType
     * @uses EwsNonEmptyArrayOfUploadItemsType::setItem()
     * @param \StructType\EwsUploadItemType[] $item
     */
    public function __construct(array $item)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\EwsUploadItemType[]
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
        foreach ($values as $nonEmptyArrayOfUploadItemsTypeItemItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUploadItemsTypeItemItem instanceof \StructType\EwsUploadItemType) {
                $invalidValues[] = is_object($nonEmptyArrayOfUploadItemsTypeItemItem) ? get_class($nonEmptyArrayOfUploadItemsTypeItemItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfUploadItemsTypeItemItem), var_export($nonEmptyArrayOfUploadItemsTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \StructType\EwsUploadItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUploadItemType[] $item
     * @return \ArrayType\EwsNonEmptyArrayOfUploadItemsType
     */
    public function setItem(array $item): self
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
     * @return \StructType\EwsUploadItemType|null
     */
    public function current(): ?\StructType\EwsUploadItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUploadItemType|null
     */
    public function item($index): ?\StructType\EwsUploadItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUploadItemType|null
     */
    public function first(): ?\StructType\EwsUploadItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUploadItemType|null
     */
    public function last(): ?\StructType\EwsUploadItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUploadItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUploadItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUploadItemType $item
     * @return \ArrayType\EwsNonEmptyArrayOfUploadItemsType
     */
    public function add(\StructType\EwsUploadItemType $item): self
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
