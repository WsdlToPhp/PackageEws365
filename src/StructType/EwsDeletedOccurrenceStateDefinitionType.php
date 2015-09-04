<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletedOccurrenceStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDeletedOccurrenceStateDefinitionType extends EwsBaseCalendarItemStateDefinitionType
{
    /**
     * The OccurrenceDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var dateTime
     */
    public $OccurrenceDate;
    /**
     * The IsOccurrencePresent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOccurrencePresent;
    /**
     * Constructor method for DeletedOccurrenceStateDefinitionType
     * @uses EwsDeletedOccurrenceStateDefinitionType::setOccurrenceDate()
     * @uses EwsDeletedOccurrenceStateDefinitionType::setIsOccurrencePresent()
     * @param dateTime $occurrenceDate
     * @param boolean $isOccurrencePresent
     */
    public function __construct($occurrenceDate = null, $isOccurrencePresent = null)
    {
        $this
            ->setOccurrenceDate($occurrenceDate)
            ->setIsOccurrencePresent($isOccurrencePresent);
    }
    /**
     * Get OccurrenceDate value
     * @return dateTime
     */
    public function getOccurrenceDate()
    {
        return $this->OccurrenceDate;
    }
    /**
     * Set OccurrenceDate value
     * @param dateTime $occurrenceDate
     * @return \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
     */
    public function setOccurrenceDate($occurrenceDate = null)
    {
        $this->OccurrenceDate = $occurrenceDate;
        return $this;
    }
    /**
     * Get IsOccurrencePresent value
     * @return boolean|null
     */
    public function getIsOccurrencePresent()
    {
        return $this->IsOccurrencePresent;
    }
    /**
     * Set IsOccurrencePresent value
     * @param boolean $isOccurrencePresent
     * @return \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
     */
    public function setIsOccurrencePresent($isOccurrencePresent = null)
    {
        $this->IsOccurrencePresent = $isOccurrencePresent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
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
