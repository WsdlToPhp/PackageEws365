<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringTimeTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsRecurringTimeTransitionType extends EwsTransitionType
{
    /**
     * The TimeOffset
     * @var int
     */
    public $TimeOffset;
    /**
     * The Month
     * @var int
     */
    public $Month;
    /**
     * Constructor method for RecurringTimeTransitionType
     * @uses EwsRecurringTimeTransitionType::setTimeOffset()
     * @uses EwsRecurringTimeTransitionType::setMonth()
     * @param int $timeOffset
     * @param int $month
     */
    public function __construct($timeOffset = null, $month = null)
    {
        $this
            ->setTimeOffset($timeOffset)
            ->setMonth($month);
    }
    /**
     * Get TimeOffset value
     * @return int|null
     */
    public function getTimeOffset()
    {
        return $this->TimeOffset;
    }
    /**
     * Set TimeOffset value
     * @param int $timeOffset
     * @return \Ews\StructType\EwsRecurringTimeTransitionType
     */
    public function setTimeOffset($timeOffset = null)
    {
        // validation for constraint: int
        if (!is_null($timeOffset) && !is_int($timeOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($timeOffset)), __LINE__);
        }
        $this->TimeOffset = $timeOffset;
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \Ews\StructType\EwsRecurringTimeTransitionType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !is_int($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecurringTimeTransitionType
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
