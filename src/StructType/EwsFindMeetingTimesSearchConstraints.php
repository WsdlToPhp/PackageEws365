<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesSearchConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimesSearchConstraints extends AbstractStructBase
{
    /**
     * The SearchWindows
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTimeSlot
     */
    public $SearchWindows;
    /**
     * The MeetingDurationInMinutes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The ActivityDomain
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActivityDomain;
    /**
     * Constructor method for FindMeetingTimesSearchConstraints
     * @uses EwsFindMeetingTimesSearchConstraints::setSearchWindows()
     * @uses EwsFindMeetingTimesSearchConstraints::setMeetingDurationInMinutes()
     * @uses EwsFindMeetingTimesSearchConstraints::setActivityDomain()
     * @param \Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows
     * @param int $meetingDurationInMinutes
     * @param string $activityDomain
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows = null, $meetingDurationInMinutes = null, $activityDomain = null)
    {
        $this
            ->setSearchWindows($searchWindows)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setActivityDomain($activityDomain);
    }
    /**
     * Get SearchWindows value
     * @return \Ews\ArrayType\EwsArrayOfTimeSlot|null
     */
    public function getSearchWindows()
    {
        return $this->SearchWindows;
    }
    /**
     * Set SearchWindows value
     * @param \Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
     */
    public function setSearchWindows(\Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows = null)
    {
        $this->SearchWindows = $searchWindows;
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
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
     */
    public function setMeetingDurationInMinutes($meetingDurationInMinutes = null)
    {
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
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
     * @param string $activityDomain
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
     */
    public function setActivityDomain($activityDomain = null)
    {
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
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
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
