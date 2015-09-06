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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The IncludesLastFolderInRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IncludesLastFolderInRange;
    /**
     * The Changes
     * Meta informations extracted from the WSDL
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
     * @param boolean $includesLastFolderInRange
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
        $this->SyncState = $syncState;
        return $this;
    }
    /**
     * Get IncludesLastFolderInRange value
     * @return boolean|null
     */
    public function getIncludesLastFolderInRange()
    {
        return $this->IncludesLastFolderInRange;
    }
    /**
     * Set IncludesLastFolderInRange value
     * @param boolean $includesLastFolderInRange
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public function setIncludesLastFolderInRange($includesLastFolderInRange = null)
    {
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
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
