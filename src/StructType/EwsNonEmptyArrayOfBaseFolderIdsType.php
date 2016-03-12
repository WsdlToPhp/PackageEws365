<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfBaseFolderIdsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfBaseFolderIdsType extends AbstractStructBase
{
    /**
     * The FolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The DistinguishedFolderId
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * Constructor method for NonEmptyArrayOfBaseFolderIdsType
     * @uses EwsNonEmptyArrayOfBaseFolderIdsType::setFolderId()
     * @uses EwsNonEmptyArrayOfBaseFolderIdsType::setDistinguishedFolderId()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this
            ->setFolderId($folderId)
            ->setDistinguishedFolderId($distinguishedFolderId);
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public function setDistinguishedFolderId(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this->DistinguishedFolderId = $distinguishedFolderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
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
