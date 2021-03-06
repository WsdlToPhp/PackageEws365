<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The ConversationTopic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConversationTopic;
    /**
     * The UniqueRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $UniqueRecipients;
    /**
     * The GlobalUniqueRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $GlobalUniqueRecipients;
    /**
     * The UniqueUnreadSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $UniqueUnreadSenders;
    /**
     * The GlobalUniqueUnreadSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $GlobalUniqueUnreadSenders;
    /**
     * The UniqueSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $UniqueSenders;
    /**
     * The GlobalUniqueSenders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $GlobalUniqueSenders;
    /**
     * The LastDeliveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastDeliveryTime;
    /**
     * The GlobalLastDeliveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GlobalLastDeliveryTime;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Categories;
    /**
     * The GlobalCategories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $GlobalCategories;
    /**
     * The FlagStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlagStatus;
    /**
     * The GlobalFlagStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GlobalFlagStatus;
    /**
     * The HasAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasAttachments;
    /**
     * The GlobalHasAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalHasAttachments;
    /**
     * The MessageCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MessageCount;
    /**
     * The GlobalMessageCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GlobalMessageCount;
    /**
     * The UnreadCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UnreadCount;
    /**
     * The GlobalUnreadCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GlobalUnreadCount;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The GlobalSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GlobalSize;
    /**
     * The ItemClasses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfItemClassType
     */
    public $ItemClasses;
    /**
     * The GlobalItemClasses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfItemClassType
     */
    public $GlobalItemClasses;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The GlobalImportance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GlobalImportance;
    /**
     * The ItemIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The GlobalItemIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $GlobalItemIds;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The InstanceKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstanceKey;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Preview;
    /**
     * The MailboxScope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MailboxScope;
    /**
     * The IconIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IconIndex;
    /**
     * The GlobalIconIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GlobalIconIndex;
    /**
     * The DraftItemIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $DraftItemIds;
    /**
     * The HasIrm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasIrm;
    /**
     * The GlobalHasIrm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalHasIrm;
    /**
     * The SortKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SortKey;
    /**
     * The MentionedMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MentionedMe;
    /**
     * The GlobalMentionedMe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalMentionedMe;
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
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @param string $conversationTopic
     * @param \Ews\ArrayType\EwsArrayOfStringsType $uniqueRecipients
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueRecipients
     * @param \Ews\ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders
     * @param \Ews\ArrayType\EwsArrayOfStringsType $uniqueSenders
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueSenders
     * @param string $lastDeliveryTime
     * @param string $globalLastDeliveryTime
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalCategories
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
     * @param \Ews\ArrayType\EwsArrayOfItemClassType $itemClasses
     * @param \Ews\ArrayType\EwsArrayOfItemClassType $globalItemClasses
     * @param string $importance
     * @param string $globalImportance
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds
     * @param string $lastModifiedTime
     * @param string $instanceKey
     * @param string $preview
     * @param string $mailboxScope
     * @param string $iconIndex
     * @param string $globalIconIndex
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds
     * @param bool $hasIrm
     * @param bool $globalHasIrm
     * @param int $sortKey
     * @param bool $mentionedMe
     * @param bool $globalMentionedMe
     */
    public function __construct(\Ews\StructType\EwsItemIdType $conversationId = null, $conversationTopic = null, \Ews\ArrayType\EwsArrayOfStringsType $uniqueRecipients = null, \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueRecipients = null, \Ews\ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders = null, \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders = null, \Ews\ArrayType\EwsArrayOfStringsType $uniqueSenders = null, \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueSenders = null, $lastDeliveryTime = null, $globalLastDeliveryTime = null, \Ews\ArrayType\EwsArrayOfStringsType $categories = null, \Ews\ArrayType\EwsArrayOfStringsType $globalCategories = null, $flagStatus = null, $globalFlagStatus = null, $hasAttachments = null, $globalHasAttachments = null, $messageCount = null, $globalMessageCount = null, $unreadCount = null, $globalUnreadCount = null, $size = null, $globalSize = null, \Ews\ArrayType\EwsArrayOfItemClassType $itemClasses = null, \Ews\ArrayType\EwsArrayOfItemClassType $globalItemClasses = null, $importance = null, $globalImportance = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds = null, $lastModifiedTime = null, $instanceKey = null, $preview = null, $mailboxScope = null, $iconIndex = null, $globalIconIndex = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds = null, $hasIrm = null, $globalHasIrm = null, $sortKey = null, $mentionedMe = null, $globalMentionedMe = null)
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
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getConversationId()
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @return \Ews\StructType\EwsConversationType
     */
    public function setConversationId(\Ews\StructType\EwsItemIdType $conversationId = null)
    {
        $this->ConversationId = $conversationId;
        return $this;
    }
    /**
     * Get ConversationTopic value
     * @return string|null
     */
    public function getConversationTopic()
    {
        return $this->ConversationTopic;
    }
    /**
     * Set ConversationTopic value
     * @param string $conversationTopic
     * @return \Ews\StructType\EwsConversationType
     */
    public function setConversationTopic($conversationTopic = null)
    {
        // validation for constraint: string
        if (!is_null($conversationTopic) && !is_string($conversationTopic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conversationTopic, true), gettype($conversationTopic)), __LINE__);
        }
        $this->ConversationTopic = $conversationTopic;
        return $this;
    }
    /**
     * Get UniqueRecipients value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getUniqueRecipients()
    {
        return $this->UniqueRecipients;
    }
    /**
     * Set UniqueRecipients value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $uniqueRecipients
     * @return \Ews\StructType\EwsConversationType
     */
    public function setUniqueRecipients(\Ews\ArrayType\EwsArrayOfStringsType $uniqueRecipients = null)
    {
        $this->UniqueRecipients = $uniqueRecipients;
        return $this;
    }
    /**
     * Get GlobalUniqueRecipients value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalUniqueRecipients()
    {
        return $this->GlobalUniqueRecipients;
    }
    /**
     * Set GlobalUniqueRecipients value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueRecipients
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalUniqueRecipients(\Ews\ArrayType\EwsArrayOfStringsType $globalUniqueRecipients = null)
    {
        $this->GlobalUniqueRecipients = $globalUniqueRecipients;
        return $this;
    }
    /**
     * Get UniqueUnreadSenders value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getUniqueUnreadSenders()
    {
        return $this->UniqueUnreadSenders;
    }
    /**
     * Set UniqueUnreadSenders value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders
     * @return \Ews\StructType\EwsConversationType
     */
    public function setUniqueUnreadSenders(\Ews\ArrayType\EwsArrayOfStringsType $uniqueUnreadSenders = null)
    {
        $this->UniqueUnreadSenders = $uniqueUnreadSenders;
        return $this;
    }
    /**
     * Get GlobalUniqueUnreadSenders value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalUniqueUnreadSenders()
    {
        return $this->GlobalUniqueUnreadSenders;
    }
    /**
     * Set GlobalUniqueUnreadSenders value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalUniqueUnreadSenders(\Ews\ArrayType\EwsArrayOfStringsType $globalUniqueUnreadSenders = null)
    {
        $this->GlobalUniqueUnreadSenders = $globalUniqueUnreadSenders;
        return $this;
    }
    /**
     * Get UniqueSenders value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getUniqueSenders()
    {
        return $this->UniqueSenders;
    }
    /**
     * Set UniqueSenders value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $uniqueSenders
     * @return \Ews\StructType\EwsConversationType
     */
    public function setUniqueSenders(\Ews\ArrayType\EwsArrayOfStringsType $uniqueSenders = null)
    {
        $this->UniqueSenders = $uniqueSenders;
        return $this;
    }
    /**
     * Get GlobalUniqueSenders value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalUniqueSenders()
    {
        return $this->GlobalUniqueSenders;
    }
    /**
     * Set GlobalUniqueSenders value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalUniqueSenders
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalUniqueSenders(\Ews\ArrayType\EwsArrayOfStringsType $globalUniqueSenders = null)
    {
        $this->GlobalUniqueSenders = $globalUniqueSenders;
        return $this;
    }
    /**
     * Get LastDeliveryTime value
     * @return string|null
     */
    public function getLastDeliveryTime()
    {
        return $this->LastDeliveryTime;
    }
    /**
     * Set LastDeliveryTime value
     * @param string $lastDeliveryTime
     * @return \Ews\StructType\EwsConversationType
     */
    public function setLastDeliveryTime($lastDeliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastDeliveryTime) && !is_string($lastDeliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastDeliveryTime, true), gettype($lastDeliveryTime)), __LINE__);
        }
        $this->LastDeliveryTime = $lastDeliveryTime;
        return $this;
    }
    /**
     * Get GlobalLastDeliveryTime value
     * @return string|null
     */
    public function getGlobalLastDeliveryTime()
    {
        return $this->GlobalLastDeliveryTime;
    }
    /**
     * Set GlobalLastDeliveryTime value
     * @param string $globalLastDeliveryTime
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalLastDeliveryTime($globalLastDeliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($globalLastDeliveryTime) && !is_string($globalLastDeliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalLastDeliveryTime, true), gettype($globalLastDeliveryTime)), __LINE__);
        }
        $this->GlobalLastDeliveryTime = $globalLastDeliveryTime;
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
     * @return \Ews\StructType\EwsConversationType
     */
    public function setCategories(\Ews\ArrayType\EwsArrayOfStringsType $categories = null)
    {
        $this->Categories = $categories;
        return $this;
    }
    /**
     * Get GlobalCategories value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getGlobalCategories()
    {
        return $this->GlobalCategories;
    }
    /**
     * Set GlobalCategories value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $globalCategories
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalCategories(\Ews\ArrayType\EwsArrayOfStringsType $globalCategories = null)
    {
        $this->GlobalCategories = $globalCategories;
        return $this;
    }
    /**
     * Get FlagStatus value
     * @return string|null
     */
    public function getFlagStatus()
    {
        return $this->FlagStatus;
    }
    /**
     * Set FlagStatus value
     * @uses \Ews\EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsFlagStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flagStatus
     * @return \Ews\StructType\EwsConversationType
     */
    public function setFlagStatus($flagStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFlagStatusType::valueIsValid($flagStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFlagStatusType', is_array($flagStatus) ? implode(', ', $flagStatus) : var_export($flagStatus, true), implode(', ', \Ews\EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->FlagStatus = $flagStatus;
        return $this;
    }
    /**
     * Get GlobalFlagStatus value
     * @return string|null
     */
    public function getGlobalFlagStatus()
    {
        return $this->GlobalFlagStatus;
    }
    /**
     * Set GlobalFlagStatus value
     * @uses \Ews\EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsFlagStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $globalFlagStatus
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalFlagStatus($globalFlagStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFlagStatusType::valueIsValid($globalFlagStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFlagStatusType', is_array($globalFlagStatus) ? implode(', ', $globalFlagStatus) : var_export($globalFlagStatus, true), implode(', ', \Ews\EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->GlobalFlagStatus = $globalFlagStatus;
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
     * @return \Ews\StructType\EwsConversationType
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
     * Get GlobalHasAttachments value
     * @return bool|null
     */
    public function getGlobalHasAttachments()
    {
        return $this->GlobalHasAttachments;
    }
    /**
     * Set GlobalHasAttachments value
     * @param bool $globalHasAttachments
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalHasAttachments($globalHasAttachments = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalHasAttachments) && !is_bool($globalHasAttachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalHasAttachments, true), gettype($globalHasAttachments)), __LINE__);
        }
        $this->GlobalHasAttachments = $globalHasAttachments;
        return $this;
    }
    /**
     * Get MessageCount value
     * @return int|null
     */
    public function getMessageCount()
    {
        return $this->MessageCount;
    }
    /**
     * Set MessageCount value
     * @param int $messageCount
     * @return \Ews\StructType\EwsConversationType
     */
    public function setMessageCount($messageCount = null)
    {
        // validation for constraint: int
        if (!is_null($messageCount) && !(is_int($messageCount) || ctype_digit($messageCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageCount, true), gettype($messageCount)), __LINE__);
        }
        $this->MessageCount = $messageCount;
        return $this;
    }
    /**
     * Get GlobalMessageCount value
     * @return int|null
     */
    public function getGlobalMessageCount()
    {
        return $this->GlobalMessageCount;
    }
    /**
     * Set GlobalMessageCount value
     * @param int $globalMessageCount
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalMessageCount($globalMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($globalMessageCount) && !(is_int($globalMessageCount) || ctype_digit($globalMessageCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($globalMessageCount, true), gettype($globalMessageCount)), __LINE__);
        }
        $this->GlobalMessageCount = $globalMessageCount;
        return $this;
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount()
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \Ews\StructType\EwsConversationType
     */
    public function setUnreadCount($unreadCount = null)
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !(is_int($unreadCount) || ctype_digit($unreadCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unreadCount, true), gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        return $this;
    }
    /**
     * Get GlobalUnreadCount value
     * @return int|null
     */
    public function getGlobalUnreadCount()
    {
        return $this->GlobalUnreadCount;
    }
    /**
     * Set GlobalUnreadCount value
     * @param int $globalUnreadCount
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalUnreadCount($globalUnreadCount = null)
    {
        // validation for constraint: int
        if (!is_null($globalUnreadCount) && !(is_int($globalUnreadCount) || ctype_digit($globalUnreadCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($globalUnreadCount, true), gettype($globalUnreadCount)), __LINE__);
        }
        $this->GlobalUnreadCount = $globalUnreadCount;
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
     * @return \Ews\StructType\EwsConversationType
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
     * Get GlobalSize value
     * @return int|null
     */
    public function getGlobalSize()
    {
        return $this->GlobalSize;
    }
    /**
     * Set GlobalSize value
     * @param int $globalSize
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalSize($globalSize = null)
    {
        // validation for constraint: int
        if (!is_null($globalSize) && !(is_int($globalSize) || ctype_digit($globalSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($globalSize, true), gettype($globalSize)), __LINE__);
        }
        $this->GlobalSize = $globalSize;
        return $this;
    }
    /**
     * Get ItemClasses value
     * @return \Ews\ArrayType\EwsArrayOfItemClassType|null
     */
    public function getItemClasses()
    {
        return $this->ItemClasses;
    }
    /**
     * Set ItemClasses value
     * @param \Ews\ArrayType\EwsArrayOfItemClassType $itemClasses
     * @return \Ews\StructType\EwsConversationType
     */
    public function setItemClasses(\Ews\ArrayType\EwsArrayOfItemClassType $itemClasses = null)
    {
        $this->ItemClasses = $itemClasses;
        return $this;
    }
    /**
     * Get GlobalItemClasses value
     * @return \Ews\ArrayType\EwsArrayOfItemClassType|null
     */
    public function getGlobalItemClasses()
    {
        return $this->GlobalItemClasses;
    }
    /**
     * Set GlobalItemClasses value
     * @param \Ews\ArrayType\EwsArrayOfItemClassType $globalItemClasses
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalItemClasses(\Ews\ArrayType\EwsArrayOfItemClassType $globalItemClasses = null)
    {
        $this->GlobalItemClasses = $globalItemClasses;
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
     * @return \Ews\StructType\EwsConversationType
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
     * Get GlobalImportance value
     * @return string|null
     */
    public function getGlobalImportance()
    {
        return $this->GlobalImportance;
    }
    /**
     * Set GlobalImportance value
     * @uses \Ews\EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $globalImportance
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalImportance($globalImportance = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($globalImportance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsImportanceChoicesType', is_array($globalImportance) ? implode(', ', $globalImportance) : var_export($globalImportance, true), implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->GlobalImportance = $globalImportance;
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \Ews\StructType\EwsConversationType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Get GlobalItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getGlobalItemIds()
    {
        return $this->GlobalItemIds;
    }
    /**
     * Set GlobalItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $globalItemIds = null)
    {
        $this->GlobalItemIds = $globalItemIds;
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
     * @return \Ews\StructType\EwsConversationType
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
     * @return \Ews\StructType\EwsConversationType
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
     * @return \Ews\StructType\EwsConversationType
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
     * Get MailboxScope value
     * @return string|null
     */
    public function getMailboxScope()
    {
        return $this->MailboxScope;
    }
    /**
     * Set MailboxScope value
     * @uses \Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid()
     * @uses \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailboxScope
     * @return \Ews\StructType\EwsConversationType
     */
    public function setMailboxScope($mailboxScope = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid($mailboxScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMailboxSearchLocationType', is_array($mailboxScope) ? implode(', ', $mailboxScope) : var_export($mailboxScope, true), implode(', ', \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->MailboxScope = $mailboxScope;
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
     * @return \Ews\StructType\EwsConversationType
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
     * Get GlobalIconIndex value
     * @return string|null
     */
    public function getGlobalIconIndex()
    {
        return $this->GlobalIconIndex;
    }
    /**
     * Set GlobalIconIndex value
     * @uses \Ews\EnumType\EwsIconIndexType::valueIsValid()
     * @uses \Ews\EnumType\EwsIconIndexType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $globalIconIndex
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalIconIndex($globalIconIndex = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIconIndexType::valueIsValid($globalIconIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsIconIndexType', is_array($globalIconIndex) ? implode(', ', $globalIconIndex) : var_export($globalIconIndex, true), implode(', ', \Ews\EnumType\EwsIconIndexType::getValidValues())), __LINE__);
        }
        $this->GlobalIconIndex = $globalIconIndex;
        return $this;
    }
    /**
     * Get DraftItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getDraftItemIds()
    {
        return $this->DraftItemIds;
    }
    /**
     * Set DraftItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds
     * @return \Ews\StructType\EwsConversationType
     */
    public function setDraftItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $draftItemIds = null)
    {
        $this->DraftItemIds = $draftItemIds;
        return $this;
    }
    /**
     * Get HasIrm value
     * @return bool|null
     */
    public function getHasIrm()
    {
        return $this->HasIrm;
    }
    /**
     * Set HasIrm value
     * @param bool $hasIrm
     * @return \Ews\StructType\EwsConversationType
     */
    public function setHasIrm($hasIrm = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasIrm) && !is_bool($hasIrm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasIrm, true), gettype($hasIrm)), __LINE__);
        }
        $this->HasIrm = $hasIrm;
        return $this;
    }
    /**
     * Get GlobalHasIrm value
     * @return bool|null
     */
    public function getGlobalHasIrm()
    {
        return $this->GlobalHasIrm;
    }
    /**
     * Set GlobalHasIrm value
     * @param bool $globalHasIrm
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalHasIrm($globalHasIrm = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalHasIrm) && !is_bool($globalHasIrm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalHasIrm, true), gettype($globalHasIrm)), __LINE__);
        }
        $this->GlobalHasIrm = $globalHasIrm;
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
     * @return \Ews\StructType\EwsConversationType
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
     * @return \Ews\StructType\EwsConversationType
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
     * Get GlobalMentionedMe value
     * @return bool|null
     */
    public function getGlobalMentionedMe()
    {
        return $this->GlobalMentionedMe;
    }
    /**
     * Set GlobalMentionedMe value
     * @param bool $globalMentionedMe
     * @return \Ews\StructType\EwsConversationType
     */
    public function setGlobalMentionedMe($globalMentionedMe = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalMentionedMe) && !is_bool($globalMentionedMe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalMentionedMe, true), gettype($globalMentionedMe)), __LINE__);
        }
        $this->GlobalMentionedMe = $globalMentionedMe;
        return $this;
    }
}
