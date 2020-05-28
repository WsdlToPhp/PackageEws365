<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
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
}
