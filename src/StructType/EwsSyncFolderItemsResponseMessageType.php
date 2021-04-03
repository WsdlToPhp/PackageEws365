<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SyncState = null;
    /**
     * The IncludesLastItemInRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludesLastItemInRange = null;
    /**
     * The Changes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSyncFolderItemsChangesType|null
     */
    protected ?\StructType\EwsSyncFolderItemsChangesType $Changes = null;
    /**
     * Constructor method for SyncFolderItemsResponseMessageType
     * @uses EwsSyncFolderItemsResponseMessageType::setSyncState()
     * @uses EwsSyncFolderItemsResponseMessageType::setIncludesLastItemInRange()
     * @uses EwsSyncFolderItemsResponseMessageType::setChanges()
     * @param string $syncState
     * @param bool $includesLastItemInRange
     * @param \StructType\EwsSyncFolderItemsChangesType $changes
     */
    public function __construct(?string $syncState = null, ?bool $includesLastItemInRange = null, ?\StructType\EwsSyncFolderItemsChangesType $changes = null)
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
    public function getSyncState(): ?string
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \StructType\EwsSyncFolderItemsResponseMessageType
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
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange(): ?bool
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \StructType\EwsSyncFolderItemsResponseMessageType
     */
    public function setIncludesLastItemInRange(?bool $includesLastItemInRange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includesLastItemInRange) && !is_bool($includesLastItemInRange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastItemInRange, true), gettype($includesLastItemInRange)), __LINE__);
        }
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        
        return $this;
    }
    /**
     * Get Changes value
     * @return \StructType\EwsSyncFolderItemsChangesType|null
     */
    public function getChanges(): ?\StructType\EwsSyncFolderItemsChangesType
    {
        return $this->Changes;
    }
    /**
     * Set Changes value
     * @param \StructType\EwsSyncFolderItemsChangesType $changes
     * @return \StructType\EwsSyncFolderItemsResponseMessageType
     */
    public function setChanges(?\StructType\EwsSyncFolderItemsChangesType $changes = null): self
    {
        $this->Changes = $changes;
        
        return $this;
    }
}
