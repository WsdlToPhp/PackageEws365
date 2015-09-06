<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RulePredicatesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rule predicates, used as rule conditions or exceptions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRulePredicatesType extends AbstractStructBase
{
    /**
     * The Categories
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Categories;
    /**
     * The ContainsBodyStrings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContainsBodyStrings;
    /**
     * The ContainsHeaderStrings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContainsHeaderStrings;
    /**
     * The ContainsRecipientStrings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContainsRecipientStrings;
    /**
     * The ContainsSenderStrings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContainsSenderStrings;
    /**
     * The ContainsSubjectOrBodyStrings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContainsSubjectOrBodyStrings;
    /**
     * The ContainsSubjectStrings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContainsSubjectStrings;
    /**
     * The FlaggedForAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Flagged for action enumeration, currently used in FlaggedForAction rule predicate
     * @var string
     */
    public $FlaggedForAction;
    /**
     * The FromAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $FromAddresses;
    /**
     * The FromConnectedAccounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $FromConnectedAccounts;
    /**
     * The HasAttachments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $HasAttachments;
    /**
     * The Importance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The IsApprovalRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsApprovalRequest;
    /**
     * The IsAutomaticForward
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsAutomaticForward;
    /**
     * The IsAutomaticReply
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsAutomaticReply;
    /**
     * The IsEncrypted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsEncrypted;
    /**
     * The IsMeetingRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsMeetingRequest;
    /**
     * The IsMeetingResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsMeetingResponse;
    /**
     * The IsNDR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsNDR;
    /**
     * The IsPermissionControlled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsPermissionControlled;
    /**
     * The IsReadReceipt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsReadReceipt;
    /**
     * The IsSigned
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsSigned;
    /**
     * The IsVoicemail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsVoicemail;
    /**
     * The ItemClasses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ItemClasses;
    /**
     * The MessageClassifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $MessageClassifications;
    /**
     * The NotSentToMe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $NotSentToMe;
    /**
     * The SentCcMe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $SentCcMe;
    /**
     * The SentOnlyToMe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $SentOnlyToMe;
    /**
     * The SentToAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $SentToAddresses;
    /**
     * The SentToMe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $SentToMe;
    /**
     * The SentToOrCcMe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $SentToOrCcMe;
    /**
     * The Sensitivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sensitivity;
    /**
     * The WithinDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Date range type used for the WithinDateRange rule predicate.
     * @var \Ews\StructType\EwsRulePredicateDateRangeType
     */
    public $WithinDateRange;
    /**
     * The WithinSizeRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Size range type used for the WithinSizeRange rule predicate.
     * @var \Ews\StructType\EwsRulePredicateSizeRangeType
     */
    public $WithinSizeRange;
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
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsBodyStrings
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsHeaderStrings
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsRecipientStrings
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsSenderStrings
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsSubjectStrings
     * @param string $flaggedForAction
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $fromAddresses
     * @param \Ews\ArrayType\EwsArrayOfStringsType $fromConnectedAccounts
     * @param boolean $hasAttachments
     * @param string $importance
     * @param boolean $isApprovalRequest
     * @param boolean $isAutomaticForward
     * @param boolean $isAutomaticReply
     * @param boolean $isEncrypted
     * @param boolean $isMeetingRequest
     * @param boolean $isMeetingResponse
     * @param boolean $isNDR
     * @param boolean $isPermissionControlled
     * @param boolean $isReadReceipt
     * @param boolean $isSigned
     * @param boolean $isVoicemail
     * @param \Ews\ArrayType\EwsArrayOfStringsType $itemClasses
     * @param \Ews\ArrayType\EwsArrayOfStringsType $messageClassifications
     * @param boolean $notSentToMe
     * @param boolean $sentCcMe
     * @param boolean $sentOnlyToMe
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses
     * @param boolean $sentToMe
     * @param boolean $sentToOrCcMe
     * @param string $sensitivity
     * @param \Ews\StructType\EwsRulePredicateDateRangeType $withinDateRange
     * @param \Ews\StructType\EwsRulePredicateSizeRangeType $withinSizeRange
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $categories = null, \Ews\ArrayType\EwsArrayOfStringsType $containsBodyStrings = null, \Ews\ArrayType\EwsArrayOfStringsType $containsHeaderStrings = null, \Ews\ArrayType\EwsArrayOfStringsType $containsRecipientStrings = null, \Ews\ArrayType\EwsArrayOfStringsType $containsSenderStrings = null, \Ews\ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings = null, \Ews\ArrayType\EwsArrayOfStringsType $containsSubjectStrings = null, $flaggedForAction = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $fromAddresses = null, \Ews\ArrayType\EwsArrayOfStringsType $fromConnectedAccounts = null, $hasAttachments = null, $importance = null, $isApprovalRequest = null, $isAutomaticForward = null, $isAutomaticReply = null, $isEncrypted = null, $isMeetingRequest = null, $isMeetingResponse = null, $isNDR = null, $isPermissionControlled = null, $isReadReceipt = null, $isSigned = null, $isVoicemail = null, \Ews\ArrayType\EwsArrayOfStringsType $itemClasses = null, \Ews\ArrayType\EwsArrayOfStringsType $messageClassifications = null, $notSentToMe = null, $sentCcMe = null, $sentOnlyToMe = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses = null, $sentToMe = null, $sentToOrCcMe = null, $sensitivity = null, \Ews\StructType\EwsRulePredicateDateRangeType $withinDateRange = null, \Ews\StructType\EwsRulePredicateSizeRangeType $withinSizeRange = null)
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
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }
    /**
     * Set Categories value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setCategories(\Ews\ArrayType\EwsArrayOfStringsType $categories = null)
    {
        $this->Categories = $categories;
        return $this;
    }
    /**
     * Get ContainsBodyStrings value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsBodyStrings()
    {
        return $this->ContainsBodyStrings;
    }
    /**
     * Set ContainsBodyStrings value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsBodyStrings
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setContainsBodyStrings(\Ews\ArrayType\EwsArrayOfStringsType $containsBodyStrings = null)
    {
        $this->ContainsBodyStrings = $containsBodyStrings;
        return $this;
    }
    /**
     * Get ContainsHeaderStrings value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsHeaderStrings()
    {
        return $this->ContainsHeaderStrings;
    }
    /**
     * Set ContainsHeaderStrings value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsHeaderStrings
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setContainsHeaderStrings(\Ews\ArrayType\EwsArrayOfStringsType $containsHeaderStrings = null)
    {
        $this->ContainsHeaderStrings = $containsHeaderStrings;
        return $this;
    }
    /**
     * Get ContainsRecipientStrings value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsRecipientStrings()
    {
        return $this->ContainsRecipientStrings;
    }
    /**
     * Set ContainsRecipientStrings value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsRecipientStrings
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setContainsRecipientStrings(\Ews\ArrayType\EwsArrayOfStringsType $containsRecipientStrings = null)
    {
        $this->ContainsRecipientStrings = $containsRecipientStrings;
        return $this;
    }
    /**
     * Get ContainsSenderStrings value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsSenderStrings()
    {
        return $this->ContainsSenderStrings;
    }
    /**
     * Set ContainsSenderStrings value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsSenderStrings
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setContainsSenderStrings(\Ews\ArrayType\EwsArrayOfStringsType $containsSenderStrings = null)
    {
        $this->ContainsSenderStrings = $containsSenderStrings;
        return $this;
    }
    /**
     * Get ContainsSubjectOrBodyStrings value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsSubjectOrBodyStrings()
    {
        return $this->ContainsSubjectOrBodyStrings;
    }
    /**
     * Set ContainsSubjectOrBodyStrings value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setContainsSubjectOrBodyStrings(\Ews\ArrayType\EwsArrayOfStringsType $containsSubjectOrBodyStrings = null)
    {
        $this->ContainsSubjectOrBodyStrings = $containsSubjectOrBodyStrings;
        return $this;
    }
    /**
     * Get ContainsSubjectStrings value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContainsSubjectStrings()
    {
        return $this->ContainsSubjectStrings;
    }
    /**
     * Set ContainsSubjectStrings value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $containsSubjectStrings
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setContainsSubjectStrings(\Ews\ArrayType\EwsArrayOfStringsType $containsSubjectStrings = null)
    {
        $this->ContainsSubjectStrings = $containsSubjectStrings;
        return $this;
    }
    /**
     * Get FlaggedForAction value
     * @return string|null
     */
    public function getFlaggedForAction()
    {
        return $this->FlaggedForAction;
    }
    /**
     * Set FlaggedForAction value
     * @uses \Ews\EnumType\EwsFlaggedForActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsFlaggedForActionType::getValidValues()
     * @param string $flaggedForAction
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setFlaggedForAction($flaggedForAction = null)
    {
        if (!\Ews\EnumType\EwsFlaggedForActionType::valueIsValid($flaggedForAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flaggedForAction, implode(', ', \Ews\EnumType\EwsFlaggedForActionType::getValidValues())), __LINE__);
        }
        $this->FlaggedForAction = $flaggedForAction;
        return $this;
    }
    /**
     * Get FromAddresses value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getFromAddresses()
    {
        return $this->FromAddresses;
    }
    /**
     * Set FromAddresses value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $fromAddresses
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setFromAddresses(\Ews\ArrayType\EwsArrayOfEmailAddressesType $fromAddresses = null)
    {
        $this->FromAddresses = $fromAddresses;
        return $this;
    }
    /**
     * Get FromConnectedAccounts value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getFromConnectedAccounts()
    {
        return $this->FromConnectedAccounts;
    }
    /**
     * Set FromConnectedAccounts value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $fromConnectedAccounts
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setFromConnectedAccounts(\Ews\ArrayType\EwsArrayOfStringsType $fromConnectedAccounts = null)
    {
        $this->FromConnectedAccounts = $fromConnectedAccounts;
        return $this;
    }
    /**
     * Get HasAttachments value
     * @return boolean|null
     */
    public function getHasAttachments()
    {
        return $this->HasAttachments;
    }
    /**
     * Set HasAttachments value
     * @param boolean $hasAttachments
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setHasAttachments($hasAttachments = null)
    {
        $this->HasAttachments = $hasAttachments;
        return $this;
    }
    /**
     * Get Importance value
     * @return string|null
     */
    public function getImportance()
    {
        return $this->Importance;
    }
    /**
     * Set Importance value
     * @uses \Ews\EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsImportanceChoicesType::getValidValues()
     * @param string $importance
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setImportance($importance = null)
    {
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importance, implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->Importance = $importance;
        return $this;
    }
    /**
     * Get IsApprovalRequest value
     * @return boolean|null
     */
    public function getIsApprovalRequest()
    {
        return $this->IsApprovalRequest;
    }
    /**
     * Set IsApprovalRequest value
     * @param boolean $isApprovalRequest
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsApprovalRequest($isApprovalRequest = null)
    {
        $this->IsApprovalRequest = $isApprovalRequest;
        return $this;
    }
    /**
     * Get IsAutomaticForward value
     * @return boolean|null
     */
    public function getIsAutomaticForward()
    {
        return $this->IsAutomaticForward;
    }
    /**
     * Set IsAutomaticForward value
     * @param boolean $isAutomaticForward
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsAutomaticForward($isAutomaticForward = null)
    {
        $this->IsAutomaticForward = $isAutomaticForward;
        return $this;
    }
    /**
     * Get IsAutomaticReply value
     * @return boolean|null
     */
    public function getIsAutomaticReply()
    {
        return $this->IsAutomaticReply;
    }
    /**
     * Set IsAutomaticReply value
     * @param boolean $isAutomaticReply
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsAutomaticReply($isAutomaticReply = null)
    {
        $this->IsAutomaticReply = $isAutomaticReply;
        return $this;
    }
    /**
     * Get IsEncrypted value
     * @return boolean|null
     */
    public function getIsEncrypted()
    {
        return $this->IsEncrypted;
    }
    /**
     * Set IsEncrypted value
     * @param boolean $isEncrypted
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsEncrypted($isEncrypted = null)
    {
        $this->IsEncrypted = $isEncrypted;
        return $this;
    }
    /**
     * Get IsMeetingRequest value
     * @return boolean|null
     */
    public function getIsMeetingRequest()
    {
        return $this->IsMeetingRequest;
    }
    /**
     * Set IsMeetingRequest value
     * @param boolean $isMeetingRequest
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsMeetingRequest($isMeetingRequest = null)
    {
        $this->IsMeetingRequest = $isMeetingRequest;
        return $this;
    }
    /**
     * Get IsMeetingResponse value
     * @return boolean|null
     */
    public function getIsMeetingResponse()
    {
        return $this->IsMeetingResponse;
    }
    /**
     * Set IsMeetingResponse value
     * @param boolean $isMeetingResponse
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsMeetingResponse($isMeetingResponse = null)
    {
        $this->IsMeetingResponse = $isMeetingResponse;
        return $this;
    }
    /**
     * Get IsNDR value
     * @return boolean|null
     */
    public function getIsNDR()
    {
        return $this->IsNDR;
    }
    /**
     * Set IsNDR value
     * @param boolean $isNDR
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsNDR($isNDR = null)
    {
        $this->IsNDR = $isNDR;
        return $this;
    }
    /**
     * Get IsPermissionControlled value
     * @return boolean|null
     */
    public function getIsPermissionControlled()
    {
        return $this->IsPermissionControlled;
    }
    /**
     * Set IsPermissionControlled value
     * @param boolean $isPermissionControlled
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsPermissionControlled($isPermissionControlled = null)
    {
        $this->IsPermissionControlled = $isPermissionControlled;
        return $this;
    }
    /**
     * Get IsReadReceipt value
     * @return boolean|null
     */
    public function getIsReadReceipt()
    {
        return $this->IsReadReceipt;
    }
    /**
     * Set IsReadReceipt value
     * @param boolean $isReadReceipt
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsReadReceipt($isReadReceipt = null)
    {
        $this->IsReadReceipt = $isReadReceipt;
        return $this;
    }
    /**
     * Get IsSigned value
     * @return boolean|null
     */
    public function getIsSigned()
    {
        return $this->IsSigned;
    }
    /**
     * Set IsSigned value
     * @param boolean $isSigned
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsSigned($isSigned = null)
    {
        $this->IsSigned = $isSigned;
        return $this;
    }
    /**
     * Get IsVoicemail value
     * @return boolean|null
     */
    public function getIsVoicemail()
    {
        return $this->IsVoicemail;
    }
    /**
     * Set IsVoicemail value
     * @param boolean $isVoicemail
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setIsVoicemail($isVoicemail = null)
    {
        $this->IsVoicemail = $isVoicemail;
        return $this;
    }
    /**
     * Get ItemClasses value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getItemClasses()
    {
        return $this->ItemClasses;
    }
    /**
     * Set ItemClasses value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $itemClasses
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setItemClasses(\Ews\ArrayType\EwsArrayOfStringsType $itemClasses = null)
    {
        $this->ItemClasses = $itemClasses;
        return $this;
    }
    /**
     * Get MessageClassifications value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getMessageClassifications()
    {
        return $this->MessageClassifications;
    }
    /**
     * Set MessageClassifications value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $messageClassifications
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setMessageClassifications(\Ews\ArrayType\EwsArrayOfStringsType $messageClassifications = null)
    {
        $this->MessageClassifications = $messageClassifications;
        return $this;
    }
    /**
     * Get NotSentToMe value
     * @return boolean|null
     */
    public function getNotSentToMe()
    {
        return $this->NotSentToMe;
    }
    /**
     * Set NotSentToMe value
     * @param boolean $notSentToMe
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setNotSentToMe($notSentToMe = null)
    {
        $this->NotSentToMe = $notSentToMe;
        return $this;
    }
    /**
     * Get SentCcMe value
     * @return boolean|null
     */
    public function getSentCcMe()
    {
        return $this->SentCcMe;
    }
    /**
     * Set SentCcMe value
     * @param boolean $sentCcMe
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setSentCcMe($sentCcMe = null)
    {
        $this->SentCcMe = $sentCcMe;
        return $this;
    }
    /**
     * Get SentOnlyToMe value
     * @return boolean|null
     */
    public function getSentOnlyToMe()
    {
        return $this->SentOnlyToMe;
    }
    /**
     * Set SentOnlyToMe value
     * @param boolean $sentOnlyToMe
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setSentOnlyToMe($sentOnlyToMe = null)
    {
        $this->SentOnlyToMe = $sentOnlyToMe;
        return $this;
    }
    /**
     * Get SentToAddresses value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getSentToAddresses()
    {
        return $this->SentToAddresses;
    }
    /**
     * Set SentToAddresses value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setSentToAddresses(\Ews\ArrayType\EwsArrayOfEmailAddressesType $sentToAddresses = null)
    {
        $this->SentToAddresses = $sentToAddresses;
        return $this;
    }
    /**
     * Get SentToMe value
     * @return boolean|null
     */
    public function getSentToMe()
    {
        return $this->SentToMe;
    }
    /**
     * Set SentToMe value
     * @param boolean $sentToMe
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setSentToMe($sentToMe = null)
    {
        $this->SentToMe = $sentToMe;
        return $this;
    }
    /**
     * Get SentToOrCcMe value
     * @return boolean|null
     */
    public function getSentToOrCcMe()
    {
        return $this->SentToOrCcMe;
    }
    /**
     * Set SentToOrCcMe value
     * @param boolean $sentToOrCcMe
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setSentToOrCcMe($sentToOrCcMe = null)
    {
        $this->SentToOrCcMe = $sentToOrCcMe;
        return $this;
    }
    /**
     * Get Sensitivity value
     * @return string|null
     */
    public function getSensitivity()
    {
        return $this->Sensitivity;
    }
    /**
     * Set Sensitivity value
     * @uses \Ews\EnumType\EwsSensitivityChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsSensitivityChoicesType::getValidValues()
     * @param string $sensitivity
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setSensitivity($sensitivity = null)
    {
        if (!\Ews\EnumType\EwsSensitivityChoicesType::valueIsValid($sensitivity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sensitivity, implode(', ', \Ews\EnumType\EwsSensitivityChoicesType::getValidValues())), __LINE__);
        }
        $this->Sensitivity = $sensitivity;
        return $this;
    }
    /**
     * Get WithinDateRange value
     * @return \Ews\StructType\EwsRulePredicateDateRangeType|null
     */
    public function getWithinDateRange()
    {
        return $this->WithinDateRange;
    }
    /**
     * Set WithinDateRange value
     * @param \Ews\StructType\EwsRulePredicateDateRangeType $withinDateRange
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setWithinDateRange(\Ews\StructType\EwsRulePredicateDateRangeType $withinDateRange = null)
    {
        $this->WithinDateRange = $withinDateRange;
        return $this;
    }
    /**
     * Get WithinSizeRange value
     * @return \Ews\StructType\EwsRulePredicateSizeRangeType|null
     */
    public function getWithinSizeRange()
    {
        return $this->WithinSizeRange;
    }
    /**
     * Set WithinSizeRange value
     * @param \Ews\StructType\EwsRulePredicateSizeRangeType $withinSizeRange
     * @return \Ews\StructType\EwsRulePredicatesType
     */
    public function setWithinSizeRange(\Ews\StructType\EwsRulePredicateSizeRangeType $withinSizeRange = null)
    {
        $this->WithinSizeRange = $withinSizeRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRulePredicatesType
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
