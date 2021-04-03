<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetFolderType extends EwsBaseRequestType
{
    /**
     * The FolderShape
     * @var \StructType\EwsFolderResponseShapeType|null
     */
    protected ?\StructType\EwsFolderResponseShapeType $FolderShape = null;
    /**
     * The FolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * Constructor method for GetFolderType
     * @uses EwsGetFolderType::setFolderShape()
     * @uses EwsGetFolderType::setFolderIds()
     * @param \StructType\EwsFolderResponseShapeType $folderShape
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(?\StructType\EwsFolderResponseShapeType $folderShape = null, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setFolderShape($folderShape)
            ->setFolderIds($folderIds);
    }
    /**
     * Get FolderShape value
     * @return \StructType\EwsFolderResponseShapeType|null
     */
    public function getFolderShape(): ?\StructType\EwsFolderResponseShapeType
    {
        return $this->FolderShape;
    }
    /**
     * Set FolderShape value
     * @param \StructType\EwsFolderResponseShapeType $folderShape
     * @return \StructType\EwsGetFolderType
     */
    public function setFolderShape(?\StructType\EwsFolderResponseShapeType $folderShape = null): self
    {
        $this->FolderShape = $folderShape;
        
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
     * @return \StructType\EwsGetFolderType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
}
