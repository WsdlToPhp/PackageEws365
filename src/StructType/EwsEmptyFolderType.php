<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmptyFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmptyFolderType extends EwsBaseRequestType
{
    /**
     * The DeleteType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DeleteType;
    /**
     * The DeleteSubFolders
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DeleteSubFolders;
    /**
     * The FolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
    /**
     * Constructor method for EmptyFolderType
     * @uses EwsEmptyFolderType::setDeleteType()
     * @uses EwsEmptyFolderType::setDeleteSubFolders()
     * @uses EwsEmptyFolderType::setFolderIds()
     * @param string $deleteType
     * @param bool $deleteSubFolders
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct($deleteType = null, $deleteSubFolders = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setDeleteType($deleteType)
            ->setDeleteSubFolders($deleteSubFolders)
            ->setFolderIds($folderIds);
    }
    /**
     * Get DeleteType value
     * @return string
     */
    public function getDeleteType()
    {
        return $this->DeleteType;
    }
    /**
     * Set DeleteType value
     * @uses \Ews\EnumType\EwsDisposalType::valueIsValid()
     * @uses \Ews\EnumType\EwsDisposalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deleteType
     * @return \Ews\StructType\EwsEmptyFolderType
     */
    public function setDeleteType($deleteType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deleteType, implode(', ', \Ews\EnumType\EwsDisposalType::getValidValues())), __LINE__);
        }
        $this->DeleteType = $deleteType;
        return $this;
    }
    /**
     * Get DeleteSubFolders value
     * @return bool
     */
    public function getDeleteSubFolders()
    {
        return $this->DeleteSubFolders;
    }
    /**
     * Set DeleteSubFolders value
     * @param bool $deleteSubFolders
     * @return \Ews\StructType\EwsEmptyFolderType
     */
    public function setDeleteSubFolders($deleteSubFolders = null)
    {
        $this->DeleteSubFolders = $deleteSubFolders;
        return $this;
    }
    /**
     * Get FolderIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFolderIds()
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @return \Ews\StructType\EwsEmptyFolderType
     */
    public function setFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this->FolderIds = $folderIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEmptyFolderType
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
