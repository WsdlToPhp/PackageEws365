<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * Constructor method for RecurrenceRangeBaseType
     * @uses EwsRecurrenceRangeBaseType::setStartDate()
     * @param string $startDate
     */
    public function __construct(?string $startDate = null)
    {
        $this
            ->setStartDate($startDate);
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \StructType\EwsRecurrenceRangeBaseType
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
}
