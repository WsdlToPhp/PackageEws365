<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ActualWork;
    /**
     * The AssignedTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $AssignedTime;
    /**
     * The BillingInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingInformation;
    /**
     * The ChangeCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChangeCount;
    /**
     * The Companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Companies;
    /**
     * The CompleteDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $CompleteDate;
    /**
     * The Contacts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Contacts;
    /**
     * The DelegationState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DelegationState;
    /**
     * The Delegator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Delegator;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DueDate;
    /**
     * The IsAssignmentEditable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IsAssignmentEditable;
    /**
     * The IsComplete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsComplete;
    /**
     * The IsRecurring
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsRecurring;
    /**
     * The IsTeamTask
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsTeamTask;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Mileage;
    /**
     * The Owner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Owner;
    /**
     * The PercentComplete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var double
     */
    public $PercentComplete;
    /**
     * The Recurrence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTaskRecurrenceType
     */
    public $Recurrence;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $StartDate;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * The TotalWork
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalWork;
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
     * @param dateTime $assignedTime
     * @param string $billingInformation
     * @param int $changeCount
     * @param \Ews\ArrayType\EwsArrayOfStringsType $companies
     * @param dateTime $completeDate
     * @param \Ews\ArrayType\EwsArrayOfStringsType $contacts
     * @param string $delegationState
     * @param string $delegator
     * @param dateTime $dueDate
     * @param int $isAssignmentEditable
     * @param boolean $isComplete
     * @param boolean $isRecurring
     * @param boolean $isTeamTask
     * @param string $mileage
     * @param string $owner
     * @param double $percentComplete
     * @param \Ews\StructType\EwsTaskRecurrenceType $recurrence
     * @param dateTime $startDate
     * @param string $status
     * @param string $statusDescription
     * @param int $totalWork
     */
    public function __construct($actualWork = null, $assignedTime = null, $billingInformation = null, $changeCount = null, \Ews\ArrayType\EwsArrayOfStringsType $companies = null, $completeDate = null, \Ews\ArrayType\EwsArrayOfStringsType $contacts = null, $delegationState = null, $delegator = null, $dueDate = null, $isAssignmentEditable = null, $isComplete = null, $isRecurring = null, $isTeamTask = null, $mileage = null, $owner = null, $percentComplete = null, \Ews\StructType\EwsTaskRecurrenceType $recurrence = null, $startDate = null, $status = null, $statusDescription = null, $totalWork = null)
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
    public function getActualWork()
    {
        return $this->ActualWork;
    }
    /**
     * Set ActualWork value
     * @param int $actualWork
     * @return \Ews\StructType\EwsTaskType
     */
    public function setActualWork($actualWork = null)
    {
        $this->ActualWork = $actualWork;
        return $this;
    }
    /**
     * Get AssignedTime value
     * @return dateTime|null
     */
    public function getAssignedTime()
    {
        return $this->AssignedTime;
    }
    /**
     * Set AssignedTime value
     * @param dateTime $assignedTime
     * @return \Ews\StructType\EwsTaskType
     */
    public function setAssignedTime($assignedTime = null)
    {
        $this->AssignedTime = $assignedTime;
        return $this;
    }
    /**
     * Get BillingInformation value
     * @return string|null
     */
    public function getBillingInformation()
    {
        return $this->BillingInformation;
    }
    /**
     * Set BillingInformation value
     * @param string $billingInformation
     * @return \Ews\StructType\EwsTaskType
     */
    public function setBillingInformation($billingInformation = null)
    {
        $this->BillingInformation = $billingInformation;
        return $this;
    }
    /**
     * Get ChangeCount value
     * @return int|null
     */
    public function getChangeCount()
    {
        return $this->ChangeCount;
    }
    /**
     * Set ChangeCount value
     * @param int $changeCount
     * @return \Ews\StructType\EwsTaskType
     */
    public function setChangeCount($changeCount = null)
    {
        $this->ChangeCount = $changeCount;
        return $this;
    }
    /**
     * Get Companies value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getCompanies()
    {
        return $this->Companies;
    }
    /**
     * Set Companies value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $companies
     * @return \Ews\StructType\EwsTaskType
     */
    public function setCompanies(\Ews\ArrayType\EwsArrayOfStringsType $companies = null)
    {
        $this->Companies = $companies;
        return $this;
    }
    /**
     * Get CompleteDate value
     * @return dateTime|null
     */
    public function getCompleteDate()
    {
        return $this->CompleteDate;
    }
    /**
     * Set CompleteDate value
     * @param dateTime $completeDate
     * @return \Ews\StructType\EwsTaskType
     */
    public function setCompleteDate($completeDate = null)
    {
        $this->CompleteDate = $completeDate;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $contacts
     * @return \Ews\StructType\EwsTaskType
     */
    public function setContacts(\Ews\ArrayType\EwsArrayOfStringsType $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Get DelegationState value
     * @return string|null
     */
    public function getDelegationState()
    {
        return $this->DelegationState;
    }
    /**
     * Set DelegationState value
     * @uses \Ews\EnumType\EwsTaskDelegateStateType::valueIsValid()
     * @uses \Ews\EnumType\EwsTaskDelegateStateType::getValidValues()
     * @param string $delegationState
     * @return \Ews\StructType\EwsTaskType
     */
    public function setDelegationState($delegationState = null)
    {
        if (!\Ews\EnumType\EwsTaskDelegateStateType::valueIsValid($delegationState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $delegationState, implode(', ', \Ews\EnumType\EwsTaskDelegateStateType::getValidValues())), __LINE__);
        }
        $this->DelegationState = $delegationState;
        return $this;
    }
    /**
     * Get Delegator value
     * @return string|null
     */
    public function getDelegator()
    {
        return $this->Delegator;
    }
    /**
     * Set Delegator value
     * @param string $delegator
     * @return \Ews\StructType\EwsTaskType
     */
    public function setDelegator($delegator = null)
    {
        $this->Delegator = $delegator;
        return $this;
    }
    /**
     * Get DueDate value
     * @return dateTime|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param dateTime $dueDate
     * @return \Ews\StructType\EwsTaskType
     */
    public function setDueDate($dueDate = null)
    {
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Get IsAssignmentEditable value
     * @return int|null
     */
    public function getIsAssignmentEditable()
    {
        return $this->IsAssignmentEditable;
    }
    /**
     * Set IsAssignmentEditable value
     * @param int $isAssignmentEditable
     * @return \Ews\StructType\EwsTaskType
     */
    public function setIsAssignmentEditable($isAssignmentEditable = null)
    {
        $this->IsAssignmentEditable = $isAssignmentEditable;
        return $this;
    }
    /**
     * Get IsComplete value
     * @return boolean|null
     */
    public function getIsComplete()
    {
        return $this->IsComplete;
    }
    /**
     * Set IsComplete value
     * @param boolean $isComplete
     * @return \Ews\StructType\EwsTaskType
     */
    public function setIsComplete($isComplete = null)
    {
        $this->IsComplete = $isComplete;
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return boolean|null
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param boolean $isRecurring
     * @return \Ews\StructType\EwsTaskType
     */
    public function setIsRecurring($isRecurring = null)
    {
        $this->IsRecurring = $isRecurring;
        return $this;
    }
    /**
     * Get IsTeamTask value
     * @return boolean|null
     */
    public function getIsTeamTask()
    {
        return $this->IsTeamTask;
    }
    /**
     * Set IsTeamTask value
     * @param boolean $isTeamTask
     * @return \Ews\StructType\EwsTaskType
     */
    public function setIsTeamTask($isTeamTask = null)
    {
        $this->IsTeamTask = $isTeamTask;
        return $this;
    }
    /**
     * Get Mileage value
     * @return string|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param string $mileage
     * @return \Ews\StructType\EwsTaskType
     */
    public function setMileage($mileage = null)
    {
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get Owner value
     * @return string|null
     */
    public function getOwner()
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param string $owner
     * @return \Ews\StructType\EwsTaskType
     */
    public function setOwner($owner = null)
    {
        $this->Owner = $owner;
        return $this;
    }
    /**
     * Get PercentComplete value
     * @return double|null
     */
    public function getPercentComplete()
    {
        return $this->PercentComplete;
    }
    /**
     * Set PercentComplete value
     * @param double $percentComplete
     * @return \Ews\StructType\EwsTaskType
     */
    public function setPercentComplete($percentComplete = null)
    {
        $this->PercentComplete = $percentComplete;
        return $this;
    }
    /**
     * Get Recurrence value
     * @return \Ews\StructType\EwsTaskRecurrenceType|null
     */
    public function getRecurrence()
    {
        return $this->Recurrence;
    }
    /**
     * Set Recurrence value
     * @param \Ews\StructType\EwsTaskRecurrenceType $recurrence
     * @return \Ews\StructType\EwsTaskType
     */
    public function setRecurrence(\Ews\StructType\EwsTaskRecurrenceType $recurrence = null)
    {
        $this->Recurrence = $recurrence;
        return $this;
    }
    /**
     * Get StartDate value
     * @return dateTime|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param dateTime $startDate
     * @return \Ews\StructType\EwsTaskType
     */
    public function setStartDate($startDate = null)
    {
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Ews\EnumType\EwsTaskStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsTaskStatusType::getValidValues()
     * @param string $status
     * @return \Ews\StructType\EwsTaskType
     */
    public function setStatus($status = null)
    {
        if (!\Ews\EnumType\EwsTaskStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Ews\EnumType\EwsTaskStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Ews\StructType\EwsTaskType
     */
    public function setStatusDescription($statusDescription = null)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Get TotalWork value
     * @return int|null
     */
    public function getTotalWork()
    {
        return $this->TotalWork;
    }
    /**
     * Set TotalWork value
     * @param int $totalWork
     * @return \Ews\StructType\EwsTaskType
     */
    public function setTotalWork($totalWork = null)
    {
        $this->TotalWork = $totalWork;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTaskType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
