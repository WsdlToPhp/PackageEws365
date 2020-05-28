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
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemResponseShapeType
     */
    public $ItemShape;
    /**
     * The SyncFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $SyncFolderId;
    /**
     * The MaxChangesReturned
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 512
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxChangesReturned;
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The Ignore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBaseItemIdsType
     */
    public $Ignore;
    /**
     * The SyncScope
     * Meta information extracted from the WSDL
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
        // validation for constraint: int
        if (!is_null($maxChangesReturned) && !(is_int($maxChangesReturned) || ctype_digit($maxChangesReturned))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxChangesReturned, true), gettype($maxChangesReturned)), __LINE__);
        }
        // validation for constraint: maxInclusive(512)
        if (!is_null($maxChangesReturned) && $maxChangesReturned > 512) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 512', var_export($maxChangesReturned, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($maxChangesReturned) && $maxChangesReturned < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($maxChangesReturned, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($syncState) && !is_string($syncState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($syncState, true), gettype($syncState)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $syncScope
     * @return \Ews\StructType\EwsSyncFolderItemsType
     */
    public function setSyncScope($syncScope = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSyncFolderItemsScopeType::valueIsValid($syncScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSyncFolderItemsScopeType', is_array($syncScope) ? implode(', ', $syncScope) : var_export($syncScope, true), implode(', ', \Ews\EnumType\EwsSyncFolderItemsScopeType::getValidValues())), __LINE__);
        }
        $this->SyncScope = $syncScope;
        return $this;
    }
}
