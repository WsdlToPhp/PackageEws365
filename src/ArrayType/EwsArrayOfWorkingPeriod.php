<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkingPeriod ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkingPeriod extends AbstractStructArrayBase
{
    /**
     * The WorkingPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsWorkingPeriod[]
     */
    public $WorkingPeriod;
    /**
     * Constructor method for ArrayOfWorkingPeriod
     * @uses EwsArrayOfWorkingPeriod::setWorkingPeriod()
     * @param \Ews\StructType\EwsWorkingPeriod[] $workingPeriod
     */
    public function __construct(array $workingPeriod = array())
    {
        $this
            ->setWorkingPeriod($workingPeriod);
    }
    /**
     * Get WorkingPeriod value
     * @return \Ews\StructType\EwsWorkingPeriod[]|null
     */
    public function getWorkingPeriod()
    {
        return $this->WorkingPeriod;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkingPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkingPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkingPeriodForArrayConstraintsFromSetWorkingPeriod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkingPeriodWorkingPeriodItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkingPeriodWorkingPeriodItem instanceof \Ews\StructType\EwsWorkingPeriod) {
                $invalidValues[] = is_object($arrayOfWorkingPeriodWorkingPeriodItem) ? get_class($arrayOfWorkingPeriodWorkingPeriodItem) : sprintf('%s(%s)', gettype($arrayOfWorkingPeriodWorkingPeriodItem), var_export($arrayOfWorkingPeriodWorkingPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkingPeriod property can only contain items of type \Ews\StructType\EwsWorkingPeriod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WorkingPeriod value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkingPeriod[] $workingPeriod
     * @return \Ews\ArrayType\EwsArrayOfWorkingPeriod
     */
    public function setWorkingPeriod(array $workingPeriod = array())
    {
        // validation for constraint: array
        if ('' !== ($workingPeriodArrayErrorMessage = self::validateWorkingPeriodForArrayConstraintsFromSetWorkingPeriod($workingPeriod))) {
            throw new \InvalidArgumentException($workingPeriodArrayErrorMessage, __LINE__);
        }
        $this->WorkingPeriod = $workingPeriod;
        return $this;
    }
    /**
     * Add item to WorkingPeriod value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkingPeriod $item
     * @return \Ews\ArrayType\EwsArrayOfWorkingPeriod
     */
    public function addToWorkingPeriod(\Ews\StructType\EwsWorkingPeriod $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsWorkingPeriod) {
            throw new \InvalidArgumentException(sprintf('The WorkingPeriod property can only contain items of type \Ews\StructType\EwsWorkingPeriod, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WorkingPeriod[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsWorkingPeriod|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsWorkingPeriod|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsWorkingPeriod|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsWorkingPeriod|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsWorkingPeriod|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkingPeriod
     */
    public function getAttributeName()
    {
        return 'WorkingPeriod';
    }
}
