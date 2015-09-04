<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshSharingFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRefreshSharingFolderType extends EwsBaseRequestType
{
    /**
     * The SharingFolderId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved folder
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRefreshSharingFolderType
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
