<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndDateRecurrenceRangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEndDateRecurrenceRangeType extends EwsRecurrenceRangeBaseType
{
    /**
     * The EndDate
     * @var string
     */
    public $EndDate;
    /**
     * Constructor method for EndDateRecurrenceRangeType
     * @uses EwsEndDateRecurrenceRangeType::setEndDate()
     * @param string $endDate
     */
    public function __construct($endDate = null)
    {
        $this
            ->setEndDate($endDate);
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Ews\StructType\EwsEndDateRecurrenceRangeType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
}
