<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskRecurrenceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskRecurrenceType extends AbstractStructBase
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
     * The DailyRegeneration
     * @var \StructType\EwsDailyRegeneratingPatternType|null
     */
    protected ?\StructType\EwsDailyRegeneratingPatternType $DailyRegeneration = null;
    /**
     * The WeeklyRegeneration
     * @var \StructType\EwsWeeklyRegeneratingPatternType|null
     */
    protected ?\StructType\EwsWeeklyRegeneratingPatternType $WeeklyRegeneration = null;
    /**
     * The MonthlyRegeneration
     * @var \StructType\EwsMonthlyRegeneratingPatternType|null
     */
    protected ?\StructType\EwsMonthlyRegeneratingPatternType $MonthlyRegeneration = null;
    /**
     * The YearlyRegeneration
     * @var \StructType\EwsYearlyRegeneratingPatternType|null
     */
    protected ?\StructType\EwsYearlyRegeneratingPatternType $YearlyRegeneration = null;
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
     * Constructor method for TaskRecurrenceType
     * @uses EwsTaskRecurrenceType::setRelativeYearlyRecurrence()
     * @uses EwsTaskRecurrenceType::setAbsoluteYearlyRecurrence()
     * @uses EwsTaskRecurrenceType::setRelativeMonthlyRecurrence()
     * @uses EwsTaskRecurrenceType::setAbsoluteMonthlyRecurrence()
     * @uses EwsTaskRecurrenceType::setWeeklyRecurrence()
     * @uses EwsTaskRecurrenceType::setDailyRecurrence()
     * @uses EwsTaskRecurrenceType::setDailyRegeneration()
     * @uses EwsTaskRecurrenceType::setWeeklyRegeneration()
     * @uses EwsTaskRecurrenceType::setMonthlyRegeneration()
     * @uses EwsTaskRecurrenceType::setYearlyRegeneration()
     * @uses EwsTaskRecurrenceType::setNoEndRecurrence()
     * @uses EwsTaskRecurrenceType::setEndDateRecurrence()
     * @uses EwsTaskRecurrenceType::setNumberedRecurrence()
     * @param \StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @param \StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence
     * @param \StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence
     * @param \StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence
     * @param \StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence
     * @param \StructType\EwsDailyRecurrencePatternType $dailyRecurrence
     * @param \StructType\EwsDailyRegeneratingPatternType $dailyRegeneration
     * @param \StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration
     * @param \StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration
     * @param \StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration
     * @param \StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence
     * @param \StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence
     * @param \StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence
     */
    public function __construct(?\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, ?\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence = null, ?\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence = null, ?\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence = null, ?\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence = null, ?\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null, ?\StructType\EwsDailyRegeneratingPatternType $dailyRegeneration = null, ?\StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration = null, ?\StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration = null, ?\StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration = null, ?\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence = null, ?\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence = null, ?\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null)
    {
        $this
            ->setRelativeYearlyRecurrence($relativeYearlyRecurrence)
            ->setAbsoluteYearlyRecurrence($absoluteYearlyRecurrence)
            ->setRelativeMonthlyRecurrence($relativeMonthlyRecurrence)
            ->setAbsoluteMonthlyRecurrence($absoluteMonthlyRecurrence)
            ->setWeeklyRecurrence($weeklyRecurrence)
            ->setDailyRecurrence($dailyRecurrence)
            ->setDailyRegeneration($dailyRegeneration)
            ->setWeeklyRegeneration($weeklyRegeneration)
            ->setMonthlyRegeneration($monthlyRegeneration)
            ->setYearlyRegeneration($yearlyRegeneration)
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
     */
    public function setDailyRecurrence(?\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null): self
    {
        $this->DailyRecurrence = $dailyRecurrence;
        
        return $this;
    }
    /**
     * Get DailyRegeneration value
     * @return \StructType\EwsDailyRegeneratingPatternType|null
     */
    public function getDailyRegeneration(): ?\StructType\EwsDailyRegeneratingPatternType
    {
        return $this->DailyRegeneration;
    }
    /**
     * Set DailyRegeneration value
     * @param \StructType\EwsDailyRegeneratingPatternType $dailyRegeneration
     * @return \StructType\EwsTaskRecurrenceType
     */
    public function setDailyRegeneration(?\StructType\EwsDailyRegeneratingPatternType $dailyRegeneration = null): self
    {
        $this->DailyRegeneration = $dailyRegeneration;
        
        return $this;
    }
    /**
     * Get WeeklyRegeneration value
     * @return \StructType\EwsWeeklyRegeneratingPatternType|null
     */
    public function getWeeklyRegeneration(): ?\StructType\EwsWeeklyRegeneratingPatternType
    {
        return $this->WeeklyRegeneration;
    }
    /**
     * Set WeeklyRegeneration value
     * @param \StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration
     * @return \StructType\EwsTaskRecurrenceType
     */
    public function setWeeklyRegeneration(?\StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration = null): self
    {
        $this->WeeklyRegeneration = $weeklyRegeneration;
        
        return $this;
    }
    /**
     * Get MonthlyRegeneration value
     * @return \StructType\EwsMonthlyRegeneratingPatternType|null
     */
    public function getMonthlyRegeneration(): ?\StructType\EwsMonthlyRegeneratingPatternType
    {
        return $this->MonthlyRegeneration;
    }
    /**
     * Set MonthlyRegeneration value
     * @param \StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration
     * @return \StructType\EwsTaskRecurrenceType
     */
    public function setMonthlyRegeneration(?\StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration = null): self
    {
        $this->MonthlyRegeneration = $monthlyRegeneration;
        
        return $this;
    }
    /**
     * Get YearlyRegeneration value
     * @return \StructType\EwsYearlyRegeneratingPatternType|null
     */
    public function getYearlyRegeneration(): ?\StructType\EwsYearlyRegeneratingPatternType
    {
        return $this->YearlyRegeneration;
    }
    /**
     * Set YearlyRegeneration value
     * @param \StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration
     * @return \StructType\EwsTaskRecurrenceType
     */
    public function setYearlyRegeneration(?\StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration = null): self
    {
        $this->YearlyRegeneration = $yearlyRegeneration;
        
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
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
     * @return \StructType\EwsTaskRecurrenceType
     */
    public function setNumberedRecurrence(?\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null): self
    {
        $this->NumberedRecurrence = $numberedRecurrence;
        
        return $this;
    }
}
