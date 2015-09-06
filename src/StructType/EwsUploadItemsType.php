<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUploadItemsType extends EwsBaseRequestType
{
    /**
     * The Items
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfUploadItemsType
     */
    public $Items;
    /**
     * Constructor method for UploadItemsType
     * @uses EwsUploadItemsType::setItems()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfUploadItemsType $items
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfUploadItemsType $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUploadItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfUploadItemsType $items
     * @return \Ews\StructType\EwsUploadItemsType
     */
    public function setItems(\Ews\ArrayType\EwsNonEmptyArrayOfUploadItemsType $items = null)
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
     * @return \Ews\StructType\EwsUploadItemsType
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
