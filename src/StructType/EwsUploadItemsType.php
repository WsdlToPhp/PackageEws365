<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUploadItemsType extends EwsBaseRequestType
{
    /**
     * The Items
     * @var \ArrayType\EwsNonEmptyArrayOfUploadItemsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfUploadItemsType $Items = null;
    /**
     * Constructor method for UploadItemsType
     * @uses EwsUploadItemsType::setItems()
     * @param \ArrayType\EwsNonEmptyArrayOfUploadItemsType $items
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfUploadItemsType $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \ArrayType\EwsNonEmptyArrayOfUploadItemsType|null
     */
    public function getItems(): ?\ArrayType\EwsNonEmptyArrayOfUploadItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \ArrayType\EwsNonEmptyArrayOfUploadItemsType $items
     * @return \StructType\EwsUploadItemsType
     */
    public function setItems(?\ArrayType\EwsNonEmptyArrayOfUploadItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
}
