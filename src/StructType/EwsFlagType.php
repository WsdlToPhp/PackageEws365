<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlagType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlagType extends AbstractStructBase
{
    /**
     * The FlagStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FlagStatus;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DueDate;
    /**
     * The CompleteDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompleteDate;
    /**
     * Constructor method for FlagType
     * @uses EwsFlagType::setFlagStatus()
     * @uses EwsFlagType::setStartDate()
     * @uses EwsFlagType::setDueDate()
     * @uses EwsFlagType::setCompleteDate()
     * @param string $flagStatus
     * @param string $startDate
     * @param string $dueDate
     * @param string $completeDate
     */
    public function __construct($flagStatus = null, $startDate = null, $dueDate = null, $completeDate = null)
    {
        $this
            ->setFlagStatus($flagStatus)
            ->setStartDate($startDate)
            ->setDueDate($dueDate)
            ->setCompleteDate($completeDate);
    }
    /**
     * Get FlagStatus value
     * @return string
     */
    public function getFlagStatus()
    {
        return $this->FlagStatus;
    }
    /**
     * Set FlagStatus value
     * @uses \Ews\EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsFlagStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flagStatus
     * @return \Ews\StructType\EwsFlagType
     */
    public function setFlagStatus($flagStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFlagStatusType::valueIsValid($flagStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFlagStatusType', is_array($flagStatus) ? implode(', ', $flagStatus) : var_export($flagStatus, true), implode(', ', \Ews\EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->FlagStatus = $flagStatus;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Get CompleteDate value
     * @return string|null
     */
    public function getCompleteDate()
    {
        return $this->CompleteDate;
    }
    /**
     * Set CompleteDate value
     * @param string $completeDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setCompleteDate($completeDate = null)
    {
        // validation for constraint: string
        if (!is_null($completeDate) && !is_string($completeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completeDate, true), gettype($completeDate)), __LINE__);
        }
        $this->CompleteDate = $completeDate;
        return $this;
    }
}
