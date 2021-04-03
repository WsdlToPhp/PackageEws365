<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $LatestTimestamp = null;
    /**
     * The IsSeen
     * @var bool|null
     */
    protected ?bool $IsSeen = null;
    /**
     * The Actors
     * @var \ArrayType\EwsArrayOfPeopleType|null
     */
    protected ?\ArrayType\EwsArrayOfPeopleType $Actors = null;
    /**
     * The SocialActivityActionType
     * @var string|null
     */
    protected ?string $SocialActivityActionType = null;
    /**
     * The TargetConversationId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $TargetConversationId = null;
    /**
     * The TargetItemId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $TargetItemId = null;
    /**
     * The TargetMailboxGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $TargetMailboxGuid = null;
    /**
     * The TargetMailboxSmtpAddress
     * @var string|null
     */
    protected ?string $TargetMailboxSmtpAddress = null;
    /**
     * The TargetItemType
     * @var string|null
     */
    protected ?string $TargetItemType = null;
    /**
     * The TargetGroupName
     * @var string|null
     */
    protected ?string $TargetGroupName = null;
    /**
     * The TargetMessagePreview
     * @var string|null
     */
    protected ?string $TargetMessagePreview = null;
    /**
     * The UnseenItemIDs
     * @var \ArrayType\EwsArrayOfItemIdsType|null
     */
    protected ?\ArrayType\EwsArrayOfItemIdsType $UnseenItemIDs = null;
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
     * @param bool $isSeen
     * @param \ArrayType\EwsArrayOfPeopleType $actors
     * @param string $socialActivityActionType
     * @param \StructType\EwsItemIdType $targetConversationId
     * @param \StructType\EwsItemIdType $targetItemId
     * @param string $targetMailboxGuid
     * @param string $targetMailboxSmtpAddress
     * @param string $targetItemType
     * @param string $targetGroupName
     * @param string $targetMessagePreview
     * @param \ArrayType\EwsArrayOfItemIdsType $unseenItemIDs
     */
    public function __construct(?string $latestTimestamp = null, ?bool $isSeen = null, ?\ArrayType\EwsArrayOfPeopleType $actors = null, ?string $socialActivityActionType = null, ?\StructType\EwsItemIdType $targetConversationId = null, ?\StructType\EwsItemIdType $targetItemId = null, ?string $targetMailboxGuid = null, ?string $targetMailboxSmtpAddress = null, ?string $targetItemType = null, ?string $targetGroupName = null, ?string $targetMessagePreview = null, ?\ArrayType\EwsArrayOfItemIdsType $unseenItemIDs = null)
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
    public function getLatestTimestamp(): ?string
    {
        return $this->LatestTimestamp;
    }
    /**
     * Set LatestTimestamp value
     * @param string $latestTimestamp
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setLatestTimestamp(?string $latestTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($latestTimestamp) && !is_string($latestTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestTimestamp, true), gettype($latestTimestamp)), __LINE__);
        }
        $this->LatestTimestamp = $latestTimestamp;
        
        return $this;
    }
    /**
     * Get IsSeen value
     * @return bool|null
     */
    public function getIsSeen(): ?bool
    {
        return $this->IsSeen;
    }
    /**
     * Set IsSeen value
     * @param bool $isSeen
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setIsSeen(?bool $isSeen = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSeen) && !is_bool($isSeen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSeen, true), gettype($isSeen)), __LINE__);
        }
        $this->IsSeen = $isSeen;
        
        return $this;
    }
    /**
     * Get Actors value
     * @return \ArrayType\EwsArrayOfPeopleType|null
     */
    public function getActors(): ?\ArrayType\EwsArrayOfPeopleType
    {
        return $this->Actors;
    }
    /**
     * Set Actors value
     * @param \ArrayType\EwsArrayOfPeopleType $actors
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setActors(?\ArrayType\EwsArrayOfPeopleType $actors = null): self
    {
        $this->Actors = $actors;
        
        return $this;
    }
    /**
     * Get SocialActivityActionType value
     * @return string|null
     */
    public function getSocialActivityActionType(): ?string
    {
        return $this->SocialActivityActionType;
    }
    /**
     * Set SocialActivityActionType value
     * @uses \EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid()
     * @uses \EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $socialActivityActionType
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setSocialActivityActionType(?string $socialActivityActionType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid($socialActivityActionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUserSocialActivityActionTypeEnum', is_array($socialActivityActionType) ? implode(', ', $socialActivityActionType) : var_export($socialActivityActionType, true), implode(', ', \EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->SocialActivityActionType = $socialActivityActionType;
        
        return $this;
    }
    /**
     * Get TargetConversationId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getTargetConversationId(): ?\StructType\EwsItemIdType
    {
        return $this->TargetConversationId;
    }
    /**
     * Set TargetConversationId value
     * @param \StructType\EwsItemIdType $targetConversationId
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetConversationId(?\StructType\EwsItemIdType $targetConversationId = null): self
    {
        $this->TargetConversationId = $targetConversationId;
        
        return $this;
    }
    /**
     * Get TargetItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getTargetItemId(): ?\StructType\EwsItemIdType
    {
        return $this->TargetItemId;
    }
    /**
     * Set TargetItemId value
     * @param \StructType\EwsItemIdType $targetItemId
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetItemId(?\StructType\EwsItemIdType $targetItemId = null): self
    {
        $this->TargetItemId = $targetItemId;
        
        return $this;
    }
    /**
     * Get TargetMailboxGuid value
     * @return string|null
     */
    public function getTargetMailboxGuid(): ?string
    {
        return $this->TargetMailboxGuid;
    }
    /**
     * Set TargetMailboxGuid value
     * @param string $targetMailboxGuid
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetMailboxGuid(?string $targetMailboxGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($targetMailboxGuid) && !is_string($targetMailboxGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMailboxGuid, true), gettype($targetMailboxGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($targetMailboxGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $targetMailboxGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($targetMailboxGuid, true)), __LINE__);
        }
        $this->TargetMailboxGuid = $targetMailboxGuid;
        
        return $this;
    }
    /**
     * Get TargetMailboxSmtpAddress value
     * @return string|null
     */
    public function getTargetMailboxSmtpAddress(): ?string
    {
        return $this->TargetMailboxSmtpAddress;
    }
    /**
     * Set TargetMailboxSmtpAddress value
     * @param string $targetMailboxSmtpAddress
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetMailboxSmtpAddress(?string $targetMailboxSmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($targetMailboxSmtpAddress) && !is_string($targetMailboxSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMailboxSmtpAddress, true), gettype($targetMailboxSmtpAddress)), __LINE__);
        }
        $this->TargetMailboxSmtpAddress = $targetMailboxSmtpAddress;
        
        return $this;
    }
    /**
     * Get TargetItemType value
     * @return string|null
     */
    public function getTargetItemType(): ?string
    {
        return $this->TargetItemType;
    }
    /**
     * Set TargetItemType value
     * @param string $targetItemType
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetItemType(?string $targetItemType = null): self
    {
        // validation for constraint: string
        if (!is_null($targetItemType) && !is_string($targetItemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetItemType, true), gettype($targetItemType)), __LINE__);
        }
        $this->TargetItemType = $targetItemType;
        
        return $this;
    }
    /**
     * Get TargetGroupName value
     * @return string|null
     */
    public function getTargetGroupName(): ?string
    {
        return $this->TargetGroupName;
    }
    /**
     * Set TargetGroupName value
     * @param string $targetGroupName
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetGroupName(?string $targetGroupName = null): self
    {
        // validation for constraint: string
        if (!is_null($targetGroupName) && !is_string($targetGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetGroupName, true), gettype($targetGroupName)), __LINE__);
        }
        $this->TargetGroupName = $targetGroupName;
        
        return $this;
    }
    /**
     * Get TargetMessagePreview value
     * @return string|null
     */
    public function getTargetMessagePreview(): ?string
    {
        return $this->TargetMessagePreview;
    }
    /**
     * Set TargetMessagePreview value
     * @param string $targetMessagePreview
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setTargetMessagePreview(?string $targetMessagePreview = null): self
    {
        // validation for constraint: string
        if (!is_null($targetMessagePreview) && !is_string($targetMessagePreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMessagePreview, true), gettype($targetMessagePreview)), __LINE__);
        }
        $this->TargetMessagePreview = $targetMessagePreview;
        
        return $this;
    }
    /**
     * Get UnseenItemIDs value
     * @return \ArrayType\EwsArrayOfItemIdsType|null
     */
    public function getUnseenItemIDs(): ?\ArrayType\EwsArrayOfItemIdsType
    {
        return $this->UnseenItemIDs;
    }
    /**
     * Set UnseenItemIDs value
     * @param \ArrayType\EwsArrayOfItemIdsType $unseenItemIDs
     * @return \StructType\EwsSocialActivityAggregatedNotificationType
     */
    public function setUnseenItemIDs(?\ArrayType\EwsArrayOfItemIdsType $unseenItemIDs = null): self
    {
        $this->UnseenItemIDs = $unseenItemIDs;
        
        return $this;
    }
}
