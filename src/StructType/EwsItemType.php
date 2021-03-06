<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemType extends AbstractStructBase
{
    /**
     * The MimeContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMimeContentType
     */
    public $MimeContent;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The ParentFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * The ItemClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemClass;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Sensitivity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Sensitivity;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $Body;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * The DateTimeReceived
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateTimeReceived;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Categories;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The InReplyTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InReplyTo;
    /**
     * The IsSubmitted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSubmitted;
    /**
     * The IsDraft
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDraft;
    /**
     * The IsFromMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFromMe;
    /**
     * The IsResend
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsResend;
    /**
     * The IsUnmodified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnmodified;
    /**
     * The InternetMessageHeaders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;
    /**
     * The DateTimeSent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateTimeSent;
    /**
     * The DateTimeCreated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateTimeCreated;
    /**
     * The ResponseObjects
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;
    /**
     * The ReminderDueBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReminderDueBy;
    /**
     * The ReminderIsSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReminderIsSet;
    /**
     * The ReminderNextTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReminderNextTime;
    /**
     * The ReminderMinutesBeforeStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - union: int
     * @var string
     */
    public $ReminderMinutesBeforeStart;
    /**
     * The DisplayCc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayCc;
    /**
     * The DisplayTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayTo;
    /**
     * The HasAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasAttachments;
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsExtendedPropertyType[]
     */
    public $ExtendedProperty;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Culture;
    /**
     * The EffectiveRights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEffectiveRightsType
     */
    public $EffectiveRights;
    /**
     * The LastModifiedName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedName;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The IsAssociated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssociated;
    /**
     * The WebClientReadFormQueryString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WebClientReadFormQueryString;
    /**
     * The WebClientEditFormQueryString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WebClientEditFormQueryString;
    /**
     * The ConversationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The UniqueBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $UniqueBody;
    /**
     * The Flag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFlagType
     */
    public $Flag;
    /**
     * The StoreEntryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StoreEntryId;
    /**
     * The InstanceKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstanceKey;
    /**
     * The NormalizedBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $NormalizedBody;
    /**
     * The EntityExtractionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEntityExtractionResultType
     */
    public $EntityExtractionResult;
    /**
     * The PolicyTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $PolicyTag;
    /**
     * The ArchiveTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $ArchiveTag;
    /**
     * The RetentionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RetentionDate;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Preview;
    /**
     * The RightsManagementLicenseData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public $RightsManagementLicenseData;
    /**
     * The PredictedActionReasons
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public $PredictedActionReasons;
    /**
     * The IsClutter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsClutter;
    /**
     * The BlockStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BlockStatus;
    /**
     * The HasBlockedImages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasBlockedImages;
    /**
     * The TextBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $TextBody;
    /**
     * The IconIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IconIndex;
    /**
     * The SearchKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SearchKey;
    /**
     * The SortKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SortKey;
    /**
     * The Hashtags
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Hashtags;
    /**
     * The Mentions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $Mentions;
    /**
     * The MentionedMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MentionedMe;
    /**
     * The PendingSocialActivityTagIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $PendingSocialActivityTagIds;
    /**
     * Constructor method for ItemType
     * @uses EwsItemType::setMimeContent()
     * @uses EwsItemType::setItemId()
     * @uses EwsItemType::setParentFolderId()
     * @uses EwsItemType::setItemClass()
     * @uses EwsItemType::setSubject()
     * @uses EwsItemType::setSensitivity()
     * @uses EwsItemType::setBody()
     * @uses EwsItemType::setAttachments()
     * @uses EwsItemType::setDateTimeReceived()
     * @uses EwsItemType::setSize()
     * @uses EwsItemType::setCategories()
     * @uses EwsItemType::setImportance()
     * @uses EwsItemType::setInReplyTo()
     * @uses EwsItemType::setIsSubmitted()
     * @uses EwsItemType::setIsDraft()
     * @uses EwsItemType::setIsFromMe()
     * @uses EwsItemType::setIsResend()
     * @uses EwsItemType::setIsUnmodified()
     * @uses EwsItemType::setInternetMessageHeaders()
     * @uses EwsItemType::setDateTimeSent()
     * @uses EwsItemType::setDateTimeCreated()
     * @uses EwsItemType::setResponseObjects()
     * @uses EwsItemType::setReminderDueBy()
     * @uses EwsItemType::setReminderIsSet()
     * @uses EwsItemType::setReminderNextTime()
     * @uses EwsItemType::setReminderMinutesBeforeStart()
     * @uses EwsItemType::setDisplayCc()
     * @uses EwsItemType::setDisplayTo()
     * @uses EwsItemType::setHasAttachments()
     * @uses EwsItemType::setExtendedProperty()
     * @uses EwsItemType::setCulture()
     * @uses EwsItemType::setEffectiveRights()
     * @uses EwsItemType::setLastModifiedName()
     * @uses EwsItemType::setLastModifiedTime()
     * @uses EwsItemType::setIsAssociated()
     * @uses EwsItemType::setWebClientReadFormQueryString()
     * @uses EwsItemType::setWebClientEditFormQueryString()
     * @uses EwsItemType::setConversationId()
     * @uses EwsItemType::setUniqueBody()
     * @uses EwsItemType::setFlag()
     * @uses EwsItemType::setStoreEntryId()
     * @uses EwsItemType::setInstanceKey()
     * @uses EwsItemType::setNormalizedBody()
     * @uses EwsItemType::setEntityExtractionResult()
     * @uses EwsItemType::setPolicyTag()
     * @uses EwsItemType::setArchiveTag()
     * @uses EwsItemType::setRetentionDate()
     * @uses EwsItemType::setPreview()
     * @uses EwsItemType::setRightsManagementLicenseData()
     * @uses EwsItemType::setPredictedActionReasons()
     * @uses EwsItemType::setIsClutter()
     * @uses EwsItemType::setBlockStatus()
     * @uses EwsItemType::setHasBlockedImages()
     * @uses EwsItemType::setTextBody()
     * @uses EwsItemType::setIconIndex()
     * @uses EwsItemType::setSearchKey()
     * @uses EwsItemType::setSortKey()
     * @uses EwsItemType::setHashtags()
     * @uses EwsItemType::setMentions()
     * @uses EwsItemType::setMentionedMe()
     * @uses EwsItemType::setPendingSocialActivityTagIds()
     * @param \Ews\StructType\EwsMimeContentType $mimeContent
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @param string $itemClass
     * @param string $subject
     * @param string $sensitivity
     * @param \Ews\StructType\EwsBodyType $body
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param string $dateTimeReceived
     * @param int $size
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @param string $importance
     * @param string $inReplyTo
     * @param bool $isSubmitted
     * @param bool $isDraft
     * @param bool $isFromMe
     * @param bool $isResend
     * @param bool $isUnmodified
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders
     * @param string $dateTimeSent
     * @param string $dateTimeCreated
     * @param \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects
     * @param string $reminderDueBy
     * @param bool $reminderIsSet
     * @param string $reminderNextTime
     * @param string $reminderMinutesBeforeStart
     * @param string $displayCc
     * @param string $displayTo
     * @param bool $hasAttachments
     * @param \Ews\StructType\EwsExtendedPropertyType[] $extendedProperty
     * @param string $culture
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @param string $lastModifiedName
     * @param string $lastModifiedTime
     * @param bool $isAssociated
     * @param string $webClientReadFormQueryString
     * @param string $webClientEditFormQueryString
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @param \Ews\StructType\EwsBodyType $uniqueBody
     * @param \Ews\StructType\EwsFlagType $flag
     * @param string $storeEntryId
     * @param string $instanceKey
     * @param \Ews\StructType\EwsBodyType $normalizedBody
     * @param \Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @param string $retentionDate
     * @param string $preview
     * @param \Ews\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons
     * @param bool $isClutter
     * @param bool $blockStatus
     * @param bool $hasBlockedImages
     * @param \Ews\StructType\EwsBodyType $textBody
     * @param string $iconIndex
     * @param string $searchKey
     * @param int $sortKey
     * @param \Ews\ArrayType\EwsArrayOfStringsType $hashtags
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $mentions
     * @param bool $mentionedMe
     * @param \Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds
     */
    public function __construct(\Ews\StructType\EwsMimeContentType $mimeContent = null, \Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsFolderIdType $parentFolderId = null, $itemClass = null, $subject = null, $sensitivity = null, \Ews\StructType\EwsBodyType $body = null, \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, $dateTimeReceived = null, $size = null, \Ews\ArrayType\EwsArrayOfStringsType $categories = null, $importance = null, $inReplyTo = null, $isSubmitted = null, $isDraft = null, $isFromMe = null, $isResend = null, $isUnmodified = null, \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null, $dateTimeSent = null, $dateTimeCreated = null, \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects = null, $reminderDueBy = null, $reminderIsSet = null, $reminderNextTime = null, $reminderMinutesBeforeStart = null, $displayCc = null, $displayTo = null, $hasAttachments = null, array $extendedProperty = array(), $culture = null, \Ews\StructType\EwsEffectiveRightsType $effectiveRights = null, $lastModifiedName = null, $lastModifiedTime = null, $isAssociated = null, $webClientReadFormQueryString = null, $webClientEditFormQueryString = null, \Ews\StructType\EwsItemIdType $conversationId = null, \Ews\StructType\EwsBodyType $uniqueBody = null, \Ews\StructType\EwsFlagType $flag = null, $storeEntryId = null, $instanceKey = null, \Ews\StructType\EwsBodyType $normalizedBody = null, \Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult = null, \Ews\StructType\EwsRetentionTagType $policyTag = null, \Ews\StructType\EwsRetentionTagType $archiveTag = null, $retentionDate = null, $preview = null, \Ews\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData = null, \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons = null, $isClutter = null, $blockStatus = null, $hasBlockedImages = null, \Ews\StructType\EwsBodyType $textBody = null, $iconIndex = null, $searchKey = null, $sortKey = null, \Ews\ArrayType\EwsArrayOfStringsType $hashtags = null, \Ews\ArrayType\EwsArrayOfRecipientsType $mentions = null, $mentionedMe = null, \Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds = null)
    {
        $this
            ->setMimeContent($mimeContent)
            ->setItemId($itemId)
            ->setParentFolderId($parentFolderId)
            ->setItemClass($itemClass)
            ->setSubject($subject)
            ->setSensitivity($sensitivity)
            ->setBody($body)
            ->setAttachments($attachments)
            ->setDateTimeReceived($dateTimeReceived)
            ->setSize($size)
            ->setCategories($categories)
            ->setImportance($importance)
            ->setInReplyTo($inReplyTo)
            ->setIsSubmitted($isSubmitted)
            ->setIsDraft($isDraft)
            ->setIsFromMe($isFromMe)
            ->setIsResend($isResend)
            ->setIsUnmodified($isUnmodified)
            ->setInternetMessageHeaders($internetMessageHeaders)
            ->setDateTimeSent($dateTimeSent)
            ->setDateTimeCreated($dateTimeCreated)
            ->setResponseObjects($responseObjects)
            ->setReminderDueBy($reminderDueBy)
            ->setReminderIsSet($reminderIsSet)
            ->setReminderNextTime($reminderNextTime)
            ->setReminderMinutesBeforeStart($reminderMinutesBeforeStart)
            ->setDisplayCc($displayCc)
            ->setDisplayTo($displayTo)
            ->setHasAttachments($hasAttachments)
            ->setExtendedProperty($extendedProperty)
            ->setCulture($culture)
            ->setEffectiveRights($effectiveRights)
            ->setLastModifiedName($lastModifiedName)
            ->setLastModifiedTime($lastModifiedTime)
            ->setIsAssociated($isAssociated)
            ->setWebClientReadFormQueryString($webClientReadFormQueryString)
            ->setWebClientEditFormQueryString($webClientEditFormQueryString)
            ->setConversationId($conversationId)
            ->setUniqueBody($uniqueBody)
            ->setFlag($flag)
            ->setStoreEntryId($storeEntryId)
            ->setInstanceKey($instanceKey)
            ->setNormalizedBody($normalizedBody)
            ->setEntityExtractionResult($entityExtractionResult)
            ->setPolicyTag($policyTag)
            ->setArchiveTag($archiveTag)
            ->setRetentionDate($retentionDate)
            ->setPreview($preview)
            ->setRightsManagementLicenseData($rightsManagementLicenseData)
            ->setPredictedActionReasons($predictedActionReasons)
            ->setIsClutter($isClutter)
            ->setBlockStatus($blockStatus)
            ->setHasBlockedImages($hasBlockedImages)
            ->setTextBody($textBody)
            ->setIconIndex($iconIndex)
            ->setSearchKey($searchKey)
            ->setSortKey($sortKey)
            ->setHashtags($hashtags)
            ->setMentions($mentions)
            ->setMentionedMe($mentionedMe)
            ->setPendingSocialActivityTagIds($pendingSocialActivityTagIds);
    }
    /**
     * Get MimeContent value
     * @return \Ews\StructType\EwsMimeContentType|null
     */
    public function getMimeContent()
    {
        return $this->MimeContent;
    }
    /**
     * Set MimeContent value
     * @param \Ews\StructType\EwsMimeContentType $mimeContent
     * @return \Ews\StructType\EwsItemType
     */
    public function setMimeContent(\Ews\StructType\EwsMimeContentType $mimeContent = null)
    {
        $this->MimeContent = $mimeContent;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsItemType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsItemType
     */
    public function setParentFolderId(\Ews\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass()
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \Ews\StructType\EwsItemType
     */
    public function setItemClass($itemClass = null)
    {
        // validation for constraint: string
        if (!is_null($itemClass) && !is_string($itemClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemClass, true), gettype($itemClass)), __LINE__);
        }
        $this->ItemClass = $itemClass;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsItemType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
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
     * @throws \InvalidArgumentException
     * @param string $sensitivity
     * @return \Ews\StructType\EwsItemType
     */
    public function setSensitivity($sensitivity = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSensitivityChoicesType::valueIsValid($sensitivity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSensitivityChoicesType', is_array($sensitivity) ? implode(', ', $sensitivity) : var_export($sensitivity, true), implode(', ', \Ews\EnumType\EwsSensitivityChoicesType::getValidValues())), __LINE__);
        }
        $this->Sensitivity = $sensitivity;
        return $this;
    }
    /**
     * Get Body value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \Ews\StructType\EwsBodyType $body
     * @return \Ews\StructType\EwsItemType
     */
    public function setBody(\Ews\StructType\EwsBodyType $body = null)
    {
        $this->Body = $body;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \Ews\StructType\EwsItemType
     */
    public function setAttachments(\Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get DateTimeReceived value
     * @return string|null
     */
    public function getDateTimeReceived()
    {
        return $this->DateTimeReceived;
    }
    /**
     * Set DateTimeReceived value
     * @param string $dateTimeReceived
     * @return \Ews\StructType\EwsItemType
     */
    public function setDateTimeReceived($dateTimeReceived = null)
    {
        // validation for constraint: string
        if (!is_null($dateTimeReceived) && !is_string($dateTimeReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeReceived, true), gettype($dateTimeReceived)), __LINE__);
        }
        $this->DateTimeReceived = $dateTimeReceived;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Ews\StructType\EwsItemType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
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
     * @return \Ews\StructType\EwsItemType
     */
    public function setCategories(\Ews\ArrayType\EwsArrayOfStringsType $categories = null)
    {
        $this->Categories = $categories;
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
     * @throws \InvalidArgumentException
     * @param string $importance
     * @return \Ews\StructType\EwsItemType
     */
    public function setImportance($importance = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsImportanceChoicesType', is_array($importance) ? implode(', ', $importance) : var_export($importance, true), implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->Importance = $importance;
        return $this;
    }
    /**
     * Get InReplyTo value
     * @return string|null
     */
    public function getInReplyTo()
    {
        return $this->InReplyTo;
    }
    /**
     * Set InReplyTo value
     * @param string $inReplyTo
     * @return \Ews\StructType\EwsItemType
     */
    public function setInReplyTo($inReplyTo = null)
    {
        // validation for constraint: string
        if (!is_null($inReplyTo) && !is_string($inReplyTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inReplyTo, true), gettype($inReplyTo)), __LINE__);
        }
        $this->InReplyTo = $inReplyTo;
        return $this;
    }
    /**
     * Get IsSubmitted value
     * @return bool|null
     */
    public function getIsSubmitted()
    {
        return $this->IsSubmitted;
    }
    /**
     * Set IsSubmitted value
     * @param bool $isSubmitted
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsSubmitted($isSubmitted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSubmitted) && !is_bool($isSubmitted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubmitted, true), gettype($isSubmitted)), __LINE__);
        }
        $this->IsSubmitted = $isSubmitted;
        return $this;
    }
    /**
     * Get IsDraft value
     * @return bool|null
     */
    public function getIsDraft()
    {
        return $this->IsDraft;
    }
    /**
     * Set IsDraft value
     * @param bool $isDraft
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsDraft($isDraft = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->IsDraft = $isDraft;
        return $this;
    }
    /**
     * Get IsFromMe value
     * @return bool|null
     */
    public function getIsFromMe()
    {
        return $this->IsFromMe;
    }
    /**
     * Set IsFromMe value
     * @param bool $isFromMe
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsFromMe($isFromMe = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFromMe) && !is_bool($isFromMe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFromMe, true), gettype($isFromMe)), __LINE__);
        }
        $this->IsFromMe = $isFromMe;
        return $this;
    }
    /**
     * Get IsResend value
     * @return bool|null
     */
    public function getIsResend()
    {
        return $this->IsResend;
    }
    /**
     * Set IsResend value
     * @param bool $isResend
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsResend($isResend = null)
    {
        // validation for constraint: boolean
        if (!is_null($isResend) && !is_bool($isResend)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isResend, true), gettype($isResend)), __LINE__);
        }
        $this->IsResend = $isResend;
        return $this;
    }
    /**
     * Get IsUnmodified value
     * @return bool|null
     */
    public function getIsUnmodified()
    {
        return $this->IsUnmodified;
    }
    /**
     * Set IsUnmodified value
     * @param bool $isUnmodified
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsUnmodified($isUnmodified = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnmodified) && !is_bool($isUnmodified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnmodified, true), gettype($isUnmodified)), __LINE__);
        }
        $this->IsUnmodified = $isUnmodified;
        return $this;
    }
    /**
     * Get InternetMessageHeaders value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    public function getInternetMessageHeaders()
    {
        return $this->InternetMessageHeaders;
    }
    /**
     * Set InternetMessageHeaders value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders
     * @return \Ews\StructType\EwsItemType
     */
    public function setInternetMessageHeaders(\Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null)
    {
        $this->InternetMessageHeaders = $internetMessageHeaders;
        return $this;
    }
    /**
     * Get DateTimeSent value
     * @return string|null
     */
    public function getDateTimeSent()
    {
        return $this->DateTimeSent;
    }
    /**
     * Set DateTimeSent value
     * @param string $dateTimeSent
     * @return \Ews\StructType\EwsItemType
     */
    public function setDateTimeSent($dateTimeSent = null)
    {
        // validation for constraint: string
        if (!is_null($dateTimeSent) && !is_string($dateTimeSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeSent, true), gettype($dateTimeSent)), __LINE__);
        }
        $this->DateTimeSent = $dateTimeSent;
        return $this;
    }
    /**
     * Get DateTimeCreated value
     * @return string|null
     */
    public function getDateTimeCreated()
    {
        return $this->DateTimeCreated;
    }
    /**
     * Set DateTimeCreated value
     * @param string $dateTimeCreated
     * @return \Ews\StructType\EwsItemType
     */
    public function setDateTimeCreated($dateTimeCreated = null)
    {
        // validation for constraint: string
        if (!is_null($dateTimeCreated) && !is_string($dateTimeCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeCreated, true), gettype($dateTimeCreated)), __LINE__);
        }
        $this->DateTimeCreated = $dateTimeCreated;
        return $this;
    }
    /**
     * Get ResponseObjects value
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType|null
     */
    public function getResponseObjects()
    {
        return $this->ResponseObjects;
    }
    /**
     * Set ResponseObjects value
     * @param \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects
     * @return \Ews\StructType\EwsItemType
     */
    public function setResponseObjects(\Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects = null)
    {
        $this->ResponseObjects = $responseObjects;
        return $this;
    }
    /**
     * Get ReminderDueBy value
     * @return string|null
     */
    public function getReminderDueBy()
    {
        return $this->ReminderDueBy;
    }
    /**
     * Set ReminderDueBy value
     * @param string $reminderDueBy
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderDueBy($reminderDueBy = null)
    {
        // validation for constraint: string
        if (!is_null($reminderDueBy) && !is_string($reminderDueBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderDueBy, true), gettype($reminderDueBy)), __LINE__);
        }
        $this->ReminderDueBy = $reminderDueBy;
        return $this;
    }
    /**
     * Get ReminderIsSet value
     * @return bool|null
     */
    public function getReminderIsSet()
    {
        return $this->ReminderIsSet;
    }
    /**
     * Set ReminderIsSet value
     * @param bool $reminderIsSet
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderIsSet($reminderIsSet = null)
    {
        // validation for constraint: boolean
        if (!is_null($reminderIsSet) && !is_bool($reminderIsSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reminderIsSet, true), gettype($reminderIsSet)), __LINE__);
        }
        $this->ReminderIsSet = $reminderIsSet;
        return $this;
    }
    /**
     * Get ReminderNextTime value
     * @return string|null
     */
    public function getReminderNextTime()
    {
        return $this->ReminderNextTime;
    }
    /**
     * Set ReminderNextTime value
     * @param string $reminderNextTime
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderNextTime($reminderNextTime = null)
    {
        // validation for constraint: string
        if (!is_null($reminderNextTime) && !is_string($reminderNextTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderNextTime, true), gettype($reminderNextTime)), __LINE__);
        }
        $this->ReminderNextTime = $reminderNextTime;
        return $this;
    }
    /**
     * Get ReminderMinutesBeforeStart value
     * @return string|null
     */
    public function getReminderMinutesBeforeStart()
    {
        return $this->ReminderMinutesBeforeStart;
    }
    /**
     * This method is responsible for validating the value passed to the setReminderMinutesBeforeStart method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReminderMinutesBeforeStart method
     * This is a set of validation rules based on the union types associated to the property being set by the setReminderMinutesBeforeStart method
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReminderMinutesBeforeStartForUnionConstraintsFromSetReminderMinutesBeforeStart($value)
    {
        $message = '';
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            $exception0 = new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (isset($exception0)) {
            $message = sprintf("The value %s does not match any of the union rules: int. See following errors:\n%s", var_export($value, true), implode("\n", array_map(function(\InvalidArgumentException $e) { return sprintf(' - %s', $e->getMessage()); }, [$exception0])));
        }
        unset($exception0);
        return $message;
    }
    /**
     * Set ReminderMinutesBeforeStart value
     * @param string $reminderMinutesBeforeStart
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderMinutesBeforeStart($reminderMinutesBeforeStart = null)
    {
        // validation for constraint: string
        if (!is_null($reminderMinutesBeforeStart) && !is_string($reminderMinutesBeforeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderMinutesBeforeStart, true), gettype($reminderMinutesBeforeStart)), __LINE__);
        }
        // validation for constraint: union(int)
        if ('' !== ($reminderMinutesBeforeStartUnionErrorMessage = self::validateReminderMinutesBeforeStartForUnionConstraintsFromSetReminderMinutesBeforeStart($reminderMinutesBeforeStart))) {
            throw new \InvalidArgumentException($reminderMinutesBeforeStartUnionErrorMessage, __LINE__);
        }
        $this->ReminderMinutesBeforeStart = $reminderMinutesBeforeStart;
        return $this;
    }
    /**
     * Get DisplayCc value
     * @return string|null
     */
    public function getDisplayCc()
    {
        return $this->DisplayCc;
    }
    /**
     * Set DisplayCc value
     * @param string $displayCc
     * @return \Ews\StructType\EwsItemType
     */
    public function setDisplayCc($displayCc = null)
    {
        // validation for constraint: string
        if (!is_null($displayCc) && !is_string($displayCc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayCc, true), gettype($displayCc)), __LINE__);
        }
        $this->DisplayCc = $displayCc;
        return $this;
    }
    /**
     * Get DisplayTo value
     * @return string|null
     */
    public function getDisplayTo()
    {
        return $this->DisplayTo;
    }
    /**
     * Set DisplayTo value
     * @param string $displayTo
     * @return \Ews\StructType\EwsItemType
     */
    public function setDisplayTo($displayTo = null)
    {
        // validation for constraint: string
        if (!is_null($displayTo) && !is_string($displayTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayTo, true), gettype($displayTo)), __LINE__);
        }
        $this->DisplayTo = $displayTo;
        return $this;
    }
    /**
     * Get HasAttachments value
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->HasAttachments;
    }
    /**
     * Set HasAttachments value
     * @param bool $hasAttachments
     * @return \Ews\StructType\EwsItemType
     */
    public function setHasAttachments($hasAttachments = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAttachments) && !is_bool($hasAttachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAttachments, true), gettype($hasAttachments)), __LINE__);
        }
        $this->HasAttachments = $hasAttachments;
        return $this;
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsExtendedPropertyType[]|null
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemTypeExtendedPropertyItem) {
            // validation for constraint: itemType
            if (!$itemTypeExtendedPropertyItem instanceof \Ews\StructType\EwsExtendedPropertyType) {
                $invalidValues[] = is_object($itemTypeExtendedPropertyItem) ? get_class($itemTypeExtendedPropertyItem) : sprintf('%s(%s)', gettype($itemTypeExtendedPropertyItem), var_export($itemTypeExtendedPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedProperty property can only contain items of type \Ews\StructType\EwsExtendedPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExtendedProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyType[] $extendedProperty
     * @return \Ews\StructType\EwsItemType
     */
    public function setExtendedProperty(array $extendedProperty = array())
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyArrayErrorMessage = self::validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new \InvalidArgumentException($extendedPropertyArrayErrorMessage, __LINE__);
        }
        $this->ExtendedProperty = $extendedProperty;
        return $this;
    }
    /**
     * Add item to ExtendedProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyType $item
     * @return \Ews\StructType\EwsItemType
     */
    public function addToExtendedProperty(\Ews\StructType\EwsExtendedPropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsExtendedPropertyType) {
            throw new \InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of type \Ews\StructType\EwsExtendedPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExtendedProperty[] = $item;
        return $this;
    }
    /**
     * Get Culture value
     * @return string|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \Ews\StructType\EwsItemType
     */
    public function setCulture($culture = null)
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get EffectiveRights value
     * @return \Ews\StructType\EwsEffectiveRightsType|null
     */
    public function getEffectiveRights()
    {
        return $this->EffectiveRights;
    }
    /**
     * Set EffectiveRights value
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @return \Ews\StructType\EwsItemType
     */
    public function setEffectiveRights(\Ews\StructType\EwsEffectiveRightsType $effectiveRights = null)
    {
        $this->EffectiveRights = $effectiveRights;
        return $this;
    }
    /**
     * Get LastModifiedName value
     * @return string|null
     */
    public function getLastModifiedName()
    {
        return $this->LastModifiedName;
    }
    /**
     * Set LastModifiedName value
     * @param string $lastModifiedName
     * @return \Ews\StructType\EwsItemType
     */
    public function setLastModifiedName($lastModifiedName = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedName) && !is_string($lastModifiedName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedName, true), gettype($lastModifiedName)), __LINE__);
        }
        $this->LastModifiedName = $lastModifiedName;
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \Ews\StructType\EwsItemType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get IsAssociated value
     * @return bool|null
     */
    public function getIsAssociated()
    {
        return $this->IsAssociated;
    }
    /**
     * Set IsAssociated value
     * @param bool $isAssociated
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsAssociated($isAssociated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssociated) && !is_bool($isAssociated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssociated, true), gettype($isAssociated)), __LINE__);
        }
        $this->IsAssociated = $isAssociated;
        return $this;
    }
    /**
     * Get WebClientReadFormQueryString value
     * @return string|null
     */
    public function getWebClientReadFormQueryString()
    {
        return $this->WebClientReadFormQueryString;
    }
    /**
     * Set WebClientReadFormQueryString value
     * @param string $webClientReadFormQueryString
     * @return \Ews\StructType\EwsItemType
     */
    public function setWebClientReadFormQueryString($webClientReadFormQueryString = null)
    {
        // validation for constraint: string
        if (!is_null($webClientReadFormQueryString) && !is_string($webClientReadFormQueryString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webClientReadFormQueryString, true), gettype($webClientReadFormQueryString)), __LINE__);
        }
        $this->WebClientReadFormQueryString = $webClientReadFormQueryString;
        return $this;
    }
    /**
     * Get WebClientEditFormQueryString value
     * @return string|null
     */
    public function getWebClientEditFormQueryString()
    {
        return $this->WebClientEditFormQueryString;
    }
    /**
     * Set WebClientEditFormQueryString value
     * @param string $webClientEditFormQueryString
     * @return \Ews\StructType\EwsItemType
     */
    public function setWebClientEditFormQueryString($webClientEditFormQueryString = null)
    {
        // validation for constraint: string
        if (!is_null($webClientEditFormQueryString) && !is_string($webClientEditFormQueryString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webClientEditFormQueryString, true), gettype($webClientEditFormQueryString)), __LINE__);
        }
        $this->WebClientEditFormQueryString = $webClientEditFormQueryString;
        return $this;
    }
    /**
     * Get ConversationId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getConversationId()
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @return \Ews\StructType\EwsItemType
     */
    public function setConversationId(\Ews\StructType\EwsItemIdType $conversationId = null)
    {
        $this->ConversationId = $conversationId;
        return $this;
    }
    /**
     * Get UniqueBody value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getUniqueBody()
    {
        return $this->UniqueBody;
    }
    /**
     * Set UniqueBody value
     * @param \Ews\StructType\EwsBodyType $uniqueBody
     * @return \Ews\StructType\EwsItemType
     */
    public function setUniqueBody(\Ews\StructType\EwsBodyType $uniqueBody = null)
    {
        $this->UniqueBody = $uniqueBody;
        return $this;
    }
    /**
     * Get Flag value
     * @return \Ews\StructType\EwsFlagType|null
     */
    public function getFlag()
    {
        return $this->Flag;
    }
    /**
     * Set Flag value
     * @param \Ews\StructType\EwsFlagType $flag
     * @return \Ews\StructType\EwsItemType
     */
    public function setFlag(\Ews\StructType\EwsFlagType $flag = null)
    {
        $this->Flag = $flag;
        return $this;
    }
    /**
     * Get StoreEntryId value
     * @return string|null
     */
    public function getStoreEntryId()
    {
        return $this->StoreEntryId;
    }
    /**
     * Set StoreEntryId value
     * @param string $storeEntryId
     * @return \Ews\StructType\EwsItemType
     */
    public function setStoreEntryId($storeEntryId = null)
    {
        // validation for constraint: string
        if (!is_null($storeEntryId) && !is_string($storeEntryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeEntryId, true), gettype($storeEntryId)), __LINE__);
        }
        $this->StoreEntryId = $storeEntryId;
        return $this;
    }
    /**
     * Get InstanceKey value
     * @return string|null
     */
    public function getInstanceKey()
    {
        return $this->InstanceKey;
    }
    /**
     * Set InstanceKey value
     * @param string $instanceKey
     * @return \Ews\StructType\EwsItemType
     */
    public function setInstanceKey($instanceKey = null)
    {
        // validation for constraint: string
        if (!is_null($instanceKey) && !is_string($instanceKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instanceKey, true), gettype($instanceKey)), __LINE__);
        }
        $this->InstanceKey = $instanceKey;
        return $this;
    }
    /**
     * Get NormalizedBody value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getNormalizedBody()
    {
        return $this->NormalizedBody;
    }
    /**
     * Set NormalizedBody value
     * @param \Ews\StructType\EwsBodyType $normalizedBody
     * @return \Ews\StructType\EwsItemType
     */
    public function setNormalizedBody(\Ews\StructType\EwsBodyType $normalizedBody = null)
    {
        $this->NormalizedBody = $normalizedBody;
        return $this;
    }
    /**
     * Get EntityExtractionResult value
     * @return \Ews\StructType\EwsEntityExtractionResultType|null
     */
    public function getEntityExtractionResult()
    {
        return $this->EntityExtractionResult;
    }
    /**
     * Set EntityExtractionResult value
     * @param \Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult
     * @return \Ews\StructType\EwsItemType
     */
    public function setEntityExtractionResult(\Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult = null)
    {
        $this->EntityExtractionResult = $entityExtractionResult;
        return $this;
    }
    /**
     * Get PolicyTag value
     * @return \Ews\StructType\EwsRetentionTagType|null
     */
    public function getPolicyTag()
    {
        return $this->PolicyTag;
    }
    /**
     * Set PolicyTag value
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @return \Ews\StructType\EwsItemType
     */
    public function setPolicyTag(\Ews\StructType\EwsRetentionTagType $policyTag = null)
    {
        $this->PolicyTag = $policyTag;
        return $this;
    }
    /**
     * Get ArchiveTag value
     * @return \Ews\StructType\EwsRetentionTagType|null
     */
    public function getArchiveTag()
    {
        return $this->ArchiveTag;
    }
    /**
     * Set ArchiveTag value
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @return \Ews\StructType\EwsItemType
     */
    public function setArchiveTag(\Ews\StructType\EwsRetentionTagType $archiveTag = null)
    {
        $this->ArchiveTag = $archiveTag;
        return $this;
    }
    /**
     * Get RetentionDate value
     * @return string|null
     */
    public function getRetentionDate()
    {
        return $this->RetentionDate;
    }
    /**
     * Set RetentionDate value
     * @param string $retentionDate
     * @return \Ews\StructType\EwsItemType
     */
    public function setRetentionDate($retentionDate = null)
    {
        // validation for constraint: string
        if (!is_null($retentionDate) && !is_string($retentionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retentionDate, true), gettype($retentionDate)), __LINE__);
        }
        $this->RetentionDate = $retentionDate;
        return $this;
    }
    /**
     * Get Preview value
     * @return string|null
     */
    public function getPreview()
    {
        return $this->Preview;
    }
    /**
     * Set Preview value
     * @param string $preview
     * @return \Ews\StructType\EwsItemType
     */
    public function setPreview($preview = null)
    {
        // validation for constraint: string
        if (!is_null($preview) && !is_string($preview)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->Preview = $preview;
        return $this;
    }
    /**
     * Get RightsManagementLicenseData value
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType|null
     */
    public function getRightsManagementLicenseData()
    {
        return $this->RightsManagementLicenseData;
    }
    /**
     * Set RightsManagementLicenseData value
     * @param \Ews\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData
     * @return \Ews\StructType\EwsItemType
     */
    public function setRightsManagementLicenseData(\Ews\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData = null)
    {
        $this->RightsManagementLicenseData = $rightsManagementLicenseData;
        return $this;
    }
    /**
     * Get PredictedActionReasons value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType|null
     */
    public function getPredictedActionReasons()
    {
        return $this->PredictedActionReasons;
    }
    /**
     * Set PredictedActionReasons value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons
     * @return \Ews\StructType\EwsItemType
     */
    public function setPredictedActionReasons(\Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons = null)
    {
        $this->PredictedActionReasons = $predictedActionReasons;
        return $this;
    }
    /**
     * Get IsClutter value
     * @return bool|null
     */
    public function getIsClutter()
    {
        return $this->IsClutter;
    }
    /**
     * Set IsClutter value
     * @param bool $isClutter
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsClutter($isClutter = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClutter) && !is_bool($isClutter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isClutter, true), gettype($isClutter)), __LINE__);
        }
        $this->IsClutter = $isClutter;
        return $this;
    }
    /**
     * Get BlockStatus value
     * @return bool|null
     */
    public function getBlockStatus()
    {
        return $this->BlockStatus;
    }
    /**
     * Set BlockStatus value
     * @param bool $blockStatus
     * @return \Ews\StructType\EwsItemType
     */
    public function setBlockStatus($blockStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($blockStatus) && !is_bool($blockStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blockStatus, true), gettype($blockStatus)), __LINE__);
        }
        $this->BlockStatus = $blockStatus;
        return $this;
    }
    /**
     * Get HasBlockedImages value
     * @return bool|null
     */
    public function getHasBlockedImages()
    {
        return $this->HasBlockedImages;
    }
    /**
     * Set HasBlockedImages value
     * @param bool $hasBlockedImages
     * @return \Ews\StructType\EwsItemType
     */
    public function setHasBlockedImages($hasBlockedImages = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasBlockedImages) && !is_bool($hasBlockedImages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasBlockedImages, true), gettype($hasBlockedImages)), __LINE__);
        }
        $this->HasBlockedImages = $hasBlockedImages;
        return $this;
    }
    /**
     * Get TextBody value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getTextBody()
    {
        return $this->TextBody;
    }
    /**
     * Set TextBody value
     * @param \Ews\StructType\EwsBodyType $textBody
     * @return \Ews\StructType\EwsItemType
     */
    public function setTextBody(\Ews\StructType\EwsBodyType $textBody = null)
    {
        $this->TextBody = $textBody;
        return $this;
    }
    /**
     * Get IconIndex value
     * @return string|null
     */
    public function getIconIndex()
    {
        return $this->IconIndex;
    }
    /**
     * Set IconIndex value
     * @uses \Ews\EnumType\EwsIconIndexType::valueIsValid()
     * @uses \Ews\EnumType\EwsIconIndexType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iconIndex
     * @return \Ews\StructType\EwsItemType
     */
    public function setIconIndex($iconIndex = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIconIndexType::valueIsValid($iconIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsIconIndexType', is_array($iconIndex) ? implode(', ', $iconIndex) : var_export($iconIndex, true), implode(', ', \Ews\EnumType\EwsIconIndexType::getValidValues())), __LINE__);
        }
        $this->IconIndex = $iconIndex;
        return $this;
    }
    /**
     * Get SearchKey value
     * @return string|null
     */
    public function getSearchKey()
    {
        return $this->SearchKey;
    }
    /**
     * Set SearchKey value
     * @param string $searchKey
     * @return \Ews\StructType\EwsItemType
     */
    public function setSearchKey($searchKey = null)
    {
        // validation for constraint: string
        if (!is_null($searchKey) && !is_string($searchKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchKey, true), gettype($searchKey)), __LINE__);
        }
        $this->SearchKey = $searchKey;
        return $this;
    }
    /**
     * Get SortKey value
     * @return int|null
     */
    public function getSortKey()
    {
        return $this->SortKey;
    }
    /**
     * Set SortKey value
     * @param int $sortKey
     * @return \Ews\StructType\EwsItemType
     */
    public function setSortKey($sortKey = null)
    {
        // validation for constraint: int
        if (!is_null($sortKey) && !(is_int($sortKey) || ctype_digit($sortKey))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortKey, true), gettype($sortKey)), __LINE__);
        }
        $this->SortKey = $sortKey;
        return $this;
    }
    /**
     * Get Hashtags value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getHashtags()
    {
        return $this->Hashtags;
    }
    /**
     * Set Hashtags value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $hashtags
     * @return \Ews\StructType\EwsItemType
     */
    public function setHashtags(\Ews\ArrayType\EwsArrayOfStringsType $hashtags = null)
    {
        $this->Hashtags = $hashtags;
        return $this;
    }
    /**
     * Get Mentions value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getMentions()
    {
        return $this->Mentions;
    }
    /**
     * Set Mentions value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $mentions
     * @return \Ews\StructType\EwsItemType
     */
    public function setMentions(\Ews\ArrayType\EwsArrayOfRecipientsType $mentions = null)
    {
        $this->Mentions = $mentions;
        return $this;
    }
    /**
     * Get MentionedMe value
     * @return bool|null
     */
    public function getMentionedMe()
    {
        return $this->MentionedMe;
    }
    /**
     * Set MentionedMe value
     * @param bool $mentionedMe
     * @return \Ews\StructType\EwsItemType
     */
    public function setMentionedMe($mentionedMe = null)
    {
        // validation for constraint: boolean
        if (!is_null($mentionedMe) && !is_bool($mentionedMe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mentionedMe, true), gettype($mentionedMe)), __LINE__);
        }
        $this->MentionedMe = $mentionedMe;
        return $this;
    }
    /**
     * Get PendingSocialActivityTagIds value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getPendingSocialActivityTagIds()
    {
        return $this->PendingSocialActivityTagIds;
    }
    /**
     * Set PendingSocialActivityTagIds value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds
     * @return \Ews\StructType\EwsItemType
     */
    public function setPendingSocialActivityTagIds(\Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds = null)
    {
        $this->PendingSocialActivityTagIds = $pendingSocialActivityTagIds;
        return $this;
    }
}
