<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsFolderResponseShapeType
     */
    protected \StructType\EwsFolderResponseShapeType $FolderShape;
    /**
     * The SyncFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $SyncFolderId = null;
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SyncState = null;
    /**
     * Constructor method for SyncFolderHierarchyType
     * @uses EwsSyncFolderHierarchyType::setFolderShape()
     * @uses EwsSyncFolderHierarchyType::setSyncFolderId()
     * @uses EwsSyncFolderHierarchyType::setSyncState()
     * @param \StructType\EwsFolderResponseShapeType $folderShape
     * @param \StructType\EwsTargetFolderIdType $syncFolderId
     * @param string $syncState
     */
    public function __construct(\StructType\EwsFolderResponseShapeType $folderShape, ?\StructType\EwsTargetFolderIdType $syncFolderId = null, ?string $syncState = null)
    {
        $this
            ->setFolderShape($folderShape)
            ->setSyncFolderId($syncFolderId)
            ->setSyncState($syncState);
    }
    /**
     * Get FolderShape value
     * @return \StructType\EwsFolderResponseShapeType
     */
    public function getFolderShape(): \StructType\EwsFolderResponseShapeType
    {
        return $this->FolderShape;
    }
    /**
     * Set FolderShape value
     * @param \StructType\EwsFolderResponseShapeType $folderShape
     * @return \StructType\EwsSyncFolderHierarchyType
     */
    public function setFolderShape(\StructType\EwsFolderResponseShapeType $folderShape): self
    {
        $this->FolderShape = $folderShape;
        
        return $this;
    }
    /**
     * Get SyncFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getSyncFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->SyncFolderId;
    }
    /**
     * Set SyncFolderId value
     * @param \StructType\EwsTargetFolderIdType $syncFolderId
     * @return \StructType\EwsSyncFolderHierarchyType
     */
    public function setSyncFolderId(?\StructType\EwsTargetFolderIdType $syncFolderId = null): self
    {
        $this->SyncFolderId = $syncFolderId;
        
        return $this;
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
     * @return \StructType\EwsSyncFolderHierarchyType
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
}
