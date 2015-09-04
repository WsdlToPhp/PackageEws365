<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsExportItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Data;
    /**
     * Constructor method for ExportItemsResponseMessageType
     * @uses EwsExportItemsResponseMessageType::setItemId()
     * @uses EwsExportItemsResponseMessageType::setData()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param base64Binary $data
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, base64Binary $data = null)
    {
        $this
            ->setItemId($itemId)
            ->setData($data);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsExportItemsResponseMessageType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get Data value
     * @return base64Binary|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param base64Binary $data
     * @return \Ews\StructType\EwsExportItemsResponseMessageType
     */
    public function setData(base64Binary $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExportItemsResponseMessageType
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
