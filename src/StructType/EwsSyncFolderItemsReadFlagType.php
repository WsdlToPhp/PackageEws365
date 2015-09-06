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
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The IsRead
     * @var boolean
     */
    public $IsRead;
    /**
     * Constructor method for SyncFolderItemsReadFlagType
     * @uses EwsSyncFolderItemsReadFlagType::setItemId()
     * @uses EwsSyncFolderItemsReadFlagType::setIsRead()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param boolean $isRead
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
     * @return boolean|null
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param boolean $isRead
     * @return \Ews\StructType\EwsSyncFolderItemsReadFlagType
     */
    public function setIsRead($isRead = null)
    {
        $this->IsRead = $isRead;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderItemsReadFlagType
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
