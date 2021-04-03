<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected int $Bias;
    /**
     * The StandardTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsSerializableTimeZoneTime
     */
    protected \StructType\EwsSerializableTimeZoneTime $StandardTime;
    /**
     * The DaylightTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsSerializableTimeZoneTime
     */
    protected \StructType\EwsSerializableTimeZoneTime $DaylightTime;
    /**
     * Constructor method for SerializableTimeZone
     * @uses EwsSerializableTimeZone::setBias()
     * @uses EwsSerializableTimeZone::setStandardTime()
     * @uses EwsSerializableTimeZone::setDaylightTime()
     * @param int $bias
     * @param \StructType\EwsSerializableTimeZoneTime $standardTime
     * @param \StructType\EwsSerializableTimeZoneTime $daylightTime
     */
    public function __construct(int $bias, \StructType\EwsSerializableTimeZoneTime $standardTime, \StructType\EwsSerializableTimeZoneTime $daylightTime)
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
    public function getBias(): int
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param int $bias
     * @return \StructType\EwsSerializableTimeZone
     */
    public function setBias(int $bias): self
    {
        // validation for constraint: int
        if (!is_null($bias) && !(is_int($bias) || ctype_digit($bias))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bias, true), gettype($bias)), __LINE__);
        }
        $this->Bias = $bias;
        
        return $this;
    }
    /**
     * Get StandardTime value
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function getStandardTime(): \StructType\EwsSerializableTimeZoneTime
    {
        return $this->StandardTime;
    }
    /**
     * Set StandardTime value
     * @param \StructType\EwsSerializableTimeZoneTime $standardTime
     * @return \StructType\EwsSerializableTimeZone
     */
    public function setStandardTime(\StructType\EwsSerializableTimeZoneTime $standardTime): self
    {
        $this->StandardTime = $standardTime;
        
        return $this;
    }
    /**
     * Get DaylightTime value
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function getDaylightTime(): \StructType\EwsSerializableTimeZoneTime
    {
        return $this->DaylightTime;
    }
    /**
     * Set DaylightTime value
     * @param \StructType\EwsSerializableTimeZoneTime $daylightTime
     * @return \StructType\EwsSerializableTimeZone
     */
    public function setDaylightTime(\StructType\EwsSerializableTimeZoneTime $daylightTime): self
    {
        $this->DaylightTime = $daylightTime;
        
        return $this;
    }
}
