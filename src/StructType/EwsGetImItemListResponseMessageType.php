<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetImItemListResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetImItemListResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ImItemList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsImItemListType
     */
    public $ImItemList;
    /**
     * Constructor method for GetImItemListResponseMessageType
     * @uses EwsGetImItemListResponseMessageType::setImItemList()
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
     * @return \Ews\StructType\EwsGetImItemListResponseMessageType
     */
    public function setImItemList(\Ews\StructType\EwsImItemListType $imItemList = null)
    {
        $this->ImItemList = $imItemList;
        return $this;
    }
}
