<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool
     */
    public $HasLocationChanged;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The HasStartTimeChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasStartTimeChanged;
    /**
     * The Start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Start;
    /**
     * The HasEndTimeChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasEndTimeChanged;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $End;
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
    public function __construct($hasLocationChanged = null, $location = null, $hasStartTimeChanged = null, $start = null, $hasEndTimeChanged = null, $end = null)
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
    public function getHasLocationChanged()
    {
        return $this->HasLocationChanged;
    }
    /**
     * Set HasLocationChanged value
     * @param bool $hasLocationChanged
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setHasLocationChanged($hasLocationChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasLocationChanged) && !is_bool($hasLocationChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasLocationChanged, true), gettype($hasLocationChanged)), __LINE__);
        }
        $this->HasLocationChanged = $hasLocationChanged;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get HasStartTimeChanged value
     * @return bool|null
     */
    public function getHasStartTimeChanged()
    {
        return $this->HasStartTimeChanged;
    }
    /**
     * Set HasStartTimeChanged value
     * @param bool $hasStartTimeChanged
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setHasStartTimeChanged($hasStartTimeChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasStartTimeChanged) && !is_bool($hasStartTimeChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasStartTimeChanged, true), gettype($hasStartTimeChanged)), __LINE__);
        }
        $this->HasStartTimeChanged = $hasStartTimeChanged;
        return $this;
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
     * @return \Ews\StructType\EwsChangeHighlightsType
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
     * Get HasEndTimeChanged value
     * @return bool|null
     */
    public function getHasEndTimeChanged()
    {
        return $this->HasEndTimeChanged;
    }
    /**
     * Set HasEndTimeChanged value
     * @param bool $hasEndTimeChanged
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setHasEndTimeChanged($hasEndTimeChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasEndTimeChanged) && !is_bool($hasEndTimeChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasEndTimeChanged, true), gettype($hasEndTimeChanged)), __LINE__);
        }
        $this->HasEndTimeChanged = $hasEndTimeChanged;
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
     * @return \Ews\StructType\EwsChangeHighlightsType
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
}
