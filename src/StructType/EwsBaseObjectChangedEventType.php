<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseObjectChangedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseObjectChangedEventType extends EwsBaseNotificationEventType
{
    /**
     * The TimeStamp
     * @var string
     */
    public $TimeStamp;
    /**
     * The FolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The ItemId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The ParentFolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * Constructor method for BaseObjectChangedEventType
     * @uses EwsBaseObjectChangedEventType::setTimeStamp()
     * @uses EwsBaseObjectChangedEventType::setFolderId()
     * @uses EwsBaseObjectChangedEventType::setItemId()
     * @uses EwsBaseObjectChangedEventType::setParentFolderId()
     * @param string $timeStamp
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     */
    public function __construct($timeStamp = null, \Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setFolderId($folderId)
            ->setItemId($itemId)
            ->setParentFolderId($parentFolderId);
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
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
     * @return \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public function setParentFolderId(\Ews\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseObjectChangedEventType
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
