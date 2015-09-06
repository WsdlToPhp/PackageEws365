<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderHierarchyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderHierarchyType extends EwsBaseRequestType
{
    /**
     * The FolderShape
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsFolderResponseShapeType
     */
    public $FolderShape;
    /**
     * The SyncFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $SyncFolderId;
    /**
     * The SyncState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * Constructor method for SyncFolderHierarchyType
     * @uses EwsSyncFolderHierarchyType::setFolderShape()
     * @uses EwsSyncFolderHierarchyType::setSyncFolderId()
     * @uses EwsSyncFolderHierarchyType::setSyncState()
     * @param \Ews\StructType\EwsFolderResponseShapeType $folderShape
     * @param \Ews\StructType\EwsTargetFolderIdType $syncFolderId
     * @param string $syncState
     */
    public function __construct(\Ews\StructType\EwsFolderResponseShapeType $folderShape = null, \Ews\StructType\EwsTargetFolderIdType $syncFolderId = null, $syncState = null)
    {
        $this
            ->setFolderShape($folderShape)
            ->setSyncFolderId($syncFolderId)
            ->setSyncState($syncState);
    }
    /**
     * Get FolderShape value
     * @return \Ews\StructType\EwsFolderResponseShapeType
     */
    public function getFolderShape()
    {
        return $this->FolderShape;
    }
    /**
     * Set FolderShape value
     * @param \Ews\StructType\EwsFolderResponseShapeType $folderShape
     * @return \Ews\StructType\EwsSyncFolderHierarchyType
     */
    public function setFolderShape(\Ews\StructType\EwsFolderResponseShapeType $folderShape = null)
    {
        $this->FolderShape = $folderShape;
        return $this;
    }
    /**
     * Get SyncFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getSyncFolderId()
    {
        return $this->SyncFolderId;
    }
    /**
     * Set SyncFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $syncFolderId
     * @return \Ews\StructType\EwsSyncFolderHierarchyType
     */
    public function setSyncFolderId(\Ews\StructType\EwsTargetFolderIdType $syncFolderId = null)
    {
        $this->SyncFolderId = $syncFolderId;
        return $this;
    }
    /**
     * Get SyncState value
     * @return string|null
     */
    public function getSyncState()
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \Ews\StructType\EwsSyncFolderHierarchyType
     */
    public function setSyncState($syncState = null)
    {
        $this->SyncState = $syncState;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderHierarchyType
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
