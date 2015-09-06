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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType
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
