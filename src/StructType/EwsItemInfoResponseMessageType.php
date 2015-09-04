<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemInfoResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsItemInfoResponseMessageType
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
