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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupIndex)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGroupedItemsType
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
