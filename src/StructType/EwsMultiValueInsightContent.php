<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfInsightValue
     */
    public $ItemList;
    /**
     * Constructor method for MultiValueInsightContent
     * @uses EwsMultiValueInsightContent::setItemList()
     * @param \Ews\ArrayType\EwsArrayOfInsightValue $itemList
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfInsightValue $itemList = null)
    {
        $this
            ->setItemList($itemList);
    }
    /**
     * Get ItemList value
     * @return \Ews\ArrayType\EwsArrayOfInsightValue|null
     */
    public function getItemList()
    {
        return $this->ItemList;
    }
    /**
     * Set ItemList value
     * @param \Ews\ArrayType\EwsArrayOfInsightValue $itemList
     * @return \Ews\StructType\EwsMultiValueInsightContent
     */
    public function setItemList(\Ews\ArrayType\EwsArrayOfInsightValue $itemList = null)
    {
        $this->ItemList = $itemList;
        return $this;
    }
}
