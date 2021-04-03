<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RulePredicatesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Rule predicates, used as rule conditions or exceptions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRulePredicatesType extends AbstractStructBase
{
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Categories = null;
    /**
     * The ContainsBodyStrings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContainsBodyStrings = null;
    /**
     * The ContainsHeaderStrings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContainsHeaderStrings = null;
    /**
     * The ContainsRecipientStrings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContainsRecipientStrings = null;
    /**
     * The ContainsSenderStrings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContainsSenderStrings = null;
    /**
     * The ContainsSubjectOrBodyStrings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContainsSubjectOrBodyStrings = null;
    /**
     * The ContainsSubjectStrings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContainsSubjectStrings = null;
    /**
     * The FlaggedForAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FlaggedForAction = null;
    /**
     * The FromAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $FromAddresses = null;
    /**
     * The FromConnectedAccounts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $FromConnectedAccounts = null;
    /**
     * The HasAttachments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasAttachments = null;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Importance = null;
    /**
     * The IsApprovalRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsApprovalRequest = null;
    /**
     * The IsAutomaticForward
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAutomaticForward = null;
    /**
     * The IsAutomaticReply
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAutomaticReply = null;
    /**
     * The IsEncrypted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEncrypted = null;
    /**
     * The IsMeetingRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMeetingRequest = null;
    /**
     * The IsMeetingResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMeetingResponse = null;
    /**
     * The IsNDR
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsNDR = null;
    /**
     * The IsPermissionControlled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsPermissionControlled = null;
    /**
     * The IsReadReceipt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsReadReceipt = null;
    /**
     * The IsSigned
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSigned = null;
    /**
     * The IsVoicemail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsVoicemail = null;
    /**
     * The ItemClasses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ItemClasses = null;
    /**
     * The MessageClassifications
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $MessageClassifications = null;
    /**
     * The NotSentToMe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NotSentToMe = null;
    /**
     * The SentCcMe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SentCcMe = null;
    /**
     * The SentOnlyToMe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SentOnlyToMe = null;
    /**
     * The SentToAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $SentToAddresses = null;
    /**
     * The SentToMe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SentToMe = null;
    /**
     * The SentToOrCcMe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SentToOrCcMe = null;
    /**
     * The Sensitivity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sensitivity = null;
    /**
     * The WithinDateRange
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRulePredicateDateRangeType|null
     */
    protected ?\StructType\EwsRulePredicateDateRangeType $WithinDateRange = null;
    /**
     * The WithinSizeRange
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRulePredicateSizeRangeType|null
     */
    protected ?\StructType\EwsRulePredicateSizeRangeType $WithinSizeRange = null;
    /**
     * Constructor method for RulePredicatesType
     * @uses EwsRulePredicatesType::setCategories()
     * @uses EwsRulePredicatesType::setContainsBodyStrings()
     * @uses EwsRulePredicatesType::setContainsHeaderStrings()
     * @uses EwsRulePredicatesType::setContainsRecipientStrings()
     * @uses EwsRulePredicatesType::setContainsSenderStrings()
     * @uses EwsRulePredicatesType::setContainsSubjectOrBodyStrings()
     * @uses EwsRulePredicatesType::setContainsSubjectStrings()
     * @uses EwsRulePredicatesType::setFlaggedForAction()
     * @uses EwsRulePredicatesType::setFromAddresses()
     * @uses EwsRulePredicatesType::setFromConnectedAccounts()
     * @uses EwsRulePredicatesType::setHasAttachments()
     * @uses EwsRulePredicatesType::setImportance()
     * @uses EwsRulePredicatesType::setIsApprovalRequest()
     * @uses EwsRulePredicatesType::setIsAutomaticForward()
     * @uses EwsRulePredicatesType::setIsAutomaticReply()
     * @uses EwsRulePredicatesType::setIsEncrypted()
     * @uses EwsRulePredicatesType::setIsMeetingRequest()
     * @uses EwsRulePredicatesType::setIsMeetingResponse()
     * @uses EwsRulePredicatesType::setIsNDR()
     * @uses EwsRulePredicatesType::setIsPermissionControlled()
     * @uses EwsRulePredicatesType::setIsReadReceipt()
     * @uses EwsRulePredicatesType::setIsSigned()
     * @uses EwsRulePredicatesType::setIsVoicemail()
     * @uses EwsRulePredicatesType::setItemClasses()
     * @uses EwsRulePredicatesType::setMessageClassifications()
     * @uses EwsRulePredicatesType::setNotSentToMe()
     * @uses EwsRulePredicatesType::setSentCcMe()
     * @uses EwsRulePredicatesType::setSentOnlyToMe()
     * @uses EwsRulePredicatesType::setSentToAddresses()
     * @uses EwsRulePredicatesType::setSentToMe()
     * @uses EwsRulePredicatesType::setSentToOrCcMe()
     * @uses EwsRulePredicatesType::setSensitivity()
     * @uses EwsRulePredicatesType::setWithinDateRange()
     * @uses EwsRulePredicatesType::setWithinSizeRange()
     * @param \ArrayType\EwsArrayOfStringsType $categories
     * @param \ArrayType\EwsArrayOfStringsType $containsBodyStrings
     * @param \ArrayType\EwsArrayOfStringsType $containsHeaderStrings
     * @param \ArrayType\EwsArrayOfStringsType $containsRecipientStrings
     * @param \ArrayType\EwsArrayOfStringsType $containsSenderStrings
     * @param \ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings
     * @param \ArrayType\EwsArrayOfStringsType $containsSubjectStrings
     * @param string $flaggedForAction
     * @param \ArrayType\EwsArrayOfEmailAddressesType $fromAddresses
     * @param \ArrayType\EwsArrayOfStringsType $fromConnectedAccounts
     * @param bool $hasAttachments
     * @param string $importance
     * @param bool $isApprovalRequest
     * @param bool $isAutomaticForward
     * @param bool $isAutomaticReply
     * @param bool $isEncrypted
     * @param bool $isMeetingRequest
     * @param bool $isMeetingResponse
     * @param bool $isNDR
     * @param bool $isPermissionControlled
     * @param bool $isReadReceipt
     * @param bool $isSigned
     * @param bool $isVoicemail
     * @param \ArrayType\EwsArrayOfStringsType $itemClasses
     * @param \ArrayType\EwsArrayOfStringsType $messageClassifications
     * @param bool $notSentToMe
     * @param bool $sentCcMe
     * @param bool $sentOnlyToMe
     * @param \ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses
     * @param bool $sentToMe
     * @param bool $sentToOrCcMe
     * @param string $sensitivity
     * @param \StructType\EwsRulePredicateDateRangeType $withinDateRange
     * @param \StructType\EwsRulePredicateSizeRangeType $withinSizeRange
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $categories = null, ?\ArrayType\EwsArrayOfStringsType $containsBodyStrings = null, ?\ArrayType\EwsArrayOfStringsType $containsHeaderStrings = null, ?\ArrayType\EwsArrayOfStringsType $containsRecipientStrings = null, ?\ArrayType\EwsArrayOfStringsType $containsSenderStrings = null, ?\ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings = null, ?\ArrayType\EwsArrayOfStringsType $containsSubjectStrings = null, ?string $flaggedForAction = null, ?\ArrayType\EwsArrayOfEmailAddressesType $fromAddresses = null, ?\ArrayType\EwsArrayOfStringsType $fromConnectedAccounts = null, ?bool $hasAttachments = null, ?string $importance = null, ?bool $isApprovalRequest = null, ?bool $isAutomaticForward = null, ?bool $isAutomaticReply = null, ?bool $isEncrypted = null, ?bool $isMeetingRequest = null, ?bool $isMeetingResponse = null, ?bool $isNDR = null, ?bool $isPermissionControlled = null, ?bool $isReadReceipt = null, ?bool $isSigned = null, ?bool $isVoicemail = null, ?\ArrayType\EwsArrayOfStringsType $itemClasses = null, ?\ArrayType\EwsArrayOfStringsType $messageClassifications = null, ?bool $notSentToMe = null, ?bool $sentCcMe = null, ?bool $sentOnlyToMe = null, ?\ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses = null, ?bool $sentToMe = null, ?bool $sentToOrCcMe = null, ?string $sensitivity = null, ?\StructType\EwsRulePredicateDateRangeType $withinDateRange = null, ?\StructType\EwsRulePredicateSizeRangeType $withinSizeRange = null)
    {
        $this
            ->setCategories($categories)
            ->setContainsBodyStrings($containsBodyStrings)
            ->setContainsHeaderStrings($containsHeaderStrings)
            ->setContainsRecipientStrings($containsRecipientStrings)
            ->setContainsSenderStrings($containsSenderStrings)
            ->setContainsSubjectOrBodyStrings($containsSubjectOrBodyStrings)
            ->setContainsSubjectStrings($containsSubjectStrings)
            ->setFlaggedForAction($flaggedForAction)
            ->setFromAddresses($fromAddresses)
            ->setFromConnectedAccounts($fromConnectedAccounts)
            ->setHasAttachments($hasAttachments)
            ->setImportance($importance)
            ->setIsApprovalRequest($isApprovalRequest)
            ->setIsAutomaticForward($isAutomaticForward)
            ->setIsAutomaticReply($isAutomaticReply)
            ->setIsEncrypted($isEncrypted)
            ->setIsMeetingRequest($isMeetingRequest)
            ->setIsMeetingResponse($isMeetingResponse)
            ->setIsNDR($isNDR)
            ->setIsPermissionControlled($isPermissionControlled)
            ->setIsReadReceipt($isReadReceipt)
            ->setIsSigned($isSigned)
            ->setIsVoicemail($isVoicemail)
            ->setItemClasses($itemClasses)
            ->setMessageClassifications($messageClassifications)
            ->setNotSentToMe($notSentToMe)
            ->setSentCcMe($sentCcMe)
            ->setSentOnlyToMe($sentOnlyToMe)
            ->setSentToAddresses($sentToAddresses)
            ->setSentToMe($sentToMe)
            ->setSentToOrCcMe($sentToOrCcMe)
            ->setSensitivity($sensitivity)
            ->setWithinDateRange($withinDateRange)
            ->setWithinSizeRange($withinSizeRange);
    }
    /**
     * Get Categories value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getCategories(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Categories;
    }
    /**
     * Set Categories value
     * @param \ArrayType\EwsArrayOfStringsType $categories
     * @return \StructType\EwsRulePredicatesType
     */
    public function setCategories(?\ArrayType\EwsArrayOfStringsType $categories = null): self
    {
        $this->Categories = $categories;
        
        return $this;
    }
    /**
     * Get ContainsBodyStrings value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsBodyStrings(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContainsBodyStrings;
    }
    /**
     * Set ContainsBodyStrings value
     * @param \ArrayType\EwsArrayOfStringsType $containsBodyStrings
     * @return \StructType\EwsRulePredicatesType
     */
    public function setContainsBodyStrings(?\ArrayType\EwsArrayOfStringsType $containsBodyStrings = null): self
    {
        $this->ContainsBodyStrings = $containsBodyStrings;
        
        return $this;
    }
    /**
     * Get ContainsHeaderStrings value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsHeaderStrings(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContainsHeaderStrings;
    }
    /**
     * Set ContainsHeaderStrings value
     * @param \ArrayType\EwsArrayOfStringsType $containsHeaderStrings
     * @return \StructType\EwsRulePredicatesType
     */
    public function setContainsHeaderStrings(?\ArrayType\EwsArrayOfStringsType $containsHeaderStrings = null): self
    {
        $this->ContainsHeaderStrings = $containsHeaderStrings;
        
        return $this;
    }
    /**
     * Get ContainsRecipientStrings value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsRecipientStrings(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContainsRecipientStrings;
    }
    /**
     * Set ContainsRecipientStrings value
     * @param \ArrayType\EwsArrayOfStringsType $containsRecipientStrings
     * @return \StructType\EwsRulePredicatesType
     */
    public function setContainsRecipientStrings(?\ArrayType\EwsArrayOfStringsType $containsRecipientStrings = null): self
    {
        $this->ContainsRecipientStrings = $containsRecipientStrings;
        
        return $this;
    }
    /**
     * Get ContainsSenderStrings value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsSenderStrings(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContainsSenderStrings;
    }
    /**
     * Set ContainsSenderStrings value
     * @param \ArrayType\EwsArrayOfStringsType $containsSenderStrings
     * @return \StructType\EwsRulePredicatesType
     */
    public function setContainsSenderStrings(?\ArrayType\EwsArrayOfStringsType $containsSenderStrings = null): self
    {
        $this->ContainsSenderStrings = $containsSenderStrings;
        
        return $this;
    }
    /**
     * Get ContainsSubjectOrBodyStrings value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsSubjectOrBodyStrings(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContainsSubjectOrBodyStrings;
    }
    /**
     * Set ContainsSubjectOrBodyStrings value
     * @param \ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings
     * @return \StructType\EwsRulePredicatesType
     */
    public function setContainsSubjectOrBodyStrings(?\ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings = null): self
    {
        $this->ContainsSubjectOrBodyStrings = $containsSubjectOrBodyStrings;
        
        return $this;
    }
    /**
     * Get ContainsSubjectStrings value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsSubjectStrings(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContainsSubjectStrings;
    }
    /**
     * Set ContainsSubjectStrings value
     * @param \ArrayType\EwsArrayOfStringsType $containsSubjectStrings
     * @return \StructType\EwsRulePredicatesType
     */
    public function setContainsSubjectStrings(?\ArrayType\EwsArrayOfStringsType $containsSubjectStrings = null): self
    {
        $this->ContainsSubjectStrings = $containsSubjectStrings;
        
        return $this;
    }
    /**
     * Get FlaggedForAction value
     * @return string|null
     */
    public function getFlaggedForAction(): ?string
    {
        return $this->FlaggedForAction;
    }
    /**
     * Set FlaggedForAction value
     * @uses \EnumType\EwsFlaggedForActionType::valueIsValid()
     * @uses \EnumType\EwsFlaggedForActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flaggedForAction
     * @return \StructType\EwsRulePredicatesType
     */
    public function setFlaggedForAction(?string $flaggedForAction = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsFlaggedForActionType::valueIsValid($flaggedForAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFlaggedForActionType', is_array($flaggedForAction) ? implode(', ', $flaggedForAction) : var_export($flaggedForAction, true), implode(', ', \EnumType\EwsFlaggedForActionType::getValidValues())), __LINE__);
        }
        $this->FlaggedForAction = $flaggedForAction;
        
        return $this;
    }
    /**
     * Get FromAddresses value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getFromAddresses(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->FromAddresses;
    }
    /**
     * Set FromAddresses value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $fromAddresses
     * @return \StructType\EwsRulePredicatesType
     */
    public function setFromAddresses(?\ArrayType\EwsArrayOfEmailAddressesType $fromAddresses = null): self
    {
        $this->FromAddresses = $fromAddresses;
        
        return $this;
    }
    /**
     * Get FromConnectedAccounts value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getFromConnectedAccounts(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->FromConnectedAccounts;
    }
    /**
     * Set FromConnectedAccounts value
     * @param \ArrayType\EwsArrayOfStringsType $fromConnectedAccounts
     * @return \StructType\EwsRulePredicatesType
     */
    public function setFromConnectedAccounts(?\ArrayType\EwsArrayOfStringsType $fromConnectedAccounts = null): self
    {
        $this->FromConnectedAccounts = $fromConnectedAccounts;
        
        return $this;
    }
    /**
     * Get HasAttachments value
     * @return bool|null
     */
    public function getHasAttachments(): ?bool
    {
        return $this->HasAttachments;
    }
    /**
     * Set HasAttachments value
     * @param bool $hasAttachments
     * @return \StructType\EwsRulePredicatesType
     */
    public function setHasAttachments(?bool $hasAttachments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAttachments) && !is_bool($hasAttachments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAttachments, true), gettype($hasAttachments)), __LINE__);
        }
        $this->HasAttachments = $hasAttachments;
        
        return $this;
    }
    /**
     * Get Importance value
     * @return string|null
     */
    public function getImportance(): ?string
    {
        return $this->Importance;
    }
    /**
     * Set Importance value
     * @uses \EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $importance
     * @return \StructType\EwsRulePredicatesType
     */
    public function setImportance(?string $importance = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsImportanceChoicesType', is_array($importance) ? implode(', ', $importance) : var_export($importance, true), implode(', ', \EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->Importance = $importance;
        
        return $this;
    }
    /**
     * Get IsApprovalRequest value
     * @return bool|null
     */
    public function getIsApprovalRequest(): ?bool
    {
        return $this->IsApprovalRequest;
    }
    /**
     * Set IsApprovalRequest value
     * @param bool $isApprovalRequest
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsApprovalRequest(?bool $isApprovalRequest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isApprovalRequest) && !is_bool($isApprovalRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isApprovalRequest, true), gettype($isApprovalRequest)), __LINE__);
        }
        $this->IsApprovalRequest = $isApprovalRequest;
        
        return $this;
    }
    /**
     * Get IsAutomaticForward value
     * @return bool|null
     */
    public function getIsAutomaticForward(): ?bool
    {
        return $this->IsAutomaticForward;
    }
    /**
     * Set IsAutomaticForward value
     * @param bool $isAutomaticForward
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsAutomaticForward(?bool $isAutomaticForward = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutomaticForward) && !is_bool($isAutomaticForward)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutomaticForward, true), gettype($isAutomaticForward)), __LINE__);
        }
        $this->IsAutomaticForward = $isAutomaticForward;
        
        return $this;
    }
    /**
     * Get IsAutomaticReply value
     * @return bool|null
     */
    public function getIsAutomaticReply(): ?bool
    {
        return $this->IsAutomaticReply;
    }
    /**
     * Set IsAutomaticReply value
     * @param bool $isAutomaticReply
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsAutomaticReply(?bool $isAutomaticReply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutomaticReply) && !is_bool($isAutomaticReply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutomaticReply, true), gettype($isAutomaticReply)), __LINE__);
        }
        $this->IsAutomaticReply = $isAutomaticReply;
        
        return $this;
    }
    /**
     * Get IsEncrypted value
     * @return bool|null
     */
    public function getIsEncrypted(): ?bool
    {
        return $this->IsEncrypted;
    }
    /**
     * Set IsEncrypted value
     * @param bool $isEncrypted
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsEncrypted(?bool $isEncrypted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEncrypted) && !is_bool($isEncrypted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEncrypted, true), gettype($isEncrypted)), __LINE__);
        }
        $this->IsEncrypted = $isEncrypted;
        
        return $this;
    }
    /**
     * Get IsMeetingRequest value
     * @return bool|null
     */
    public function getIsMeetingRequest(): ?bool
    {
        return $this->IsMeetingRequest;
    }
    /**
     * Set IsMeetingRequest value
     * @param bool $isMeetingRequest
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsMeetingRequest(?bool $isMeetingRequest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMeetingRequest) && !is_bool($isMeetingRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMeetingRequest, true), gettype($isMeetingRequest)), __LINE__);
        }
        $this->IsMeetingRequest = $isMeetingRequest;
        
        return $this;
    }
    /**
     * Get IsMeetingResponse value
     * @return bool|null
     */
    public function getIsMeetingResponse(): ?bool
    {
        return $this->IsMeetingResponse;
    }
    /**
     * Set IsMeetingResponse value
     * @param bool $isMeetingResponse
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsMeetingResponse(?bool $isMeetingResponse = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMeetingResponse) && !is_bool($isMeetingResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMeetingResponse, true), gettype($isMeetingResponse)), __LINE__);
        }
        $this->IsMeetingResponse = $isMeetingResponse;
        
        return $this;
    }
    /**
     * Get IsNDR value
     * @return bool|null
     */
    public function getIsNDR(): ?bool
    {
        return $this->IsNDR;
    }
    /**
     * Set IsNDR value
     * @param bool $isNDR
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsNDR(?bool $isNDR = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNDR) && !is_bool($isNDR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNDR, true), gettype($isNDR)), __LINE__);
        }
        $this->IsNDR = $isNDR;
        
        return $this;
    }
    /**
     * Get IsPermissionControlled value
     * @return bool|null
     */
    public function getIsPermissionControlled(): ?bool
    {
        return $this->IsPermissionControlled;
    }
    /**
     * Set IsPermissionControlled value
     * @param bool $isPermissionControlled
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsPermissionControlled(?bool $isPermissionControlled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPermissionControlled) && !is_bool($isPermissionControlled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPermissionControlled, true), gettype($isPermissionControlled)), __LINE__);
        }
        $this->IsPermissionControlled = $isPermissionControlled;
        
        return $this;
    }
    /**
     * Get IsReadReceipt value
     * @return bool|null
     */
    public function getIsReadReceipt(): ?bool
    {
        return $this->IsReadReceipt;
    }
    /**
     * Set IsReadReceipt value
     * @param bool $isReadReceipt
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsReadReceipt(?bool $isReadReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadReceipt) && !is_bool($isReadReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadReceipt, true), gettype($isReadReceipt)), __LINE__);
        }
        $this->IsReadReceipt = $isReadReceipt;
        
        return $this;
    }
    /**
     * Get IsSigned value
     * @return bool|null
     */
    public function getIsSigned(): ?bool
    {
        return $this->IsSigned;
    }
    /**
     * Set IsSigned value
     * @param bool $isSigned
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsSigned(?bool $isSigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSigned) && !is_bool($isSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSigned, true), gettype($isSigned)), __LINE__);
        }
        $this->IsSigned = $isSigned;
        
        return $this;
    }
    /**
     * Get IsVoicemail value
     * @return bool|null
     */
    public function getIsVoicemail(): ?bool
    {
        return $this->IsVoicemail;
    }
    /**
     * Set IsVoicemail value
     * @param bool $isVoicemail
     * @return \StructType\EwsRulePredicatesType
     */
    public function setIsVoicemail(?bool $isVoicemail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoicemail) && !is_bool($isVoicemail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoicemail, true), gettype($isVoicemail)), __LINE__);
        }
        $this->IsVoicemail = $isVoicemail;
        
        return $this;
    }
    /**
     * Get ItemClasses value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getItemClasses(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ItemClasses;
    }
    /**
     * Set ItemClasses value
     * @param \ArrayType\EwsArrayOfStringsType $itemClasses
     * @return \StructType\EwsRulePredicatesType
     */
    public function setItemClasses(?\ArrayType\EwsArrayOfStringsType $itemClasses = null): self
    {
        $this->ItemClasses = $itemClasses;
        
        return $this;
    }
    /**
     * Get MessageClassifications value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getMessageClassifications(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->MessageClassifications;
    }
    /**
     * Set MessageClassifications value
     * @param \ArrayType\EwsArrayOfStringsType $messageClassifications
     * @return \StructType\EwsRulePredicatesType
     */
    public function setMessageClassifications(?\ArrayType\EwsArrayOfStringsType $messageClassifications = null): self
    {
        $this->MessageClassifications = $messageClassifications;
        
        return $this;
    }
    /**
     * Get NotSentToMe value
     * @return bool|null
     */
    public function getNotSentToMe(): ?bool
    {
        return $this->NotSentToMe;
    }
    /**
     * Set NotSentToMe value
     * @param bool $notSentToMe
     * @return \StructType\EwsRulePredicatesType
     */
    public function setNotSentToMe(?bool $notSentToMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notSentToMe) && !is_bool($notSentToMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notSentToMe, true), gettype($notSentToMe)), __LINE__);
        }
        $this->NotSentToMe = $notSentToMe;
        
        return $this;
    }
    /**
     * Get SentCcMe value
     * @return bool|null
     */
    public function getSentCcMe(): ?bool
    {
        return $this->SentCcMe;
    }
    /**
     * Set SentCcMe value
     * @param bool $sentCcMe
     * @return \StructType\EwsRulePredicatesType
     */
    public function setSentCcMe(?bool $sentCcMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sentCcMe) && !is_bool($sentCcMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sentCcMe, true), gettype($sentCcMe)), __LINE__);
        }
        $this->SentCcMe = $sentCcMe;
        
        return $this;
    }
    /**
     * Get SentOnlyToMe value
     * @return bool|null
     */
    public function getSentOnlyToMe(): ?bool
    {
        return $this->SentOnlyToMe;
    }
    /**
     * Set SentOnlyToMe value
     * @param bool $sentOnlyToMe
     * @return \StructType\EwsRulePredicatesType
     */
    public function setSentOnlyToMe(?bool $sentOnlyToMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sentOnlyToMe) && !is_bool($sentOnlyToMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sentOnlyToMe, true), gettype($sentOnlyToMe)), __LINE__);
        }
        $this->SentOnlyToMe = $sentOnlyToMe;
        
        return $this;
    }
    /**
     * Get SentToAddresses value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getSentToAddresses(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->SentToAddresses;
    }
    /**
     * Set SentToAddresses value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses
     * @return \StructType\EwsRulePredicatesType
     */
    public function setSentToAddresses(?\ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses = null): self
    {
        $this->SentToAddresses = $sentToAddresses;
        
        return $this;
    }
    /**
     * Get SentToMe value
     * @return bool|null
     */
    public function getSentToMe(): ?bool
    {
        return $this->SentToMe;
    }
    /**
     * Set SentToMe value
     * @param bool $sentToMe
     * @return \StructType\EwsRulePredicatesType
     */
    public function setSentToMe(?bool $sentToMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sentToMe) && !is_bool($sentToMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sentToMe, true), gettype($sentToMe)), __LINE__);
        }
        $this->SentToMe = $sentToMe;
        
        return $this;
    }
    /**
     * Get SentToOrCcMe value
     * @return bool|null
     */
    public function getSentToOrCcMe(): ?bool
    {
        return $this->SentToOrCcMe;
    }
    /**
     * Set SentToOrCcMe value
     * @param bool $sentToOrCcMe
     * @return \StructType\EwsRulePredicatesType
     */
    public function setSentToOrCcMe(?bool $sentToOrCcMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sentToOrCcMe) && !is_bool($sentToOrCcMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sentToOrCcMe, true), gettype($sentToOrCcMe)), __LINE__);
        }
        $this->SentToOrCcMe = $sentToOrCcMe;
        
        return $this;
    }
    /**
     * Get Sensitivity value
     * @return string|null
     */
    public function getSensitivity(): ?string
    {
        return $this->Sensitivity;
    }
    /**
     * Set Sensitivity value
     * @uses \EnumType\EwsSensitivityChoicesType::valueIsValid()
     * @uses \EnumType\EwsSensitivityChoicesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sensitivity
     * @return \StructType\EwsRulePredicatesType
     */
    public function setSensitivity(?string $sensitivity = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSensitivityChoicesType::valueIsValid($sensitivity)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSensitivityChoicesType', is_array($sensitivity) ? implode(', ', $sensitivity) : var_export($sensitivity, true), implode(', ', \EnumType\EwsSensitivityChoicesType::getValidValues())), __LINE__);
        }
        $this->Sensitivity = $sensitivity;
        
        return $this;
    }
    /**
     * Get WithinDateRange value
     * @return \StructType\EwsRulePredicateDateRangeType|null
     */
    public function getWithinDateRange(): ?\StructType\EwsRulePredicateDateRangeType
    {
        return $this->WithinDateRange;
    }
    /**
     * Set WithinDateRange value
     * @param \StructType\EwsRulePredicateDateRangeType $withinDateRange
     * @return \StructType\EwsRulePredicatesType
     */
    public function setWithinDateRange(?\StructType\EwsRulePredicateDateRangeType $withinDateRange = null): self
    {
        $this->WithinDateRange = $withinDateRange;
        
        return $this;
    }
    /**
     * Get WithinSizeRange value
     * @return \StructType\EwsRulePredicateSizeRangeType|null
     */
    public function getWithinSizeRange(): ?\StructType\EwsRulePredicateSizeRangeType
    {
        return $this->WithinSizeRange;
    }
    /**
     * Set WithinSizeRange value
     * @param \StructType\EwsRulePredicateSizeRangeType $withinSizeRange
     * @return \StructType\EwsRulePredicatesType
     */
    public function setWithinSizeRange(?\StructType\EwsRulePredicateSizeRangeType $withinSizeRange = null): self
    {
        $this->WithinSizeRange = $withinSizeRange;
        
        return $this;
    }
}
