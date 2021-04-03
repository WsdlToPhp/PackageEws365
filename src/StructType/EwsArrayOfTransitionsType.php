<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfTransitionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTransitionsType extends AbstractStructBase
{
    /**
     * The AbsoluteDateTransition
     * @var \StructType\EwsAbsoluteDateTransitionType|null
     */
    protected ?\StructType\EwsAbsoluteDateTransitionType $AbsoluteDateTransition = null;
    /**
     * The RecurringDayTransition
     * @var \StructType\EwsRecurringDayTransitionType|null
     */
    protected ?\StructType\EwsRecurringDayTransitionType $RecurringDayTransition = null;
    /**
     * The RecurringDateTransition
     * @var \StructType\EwsRecurringDateTransitionType|null
     */
    protected ?\StructType\EwsRecurringDateTransitionType $RecurringDateTransition = null;
    /**
     * The Id
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * Constructor method for ArrayOfTransitionsType
     * @uses EwsArrayOfTransitionsType::setAbsoluteDateTransition()
     * @uses EwsArrayOfTransitionsType::setRecurringDayTransition()
     * @uses EwsArrayOfTransitionsType::setRecurringDateTransition()
     * @uses EwsArrayOfTransitionsType::setId()
     * @param \StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition
     * @param \StructType\EwsRecurringDayTransitionType $recurringDayTransition
     * @param \StructType\EwsRecurringDateTransitionType $recurringDateTransition
     * @param string $id
     */
    public function __construct(?\StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition = null, ?\StructType\EwsRecurringDayTransitionType $recurringDayTransition = null, ?\StructType\EwsRecurringDateTransitionType $recurringDateTransition = null, ?string $id = null)
    {
        $this
            ->setAbsoluteDateTransition($absoluteDateTransition)
            ->setRecurringDayTransition($recurringDayTransition)
            ->setRecurringDateTransition($recurringDateTransition)
            ->setId($id);
    }
    /**
     * Get AbsoluteDateTransition value
     * @return \StructType\EwsAbsoluteDateTransitionType|null
     */
    public function getAbsoluteDateTransition(): ?\StructType\EwsAbsoluteDateTransitionType
    {
        return $this->AbsoluteDateTransition;
    }
    /**
     * Set AbsoluteDateTransition value
     * @param \StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition
     * @return \StructType\EwsArrayOfTransitionsType
     */
    public function setAbsoluteDateTransition(?\StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition = null): self
    {
        $this->AbsoluteDateTransition = $absoluteDateTransition;
        
        return $this;
    }
    /**
     * Get RecurringDayTransition value
     * @return \StructType\EwsRecurringDayTransitionType|null
     */
    public function getRecurringDayTransition(): ?\StructType\EwsRecurringDayTransitionType
    {
        return $this->RecurringDayTransition;
    }
    /**
     * Set RecurringDayTransition value
     * @param \StructType\EwsRecurringDayTransitionType $recurringDayTransition
     * @return \StructType\EwsArrayOfTransitionsType
     */
    public function setRecurringDayTransition(?\StructType\EwsRecurringDayTransitionType $recurringDayTransition = null): self
    {
        $this->RecurringDayTransition = $recurringDayTransition;
        
        return $this;
    }
    /**
     * Get RecurringDateTransition value
     * @return \StructType\EwsRecurringDateTransitionType|null
     */
    public function getRecurringDateTransition(): ?\StructType\EwsRecurringDateTransitionType
    {
        return $this->RecurringDateTransition;
    }
    /**
     * Set RecurringDateTransition value
     * @param \StructType\EwsRecurringDateTransitionType $recurringDateTransition
     * @return \StructType\EwsArrayOfTransitionsType
     */
    public function setRecurringDateTransition(?\StructType\EwsRecurringDateTransitionType $recurringDateTransition = null): self
    {
        $this->RecurringDateTransition = $recurringDateTransition;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsArrayOfTransitionsType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
