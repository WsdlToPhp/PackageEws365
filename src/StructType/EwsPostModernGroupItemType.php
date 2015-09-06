<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostModernGroupItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPostModernGroupItemType extends EwsBaseRequestType
{
    /**
     * The ModernGroupEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $ModernGroupEmailAddress;
    /**
     * The Items
     * @var \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public $Items;
    /**
     * Constructor method for PostModernGroupItemType
     * @uses EwsPostModernGroupItemType::setModernGroupEmailAddress()
     * @uses EwsPostModernGroupItemType::setItems()
     * @param \Ews\StructType\EwsEmailAddressType $modernGroupEmailAddress
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $modernGroupEmailAddress = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
    {
        $this
            ->setModernGroupEmailAddress($modernGroupEmailAddress)
            ->setItems($items);
    }
    /**
     * Get ModernGroupEmailAddress value
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function getModernGroupEmailAddress()
    {
        return $this->ModernGroupEmailAddress;
    }
    /**
     * Set ModernGroupEmailAddress value
     * @param \Ews\StructType\EwsEmailAddressType $modernGroupEmailAddress
     * @return \Ews\StructType\EwsPostModernGroupItemType
     */
    public function setModernGroupEmailAddress(\Ews\StructType\EwsEmailAddressType $modernGroupEmailAddress = null)
    {
        $this->ModernGroupEmailAddress = $modernGroupEmailAddress;
        return $this;
    }
    /**
     * Get Items value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @return \Ews\StructType\EwsPostModernGroupItemType
     */
    public function setItems(\Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
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
     * @return \Ews\StructType\EwsPostModernGroupItemType
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
