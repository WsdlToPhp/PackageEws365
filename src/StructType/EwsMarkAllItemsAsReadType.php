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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ReadFlag;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readFlag, true), gettype($readFlag)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressReadReceipts, true), gettype($suppressReadReceipts)), __LINE__);
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
}
