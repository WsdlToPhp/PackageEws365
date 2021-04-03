<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsImItemListType|null
     */
    protected ?\StructType\EwsImItemListType $ImItemList = null;
    /**
     * Constructor method for GetImItemsResponseMessageType
     * @uses EwsGetImItemsResponseMessageType::setImItemList()
     * @param \StructType\EwsImItemListType $imItemList
     */
    public function __construct(?\StructType\EwsImItemListType $imItemList = null)
    {
        $this
            ->setImItemList($imItemList);
    }
    /**
     * Get ImItemList value
     * @return \StructType\EwsImItemListType|null
     */
    public function getImItemList(): ?\StructType\EwsImItemListType
    {
        return $this->ImItemList;
    }
    /**
     * Set ImItemList value
     * @param \StructType\EwsImItemListType $imItemList
     * @return \StructType\EwsGetImItemsResponseMessageType
     */
    public function setImItemList(?\StructType\EwsImItemListType $imItemList = null): self
    {
        $this->ImItemList = $imItemList;
        
        return $this;
    }
}
