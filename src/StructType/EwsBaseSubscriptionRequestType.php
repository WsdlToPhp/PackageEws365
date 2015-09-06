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
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var NonEmptyStringType
     */
    public $Watermark;
    /**
     * The SubscribeToAllFolders
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
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
     * @param NonEmptyStringType $watermark
     * @param boolean $subscribeToAllFolders
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null, \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null, NonEmptyStringType $watermark = null, $subscribeToAllFolders = null)
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
     * @return NonEmptyStringType|null
     */
    public function getWatermark()
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param NonEmptyStringType $watermark
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
     */
    public function setWatermark(NonEmptyStringType $watermark = null)
    {
        $this->Watermark = $watermark;
        return $this;
    }
    /**
     * Get SubscribeToAllFolders value
     * @return boolean|null
     */
    public function getSubscribeToAllFolders()
    {
        return $this->SubscribeToAllFolders;
    }
    /**
     * Set SubscribeToAllFolders value
     * @param boolean $subscribeToAllFolders
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
     */
    public function setSubscribeToAllFolders($subscribeToAllFolders = null)
    {
        $this->SubscribeToAllFolders = $subscribeToAllFolders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseSubscriptionRequestType
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
