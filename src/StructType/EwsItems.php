<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Items StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItems extends AbstractStructBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemType[]
     */
    public $Item;
    /**
     * Constructor method for Items
     * @uses EwsItems::setItem()
     * @param \Ews\StructType\EwsItemType[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \Ews\StructType\EwsItemType[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemType[] $item
     * @return \Ews\StructType\EwsItems
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $itemsItemItem) {
            // validation for constraint: itemType
            if (!$itemsItemItem instanceof \Ews\StructType\EwsItemType) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Ews\StructType\EwsItemType, "%s" given', is_object($itemsItemItem) ? get_class($itemsItemItem) : gettype($itemsItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemType $item
     * @return \Ews\StructType\EwsItems
     */
    public function addToItem(\Ews\StructType\EwsItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsItemType) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Ews\StructType\EwsItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsItems
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
