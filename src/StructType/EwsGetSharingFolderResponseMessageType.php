<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingFolderResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSharingFolderResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SharingFolderId
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $SharingFolderId = null;
    /**
     * Constructor method for GetSharingFolderResponseMessageType
     * @uses EwsGetSharingFolderResponseMessageType::setSharingFolderId()
     * @param \StructType\EwsFolderIdType $sharingFolderId
     */
    public function __construct(?\StructType\EwsFolderIdType $sharingFolderId = null)
    {
        $this
            ->setSharingFolderId($sharingFolderId);
    }
    /**
     * Get SharingFolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getSharingFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->SharingFolderId;
    }
    /**
     * Set SharingFolderId value
     * @param \StructType\EwsFolderIdType $sharingFolderId
     * @return \StructType\EwsGetSharingFolderResponseMessageType
     */
    public function setSharingFolderId(?\StructType\EwsFolderIdType $sharingFolderId = null): self
    {
        $this->SharingFolderId = $sharingFolderId;
        
        return $this;
    }
}
