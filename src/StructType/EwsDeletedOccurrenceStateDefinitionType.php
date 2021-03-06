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
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $OccurrenceDate;
    /**
     * The IsOccurrencePresent
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($occurrenceDate, true), gettype($occurrenceDate)), __LINE__);
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
        // validation for constraint: boolean
        if (!is_null($isOccurrencePresent) && !is_bool($isOccurrencePresent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOccurrencePresent, true), gettype($isOccurrencePresent)), __LINE__);
        }
        $this->IsOccurrencePresent = $isOccurrencePresent;
        return $this;
    }
}
