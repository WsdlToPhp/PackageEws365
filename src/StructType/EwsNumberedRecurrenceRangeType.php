<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberedRecurrenceRangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNumberedRecurrenceRangeType extends EwsRecurrenceRangeBaseType
{
    /**
     * The NumberOfOccurrences
     * @var int
     */
    public $NumberOfOccurrences;
    /**
     * Constructor method for NumberedRecurrenceRangeType
     * @uses EwsNumberedRecurrenceRangeType::setNumberOfOccurrences()
     * @param int $numberOfOccurrences
     */
    public function __construct($numberOfOccurrences = null)
    {
        $this
            ->setNumberOfOccurrences($numberOfOccurrences);
    }
    /**
     * Get NumberOfOccurrences value
     * @return int|null
     */
    public function getNumberOfOccurrences()
    {
        return $this->NumberOfOccurrences;
    }
    /**
     * Set NumberOfOccurrences value
     * @param int $numberOfOccurrences
     * @return \Ews\StructType\EwsNumberedRecurrenceRangeType
     */
    public function setNumberOfOccurrences($numberOfOccurrences = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfOccurrences) && !is_numeric($numberOfOccurrences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfOccurrences)), __LINE__);
        }
        $this->NumberOfOccurrences = $numberOfOccurrences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNumberedRecurrenceRangeType
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
