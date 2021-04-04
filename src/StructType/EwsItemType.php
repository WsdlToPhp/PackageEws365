<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsMimeContentType|null
     */
    protected ?\StructType\EwsMimeContentType $MimeContent = null;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The ParentFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $ParentFolderId = null;
    /**
     * The ItemClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemClass = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Sensitivity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sensitivity = null;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $Body = null;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAttachmentsType $Attachments = null;
    /**
     * The DateTimeReceived
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeReceived = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Categories = null;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Importance = null;
    /**
     * The InReplyTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InReplyTo = null;
    /**
     * The IsSubmitted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSubmitted = null;
    /**
     * The IsDraft
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDraft = null;
    /**
     * The IsFromMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFromMe = null;
    /**
     * The IsResend
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsResend = null;
    /**
     * The IsUnmodified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUnmodified = null;
    /**
     * The InternetMessageHeaders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $InternetMessageHeaders = null;
    /**
     * The DateTimeSent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeSent = null;
    /**
     * The DateTimeCreated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeCreated = null;
    /**
     * The ResponseObjects
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfResponseObjectsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfResponseObjectsType $ResponseObjects = null;
    /**
     * The ReminderDueBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderDueBy = null;
    /**
     * The ReminderIsSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReminderIsSet = null;
    /**
     * The ReminderNextTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderNextTime = null;
    /**
     * The ReminderMinutesBeforeStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - union: int
     * @var string|null
     */
    protected ?string $ReminderMinutesBeforeStart = null;
    /**
     * The DisplayCc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayCc = null;
    /**
     * The DisplayTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayTo = null;
    /**
     * The HasAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasAttachments = null;
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsExtendedPropertyType[]
     */
    protected array $ExtendedProperty = [];
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * The EffectiveRights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEffectiveRightsType|null
     */
    protected ?\StructType\EwsEffectiveRightsType $EffectiveRights = null;
    /**
     * The LastModifiedName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedName = null;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedTime = null;
    /**
     * The IsAssociated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAssociated = null;
    /**
     * The WebClientReadFormQueryString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WebClientReadFormQueryString = null;
    /**
     * The WebClientEditFormQueryString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WebClientEditFormQueryString = null;
    /**
     * The ConversationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ConversationId = null;
    /**
     * The UniqueBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $UniqueBody = null;
    /**
     * The Flag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFlagType|null
     */
    protected ?\StructType\EwsFlagType $Flag = null;
    /**
     * The StoreEntryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StoreEntryId = null;
    /**
     * The InstanceKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InstanceKey = null;
    /**
     * The NormalizedBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $NormalizedBody = null;
    /**
     * The EntityExtractionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEntityExtractionResultType|null
     */
    protected ?\StructType\EwsEntityExtractionResultType $EntityExtractionResult = null;
    /**
     * The PolicyTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRetentionTagType|null
     */
    protected ?\StructType\EwsRetentionTagType $PolicyTag = null;
    /**
     * The ArchiveTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRetentionTagType|null
     */
    protected ?\StructType\EwsRetentionTagType $ArchiveTag = null;
    /**
     * The RetentionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RetentionDate = null;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Preview = null;
    /**
     * The RightsManagementLicenseData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRightsManagementLicenseDataType|null
     */
    protected ?\StructType\EwsRightsManagementLicenseDataType $RightsManagementLicenseData = null;
    /**
     * The PredictedActionReasons
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $PredictedActionReasons = null;
    /**
     * The IsClutter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsClutter = null;
    /**
     * The BlockStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BlockStatus = null;
    /**
     * The HasBlockedImages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasBlockedImages = null;
    /**
     * The TextBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $TextBody = null;
    /**
     * The IconIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IconIndex = null;
    /**
     * The SearchKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchKey = null;
    /**
     * The SortKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SortKey = null;
    /**
     * The Hashtags
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Hashtags = null;
    /**
     * The Mentions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $Mentions = null;
    /**
     * The MentionedMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MentionedMe = null;
    /**
     * The PendingSocialActivityTagIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $PendingSocialActivityTagIds = null;
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
     * @param \StructType\EwsMimeContentType $mimeContent
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @param string $itemClass
     * @param string $subject
     * @param string $sensitivity
     * @param \StructType\EwsBodyType $body
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param string $dateTimeReceived
     * @param int $size
     * @param \ArrayType\EwsArrayOfStringsType $categories
     * @param string $importance
     * @param string $inReplyTo
     * @param bool $isSubmitted
     * @param bool $isDraft
     * @param bool $isFromMe
     * @param bool $isResend
     * @param bool $isUnmodified
     * @param \ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders
     * @param string $dateTimeSent
     * @param string $dateTimeCreated
     * @param \StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects
     * @param string $reminderDueBy
     * @param bool $reminderIsSet
     * @param string $reminderNextTime
     * @param string $reminderMinutesBeforeStart
     * @param string $displayCc
     * @param string $displayTo
     * @param bool $hasAttachments
     * @param \StructType\EwsExtendedPropertyType[] $extendedProperty
     * @param string $culture
     * @param \StructType\EwsEffectiveRightsType $effectiveRights
     * @param string $lastModifiedName
     * @param string $lastModifiedTime
     * @param bool $isAssociated
     * @param string $webClientReadFormQueryString
     * @param string $webClientEditFormQueryString
     * @param \StructType\EwsItemIdType $conversationId
     * @param \StructType\EwsBodyType $uniqueBody
     * @param \StructType\EwsFlagType $flag
     * @param string $storeEntryId
     * @param string $instanceKey
     * @param \StructType\EwsBodyType $normalizedBody
     * @param \StructType\EwsEntityExtractionResultType $entityExtractionResult
     * @param \StructType\EwsRetentionTagType $policyTag
     * @param \StructType\EwsRetentionTagType $archiveTag
     * @param string $retentionDate
     * @param string $preview
     * @param \StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData
     * @param \ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons
     * @param bool $isClutter
     * @param bool $blockStatus
     * @param bool $hasBlockedImages
     * @param \StructType\EwsBodyType $textBody
     * @param string $iconIndex
     * @param string $searchKey
     * @param int $sortKey
     * @param \ArrayType\EwsArrayOfStringsType $hashtags
     * @param \ArrayType\EwsArrayOfRecipientsType $mentions
     * @param bool $mentionedMe
     * @param \ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds
     */
    public function __construct(?\StructType\EwsMimeContentType $mimeContent = null, ?\StructType\EwsItemIdType $itemId = null, ?\StructType\EwsFolderIdType $parentFolderId = null, ?string $itemClass = null, ?string $subject = null, ?string $sensitivity = null, ?\StructType\EwsBodyType $body = null, ?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, ?string $dateTimeReceived = null, ?int $size = null, ?\ArrayType\EwsArrayOfStringsType $categories = null, ?string $importance = null, ?string $inReplyTo = null, ?bool $isSubmitted = null, ?bool $isDraft = null, ?bool $isFromMe = null, ?bool $isResend = null, ?bool $isUnmodified = null, ?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null, ?string $dateTimeSent = null, ?string $dateTimeCreated = null, ?\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects = null, ?string $reminderDueBy = null, ?bool $reminderIsSet = null, ?string $reminderNextTime = null, ?string $reminderMinutesBeforeStart = null, ?string $displayCc = null, ?string $displayTo = null, ?bool $hasAttachments = null, array $extendedProperty = [], ?string $culture = null, ?\StructType\EwsEffectiveRightsType $effectiveRights = null, ?string $lastModifiedName = null, ?string $lastModifiedTime = null, ?bool $isAssociated = null, ?string $webClientReadFormQueryString = null, ?string $webClientEditFormQueryString = null, ?\StructType\EwsItemIdType $conversationId = null, ?\StructType\EwsBodyType $uniqueBody = null, ?\StructType\EwsFlagType $flag = null, ?string $storeEntryId = null, ?string $instanceKey = null, ?\StructType\EwsBodyType $normalizedBody = null, ?\StructType\EwsEntityExtractionResultType $entityExtractionResult = null, ?\StructType\EwsRetentionTagType $policyTag = null, ?\StructType\EwsRetentionTagType $archiveTag = null, ?string $retentionDate = null, ?string $preview = null, ?\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData = null, ?\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons = null, ?bool $isClutter = null, ?bool $blockStatus = null, ?bool $hasBlockedImages = null, ?\StructType\EwsBodyType $textBody = null, ?string $iconIndex = null, ?string $searchKey = null, ?int $sortKey = null, ?\ArrayType\EwsArrayOfStringsType $hashtags = null, ?\ArrayType\EwsArrayOfRecipientsType $mentions = null, ?bool $mentionedMe = null, ?\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds = null)
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
     * @return \StructType\EwsMimeContentType|null
     */
    public function getMimeContent(): ?\StructType\EwsMimeContentType
    {
        return $this->MimeContent;
    }
    /**
     * Set MimeContent value
     * @param \StructType\EwsMimeContentType $mimeContent
     * @return \StructType\EwsItemType
     */
    public function setMimeContent(?\StructType\EwsMimeContentType $mimeContent = null): self
    {
        $this->MimeContent = $mimeContent;

        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsItemType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;

        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getParentFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @return \StructType\EwsItemType
     */
    public function setParentFolderId(?\StructType\EwsFolderIdType $parentFolderId = null): self
    {
        $this->ParentFolderId = $parentFolderId;

        return $this;
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass(): ?string
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \StructType\EwsItemType
     */
    public function setItemClass(?string $itemClass = null): self
    {
        // validation for constraint: string
        if (!is_null($itemClass) && !is_string($itemClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemClass, true), gettype($itemClass)), __LINE__);
        }
        $this->ItemClass = $itemClass;

        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsItemType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;

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
     * @return \StructType\EwsItemType
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
     * Get Body value
     * @return \StructType\EwsBodyType|null
     */
    public function getBody(): ?\StructType\EwsBodyType
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \StructType\EwsBodyType $body
     * @return \StructType\EwsItemType
     */
    public function setBody(?\StructType\EwsBodyType $body = null): self
    {
        $this->Body = $body;

        return $this;
    }
    /**
     * Get Attachments value
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments(): ?\StructType\EwsNonEmptyArrayOfAttachmentsType
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \StructType\EwsItemType
     */
    public function setAttachments(?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null): self
    {
        $this->Attachments = $attachments;

        return $this;
    }
    /**
     * Get DateTimeReceived value
     * @return string|null
     */
    public function getDateTimeReceived(): ?string
    {
        return $this->DateTimeReceived;
    }
    /**
     * Set DateTimeReceived value
     * @param string $dateTimeReceived
     * @return \StructType\EwsItemType
     */
    public function setDateTimeReceived(?string $dateTimeReceived = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeReceived) && !is_string($dateTimeReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeReceived, true), gettype($dateTimeReceived)), __LINE__);
        }
        $this->DateTimeReceived = $dateTimeReceived;

        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\EwsItemType
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;

        return $this;
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
     * @return \StructType\EwsItemType
     */
    public function setCategories(?\ArrayType\EwsArrayOfStringsType $categories = null): self
    {
        $this->Categories = $categories;

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
     * @return \StructType\EwsItemType
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
     * Get InReplyTo value
     * @return string|null
     */
    public function getInReplyTo(): ?string
    {
        return $this->InReplyTo;
    }
    /**
     * Set InReplyTo value
     * @param string $inReplyTo
     * @return \StructType\EwsItemType
     */
    public function setInReplyTo(?string $inReplyTo = null): self
    {
        // validation for constraint: string
        if (!is_null($inReplyTo) && !is_string($inReplyTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inReplyTo, true), gettype($inReplyTo)), __LINE__);
        }
        $this->InReplyTo = $inReplyTo;

        return $this;
    }
    /**
     * Get IsSubmitted value
     * @return bool|null
     */
    public function getIsSubmitted(): ?bool
    {
        return $this->IsSubmitted;
    }
    /**
     * Set IsSubmitted value
     * @param bool $isSubmitted
     * @return \StructType\EwsItemType
     */
    public function setIsSubmitted(?bool $isSubmitted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSubmitted) && !is_bool($isSubmitted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubmitted, true), gettype($isSubmitted)), __LINE__);
        }
        $this->IsSubmitted = $isSubmitted;

        return $this;
    }
    /**
     * Get IsDraft value
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->IsDraft;
    }
    /**
     * Set IsDraft value
     * @param bool $isDraft
     * @return \StructType\EwsItemType
     */
    public function setIsDraft(?bool $isDraft = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->IsDraft = $isDraft;

        return $this;
    }
    /**
     * Get IsFromMe value
     * @return bool|null
     */
    public function getIsFromMe(): ?bool
    {
        return $this->IsFromMe;
    }
    /**
     * Set IsFromMe value
     * @param bool $isFromMe
     * @return \StructType\EwsItemType
     */
    public function setIsFromMe(?bool $isFromMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFromMe) && !is_bool($isFromMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFromMe, true), gettype($isFromMe)), __LINE__);
        }
        $this->IsFromMe = $isFromMe;

        return $this;
    }
    /**
     * Get IsResend value
     * @return bool|null
     */
    public function getIsResend(): ?bool
    {
        return $this->IsResend;
    }
    /**
     * Set IsResend value
     * @param bool $isResend
     * @return \StructType\EwsItemType
     */
    public function setIsResend(?bool $isResend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isResend) && !is_bool($isResend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isResend, true), gettype($isResend)), __LINE__);
        }
        $this->IsResend = $isResend;

        return $this;
    }
    /**
     * Get IsUnmodified value
     * @return bool|null
     */
    public function getIsUnmodified(): ?bool
    {
        return $this->IsUnmodified;
    }
    /**
     * Set IsUnmodified value
     * @param bool $isUnmodified
     * @return \StructType\EwsItemType
     */
    public function setIsUnmodified(?bool $isUnmodified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnmodified) && !is_bool($isUnmodified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnmodified, true), gettype($isUnmodified)), __LINE__);
        }
        $this->IsUnmodified = $isUnmodified;

        return $this;
    }
    /**
     * Get InternetMessageHeaders value
     * @return \ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    public function getInternetMessageHeaders(): ?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
    {
        return $this->InternetMessageHeaders;
    }
    /**
     * Set InternetMessageHeaders value
     * @param \ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders
     * @return \StructType\EwsItemType
     */
    public function setInternetMessageHeaders(?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null): self
    {
        $this->InternetMessageHeaders = $internetMessageHeaders;

        return $this;
    }
    /**
     * Get DateTimeSent value
     * @return string|null
     */
    public function getDateTimeSent(): ?string
    {
        return $this->DateTimeSent;
    }
    /**
     * Set DateTimeSent value
     * @param string $dateTimeSent
     * @return \StructType\EwsItemType
     */
    public function setDateTimeSent(?string $dateTimeSent = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeSent) && !is_string($dateTimeSent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeSent, true), gettype($dateTimeSent)), __LINE__);
        }
        $this->DateTimeSent = $dateTimeSent;

        return $this;
    }
    /**
     * Get DateTimeCreated value
     * @return string|null
     */
    public function getDateTimeCreated(): ?string
    {
        return $this->DateTimeCreated;
    }
    /**
     * Set DateTimeCreated value
     * @param string $dateTimeCreated
     * @return \StructType\EwsItemType
     */
    public function setDateTimeCreated(?string $dateTimeCreated = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeCreated) && !is_string($dateTimeCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeCreated, true), gettype($dateTimeCreated)), __LINE__);
        }
        $this->DateTimeCreated = $dateTimeCreated;

        return $this;
    }
    /**
     * Get ResponseObjects value
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType|null
     */
    public function getResponseObjects(): ?\StructType\EwsNonEmptyArrayOfResponseObjectsType
    {
        return $this->ResponseObjects;
    }
    /**
     * Set ResponseObjects value
     * @param \StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects
     * @return \StructType\EwsItemType
     */
    public function setResponseObjects(?\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects = null): self
    {
        $this->ResponseObjects = $responseObjects;

        return $this;
    }
    /**
     * Get ReminderDueBy value
     * @return string|null
     */
    public function getReminderDueBy(): ?string
    {
        return $this->ReminderDueBy;
    }
    /**
     * Set ReminderDueBy value
     * @param string $reminderDueBy
     * @return \StructType\EwsItemType
     */
    public function setReminderDueBy(?string $reminderDueBy = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderDueBy) && !is_string($reminderDueBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderDueBy, true), gettype($reminderDueBy)), __LINE__);
        }
        $this->ReminderDueBy = $reminderDueBy;

        return $this;
    }
    /**
     * Get ReminderIsSet value
     * @return bool|null
     */
    public function getReminderIsSet(): ?bool
    {
        return $this->ReminderIsSet;
    }
    /**
     * Set ReminderIsSet value
     * @param bool $reminderIsSet
     * @return \StructType\EwsItemType
     */
    public function setReminderIsSet(?bool $reminderIsSet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reminderIsSet) && !is_bool($reminderIsSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reminderIsSet, true), gettype($reminderIsSet)), __LINE__);
        }
        $this->ReminderIsSet = $reminderIsSet;

        return $this;
    }
    /**
     * Get ReminderNextTime value
     * @return string|null
     */
    public function getReminderNextTime(): ?string
    {
        return $this->ReminderNextTime;
    }
    /**
     * Set ReminderNextTime value
     * @param string $reminderNextTime
     * @return \StructType\EwsItemType
     */
    public function setReminderNextTime(?string $reminderNextTime = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderNextTime) && !is_string($reminderNextTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderNextTime, true), gettype($reminderNextTime)), __LINE__);
        }
        $this->ReminderNextTime = $reminderNextTime;

        return $this;
    }
    /**
     * Get ReminderMinutesBeforeStart value
     * @return string|null
     */
    public function getReminderMinutesBeforeStart(): ?string
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
    public static function validateReminderMinutesBeforeStartForUnionConstraintsFromSetReminderMinutesBeforeStart($value): string
    {
        $message = '';
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            $exception0 = new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (isset($exception0)) {
            $message = sprintf("The value %s does not match any of the union rules: int. See following errors:\n%s", var_export($value, true), implode("\n", array_map(function(InvalidArgumentException $e) {
                return sprintf(' - %s', $e->getMessage());
            }, [$exception0])));
        }
        unset($exception0);

        return $message;
    }
    /**
     * Set ReminderMinutesBeforeStart value
     * @param string $reminderMinutesBeforeStart
     * @return \StructType\EwsItemType
     */
    public function setReminderMinutesBeforeStart(?string $reminderMinutesBeforeStart = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderMinutesBeforeStart) && !is_string($reminderMinutesBeforeStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderMinutesBeforeStart, true), gettype($reminderMinutesBeforeStart)), __LINE__);
        }
        // validation for constraint: union(int)
        if ('' !== ($reminderMinutesBeforeStartUnionErrorMessage = self::validateReminderMinutesBeforeStartForUnionConstraintsFromSetReminderMinutesBeforeStart($reminderMinutesBeforeStart))) {
            throw new InvalidArgumentException($reminderMinutesBeforeStartUnionErrorMessage, __LINE__);
        }
        $this->ReminderMinutesBeforeStart = $reminderMinutesBeforeStart;

        return $this;
    }
    /**
     * Get DisplayCc value
     * @return string|null
     */
    public function getDisplayCc(): ?string
    {
        return $this->DisplayCc;
    }
    /**
     * Set DisplayCc value
     * @param string $displayCc
     * @return \StructType\EwsItemType
     */
    public function setDisplayCc(?string $displayCc = null): self
    {
        // validation for constraint: string
        if (!is_null($displayCc) && !is_string($displayCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayCc, true), gettype($displayCc)), __LINE__);
        }
        $this->DisplayCc = $displayCc;

        return $this;
    }
    /**
     * Get DisplayTo value
     * @return string|null
     */
    public function getDisplayTo(): ?string
    {
        return $this->DisplayTo;
    }
    /**
     * Set DisplayTo value
     * @param string $displayTo
     * @return \StructType\EwsItemType
     */
    public function setDisplayTo(?string $displayTo = null): self
    {
        // validation for constraint: string
        if (!is_null($displayTo) && !is_string($displayTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayTo, true), gettype($displayTo)), __LINE__);
        }
        $this->DisplayTo = $displayTo;

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
     * @return \StructType\EwsItemType
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
     * Get ExtendedProperty value
     * @return \StructType\EwsExtendedPropertyType[]
     */
    public function getExtendedProperty(): array
    {
        return $this->ExtendedProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemTypeExtendedPropertyItem) {
            // validation for constraint: itemType
            if (!$itemTypeExtendedPropertyItem instanceof \StructType\EwsExtendedPropertyType) {
                $invalidValues[] = is_object($itemTypeExtendedPropertyItem) ? get_class($itemTypeExtendedPropertyItem) : sprintf('%s(%s)', gettype($itemTypeExtendedPropertyItem), var_export($itemTypeExtendedPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedProperty property can only contain items of type \StructType\EwsExtendedPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }
    /**
     * Set ExtendedProperty value
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyType[] $extendedProperty
     * @return \StructType\EwsItemType
     */
    public function setExtendedProperty(array $extendedProperty = []): self
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyArrayErrorMessage = self::validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new InvalidArgumentException($extendedPropertyArrayErrorMessage, __LINE__);
        }
        $this->ExtendedProperty = $extendedProperty;

        return $this;
    }
    /**
     * Add item to ExtendedProperty value
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyType $item
     * @return \StructType\EwsItemType
     */
    public function addToExtendedProperty(\StructType\EwsExtendedPropertyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsExtendedPropertyType) {
            throw new InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of type \StructType\EwsExtendedPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExtendedProperty[] = $item;

        return $this;
    }
    /**
     * Get Culture value
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \StructType\EwsItemType
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->Culture = $culture;

        return $this;
    }
    /**
     * Get EffectiveRights value
     * @return \StructType\EwsEffectiveRightsType|null
     */
    public function getEffectiveRights(): ?\StructType\EwsEffectiveRightsType
    {
        return $this->EffectiveRights;
    }
    /**
     * Set EffectiveRights value
     * @param \StructType\EwsEffectiveRightsType $effectiveRights
     * @return \StructType\EwsItemType
     */
    public function setEffectiveRights(?\StructType\EwsEffectiveRightsType $effectiveRights = null): self
    {
        $this->EffectiveRights = $effectiveRights;

        return $this;
    }
    /**
     * Get LastModifiedName value
     * @return string|null
     */
    public function getLastModifiedName(): ?string
    {
        return $this->LastModifiedName;
    }
    /**
     * Set LastModifiedName value
     * @param string $lastModifiedName
     * @return \StructType\EwsItemType
     */
    public function setLastModifiedName(?string $lastModifiedName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedName) && !is_string($lastModifiedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedName, true), gettype($lastModifiedName)), __LINE__);
        }
        $this->LastModifiedName = $lastModifiedName;

        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime(): ?string
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \StructType\EwsItemType
     */
    public function setLastModifiedTime(?string $lastModifiedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;

        return $this;
    }
    /**
     * Get IsAssociated value
     * @return bool|null
     */
    public function getIsAssociated(): ?bool
    {
        return $this->IsAssociated;
    }
    /**
     * Set IsAssociated value
     * @param bool $isAssociated
     * @return \StructType\EwsItemType
     */
    public function setIsAssociated(?bool $isAssociated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAssociated) && !is_bool($isAssociated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssociated, true), gettype($isAssociated)), __LINE__);
        }
        $this->IsAssociated = $isAssociated;

        return $this;
    }
    /**
     * Get WebClientReadFormQueryString value
     * @return string|null
     */
    public function getWebClientReadFormQueryString(): ?string
    {
        return $this->WebClientReadFormQueryString;
    }
    /**
     * Set WebClientReadFormQueryString value
     * @param string $webClientReadFormQueryString
     * @return \StructType\EwsItemType
     */
    public function setWebClientReadFormQueryString(?string $webClientReadFormQueryString = null): self
    {
        // validation for constraint: string
        if (!is_null($webClientReadFormQueryString) && !is_string($webClientReadFormQueryString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webClientReadFormQueryString, true), gettype($webClientReadFormQueryString)), __LINE__);
        }
        $this->WebClientReadFormQueryString = $webClientReadFormQueryString;

        return $this;
    }
    /**
     * Get WebClientEditFormQueryString value
     * @return string|null
     */
    public function getWebClientEditFormQueryString(): ?string
    {
        return $this->WebClientEditFormQueryString;
    }
    /**
     * Set WebClientEditFormQueryString value
     * @param string $webClientEditFormQueryString
     * @return \StructType\EwsItemType
     */
    public function setWebClientEditFormQueryString(?string $webClientEditFormQueryString = null): self
    {
        // validation for constraint: string
        if (!is_null($webClientEditFormQueryString) && !is_string($webClientEditFormQueryString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webClientEditFormQueryString, true), gettype($webClientEditFormQueryString)), __LINE__);
        }
        $this->WebClientEditFormQueryString = $webClientEditFormQueryString;

        return $this;
    }
    /**
     * Get ConversationId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getConversationId(): ?\StructType\EwsItemIdType
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \StructType\EwsItemIdType $conversationId
     * @return \StructType\EwsItemType
     */
    public function setConversationId(?\StructType\EwsItemIdType $conversationId = null): self
    {
        $this->ConversationId = $conversationId;

        return $this;
    }
    /**
     * Get UniqueBody value
     * @return \StructType\EwsBodyType|null
     */
    public function getUniqueBody(): ?\StructType\EwsBodyType
    {
        return $this->UniqueBody;
    }
    /**
     * Set UniqueBody value
     * @param \StructType\EwsBodyType $uniqueBody
     * @return \StructType\EwsItemType
     */
    public function setUniqueBody(?\StructType\EwsBodyType $uniqueBody = null): self
    {
        $this->UniqueBody = $uniqueBody;

        return $this;
    }
    /**
     * Get Flag value
     * @return \StructType\EwsFlagType|null
     */
    public function getFlag(): ?\StructType\EwsFlagType
    {
        return $this->Flag;
    }
    /**
     * Set Flag value
     * @param \StructType\EwsFlagType $flag
     * @return \StructType\EwsItemType
     */
    public function setFlag(?\StructType\EwsFlagType $flag = null): self
    {
        $this->Flag = $flag;

        return $this;
    }
    /**
     * Get StoreEntryId value
     * @return string|null
     */
    public function getStoreEntryId(): ?string
    {
        return $this->StoreEntryId;
    }
    /**
     * Set StoreEntryId value
     * @param string $storeEntryId
     * @return \StructType\EwsItemType
     */
    public function setStoreEntryId(?string $storeEntryId = null): self
    {
        // validation for constraint: string
        if (!is_null($storeEntryId) && !is_string($storeEntryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeEntryId, true), gettype($storeEntryId)), __LINE__);
        }
        $this->StoreEntryId = $storeEntryId;

        return $this;
    }
    /**
     * Get InstanceKey value
     * @return string|null
     */
    public function getInstanceKey(): ?string
    {
        return $this->InstanceKey;
    }
    /**
     * Set InstanceKey value
     * @param string $instanceKey
     * @return \StructType\EwsItemType
     */
    public function setInstanceKey(?string $instanceKey = null): self
    {
        // validation for constraint: string
        if (!is_null($instanceKey) && !is_string($instanceKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instanceKey, true), gettype($instanceKey)), __LINE__);
        }
        $this->InstanceKey = $instanceKey;

        return $this;
    }
    /**
     * Get NormalizedBody value
     * @return \StructType\EwsBodyType|null
     */
    public function getNormalizedBody(): ?\StructType\EwsBodyType
    {
        return $this->NormalizedBody;
    }
    /**
     * Set NormalizedBody value
     * @param \StructType\EwsBodyType $normalizedBody
     * @return \StructType\EwsItemType
     */
    public function setNormalizedBody(?\StructType\EwsBodyType $normalizedBody = null): self
    {
        $this->NormalizedBody = $normalizedBody;

        return $this;
    }
    /**
     * Get EntityExtractionResult value
     * @return \StructType\EwsEntityExtractionResultType|null
     */
    public function getEntityExtractionResult(): ?\StructType\EwsEntityExtractionResultType
    {
        return $this->EntityExtractionResult;
    }
    /**
     * Set EntityExtractionResult value
     * @param \StructType\EwsEntityExtractionResultType $entityExtractionResult
     * @return \StructType\EwsItemType
     */
    public function setEntityExtractionResult(?\StructType\EwsEntityExtractionResultType $entityExtractionResult = null): self
    {
        $this->EntityExtractionResult = $entityExtractionResult;

        return $this;
    }
    /**
     * Get PolicyTag value
     * @return \StructType\EwsRetentionTagType|null
     */
    public function getPolicyTag(): ?\StructType\EwsRetentionTagType
    {
        return $this->PolicyTag;
    }
    /**
     * Set PolicyTag value
     * @param \StructType\EwsRetentionTagType $policyTag
     * @return \StructType\EwsItemType
     */
    public function setPolicyTag(?\StructType\EwsRetentionTagType $policyTag = null): self
    {
        $this->PolicyTag = $policyTag;

        return $this;
    }
    /**
     * Get ArchiveTag value
     * @return \StructType\EwsRetentionTagType|null
     */
    public function getArchiveTag(): ?\StructType\EwsRetentionTagType
    {
        return $this->ArchiveTag;
    }
    /**
     * Set ArchiveTag value
     * @param \StructType\EwsRetentionTagType $archiveTag
     * @return \StructType\EwsItemType
     */
    public function setArchiveTag(?\StructType\EwsRetentionTagType $archiveTag = null): self
    {
        $this->ArchiveTag = $archiveTag;

        return $this;
    }
    /**
     * Get RetentionDate value
     * @return string|null
     */
    public function getRetentionDate(): ?string
    {
        return $this->RetentionDate;
    }
    /**
     * Set RetentionDate value
     * @param string $retentionDate
     * @return \StructType\EwsItemType
     */
    public function setRetentionDate(?string $retentionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($retentionDate) && !is_string($retentionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retentionDate, true), gettype($retentionDate)), __LINE__);
        }
        $this->RetentionDate = $retentionDate;

        return $this;
    }
    /**
     * Get Preview value
     * @return string|null
     */
    public function getPreview(): ?string
    {
        return $this->Preview;
    }
    /**
     * Set Preview value
     * @param string $preview
     * @return \StructType\EwsItemType
     */
    public function setPreview(?string $preview = null): self
    {
        // validation for constraint: string
        if (!is_null($preview) && !is_string($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->Preview = $preview;

        return $this;
    }
    /**
     * Get RightsManagementLicenseData value
     * @return \StructType\EwsRightsManagementLicenseDataType|null
     */
    public function getRightsManagementLicenseData(): ?\StructType\EwsRightsManagementLicenseDataType
    {
        return $this->RightsManagementLicenseData;
    }
    /**
     * Set RightsManagementLicenseData value
     * @param \StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData
     * @return \StructType\EwsItemType
     */
    public function setRightsManagementLicenseData(?\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData = null): self
    {
        $this->RightsManagementLicenseData = $rightsManagementLicenseData;

        return $this;
    }
    /**
     * Get PredictedActionReasons value
     * @return \ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType|null
     */
    public function getPredictedActionReasons(): ?\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
    {
        return $this->PredictedActionReasons;
    }
    /**
     * Set PredictedActionReasons value
     * @param \ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons
     * @return \StructType\EwsItemType
     */
    public function setPredictedActionReasons(?\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons = null): self
    {
        $this->PredictedActionReasons = $predictedActionReasons;

        return $this;
    }
    /**
     * Get IsClutter value
     * @return bool|null
     */
    public function getIsClutter(): ?bool
    {
        return $this->IsClutter;
    }
    /**
     * Set IsClutter value
     * @param bool $isClutter
     * @return \StructType\EwsItemType
     */
    public function setIsClutter(?bool $isClutter = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isClutter) && !is_bool($isClutter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isClutter, true), gettype($isClutter)), __LINE__);
        }
        $this->IsClutter = $isClutter;

        return $this;
    }
    /**
     * Get BlockStatus value
     * @return bool|null
     */
    public function getBlockStatus(): ?bool
    {
        return $this->BlockStatus;
    }
    /**
     * Set BlockStatus value
     * @param bool $blockStatus
     * @return \StructType\EwsItemType
     */
    public function setBlockStatus(?bool $blockStatus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($blockStatus) && !is_bool($blockStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blockStatus, true), gettype($blockStatus)), __LINE__);
        }
        $this->BlockStatus = $blockStatus;

        return $this;
    }
    /**
     * Get HasBlockedImages value
     * @return bool|null
     */
    public function getHasBlockedImages(): ?bool
    {
        return $this->HasBlockedImages;
    }
    /**
     * Set HasBlockedImages value
     * @param bool $hasBlockedImages
     * @return \StructType\EwsItemType
     */
    public function setHasBlockedImages(?bool $hasBlockedImages = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasBlockedImages) && !is_bool($hasBlockedImages)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasBlockedImages, true), gettype($hasBlockedImages)), __LINE__);
        }
        $this->HasBlockedImages = $hasBlockedImages;

        return $this;
    }
    /**
     * Get TextBody value
     * @return \StructType\EwsBodyType|null
     */
    public function getTextBody(): ?\StructType\EwsBodyType
    {
        return $this->TextBody;
    }
    /**
     * Set TextBody value
     * @param \StructType\EwsBodyType $textBody
     * @return \StructType\EwsItemType
     */
    public function setTextBody(?\StructType\EwsBodyType $textBody = null): self
    {
        $this->TextBody = $textBody;

        return $this;
    }
    /**
     * Get IconIndex value
     * @return string|null
     */
    public function getIconIndex(): ?string
    {
        return $this->IconIndex;
    }
    /**
     * Set IconIndex value
     * @uses \EnumType\EwsIconIndexType::valueIsValid()
     * @uses \EnumType\EwsIconIndexType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $iconIndex
     * @return \StructType\EwsItemType
     */
    public function setIconIndex(?string $iconIndex = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsIconIndexType::valueIsValid($iconIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsIconIndexType', is_array($iconIndex) ? implode(', ', $iconIndex) : var_export($iconIndex, true), implode(', ', \EnumType\EwsIconIndexType::getValidValues())), __LINE__);
        }
        $this->IconIndex = $iconIndex;

        return $this;
    }
    /**
     * Get SearchKey value
     * @return string|null
     */
    public function getSearchKey(): ?string
    {
        return $this->SearchKey;
    }
    /**
     * Set SearchKey value
     * @param string $searchKey
     * @return \StructType\EwsItemType
     */
    public function setSearchKey(?string $searchKey = null): self
    {
        // validation for constraint: string
        if (!is_null($searchKey) && !is_string($searchKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchKey, true), gettype($searchKey)), __LINE__);
        }
        $this->SearchKey = $searchKey;

        return $this;
    }
    /**
     * Get SortKey value
     * @return int|null
     */
    public function getSortKey(): ?int
    {
        return $this->SortKey;
    }
    /**
     * Set SortKey value
     * @param int $sortKey
     * @return \StructType\EwsItemType
     */
    public function setSortKey(?int $sortKey = null): self
    {
        // validation for constraint: int
        if (!is_null($sortKey) && !(is_int($sortKey) || ctype_digit($sortKey))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortKey, true), gettype($sortKey)), __LINE__);
        }
        $this->SortKey = $sortKey;

        return $this;
    }
    /**
     * Get Hashtags value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getHashtags(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Hashtags;
    }
    /**
     * Set Hashtags value
     * @param \ArrayType\EwsArrayOfStringsType $hashtags
     * @return \StructType\EwsItemType
     */
    public function setHashtags(?\ArrayType\EwsArrayOfStringsType $hashtags = null): self
    {
        $this->Hashtags = $hashtags;

        return $this;
    }
    /**
     * Get Mentions value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getMentions(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->Mentions;
    }
    /**
     * Set Mentions value
     * @param \ArrayType\EwsArrayOfRecipientsType $mentions
     * @return \StructType\EwsItemType
     */
    public function setMentions(?\ArrayType\EwsArrayOfRecipientsType $mentions = null): self
    {
        $this->Mentions = $mentions;

        return $this;
    }
    /**
     * Get MentionedMe value
     * @return bool|null
     */
    public function getMentionedMe(): ?bool
    {
        return $this->MentionedMe;
    }
    /**
     * Set MentionedMe value
     * @param bool $mentionedMe
     * @return \StructType\EwsItemType
     */
    public function setMentionedMe(?bool $mentionedMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mentionedMe) && !is_bool($mentionedMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mentionedMe, true), gettype($mentionedMe)), __LINE__);
        }
        $this->MentionedMe = $mentionedMe;

        return $this;
    }
    /**
     * Get PendingSocialActivityTagIds value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getPendingSocialActivityTagIds(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->PendingSocialActivityTagIds;
    }
    /**
     * Set PendingSocialActivityTagIds value
     * @param \ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds
     * @return \StructType\EwsItemType
     */
    public function setPendingSocialActivityTagIds(?\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds = null): self
    {
        $this->PendingSocialActivityTagIds = $pendingSocialActivityTagIds;

        return $this;
    }
}
