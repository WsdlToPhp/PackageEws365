<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupedItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupedItemsType extends AbstractStructBase
{
    /**
     * The GroupIndex
     * @var string
     */
    public $GroupIndex;
    /**
     * The Items
     * @var \Ews\StructType\EwsArrayOfRealItemsType
     */
    public $Items;
    /**
     * Constructor method for GroupedItemsType
     * @uses EwsGroupedItemsType::setGroupIndex()
     * @uses EwsGroupedItemsType::setItems()
     * @param string $groupIndex
     * @param \Ews\StructType\EwsArrayOfRealItemsType $items
     */
    public function __construct($groupIndex = null, \Ews\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this
            ->setGroupIndex($groupIndex)
            ->setItems($items);
    }
    /**
     * Get GroupIndex value
     * @return string|null
     */
    public function getGroupIndex()
    {
        return $this->GroupIndex;
    }
    /**
     * Set GroupIndex value
     * @param string $groupIndex
     * @return \Ews\StructType\EwsGroupedItemsType
     */
    public function setGroupIndex($groupIndex = null)
    {
        // validation for constraint: string
        if (!is_null($groupIndex) && !is_string($groupIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupIndex, true), gettype($groupIndex)), __LINE__);
        }
        $this->GroupIndex = $groupIndex;
        return $this;
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
     * @return \Ews\StructType\EwsGroupedItemsType
     */
    public function setItems(\Ews\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
}
