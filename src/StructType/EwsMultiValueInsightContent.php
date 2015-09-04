<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiValueInsightContent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMultiValueInsightContent extends EwsInsightContent
{
    /**
     * The ItemList
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMultiValueInsightContent
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
