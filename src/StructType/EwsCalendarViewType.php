<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $EndDate;
    /**
     * Constructor method for CalendarViewType
     * @uses EwsCalendarViewType::setStartDate()
     * @uses EwsCalendarViewType::setEndDate()
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(string $startDate, string $endDate)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \StructType\EwsCalendarViewType
     */
    public function setStartDate(string $startDate): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \StructType\EwsCalendarViewType
     */
    public function setEndDate(string $endDate): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
}
