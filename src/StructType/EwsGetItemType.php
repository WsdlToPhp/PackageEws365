<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetItemType extends EwsBaseRequestType
{
    /**
     * The ItemShape
     * @var \Ews\StructType\EwsItemResponseShapeType
     */
    public $ItemShape;
    /**
     * The ItemIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * Constructor method for GetItemType
     * @uses EwsGetItemType::setItemShape()
     * @uses EwsGetItemType::setItemIds()
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     */
    public function __construct(\Ews\StructType\EwsItemResponseShapeType $itemShape = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this
            ->setItemShape($itemShape)
            ->setItemIds($itemIds);
    }
    /**
     * Get ItemShape value
     * @return \Ews\StructType\EwsItemResponseShapeType|null
     */
    public function getItemShape()
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @return \Ews\StructType\EwsGetItemType
     */
    public function setItemShape(\Ews\StructType\EwsItemResponseShapeType $itemShape = null)
    {
        $this->ItemShape = $itemShape;
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \Ews\StructType\EwsGetItemType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetItemType
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
