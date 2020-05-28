<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArchiveItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArchiveItemType extends EwsBaseRequestType
{
    /**
     * The ArchiveSourceFolderId
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ArchiveSourceFolderId;
    /**
     * The ItemIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * Constructor method for ArchiveItemType
     * @uses EwsArchiveItemType::setArchiveSourceFolderId()
     * @uses EwsArchiveItemType::setItemIds()
     * @param \Ews\StructType\EwsTargetFolderIdType $archiveSourceFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $archiveSourceFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this
            ->setArchiveSourceFolderId($archiveSourceFolderId)
            ->setItemIds($itemIds);
    }
    /**
     * Get ArchiveSourceFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getArchiveSourceFolderId()
    {
        return $this->ArchiveSourceFolderId;
    }
    /**
     * Set ArchiveSourceFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $archiveSourceFolderId
     * @return \Ews\StructType\EwsArchiveItemType
     */
    public function setArchiveSourceFolderId(\Ews\StructType\EwsTargetFolderIdType $archiveSourceFolderId = null)
    {
        $this->ArchiveSourceFolderId = $archiveSourceFolderId;
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
     * @return \Ews\StructType\EwsArchiveItemType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
}
