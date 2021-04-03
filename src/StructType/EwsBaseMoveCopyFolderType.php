<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMoveCopyFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseMoveCopyFolderType extends EwsBaseRequestType
{
    /**
     * The ToFolderId
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ToFolderId = null;
    /**
     * The FolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * Constructor method for BaseMoveCopyFolderType
     * @uses EwsBaseMoveCopyFolderType::setToFolderId()
     * @uses EwsBaseMoveCopyFolderType::setFolderIds()
     * @param \StructType\EwsTargetFolderIdType $toFolderId
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(?\StructType\EwsTargetFolderIdType $toFolderId = null, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setToFolderId($toFolderId)
            ->setFolderIds($folderIds);
    }
    /**
     * Get ToFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getToFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->ToFolderId;
    }
    /**
     * Set ToFolderId value
     * @param \StructType\EwsTargetFolderIdType $toFolderId
     * @return \StructType\EwsBaseMoveCopyFolderType
     */
    public function setToFolderId(?\StructType\EwsTargetFolderIdType $toFolderId = null): self
    {
        $this->ToFolderId = $toFolderId;
        
        return $this;
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
     * @return \StructType\EwsBaseMoveCopyFolderType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
}
