<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNonIndexableItemStatisticsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of non indexable item statistics.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfNonIndexableItemStatisticsType extends AbstractStructArrayBase
{
    /**
     * The NonIndexableItemStatistic
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Non indexable item statistic.
     * @var array
     */
    public $NonIndexableItemStatistic;
    /**
     * Constructor method for ArrayOfNonIndexableItemStatisticsType
     * @uses EwsArrayOfNonIndexableItemStatisticsType::setNonIndexableItemStatistic()
     * @param array $nonIndexableItemStatistic
     */
    public function __construct(array $nonIndexableItemStatistic = array())
    {
        $this
            ->setNonIndexableItemStatistic($nonIndexableItemStatistic);
    }
    /**
     * Get NonIndexableItemStatistic value
     * @return array
     */
    public function getNonIndexableItemStatistic()
    {
        return $this->NonIndexableItemStatistic;
    }
    /**
     * Set NonIndexableItemStatistic value
     * @param array $nonIndexableItemStatistic
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public function setNonIndexableItemStatistic(array $nonIndexableItemStatistic = array())
    {
        $this->NonIndexableItemStatistic = $nonIndexableItemStatistic;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NonIndexableItemStatistic
     */
    public function getAttributeName()
    {
        return 'NonIndexableItemStatistic';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
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
