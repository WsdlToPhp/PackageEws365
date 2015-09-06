<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The CreatedTimeStamp
     * @var string
     */
    public $CreatedTimeStamp;
    /**
     * The Actor
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Actor;
    /**
     * The Target
     * @var \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public $Target;
    /**
     * The Metadata
     * @var \Ews\StructType\EwsSocialActivityMetadataType
     */
    public $Metadata;
    /**
     * The Action
     * @var string
     */
    public $Action;
    /**
     * The EventType
     * @var string
     */
    public $EventType;
    /**
     * Constructor method for NewSocialActivityAddedEventType
     * @uses EwsNewSocialActivityAddedEventType::setItemId()
     * @uses EwsNewSocialActivityAddedEventType::setCreatedTimeStamp()
     * @uses EwsNewSocialActivityAddedEventType::setActor()
     * @uses EwsNewSocialActivityAddedEventType::setTarget()
     * @uses EwsNewSocialActivityAddedEventType::setMetadata()
     * @uses EwsNewSocialActivityAddedEventType::setAction()
     * @uses EwsNewSocialActivityAddedEventType::setEventType()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $createdTimeStamp
     * @param \Ews\StructType\EwsPersonaType $actor
     * @param \Ews\StructType\EwsSocialActivityTargetDataType $target
     * @param \Ews\StructType\EwsSocialActivityMetadataType $metadata
     * @param string $action
     * @param string $eventType
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $createdTimeStamp = null, \Ews\StructType\EwsPersonaType $actor = null, \Ews\StructType\EwsSocialActivityTargetDataType $target = null, \Ews\StructType\EwsSocialActivityMetadataType $metadata = null, $action = null, $eventType = null)
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
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get CreatedTimeStamp value
     * @return string|null
     */
    public function getCreatedTimeStamp()
    {
        return $this->CreatedTimeStamp;
    }
    /**
     * Set CreatedTimeStamp value
     * @param string $createdTimeStamp
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setCreatedTimeStamp($createdTimeStamp = null)
    {
        $this->CreatedTimeStamp = $createdTimeStamp;
        return $this;
    }
    /**
     * Get Actor value
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function getActor()
    {
        return $this->Actor;
    }
    /**
     * Set Actor value
     * @param \Ews\StructType\EwsPersonaType $actor
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setActor(\Ews\StructType\EwsPersonaType $actor = null)
    {
        $this->Actor = $actor;
        return $this;
    }
    /**
     * Get Target value
     * @return \Ews\StructType\EwsSocialActivityTargetDataType|null
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param \Ews\StructType\EwsSocialActivityTargetDataType $target
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setTarget(\Ews\StructType\EwsSocialActivityTargetDataType $target = null)
    {
        $this->Target = $target;
        return $this;
    }
    /**
     * Get Metadata value
     * @return \Ews\StructType\EwsSocialActivityMetadataType|null
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }
    /**
     * Set Metadata value
     * @param \Ews\StructType\EwsSocialActivityMetadataType $metadata
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setMetadata(\Ews\StructType\EwsSocialActivityMetadataType $metadata = null)
    {
        $this->Metadata = $metadata;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid()
     * @uses \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues()
     * @param string $action
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setAction($action = null)
    {
        if (!\Ews\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param string $eventType
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public function setEventType($eventType = null)
    {
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType
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
