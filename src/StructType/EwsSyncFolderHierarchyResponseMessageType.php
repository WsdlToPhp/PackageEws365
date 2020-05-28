<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderHierarchyResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderHierarchyResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The IncludesLastFolderInRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludesLastFolderInRange;
    /**
     * The Changes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public $Changes;
    /**
     * Constructor method for SyncFolderHierarchyResponseMessageType
     * @uses EwsSyncFolderHierarchyResponseMessageType::setSyncState()
     * @uses EwsSyncFolderHierarchyResponseMessageType::setIncludesLastFolderInRange()
     * @uses EwsSyncFolderHierarchyResponseMessageType::setChanges()
     * @param string $syncState
     * @param bool $includesLastFolderInRange
     * @param \Ews\StructType\EwsSyncFolderHierarchyChangesType $changes
     */
    public function __construct($syncState = null, $includesLastFolderInRange = null, \Ews\StructType\EwsSyncFolderHierarchyChangesType $changes = null)
    {
        $this
            ->setSyncState($syncState)
            ->setIncludesLastFolderInRange($includesLastFolderInRange)
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
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
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
     * Get IncludesLastFolderInRange value
     * @return bool|null
     */
    public function getIncludesLastFolderInRange()
    {
        return $this->IncludesLastFolderInRange;
    }
    /**
     * Set IncludesLastFolderInRange value
     * @param bool $includesLastFolderInRange
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public function setIncludesLastFolderInRange($includesLastFolderInRange = null)
    {
        // validation for constraint: boolean
        if (!is_null($includesLastFolderInRange) && !is_bool($includesLastFolderInRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastFolderInRange, true), gettype($includesLastFolderInRange)), __LINE__);
        }
        $this->IncludesLastFolderInRange = $includesLastFolderInRange;
        return $this;
    }
    /**
     * Get Changes value
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType|null
     */
    public function getChanges()
    {
        return $this->Changes;
    }
    /**
     * Set Changes value
     * @param \Ews\StructType\EwsSyncFolderHierarchyChangesType $changes
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public function setChanges(\Ews\StructType\EwsSyncFolderHierarchyChangesType $changes = null)
    {
        $this->Changes = $changes;
        return $this;
    }
}
