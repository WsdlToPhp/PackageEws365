<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SyncState = null;
    /**
     * The IncludesLastFolderInRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludesLastFolderInRange = null;
    /**
     * The Changes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSyncFolderHierarchyChangesType|null
     */
    protected ?\StructType\EwsSyncFolderHierarchyChangesType $Changes = null;
    /**
     * Constructor method for SyncFolderHierarchyResponseMessageType
     * @uses EwsSyncFolderHierarchyResponseMessageType::setSyncState()
     * @uses EwsSyncFolderHierarchyResponseMessageType::setIncludesLastFolderInRange()
     * @uses EwsSyncFolderHierarchyResponseMessageType::setChanges()
     * @param string $syncState
     * @param bool $includesLastFolderInRange
     * @param \StructType\EwsSyncFolderHierarchyChangesType $changes
     */
    public function __construct(?string $syncState = null, ?bool $includesLastFolderInRange = null, ?\StructType\EwsSyncFolderHierarchyChangesType $changes = null)
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
    public function getSyncState(): ?string
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public function setSyncState(?string $syncState = null): self
    {
        // validation for constraint: string
        if (!is_null($syncState) && !is_string($syncState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($syncState, true), gettype($syncState)), __LINE__);
        }
        $this->SyncState = $syncState;
        
        return $this;
    }
    /**
     * Get IncludesLastFolderInRange value
     * @return bool|null
     */
    public function getIncludesLastFolderInRange(): ?bool
    {
        return $this->IncludesLastFolderInRange;
    }
    /**
     * Set IncludesLastFolderInRange value
     * @param bool $includesLastFolderInRange
     * @return \StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public function setIncludesLastFolderInRange(?bool $includesLastFolderInRange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includesLastFolderInRange) && !is_bool($includesLastFolderInRange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastFolderInRange, true), gettype($includesLastFolderInRange)), __LINE__);
        }
        $this->IncludesLastFolderInRange = $includesLastFolderInRange;
        
        return $this;
    }
    /**
     * Get Changes value
     * @return \StructType\EwsSyncFolderHierarchyChangesType|null
     */
    public function getChanges(): ?\StructType\EwsSyncFolderHierarchyChangesType
    {
        return $this->Changes;
    }
    /**
     * Set Changes value
     * @param \StructType\EwsSyncFolderHierarchyChangesType $changes
     * @return \StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public function setChanges(?\StructType\EwsSyncFolderHierarchyChangesType $changes = null): self
    {
        $this->Changes = $changes;
        
        return $this;
    }
}
