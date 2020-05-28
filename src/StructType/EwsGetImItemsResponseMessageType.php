<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetImItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetImItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ImItemList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsImItemListType
     */
    public $ImItemList;
    /**
     * Constructor method for GetImItemsResponseMessageType
     * @uses EwsGetImItemsResponseMessageType::setImItemList()
     * @param \Ews\StructType\EwsImItemListType $imItemList
     */
    public function __construct(\Ews\StructType\EwsImItemListType $imItemList = null)
    {
        $this
            ->setImItemList($imItemList);
    }
    /**
     * Get ImItemList value
     * @return \Ews\StructType\EwsImItemListType|null
     */
    public function getImItemList()
    {
        return $this->ImItemList;
    }
    /**
     * Set ImItemList value
     * @param \Ews\StructType\EwsImItemListType $imItemList
     * @return \Ews\StructType\EwsGetImItemsResponseMessageType
     */
    public function setImItemList(\Ews\StructType\EwsImItemListType $imItemList = null)
    {
        $this->ImItemList = $imItemList;
        return $this;
    }
}
