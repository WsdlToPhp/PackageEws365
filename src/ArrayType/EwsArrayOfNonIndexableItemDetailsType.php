<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNonIndexableItemDetailsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of non indexable item details.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfNonIndexableItemDetailsType extends AbstractStructArrayBase
{
    /**
     * The NonIndexableItemDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsNonIndexableItemDetailType[]
     */
    protected array $NonIndexableItemDetail = [];
    /**
     * Constructor method for ArrayOfNonIndexableItemDetailsType
     * @uses EwsArrayOfNonIndexableItemDetailsType::setNonIndexableItemDetail()
     * @param \StructType\EwsNonIndexableItemDetailType[] $nonIndexableItemDetail
     */
    public function __construct(array $nonIndexableItemDetail = [])
    {
        $this
            ->setNonIndexableItemDetail($nonIndexableItemDetail);
    }
    /**
     * Get NonIndexableItemDetail value
     * @return \StructType\EwsNonIndexableItemDetailType[]
     */
    public function getNonIndexableItemDetail(): array
    {
        return $this->NonIndexableItemDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setNonIndexableItemDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNonIndexableItemDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNonIndexableItemDetailForArrayConstraintsFromSetNonIndexableItemDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem instanceof \StructType\EwsNonIndexableItemDetailType) {
                $invalidValues[] = is_object($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) ? get_class($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem) : sprintf('%s(%s)', gettype($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem), var_export($arrayOfNonIndexableItemDetailsTypeNonIndexableItemDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NonIndexableItemDetail property can only contain items of type \StructType\EwsNonIndexableItemDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NonIndexableItemDetail value
     * @throws InvalidArgumentException
     * @param \StructType\EwsNonIndexableItemDetailType[] $nonIndexableItemDetail
     * @return \ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public function setNonIndexableItemDetail(array $nonIndexableItemDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($nonIndexableItemDetailArrayErrorMessage = self::validateNonIndexableItemDetailForArrayConstraintsFromSetNonIndexableItemDetail($nonIndexableItemDetail))) {
            throw new InvalidArgumentException($nonIndexableItemDetailArrayErrorMessage, __LINE__);
        }
        $this->NonIndexableItemDetail = $nonIndexableItemDetail;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsNonIndexableItemDetailType|null
     */
    public function current(): ?\StructType\EwsNonIndexableItemDetailType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsNonIndexableItemDetailType|null
     */
    public function item($index): ?\StructType\EwsNonIndexableItemDetailType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsNonIndexableItemDetailType|null
     */
    public function first(): ?\StructType\EwsNonIndexableItemDetailType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsNonIndexableItemDetailType|null
     */
    public function last(): ?\StructType\EwsNonIndexableItemDetailType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsNonIndexableItemDetailType|null
     */
    public function offsetGet($offset): ?\StructType\EwsNonIndexableItemDetailType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsNonIndexableItemDetailType $item
     * @return \ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public function add(\StructType\EwsNonIndexableItemDetailType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NonIndexableItemDetail
     */
    public function getAttributeName(): string
    {
        return 'NonIndexableItemDetail';
    }
}
