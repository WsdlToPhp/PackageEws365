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
     * Meta informations extracted from the WSDL
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
     * Set Deal value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmDealType[] $deal
     * @return \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public function setDeal(array $deal = array())
    {
        foreach ($deal as $arrayOfXrmDealTypeDealItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmDealTypeDealItem instanceof \Ews\StructType\EwsXrmDealType) {
                throw new \InvalidArgumentException(sprintf('The Deal property can only contain items of \Ews\StructType\EwsXrmDealType, "%s" given', is_object($arrayOfXrmDealTypeDealItem) ? get_class($arrayOfXrmDealTypeDealItem) : gettype($arrayOfXrmDealTypeDealItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Deal property can only contain items of \Ews\StructType\EwsXrmDealType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
