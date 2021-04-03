<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEmailAddressType
     */
    protected \StructType\EwsEmailAddressType $ModernGroupEmailAddress;
    /**
     * The Items
     * @var \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAllItemsType $Items = null;
    /**
     * Constructor method for PostModernGroupItemType
     * @uses EwsPostModernGroupItemType::setModernGroupEmailAddress()
     * @uses EwsPostModernGroupItemType::setItems()
     * @param \StructType\EwsEmailAddressType $modernGroupEmailAddress
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $items
     */
    public function __construct(\StructType\EwsEmailAddressType $modernGroupEmailAddress, ?\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
    {
        $this
            ->setModernGroupEmailAddress($modernGroupEmailAddress)
            ->setItems($items);
    }
    /**
     * Get ModernGroupEmailAddress value
     * @return \StructType\EwsEmailAddressType
     */
    public function getModernGroupEmailAddress(): \StructType\EwsEmailAddressType
    {
        return $this->ModernGroupEmailAddress;
    }
    /**
     * Set ModernGroupEmailAddress value
     * @param \StructType\EwsEmailAddressType $modernGroupEmailAddress
     * @return \StructType\EwsPostModernGroupItemType
     */
    public function setModernGroupEmailAddress(\StructType\EwsEmailAddressType $modernGroupEmailAddress): self
    {
        $this->ModernGroupEmailAddress = $modernGroupEmailAddress;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getItems(): ?\StructType\EwsNonEmptyArrayOfAllItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @return \StructType\EwsPostModernGroupItemType
     */
    public function setItems(?\StructType\EwsNonEmptyArrayOfAllItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
}
