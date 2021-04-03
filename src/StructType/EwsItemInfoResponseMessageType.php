<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemInfoResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemInfoResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Items
     * @var \StructType\EwsArrayOfRealItemsType|null
     */
    protected ?\StructType\EwsArrayOfRealItemsType $Items = null;
    /**
     * Constructor method for ItemInfoResponseMessageType
     * @uses EwsItemInfoResponseMessageType::setItems()
     * @param \StructType\EwsArrayOfRealItemsType $items
     */
    public function __construct(?\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \StructType\EwsArrayOfRealItemsType|null
     */
    public function getItems(): ?\StructType\EwsArrayOfRealItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \StructType\EwsArrayOfRealItemsType $items
     * @return \StructType\EwsItemInfoResponseMessageType
     */
    public function setItems(?\StructType\EwsArrayOfRealItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
}
