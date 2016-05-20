<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingInsightValue extends EwsInsightValue
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The StartUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StartUtcTicks;
    /**
     * The EndUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $EndUtcTicks;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Organizer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsProfileInsightValue
     */
    public $Organizer;
    /**
     * The Attendees
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfProfileInsightValue
     */
    public $Attendees;
    /**
     * Constructor method for MeetingInsightValue
     * @uses EwsMeetingInsightValue::setId()
     * @uses EwsMeetingInsightValue::setSubject()
     * @uses EwsMeetingInsightValue::setStartUtcTicks()
     * @uses EwsMeetingInsightValue::setEndUtcTicks()
     * @uses EwsMeetingInsightValue::setLocation()
     * @uses EwsMeetingInsightValue::setOrganizer()
     * @uses EwsMeetingInsightValue::setAttendees()
     * @param string $id
     * @param string $subject
     * @param int $startUtcTicks
     * @param int $endUtcTicks
     * @param string $location
     * @param \Ews\StructType\EwsProfileInsightValue $organizer
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $attendees
     */
    public function __construct($id = null, $subject = null, $startUtcTicks = null, $endUtcTicks = null, $location = null, \Ews\StructType\EwsProfileInsightValue $organizer = null, \Ews\ArrayType\EwsArrayOfProfileInsightValue $attendees = null)
    {
        $this
            ->setId($id)
            ->setSubject($subject)
            ->setStartUtcTicks($startUtcTicks)
            ->setEndUtcTicks($endUtcTicks)
            ->setLocation($location)
            ->setOrganizer($organizer)
            ->setAttendees($attendees);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return int|null
     */
    public function getStartUtcTicks()
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param int $startUtcTicks
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setStartUtcTicks($startUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($startUtcTicks) && !is_numeric($startUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startUtcTicks)), __LINE__);
        }
        $this->StartUtcTicks = $startUtcTicks;
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return int|null
     */
    public function getEndUtcTicks()
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param int $endUtcTicks
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setEndUtcTicks($endUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($endUtcTicks) && !is_numeric($endUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endUtcTicks)), __LINE__);
        }
        $this->EndUtcTicks = $endUtcTicks;
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
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Organizer value
     * @return \Ews\StructType\EwsProfileInsightValue|null
     */
    public function getOrganizer()
    {
        return $this->Organizer;
    }
    /**
     * Set Organizer value
     * @param \Ews\StructType\EwsProfileInsightValue $organizer
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setOrganizer(\Ews\StructType\EwsProfileInsightValue $organizer = null)
    {
        $this->Organizer = $organizer;
        return $this;
    }
    /**
     * Get Attendees value
     * @return \Ews\ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getAttendees()
    {
        return $this->Attendees;
    }
    /**
     * Set Attendees value
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $attendees
     * @return \Ews\StructType\EwsMeetingInsightValue
     */
    public function setAttendees(\Ews\ArrayType\EwsArrayOfProfileInsightValue $attendees = null)
    {
        $this->Attendees = $attendees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingInsightValue
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
