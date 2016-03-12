<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletedOccurrenceStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeletedOccurrenceStateDefinitionType extends EwsBaseCalendarItemStateDefinitionType
{
    /**
     * The OccurrenceDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $OccurrenceDate;
    /**
     * The IsOccurrencePresent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOccurrencePresent;
    /**
     * Constructor method for DeletedOccurrenceStateDefinitionType
     * @uses EwsDeletedOccurrenceStateDefinitionType::setOccurrenceDate()
     * @uses EwsDeletedOccurrenceStateDefinitionType::setIsOccurrencePresent()
     * @param string $occurrenceDate
     * @param bool $isOccurrencePresent
     */
    public function __construct($occurrenceDate = null, $isOccurrencePresent = null)
    {
        $this
            ->setOccurrenceDate($occurrenceDate)
            ->setIsOccurrencePresent($isOccurrencePresent);
    }
    /**
     * Get OccurrenceDate value
     * @return string
     */
    public function getOccurrenceDate()
    {
        return $this->OccurrenceDate;
    }
    /**
     * Set OccurrenceDate value
     * @param string $occurrenceDate
     * @return \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
     */
    public function setOccurrenceDate($occurrenceDate = null)
    {
        // validation for constraint: string
        if (!is_null($occurrenceDate) && !is_string($occurrenceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($occurrenceDate)), __LINE__);
        }
        $this->OccurrenceDate = $occurrenceDate;
        return $this;
    }
    /**
     * Get IsOccurrencePresent value
     * @return bool|null
     */
    public function getIsOccurrencePresent()
    {
        return $this->IsOccurrencePresent;
    }
    /**
     * Set IsOccurrencePresent value
     * @param bool $isOccurrencePresent
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
