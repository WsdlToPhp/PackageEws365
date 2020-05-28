<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseSubscriptionRequestType extends AbstractStructBase
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
     * The Watermark
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Watermark;
    /**
     * The SubscribeToAllFolders
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $SubscribeToAllFolders;
    /**
     * Constructor method for BaseSubscriptionRequestType
     * @uses EwsBaseSubscriptionRequestType::setFolderIds()
     * @uses EwsBaseSubscriptionRequestType::setEventTypes()
     * @uses EwsBaseSubscriptionRequestType::setWatermark()
     * @uses EwsBaseSubscriptionRequestType::setSubscribeToAllFolders()
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @param string $watermark
     * @param bool $subscribeToAllFolders
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null, \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null, $watermark = null, $subscribeToAllFolders = null)
    {
        $this
            ->setFolderIds($folderIds)
            ->setEventTypes($eventTypes)
            ->setWatermark($watermark)
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
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
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
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
     */
    public function setEventTypes(\Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null)
    {
        $this->EventTypes = $eventTypes;
        return $this;
    }
    /**
     * Get Watermark value
     * @return string|null
     */
    public function getWatermark()
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param string $watermark
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
     */
    public function setWatermark($watermark = null)
    {
        // validation for constraint: string
        if (!is_null($watermark) && !is_string($watermark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watermark, true), gettype($watermark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($watermark) && mb_strlen($watermark) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($watermark)), __LINE__);
        }
        $this->Watermark = $watermark;
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
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
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
