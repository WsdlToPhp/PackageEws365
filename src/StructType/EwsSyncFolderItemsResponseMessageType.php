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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The IncludesLastItemInRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludesLastItemInRange;
    /**
     * The Changes
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($syncState, true), gettype($syncState)), __LINE__);
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
        // validation for constraint: boolean
        if (!is_null($includesLastItemInRange) && !is_bool($includesLastItemInRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastItemInRange, true), gettype($includesLastItemInRange)), __LINE__);
        }
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
}
