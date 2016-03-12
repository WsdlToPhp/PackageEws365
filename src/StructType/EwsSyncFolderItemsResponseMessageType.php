<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SyncState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The IncludesLastItemInRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludesLastItemInRange;
    /**
     * The Changes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public $Changes;
    /**
     * Constructor method for SyncFolderItemsResponseMessageType
     * @uses EwsSyncFolderItemsResponseMessageType::setSyncState()
     * @uses EwsSyncFolderItemsResponseMessageType::setIncludesLastItemInRange()
     * @uses EwsSyncFolderItemsResponseMessageType::setChanges()
     * @param string $syncState
     * @param bool $includesLastItemInRange
     * @param \Ews\StructType\EwsSyncFolderItemsChangesType $changes
     */
    public function __construct($syncState = null, $includesLastItemInRange = null, \Ews\StructType\EwsSyncFolderItemsChangesType $changes = null)
    {
        $this
            ->setSyncState($syncState)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setChanges($changes);
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
     * @return \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     */
    public function setSyncState($syncState = null)
    {
        // validation for constraint: string
        if (!is_null($syncState) && !is_string($syncState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($syncState)), __LINE__);
        }
        $this->SyncState = $syncState;
        return $this;
    }
    /**
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange()
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     */
    public function setIncludesLastItemInRange($includesLastItemInRange = null)
    {
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        return $this;
    }
    /**
     * Get Changes value
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType|null
     */
    public function getChanges()
    {
        return $this->Changes;
    }
    /**
     * Set Changes value
     * @param \Ews\StructType\EwsSyncFolderItemsChangesType $changes
     * @return \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     */
    public function setChanges(\Ews\StructType\EwsSyncFolderItemsChangesType $changes = null)
    {
        $this->Changes = $changes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderItemsResponseMessageType
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
