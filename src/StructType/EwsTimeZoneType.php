<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $BaseOffset = null;
    /**
     * The Standard
     * @var \StructType\EwsTimeChangeType|null
     */
    protected ?\StructType\EwsTimeChangeType $Standard = null;
    /**
     * The Daylight
     * @var \StructType\EwsTimeChangeType|null
     */
    protected ?\StructType\EwsTimeChangeType $Daylight = null;
    /**
     * The TimeZoneName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TimeZoneName = null;
    /**
     * Constructor method for TimeZoneType
     * @uses EwsTimeZoneType::setBaseOffset()
     * @uses EwsTimeZoneType::setStandard()
     * @uses EwsTimeZoneType::setDaylight()
     * @uses EwsTimeZoneType::setTimeZoneName()
     * @param string $baseOffset
     * @param \StructType\EwsTimeChangeType $standard
     * @param \StructType\EwsTimeChangeType $daylight
     * @param string $timeZoneName
     */
    public function __construct(?string $baseOffset = null, ?\StructType\EwsTimeChangeType $standard = null, ?\StructType\EwsTimeChangeType $daylight = null, ?string $timeZoneName = null)
    {
        $this
            ->setBaseOffset($baseOffset)
            ->setStandard($standard)
            ->setDaylight($daylight)
            ->setTimeZoneName($timeZoneName);
    }
    /**
     * Get BaseOffset value
     * @return string|null
     */
    public function getBaseOffset(): ?string
    {
        return $this->BaseOffset;
    }
    /**
     * Set BaseOffset value
     * @param string $baseOffset
     * @return \StructType\EwsTimeZoneType
     */
    public function setBaseOffset(?string $baseOffset = null): self
    {
        // validation for constraint: string
        if (!is_null($baseOffset) && !is_string($baseOffset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseOffset, true), gettype($baseOffset)), __LINE__);
        }
        $this->BaseOffset = $baseOffset;
        
        return $this;
    }
    /**
     * Get Standard value
     * @return \StructType\EwsTimeChangeType|null
     */
    public function getStandard(): ?\StructType\EwsTimeChangeType
    {
        return $this->Standard;
    }
    /**
     * Set Standard value
     * @param \StructType\EwsTimeChangeType $standard
     * @return \StructType\EwsTimeZoneType
     */
    public function setStandard(?\StructType\EwsTimeChangeType $standard = null): self
    {
        $this->Standard = $standard;
        
        return $this;
    }
    /**
     * Get Daylight value
     * @return \StructType\EwsTimeChangeType|null
     */
    public function getDaylight(): ?\StructType\EwsTimeChangeType
    {
        return $this->Daylight;
    }
    /**
     * Set Daylight value
     * @param \StructType\EwsTimeChangeType $daylight
     * @return \StructType\EwsTimeZoneType
     */
    public function setDaylight(?\StructType\EwsTimeChangeType $daylight = null): self
    {
        $this->Daylight = $daylight;
        
        return $this;
    }
    /**
     * Get TimeZoneName value
     * @return string|null
     */
    public function getTimeZoneName(): ?string
    {
        return $this->TimeZoneName;
    }
    /**
     * Set TimeZoneName value
     * @param string $timeZoneName
     * @return \StructType\EwsTimeZoneType
     */
    public function setTimeZoneName(?string $timeZoneName = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZoneName) && !is_string($timeZoneName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZoneName, true), gettype($timeZoneName)), __LINE__);
        }
        $this->TimeZoneName = $timeZoneName;
        
        return $this;
    }
}
