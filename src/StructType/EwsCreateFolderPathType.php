<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateFolderPathType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateFolderPathType extends EwsBaseRequestType
{
    /**
     * The ParentFolderId
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ParentFolderId = null;
    /**
     * The RelativeFolderPath
     * @var \StructType\EwsNonEmptyArrayOfFoldersType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfFoldersType $RelativeFolderPath = null;
    /**
     * Constructor method for CreateFolderPathType
     * @uses EwsCreateFolderPathType::setParentFolderId()
     * @uses EwsCreateFolderPathType::setRelativeFolderPath()
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     * @param \StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath
     */
    public function __construct(?\StructType\EwsTargetFolderIdType $parentFolderId = null, ?\StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath = null)
    {
        $this
            ->setParentFolderId($parentFolderId)
            ->setRelativeFolderPath($relativeFolderPath);
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
     * @return \StructType\EwsCreateFolderPathType
     */
    public function setParentFolderId(?\StructType\EwsTargetFolderIdType $parentFolderId = null): self
    {
        $this->ParentFolderId = $parentFolderId;
        
        return $this;
    }
    /**
     * Get RelativeFolderPath value
     * @return \StructType\EwsNonEmptyArrayOfFoldersType|null
     */
    public function getRelativeFolderPath(): ?\StructType\EwsNonEmptyArrayOfFoldersType
    {
        return $this->RelativeFolderPath;
    }
    /**
     * Set RelativeFolderPath value
     * @param \StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath
     * @return \StructType\EwsCreateFolderPathType
     */
    public function setRelativeFolderPath(?\StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath = null): self
    {
        $this->RelativeFolderPath = $relativeFolderPath;
        
        return $this;
    }
}
