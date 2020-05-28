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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriodForArrayConstraintsFromSetPeriod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfPeriodsTypePeriodItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfPeriodsTypePeriodItem instanceof \Ews\StructType\EwsPeriodType) {
                $invalidValues[] = is_object($nonEmptyArrayOfPeriodsTypePeriodItem) ? get_class($nonEmptyArrayOfPeriodsTypePeriodItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfPeriodsTypePeriodItem), var_export($nonEmptyArrayOfPeriodsTypePeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period property can only contain items of type \Ews\StructType\EwsPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPeriodType[] $period
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType
     */
    public function setPeriod(array $period = array())
    {
        // validation for constraint: array
        if ('' !== ($periodArrayErrorMessage = self::validatePeriodForArrayConstraintsFromSetPeriod($period))) {
            throw new \InvalidArgumentException($periodArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Period property can only contain items of type \Ews\StructType\EwsPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
