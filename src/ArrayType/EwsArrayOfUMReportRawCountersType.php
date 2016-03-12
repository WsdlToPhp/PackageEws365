<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUMReportRawCountersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUMReportRawCountersType extends AbstractStructArrayBase
{
    /**
     * The UMReportRawCounters
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUMReportRawCountersType[]
     */
    public $UMReportRawCounters;
    /**
     * Constructor method for ArrayOfUMReportRawCountersType
     * @uses EwsArrayOfUMReportRawCountersType::setUMReportRawCounters()
     * @param \Ews\StructType\EwsUMReportRawCountersType[] $uMReportRawCounters
     */
    public function __construct(array $uMReportRawCounters = array())
    {
        $this
            ->setUMReportRawCounters($uMReportRawCounters);
    }
    /**
     * Get UMReportRawCounters value
     * @return \Ews\StructType\EwsUMReportRawCountersType[]|null
     */
    public function getUMReportRawCounters()
    {
        return $this->UMReportRawCounters;
    }
    /**
     * Set UMReportRawCounters value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUMReportRawCountersType[] $uMReportRawCounters
     * @return \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public function setUMReportRawCounters(array $uMReportRawCounters = array())
    {
        foreach ($uMReportRawCounters as $arrayOfUMReportRawCountersTypeUMReportRawCountersItem) {
            // validation for constraint: itemType
            if (!$arrayOfUMReportRawCountersTypeUMReportRawCountersItem instanceof \Ews\StructType\EwsUMReportRawCountersType) {
                throw new \InvalidArgumentException(sprintf('The UMReportRawCounters property can only contain items of \Ews\StructType\EwsUMReportRawCountersType, "%s" given', is_object($arrayOfUMReportRawCountersTypeUMReportRawCountersItem) ? get_class($arrayOfUMReportRawCountersTypeUMReportRawCountersItem) : gettype($arrayOfUMReportRawCountersTypeUMReportRawCountersItem)), __LINE__);
            }
        }
        $this->UMReportRawCounters = $uMReportRawCounters;
        return $this;
    }
    /**
     * Add item to UMReportRawCounters value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUMReportRawCountersType $item
     * @return \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public function addToUMReportRawCounters(\Ews\StructType\EwsUMReportRawCountersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUMReportRawCountersType) {
            throw new \InvalidArgumentException(sprintf('The UMReportRawCounters property can only contain items of \Ews\StructType\EwsUMReportRawCountersType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UMReportRawCounters[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UMReportRawCounters
     */
    public function getAttributeName()
    {
        return 'UMReportRawCounters';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
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
