<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringDateTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurringDateTransitionType extends EwsRecurringTimeTransitionType
{
    /**
     * The Day
     * @var int
     */
    public $Day;
    /**
     * Constructor method for RecurringDateTransitionType
     * @uses EwsRecurringDateTransitionType::setDay()
     * @param int $day
     */
    public function __construct($day = null)
    {
        $this
            ->setDay($day);
    }
    /**
     * Get Day value
     * @return int|null
     */
    public function getDay()
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param int $day
     * @return \Ews\StructType\EwsRecurringDateTransitionType
     */
    public function setDay($day = null)
    {
        // validation for constraint: int
        if (!is_null($day) && !is_numeric($day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($day)), __LINE__);
        }
        $this->Day = $day;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecurringDateTransitionType
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
