<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsXrmDealType[]
     */
    public $Deal;
    /**
     * Constructor method for ArrayOfXrmDealType
     * @uses EwsArrayOfXrmDealType::setDeal()
     * @param \Ews\StructType\EwsXrmDealType[] $deal
     */
    public function __construct(array $deal = array())
    {
        $this
            ->setDeal($deal);
    }
    /**
     * Get Deal value
     * @return \Ews\StructType\EwsXrmDealType[]|null
     */
    public function getDeal()
    {
        return $this->Deal;
    }
    /**
     * This method is responsible for validating the values passed to the setDeal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDealForArrayConstraintsFromSetDeal(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmDealTypeDealItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmDealTypeDealItem instanceof \Ews\StructType\EwsXrmDealType) {
                $invalidValues[] = is_object($arrayOfXrmDealTypeDealItem) ? get_class($arrayOfXrmDealTypeDealItem) : sprintf('%s(%s)', gettype($arrayOfXrmDealTypeDealItem), var_export($arrayOfXrmDealTypeDealItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Deal property can only contain items of type \Ews\StructType\EwsXrmDealType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Deal value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmDealType[] $deal
     * @return \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public function setDeal(array $deal = array())
    {
        // validation for constraint: array
        if ('' !== ($dealArrayErrorMessage = self::validateDealForArrayConstraintsFromSetDeal($deal))) {
            throw new \InvalidArgumentException($dealArrayErrorMessage, __LINE__);
        }
        $this->Deal = $deal;
        return $this;
    }
    /**
     * Add item to Deal value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmDealType $item
     * @return \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public function addToDeal(\Ews\StructType\EwsXrmDealType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsXrmDealType) {
            throw new \InvalidArgumentException(sprintf('The Deal property can only contain items of type \Ews\StructType\EwsXrmDealType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Deal[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmDealType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmDealType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmDealType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmDealType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmDealType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Deal
     */
    public function getAttributeName()
    {
        return 'Deal';
    }
}
