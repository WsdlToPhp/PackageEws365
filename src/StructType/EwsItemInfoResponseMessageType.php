<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsArrayOfRealItemsType
     */
    public $Items;
    /**
     * Constructor method for ItemInfoResponseMessageType
     * @uses EwsItemInfoResponseMessageType::setItems()
     * @param \Ews\StructType\EwsArrayOfRealItemsType $items
     */
    public function __construct(\Ews\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \Ews\StructType\EwsArrayOfRealItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\StructType\EwsArrayOfRealItemsType $items
     * @return \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public function setItems(\Ews\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
}
