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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateFolderType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
