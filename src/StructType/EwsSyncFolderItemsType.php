<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsType extends EwsBaseRequestType
{
    /**
     * The ItemShape
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemResponseShapeType
     */
    public $ItemShape;
    /**
     * The SyncFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $SyncFolderId;
    /**
     * The MaxChangesReturned
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - maxInclusive: 512
     * - minInclusive: 1
     * @var int
     */
    public $MaxChangesReturned;
    /**
     * The SyncState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The Ignore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBaseItemIdsType
     */
    public $Ignore;
    /**
     * The SyncScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncScope;
    /**
     * Constructor method for SyncFolderItemsType
     * @uses EwsSyncFolderItemsType::setItemShape()
     * @uses EwsSyncFolderItemsType::setSyncFolderId()
     * @uses EwsSyncFolderItemsType::setMaxChangesReturned()
     * @uses EwsSyncFolderItemsType::setSyncState()
     * @uses EwsSyncFolderItemsType::setIgnore()
     * @uses EwsSyncFolderItemsType::setSyncScope()
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @param \Ews\StructType\EwsTargetFolderIdType $syncFolderId
     * @param int $maxChangesReturned
     * @param string $syncState
     * @param \Ews\ArrayType\EwsArrayOfBaseItemIdsType $ignore
     * @param string $syncScope
     */
    public function __construct(\Ews\StructType\EwsItemResponseShapeType $itemShape = null, \Ews\StructType\EwsTargetFolderIdType $syncFolderId = null, $maxChangesReturned = null, $syncState = null, \Ews\ArrayType\EwsArrayOfBaseItemIdsType $ignore = null, $syncScope = null)
    {
        $this
            ->setItemShape($itemShape)
            ->setSyncFolderId($syncFolderId)
            ->setMaxChangesReturned($maxChangesReturned)
            ->setSyncState($syncState)
            ->setIgnore($ignore)
            ->setSyncScope($syncScope);
    }
    /**
     * Get ItemShape value
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function getItemShape()
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setItemShape(\Ews\StructType\EwsItemResponseShapeType $itemShape = null)
    {
        $this->ItemShape = $itemShape;
        return $this;
    }
    /**
     * Get SyncFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function getSyncFolderId()
    {
        return $this->SyncFolderId;
    }
    /**
     * Set SyncFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $syncFolderId
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setSyncFolderId(\Ews\StructType\EwsTargetFolderIdType $syncFolderId = null)
    {
        $this->SyncFolderId = $syncFolderId;
        return $this;
    }
    /**
     * Get MaxChangesReturned value
     * @return int
     */
    public function getMaxChangesReturned()
    {
        return $this->MaxChangesReturned;
    }
    /**
     * Set MaxChangesReturned value
     * @param int $maxChangesReturned
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setMaxChangesReturned($maxChangesReturned = null)
    {
        $this->MaxChangesReturned = $maxChangesReturned;
        return $this;
    }
    /**
     * Get SyncState value
     * @return string|null
     */
    public function getSyncState()
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setSyncState($syncState = null)
    {
        $this->SyncState = $syncState;
        return $this;
    }
    /**
     * Get Ignore value
     * @return \Ews\ArrayType\EwsArrayOfBaseItemIdsType|null
     */
    public function getIgnore()
    {
        return $this->Ignore;
    }
    /**
     * Set Ignore value
     * @param \Ews\ArrayType\EwsArrayOfBaseItemIdsType $ignore
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setIgnore(\Ews\ArrayType\EwsArrayOfBaseItemIdsType $ignore = null)
    {
        $this->Ignore = $ignore;
        return $this;
    }
    /**
     * Get SyncScope value
     * @return string|null
     */
    public function getSyncScope()
    {
        return $this->SyncScope;
    }
    /**
     * Set SyncScope value
     * @uses \Ews\EnumType\EwsSyncFolderItemsScopeType::valueIsValid()
     * @uses \Ews\EnumType\EwsSyncFolderItemsScopeType::getValidValues()
     * @param string $syncScope
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setSyncScope($syncScope = null)
    {
        if (!\Ews\EnumType\EwsSyncFolderItemsScopeType::valueIsValid($syncScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $syncScope, implode(', ', \Ews\EnumType\EwsSyncFolderItemsScopeType::getValidValues())), __LINE__);
        }
        $this->SyncScope = $syncScope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncFolderItemsType
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
