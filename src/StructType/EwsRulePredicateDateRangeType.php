<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RulePredicateDateRangeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Date range type used for the WithinDateRange rule predicate.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRulePredicateDateRangeType extends AbstractStructBase
{
    /**
     * The StartDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $EndDateTime;
    /**
     * Constructor method for RulePredicateDateRangeType
     * @uses EwsRulePredicateDateRangeType::setStartDateTime()
     * @uses EwsRulePredicateDateRangeType::setEndDateTime()
     * @param dateTime $startDateTime
     * @param dateTime $endDateTime
     */
    public function __construct($startDateTime = null, $endDateTime = null)
    {
        $this
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime);
    }
    /**
     * Get StartDateTime value
     * @return dateTime|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param dateTime $startDateTime
     * @return \Ews\StructType\EwsRulePredicateDateRangeType
     */
    public function setStartDateTime($startDateTime = null)
    {
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return dateTime|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param dateTime $endDateTime
     * @return \Ews\StructType\EwsRulePredicateDateRangeType
     */
    public function setEndDateTime($endDateTime = null)
    {
        $this->EndDateTime = $endDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRulePredicateDateRangeType
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
