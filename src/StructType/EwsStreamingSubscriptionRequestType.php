<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreamingSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStreamingSubscriptionRequestType extends AbstractStructBase
{
    /**
     * The FolderIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * The EventTypes
     * @var \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $EventTypes = null;
    /**
     * The SubscribeToAllFolders
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SubscribeToAllFolders = null;
    /**
     * Constructor method for StreamingSubscriptionRequestType
     * @uses EwsStreamingSubscriptionRequestType::setFolderIds()
     * @uses EwsStreamingSubscriptionRequestType::setEventTypes()
     * @uses EwsStreamingSubscriptionRequestType::setSubscribeToAllFolders()
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @param \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @param bool $subscribeToAllFolders
     */
    public function __construct(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null, ?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null, ?bool $subscribeToAllFolders = null)
    {
        $this
            ->setFolderIds($folderIds)
            ->setEventTypes($eventTypes)
            ->setSubscribeToAllFolders($subscribeToAllFolders);
    }
    /**
     * Get FolderIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFolderIds(): ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @return \StructType\EwsStreamingSubscriptionRequestType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
    /**
     * Get EventTypes value
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType|null
     */
    public function getEventTypes(): ?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
    {
        return $this->EventTypes;
    }
    /**
     * Set EventTypes value
     * @param \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @return \StructType\EwsStreamingSubscriptionRequestType
     */
    public function setEventTypes(?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null): self
    {
        $this->EventTypes = $eventTypes;
        
        return $this;
    }
    /**
     * Get SubscribeToAllFolders value
     * @return bool|null
     */
    public function getSubscribeToAllFolders(): ?bool
    {
        return $this->SubscribeToAllFolders;
    }
    /**
     * Set SubscribeToAllFolders value
     * @param bool $subscribeToAllFolders
     * @return \StructType\EwsStreamingSubscriptionRequestType
     */
    public function setSubscribeToAllFolders(?bool $subscribeToAllFolders = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribeToAllFolders) && !is_bool($subscribeToAllFolders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeToAllFolders, true), gettype($subscribeToAllFolders)), __LINE__);
        }
        $this->SubscribeToAllFolders = $subscribeToAllFolders;
        
        return $this;
    }
}
