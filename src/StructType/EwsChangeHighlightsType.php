<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeHighlightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsChangeHighlightsType extends AbstractStructBase
{
    /**
     * The HasLocationChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasLocationChanged;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The HasStartTimeChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasStartTimeChanged;
    /**
     * The Start
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $Start;
    /**
     * The HasEndTimeChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasEndTimeChanged;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
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
     * @param boolean $hasLocationChanged
     * @param string $location
     * @param boolean $hasStartTimeChanged
     * @param dateTime $start
     * @param boolean $hasEndTimeChanged
     * @param dateTime $end
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
     * @return boolean|null
     */
    public function getHasLocationChanged()
    {
        return $this->HasLocationChanged;
    }
    /**
     * Set HasLocationChanged value
     * @param boolean $hasLocationChanged
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setHasLocationChanged($hasLocationChanged = null)
    {
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
        $this->Location = $location;
        return $this;
    }
    /**
     * Get HasStartTimeChanged value
     * @return boolean|null
     */
    public function getHasStartTimeChanged()
    {
        return $this->HasStartTimeChanged;
    }
    /**
     * Set HasStartTimeChanged value
     * @param boolean $hasStartTimeChanged
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setHasStartTimeChanged($hasStartTimeChanged = null)
    {
        $this->HasStartTimeChanged = $hasStartTimeChanged;
        return $this;
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
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setStart($start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get HasEndTimeChanged value
     * @return boolean|null
     */
    public function getHasEndTimeChanged()
    {
        return $this->HasEndTimeChanged;
    }
    /**
     * Set HasEndTimeChanged value
     * @param boolean $hasEndTimeChanged
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setHasEndTimeChanged($hasEndTimeChanged = null)
    {
        $this->HasEndTimeChanged = $hasEndTimeChanged;
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
     * @return \Ews\StructType\EwsChangeHighlightsType
     */
    public function setEnd($end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsChangeHighlightsType
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
