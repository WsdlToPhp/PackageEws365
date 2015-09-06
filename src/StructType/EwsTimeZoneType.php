<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeZoneType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeZoneType extends AbstractStructBase
{
    /**
     * The BaseOffset
     * @var duration
     */
    public $BaseOffset;
    /**
     * The Standard
     * @var \Ews\StructType\EwsTimeChangeType
     */
    public $Standard;
    /**
     * The Daylight
     * @var \Ews\StructType\EwsTimeChangeType
     */
    public $Daylight;
    /**
     * The TimeZoneName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TimeZoneName;
    /**
     * Constructor method for TimeZoneType
     * @uses EwsTimeZoneType::setBaseOffset()
     * @uses EwsTimeZoneType::setStandard()
     * @uses EwsTimeZoneType::setDaylight()
     * @uses EwsTimeZoneType::setTimeZoneName()
     * @param duration $baseOffset
     * @param \Ews\StructType\EwsTimeChangeType $standard
     * @param \Ews\StructType\EwsTimeChangeType $daylight
     * @param string $timeZoneName
     */
    public function __construct($baseOffset = null, \Ews\StructType\EwsTimeChangeType $standard = null, \Ews\StructType\EwsTimeChangeType $daylight = null, $timeZoneName = null)
    {
        $this
            ->setBaseOffset($baseOffset)
            ->setStandard($standard)
            ->setDaylight($daylight)
            ->setTimeZoneName($timeZoneName);
    }
    /**
     * Get BaseOffset value
     * @return duration|null
     */
    public function getBaseOffset()
    {
        return $this->BaseOffset;
    }
    /**
     * Set BaseOffset value
     * @param duration $baseOffset
     * @return \Ews\StructType\EwsTimeZoneType
     */
    public function setBaseOffset($baseOffset = null)
    {
        $this->BaseOffset = $baseOffset;
        return $this;
    }
    /**
     * Get Standard value
     * @return \Ews\StructType\EwsTimeChangeType|null
     */
    public function getStandard()
    {
        return $this->Standard;
    }
    /**
     * Set Standard value
     * @param \Ews\StructType\EwsTimeChangeType $standard
     * @return \Ews\StructType\EwsTimeZoneType
     */
    public function setStandard(\Ews\StructType\EwsTimeChangeType $standard = null)
    {
        $this->Standard = $standard;
        return $this;
    }
    /**
     * Get Daylight value
     * @return \Ews\StructType\EwsTimeChangeType|null
     */
    public function getDaylight()
    {
        return $this->Daylight;
    }
    /**
     * Set Daylight value
     * @param \Ews\StructType\EwsTimeChangeType $daylight
     * @return \Ews\StructType\EwsTimeZoneType
     */
    public function setDaylight(\Ews\StructType\EwsTimeChangeType $daylight = null)
    {
        $this->Daylight = $daylight;
        return $this;
    }
    /**
     * Get TimeZoneName value
     * @return string|null
     */
    public function getTimeZoneName()
    {
        return $this->TimeZoneName;
    }
    /**
     * Set TimeZoneName value
     * @param string $timeZoneName
     * @return \Ews\StructType\EwsTimeZoneType
     */
    public function setTimeZoneName($timeZoneName = null)
    {
        $this->TimeZoneName = $timeZoneName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTimeZoneType
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
