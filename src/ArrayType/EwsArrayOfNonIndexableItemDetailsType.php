<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNonIndexableItemDetailsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of non indexable item details.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfNonIndexableItemDetailsType extends AbstractStructArrayBase
{
    /**
     * The NonIndexableItemDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Non indexable item detail.
     * @var array
     */
    public $NonIndexableItemDetail;
    /**
     * Constructor method for ArrayOfNonIndexableItemDetailsType
     * @uses EwsArrayOfNonIndexableItemDetailsType::setNonIndexableItemDetail()
     * @param array $nonIndexableItemDetail
     */
    public function __construct(array $nonIndexableItemDetail = array())
    {
        $this
            ->setNonIndexableItemDetail($nonIndexableItemDetail);
    }
    /**
     * Get NonIndexableItemDetail value
     * @return array
     */
    public function getNonIndexableItemDetail()
    {
        return $this->NonIndexableItemDetail;
    }
    /**
     * Set NonIndexableItemDetail value
     * @param array $nonIndexableItemDetail
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public function setNonIndexableItemDetail(array $nonIndexableItemDetail = array())
    {
        $this->NonIndexableItemDetail = $nonIndexableItemDetail;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsNonIndexableItemDetailType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NonIndexableItemDetail
     */
    public function getAttributeName()
    {
        return 'NonIndexableItemDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
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
