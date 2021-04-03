<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ParentFolderId = null;
    /**
     * The Folders
     * @var \StructType\EwsNonEmptyArrayOfFoldersType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfFoldersType $Folders = null;
    /**
     * Constructor method for CreateFolderType
     * @uses EwsCreateFolderType::setParentFolderId()
     * @uses EwsCreateFolderType::setFolders()
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     * @param \StructType\EwsNonEmptyArrayOfFoldersType $folders
     */
    public function __construct(?\StructType\EwsTargetFolderIdType $parentFolderId = null, ?\StructType\EwsNonEmptyArrayOfFoldersType $folders = null)
    {
        $this
            ->setParentFolderId($parentFolderId)
            ->setFolders($folders);
    }
    /**
     * Get ParentFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getParentFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     * @return \StructType\EwsCreateFolderType
     */
    public function setParentFolderId(?\StructType\EwsTargetFolderIdType $parentFolderId = null): self
    {
        $this->ParentFolderId = $parentFolderId;
        
        return $this;
    }
    /**
     * Get Folders value
     * @return \StructType\EwsNonEmptyArrayOfFoldersType|null
     */
    public function getFolders(): ?\StructType\EwsNonEmptyArrayOfFoldersType
    {
        return $this->Folders;
    }
    /**
     * Set Folders value
     * @param \StructType\EwsNonEmptyArrayOfFoldersType $folders
     * @return \StructType\EwsCreateFolderType
     */
    public function setFolders(?\StructType\EwsNonEmptyArrayOfFoldersType $folders = null): self
    {
        $this->Folders = $folders;
        
        return $this;
    }
}
