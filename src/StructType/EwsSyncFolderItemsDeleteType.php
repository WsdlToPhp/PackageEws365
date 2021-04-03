<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderItemsDeleteType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsDeleteType extends AbstractStructBase
{
    /**
     * The ItemId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * Constructor method for SyncFolderItemsDeleteType
     * @uses EwsSyncFolderItemsDeleteType::setItemId()
     * @param \StructType\EwsItemIdType $itemId
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null)
    {
        $this
            ->setItemId($itemId);
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
     * @return \StructType\EwsSyncFolderItemsDeleteType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
}
