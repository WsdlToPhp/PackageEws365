<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletedOccurrenceStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeletedOccurrenceStateDefinitionType extends EwsBaseCalendarItemStateDefinitionType
{
    /**
     * The OccurrenceDate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $OccurrenceDate;
    /**
     * The IsOccurrencePresent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOccurrencePresent = null;
    /**
     * Constructor method for DeletedOccurrenceStateDefinitionType
     * @uses EwsDeletedOccurrenceStateDefinitionType::setOccurrenceDate()
     * @uses EwsDeletedOccurrenceStateDefinitionType::setIsOccurrencePresent()
     * @param string $occurrenceDate
     * @param bool $isOccurrencePresent
     */
    public function __construct(string $occurrenceDate, ?bool $isOccurrencePresent = null)
    {
        $this
            ->setOccurrenceDate($occurrenceDate)
            ->setIsOccurrencePresent($isOccurrencePresent);
    }
    /**
     * Get OccurrenceDate value
     * @return string
     */
    public function getOccurrenceDate(): string
    {
        return $this->OccurrenceDate;
    }
    /**
     * Set OccurrenceDate value
     * @param string $occurrenceDate
     * @return \StructType\EwsDeletedOccurrenceStateDefinitionType
     */
    public function setOccurrenceDate(string $occurrenceDate): self
    {
        // validation for constraint: string
        if (!is_null($occurrenceDate) && !is_string($occurrenceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($occurrenceDate, true), gettype($occurrenceDate)), __LINE__);
        }
        $this->OccurrenceDate = $occurrenceDate;
        
        return $this;
    }
    /**
     * Get IsOccurrencePresent value
     * @return bool|null
     */
    public function getIsOccurrencePresent(): ?bool
    {
        return $this->IsOccurrencePresent;
    }
    /**
     * Set IsOccurrencePresent value
     * @param bool $isOccurrencePresent
     * @return \StructType\EwsDeletedOccurrenceStateDefinitionType
     */
    public function setIsOccurrencePresent(?bool $isOccurrencePresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOccurrencePresent) && !is_bool($isOccurrencePresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOccurrencePresent, true), gettype($isOccurrencePresent)), __LINE__);
        }
        $this->IsOccurrencePresent = $isOccurrencePresent;
        
        return $this;
    }
}
