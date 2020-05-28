<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateFolderType extends EwsBaseRequestType
{
    /**
     * The ParentFolderId
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ParentFolderId;
    /**
     * The Folders
     * @var \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public $Folders;
    /**
     * Constructor method for CreateFolderType
     * @uses EwsCreateFolderType::setParentFolderId()
     * @uses EwsCreateFolderType::setFolders()
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfFoldersType $folders
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfFoldersType $folders = null)
    {
        $this
            ->setParentFolderId($parentFolderId)
            ->setFolders($folders);
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsCreateFolderType
     */
    public function setParentFolderId(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Get Folders value
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType|null
     */
    public function getFolders()
    {
        return $this->Folders;
    }
    /**
     * Set Folders value
     * @param \Ews\StructType\EwsNonEmptyArrayOfFoldersType $folders
     * @return \Ews\StructType\EwsCreateFolderType
     */
    public function setFolders(\Ews\StructType\EwsNonEmptyArrayOfFoldersType $folders = null)
    {
        $this->Folders = $folders;
        return $this;
    }
}
