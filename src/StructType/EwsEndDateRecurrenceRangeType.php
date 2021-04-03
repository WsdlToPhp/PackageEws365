<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * Constructor method for EndDateRecurrenceRangeType
     * @uses EwsEndDateRecurrenceRangeType::setEndDate()
     * @param string $endDate
     */
    public function __construct(?string $endDate = null)
    {
        $this
            ->setEndDate($endDate);
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \StructType\EwsEndDateRecurrenceRangeType
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
}
