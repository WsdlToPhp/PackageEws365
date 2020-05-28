<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ParentFolderId;
    /**
     * The RelativeFolderPath
     * @var \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public $RelativeFolderPath;
    /**
     * Constructor method for CreateFolderPathType
     * @uses EwsCreateFolderPathType::setParentFolderId()
     * @uses EwsCreateFolderPathType::setRelativeFolderPath()
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath = null)
    {
        $this
            ->setParentFolderId($parentFolderId)
            ->setRelativeFolderPath($relativeFolderPath);
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
     * @return \Ews\StructType\EwsCreateFolderPathType
     */
    public function setParentFolderId(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Get RelativeFolderPath value
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType|null
     */
    public function getRelativeFolderPath()
    {
        return $this->RelativeFolderPath;
    }
    /**
     * Set RelativeFolderPath value
     * @param \Ews\StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath
     * @return \Ews\StructType\EwsCreateFolderPathType
     */
    public function setRelativeFolderPath(\Ews\StructType\EwsNonEmptyArrayOfFoldersType $relativeFolderPath = null)
    {
        $this->RelativeFolderPath = $relativeFolderPath;
        return $this;
    }
}
