<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurrenceRangeBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsRecurrenceRangeBaseType extends AbstractStructBase
{
    /**
     * The StartDate
     * @var string
     */
    public $StartDate;
    /**
     * Constructor method for RecurrenceRangeBaseType
     * @uses EwsRecurrenceRangeBaseType::setStartDate()
     * @param string $startDate
     */
    public function __construct($startDate = null)
    {
        $this
            ->setStartDate($startDate);
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Ews\StructType\EwsRecurrenceRangeBaseType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
}
