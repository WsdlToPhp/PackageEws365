<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderItemsReadFlagType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsReadFlagType extends AbstractStructBase
{
    /**
     * The ItemId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The IsRead
     * @var bool
     */
    public $IsRead;
    /**
     * Constructor method for SyncFolderItemsReadFlagType
     * @uses EwsSyncFolderItemsReadFlagType::setItemId()
     * @uses EwsSyncFolderItemsReadFlagType::setIsRead()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param bool $isRead
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $isRead = null)
    {
        $this
            ->setItemId($itemId)
            ->setIsRead($isRead);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsSyncFolderItemsReadFlagType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool|null
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \Ews\StructType\EwsSyncFolderItemsReadFlagType
     */
    public function setIsRead($isRead = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRead) && !is_bool($isRead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRead, true), gettype($isRead)), __LINE__);
        }
        $this->IsRead = $isRead;
        return $this;
    }
}
