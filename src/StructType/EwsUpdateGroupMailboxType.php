<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateGroupMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateGroupMailboxType extends EwsBaseRequestType
{
    /**
     * The GroupSmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $GroupSmtpAddress;
    /**
     * The ForceConfigurationAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ForceConfigurationAction;
    /**
     * The ExecutingUserSmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $ExecutingUserSmtpAddress;
    /**
     * The DomainController
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DomainController;
    /**
     * The MemberIdentifierType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MemberIdentifierType;
    /**
     * The AddedMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $AddedMembers;
    /**
     * The RemovedMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $RemovedMembers;
    /**
     * The AddedPendingMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $AddedPendingMembers;
    /**
     * The RemovedPendingMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $RemovedPendingMembers;
    /**
     * The CalendarMemberReadOnly
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $CalendarMemberReadOnly;
    /**
     * The SuppressWarmupMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SuppressWarmupMessage;
    /**
     * The AllowOnlyMembersToPost
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AllowOnlyMembersToPost;
    /**
     * Constructor method for UpdateGroupMailboxType
     * @uses EwsUpdateGroupMailboxType::setGroupSmtpAddress()
     * @uses EwsUpdateGroupMailboxType::setForceConfigurationAction()
     * @uses EwsUpdateGroupMailboxType::setExecutingUserSmtpAddress()
     * @uses EwsUpdateGroupMailboxType::setDomainController()
     * @uses EwsUpdateGroupMailboxType::setMemberIdentifierType()
     * @uses EwsUpdateGroupMailboxType::setAddedMembers()
     * @uses EwsUpdateGroupMailboxType::setRemovedMembers()
     * @uses EwsUpdateGroupMailboxType::setAddedPendingMembers()
     * @uses EwsUpdateGroupMailboxType::setRemovedPendingMembers()
     * @uses EwsUpdateGroupMailboxType::setCalendarMemberReadOnly()
     * @uses EwsUpdateGroupMailboxType::setSuppressWarmupMessage()
     * @uses EwsUpdateGroupMailboxType::setAllowOnlyMembersToPost()
     * @param string $groupSmtpAddress
     * @param string $forceConfigurationAction
     * @param string $executingUserSmtpAddress
     * @param string $domainController
     * @param string $memberIdentifierType
     * @param \Ews\ArrayType\EwsArrayOfStringsType $addedMembers
     * @param \Ews\ArrayType\EwsArrayOfStringsType $removedMembers
     * @param \Ews\ArrayType\EwsArrayOfStringsType $addedPendingMembers
     * @param \Ews\ArrayType\EwsArrayOfStringsType $removedPendingMembers
     * @param bool $calendarMemberReadOnly
     * @param bool $suppressWarmupMessage
     * @param bool $allowOnlyMembersToPost
     */
    public function __construct($groupSmtpAddress = null, $forceConfigurationAction = null, $executingUserSmtpAddress = null, $domainController = null, $memberIdentifierType = null, \Ews\ArrayType\EwsArrayOfStringsType $addedMembers = null, \Ews\ArrayType\EwsArrayOfStringsType $removedMembers = null, \Ews\ArrayType\EwsArrayOfStringsType $addedPendingMembers = null, \Ews\ArrayType\EwsArrayOfStringsType $removedPendingMembers = null, $calendarMemberReadOnly = null, $suppressWarmupMessage = null, $allowOnlyMembersToPost = null)
    {
        $this
            ->setGroupSmtpAddress($groupSmtpAddress)
            ->setForceConfigurationAction($forceConfigurationAction)
            ->setExecutingUserSmtpAddress($executingUserSmtpAddress)
            ->setDomainController($domainController)
            ->setMemberIdentifierType($memberIdentifierType)
            ->setAddedMembers($addedMembers)
            ->setRemovedMembers($removedMembers)
            ->setAddedPendingMembers($addedPendingMembers)
            ->setRemovedPendingMembers($removedPendingMembers)
            ->setCalendarMemberReadOnly($calendarMemberReadOnly)
            ->setSuppressWarmupMessage($suppressWarmupMessage)
            ->setAllowOnlyMembersToPost($allowOnlyMembersToPost);
    }
    /**
     * Get GroupSmtpAddress value
     * @return string
     */
    public function getGroupSmtpAddress()
    {
        return $this->GroupSmtpAddress;
    }
    /**
     * Set GroupSmtpAddress value
     * @param string $groupSmtpAddress
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setGroupSmtpAddress($groupSmtpAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($groupSmtpAddress) && strlen($groupSmtpAddress) < 1) || (is_array($groupSmtpAddress) && count($groupSmtpAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($groupSmtpAddress) && !is_string($groupSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupSmtpAddress)), __LINE__);
        }
        $this->GroupSmtpAddress = $groupSmtpAddress;
        return $this;
    }
    /**
     * Get ForceConfigurationAction value
     * @return string
     */
    public function getForceConfigurationAction()
    {
        return $this->ForceConfigurationAction;
    }
    /**
     * Set ForceConfigurationAction value
     * @uses \Ews\EnumType\EwsGroupMailboxConfigurationActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsGroupMailboxConfigurationActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $forceConfigurationAction
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setForceConfigurationAction($forceConfigurationAction = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsGroupMailboxConfigurationActionType::valueIsValid($forceConfigurationAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $forceConfigurationAction, implode(', ', \Ews\EnumType\EwsGroupMailboxConfigurationActionType::getValidValues())), __LINE__);
        }
        $this->ForceConfigurationAction = $forceConfigurationAction;
        return $this;
    }
    /**
     * Get ExecutingUserSmtpAddress value
     * @return string|null
     */
    public function getExecutingUserSmtpAddress()
    {
        return $this->ExecutingUserSmtpAddress;
    }
    /**
     * Set ExecutingUserSmtpAddress value
     * @param string $executingUserSmtpAddress
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setExecutingUserSmtpAddress($executingUserSmtpAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($executingUserSmtpAddress) && strlen($executingUserSmtpAddress) < 1) || (is_array($executingUserSmtpAddress) && count($executingUserSmtpAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($executingUserSmtpAddress) && !is_string($executingUserSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($executingUserSmtpAddress)), __LINE__);
        }
        $this->ExecutingUserSmtpAddress = $executingUserSmtpAddress;
        return $this;
    }
    /**
     * Get DomainController value
     * @return string|null
     */
    public function getDomainController()
    {
        return $this->DomainController;
    }
    /**
     * Set DomainController value
     * @param string $domainController
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setDomainController($domainController = null)
    {
        // validation for constraint: string
        if (!is_null($domainController) && !is_string($domainController)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainController)), __LINE__);
        }
        $this->DomainController = $domainController;
        return $this;
    }
    /**
     * Get MemberIdentifierType value
     * @return string|null
     */
    public function getMemberIdentifierType()
    {
        return $this->MemberIdentifierType;
    }
    /**
     * Set MemberIdentifierType value
     * @uses \Ews\EnumType\EwsGroupMemberIdentifierType::valueIsValid()
     * @uses \Ews\EnumType\EwsGroupMemberIdentifierType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $memberIdentifierType
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setMemberIdentifierType($memberIdentifierType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsGroupMemberIdentifierType::valueIsValid($memberIdentifierType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $memberIdentifierType, implode(', ', \Ews\EnumType\EwsGroupMemberIdentifierType::getValidValues())), __LINE__);
        }
        $this->MemberIdentifierType = $memberIdentifierType;
        return $this;
    }
    /**
     * Get AddedMembers value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getAddedMembers()
    {
        return $this->AddedMembers;
    }
    /**
     * Set AddedMembers value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $addedMembers
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setAddedMembers(\Ews\ArrayType\EwsArrayOfStringsType $addedMembers = null)
    {
        $this->AddedMembers = $addedMembers;
        return $this;
    }
    /**
     * Get RemovedMembers value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getRemovedMembers()
    {
        return $this->RemovedMembers;
    }
    /**
     * Set RemovedMembers value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $removedMembers
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setRemovedMembers(\Ews\ArrayType\EwsArrayOfStringsType $removedMembers = null)
    {
        $this->RemovedMembers = $removedMembers;
        return $this;
    }
    /**
     * Get AddedPendingMembers value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getAddedPendingMembers()
    {
        return $this->AddedPendingMembers;
    }
    /**
     * Set AddedPendingMembers value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $addedPendingMembers
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setAddedPendingMembers(\Ews\ArrayType\EwsArrayOfStringsType $addedPendingMembers = null)
    {
        $this->AddedPendingMembers = $addedPendingMembers;
        return $this;
    }
    /**
     * Get RemovedPendingMembers value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getRemovedPendingMembers()
    {
        return $this->RemovedPendingMembers;
    }
    /**
     * Set RemovedPendingMembers value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $removedPendingMembers
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setRemovedPendingMembers(\Ews\ArrayType\EwsArrayOfStringsType $removedPendingMembers = null)
    {
        $this->RemovedPendingMembers = $removedPendingMembers;
        return $this;
    }
    /**
     * Get CalendarMemberReadOnly value
     * @return bool|null
     */
    public function getCalendarMemberReadOnly()
    {
        return $this->CalendarMemberReadOnly;
    }
    /**
     * Set CalendarMemberReadOnly value
     * @param bool $calendarMemberReadOnly
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setCalendarMemberReadOnly($calendarMemberReadOnly = null)
    {
        $this->CalendarMemberReadOnly = $calendarMemberReadOnly;
        return $this;
    }
    /**
     * Get SuppressWarmupMessage value
     * @return bool|null
     */
    public function getSuppressWarmupMessage()
    {
        return $this->SuppressWarmupMessage;
    }
    /**
     * Set SuppressWarmupMessage value
     * @param bool $suppressWarmupMessage
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setSuppressWarmupMessage($suppressWarmupMessage = null)
    {
        $this->SuppressWarmupMessage = $suppressWarmupMessage;
        return $this;
    }
    /**
     * Get AllowOnlyMembersToPost value
     * @return bool|null
     */
    public function getAllowOnlyMembersToPost()
    {
        return $this->AllowOnlyMembersToPost;
    }
    /**
     * Set AllowOnlyMembersToPost value
     * @param bool $allowOnlyMembersToPost
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setAllowOnlyMembersToPost($allowOnlyMembersToPost = null)
    {
        $this->AllowOnlyMembersToPost = $allowOnlyMembersToPost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
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
