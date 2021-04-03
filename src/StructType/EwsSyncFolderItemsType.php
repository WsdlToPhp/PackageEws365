<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemResponseShapeType
     */
    protected \StructType\EwsItemResponseShapeType $ItemShape;
    /**
     * The SyncFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsTargetFolderIdType
     */
    protected \StructType\EwsTargetFolderIdType $SyncFolderId;
    /**
     * The MaxChangesReturned
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 512
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $MaxChangesReturned;
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SyncState = null;
    /**
     * The Ignore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfBaseItemIdsType|null
     */
    protected ?\ArrayType\EwsArrayOfBaseItemIdsType $Ignore = null;
    /**
     * The SyncScope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SyncScope = null;
    /**
     * Constructor method for SyncFolderItemsType
     * @uses EwsSyncFolderItemsType::setItemShape()
     * @uses EwsSyncFolderItemsType::setSyncFolderId()
     * @uses EwsSyncFolderItemsType::setMaxChangesReturned()
     * @uses EwsSyncFolderItemsType::setSyncState()
     * @uses EwsSyncFolderItemsType::setIgnore()
     * @uses EwsSyncFolderItemsType::setSyncScope()
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @param \StructType\EwsTargetFolderIdType $syncFolderId
     * @param int $maxChangesReturned
     * @param string $syncState
     * @param \ArrayType\EwsArrayOfBaseItemIdsType $ignore
     * @param string $syncScope
     */
    public function __construct(\StructType\EwsItemResponseShapeType $itemShape, \StructType\EwsTargetFolderIdType $syncFolderId, int $maxChangesReturned, ?string $syncState = null, ?\ArrayType\EwsArrayOfBaseItemIdsType $ignore = null, ?string $syncScope = null)
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
     * @return \StructType\EwsItemResponseShapeType
     */
    public function getItemShape(): \StructType\EwsItemResponseShapeType
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @return \StructType\EwsSyncFolderItemsType
     */
    public function setItemShape(\StructType\EwsItemResponseShapeType $itemShape): self
    {
        $this->ItemShape = $itemShape;
        
        return $this;
    }
    /**
     * Get SyncFolderId value
     * @return \StructType\EwsTargetFolderIdType
     */
    public function getSyncFolderId(): \StructType\EwsTargetFolderIdType
    {
        return $this->SyncFolderId;
    }
    /**
     * Set SyncFolderId value
     * @param \StructType\EwsTargetFolderIdType $syncFolderId
     * @return \StructType\EwsSyncFolderItemsType
     */
    public function setSyncFolderId(\StructType\EwsTargetFolderIdType $syncFolderId): self
    {
        $this->SyncFolderId = $syncFolderId;
        
        return $this;
    }
    /**
     * Get MaxChangesReturned value
     * @return int
     */
    public function getMaxChangesReturned(): int
    {
        return $this->MaxChangesReturned;
    }
    /**
     * Set MaxChangesReturned value
     * @param int $maxChangesReturned
     * @return \StructType\EwsSyncFolderItemsType
     */
    public function setMaxChangesReturned(int $maxChangesReturned): self
    {
        // validation for constraint: int
        if (!is_null($maxChangesReturned) && !(is_int($maxChangesReturned) || ctype_digit($maxChangesReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxChangesReturned, true), gettype($maxChangesReturned)), __LINE__);
        }
        // validation for constraint: maxInclusive(512)
        if (!is_null($maxChangesReturned) && $maxChangesReturned > 512) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 512', var_export($maxChangesReturned, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($maxChangesReturned) && $maxChangesReturned < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($maxChangesReturned, true)), __LINE__);
        }
        $this->MaxChangesReturned = $maxChangesReturned;
        
        return $this;
    }
    /**
     * Get SyncState value
     * @return string|null
     */
    public function getSyncState(): ?string
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \StructType\EwsSyncFolderItemsType
     */
    public function setSyncState(?string $syncState = null): self
    {
        // validation for constraint: string
        if (!is_null($syncState) && !is_string($syncState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($syncState, true), gettype($syncState)), __LINE__);
        }
        $this->SyncState = $syncState;
        
        return $this;
    }
    /**
     * Get Ignore value
     * @return \ArrayType\EwsArrayOfBaseItemIdsType|null
     */
    public function getIgnore(): ?\ArrayType\EwsArrayOfBaseItemIdsType
    {
        return $this->Ignore;
    }
    /**
     * Set Ignore value
     * @param \ArrayType\EwsArrayOfBaseItemIdsType $ignore
     * @return \StructType\EwsSyncFolderItemsType
     */
    public function setIgnore(?\ArrayType\EwsArrayOfBaseItemIdsType $ignore = null): self
    {
        $this->Ignore = $ignore;
        
        return $this;
    }
    /**
     * Get SyncScope value
     * @return string|null
     */
    public function getSyncScope(): ?string
    {
        return $this->SyncScope;
    }
    /**
     * Set SyncScope value
     * @uses \EnumType\EwsSyncFolderItemsScopeType::valueIsValid()
     * @uses \EnumType\EwsSyncFolderItemsScopeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $syncScope
     * @return \StructType\EwsSyncFolderItemsType
     */
    public function setSyncScope(?string $syncScope = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSyncFolderItemsScopeType::valueIsValid($syncScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSyncFolderItemsScopeType', is_array($syncScope) ? implode(', ', $syncScope) : var_export($syncScope, true), implode(', ', \EnumType\EwsSyncFolderItemsScopeType::getValidValues())), __LINE__);
        }
        $this->SyncScope = $syncScope;
        
        return $this;
    }
}
