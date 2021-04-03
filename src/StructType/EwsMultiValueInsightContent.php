<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiValueInsightContent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMultiValueInsightContent extends EwsInsightContent
{
    /**
     * The ItemList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfInsightValue $ItemList = null;
    /**
     * Constructor method for MultiValueInsightContent
     * @uses EwsMultiValueInsightContent::setItemList()
     * @param \ArrayType\EwsArrayOfInsightValue $itemList
     */
    public function __construct(?\ArrayType\EwsArrayOfInsightValue $itemList = null)
    {
        $this
            ->setItemList($itemList);
    }
    /**
     * Get ItemList value
     * @return \ArrayType\EwsArrayOfInsightValue|null
     */
    public function getItemList(): ?\ArrayType\EwsArrayOfInsightValue
    {
        return $this->ItemList;
    }
    /**
     * Set ItemList value
     * @param \ArrayType\EwsArrayOfInsightValue $itemList
     * @return \StructType\EwsMultiValueInsightContent
     */
    public function setItemList(?\ArrayType\EwsArrayOfInsightValue $itemList = null): self
    {
        $this->ItemList = $itemList;
        
        return $this;
    }
}
