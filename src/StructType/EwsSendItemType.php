<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSendItemType extends EwsBaseRequestType
{
    /**
     * The SaveItemToFolder
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SaveItemToFolder;
    /**
     * The ItemIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The SavedItemFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $SavedItemFolderId;
    /**
     * Constructor method for SendItemType
     * @uses EwsSendItemType::setSaveItemToFolder()
     * @uses EwsSendItemType::setItemIds()
     * @uses EwsSendItemType::setSavedItemFolderId()
     * @param bool $saveItemToFolder
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId
     */
    public function __construct($saveItemToFolder = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId = null)
    {
        $this
            ->setSaveItemToFolder($saveItemToFolder)
            ->setItemIds($itemIds)
            ->setSavedItemFolderId($savedItemFolderId);
    }
    /**
     * Get SaveItemToFolder value
     * @return bool
     */
    public function getSaveItemToFolder()
    {
        return $this->SaveItemToFolder;
    }
    /**
     * Set SaveItemToFolder value
     * @param bool $saveItemToFolder
     * @return \Ews\StructType\EwsSendItemType
     */
    public function setSaveItemToFolder($saveItemToFolder = null)
    {
        // validation for constraint: boolean
        if (!is_null($saveItemToFolder) && !is_bool($saveItemToFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveItemToFolder, true), gettype($saveItemToFolder)), __LINE__);
        }
        $this->SaveItemToFolder = $saveItemToFolder;
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
     * @return \Ews\StructType\EwsSendItemType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Get SavedItemFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getSavedItemFolderId()
    {
        return $this->SavedItemFolderId;
    }
    /**
     * Set SavedItemFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId
     * @return \Ews\StructType\EwsSendItemType
     */
    public function setSavedItemFolderId(\Ews\StructType\EwsTargetFolderIdType $savedItemFolderId = null)
    {
        $this->SavedItemFolderId = $savedItemFolderId;
        return $this;
    }
}
