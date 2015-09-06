<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderHierarchyDeleteType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderHierarchyDeleteType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * Constructor method for SyncFolderHierarchyDeleteType
     * @uses EwsSyncFolderHierarchyDeleteType::setFolderId()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this
            ->setFolderId($folderId);
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsSyncFolderHierarchyDeleteType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderHierarchyDeleteType
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
