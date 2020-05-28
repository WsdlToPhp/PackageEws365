<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderInfoResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFolderInfoResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Folders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfFoldersType
     */
    public $Folders;
    /**
     * Constructor method for FolderInfoResponseMessageType
     * @uses EwsFolderInfoResponseMessageType::setFolders()
     * @param \Ews\StructType\EwsArrayOfFoldersType $folders
     */
    public function __construct(\Ews\StructType\EwsArrayOfFoldersType $folders = null)
    {
        $this
            ->setFolders($folders);
    }
    /**
     * Get Folders value
     * @return \Ews\StructType\EwsArrayOfFoldersType|null
     */
    public function getFolders()
    {
        return $this->Folders;
    }
    /**
     * Set Folders value
     * @param \Ews\StructType\EwsArrayOfFoldersType $folders
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public function setFolders(\Ews\StructType\EwsArrayOfFoldersType $folders = null)
    {
        $this->Folders = $folders;
        return $this;
    }
}
