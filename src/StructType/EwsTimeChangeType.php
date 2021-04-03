<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeChangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeChangeType extends AbstractStructBase
{
    /**
     * The Offset
     * @var string|null
     */
    protected ?string $Offset = null;
    /**
     * The RelativeYearlyRecurrence
     * @var \StructType\EwsRelativeYearlyRecurrencePatternType|null
     */
    protected ?\StructType\EwsRelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence = null;
    /**
     * The AbsoluteDate
     * @var string|null
     */
    protected ?string $AbsoluteDate = null;
    /**
     * The Time
     * @var string|null
     */
    protected ?string $Time = null;
    /**
     * The TimeZoneName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TimeZoneName = null;
    /**
     * Constructor method for TimeChangeType
     * @uses EwsTimeChangeType::setOffset()
     * @uses EwsTimeChangeType::setRelativeYearlyRecurrence()
     * @uses EwsTimeChangeType::setAbsoluteDate()
     * @uses EwsTimeChangeType::setTime()
     * @uses EwsTimeChangeType::setTimeZoneName()
     * @param string $offset
     * @param \StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @param string $absoluteDate
     * @param string $time
     * @param string $timeZoneName
     */
    public function __construct(?string $offset = null, ?\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, ?string $absoluteDate = null, ?string $time = null, ?string $timeZoneName = null)
    {
        $this
            ->setOffset($offset)
            ->setRelativeYearlyRecurrence($relativeYearlyRecurrence)
            ->setAbsoluteDate($absoluteDate)
            ->setTime($time)
            ->setTimeZoneName($timeZoneName);
    }
    /**
     * Get Offset value
     * @return string|null
     */
    public function getOffset(): ?string
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param string $offset
     * @return \StructType\EwsTimeChangeType
     */
    public function setOffset(?string $offset = null): self
    {
        // validation for constraint: string
        if (!is_null($offset) && !is_string($offset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        
        return $this;
    }
    /**
     * Get RelativeYearlyRecurrence value
     * @return \StructType\EwsRelativeYearlyRecurrencePatternType|null
     */
    public function getRelativeYearlyRecurrence(): ?\StructType\EwsRelativeYearlyRecurrencePatternType
    {
        return $this->RelativeYearlyRecurrence;
    }
    /**
     * Set RelativeYearlyRecurrence value
     * @param \StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @return \StructType\EwsTimeChangeType
     */
    public function setRelativeYearlyRecurrence(?\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null): self
    {
        $this->RelativeYearlyRecurrence = $relativeYearlyRecurrence;
        
        return $this;
    }
    /**
     * Get AbsoluteDate value
     * @return string|null
     */
    public function getAbsoluteDate(): ?string
    {
        return $this->AbsoluteDate;
    }
    /**
     * Set AbsoluteDate value
     * @param string $absoluteDate
     * @return \StructType\EwsTimeChangeType
     */
    public function setAbsoluteDate(?string $absoluteDate = null): self
    {
        // validation for constraint: string
        if (!is_null($absoluteDate) && !is_string($absoluteDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($absoluteDate, true), gettype($absoluteDate)), __LINE__);
        }
        $this->AbsoluteDate = $absoluteDate;
        
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \StructType\EwsTimeChangeType
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get TimeZoneName value
     * @return string|null
     */
    public function getTimeZoneName(): ?string
    {
        return $this->TimeZoneName;
    }
    /**
     * Set TimeZoneName value
     * @param string $timeZoneName
     * @return \StructType\EwsTimeChangeType
     */
    public function setTimeZoneName(?string $timeZoneName = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZoneName) && !is_string($timeZoneName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZoneName, true), gettype($timeZoneName)), __LINE__);
        }
        $this->TimeZoneName = $timeZoneName;
        
        return $this;
    }
}
