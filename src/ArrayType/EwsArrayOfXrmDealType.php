<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmDealType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmDealType extends AbstractStructArrayBase
{
    /**
     * The Deal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsXrmDealType[]
     */
    protected array $Deal = [];
    /**
     * Constructor method for ArrayOfXrmDealType
     * @uses EwsArrayOfXrmDealType::setDeal()
     * @param \StructType\EwsXrmDealType[] $deal
     */
    public function __construct(array $deal = [])
    {
        $this
            ->setDeal($deal);
    }
    /**
     * Get Deal value
     * @return \StructType\EwsXrmDealType[]
     */
    public function getDeal(): array
    {
        return $this->Deal;
    }
    /**
     * This method is responsible for validating the values passed to the setDeal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDealForArrayConstraintsFromSetDeal(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmDealTypeDealItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmDealTypeDealItem instanceof \StructType\EwsXrmDealType) {
                $invalidValues[] = is_object($arrayOfXrmDealTypeDealItem) ? get_class($arrayOfXrmDealTypeDealItem) : sprintf('%s(%s)', gettype($arrayOfXrmDealTypeDealItem), var_export($arrayOfXrmDealTypeDealItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Deal property can only contain items of type \StructType\EwsXrmDealType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Deal value
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmDealType[] $deal
     * @return \ArrayType\EwsArrayOfXrmDealType
     */
    public function setDeal(array $deal = []): self
    {
        // validation for constraint: array
        if ('' !== ($dealArrayErrorMessage = self::validateDealForArrayConstraintsFromSetDeal($deal))) {
            throw new InvalidArgumentException($dealArrayErrorMessage, __LINE__);
        }
        $this->Deal = $deal;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsXrmDealType|null
     */
    public function current(): ?\StructType\EwsXrmDealType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsXrmDealType|null
     */
    public function item($index): ?\StructType\EwsXrmDealType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsXrmDealType|null
     */
    public function first(): ?\StructType\EwsXrmDealType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsXrmDealType|null
     */
    public function last(): ?\StructType\EwsXrmDealType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsXrmDealType|null
     */
    public function offsetGet($offset): ?\StructType\EwsXrmDealType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmDealType $item
     * @return \ArrayType\EwsArrayOfXrmDealType
     */
    public function add(\StructType\EwsXrmDealType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Deal
     */
    public function getAttributeName(): string
    {
        return 'Deal';
    }
}
