<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $FlagStatus;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DueDate = null;
    /**
     * The CompleteDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompleteDate = null;
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
    public function __construct(string $flagStatus, ?string $startDate = null, ?string $dueDate = null, ?string $completeDate = null)
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
    public function getFlagStatus(): string
    {
        return $this->FlagStatus;
    }
    /**
     * Set FlagStatus value
     * @uses \EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \EnumType\EwsFlagStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flagStatus
     * @return \StructType\EwsFlagType
     */
    public function setFlagStatus(string $flagStatus): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsFlagStatusType::valueIsValid($flagStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFlagStatusType', is_array($flagStatus) ? implode(', ', $flagStatus) : var_export($flagStatus, true), implode(', ', \EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->FlagStatus = $flagStatus;
        
        return $this;
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
     * @return \StructType\EwsFlagType
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
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \StructType\EwsFlagType
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get CompleteDate value
     * @return string|null
     */
    public function getCompleteDate(): ?string
    {
        return $this->CompleteDate;
    }
    /**
     * Set CompleteDate value
     * @param string $completeDate
     * @return \StructType\EwsFlagType
     */
    public function setCompleteDate(?string $completeDate = null): self
    {
        // validation for constraint: string
        if (!is_null($completeDate) && !is_string($completeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completeDate, true), gettype($completeDate)), __LINE__);
        }
        $this->CompleteDate = $completeDate;
        
        return $this;
    }
}
