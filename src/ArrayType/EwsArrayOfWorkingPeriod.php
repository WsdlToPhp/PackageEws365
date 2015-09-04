<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkingPeriod ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfWorkingPeriod extends AbstractStructArrayBase
{
    /**
     * The WorkingPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $WorkingPeriod;
    /**
     * Constructor method for ArrayOfWorkingPeriod
     * @uses EwsArrayOfWorkingPeriod::setWorkingPeriod()
     * @param array $workingPeriod
     */
    public function __construct(array $workingPeriod = array())
    {
        $this
            ->setWorkingPeriod($workingPeriod);
    }
    /**
     * Get WorkingPeriod value
     * @return array
     */
    public function getWorkingPeriod()
    {
        return $this->WorkingPeriod;
    }
    /**
     * Set WorkingPeriod value
     * @param array $workingPeriod
     * @return \Ews\ArrayType\EwsArrayOfWorkingPeriod
     */
    public function setWorkingPeriod(array $workingPeriod = array())
    {
        $this->WorkingPeriod = $workingPeriod;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfWorkingPeriod
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
