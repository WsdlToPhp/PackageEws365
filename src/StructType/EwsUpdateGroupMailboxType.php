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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    public $GroupSmtpAddress;
    /**
     * The ForceConfigurationAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $ForceConfigurationAction;
    /**
     * The ExecutingUserSmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExecutingUserSmtpAddress;
    /**
     * The DomainController
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DomainController;
    /**
     * The MemberIdentifierType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MemberIdentifierType;
    /**
     * The AddedMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $AddedMembers;
    /**
     * The RemovedMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $RemovedMembers;
    /**
     * The AddedPendingMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $AddedPendingMembers;
    /**
     * The RemovedPendingMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $RemovedPendingMembers;
    /**
     * The CalendarMemberReadOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $CalendarMemberReadOnly;
    /**
     * The SuppressWarmupMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SuppressWarmupMessage;
    /**
     * The AllowOnlyMembersToPost
     * Meta information extracted from the WSDL
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
     * @param string[] $forceConfigurationAction
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
    public function __construct($groupSmtpAddress = null, array $forceConfigurationAction = array(), $executingUserSmtpAddress = null, $domainController = null, $memberIdentifierType = null, \Ews\ArrayType\EwsArrayOfStringsType $addedMembers = null, \Ews\ArrayType\EwsArrayOfStringsType $removedMembers = null, \Ews\ArrayType\EwsArrayOfStringsType $addedPendingMembers = null, \Ews\ArrayType\EwsArrayOfStringsType $removedPendingMembers = null, $calendarMemberReadOnly = null, $suppressWarmupMessage = null, $allowOnlyMembersToPost = null)
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
        // validation for constraint: string
        if (!is_null($groupSmtpAddress) && !is_string($groupSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupSmtpAddress, true), gettype($groupSmtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($groupSmtpAddress) && mb_strlen($groupSmtpAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($groupSmtpAddress)), __LINE__);
        }
        $this->GroupSmtpAddress = $groupSmtpAddress;
        return $this;
    }
    /**
     * Get ForceConfigurationAction value
     * @return string[]
     */
    public function getForceConfigurationAction()
    {
        return $this->ForceConfigurationAction;
    }
    /**
     * This method is responsible for validating the values passed to the setForceConfigurationAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setForceConfigurationAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateForceConfigurationActionForArrayConstraintsFromSetForceConfigurationAction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateGroupMailboxTypeForceConfigurationActionItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsGroupMailboxConfigurationActionType::valueIsValid($updateGroupMailboxTypeForceConfigurationActionItem)) {
                $invalidValues[] = is_object($updateGroupMailboxTypeForceConfigurationActionItem) ? get_class($updateGroupMailboxTypeForceConfigurationActionItem) : sprintf('%s(%s)', gettype($updateGroupMailboxTypeForceConfigurationActionItem), var_export($updateGroupMailboxTypeForceConfigurationActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsGroupMailboxConfigurationActionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsGroupMailboxConfigurationActionType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ForceConfigurationAction value
     * @uses \Ews\EnumType\EwsGroupMailboxConfigurationActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsGroupMailboxConfigurationActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $forceConfigurationAction
     * @return \Ews\StructType\EwsUpdateGroupMailboxType
     */
    public function setForceConfigurationAction(array $forceConfigurationAction = array())
    {
        // validation for constraint: list
        if ('' !== ($forceConfigurationActionArrayErrorMessage = self::validateForceConfigurationActionForArrayConstraintsFromSetForceConfigurationAction($forceConfigurationAction))) {
            throw new \InvalidArgumentException($forceConfigurationActionArrayErrorMessage, __LINE__);
        }
        $this->ForceConfigurationAction = is_array($forceConfigurationAction) ? implode(' ', $forceConfigurationAction) : null;
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
        // validation for constraint: string
        if (!is_null($executingUserSmtpAddress) && !is_string($executingUserSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executingUserSmtpAddress, true), gettype($executingUserSmtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($executingUserSmtpAddress) && mb_strlen($executingUserSmtpAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($executingUserSmtpAddress)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainController, true), gettype($domainController)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsGroupMemberIdentifierType', is_array($memberIdentifierType) ? implode(', ', $memberIdentifierType) : var_export($memberIdentifierType, true), implode(', ', \Ews\EnumType\EwsGroupMemberIdentifierType::getValidValues())), __LINE__);
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
        // validation for constraint: boolean
        if (!is_null($calendarMemberReadOnly) && !is_bool($calendarMemberReadOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calendarMemberReadOnly, true), gettype($calendarMemberReadOnly)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($suppressWarmupMessage) && !is_bool($suppressWarmupMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressWarmupMessage, true), gettype($suppressWarmupMessage)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($allowOnlyMembersToPost) && !is_bool($allowOnlyMembersToPost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowOnlyMembersToPost, true), gettype($allowOnlyMembersToPost)), __LINE__);
        }
        $this->AllowOnlyMembersToPost = $allowOnlyMembersToPost;
        return $this;
    }
}
