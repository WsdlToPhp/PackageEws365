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
     * @var bool
     */
    public $ReadFlag;
    /**
     * The SuppressReadReceipts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
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
     * @param bool $readFlag
     * @param bool $suppressReadReceipts
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
     * @return bool
     */
    public function getReadFlag()
    {
        return $this->ReadFlag;
    }
    /**
     * Set ReadFlag value
     * @param bool $readFlag
     * @return \Ews\StructType\EwsMarkAllItemsAsReadType
     */
    public function setReadFlag($readFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($readFlag) && !is_bool($readFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($readFlag)), __LINE__);
        }
        $this->ReadFlag = $readFlag;
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return bool
     */
    public function getSuppressReadReceipts()
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \Ews\StructType\EwsMarkAllItemsAsReadType
     */
    public function setSuppressReadReceipts($suppressReadReceipts = null)
    {
        // validation for constraint: boolean
        if (!is_null($suppressReadReceipts) && !is_bool($suppressReadReceipts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suppressReadReceipts)), __LINE__);
        }
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
