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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateFolderPathType
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
