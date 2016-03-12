<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfPeriodsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfPeriodsType extends AbstractStructArrayBase
{
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsPeriodType[]
     */
    public $Period;
    /**
     * Constructor method for NonEmptyArrayOfPeriodsType
     * @uses EwsNonEmptyArrayOfPeriodsType::setPeriod()
     * @param \Ews\StructType\EwsPeriodType[] $period
     */
    public function __construct(array $period = array())
    {
        $this
            ->setPeriod($period);
    }
    /**
     * Get Period value
     * @return \Ews\StructType\EwsPeriodType[]|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPeriodType[] $period
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType
     */
    public function setPeriod(array $period = array())
    {
        foreach ($period as $nonEmptyArrayOfPeriodsTypePeriodItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfPeriodsTypePeriodItem instanceof \Ews\StructType\EwsPeriodType) {
                throw new \InvalidArgumentException(sprintf('The Period property can only contain items of \Ews\StructType\EwsPeriodType, "%s" given', is_object($nonEmptyArrayOfPeriodsTypePeriodItem) ? get_class($nonEmptyArrayOfPeriodsTypePeriodItem) : gettype($nonEmptyArrayOfPeriodsTypePeriodItem)), __LINE__);
            }
        }
        $this->Period = $period;
        return $this;
    }
    /**
     * Add item to Period value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPeriodType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType
     */
    public function addToPeriod(\Ews\StructType\EwsPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPeriodType) {
            throw new \InvalidArgumentException(sprintf('The Period property can only contain items of \Ews\StructType\EwsPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Period[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPeriodType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPeriodType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPeriodType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPeriodType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPeriodType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Period
     */
    public function getAttributeName()
    {
        return 'Period';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType
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
