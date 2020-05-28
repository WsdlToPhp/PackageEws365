<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsAbsoluteDateTransitionType
     */
    public $AbsoluteDateTransition;
    /**
     * The RecurringDayTransition
     * @var \Ews\StructType\EwsRecurringDayTransitionType
     */
    public $RecurringDayTransition;
    /**
     * The RecurringDateTransition
     * @var \Ews\StructType\EwsRecurringDateTransitionType
     */
    public $RecurringDateTransition;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for ArrayOfTransitionsType
     * @uses EwsArrayOfTransitionsType::setAbsoluteDateTransition()
     * @uses EwsArrayOfTransitionsType::setRecurringDayTransition()
     * @uses EwsArrayOfTransitionsType::setRecurringDateTransition()
     * @uses EwsArrayOfTransitionsType::setId()
     * @param \Ews\StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition
     * @param \Ews\StructType\EwsRecurringDayTransitionType $recurringDayTransition
     * @param \Ews\StructType\EwsRecurringDateTransitionType $recurringDateTransition
     * @param string $id
     */
    public function __construct(\Ews\StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition = null, \Ews\StructType\EwsRecurringDayTransitionType $recurringDayTransition = null, \Ews\StructType\EwsRecurringDateTransitionType $recurringDateTransition = null, $id = null)
    {
        $this
            ->setAbsoluteDateTransition($absoluteDateTransition)
            ->setRecurringDayTransition($recurringDayTransition)
            ->setRecurringDateTransition($recurringDateTransition)
            ->setId($id);
    }
    /**
     * Get AbsoluteDateTransition value
     * @return \Ews\StructType\EwsAbsoluteDateTransitionType|null
     */
    public function getAbsoluteDateTransition()
    {
        return $this->AbsoluteDateTransition;
    }
    /**
     * Set AbsoluteDateTransition value
     * @param \Ews\StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function setAbsoluteDateTransition(\Ews\StructType\EwsAbsoluteDateTransitionType $absoluteDateTransition = null)
    {
        $this->AbsoluteDateTransition = $absoluteDateTransition;
        return $this;
    }
    /**
     * Get RecurringDayTransition value
     * @return \Ews\StructType\EwsRecurringDayTransitionType|null
     */
    public function getRecurringDayTransition()
    {
        return $this->RecurringDayTransition;
    }
    /**
     * Set RecurringDayTransition value
     * @param \Ews\StructType\EwsRecurringDayTransitionType $recurringDayTransition
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function setRecurringDayTransition(\Ews\StructType\EwsRecurringDayTransitionType $recurringDayTransition = null)
    {
        $this->RecurringDayTransition = $recurringDayTransition;
        return $this;
    }
    /**
     * Get RecurringDateTransition value
     * @return \Ews\StructType\EwsRecurringDateTransitionType|null
     */
    public function getRecurringDateTransition()
    {
        return $this->RecurringDateTransition;
    }
    /**
     * Set RecurringDateTransition value
     * @param \Ews\StructType\EwsRecurringDateTransitionType $recurringDateTransition
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function setRecurringDateTransition(\Ews\StructType\EwsRecurringDateTransitionType $recurringDateTransition = null)
    {
        $this->RecurringDateTransition = $recurringDateTransition;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
}
