<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $SharingFolderId;
    /**
     * Constructor method for GetSharingFolderResponseMessageType
     * @uses EwsGetSharingFolderResponseMessageType::setSharingFolderId()
     * @param \Ews\StructType\EwsFolderIdType $sharingFolderId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $sharingFolderId = null)
    {
        $this
            ->setSharingFolderId($sharingFolderId);
    }
    /**
     * Get SharingFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getSharingFolderId()
    {
        return $this->SharingFolderId;
    }
    /**
     * Set SharingFolderId value
     * @param \Ews\StructType\EwsFolderIdType $sharingFolderId
     * @return \Ews\StructType\EwsGetSharingFolderResponseMessageType
     */
    public function setSharingFolderId(\Ews\StructType\EwsFolderIdType $sharingFolderId = null)
    {
        $this->SharingFolderId = $sharingFolderId;
        return $this;
    }
}
