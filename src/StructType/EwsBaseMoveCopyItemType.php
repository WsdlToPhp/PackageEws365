<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMoveCopyItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseMoveCopyItemType extends EwsBaseRequestType
{
    /**
     * The ToFolderId
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ToFolderId = null;
    /**
     * The ItemIds
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds = null;
    /**
     * The ReturnNewItemIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReturnNewItemIds = null;
    /**
     * Constructor method for BaseMoveCopyItemType
     * @uses EwsBaseMoveCopyItemType::setToFolderId()
     * @uses EwsBaseMoveCopyItemType::setItemIds()
     * @uses EwsBaseMoveCopyItemType::setReturnNewItemIds()
     * @param \StructType\EwsTargetFolderIdType $toFolderId
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param bool $returnNewItemIds
     */
    public function __construct(?\StructType\EwsTargetFolderIdType $toFolderId = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, ?bool $returnNewItemIds = null)
    {
        $this
            ->setToFolderId($toFolderId)
            ->setItemIds($itemIds)
            ->setReturnNewItemIds($returnNewItemIds);
    }
    /**
     * Get ToFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getToFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->ToFolderId;
    }
    /**
     * Set ToFolderId value
     * @param \StructType\EwsTargetFolderIdType $toFolderId
     * @return \StructType\EwsBaseMoveCopyItemType
     */
    public function setToFolderId(?\StructType\EwsTargetFolderIdType $toFolderId = null): self
    {
        $this->ToFolderId = $toFolderId;
        
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \StructType\EwsBaseMoveCopyItemType
     */
    public function setItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
    /**
     * Get ReturnNewItemIds value
     * @return bool|null
     */
    public function getReturnNewItemIds(): ?bool
    {
        return $this->ReturnNewItemIds;
    }
    /**
     * Set ReturnNewItemIds value
     * @param bool $returnNewItemIds
     * @return \StructType\EwsBaseMoveCopyItemType
     */
    public function setReturnNewItemIds(?bool $returnNewItemIds = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnNewItemIds) && !is_bool($returnNewItemIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnNewItemIds, true), gettype($returnNewItemIds)), __LINE__);
        }
        $this->ReturnNewItemIds = $returnNewItemIds;
        
        return $this;
    }
}
