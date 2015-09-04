<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurrenceRangeBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsRecurrenceRangeBaseType extends AbstractStructBase
{
    /**
     * The StartDate
     * @var date
     */
    public $StartDate;
    /**
     * Constructor method for RecurrenceRangeBaseType
     * @uses EwsRecurrenceRangeBaseType::setStartDate()
     * @param date $startDate
     */
    public function __construct($startDate = null)
    {
        $this
            ->setStartDate($startDate);
    }
    /**
     * Get StartDate value
     * @return date|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param date $startDate
     * @return \Ews\StructType\EwsRecurrenceRangeBaseType
     */
    public function setStartDate($startDate = null)
    {
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecurrenceRangeBaseType
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