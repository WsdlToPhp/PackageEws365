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
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $EndDate;
    /**
     * Constructor method for CalendarViewType
     * @uses EwsCalendarViewType::setStartDate()
     * @uses EwsCalendarViewType::setEndDate()
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($startDate = null, $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Ews\StructType\EwsCalendarViewType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Ews\StructType\EwsCalendarViewType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
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
