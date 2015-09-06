<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarViewType extends EwsBasePagingType
{
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var dateTime
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var dateTime
     */
    public $EndDate;
    /**
     * Constructor method for CalendarViewType
     * @uses EwsCalendarViewType::setStartDate()
     * @uses EwsCalendarViewType::setEndDate()
     * @param dateTime $startDate
     * @param dateTime $endDate
     */
    public function __construct($startDate = null, $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get StartDate value
     * @return dateTime
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param dateTime $startDate
     * @return \Ews\StructType\EwsCalendarViewType
     */
    public function setStartDate($startDate = null)
    {
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return dateTime
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param dateTime $endDate
     * @return \Ews\StructType\EwsCalendarViewType
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
     * @return \Ews\StructType\EwsCalendarViewType
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
