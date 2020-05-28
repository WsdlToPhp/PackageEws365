<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshSharingFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRefreshSharingFolderType extends EwsBaseRequestType
{
    /**
     * The SharingFolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $SharingFolderId;
    /**
     * Constructor method for RefreshSharingFolderType
     * @uses EwsRefreshSharingFolderType::setSharingFolderId()
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
     * @return \Ews\StructType\EwsRefreshSharingFolderType
     */
    public function setSharingFolderId(\Ews\StructType\EwsFolderIdType $sharingFolderId = null)
    {
        $this->SharingFolderId = $sharingFolderId;
        return $this;
    }
}
