<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskType extends EwsItemType
{
    /**
     * The ActualWork
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ActualWork = null;
    /**
     * The AssignedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssignedTime = null;
    /**
     * The BillingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BillingInformation = null;
    /**
     * The ChangeCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ChangeCount = null;
    /**
     * The Companies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Companies = null;
    /**
     * The CompleteDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompleteDate = null;
    /**
     * The Contacts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Contacts = null;
    /**
     * The DelegationState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DelegationState = null;
    /**
     * The Delegator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Delegator = null;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DueDate = null;
    /**
     * The IsAssignmentEditable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $IsAssignmentEditable = null;
    /**
     * The IsComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsComplete = null;
    /**
     * The IsRecurring
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRecurring = null;
    /**
     * The IsTeamTask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsTeamTask = null;
    /**
     * The Mileage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Mileage = null;
    /**
     * The Owner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Owner = null;
    /**
     * The PercentComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $PercentComplete = null;
    /**
     * The Recurrence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsTaskRecurrenceType|null
     */
    protected ?\StructType\EwsTaskRecurrenceType $Recurrence = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The StatusDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StatusDescription = null;
    /**
     * The TotalWork
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalWork = null;
    /**
     * Constructor method for TaskType
     * @uses EwsTaskType::setActualWork()
     * @uses EwsTaskType::setAssignedTime()
     * @uses EwsTaskType::setBillingInformation()
     * @uses EwsTaskType::setChangeCount()
     * @uses EwsTaskType::setCompanies()
     * @uses EwsTaskType::setCompleteDate()
     * @uses EwsTaskType::setContacts()
     * @uses EwsTaskType::setDelegationState()
     * @uses EwsTaskType::setDelegator()
     * @uses EwsTaskType::setDueDate()
     * @uses EwsTaskType::setIsAssignmentEditable()
     * @uses EwsTaskType::setIsComplete()
     * @uses EwsTaskType::setIsRecurring()
     * @uses EwsTaskType::setIsTeamTask()
     * @uses EwsTaskType::setMileage()
     * @uses EwsTaskType::setOwner()
     * @uses EwsTaskType::setPercentComplete()
     * @uses EwsTaskType::setRecurrence()
     * @uses EwsTaskType::setStartDate()
     * @uses EwsTaskType::setStatus()
     * @uses EwsTaskType::setStatusDescription()
     * @uses EwsTaskType::setTotalWork()
     * @param int $actualWork
     * @param string $assignedTime
     * @param string $billingInformation
     * @param int $changeCount
     * @param \ArrayType\EwsArrayOfStringsType $companies
     * @param string $completeDate
     * @param \ArrayType\EwsArrayOfStringsType $contacts
     * @param string $delegationState
     * @param string $delegator
     * @param string $dueDate
     * @param int $isAssignmentEditable
     * @param bool $isComplete
     * @param bool $isRecurring
     * @param bool $isTeamTask
     * @param string $mileage
     * @param string $owner
     * @param float $percentComplete
     * @param \StructType\EwsTaskRecurrenceType $recurrence
     * @param string $startDate
     * @param string $status
     * @param string $statusDescription
     * @param int $totalWork
     */
    public function __construct(?int $actualWork = null, ?string $assignedTime = null, ?string $billingInformation = null, ?int $changeCount = null, ?\ArrayType\EwsArrayOfStringsType $companies = null, ?string $completeDate = null, ?\ArrayType\EwsArrayOfStringsType $contacts = null, ?string $delegationState = null, ?string $delegator = null, ?string $dueDate = null, ?int $isAssignmentEditable = null, ?bool $isComplete = null, ?bool $isRecurring = null, ?bool $isTeamTask = null, ?string $mileage = null, ?string $owner = null, ?float $percentComplete = null, ?\StructType\EwsTaskRecurrenceType $recurrence = null, ?string $startDate = null, ?string $status = null, ?string $statusDescription = null, ?int $totalWork = null)
    {
        $this
            ->setActualWork($actualWork)
            ->setAssignedTime($assignedTime)
            ->setBillingInformation($billingInformation)
            ->setChangeCount($changeCount)
            ->setCompanies($companies)
            ->setCompleteDate($completeDate)
            ->setContacts($contacts)
            ->setDelegationState($delegationState)
            ->setDelegator($delegator)
            ->setDueDate($dueDate)
            ->setIsAssignmentEditable($isAssignmentEditable)
            ->setIsComplete($isComplete)
            ->setIsRecurring($isRecurring)
            ->setIsTeamTask($isTeamTask)
            ->setMileage($mileage)
            ->setOwner($owner)
            ->setPercentComplete($percentComplete)
            ->setRecurrence($recurrence)
            ->setStartDate($startDate)
            ->setStatus($status)
            ->setStatusDescription($statusDescription)
            ->setTotalWork($totalWork);
    }
    /**
     * Get ActualWork value
     * @return int|null
     */
    public function getActualWork(): ?int
    {
        return $this->ActualWork;
    }
    /**
     * Set ActualWork value
     * @param int $actualWork
     * @return \StructType\EwsTaskType
     */
    public function setActualWork(?int $actualWork = null): self
    {
        // validation for constraint: int
        if (!is_null($actualWork) && !(is_int($actualWork) || ctype_digit($actualWork))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($actualWork, true), gettype($actualWork)), __LINE__);
        }
        $this->ActualWork = $actualWork;
        
        return $this;
    }
    /**
     * Get AssignedTime value
     * @return string|null
     */
    public function getAssignedTime(): ?string
    {
        return $this->AssignedTime;
    }
    /**
     * Set AssignedTime value
     * @param string $assignedTime
     * @return \StructType\EwsTaskType
     */
    public function setAssignedTime(?string $assignedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedTime) && !is_string($assignedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedTime, true), gettype($assignedTime)), __LINE__);
        }
        $this->AssignedTime = $assignedTime;
        
        return $this;
    }
    /**
     * Get BillingInformation value
     * @return string|null
     */
    public function getBillingInformation(): ?string
    {
        return $this->BillingInformation;
    }
    /**
     * Set BillingInformation value
     * @param string $billingInformation
     * @return \StructType\EwsTaskType
     */
    public function setBillingInformation(?string $billingInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($billingInformation) && !is_string($billingInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingInformation, true), gettype($billingInformation)), __LINE__);
        }
        $this->BillingInformation = $billingInformation;
        
        return $this;
    }
    /**
     * Get ChangeCount value
     * @return int|null
     */
    public function getChangeCount(): ?int
    {
        return $this->ChangeCount;
    }
    /**
     * Set ChangeCount value
     * @param int $changeCount
     * @return \StructType\EwsTaskType
     */
    public function setChangeCount(?int $changeCount = null): self
    {
        // validation for constraint: int
        if (!is_null($changeCount) && !(is_int($changeCount) || ctype_digit($changeCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeCount, true), gettype($changeCount)), __LINE__);
        }
        $this->ChangeCount = $changeCount;
        
        return $this;
    }
    /**
     * Get Companies value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getCompanies(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Companies;
    }
    /**
     * Set Companies value
     * @param \ArrayType\EwsArrayOfStringsType $companies
     * @return \StructType\EwsTaskType
     */
    public function setCompanies(?\ArrayType\EwsArrayOfStringsType $companies = null): self
    {
        $this->Companies = $companies;
        
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
     * @return \StructType\EwsTaskType
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
    /**
     * Get Contacts value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContacts(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \ArrayType\EwsArrayOfStringsType $contacts
     * @return \StructType\EwsTaskType
     */
    public function setContacts(?\ArrayType\EwsArrayOfStringsType $contacts = null): self
    {
        $this->Contacts = $contacts;
        
        return $this;
    }
    /**
     * Get DelegationState value
     * @return string|null
     */
    public function getDelegationState(): ?string
    {
        return $this->DelegationState;
    }
    /**
     * Set DelegationState value
     * @uses \EnumType\EwsTaskDelegateStateType::valueIsValid()
     * @uses \EnumType\EwsTaskDelegateStateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $delegationState
     * @return \StructType\EwsTaskType
     */
    public function setDelegationState(?string $delegationState = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsTaskDelegateStateType::valueIsValid($delegationState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsTaskDelegateStateType', is_array($delegationState) ? implode(', ', $delegationState) : var_export($delegationState, true), implode(', ', \EnumType\EwsTaskDelegateStateType::getValidValues())), __LINE__);
        }
        $this->DelegationState = $delegationState;
        
        return $this;
    }
    /**
     * Get Delegator value
     * @return string|null
     */
    public function getDelegator(): ?string
    {
        return $this->Delegator;
    }
    /**
     * Set Delegator value
     * @param string $delegator
     * @return \StructType\EwsTaskType
     */
    public function setDelegator(?string $delegator = null): self
    {
        // validation for constraint: string
        if (!is_null($delegator) && !is_string($delegator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegator, true), gettype($delegator)), __LINE__);
        }
        $this->Delegator = $delegator;
        
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
     * @return \StructType\EwsTaskType
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
     * Get IsAssignmentEditable value
     * @return int|null
     */
    public function getIsAssignmentEditable(): ?int
    {
        return $this->IsAssignmentEditable;
    }
    /**
     * Set IsAssignmentEditable value
     * @param int $isAssignmentEditable
     * @return \StructType\EwsTaskType
     */
    public function setIsAssignmentEditable(?int $isAssignmentEditable = null): self
    {
        // validation for constraint: int
        if (!is_null($isAssignmentEditable) && !(is_int($isAssignmentEditable) || ctype_digit($isAssignmentEditable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isAssignmentEditable, true), gettype($isAssignmentEditable)), __LINE__);
        }
        $this->IsAssignmentEditable = $isAssignmentEditable;
        
        return $this;
    }
    /**
     * Get IsComplete value
     * @return bool|null
     */
    public function getIsComplete(): ?bool
    {
        return $this->IsComplete;
    }
    /**
     * Set IsComplete value
     * @param bool $isComplete
     * @return \StructType\EwsTaskType
     */
    public function setIsComplete(?bool $isComplete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isComplete) && !is_bool($isComplete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isComplete, true), gettype($isComplete)), __LINE__);
        }
        $this->IsComplete = $isComplete;
        
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param bool $isRecurring
     * @return \StructType\EwsTaskType
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->IsRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get IsTeamTask value
     * @return bool|null
     */
    public function getIsTeamTask(): ?bool
    {
        return $this->IsTeamTask;
    }
    /**
     * Set IsTeamTask value
     * @param bool $isTeamTask
     * @return \StructType\EwsTaskType
     */
    public function setIsTeamTask(?bool $isTeamTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTeamTask) && !is_bool($isTeamTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTeamTask, true), gettype($isTeamTask)), __LINE__);
        }
        $this->IsTeamTask = $isTeamTask;
        
        return $this;
    }
    /**
     * Get Mileage value
     * @return string|null
     */
    public function getMileage(): ?string
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param string $mileage
     * @return \StructType\EwsTaskType
     */
    public function setMileage(?string $mileage = null): self
    {
        // validation for constraint: string
        if (!is_null($mileage) && !is_string($mileage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mileage, true), gettype($mileage)), __LINE__);
        }
        $this->Mileage = $mileage;
        
        return $this;
    }
    /**
     * Get Owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param string $owner
     * @return \StructType\EwsTaskType
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->Owner = $owner;
        
        return $this;
    }
    /**
     * Get PercentComplete value
     * @return float|null
     */
    public function getPercentComplete(): ?float
    {
        return $this->PercentComplete;
    }
    /**
     * Set PercentComplete value
     * @param float $percentComplete
     * @return \StructType\EwsTaskType
     */
    public function setPercentComplete(?float $percentComplete = null): self
    {
        // validation for constraint: float
        if (!is_null($percentComplete) && !(is_float($percentComplete) || is_numeric($percentComplete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentComplete, true), gettype($percentComplete)), __LINE__);
        }
        $this->PercentComplete = $percentComplete;
        
        return $this;
    }
    /**
     * Get Recurrence value
     * @return \StructType\EwsTaskRecurrenceType|null
     */
    public function getRecurrence(): ?\StructType\EwsTaskRecurrenceType
    {
        return $this->Recurrence;
    }
    /**
     * Set Recurrence value
     * @param \StructType\EwsTaskRecurrenceType $recurrence
     * @return \StructType\EwsTaskType
     */
    public function setRecurrence(?\StructType\EwsTaskRecurrenceType $recurrence = null): self
    {
        $this->Recurrence = $recurrence;
        
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
     * @return \StructType\EwsTaskType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\EwsTaskStatusType::valueIsValid()
     * @uses \EnumType\EwsTaskStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \StructType\EwsTaskType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsTaskStatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsTaskStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\EwsTaskStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription(): ?string
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \StructType\EwsTaskType
     */
    public function setStatusDescription(?string $statusDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDescription, true), gettype($statusDescription)), __LINE__);
        }
        $this->StatusDescription = $statusDescription;
        
        return $this;
    }
    /**
     * Get TotalWork value
     * @return int|null
     */
    public function getTotalWork(): ?int
    {
        return $this->TotalWork;
    }
    /**
     * Set TotalWork value
     * @param int $totalWork
     * @return \StructType\EwsTaskType
     */
    public function setTotalWork(?int $totalWork = null): self
    {
        // validation for constraint: int
        if (!is_null($totalWork) && !(is_int($totalWork) || ctype_digit($totalWork))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalWork, true), gettype($totalWork)), __LINE__);
        }
        $this->TotalWork = $totalWork;
        
        return $this;
    }
}
