<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfItemIdsType extends AbstractStructArrayBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType[]
     */
    protected array $ItemId = [];
    /**
     * Constructor method for ArrayOfItemIdsType
     * @uses EwsArrayOfItemIdsType::setItemId()
     * @param \StructType\EwsItemIdType[] $itemId
     */
    public function __construct(array $itemId = [])
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType[]
     */
    public function getItemId(): array
    {
        return $this->ItemId;
    }
    /**
     * This method is responsible for validating the values passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdForArrayConstraintsFromSetItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfItemIdsTypeItemIdItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIdsTypeItemIdItem instanceof \StructType\EwsItemIdType) {
                $invalidValues[] = is_object($arrayOfItemIdsTypeItemIdItem) ? get_class($arrayOfItemIdsTypeItemIdItem) : sprintf('%s(%s)', gettype($arrayOfItemIdsTypeItemIdItem), var_export($arrayOfItemIdsTypeItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemId property can only contain items of type \StructType\EwsItemIdType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemId value
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemIdType[] $itemId
     * @return \ArrayType\EwsArrayOfItemIdsType
     */
    public function setItemId(array $itemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
        }
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsItemIdType|null
     */
    public function current(): ?\StructType\EwsItemIdType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsItemIdType|null
     */
    public function item($index): ?\StructType\EwsItemIdType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsItemIdType|null
     */
    public function first(): ?\StructType\EwsItemIdType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsItemIdType|null
     */
    public function last(): ?\StructType\EwsItemIdType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsItemIdType|null
     */
    public function offsetGet($offset): ?\StructType\EwsItemIdType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemIdType $item
     * @return \ArrayType\EwsArrayOfItemIdsType
     */
    public function add(\StructType\EwsItemIdType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemId
     */
    public function getAttributeName(): string
    {
        return 'ItemId';
    }
}
