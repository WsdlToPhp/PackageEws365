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
}
