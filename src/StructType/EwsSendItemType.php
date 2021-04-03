<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected bool $SaveItemToFolder;
    /**
     * The ItemIds
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds = null;
    /**
     * The SavedItemFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $SavedItemFolderId = null;
    /**
     * Constructor method for SendItemType
     * @uses EwsSendItemType::setSaveItemToFolder()
     * @uses EwsSendItemType::setItemIds()
     * @uses EwsSendItemType::setSavedItemFolderId()
     * @param bool $saveItemToFolder
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param \StructType\EwsTargetFolderIdType $savedItemFolderId
     */
    public function __construct(bool $saveItemToFolder, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, ?\StructType\EwsTargetFolderIdType $savedItemFolderId = null)
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
    public function getSaveItemToFolder(): bool
    {
        return $this->SaveItemToFolder;
    }
    /**
     * Set SaveItemToFolder value
     * @param bool $saveItemToFolder
     * @return \StructType\EwsSendItemType
     */
    public function setSaveItemToFolder(bool $saveItemToFolder): self
    {
        // validation for constraint: boolean
        if (!is_null($saveItemToFolder) && !is_bool($saveItemToFolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveItemToFolder, true), gettype($saveItemToFolder)), __LINE__);
        }
        $this->SaveItemToFolder = $saveItemToFolder;
        
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \StructType\EwsSendItemType
     */
    public function setItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
    /**
     * Get SavedItemFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getSavedItemFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->SavedItemFolderId;
    }
    /**
     * Set SavedItemFolderId value
     * @param \StructType\EwsTargetFolderIdType $savedItemFolderId
     * @return \StructType\EwsSendItemType
     */
    public function setSavedItemFolderId(?\StructType\EwsTargetFolderIdType $savedItemFolderId = null): self
    {
        $this->SavedItemFolderId = $savedItemFolderId;
        
        return $this;
    }
}
