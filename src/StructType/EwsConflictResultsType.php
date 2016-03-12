<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConflictResultsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConflictResultsType extends AbstractStructBase
{
    /**
     * The Count
     * @var int
     */
    public $Count;
    /**
     * Constructor method for ConflictResultsType
     * @uses EwsConflictResultsType::setCount()
     * @param int $count
     */
    public function __construct($count = null)
    {
        $this
            ->setCount($count);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Ews\StructType\EwsConflictResultsType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_int($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConflictResultsType
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
