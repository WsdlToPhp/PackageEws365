<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocialActivityAggregatedNotificationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSocialActivityAggregatedNotificationType extends AbstractStructBase
{
    /**
     * The LatestTimestamp
     * @var string
     */
    public $LatestTimestamp;
    /**
     * The IsSeen
     * @var boolean
     */
    public $IsSeen;
    /**
     * The Actors
     * @var \Ews\ArrayType\EwsArrayOfPeopleType
     */
    public $Actors;
    /**
     * The SocialActivityActionType
     * @var string
     */
    public $SocialActivityActionType;
    /**
     * The TargetConversationId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $TargetConversationId;
    /**
     * The TargetItemId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $TargetItemId;
    /**
     * The TargetMailboxGuid
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TargetMailboxGuid;
    /**
     * The TargetMailboxSmtpAddress
     * @var string
     */
    public $TargetMailboxSmtpAddress;
    /**
     * The TargetItemType
     * @var string
     */
    public $TargetItemType;
    /**
     * The TargetGroupName
     * @var string
     */
    public $TargetGroupName;
    /**
     * The TargetMessagePreview
     * @var string
     */
    public $TargetMessagePreview;
    /**
     * The UnseenItemIDs
     * @var \Ews\ArrayType\EwsArrayOfItemIdsType
     */
    public $UnseenItemIDs;
    /**
     * Constructor method for SocialActivityAggregatedNotificationType
     * @uses EwsSocialActivityAggregatedNotificationType::setLatestTimestamp()
     * @uses EwsSocialActivityAggregatedNotificationType::setIsSeen()
     * @uses EwsSocialActivityAggregatedNotificationType::setActors()
     * @uses EwsSocialActivityAggregatedNotificationType::setSocialActivityActionType()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetConversationId()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetItemId()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetMailboxGuid()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetMailboxSmtpAddress()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetItemType()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetGroupName()
     * @uses EwsSocialActivityAggregatedNotificationType::setTargetMessagePreview()
     * @uses EwsSocialActivityAggregatedNotificationType::setUnseenItemIDs()
     * @param string $latestTimestamp
     * @param boolean $isSeen
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $actors
     * @param string $socialActivityActionType
     * @param \Ews\StructType\EwsItemIdType $targetConversationId
     * @param \Ews\StructType\EwsItemIdType $targetItemId
     * @param string $targetMailboxGuid
     * @param string $targetMailboxSmtpAddress
     * @param string $targetItemType
     * @param string $targetGroupName
     * @param string $targetMessagePreview
     * @param \Ews\ArrayType\EwsArrayOfItemIdsType $unseenItemIDs
     */
    public function __construct($latestTimestamp = null, $isSeen = null, \Ews\ArrayType\EwsArrayOfPeopleType $actors = null, $socialActivityActionType = null, \Ews\StructType\EwsItemIdType $targetConversationId = null, \Ews\StructType\EwsItemIdType $targetItemId = null, $targetMailboxGuid = null, $targetMailboxSmtpAddress = null, $targetItemType = null, $targetGroupName = null, $targetMessagePreview = null, \Ews\ArrayType\EwsArrayOfItemIdsType $unseenItemIDs = null)
    {
        $this
            ->setLatestTimestamp($latestTimestamp)
            ->setIsSeen($isSeen)
            ->setActors($actors)
            ->setSocialActivityActionType($socialActivityActionType)
            ->setTargetConversationId($targetConversationId)
            ->setTargetItemId($targetItemId)
            ->setTargetMailboxGuid($targetMailboxGuid)
            ->setTargetMailboxSmtpAddress($targetMailboxSmtpAddress)
            ->setTargetItemType($targetItemType)
            ->setTargetGroupName($targetGroupName)
            ->setTargetMessagePreview($targetMessagePreview)
            ->setUnseenItemIDs($unseenItemIDs);
    }
    /**
     * Get LatestTimestamp value
     * @return string|null
     */
    public function getLatestTimestamp()
    {
        return $this->LatestTimestamp;
    }
    /**
     * Set LatestTimestamp value
     * @param string $latestTimestamp
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setLatestTimestamp($latestTimestamp = null)
    {
        $this->LatestTimestamp = $latestTimestamp;
        return $this;
    }
    /**
     * Get IsSeen value
     * @return boolean|null
     */
    public function getIsSeen()
    {
        return $this->IsSeen;
    }
    /**
     * Set IsSeen value
     * @param boolean $isSeen
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setIsSeen($isSeen = null)
    {
        $this->IsSeen = $isSeen;
        return $this;
    }
    /**
     * Get Actors value
     * @return \Ews\ArrayType\EwsArrayOfPeopleType|null
     */
    public function getActors()
    {
        return $this->Actors;
    }
    /**
     * Set Actors value
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $actors
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setActors(\Ews\ArrayType\EwsArrayOfPeopleType $actors = null)
    {
        $this->Actors = $actors;
        return $this;
    }
    /**
     * Get SocialActivityActionType value
     * @return string|null
     */
    public function getSocialActivityActionType()
    {
        return $this->SocialActivityActionType;
    }
    /**
     * Set SocialActivityActionType value
     * @uses \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid()
     * @uses \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues()
     * @param string $socialActivityActionType
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setSocialActivityActionType($socialActivityActionType = null)
    {
        if (!\Ews\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid($socialActivityActionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $socialActivityActionType, implode(', ', \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->SocialActivityActionType = $socialActivityActionType;
        return $this;
    }
    /**
     * Get TargetConversationId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getTargetConversationId()
    {
        return $this->TargetConversationId;
    }
    /**
     * Set TargetConversationId value
     * @param \Ews\StructType\EwsItemIdType $targetConversationId
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetConversationId(\Ews\StructType\EwsItemIdType $targetConversationId = null)
    {
        $this->TargetConversationId = $targetConversationId;
        return $this;
    }
    /**
     * Get TargetItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getTargetItemId()
    {
        return $this->TargetItemId;
    }
    /**
     * Set TargetItemId value
     * @param \Ews\StructType\EwsItemIdType $targetItemId
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetItemId(\Ews\StructType\EwsItemIdType $targetItemId = null)
    {
        $this->TargetItemId = $targetItemId;
        return $this;
    }
    /**
     * Get TargetMailboxGuid value
     * @return string|null
     */
    public function getTargetMailboxGuid()
    {
        return $this->TargetMailboxGuid;
    }
    /**
     * Set TargetMailboxGuid value
     * @param string $targetMailboxGuid
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetMailboxGuid($targetMailboxGuid = null)
    {
        $this->TargetMailboxGuid = $targetMailboxGuid;
        return $this;
    }
    /**
     * Get TargetMailboxSmtpAddress value
     * @return string|null
     */
    public function getTargetMailboxSmtpAddress()
    {
        return $this->TargetMailboxSmtpAddress;
    }
    /**
     * Set TargetMailboxSmtpAddress value
     * @param string $targetMailboxSmtpAddress
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetMailboxSmtpAddress($targetMailboxSmtpAddress = null)
    {
        $this->TargetMailboxSmtpAddress = $targetMailboxSmtpAddress;
        return $this;
    }
    /**
     * Get TargetItemType value
     * @return string|null
     */
    public function getTargetItemType()
    {
        return $this->TargetItemType;
    }
    /**
     * Set TargetItemType value
     * @param string $targetItemType
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetItemType($targetItemType = null)
    {
        $this->TargetItemType = $targetItemType;
        return $this;
    }
    /**
     * Get TargetGroupName value
     * @return string|null
     */
    public function getTargetGroupName()
    {
        return $this->TargetGroupName;
    }
    /**
     * Set TargetGroupName value
     * @param string $targetGroupName
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetGroupName($targetGroupName = null)
    {
        $this->TargetGroupName = $targetGroupName;
        return $this;
    }
    /**
     * Get TargetMessagePreview value
     * @return string|null
     */
    public function getTargetMessagePreview()
    {
        return $this->TargetMessagePreview;
    }
    /**
     * Set TargetMessagePreview value
     * @param string $targetMessagePreview
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetMessagePreview($targetMessagePreview = null)
    {
        $this->TargetMessagePreview = $targetMessagePreview;
        return $this;
    }
    /**
     * Get UnseenItemIDs value
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType|null
     */
    public function getUnseenItemIDs()
    {
        return $this->UnseenItemIDs;
    }
    /**
     * Set UnseenItemIDs value
     * @param \Ews\ArrayType\EwsArrayOfItemIdsType $unseenItemIDs
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setUnseenItemIDs(\Ews\ArrayType\EwsArrayOfItemIdsType $unseenItemIDs = null)
    {
        $this->UnseenItemIDs = $unseenItemIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType
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
