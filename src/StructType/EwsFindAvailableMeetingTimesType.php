<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindAvailableMeetingTimesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindAvailableMeetingTimesType extends EwsBaseRequestType
{
    /**
     * The Attendees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $Attendees;
    /**
     * The SearchWindowStart
     * @var string
     */
    public $SearchWindowStart;
    /**
     * The SearchWindowDuration
     * @var int
     */
    public $SearchWindowDuration;
    /**
     * The MeetingDurationInMinutes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The MaxCandidates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxCandidates;
    /**
     * The ActivityDomain
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActivityDomain;
    /**
     * Constructor method for FindAvailableMeetingTimesType
     * @uses EwsFindAvailableMeetingTimesType::setAttendees()
     * @uses EwsFindAvailableMeetingTimesType::setSearchWindowStart()
     * @uses EwsFindAvailableMeetingTimesType::setSearchWindowDuration()
     * @uses EwsFindAvailableMeetingTimesType::setMeetingDurationInMinutes()
     * @uses EwsFindAvailableMeetingTimesType::setLocation()
     * @uses EwsFindAvailableMeetingTimesType::setMaxCandidates()
     * @uses EwsFindAvailableMeetingTimesType::setActivityDomain()
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $attendees
     * @param string $searchWindowStart
     * @param int $searchWindowDuration
     * @param int $meetingDurationInMinutes
     * @param string $location
     * @param int $maxCandidates
     * @param string $activityDomain
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfSmtpAddressType $attendees = null, $searchWindowStart = null, $searchWindowDuration = null, $meetingDurationInMinutes = null, $location = null, $maxCandidates = null, $activityDomain = null)
    {
        $this
            ->setAttendees($attendees)
            ->setSearchWindowStart($searchWindowStart)
            ->setSearchWindowDuration($searchWindowDuration)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setLocation($location)
            ->setMaxCandidates($maxCandidates)
            ->setActivityDomain($activityDomain);
    }
    /**
     * Get Attendees value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getAttendees()
    {
        return $this->Attendees;
    }
    /**
     * Set Attendees value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $attendees
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
     */
    public function setAttendees(\Ews\ArrayType\EwsArrayOfSmtpAddressType $attendees = null)
    {
        $this->Attendees = $attendees;
        return $this;
    }
    /**
     * Get SearchWindowStart value
     * @return string|null
     */
    public function getSearchWindowStart()
    {
        return $this->SearchWindowStart;
    }
    /**
     * Set SearchWindowStart value
     * @param string $searchWindowStart
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
     */
    public function setSearchWindowStart($searchWindowStart = null)
    {
        // validation for constraint: string
        if (!is_null($searchWindowStart) && !is_string($searchWindowStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchWindowStart)), __LINE__);
        }
        $this->SearchWindowStart = $searchWindowStart;
        return $this;
    }
    /**
     * Get SearchWindowDuration value
     * @return int|null
     */
    public function getSearchWindowDuration()
    {
        return $this->SearchWindowDuration;
    }
    /**
     * Set SearchWindowDuration value
     * @param int $searchWindowDuration
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
     */
    public function setSearchWindowDuration($searchWindowDuration = null)
    {
        // validation for constraint: int
        if (!is_null($searchWindowDuration) && !is_numeric($searchWindowDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($searchWindowDuration)), __LINE__);
        }
        $this->SearchWindowDuration = $searchWindowDuration;
        return $this;
    }
    /**
     * Get MeetingDurationInMinutes value
     * @return int|null
     */
    public function getMeetingDurationInMinutes()
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
     */
    public function setMeetingDurationInMinutes($meetingDurationInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($meetingDurationInMinutes) && !is_numeric($meetingDurationInMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($meetingDurationInMinutes)), __LINE__);
        }
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
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
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
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
     * Get MaxCandidates value
     * @return int|null
     */
    public function getMaxCandidates()
    {
        return $this->MaxCandidates;
    }
    /**
     * Set MaxCandidates value
     * @param int $maxCandidates
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
     */
    public function setMaxCandidates($maxCandidates = null)
    {
        // validation for constraint: int
        if (!is_null($maxCandidates) && !is_numeric($maxCandidates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCandidates)), __LINE__);
        }
        $this->MaxCandidates = $maxCandidates;
        return $this;
    }
    /**
     * Get ActivityDomain value
     * @return string|null
     */
    public function getActivityDomain()
    {
        return $this->ActivityDomain;
    }
    /**
     * Set ActivityDomain value
     * @uses \Ews\EnumType\EwsActivityDomainType::valueIsValid()
     * @uses \Ews\EnumType\EwsActivityDomainType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $activityDomain
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
     */
    public function setActivityDomain($activityDomain = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsActivityDomainType::valueIsValid($activityDomain)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $activityDomain, implode(', ', \Ews\EnumType\EwsActivityDomainType::getValidValues())), __LINE__);
        }
        $this->ActivityDomain = $activityDomain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesType
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
