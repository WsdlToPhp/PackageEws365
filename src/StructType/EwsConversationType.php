<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationType extends AbstractStructBase
{
    /**
     * The ConversationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ConversationId = null;
    /**
     * The ConversationTopic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConversationTopic = null;
    /**
     * The UniqueRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $UniqueRecipients = null;
    /**
     * The GlobalUniqueRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $GlobalUniqueRecipients = null;
    /**
     * The UniqueUnreadSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $UniqueUnreadSenders = null;
    /**
     * The GlobalUniqueUnreadSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $GlobalUniqueUnreadSenders = null;
    /**
     * The UniqueSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $UniqueSenders = null;
    /**
     * The GlobalUniqueSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $GlobalUniqueSenders = null;
    /**
     * The LastDeliveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastDeliveryTime = null;
    /**
     * The GlobalLastDeliveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GlobalLastDeliveryTime = null;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Categories = null;
    /**
     * The GlobalCategories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $GlobalCategories = null;
    /**
     * The FlagStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FlagStatus = null;
    /**
     * The GlobalFlagStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GlobalFlagStatus = null;
    /**
     * The HasAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasAttachments = null;
    /**
     * The GlobalHasAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GlobalHasAttachments = null;
    /**
     * The MessageCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MessageCount = null;
    /**
     * The GlobalMessageCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GlobalMessageCount = null;
    /**
     * The UnreadCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UnreadCount = null;
    /**
     * The GlobalUnreadCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GlobalUnreadCount = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The GlobalSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GlobalSize = null;
    /**
     * The ItemClasses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfItemClassType|null
     */
    protected ?\ArrayType\EwsArrayOfItemClassType $ItemClasses = null;
    /**
     * The GlobalItemClasses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfItemClassType|null
     */
    protected ?\ArrayType\EwsArrayOfItemClassType $GlobalItemClasses = null;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Importance = null;
    /**
     * The GlobalImportance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GlobalImportance = null;
    /**
     * The ItemIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds = null;
    /**
     * The GlobalItemIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $GlobalItemIds = null;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedTime = null;
    /**
     * The InstanceKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InstanceKey = null;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Preview = null;
    /**
     * The MailboxScope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxScope = null;
    /**
     * The IconIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IconIndex = null;
    /**
     * The GlobalIconIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GlobalIconIndex = null;
    /**
     * The DraftItemIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $DraftItemIds = null;
    /**
     * The HasIrm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasIrm = null;
    /**
     * The GlobalHasIrm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GlobalHasIrm = null;
    /**
     * The SortKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SortKey = null;
    /**
     * The MentionedMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MentionedMe = null;
    /**
     * The GlobalMentionedMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GlobalMentionedMe = null;
    /**
     * Constructor method for ConversationType
     * @uses EwsConversationType::setConversationId()
     * @uses EwsConversationType::setConversationTopic()
     * @uses EwsConversationType::setUniqueRecipients()
     * @uses EwsConversationType::setGlobalUniqueRecipients()
     * @uses EwsConversationType::setUniqueUnreadSenders()
     * @uses EwsConversationType::setGlobalUniqueUnreadSenders()
     * @uses EwsConversationType::setUniqueSenders()
     * @uses EwsConversationType::setGlobalUniqueSenders()
     * @uses EwsConversationType::setLastDeliveryTime()
     * @uses EwsConversationType::setGlobalLastDeliveryTime()
     * @uses EwsConversationType::setCategories()
     * @uses EwsConversationType::setGlobalCategories()
     * @uses EwsConversationType::setFlagStatus()
     * @uses EwsConversationType::setGlobalFlagStatus()
     * @uses EwsConversationType::setHasAttachments()
     * @uses EwsConversationType::setGlobalHasAttachments()
     * @uses EwsConversationType::setMessageCount()
     * @uses EwsConversationType::setGlobalMessageCount()
     * @uses EwsConversationType::setUnreadCount()
     * @uses EwsConversationType::setGlobalUnreadCount()
     * @uses EwsConversationType::setSize()
     * @uses EwsConversationType::setGlobalSize()
     * @uses EwsConversationType::setItemClasses()
     * @uses EwsConversationType::setGlobalItemClasses()
     * @uses EwsConversationType::setImportance()
     * @uses EwsConversationType::setGlobalImportance()
     * @uses EwsConversationType::setItemIds()
     * @uses EwsConversationType::setGlobalItemIds()
     * @uses EwsConversationType::setLastModifiedTime()
     * @uses EwsConversationType::setInstanceKey()
     * @uses EwsConversationType::setPreview()
     * @uses EwsConversationType::setMailboxScope()
     * @uses EwsConversationType::setIconIndex()
     * @uses EwsConversationType::setGlobalIconIndex()
     * @uses EwsConversationType::setDraftItemIds()
     * @uses EwsConversationType::setHasIrm()
     * @uses EwsConversationType::setGlobalHasIrm()
     * @uses EwsConversationType::setSortKey()
     * @uses EwsConversationType::setMentionedMe()
     * @uses EwsConversationType::setGlobalMentionedMe()
     * @param \StructType\EwsItemIdType $conversationId
     * @param string $conversationTopic
     * @param \ArrayType\EwsArrayOfStringsType $uniqueRecipients
     * @param \ArrayType\EwsArrayOfStringsType $globalUniqueRecipients
     * @param \ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders
     * @param \ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders
     * @param \ArrayType\EwsArrayOfStringsType $uniqueSenders
     * @param \ArrayType\EwsArrayOfStringsType $globalUniqueSenders
     * @param string $lastDeliveryTime
     * @param string $globalLastDeliveryTime
     * @param \ArrayType\EwsArrayOfStringsType $categories
     * @param \ArrayType\EwsArrayOfStringsType $globalCategories
     * @param string $flagStatus
     * @param string $globalFlagStatus
     * @param bool $hasAttachments
     * @param bool $globalHasAttachments
     * @param int $messageCount
     * @param int $globalMessageCount
     * @param int $unreadCount
     * @param int $globalUnreadCount
     * @param int $size
     * @param int $globalSize
     * @param \ArrayType\EwsArrayOfItemClassType $itemClasses
     * @param \ArrayType\EwsArrayOfItemClassType $globalItemClasses
     * @param string $importance
     * @param string $globalImportance
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds
     * @param string $lastModifiedTime
     * @param string $instanceKey
     * @param string $preview
     * @param string $mailboxScope
     * @param string $iconIndex
     * @param string $globalIconIndex
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds
     * @param bool $hasIrm
     * @param bool $globalHasIrm
     * @param int $sortKey
     * @param bool $mentionedMe
     * @param bool $globalMentionedMe
     */
    public function __construct(?\StructType\EwsItemIdType $conversationId = null, ?string $conversationTopic = null, ?\ArrayType\EwsArrayOfStringsType $uniqueRecipients = null, ?\ArrayType\EwsArrayOfStringsType $globalUniqueRecipients = null, ?\ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders = null, ?\ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders = null, ?\ArrayType\EwsArrayOfStringsType $uniqueSenders = null, ?\ArrayType\EwsArrayOfStringsType $globalUniqueSenders = null, ?string $lastDeliveryTime = null, ?string $globalLastDeliveryTime = null, ?\ArrayType\EwsArrayOfStringsType $categories = null, ?\ArrayType\EwsArrayOfStringsType $globalCategories = null, ?string $flagStatus = null, ?string $globalFlagStatus = null, ?bool $hasAttachments = null, ?bool $globalHasAttachments = null, ?int $messageCount = null, ?int $globalMessageCount = null, ?int $unreadCount = null, ?int $globalUnreadCount = null, ?int $size = null, ?int $globalSize = null, ?\ArrayType\EwsArrayOfItemClassType $itemClasses = null, ?\ArrayType\EwsArrayOfItemClassType $globalItemClasses = null, ?string $importance = null, ?string $globalImportance = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds = null, ?string $lastModifiedTime = null, ?string $instanceKey = null, ?string $preview = null, ?string $mailboxScope = null, ?string $iconIndex = null, ?string $globalIconIndex = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds = null, ?bool $hasIrm = null, ?bool $globalHasIrm = null, ?int $sortKey = null, ?bool $mentionedMe = null, ?bool $globalMentionedMe = null)
    {
        $this
            ->setConversationId($conversationId)
            ->setConversationTopic($conversationTopic)
            ->setUniqueRecipients($uniqueRecipients)
            ->setGlobalUniqueRecipients($globalUniqueRecipients)
            ->setUniqueUnreadSenders($uniqueUnreadSenders)
            ->setGlobalUniqueUnreadSenders($globalUniqueUnreadSenders)
            ->setUniqueSenders($uniqueSenders)
            ->setGlobalUniqueSenders($globalUniqueSenders)
            ->setLastDeliveryTime($lastDeliveryTime)
            ->setGlobalLastDeliveryTime($globalLastDeliveryTime)
            ->setCategories($categories)
            ->setGlobalCategories($globalCategories)
            ->setFlagStatus($flagStatus)
            ->setGlobalFlagStatus($globalFlagStatus)
            ->setHasAttachments($hasAttachments)
            ->setGlobalHasAttachments($globalHasAttachments)
            ->setMessageCount($messageCount)
            ->setGlobalMessageCount($globalMessageCount)
            ->setUnreadCount($unreadCount)
            ->setGlobalUnreadCount($globalUnreadCount)
            ->setSize($size)
            ->setGlobalSize($globalSize)
            ->setItemClasses($itemClasses)
            ->setGlobalItemClasses($globalItemClasses)
            ->setImportance($importance)
            ->setGlobalImportance($globalImportance)
            ->setItemIds($itemIds)
            ->setGlobalItemIds($globalItemIds)
            ->setLastModifiedTime($lastModifiedTime)
            ->setInstanceKey($instanceKey)
            ->setPreview($preview)
            ->setMailboxScope($mailboxScope)
            ->setIconIndex($iconIndex)
            ->setGlobalIconIndex($globalIconIndex)
            ->setDraftItemIds($draftItemIds)
            ->setHasIrm($hasIrm)
            ->setGlobalHasIrm($globalHasIrm)
            ->setSortKey($sortKey)
            ->setMentionedMe($mentionedMe)
            ->setGlobalMentionedMe($globalMentionedMe);
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
     * @return \StructType\EwsConversationType
     */
    public function setConversationId(?\StructType\EwsItemIdType $conversationId = null): self
    {
        $this->ConversationId = $conversationId;
        
        return $this;
    }
    /**
     * Get ConversationTopic value
     * @return string|null
     */
    public function getConversationTopic(): ?string
    {
        return $this->ConversationTopic;
    }
    /**
     * Set ConversationTopic value
     * @param string $conversationTopic
     * @return \StructType\EwsConversationType
     */
    public function setConversationTopic(?string $conversationTopic = null): self
    {
        // validation for constraint: string
        if (!is_null($conversationTopic) && !is_string($conversationTopic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conversationTopic, true), gettype($conversationTopic)), __LINE__);
        }
        $this->ConversationTopic = $conversationTopic;
        
        return $this;
    }
    /**
     * Get UniqueRecipients value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getUniqueRecipients(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->UniqueRecipients;
    }
    /**
     * Set UniqueRecipients value
     * @param \ArrayType\EwsArrayOfStringsType $uniqueRecipients
     * @return \StructType\EwsConversationType
     */
    public function setUniqueRecipients(?\ArrayType\EwsArrayOfStringsType $uniqueRecipients = null): self
    {
        $this->UniqueRecipients = $uniqueRecipients;
        
        return $this;
    }
    /**
     * Get GlobalUniqueRecipients value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalUniqueRecipients(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->GlobalUniqueRecipients;
    }
    /**
     * Set GlobalUniqueRecipients value
     * @param \ArrayType\EwsArrayOfStringsType $globalUniqueRecipients
     * @return \StructType\EwsConversationType
     */
    public function setGlobalUniqueRecipients(?\ArrayType\EwsArrayOfStringsType $globalUniqueRecipients = null): self
    {
        $this->GlobalUniqueRecipients = $globalUniqueRecipients;
        
        return $this;
    }
    /**
     * Get UniqueUnreadSenders value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getUniqueUnreadSenders(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->UniqueUnreadSenders;
    }
    /**
     * Set UniqueUnreadSenders value
     * @param \ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders
     * @return \StructType\EwsConversationType
     */
    public function setUniqueUnreadSenders(?\ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders = null): self
    {
        $this->UniqueUnreadSenders = $uniqueUnreadSenders;
        
        return $this;
    }
    /**
     * Get GlobalUniqueUnreadSenders value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalUniqueUnreadSenders(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->GlobalUniqueUnreadSenders;
    }
    /**
     * Set GlobalUniqueUnreadSenders value
     * @param \ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders
     * @return \StructType\EwsConversationType
     */
    public function setGlobalUniqueUnreadSenders(?\ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders = null): self
    {
        $this->GlobalUniqueUnreadSenders = $globalUniqueUnreadSenders;
        
        return $this;
    }
    /**
     * Get UniqueSenders value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getUniqueSenders(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->UniqueSenders;
    }
    /**
     * Set UniqueSenders value
     * @param \ArrayType\EwsArrayOfStringsType $uniqueSenders
     * @return \StructType\EwsConversationType
     */
    public function setUniqueSenders(?\ArrayType\EwsArrayOfStringsType $uniqueSenders = null): self
    {
        $this->UniqueSenders = $uniqueSenders;
        
        return $this;
    }
    /**
     * Get GlobalUniqueSenders value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalUniqueSenders(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->GlobalUniqueSenders;
    }
    /**
     * Set GlobalUniqueSenders value
     * @param \ArrayType\EwsArrayOfStringsType $globalUniqueSenders
     * @return \StructType\EwsConversationType
     */
    public function setGlobalUniqueSenders(?\ArrayType\EwsArrayOfStringsType $globalUniqueSenders = null): self
    {
        $this->GlobalUniqueSenders = $globalUniqueSenders;
        
        return $this;
    }
    /**
     * Get LastDeliveryTime value
     * @return string|null
     */
    public function getLastDeliveryTime(): ?string
    {
        return $this->LastDeliveryTime;
    }
    /**
     * Set LastDeliveryTime value
     * @param string $lastDeliveryTime
     * @return \StructType\EwsConversationType
     */
    public function setLastDeliveryTime(?string $lastDeliveryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastDeliveryTime) && !is_string($lastDeliveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastDeliveryTime, true), gettype($lastDeliveryTime)), __LINE__);
        }
        $this->LastDeliveryTime = $lastDeliveryTime;
        
        return $this;
    }
    /**
     * Get GlobalLastDeliveryTime value
     * @return string|null
     */
    public function getGlobalLastDeliveryTime(): ?string
    {
        return $this->GlobalLastDeliveryTime;
    }
    /**
     * Set GlobalLastDeliveryTime value
     * @param string $globalLastDeliveryTime
     * @return \StructType\EwsConversationType
     */
    public function setGlobalLastDeliveryTime(?string $globalLastDeliveryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($globalLastDeliveryTime) && !is_string($globalLastDeliveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalLastDeliveryTime, true), gettype($globalLastDeliveryTime)), __LINE__);
        }
        $this->GlobalLastDeliveryTime = $globalLastDeliveryTime;
        
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
     * @return \StructType\EwsConversationType
     */
    public function setCategories(?\ArrayType\EwsArrayOfStringsType $categories = null): self
    {
        $this->Categories = $categories;
        
        return $this;
    }
    /**
     * Get GlobalCategories value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalCategories(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->GlobalCategories;
    }
    /**
     * Set GlobalCategories value
     * @param \ArrayType\EwsArrayOfStringsType $globalCategories
     * @return \StructType\EwsConversationType
     */
    public function setGlobalCategories(?\ArrayType\EwsArrayOfStringsType $globalCategories = null): self
    {
        $this->GlobalCategories = $globalCategories;
        
        return $this;
    }
    /**
     * Get FlagStatus value
     * @return string|null
     */
    public function getFlagStatus(): ?string
    {
        return $this->FlagStatus;
    }
    /**
     * Set FlagStatus value
     * @uses \EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \EnumType\EwsFlagStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flagStatus
     * @return \StructType\EwsConversationType
     */
    public function setFlagStatus(?string $flagStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsFlagStatusType::valueIsValid($flagStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFlagStatusType', is_array($flagStatus) ? implode(', ', $flagStatus) : var_export($flagStatus, true), implode(', ', \EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->FlagStatus = $flagStatus;
        
        return $this;
    }
    /**
     * Get GlobalFlagStatus value
     * @return string|null
     */
    public function getGlobalFlagStatus(): ?string
    {
        return $this->GlobalFlagStatus;
    }
    /**
     * Set GlobalFlagStatus value
     * @uses \EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \EnumType\EwsFlagStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $globalFlagStatus
     * @return \StructType\EwsConversationType
     */
    public function setGlobalFlagStatus(?string $globalFlagStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsFlagStatusType::valueIsValid($globalFlagStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFlagStatusType', is_array($globalFlagStatus) ? implode(', ', $globalFlagStatus) : var_export($globalFlagStatus, true), implode(', ', \EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->GlobalFlagStatus = $globalFlagStatus;
        
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
     * @return \StructType\EwsConversationType
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
     * Get GlobalHasAttachments value
     * @return bool|null
     */
    public function getGlobalHasAttachments(): ?bool
    {
        return $this->GlobalHasAttachments;
    }
    /**
     * Set GlobalHasAttachments value
     * @param bool $globalHasAttachments
     * @return \StructType\EwsConversationType
     */
    public function setGlobalHasAttachments(?bool $globalHasAttachments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalHasAttachments) && !is_bool($globalHasAttachments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalHasAttachments, true), gettype($globalHasAttachments)), __LINE__);
        }
        $this->GlobalHasAttachments = $globalHasAttachments;
        
        return $this;
    }
    /**
     * Get MessageCount value
     * @return int|null
     */
    public function getMessageCount(): ?int
    {
        return $this->MessageCount;
    }
    /**
     * Set MessageCount value
     * @param int $messageCount
     * @return \StructType\EwsConversationType
     */
    public function setMessageCount(?int $messageCount = null): self
    {
        // validation for constraint: int
        if (!is_null($messageCount) && !(is_int($messageCount) || ctype_digit($messageCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageCount, true), gettype($messageCount)), __LINE__);
        }
        $this->MessageCount = $messageCount;
        
        return $this;
    }
    /**
     * Get GlobalMessageCount value
     * @return int|null
     */
    public function getGlobalMessageCount(): ?int
    {
        return $this->GlobalMessageCount;
    }
    /**
     * Set GlobalMessageCount value
     * @param int $globalMessageCount
     * @return \StructType\EwsConversationType
     */
    public function setGlobalMessageCount(?int $globalMessageCount = null): self
    {
        // validation for constraint: int
        if (!is_null($globalMessageCount) && !(is_int($globalMessageCount) || ctype_digit($globalMessageCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($globalMessageCount, true), gettype($globalMessageCount)), __LINE__);
        }
        $this->GlobalMessageCount = $globalMessageCount;
        
        return $this;
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount(): ?int
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \StructType\EwsConversationType
     */
    public function setUnreadCount(?int $unreadCount = null): self
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !(is_int($unreadCount) || ctype_digit($unreadCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unreadCount, true), gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        
        return $this;
    }
    /**
     * Get GlobalUnreadCount value
     * @return int|null
     */
    public function getGlobalUnreadCount(): ?int
    {
        return $this->GlobalUnreadCount;
    }
    /**
     * Set GlobalUnreadCount value
     * @param int $globalUnreadCount
     * @return \StructType\EwsConversationType
     */
    public function setGlobalUnreadCount(?int $globalUnreadCount = null): self
    {
        // validation for constraint: int
        if (!is_null($globalUnreadCount) && !(is_int($globalUnreadCount) || ctype_digit($globalUnreadCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($globalUnreadCount, true), gettype($globalUnreadCount)), __LINE__);
        }
        $this->GlobalUnreadCount = $globalUnreadCount;
        
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
     * @return \StructType\EwsConversationType
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
     * Get GlobalSize value
     * @return int|null
     */
    public function getGlobalSize(): ?int
    {
        return $this->GlobalSize;
    }
    /**
     * Set GlobalSize value
     * @param int $globalSize
     * @return \StructType\EwsConversationType
     */
    public function setGlobalSize(?int $globalSize = null): self
    {
        // validation for constraint: int
        if (!is_null($globalSize) && !(is_int($globalSize) || ctype_digit($globalSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($globalSize, true), gettype($globalSize)), __LINE__);
        }
        $this->GlobalSize = $globalSize;
        
        return $this;
    }
    /**
     * Get ItemClasses value
     * @return \ArrayType\EwsArrayOfItemClassType|null
     */
    public function getItemClasses(): ?\ArrayType\EwsArrayOfItemClassType
    {
        return $this->ItemClasses;
    }
    /**
     * Set ItemClasses value
     * @param \ArrayType\EwsArrayOfItemClassType $itemClasses
     * @return \StructType\EwsConversationType
     */
    public function setItemClasses(?\ArrayType\EwsArrayOfItemClassType $itemClasses = null): self
    {
        $this->ItemClasses = $itemClasses;
        
        return $this;
    }
    /**
     * Get GlobalItemClasses value
     * @return \ArrayType\EwsArrayOfItemClassType|null
     */
    public function getGlobalItemClasses(): ?\ArrayType\EwsArrayOfItemClassType
    {
        return $this->GlobalItemClasses;
    }
    /**
     * Set GlobalItemClasses value
     * @param \ArrayType\EwsArrayOfItemClassType $globalItemClasses
     * @return \StructType\EwsConversationType
     */
    public function setGlobalItemClasses(?\ArrayType\EwsArrayOfItemClassType $globalItemClasses = null): self
    {
        $this->GlobalItemClasses = $globalItemClasses;
        
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
     * @return \StructType\EwsConversationType
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
     * Get GlobalImportance value
     * @return string|null
     */
    public function getGlobalImportance(): ?string
    {
        return $this->GlobalImportance;
    }
    /**
     * Set GlobalImportance value
     * @uses \EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $globalImportance
     * @return \StructType\EwsConversationType
     */
    public function setGlobalImportance(?string $globalImportance = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsImportanceChoicesType::valueIsValid($globalImportance)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsImportanceChoicesType', is_array($globalImportance) ? implode(', ', $globalImportance) : var_export($globalImportance, true), implode(', ', \EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->GlobalImportance = $globalImportance;
        
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \StructType\EwsConversationType
     */
    public function setItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
    /**
     * Get GlobalItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getGlobalItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->GlobalItemIds;
    }
    /**
     * Set GlobalItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds
     * @return \StructType\EwsConversationType
     */
    public function setGlobalItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds = null): self
    {
        $this->GlobalItemIds = $globalItemIds;
        
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
     * @return \StructType\EwsConversationType
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
     * @return \StructType\EwsConversationType
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
     * @return \StructType\EwsConversationType
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
     * Get MailboxScope value
     * @return string|null
     */
    public function getMailboxScope(): ?string
    {
        return $this->MailboxScope;
    }
    /**
     * Set MailboxScope value
     * @uses \EnumType\EwsMailboxSearchLocationType::valueIsValid()
     * @uses \EnumType\EwsMailboxSearchLocationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mailboxScope
     * @return \StructType\EwsConversationType
     */
    public function setMailboxScope(?string $mailboxScope = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMailboxSearchLocationType::valueIsValid($mailboxScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMailboxSearchLocationType', is_array($mailboxScope) ? implode(', ', $mailboxScope) : var_export($mailboxScope, true), implode(', ', \EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->MailboxScope = $mailboxScope;
        
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
     * @return \StructType\EwsConversationType
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
     * Get GlobalIconIndex value
     * @return string|null
     */
    public function getGlobalIconIndex(): ?string
    {
        return $this->GlobalIconIndex;
    }
    /**
     * Set GlobalIconIndex value
     * @uses \EnumType\EwsIconIndexType::valueIsValid()
     * @uses \EnumType\EwsIconIndexType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $globalIconIndex
     * @return \StructType\EwsConversationType
     */
    public function setGlobalIconIndex(?string $globalIconIndex = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsIconIndexType::valueIsValid($globalIconIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsIconIndexType', is_array($globalIconIndex) ? implode(', ', $globalIconIndex) : var_export($globalIconIndex, true), implode(', ', \EnumType\EwsIconIndexType::getValidValues())), __LINE__);
        }
        $this->GlobalIconIndex = $globalIconIndex;
        
        return $this;
    }
    /**
     * Get DraftItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getDraftItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->DraftItemIds;
    }
    /**
     * Set DraftItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds
     * @return \StructType\EwsConversationType
     */
    public function setDraftItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds = null): self
    {
        $this->DraftItemIds = $draftItemIds;
        
        return $this;
    }
    /**
     * Get HasIrm value
     * @return bool|null
     */
    public function getHasIrm(): ?bool
    {
        return $this->HasIrm;
    }
    /**
     * Set HasIrm value
     * @param bool $hasIrm
     * @return \StructType\EwsConversationType
     */
    public function setHasIrm(?bool $hasIrm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasIrm) && !is_bool($hasIrm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasIrm, true), gettype($hasIrm)), __LINE__);
        }
        $this->HasIrm = $hasIrm;
        
        return $this;
    }
    /**
     * Get GlobalHasIrm value
     * @return bool|null
     */
    public function getGlobalHasIrm(): ?bool
    {
        return $this->GlobalHasIrm;
    }
    /**
     * Set GlobalHasIrm value
     * @param bool $globalHasIrm
     * @return \StructType\EwsConversationType
     */
    public function setGlobalHasIrm(?bool $globalHasIrm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalHasIrm) && !is_bool($globalHasIrm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalHasIrm, true), gettype($globalHasIrm)), __LINE__);
        }
        $this->GlobalHasIrm = $globalHasIrm;
        
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
     * @return \StructType\EwsConversationType
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
     * @return \StructType\EwsConversationType
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
     * Get GlobalMentionedMe value
     * @return bool|null
     */
    public function getGlobalMentionedMe(): ?bool
    {
        return $this->GlobalMentionedMe;
    }
    /**
     * Set GlobalMentionedMe value
     * @param bool $globalMentionedMe
     * @return \StructType\EwsConversationType
     */
    public function setGlobalMentionedMe(?bool $globalMentionedMe = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalMentionedMe) && !is_bool($globalMentionedMe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalMentionedMe, true), gettype($globalMentionedMe)), __LINE__);
        }
        $this->GlobalMentionedMe = $globalMentionedMe;
        
        return $this;
    }
}
