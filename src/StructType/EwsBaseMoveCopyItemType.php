<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMoveCopyItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseMoveCopyItemType extends EwsBaseRequestType
{
    /**
     * The ToFolderId
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ToFolderId;
    /**
     * The ItemIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The ReturnNewItemIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnNewItemIds;
    /**
     * Constructor method for BaseMoveCopyItemType
     * @uses EwsBaseMoveCopyItemType::setToFolderId()
     * @uses EwsBaseMoveCopyItemType::setItemIds()
     * @uses EwsBaseMoveCopyItemType::setReturnNewItemIds()
     * @param \Ews\StructType\EwsTargetFolderIdType $toFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param bool $returnNewItemIds
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $toFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, $returnNewItemIds = null)
    {
        $this
            ->setToFolderId($toFolderId)
            ->setItemIds($itemIds)
            ->setReturnNewItemIds($returnNewItemIds);
    }
    /**
     * Get ToFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getToFolderId()
    {
        return $this->ToFolderId;
    }
    /**
     * Set ToFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $toFolderId
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
     */
    public function setToFolderId(\Ews\StructType\EwsTargetFolderIdType $toFolderId = null)
    {
        $this->ToFolderId = $toFolderId;
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
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Get ReturnNewItemIds value
     * @return bool|null
     */
    public function getReturnNewItemIds()
    {
        return $this->ReturnNewItemIds;
    }
    /**
     * Set ReturnNewItemIds value
     * @param bool $returnNewItemIds
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
     */
    public function setReturnNewItemIds($returnNewItemIds = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnNewItemIds) && !is_bool($returnNewItemIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnNewItemIds, true), gettype($returnNewItemIds)), __LINE__);
        }
        $this->ReturnNewItemIds = $returnNewItemIds;
        return $this;
    }
}
