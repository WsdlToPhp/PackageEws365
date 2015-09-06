<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderChangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFolderChangeType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The DistinguishedFolderId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a distinguished folder
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * The Updates
     * @var \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
    /**
     * Constructor method for FolderChangeType
     * @uses EwsFolderChangeType::setFolderId()
     * @uses EwsFolderChangeType::setDistinguishedFolderId()
     * @uses EwsFolderChangeType::setUpdates()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType $updates
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType $updates = null)
    {
        $this
            ->setFolderId($folderId)
            ->setDistinguishedFolderId($distinguishedFolderId)
            ->setUpdates($updates);
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
     * @return \Ews\StructType\EwsFolderChangeType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get DistinguishedFolderId value
     * @return \Ews\StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId()
    {
        return $this->DistinguishedFolderId;
    }
    /**
     * Set DistinguishedFolderId value
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \Ews\StructType\EwsFolderChangeType
     */
    public function setDistinguishedFolderId(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this->DistinguishedFolderId = $distinguishedFolderId;
        return $this;
    }
    /**
     * Get Updates value
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType|null
     */
    public function getUpdates()
    {
        return $this->Updates;
    }
    /**
     * Set Updates value
     * @param \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType $updates
     * @return \Ews\StructType\EwsFolderChangeType
     */
    public function setUpdates(\Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType $updates = null)
    {
        $this->Updates = $updates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFolderChangeType
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
