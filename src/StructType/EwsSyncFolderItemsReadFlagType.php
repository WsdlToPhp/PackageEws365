<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The IsRead
     * @var bool|null
     */
    protected ?bool $IsRead = null;
    /**
     * Constructor method for SyncFolderItemsReadFlagType
     * @uses EwsSyncFolderItemsReadFlagType::setItemId()
     * @uses EwsSyncFolderItemsReadFlagType::setIsRead()
     * @param \StructType\EwsItemIdType $itemId
     * @param bool $isRead
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null, ?bool $isRead = null)
    {
        $this
            ->setItemId($itemId)
            ->setIsRead($isRead);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsSyncFolderItemsReadFlagType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool|null
     */
    public function getIsRead(): ?bool
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \StructType\EwsSyncFolderItemsReadFlagType
     */
    public function setIsRead(?bool $isRead = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRead) && !is_bool($isRead)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRead, true), gettype($isRead)), __LINE__);
        }
        $this->IsRead = $isRead;
        
        return $this;
    }
}
