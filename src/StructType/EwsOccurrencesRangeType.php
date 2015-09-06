<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OccurrencesRangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOccurrencesRangeType extends AbstractStructBase
{
    /**
     * The Start
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var dateTime
     */
    public $Start;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var dateTime
     */
    public $End;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Count;
    /**
     * The CompareOriginalStartTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $CompareOriginalStartTime;
    /**
     * Constructor method for OccurrencesRangeType
     * @uses EwsOccurrencesRangeType::setStart()
     * @uses EwsOccurrencesRangeType::setEnd()
     * @uses EwsOccurrencesRangeType::setCount()
     * @uses EwsOccurrencesRangeType::setCompareOriginalStartTime()
     * @param dateTime $start
     * @param dateTime $end
     * @param int $count
     * @param boolean $compareOriginalStartTime
     */
    public function __construct($start = null, $end = null, $count = null, $compareOriginalStartTime = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setCount($count)
            ->setCompareOriginalStartTime($compareOriginalStartTime);
    }
    /**
     * Get Start value
     * @return dateTime|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param dateTime $start
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setStart($start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return dateTime|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param dateTime $end
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setEnd($end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setCount($count = null)
    {
        $this->Count = $count;
        return $this;
    }
    /**
     * Get CompareOriginalStartTime value
     * @return boolean|null
     */
    public function getCompareOriginalStartTime()
    {
        return $this->CompareOriginalStartTime;
    }
    /**
     * Set CompareOriginalStartTime value
     * @param boolean $compareOriginalStartTime
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setCompareOriginalStartTime($compareOriginalStartTime = null)
    {
        $this->CompareOriginalStartTime = $compareOriginalStartTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOccurrencesRangeType
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
