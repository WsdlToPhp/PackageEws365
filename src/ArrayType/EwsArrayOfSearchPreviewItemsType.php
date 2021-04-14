<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchPreviewItemsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of search preview item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchPreviewItemsType extends AbstractStructArrayBase
{
    /**
     * The SearchPreviewItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSearchPreviewItemType[]
     */
    protected array $SearchPreviewItem = [];
    /**
     * Constructor method for ArrayOfSearchPreviewItemsType
     * @uses EwsArrayOfSearchPreviewItemsType::setSearchPreviewItem()
     * @param \StructType\EwsSearchPreviewItemType[] $searchPreviewItem
     */
    public function __construct(array $searchPreviewItem = [])
    {
        $this
            ->setSearchPreviewItem($searchPreviewItem);
    }
    /**
     * Get SearchPreviewItem value
     * @return \StructType\EwsSearchPreviewItemType[]
     */
    public function getSearchPreviewItem(): array
    {
        return $this->SearchPreviewItem;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchPreviewItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchPreviewItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchPreviewItemForArrayConstraintsFromSetSearchPreviewItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchPreviewItemsTypeSearchPreviewItemItem instanceof \StructType\EwsSearchPreviewItemType) {
                $invalidValues[] = is_object($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) ? get_class($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem) : sprintf('%s(%s)', gettype($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem), var_export($arrayOfSearchPreviewItemsTypeSearchPreviewItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchPreviewItem property can only contain items of type \StructType\EwsSearchPreviewItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchPreviewItem value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSearchPreviewItemType[] $searchPreviewItem
     * @return \ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public function setSearchPreviewItem(array $searchPreviewItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($searchPreviewItemArrayErrorMessage = self::validateSearchPreviewItemForArrayConstraintsFromSetSearchPreviewItem($searchPreviewItem))) {
            throw new InvalidArgumentException($searchPreviewItemArrayErrorMessage, __LINE__);
        }
        $this->SearchPreviewItem = $searchPreviewItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSearchPreviewItemType|null
     */
    public function current(): ?\StructType\EwsSearchPreviewItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSearchPreviewItemType|null
     */
    public function item($index): ?\StructType\EwsSearchPreviewItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSearchPreviewItemType|null
     */
    public function first(): ?\StructType\EwsSearchPreviewItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSearchPreviewItemType|null
     */
    public function last(): ?\StructType\EwsSearchPreviewItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSearchPreviewItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSearchPreviewItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSearchPreviewItemType $item
     * @return \ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSearchPreviewItemType) {
            throw new InvalidArgumentException(sprintf('The SearchPreviewItem property can only contain items of type \StructType\EwsSearchPreviewItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchPreviewItem
     */
    public function getAttributeName(): string
    {
        return 'SearchPreviewItem';
    }
}
