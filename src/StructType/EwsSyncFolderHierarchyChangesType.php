<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderHierarchyChangesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderHierarchyChangesType extends AbstractStructBase
{
    /**
     * The Create
     * @var \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;
    /**
     * The Update
     * @var \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;
    /**
     * The Delete
     * @var \Ews\StructType\EwsSyncFolderHierarchyDeleteType
     */
    public $Delete;
    /**
     * Constructor method for SyncFolderHierarchyChangesType
     * @uses EwsSyncFolderHierarchyChangesType::setCreate()
     * @uses EwsSyncFolderHierarchyChangesType::setUpdate()
     * @uses EwsSyncFolderHierarchyChangesType::setDelete()
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update
     * @param \Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete
     */
    public function __construct(\Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create = null, \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update = null, \Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete = null)
    {
        $this
            ->setCreate($create)
            ->setUpdate($update)
            ->setDelete($delete);
    }
    /**
     * Get Create value
     * @return \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType|null
     */
    public function getCreate()
    {
        return $this->Create;
    }
    /**
     * Set Create value
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public function setCreate(\Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create = null)
    {
        $this->Create = $create;
        return $this;
    }
    /**
     * Get Update value
     * @return \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType|null
     */
    public function getUpdate()
    {
        return $this->Update;
    }
    /**
     * Set Update value
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public function setUpdate(\Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update = null)
    {
        $this->Update = $update;
        return $this;
    }
    /**
     * Get Delete value
     * @return \Ews\StructType\EwsSyncFolderHierarchyDeleteType|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param \Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public function setDelete(\Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete = null)
    {
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
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
