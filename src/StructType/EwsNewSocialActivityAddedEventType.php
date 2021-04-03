<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewSocialActivityAddedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNewSocialActivityAddedEventType extends EwsSubscriptionLevelChannelEventType
{
    /**
     * The ItemId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The CreatedTimeStamp
     * @var string|null
     */
    protected ?string $CreatedTimeStamp = null;
    /**
     * The Actor
     * @var \StructType\EwsPersonaType|null
     */
    protected ?\StructType\EwsPersonaType $Actor = null;
    /**
     * The Target
     * @var \StructType\EwsSocialActivityTargetDataType|null
     */
    protected ?\StructType\EwsSocialActivityTargetDataType $Target = null;
    /**
     * The Metadata
     * @var \StructType\EwsSocialActivityMetadataType|null
     */
    protected ?\StructType\EwsSocialActivityMetadataType $Metadata = null;
    /**
     * The Action
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The EventType
     * @var string|null
     */
    protected ?string $EventType = null;
    /**
     * Constructor method for NewSocialActivityAddedEventType
     * @uses EwsNewSocialActivityAddedEventType::setItemId()
     * @uses EwsNewSocialActivityAddedEventType::setCreatedTimeStamp()
     * @uses EwsNewSocialActivityAddedEventType::setActor()
     * @uses EwsNewSocialActivityAddedEventType::setTarget()
     * @uses EwsNewSocialActivityAddedEventType::setMetadata()
     * @uses EwsNewSocialActivityAddedEventType::setAction()
     * @uses EwsNewSocialActivityAddedEventType::setEventType()
     * @param \StructType\EwsItemIdType $itemId
     * @param string $createdTimeStamp
     * @param \StructType\EwsPersonaType $actor
     * @param \StructType\EwsSocialActivityTargetDataType $target
     * @param \StructType\EwsSocialActivityMetadataType $metadata
     * @param string $action
     * @param string $eventType
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null, ?string $createdTimeStamp = null, ?\StructType\EwsPersonaType $actor = null, ?\StructType\EwsSocialActivityTargetDataType $target = null, ?\StructType\EwsSocialActivityMetadataType $metadata = null, ?string $action = null, ?string $eventType = null)
    {
        $this
            ->setItemId($itemId)
            ->setCreatedTimeStamp($createdTimeStamp)
            ->setActor($actor)
            ->setTarget($target)
            ->setMetadata($metadata)
            ->setAction($action)
            ->setEventType($eventType);
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
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get CreatedTimeStamp value
     * @return string|null
     */
    public function getCreatedTimeStamp(): ?string
    {
        return $this->CreatedTimeStamp;
    }
    /**
     * Set CreatedTimeStamp value
     * @param string $createdTimeStamp
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setCreatedTimeStamp(?string $createdTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($createdTimeStamp) && !is_string($createdTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdTimeStamp, true), gettype($createdTimeStamp)), __LINE__);
        }
        $this->CreatedTimeStamp = $createdTimeStamp;
        
        return $this;
    }
    /**
     * Get Actor value
     * @return \StructType\EwsPersonaType|null
     */
    public function getActor(): ?\StructType\EwsPersonaType
    {
        return $this->Actor;
    }
    /**
     * Set Actor value
     * @param \StructType\EwsPersonaType $actor
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setActor(?\StructType\EwsPersonaType $actor = null): self
    {
        $this->Actor = $actor;
        
        return $this;
    }
    /**
     * Get Target value
     * @return \StructType\EwsSocialActivityTargetDataType|null
     */
    public function getTarget(): ?\StructType\EwsSocialActivityTargetDataType
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param \StructType\EwsSocialActivityTargetDataType $target
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setTarget(?\StructType\EwsSocialActivityTargetDataType $target = null): self
    {
        $this->Target = $target;
        
        return $this;
    }
    /**
     * Get Metadata value
     * @return \StructType\EwsSocialActivityMetadataType|null
     */
    public function getMetadata(): ?\StructType\EwsSocialActivityMetadataType
    {
        return $this->Metadata;
    }
    /**
     * Set Metadata value
     * @param \StructType\EwsSocialActivityMetadataType $metadata
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setMetadata(?\StructType\EwsSocialActivityMetadataType $metadata = null): self
    {
        $this->Metadata = $metadata;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid()
     * @uses \EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUserSocialActivityActionTypeEnum', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param string $eventType
     * @return \StructType\EwsNewSocialActivityAddedEventType
     */
    public function setEventType(?string $eventType = null): self
    {
        // validation for constraint: string
        if (!is_null($eventType) && !is_string($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventType, true), gettype($eventType)), __LINE__);
        }
        $this->EventType = $eventType;
        
        return $this;
    }
}
