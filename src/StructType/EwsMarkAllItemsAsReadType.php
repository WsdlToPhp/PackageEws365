<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkAllItemsAsReadType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMarkAllItemsAsReadType extends EwsBaseRequestType
{
    /**
     * The ReadFlag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $ReadFlag;
    /**
     * The SuppressReadReceipts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $SuppressReadReceipts;
    /**
     * The FolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
    /**
     * Constructor method for MarkAllItemsAsReadType
     * @uses EwsMarkAllItemsAsReadType::setReadFlag()
     * @uses EwsMarkAllItemsAsReadType::setSuppressReadReceipts()
     * @uses EwsMarkAllItemsAsReadType::setFolderIds()
     * @param boolean $readFlag
     * @param boolean $suppressReadReceipts
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct($readFlag = null, $suppressReadReceipts = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setReadFlag($readFlag)
            ->setSuppressReadReceipts($suppressReadReceipts)
            ->setFolderIds($folderIds);
    }
    /**
     * Get ReadFlag value
     * @return boolean
     */
    public function getReadFlag()
    {
        return $this->ReadFlag;
    }
    /**
     * Set ReadFlag value
     * @param boolean $readFlag
     * @return \Ews\StructType\EwsMarkAllItemsAsReadType
     */
    public function setReadFlag($readFlag = null)
    {
        $this->ReadFlag = $readFlag;
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return boolean
     */
    public function getSuppressReadReceipts()
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param boolean $suppressReadReceipts
     * @return \Ews\StructType\EwsMarkAllItemsAsReadType
     */
    public function setSuppressReadReceipts($suppressReadReceipts = null)
    {
        $this->SuppressReadReceipts = $suppressReadReceipts;
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
     * @return \Ews\StructType\EwsMarkAllItemsAsReadType
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
     * @return \Ews\StructType\EwsMarkAllItemsAsReadType
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
