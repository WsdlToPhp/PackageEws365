<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdateFolderType extends EwsBaseRequestType
{
    /**
     * The FolderChanges
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
    /**
     * Constructor method for UpdateFolderType
     * @uses EwsUpdateFolderType::setFolderChanges()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges = null)
    {
        $this
            ->setFolderChanges($folderChanges);
    }
    /**
     * Get FolderChanges value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType|null
     */
    public function getFolderChanges()
    {
        return $this->FolderChanges;
    }
    /**
     * Set FolderChanges value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges
     * @return \Ews\StructType\EwsUpdateFolderType
     */
    public function setFolderChanges(\Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges = null)
    {
        $this->FolderChanges = $folderChanges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateFolderType
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
