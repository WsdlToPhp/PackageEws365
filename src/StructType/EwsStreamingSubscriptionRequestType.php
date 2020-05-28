<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
    /**
     * The EventTypes
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;
    /**
     * The SubscribeToAllFolders
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $SubscribeToAllFolders;
    /**
     * Constructor method for StreamingSubscriptionRequestType
     * @uses EwsStreamingSubscriptionRequestType::setFolderIds()
     * @uses EwsStreamingSubscriptionRequestType::setEventTypes()
     * @uses EwsStreamingSubscriptionRequestType::setSubscribeToAllFolders()
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @param bool $subscribeToAllFolders
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null, \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null, $subscribeToAllFolders = null)
    {
        $this
            ->setFolderIds($folderIds)
            ->setEventTypes($eventTypes)
            ->setSubscribeToAllFolders($subscribeToAllFolders);
    }
    /**
     * Get FolderIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFolderIds()
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @return \Ews\StructType\EwsStreamingSubscriptionRequestType
     */
    public function setFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this->FolderIds = $folderIds;
        return $this;
    }
    /**
     * Get EventTypes value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType|null
     */
    public function getEventTypes()
    {
        return $this->EventTypes;
    }
    /**
     * Set EventTypes value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @return \Ews\StructType\EwsStreamingSubscriptionRequestType
     */
    public function setEventTypes(\Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null)
    {
        $this->EventTypes = $eventTypes;
        return $this;
    }
    /**
     * Get SubscribeToAllFolders value
     * @return bool|null
     */
    public function getSubscribeToAllFolders()
    {
        return $this->SubscribeToAllFolders;
    }
    /**
     * Set SubscribeToAllFolders value
     * @param bool $subscribeToAllFolders
     * @return \Ews\StructType\EwsStreamingSubscriptionRequestType
     */
    public function setSubscribeToAllFolders($subscribeToAllFolders = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscribeToAllFolders) && !is_bool($subscribeToAllFolders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeToAllFolders, true), gettype($subscribeToAllFolders)), __LINE__);
        }
        $this->SubscribeToAllFolders = $subscribeToAllFolders;
        return $this;
    }
}
