<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringMasterItemIdRangesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurringMasterItemIdRangesType extends EwsItemIdType
{
    /**
     * The Ranges
     * Meta information extracted from the WSDL
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
}
