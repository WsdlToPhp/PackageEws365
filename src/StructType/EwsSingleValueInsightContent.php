<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleValueInsightContent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSingleValueInsightContent extends EwsInsightContent
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsightValue
     */
    public $Item;
    /**
     * Constructor method for SingleValueInsightContent
     * @uses EwsSingleValueInsightContent::setItem()
     * @param \Ews\StructType\EwsInsightValue $item
     */
    public function __construct(\Ews\StructType\EwsInsightValue $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \Ews\StructType\EwsInsightValue|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \Ews\StructType\EwsInsightValue $item
     * @return \Ews\StructType\EwsSingleValueInsightContent
     */
    public function setItem(\Ews\StructType\EwsInsightValue $item = null)
    {
        $this->Item = $item;
        return $this;
    }
}
