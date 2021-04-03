<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurrenceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurrenceType extends AbstractStructBase
{
    /**
     * The RelativeYearlyRecurrence
     * @var \StructType\EwsRelativeYearlyRecurrencePatternType|null
     */
    protected ?\StructType\EwsRelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence = null;
    /**
     * The AbsoluteYearlyRecurrence
     * @var \StructType\EwsAbsoluteYearlyRecurrencePatternType|null
     */
    protected ?\StructType\EwsAbsoluteYearlyRecurrencePatternType $AbsoluteYearlyRecurrence = null;
    /**
     * The RelativeMonthlyRecurrence
     * @var \StructType\EwsRelativeMonthlyRecurrencePatternType|null
     */
    protected ?\StructType\EwsRelativeMonthlyRecurrencePatternType $RelativeMonthlyRecurrence = null;
    /**
     * The AbsoluteMonthlyRecurrence
     * @var \StructType\EwsAbsoluteMonthlyRecurrencePatternType|null
     */
    protected ?\StructType\EwsAbsoluteMonthlyRecurrencePatternType $AbsoluteMonthlyRecurrence = null;
    /**
     * The WeeklyRecurrence
     * @var \StructType\EwsWeeklyRecurrencePatternType|null
     */
    protected ?\StructType\EwsWeeklyRecurrencePatternType $WeeklyRecurrence = null;
    /**
     * The DailyRecurrence
     * @var \StructType\EwsDailyRecurrencePatternType|null
     */
    protected ?\StructType\EwsDailyRecurrencePatternType $DailyRecurrence = null;
    /**
     * The NoEndRecurrence
     * @var \StructType\EwsNoEndRecurrenceRangeType|null
     */
    protected ?\StructType\EwsNoEndRecurrenceRangeType $NoEndRecurrence = null;
    /**
     * The EndDateRecurrence
     * @var \StructType\EwsEndDateRecurrenceRangeType|null
     */
    protected ?\StructType\EwsEndDateRecurrenceRangeType $EndDateRecurrence = null;
    /**
     * The NumberedRecurrence
     * @var \StructType\EwsNumberedRecurrenceRangeType|null
     */
    protected ?\StructType\EwsNumberedRecurrenceRangeType $NumberedRecurrence = null;
    /**
     * Constructor method for RecurrenceType
     * @uses EwsRecurrenceType::setRelativeYearlyRecurrence()
     * @uses EwsRecurrenceType::setAbsoluteYearlyRecurrence()
     * @uses EwsRecurrenceType::setRelativeMonthlyRecurrence()
     * @uses EwsRecurrenceType::setAbsoluteMonthlyRecurrence()
     * @uses EwsRecurrenceType::setWeeklyRecurrence()
     * @uses EwsRecurrenceType::setDailyRecurrence()
     * @uses EwsRecurrenceType::setNoEndRecurrence()
     * @uses EwsRecurrenceType::setEndDateRecurrence()
     * @uses EwsRecurrenceType::setNumberedRecurrence()
     * @param \StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @param \StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence
     * @param \StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence
     * @param \StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence
     * @param \StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence
     * @param \StructType\EwsDailyRecurrencePatternType $dailyRecurrence
     * @param \StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence
     * @param \StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence
     * @param \StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence
     */
    public function __construct(?\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, ?\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence = null, ?\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence = null, ?\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence = null, ?\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence = null, ?\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null, ?\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence = null, ?\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence = null, ?\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null)
    {
        $this
            ->setRelativeYearlyRecurrence($relativeYearlyRecurrence)
            ->setAbsoluteYearlyRecurrence($absoluteYearlyRecurrence)
            ->setRelativeMonthlyRecurrence($relativeMonthlyRecurrence)
            ->setAbsoluteMonthlyRecurrence($absoluteMonthlyRecurrence)
            ->setWeeklyRecurrence($weeklyRecurrence)
            ->setDailyRecurrence($dailyRecurrence)
            ->setNoEndRecurrence($noEndRecurrence)
            ->setEndDateRecurrence($endDateRecurrence)
            ->setNumberedRecurrence($numberedRecurrence);
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
     * @return \StructType\EwsRecurrenceType
     */
    public function setRelativeYearlyRecurrence(?\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null): self
    {
        $this->RelativeYearlyRecurrence = $relativeYearlyRecurrence;
        
        return $this;
    }
    /**
     * Get AbsoluteYearlyRecurrence value
     * @return \StructType\EwsAbsoluteYearlyRecurrencePatternType|null
     */
    public function getAbsoluteYearlyRecurrence(): ?\StructType\EwsAbsoluteYearlyRecurrencePatternType
    {
        return $this->AbsoluteYearlyRecurrence;
    }
    /**
     * Set AbsoluteYearlyRecurrence value
     * @param \StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setAbsoluteYearlyRecurrence(?\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence = null): self
    {
        $this->AbsoluteYearlyRecurrence = $absoluteYearlyRecurrence;
        
        return $this;
    }
    /**
     * Get RelativeMonthlyRecurrence value
     * @return \StructType\EwsRelativeMonthlyRecurrencePatternType|null
     */
    public function getRelativeMonthlyRecurrence(): ?\StructType\EwsRelativeMonthlyRecurrencePatternType
    {
        return $this->RelativeMonthlyRecurrence;
    }
    /**
     * Set RelativeMonthlyRecurrence value
     * @param \StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setRelativeMonthlyRecurrence(?\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence = null): self
    {
        $this->RelativeMonthlyRecurrence = $relativeMonthlyRecurrence;
        
        return $this;
    }
    /**
     * Get AbsoluteMonthlyRecurrence value
     * @return \StructType\EwsAbsoluteMonthlyRecurrencePatternType|null
     */
    public function getAbsoluteMonthlyRecurrence(): ?\StructType\EwsAbsoluteMonthlyRecurrencePatternType
    {
        return $this->AbsoluteMonthlyRecurrence;
    }
    /**
     * Set AbsoluteMonthlyRecurrence value
     * @param \StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setAbsoluteMonthlyRecurrence(?\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence = null): self
    {
        $this->AbsoluteMonthlyRecurrence = $absoluteMonthlyRecurrence;
        
        return $this;
    }
    /**
     * Get WeeklyRecurrence value
     * @return \StructType\EwsWeeklyRecurrencePatternType|null
     */
    public function getWeeklyRecurrence(): ?\StructType\EwsWeeklyRecurrencePatternType
    {
        return $this->WeeklyRecurrence;
    }
    /**
     * Set WeeklyRecurrence value
     * @param \StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setWeeklyRecurrence(?\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence = null): self
    {
        $this->WeeklyRecurrence = $weeklyRecurrence;
        
        return $this;
    }
    /**
     * Get DailyRecurrence value
     * @return \StructType\EwsDailyRecurrencePatternType|null
     */
    public function getDailyRecurrence(): ?\StructType\EwsDailyRecurrencePatternType
    {
        return $this->DailyRecurrence;
    }
    /**
     * Set DailyRecurrence value
     * @param \StructType\EwsDailyRecurrencePatternType $dailyRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setDailyRecurrence(?\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null): self
    {
        $this->DailyRecurrence = $dailyRecurrence;
        
        return $this;
    }
    /**
     * Get NoEndRecurrence value
     * @return \StructType\EwsNoEndRecurrenceRangeType|null
     */
    public function getNoEndRecurrence(): ?\StructType\EwsNoEndRecurrenceRangeType
    {
        return $this->NoEndRecurrence;
    }
    /**
     * Set NoEndRecurrence value
     * @param \StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setNoEndRecurrence(?\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence = null): self
    {
        $this->NoEndRecurrence = $noEndRecurrence;
        
        return $this;
    }
    /**
     * Get EndDateRecurrence value
     * @return \StructType\EwsEndDateRecurrenceRangeType|null
     */
    public function getEndDateRecurrence(): ?\StructType\EwsEndDateRecurrenceRangeType
    {
        return $this->EndDateRecurrence;
    }
    /**
     * Set EndDateRecurrence value
     * @param \StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setEndDateRecurrence(?\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence = null): self
    {
        $this->EndDateRecurrence = $endDateRecurrence;
        
        return $this;
    }
    /**
     * Get NumberedRecurrence value
     * @return \StructType\EwsNumberedRecurrenceRangeType|null
     */
    public function getNumberedRecurrence(): ?\StructType\EwsNumberedRecurrenceRangeType
    {
        return $this->NumberedRecurrence;
    }
    /**
     * Set NumberedRecurrence value
     * @param \StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence
     * @return \StructType\EwsRecurrenceType
     */
    public function setNumberedRecurrence(?\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null): self
    {
        $this->NumberedRecurrence = $numberedRecurrence;
        
        return $this;
    }
}
