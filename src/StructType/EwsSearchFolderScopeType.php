<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFolderScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchFolderScopeType extends AbstractStructBase
{
    /**
     * The FolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The WellKnownFolder
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $WellKnownFolder;
    /**
     * Constructor method for SearchFolderScopeType
     * @uses EwsSearchFolderScopeType::setFolderId()
     * @uses EwsSearchFolderScopeType::setWellKnownFolder()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder = null)
    {
        $this
            ->setFolderId($folderId)
            ->setWellKnownFolder($wellKnownFolder);
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsSearchFolderScopeType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get WellKnownFolder value
     * @return \Ews\StructType\EwsDistinguishedFolderIdType|null
     */
    public function getWellKnownFolder()
    {
        return $this->WellKnownFolder;
    }
    /**
     * Set WellKnownFolder value
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder
     * @return \Ews\StructType\EwsSearchFolderScopeType
     */
    public function setWellKnownFolder(\Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder = null)
    {
        $this->WellKnownFolder = $wellKnownFolder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchFolderScopeType
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
