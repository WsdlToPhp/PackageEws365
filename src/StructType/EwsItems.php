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
     * @var \Ews\StructType\EwsItemType
     */
    public $Item;
    /**
     * Constructor method for Items
     * @uses EwsItems::setItem()
     * @param \Ews\StructType\EwsItemType $item
     */
    public function __construct(\Ews\StructType\EwsItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \Ews\StructType\EwsItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \Ews\StructType\EwsItemType $item
     * @return \Ews\StructType\EwsItems
     */
    public function setItem(\Ews\StructType\EwsItemType $item = null)
    {
        $this->Item = $item;
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
