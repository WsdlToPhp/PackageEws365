<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MovedCopiedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMovedCopiedEventType extends EwsBaseObjectChangedEventType
{
    /**
     * The OldFolderId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $OldFolderId;
    /**
     * The OldItemId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $OldItemId;
    /**
     * The OldParentFolderId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $OldParentFolderId;
    /**
     * Constructor method for MovedCopiedEventType
     * @uses EwsMovedCopiedEventType::setOldFolderId()
     * @uses EwsMovedCopiedEventType::setOldItemId()
     * @uses EwsMovedCopiedEventType::setOldParentFolderId()
     * @param \Ews\StructType\EwsFolderIdType $oldFolderId
     * @param \Ews\StructType\EwsItemIdType $oldItemId
     * @param \Ews\StructType\EwsFolderIdType $oldParentFolderId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $oldFolderId = null, \Ews\StructType\EwsItemIdType $oldItemId = null, \Ews\StructType\EwsFolderIdType $oldParentFolderId = null)
    {
        $this
            ->setOldFolderId($oldFolderId)
            ->setOldItemId($oldItemId)
            ->setOldParentFolderId($oldParentFolderId);
    }
    /**
     * Get OldFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getOldFolderId()
    {
        return $this->OldFolderId;
    }
    /**
     * Set OldFolderId value
     * @param \Ews\StructType\EwsFolderIdType $oldFolderId
     * @return \Ews\StructType\EwsMovedCopiedEventType
     */
    public function setOldFolderId(\Ews\StructType\EwsFolderIdType $oldFolderId = null)
    {
        $this->OldFolderId = $oldFolderId;
        return $this;
    }
    /**
     * Get OldItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getOldItemId()
    {
        return $this->OldItemId;
    }
    /**
     * Set OldItemId value
     * @param \Ews\StructType\EwsItemIdType $oldItemId
     * @return \Ews\StructType\EwsMovedCopiedEventType
     */
    public function setOldItemId(\Ews\StructType\EwsItemIdType $oldItemId = null)
    {
        $this->OldItemId = $oldItemId;
        return $this;
    }
    /**
     * Get OldParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getOldParentFolderId()
    {
        return $this->OldParentFolderId;
    }
    /**
     * Set OldParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $oldParentFolderId
     * @return \Ews\StructType\EwsMovedCopiedEventType
     */
    public function setOldParentFolderId(\Ews\StructType\EwsFolderIdType $oldParentFolderId = null)
    {
        $this->OldParentFolderId = $oldParentFolderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMovedCopiedEventType
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
