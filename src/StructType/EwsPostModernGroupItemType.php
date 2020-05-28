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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
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
}
