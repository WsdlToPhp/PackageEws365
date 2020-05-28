<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsFolderResponseShapeType
     */
    public $FolderShape;
    /**
     * The FolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
    /**
     * Constructor method for GetFolderType
     * @uses EwsGetFolderType::setFolderShape()
     * @uses EwsGetFolderType::setFolderIds()
     * @param \Ews\StructType\EwsFolderResponseShapeType $folderShape
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(\Ews\StructType\EwsFolderResponseShapeType $folderShape = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setFolderShape($folderShape)
            ->setFolderIds($folderIds);
    }
    /**
     * Get FolderShape value
     * @return \Ews\StructType\EwsFolderResponseShapeType|null
     */
    public function getFolderShape()
    {
        return $this->FolderShape;
    }
    /**
     * Set FolderShape value
     * @param \Ews\StructType\EwsFolderResponseShapeType $folderShape
     * @return \Ews\StructType\EwsGetFolderType
     */
    public function setFolderShape(\Ews\StructType\EwsFolderResponseShapeType $folderShape = null)
    {
        $this->FolderShape = $folderShape;
        return $this;
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
     * @return \Ews\StructType\EwsGetFolderType
     */
    public function setFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this->FolderIds = $folderIds;
        return $this;
    }
}
