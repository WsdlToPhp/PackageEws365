<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringTimeTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsRecurringTimeTransitionType extends EwsTransitionType
{
    /**
     * The TimeOffset
     * @var string
     */
    public $TimeOffset;
    /**
     * The Month
     * @var int
     */
    public $Month;
    /**
     * Constructor method for RecurringTimeTransitionType
     * @uses EwsRecurringTimeTransitionType::setTimeOffset()
     * @uses EwsRecurringTimeTransitionType::setMonth()
     * @param string $timeOffset
     * @param int $month
     */
    public function __construct($timeOffset = null, $month = null)
    {
        $this
            ->setTimeOffset($timeOffset)
            ->setMonth($month);
    }
    /**
     * Get TimeOffset value
     * @return string|null
     */
    public function getTimeOffset()
    {
        return $this->TimeOffset;
    }
    /**
     * Set TimeOffset value
     * @param string $timeOffset
     * @return \Ews\StructType\EwsRecurringTimeTransitionType
     */
    public function setTimeOffset($timeOffset = null)
    {
        // validation for constraint: string
        if (!is_null($timeOffset) && !is_string($timeOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeOffset, true), gettype($timeOffset)), __LINE__);
        }
        $this->TimeOffset = $timeOffset;
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \Ews\StructType\EwsRecurringTimeTransitionType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
}
