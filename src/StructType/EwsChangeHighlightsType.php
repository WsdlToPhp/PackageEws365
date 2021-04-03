<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeHighlightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsChangeHighlightsType extends AbstractStructBase
{
    /**
     * The HasLocationChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasLocationChanged = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The HasStartTimeChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasStartTimeChanged = null;
    /**
     * The Start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Start = null;
    /**
     * The HasEndTimeChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasEndTimeChanged = null;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $End = null;
    /**
     * Constructor method for ChangeHighlightsType
     * @uses EwsChangeHighlightsType::setHasLocationChanged()
     * @uses EwsChangeHighlightsType::setLocation()
     * @uses EwsChangeHighlightsType::setHasStartTimeChanged()
     * @uses EwsChangeHighlightsType::setStart()
     * @uses EwsChangeHighlightsType::setHasEndTimeChanged()
     * @uses EwsChangeHighlightsType::setEnd()
     * @param bool $hasLocationChanged
     * @param string $location
     * @param bool $hasStartTimeChanged
     * @param string $start
     * @param bool $hasEndTimeChanged
     * @param string $end
     */
    public function __construct(?bool $hasLocationChanged = null, ?string $location = null, ?bool $hasStartTimeChanged = null, ?string $start = null, ?bool $hasEndTimeChanged = null, ?string $end = null)
    {
        $this
            ->setHasLocationChanged($hasLocationChanged)
            ->setLocation($location)
            ->setHasStartTimeChanged($hasStartTimeChanged)
            ->setStart($start)
            ->setHasEndTimeChanged($hasEndTimeChanged)
            ->setEnd($end);
    }
    /**
     * Get HasLocationChanged value
     * @return bool|null
     */
    public function getHasLocationChanged(): ?bool
    {
        return $this->HasLocationChanged;
    }
    /**
     * Set HasLocationChanged value
     * @param bool $hasLocationChanged
     * @return \StructType\EwsChangeHighlightsType
     */
    public function setHasLocationChanged(?bool $hasLocationChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasLocationChanged) && !is_bool($hasLocationChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasLocationChanged, true), gettype($hasLocationChanged)), __LINE__);
        }
        $this->HasLocationChanged = $hasLocationChanged;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\EwsChangeHighlightsType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get HasStartTimeChanged value
     * @return bool|null
     */
    public function getHasStartTimeChanged(): ?bool
    {
        return $this->HasStartTimeChanged;
    }
    /**
     * Set HasStartTimeChanged value
     * @param bool $hasStartTimeChanged
     * @return \StructType\EwsChangeHighlightsType
     */
    public function setHasStartTimeChanged(?bool $hasStartTimeChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasStartTimeChanged) && !is_bool($hasStartTimeChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasStartTimeChanged, true), gettype($hasStartTimeChanged)), __LINE__);
        }
        $this->HasStartTimeChanged = $hasStartTimeChanged;
        
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \StructType\EwsChangeHighlightsType
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        
        return $this;
    }
    /**
     * Get HasEndTimeChanged value
     * @return bool|null
     */
    public function getHasEndTimeChanged(): ?bool
    {
        return $this->HasEndTimeChanged;
    }
    /**
     * Set HasEndTimeChanged value
     * @param bool $hasEndTimeChanged
     * @return \StructType\EwsChangeHighlightsType
     */
    public function setHasEndTimeChanged(?bool $hasEndTimeChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasEndTimeChanged) && !is_bool($hasEndTimeChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasEndTimeChanged, true), gettype($hasEndTimeChanged)), __LINE__);
        }
        $this->HasEndTimeChanged = $hasEndTimeChanged;
        
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \StructType\EwsChangeHighlightsType
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->End = $end;
        
        return $this;
    }
}
