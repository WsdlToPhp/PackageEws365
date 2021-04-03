<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $GroupSmtpAddress;
    /**
     * The ForceConfigurationAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ForceConfigurationAction;
    /**
     * The ExecutingUserSmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExecutingUserSmtpAddress = null;
    /**
     * The DomainController
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DomainController = null;
    /**
     * The MemberIdentifierType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MemberIdentifierType = null;
    /**
     * The AddedMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $AddedMembers = null;
    /**
     * The RemovedMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $RemovedMembers = null;
    /**
     * The AddedPendingMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $AddedPendingMembers = null;
    /**
     * The RemovedPendingMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $RemovedPendingMembers = null;
    /**
     * The CalendarMemberReadOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CalendarMemberReadOnly = null;
    /**
     * The SuppressWarmupMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SuppressWarmupMessage = null;
    /**
     * The AllowOnlyMembersToPost
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllowOnlyMembersToPost = null;
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
     * @param array|string $forceConfigurationAction
     * @param string $executingUserSmtpAddress
     * @param string $domainController
     * @param string $memberIdentifierType
     * @param \ArrayType\EwsArrayOfStringsType $addedMembers
     * @param \ArrayType\EwsArrayOfStringsType $removedMembers
     * @param \ArrayType\EwsArrayOfStringsType $addedPendingMembers
     * @param \ArrayType\EwsArrayOfStringsType $removedPendingMembers
     * @param bool $calendarMemberReadOnly
     * @param bool $suppressWarmupMessage
     * @param bool $allowOnlyMembersToPost
     */
    public function __construct(string $groupSmtpAddress, $forceConfigurationAction, ?string $executingUserSmtpAddress = null, ?string $domainController = null, ?string $memberIdentifierType = null, ?\ArrayType\EwsArrayOfStringsType $addedMembers = null, ?\ArrayType\EwsArrayOfStringsType $removedMembers = null, ?\ArrayType\EwsArrayOfStringsType $addedPendingMembers = null, ?\ArrayType\EwsArrayOfStringsType $removedPendingMembers = null, ?bool $calendarMemberReadOnly = null, ?bool $suppressWarmupMessage = null, ?bool $allowOnlyMembersToPost = null)
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
    public function getGroupSmtpAddress(): string
    {
        return $this->GroupSmtpAddress;
    }
    /**
     * Set GroupSmtpAddress value
     * @param string $groupSmtpAddress
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setGroupSmtpAddress(string $groupSmtpAddress): self
    {
        // validation for constraint: string
        if (!is_null($groupSmtpAddress) && !is_string($groupSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupSmtpAddress, true), gettype($groupSmtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($groupSmtpAddress) && mb_strlen((string) $groupSmtpAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $groupSmtpAddress)), __LINE__);
        }
        $this->GroupSmtpAddress = $groupSmtpAddress;
        
        return $this;
    }
    /**
     * Get ForceConfigurationAction value
     * @return string
     */
    public function getForceConfigurationAction(): string
    {
        return $this->ForceConfigurationAction;
    }
    /**
     * This method is responsible for validating the values passed to the setForceConfigurationAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setForceConfigurationAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateForceConfigurationActionForArrayConstraintsFromSetForceConfigurationAction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateGroupMailboxTypeForceConfigurationActionItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsGroupMailboxConfigurationActionType::valueIsValid($updateGroupMailboxTypeForceConfigurationActionItem)) {
                $invalidValues[] = is_object($updateGroupMailboxTypeForceConfigurationActionItem) ? get_class($updateGroupMailboxTypeForceConfigurationActionItem) : sprintf('%s(%s)', gettype($updateGroupMailboxTypeForceConfigurationActionItem), var_export($updateGroupMailboxTypeForceConfigurationActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsGroupMailboxConfigurationActionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsGroupMailboxConfigurationActionType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ForceConfigurationAction value
     * @uses \EnumType\EwsGroupMailboxConfigurationActionType::valueIsValid()
     * @uses \EnumType\EwsGroupMailboxConfigurationActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $forceConfigurationAction
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setForceConfigurationAction($forceConfigurationAction): self
    {
        // validation for constraint: list
        if ('' !== ($forceConfigurationActionArrayErrorMessage = self::validateForceConfigurationActionForArrayConstraintsFromSetForceConfigurationAction(is_string($forceConfigurationAction) ? explode(' ', $forceConfigurationAction) : $forceConfigurationAction))) {
            throw new InvalidArgumentException($forceConfigurationActionArrayErrorMessage, __LINE__);
        }
        $this->ForceConfigurationAction = is_array($forceConfigurationAction) ? implode(' ', $forceConfigurationAction) : $forceConfigurationAction;
        
        return $this;
    }
    /**
     * Get ExecutingUserSmtpAddress value
     * @return string|null
     */
    public function getExecutingUserSmtpAddress(): ?string
    {
        return $this->ExecutingUserSmtpAddress;
    }
    /**
     * Set ExecutingUserSmtpAddress value
     * @param string $executingUserSmtpAddress
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setExecutingUserSmtpAddress(?string $executingUserSmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($executingUserSmtpAddress) && !is_string($executingUserSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executingUserSmtpAddress, true), gettype($executingUserSmtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($executingUserSmtpAddress) && mb_strlen((string) $executingUserSmtpAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $executingUserSmtpAddress)), __LINE__);
        }
        $this->ExecutingUserSmtpAddress = $executingUserSmtpAddress;
        
        return $this;
    }
    /**
     * Get DomainController value
     * @return string|null
     */
    public function getDomainController(): ?string
    {
        return $this->DomainController;
    }
    /**
     * Set DomainController value
     * @param string $domainController
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setDomainController(?string $domainController = null): self
    {
        // validation for constraint: string
        if (!is_null($domainController) && !is_string($domainController)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainController, true), gettype($domainController)), __LINE__);
        }
        $this->DomainController = $domainController;
        
        return $this;
    }
    /**
     * Get MemberIdentifierType value
     * @return string|null
     */
    public function getMemberIdentifierType(): ?string
    {
        return $this->MemberIdentifierType;
    }
    /**
     * Set MemberIdentifierType value
     * @uses \EnumType\EwsGroupMemberIdentifierType::valueIsValid()
     * @uses \EnumType\EwsGroupMemberIdentifierType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $memberIdentifierType
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setMemberIdentifierType(?string $memberIdentifierType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsGroupMemberIdentifierType::valueIsValid($memberIdentifierType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsGroupMemberIdentifierType', is_array($memberIdentifierType) ? implode(', ', $memberIdentifierType) : var_export($memberIdentifierType, true), implode(', ', \EnumType\EwsGroupMemberIdentifierType::getValidValues())), __LINE__);
        }
        $this->MemberIdentifierType = $memberIdentifierType;
        
        return $this;
    }
    /**
     * Get AddedMembers value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getAddedMembers(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->AddedMembers;
    }
    /**
     * Set AddedMembers value
     * @param \ArrayType\EwsArrayOfStringsType $addedMembers
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setAddedMembers(?\ArrayType\EwsArrayOfStringsType $addedMembers = null): self
    {
        $this->AddedMembers = $addedMembers;
        
        return $this;
    }
    /**
     * Get RemovedMembers value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getRemovedMembers(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->RemovedMembers;
    }
    /**
     * Set RemovedMembers value
     * @param \ArrayType\EwsArrayOfStringsType $removedMembers
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setRemovedMembers(?\ArrayType\EwsArrayOfStringsType $removedMembers = null): self
    {
        $this->RemovedMembers = $removedMembers;
        
        return $this;
    }
    /**
     * Get AddedPendingMembers value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getAddedPendingMembers(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->AddedPendingMembers;
    }
    /**
     * Set AddedPendingMembers value
     * @param \ArrayType\EwsArrayOfStringsType $addedPendingMembers
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setAddedPendingMembers(?\ArrayType\EwsArrayOfStringsType $addedPendingMembers = null): self
    {
        $this->AddedPendingMembers = $addedPendingMembers;
        
        return $this;
    }
    /**
     * Get RemovedPendingMembers value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getRemovedPendingMembers(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->RemovedPendingMembers;
    }
    /**
     * Set RemovedPendingMembers value
     * @param \ArrayType\EwsArrayOfStringsType $removedPendingMembers
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setRemovedPendingMembers(?\ArrayType\EwsArrayOfStringsType $removedPendingMembers = null): self
    {
        $this->RemovedPendingMembers = $removedPendingMembers;
        
        return $this;
    }
    /**
     * Get CalendarMemberReadOnly value
     * @return bool|null
     */
    public function getCalendarMemberReadOnly(): ?bool
    {
        return $this->CalendarMemberReadOnly;
    }
    /**
     * Set CalendarMemberReadOnly value
     * @param bool $calendarMemberReadOnly
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setCalendarMemberReadOnly(?bool $calendarMemberReadOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($calendarMemberReadOnly) && !is_bool($calendarMemberReadOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calendarMemberReadOnly, true), gettype($calendarMemberReadOnly)), __LINE__);
        }
        $this->CalendarMemberReadOnly = $calendarMemberReadOnly;
        
        return $this;
    }
    /**
     * Get SuppressWarmupMessage value
     * @return bool|null
     */
    public function getSuppressWarmupMessage(): ?bool
    {
        return $this->SuppressWarmupMessage;
    }
    /**
     * Set SuppressWarmupMessage value
     * @param bool $suppressWarmupMessage
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setSuppressWarmupMessage(?bool $suppressWarmupMessage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressWarmupMessage) && !is_bool($suppressWarmupMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressWarmupMessage, true), gettype($suppressWarmupMessage)), __LINE__);
        }
        $this->SuppressWarmupMessage = $suppressWarmupMessage;
        
        return $this;
    }
    /**
     * Get AllowOnlyMembersToPost value
     * @return bool|null
     */
    public function getAllowOnlyMembersToPost(): ?bool
    {
        return $this->AllowOnlyMembersToPost;
    }
    /**
     * Set AllowOnlyMembersToPost value
     * @param bool $allowOnlyMembersToPost
     * @return \StructType\EwsUpdateGroupMailboxType
     */
    public function setAllowOnlyMembersToPost(?bool $allowOnlyMembersToPost = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowOnlyMembersToPost) && !is_bool($allowOnlyMembersToPost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowOnlyMembersToPost, true), gettype($allowOnlyMembersToPost)), __LINE__);
        }
        $this->AllowOnlyMembersToPost = $allowOnlyMembersToPost;
        
        return $this;
    }
}
