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
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Start;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $End;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Count;
    /**
     * The CompareOriginalStartTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $CompareOriginalStartTime;
    /**
     * Constructor method for OccurrencesRangeType
     * @uses EwsOccurrencesRangeType::setStart()
     * @uses EwsOccurrencesRangeType::setEnd()
     * @uses EwsOccurrencesRangeType::setCount()
     * @uses EwsOccurrencesRangeType::setCompareOriginalStartTime()
     * @param string $start
     * @param string $end
     * @param int $count
     * @param bool $compareOriginalStartTime
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
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get CompareOriginalStartTime value
     * @return bool|null
     */
    public function getCompareOriginalStartTime()
    {
        return $this->CompareOriginalStartTime;
    }
    /**
     * Set CompareOriginalStartTime value
     * @param bool $compareOriginalStartTime
     * @return \Ews\StructType\EwsOccurrencesRangeType
     */
    public function setCompareOriginalStartTime($compareOriginalStartTime = null)
    {
        // validation for constraint: boolean
        if (!is_null($compareOriginalStartTime) && !is_bool($compareOriginalStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($compareOriginalStartTime, true), gettype($compareOriginalStartTime)), __LINE__);
        }
        $this->CompareOriginalStartTime = $compareOriginalStartTime;
        return $this;
    }
}
