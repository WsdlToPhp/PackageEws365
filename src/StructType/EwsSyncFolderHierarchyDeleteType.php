<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderHierarchyDeleteType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderHierarchyDeleteType extends AbstractStructBase
{
    /**
     * The FolderId
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * Constructor method for SyncFolderHierarchyDeleteType
     * @uses EwsSyncFolderHierarchyDeleteType::setFolderId()
     * @param \StructType\EwsFolderIdType $folderId
     */
    public function __construct(?\StructType\EwsFolderIdType $folderId = null)
    {
        $this
            ->setFolderId($folderId);
    }
    /**
     * Get FolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \StructType\EwsFolderIdType $folderId
     * @return \StructType\EwsSyncFolderHierarchyDeleteType
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        $this->FolderId = $folderId;
        
        return $this;
    }
}
