<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleValueInsightContent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSingleValueInsightContent extends EwsInsightContent
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSingleValueInsightContent
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
