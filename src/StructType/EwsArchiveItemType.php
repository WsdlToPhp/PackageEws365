<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ArchiveSourceFolderId = null;
    /**
     * The ItemIds
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds = null;
    /**
     * Constructor method for ArchiveItemType
     * @uses EwsArchiveItemType::setArchiveSourceFolderId()
     * @uses EwsArchiveItemType::setItemIds()
     * @param \StructType\EwsTargetFolderIdType $archiveSourceFolderId
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     */
    public function __construct(?\StructType\EwsTargetFolderIdType $archiveSourceFolderId = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this
            ->setArchiveSourceFolderId($archiveSourceFolderId)
            ->setItemIds($itemIds);
    }
    /**
     * Get ArchiveSourceFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getArchiveSourceFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->ArchiveSourceFolderId;
    }
    /**
     * Set ArchiveSourceFolderId value
     * @param \StructType\EwsTargetFolderIdType $archiveSourceFolderId
     * @return \StructType\EwsArchiveItemType
     */
    public function setArchiveSourceFolderId(?\StructType\EwsTargetFolderIdType $archiveSourceFolderId = null): self
    {
        $this->ArchiveSourceFolderId = $archiveSourceFolderId;
        
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
     * @return \StructType\EwsArchiveItemType
     */
    public function setItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
}
