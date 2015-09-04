<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringMasterItemIdRangesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRecurringMasterItemIdRangesType extends EwsItemIdType
{
    /**
     * The Ranges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public $Ranges;
    /**
     * Constructor method for RecurringMasterItemIdRangesType
     * @uses EwsRecurringMasterItemIdRangesType::setRanges()
     * @param \Ews\ArrayType\EwsArrayOfOccurrenceRangesType $ranges
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfOccurrenceRangesType $ranges = null)
    {
        $this
            ->setRanges($ranges);
    }
    /**
     * Get Ranges value
     * @return \Ews\ArrayType\EwsArrayOfOccurrenceRangesType|null
     */
    public function getRanges()
    {
        return $this->Ranges;
    }
    /**
     * Set Ranges value
     * @param \Ews\ArrayType\EwsArrayOfOccurrenceRangesType $ranges
     * @return \Ews\StructType\EwsRecurringMasterItemIdRangesType
     */
    public function setRanges(\Ews\ArrayType\EwsArrayOfOccurrenceRangesType $ranges = null)
    {
        $this->Ranges = $ranges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecurringMasterItemIdRangesType
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
