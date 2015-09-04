<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndDateRecurrenceRangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsEndDateRecurrenceRangeType extends EwsRecurrenceRangeBaseType
{
    /**
     * The EndDate
     * @var date
     */
    public $EndDate;
    /**
     * Constructor method for EndDateRecurrenceRangeType
     * @uses EwsEndDateRecurrenceRangeType::setEndDate()
     * @param date $endDate
     */
    public function __construct($endDate = null)
    {
        $this
            ->setEndDate($endDate);
    }
    /**
     * Get EndDate value
     * @return date|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param date $endDate
     * @return \Ews\StructType\EwsEndDateRecurrenceRangeType
     */
    public function setEndDate($endDate = null)
    {
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEndDateRecurrenceRangeType
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
