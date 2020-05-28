<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SerializableTimeZone StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSerializableTimeZone extends AbstractStructBase
{
    /**
     * The Bias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Bias;
    /**
     * The StandardTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public $StandardTime;
    /**
     * The DaylightTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public $DaylightTime;
    /**
     * Constructor method for SerializableTimeZone
     * @uses EwsSerializableTimeZone::setBias()
     * @uses EwsSerializableTimeZone::setStandardTime()
     * @uses EwsSerializableTimeZone::setDaylightTime()
     * @param int $bias
     * @param \Ews\StructType\EwsSerializableTimeZoneTime $standardTime
     * @param \Ews\StructType\EwsSerializableTimeZoneTime $daylightTime
     */
    public function __construct($bias = null, \Ews\StructType\EwsSerializableTimeZoneTime $standardTime = null, \Ews\StructType\EwsSerializableTimeZoneTime $daylightTime = null)
    {
        $this
            ->setBias($bias)
            ->setStandardTime($standardTime)
            ->setDaylightTime($daylightTime);
    }
    /**
     * Get Bias value
     * @return int
     */
    public function getBias()
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param int $bias
     * @return \Ews\StructType\EwsSerializableTimeZone
     */
    public function setBias($bias = null)
    {
        // validation for constraint: int
        if (!is_null($bias) && !(is_int($bias) || ctype_digit($bias))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bias, true), gettype($bias)), __LINE__);
        }
        $this->Bias = $bias;
        return $this;
    }
    /**
     * Get StandardTime value
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function getStandardTime()
    {
        return $this->StandardTime;
    }
    /**
     * Set StandardTime value
     * @param \Ews\StructType\EwsSerializableTimeZoneTime $standardTime
     * @return \Ews\StructType\EwsSerializableTimeZone
     */
    public function setStandardTime(\Ews\StructType\EwsSerializableTimeZoneTime $standardTime = null)
    {
        $this->StandardTime = $standardTime;
        return $this;
    }
    /**
     * Get DaylightTime value
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function getDaylightTime()
    {
        return $this->DaylightTime;
    }
    /**
     * Set DaylightTime value
     * @param \Ews\StructType\EwsSerializableTimeZoneTime $daylightTime
     * @return \Ews\StructType\EwsSerializableTimeZone
     */
    public function setDaylightTime(\Ews\StructType\EwsSerializableTimeZoneTime $daylightTime = null)
    {
        $this->DaylightTime = $daylightTime;
        return $this;
    }
}
