<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderItemsChangesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSyncFolderItemsChangesType extends AbstractStructBase
{
    /**
     * The Create
     * @var \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType
     */
    public $Create;
    /**
     * The Update
     * @var \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType
     */
    public $Update;
    /**
     * The Delete
     * @var \Ews\StructType\EwsSyncFolderItemsDeleteType
     */
    public $Delete;
    /**
     * The ReadFlagChange
     * @var \Ews\StructType\EwsSyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
    /**
     * Constructor method for SyncFolderItemsChangesType
     * @uses EwsSyncFolderItemsChangesType::setCreate()
     * @uses EwsSyncFolderItemsChangesType::setUpdate()
     * @uses EwsSyncFolderItemsChangesType::setDelete()
     * @uses EwsSyncFolderItemsChangesType::setReadFlagChange()
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update
     * @param \Ews\StructType\EwsSyncFolderItemsDeleteType $delete
     * @param \Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange
     */
    public function __construct(\Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create = null, \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update = null, \Ews\StructType\EwsSyncFolderItemsDeleteType $delete = null, \Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange = null)
    {
        $this
            ->setCreate($create)
            ->setUpdate($update)
            ->setDelete($delete)
            ->setReadFlagChange($readFlagChange);
    }
    /**
     * Get Create value
     * @return \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    public function getCreate()
    {
        return $this->Create;
    }
    /**
     * Set Create value
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setCreate(\Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create = null)
    {
        $this->Create = $create;
        return $this;
    }
    /**
     * Get Update value
     * @return \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    public function getUpdate()
    {
        return $this->Update;
    }
    /**
     * Set Update value
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setUpdate(\Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update = null)
    {
        $this->Update = $update;
        return $this;
    }
    /**
     * Get Delete value
     * @return \Ews\StructType\EwsSyncFolderItemsDeleteType|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param \Ews\StructType\EwsSyncFolderItemsDeleteType $delete
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setDelete(\Ews\StructType\EwsSyncFolderItemsDeleteType $delete = null)
    {
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get ReadFlagChange value
     * @return \Ews\StructType\EwsSyncFolderItemsReadFlagType|null
     */
    public function getReadFlagChange()
    {
        return $this->ReadFlagChange;
    }
    /**
     * Set ReadFlagChange value
     * @param \Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setReadFlagChange(\Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange = null)
    {
        $this->ReadFlagChange = $readFlagChange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
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
