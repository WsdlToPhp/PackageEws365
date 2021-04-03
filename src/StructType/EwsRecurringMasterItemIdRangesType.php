<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfOccurrenceRangesType|null
     */
    protected ?\ArrayType\EwsArrayOfOccurrenceRangesType $Ranges = null;
    /**
     * Constructor method for RecurringMasterItemIdRangesType
     * @uses EwsRecurringMasterItemIdRangesType::setRanges()
     * @param \ArrayType\EwsArrayOfOccurrenceRangesType $ranges
     */
    public function __construct(?\ArrayType\EwsArrayOfOccurrenceRangesType $ranges = null)
    {
        $this
            ->setRanges($ranges);
    }
    /**
     * Get Ranges value
     * @return \ArrayType\EwsArrayOfOccurrenceRangesType|null
     */
    public function getRanges(): ?\ArrayType\EwsArrayOfOccurrenceRangesType
    {
        return $this->Ranges;
    }
    /**
     * Set Ranges value
     * @param \ArrayType\EwsArrayOfOccurrenceRangesType $ranges
     * @return \StructType\EwsRecurringMasterItemIdRangesType
     */
    public function setRanges(?\ArrayType\EwsArrayOfOccurrenceRangesType $ranges = null): self
    {
        $this->Ranges = $ranges;
        
        return $this;
    }
}
