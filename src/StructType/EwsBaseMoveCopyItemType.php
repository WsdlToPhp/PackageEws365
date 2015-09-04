<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMoveCopyItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsBaseMoveCopyItemType extends EwsBaseRequestType
{
    /**
     * The ToFolderId
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ToFolderId;
    /**
     * The ItemIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The ReturnNewItemIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ReturnNewItemIds;
    /**
     * Constructor method for BaseMoveCopyItemType
     * @uses EwsBaseMoveCopyItemType::setToFolderId()
     * @uses EwsBaseMoveCopyItemType::setItemIds()
     * @uses EwsBaseMoveCopyItemType::setReturnNewItemIds()
     * @param \Ews\StructType\EwsTargetFolderIdType $toFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param boolean $returnNewItemIds
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $toFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, $returnNewItemIds = null)
    {
        $this
            ->setToFolderId($toFolderId)
            ->setItemIds($itemIds)
            ->setReturnNewItemIds($returnNewItemIds);
    }
    /**
     * Get ToFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getToFolderId()
    {
        return $this->ToFolderId;
    }
    /**
     * Set ToFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $toFolderId
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
     */
    public function setToFolderId(\Ews\StructType\EwsTargetFolderIdType $toFolderId = null)
    {
        $this->ToFolderId = $toFolderId;
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Get ReturnNewItemIds value
     * @return boolean|null
     */
    public function getReturnNewItemIds()
    {
        return $this->ReturnNewItemIds;
    }
    /**
     * Set ReturnNewItemIds value
     * @param boolean $returnNewItemIds
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
     */
    public function setReturnNewItemIds($returnNewItemIds = null)
    {
        $this->ReturnNewItemIds = $returnNewItemIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseMoveCopyItemType
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
