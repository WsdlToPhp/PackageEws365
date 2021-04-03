<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchRefinerItemsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of search refiner item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchRefinerItemsType extends AbstractStructArrayBase
{
    /**
     * The Refiner
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSearchRefinerItemType[]
     */
    protected array $Refiner = [];
    /**
     * Constructor method for ArrayOfSearchRefinerItemsType
     * @uses EwsArrayOfSearchRefinerItemsType::setRefiner()
     * @param \StructType\EwsSearchRefinerItemType[] $refiner
     */
    public function __construct(array $refiner = [])
    {
        $this
            ->setRefiner($refiner);
    }
    /**
     * Get Refiner value
     * @return \StructType\EwsSearchRefinerItemType[]
     */
    public function getRefiner(): array
    {
        return $this->Refiner;
    }
    /**
     * This method is responsible for validating the values passed to the setRefiner method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefiner method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefinerForArrayConstraintsFromSetRefiner(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchRefinerItemsTypeRefinerItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchRefinerItemsTypeRefinerItem instanceof \StructType\EwsSearchRefinerItemType) {
                $invalidValues[] = is_object($arrayOfSearchRefinerItemsTypeRefinerItem) ? get_class($arrayOfSearchRefinerItemsTypeRefinerItem) : sprintf('%s(%s)', gettype($arrayOfSearchRefinerItemsTypeRefinerItem), var_export($arrayOfSearchRefinerItemsTypeRefinerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Refiner property can only contain items of type \StructType\EwsSearchRefinerItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Refiner value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSearchRefinerItemType[] $refiner
     * @return \ArrayType\EwsArrayOfSearchRefinerItemsType
     */
    public function setRefiner(array $refiner = []): self
    {
        // validation for constraint: array
        if ('' !== ($refinerArrayErrorMessage = self::validateRefinerForArrayConstraintsFromSetRefiner($refiner))) {
            throw new InvalidArgumentException($refinerArrayErrorMessage, __LINE__);
        }
        $this->Refiner = $refiner;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSearchRefinerItemType|null
     */
    public function current(): ?\StructType\EwsSearchRefinerItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSearchRefinerItemType|null
     */
    public function item($index): ?\StructType\EwsSearchRefinerItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSearchRefinerItemType|null
     */
    public function first(): ?\StructType\EwsSearchRefinerItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSearchRefinerItemType|null
     */
    public function last(): ?\StructType\EwsSearchRefinerItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSearchRefinerItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSearchRefinerItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSearchRefinerItemType $item
     * @return \ArrayType\EwsArrayOfSearchRefinerItemsType
     */
    public function add(\StructType\EwsSearchRefinerItemType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Refiner
     */
    public function getAttributeName(): string
    {
        return 'Refiner';
    }
}
