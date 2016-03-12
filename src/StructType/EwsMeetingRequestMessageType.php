<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRequestMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingRequestMessageType extends EwsMeetingMessageType
{
    /**
     * The MeetingRequestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MeetingRequestType;
    /**
     * The IntendedFreeBusyStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IntendedFreeBusyStatus;
    /**
     * The Start
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Start;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $End;
    /**
     * The OriginalStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalStart;
    /**
     * The IsAllDayEvent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAllDayEvent;
    /**
     * The LegacyFreeBusyStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegacyFreeBusyStatus;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The When
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $When;
    /**
     * The IsMeeting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMeeting;
    /**
     * The IsCancelled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCancelled;
    /**
     * The IsRecurring
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRecurring;
    /**
     * The MeetingRequestWasSent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MeetingRequestWasSent;
    /**
     * The CalendarItemType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalendarItemType;
    /**
     * The MyResponseType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MyResponseType;
    /**
     * The Organizer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $Organizer;
    /**
     * The RequiredAttendees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public $RequiredAttendees;
    /**
     * The OptionalAttendees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public $OptionalAttendees;
    /**
     * The Resources
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public $Resources;
    /**
     * The ConflictingMeetingCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ConflictingMeetingCount;
    /**
     * The AdjacentMeetingCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AdjacentMeetingCount;
    /**
     * The ConflictingMeetings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public $ConflictingMeetings;
    /**
     * The AdjacentMeetings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public $AdjacentMeetings;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The TimeZone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TimeZone;
    /**
     * The AppointmentReplyTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppointmentReplyTime;
    /**
     * The AppointmentSequenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AppointmentSequenceNumber;
    /**
     * The AppointmentState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AppointmentState;
    /**
     * The Recurrence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRecurrenceType
     */
    public $Recurrence;
    /**
     * The FirstOccurrence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOccurrenceInfoType
     */
    public $FirstOccurrence;
    /**
     * The LastOccurrence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOccurrenceInfoType
     */
    public $LastOccurrence;
    /**
     * The ModifiedOccurrences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public $ModifiedOccurrences;
    /**
     * The DeletedOccurrences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     */
    public $DeletedOccurrences;
    /**
     * The MeetingTimeZone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTimeZoneType
     */
    public $MeetingTimeZone;
    /**
     * The StartTimeZone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public $StartTimeZone;
    /**
     * The EndTimeZone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public $EndTimeZone;
    /**
     * The ConferenceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ConferenceType;
    /**
     * The AllowNewTimeProposal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowNewTimeProposal;
    /**
     * The IsOnlineMeeting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOnlineMeeting;
    /**
     * The MeetingWorkspaceUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MeetingWorkspaceUrl;
    /**
     * The NetShowUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NetShowUrl;
    /**
     * The EnhancedLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEnhancedLocationType
     */
    public $EnhancedLocation;
    /**
     * The ChangeHighlights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsChangeHighlightsType
     */
    public $ChangeHighlights;
    /**
     * The StartWallClock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartWallClock;
    /**
     * The EndWallClock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndWallClock;
    /**
     * The StartTimeZoneId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartTimeZoneId;
    /**
     * The EndTimeZoneId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeZoneId;
    /**
     * Constructor method for MeetingRequestMessageType
     * @uses EwsMeetingRequestMessageType::setMeetingRequestType()
     * @uses EwsMeetingRequestMessageType::setIntendedFreeBusyStatus()
     * @uses EwsMeetingRequestMessageType::setStart()
     * @uses EwsMeetingRequestMessageType::setEnd()
     * @uses EwsMeetingRequestMessageType::setOriginalStart()
     * @uses EwsMeetingRequestMessageType::setIsAllDayEvent()
     * @uses EwsMeetingRequestMessageType::setLegacyFreeBusyStatus()
     * @uses EwsMeetingRequestMessageType::setLocation()
     * @uses EwsMeetingRequestMessageType::setWhen()
     * @uses EwsMeetingRequestMessageType::setIsMeeting()
     * @uses EwsMeetingRequestMessageType::setIsCancelled()
     * @uses EwsMeetingRequestMessageType::setIsRecurring()
     * @uses EwsMeetingRequestMessageType::setMeetingRequestWasSent()
     * @uses EwsMeetingRequestMessageType::setCalendarItemType()
     * @uses EwsMeetingRequestMessageType::setMyResponseType()
     * @uses EwsMeetingRequestMessageType::setOrganizer()
     * @uses EwsMeetingRequestMessageType::setRequiredAttendees()
     * @uses EwsMeetingRequestMessageType::setOptionalAttendees()
     * @uses EwsMeetingRequestMessageType::setResources()
     * @uses EwsMeetingRequestMessageType::setConflictingMeetingCount()
     * @uses EwsMeetingRequestMessageType::setAdjacentMeetingCount()
     * @uses EwsMeetingRequestMessageType::setConflictingMeetings()
     * @uses EwsMeetingRequestMessageType::setAdjacentMeetings()
     * @uses EwsMeetingRequestMessageType::setDuration()
     * @uses EwsMeetingRequestMessageType::setTimeZone()
     * @uses EwsMeetingRequestMessageType::setAppointmentReplyTime()
     * @uses EwsMeetingRequestMessageType::setAppointmentSequenceNumber()
     * @uses EwsMeetingRequestMessageType::setAppointmentState()
     * @uses EwsMeetingRequestMessageType::setRecurrence()
     * @uses EwsMeetingRequestMessageType::setFirstOccurrence()
     * @uses EwsMeetingRequestMessageType::setLastOccurrence()
     * @uses EwsMeetingRequestMessageType::setModifiedOccurrences()
     * @uses EwsMeetingRequestMessageType::setDeletedOccurrences()
     * @uses EwsMeetingRequestMessageType::setMeetingTimeZone()
     * @uses EwsMeetingRequestMessageType::setStartTimeZone()
     * @uses EwsMeetingRequestMessageType::setEndTimeZone()
     * @uses EwsMeetingRequestMessageType::setConferenceType()
     * @uses EwsMeetingRequestMessageType::setAllowNewTimeProposal()
     * @uses EwsMeetingRequestMessageType::setIsOnlineMeeting()
     * @uses EwsMeetingRequestMessageType::setMeetingWorkspaceUrl()
     * @uses EwsMeetingRequestMessageType::setNetShowUrl()
     * @uses EwsMeetingRequestMessageType::setEnhancedLocation()
     * @uses EwsMeetingRequestMessageType::setChangeHighlights()
     * @uses EwsMeetingRequestMessageType::setStartWallClock()
     * @uses EwsMeetingRequestMessageType::setEndWallClock()
     * @uses EwsMeetingRequestMessageType::setStartTimeZoneId()
     * @uses EwsMeetingRequestMessageType::setEndTimeZoneId()
     * @param string $meetingRequestType
     * @param string $intendedFreeBusyStatus
     * @param string $start
     * @param string $end
     * @param string $originalStart
     * @param bool $isAllDayEvent
     * @param string $legacyFreeBusyStatus
     * @param string $location
     * @param string $when
     * @param bool $isMeeting
     * @param bool $isCancelled
     * @param bool $isRecurring
     * @param bool $meetingRequestWasSent
     * @param string $calendarItemType
     * @param string $myResponseType
     * @param \Ews\StructType\EwsSingleRecipientType $organizer
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources
     * @param int $conflictingMeetingCount
     * @param int $adjacentMeetingCount
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings
     * @param string $duration
     * @param string $timeZone
     * @param string $appointmentReplyTime
     * @param int $appointmentSequenceNumber
     * @param int $appointmentState
     * @param \Ews\StructType\EwsRecurrenceType $recurrence
     * @param \Ews\StructType\EwsOccurrenceInfoType $firstOccurrence
     * @param \Ews\StructType\EwsOccurrenceInfoType $lastOccurrence
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     * $deletedOccurrences
     * @param \Ews\StructType\EwsTimeZoneType $meetingTimeZone
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $startTimeZone
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $endTimeZone
     * @param int $conferenceType
     * @param bool $allowNewTimeProposal
     * @param bool $isOnlineMeeting
     * @param string $meetingWorkspaceUrl
     * @param string $netShowUrl
     * @param \Ews\StructType\EwsEnhancedLocationType $enhancedLocation
     * @param \Ews\StructType\EwsChangeHighlightsType $changeHighlights
     * @param string $startWallClock
     * @param string $endWallClock
     * @param string $startTimeZoneId
     * @param string $endTimeZoneId
     */
    public function __construct($meetingRequestType = null, $intendedFreeBusyStatus = null, $start = null, $end = null, $originalStart = null, $isAllDayEvent = null, $legacyFreeBusyStatus = null, $location = null, $when = null, $isMeeting = null, $isCancelled = null, $isRecurring = null, $meetingRequestWasSent = null, $calendarItemType = null, $myResponseType = null, \Ews\StructType\EwsSingleRecipientType $organizer = null, \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees = null, \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees = null, \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources = null, $conflictingMeetingCount = null, $adjacentMeetingCount = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings = null, $duration = null, $timeZone = null, $appointmentReplyTime = null, $appointmentSequenceNumber = null, $appointmentState = null, \Ews\StructType\EwsRecurrenceType $recurrence = null, \Ews\StructType\EwsOccurrenceInfoType $firstOccurrence = null, \Ews\StructType\EwsOccurrenceInfoType $lastOccurrence = null, \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences = null, \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences = null, \Ews\StructType\EwsTimeZoneType $meetingTimeZone = null, \Ews\StructType\EwsTimeZoneDefinitionType $startTimeZone = null, \Ews\StructType\EwsTimeZoneDefinitionType $endTimeZone = null, $conferenceType = null, $allowNewTimeProposal = null, $isOnlineMeeting = null, $meetingWorkspaceUrl = null, $netShowUrl = null, \Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null, \Ews\StructType\EwsChangeHighlightsType $changeHighlights = null, $startWallClock = null, $endWallClock = null, $startTimeZoneId = null, $endTimeZoneId = null)
    {
        $this
            ->setMeetingRequestType($meetingRequestType)
            ->setIntendedFreeBusyStatus($intendedFreeBusyStatus)
            ->setStart($start)
            ->setEnd($end)
            ->setOriginalStart($originalStart)
            ->setIsAllDayEvent($isAllDayEvent)
            ->setLegacyFreeBusyStatus($legacyFreeBusyStatus)
            ->setLocation($location)
            ->setWhen($when)
            ->setIsMeeting($isMeeting)
            ->setIsCancelled($isCancelled)
            ->setIsRecurring($isRecurring)
            ->setMeetingRequestWasSent($meetingRequestWasSent)
            ->setCalendarItemType($calendarItemType)
            ->setMyResponseType($myResponseType)
            ->setOrganizer($organizer)
            ->setRequiredAttendees($requiredAttendees)
            ->setOptionalAttendees($optionalAttendees)
            ->setResources($resources)
            ->setConflictingMeetingCount($conflictingMeetingCount)
            ->setAdjacentMeetingCount($adjacentMeetingCount)
            ->setConflictingMeetings($conflictingMeetings)
            ->setAdjacentMeetings($adjacentMeetings)
            ->setDuration($duration)
            ->setTimeZone($timeZone)
            ->setAppointmentReplyTime($appointmentReplyTime)
            ->setAppointmentSequenceNumber($appointmentSequenceNumber)
            ->setAppointmentState($appointmentState)
            ->setRecurrence($recurrence)
            ->setFirstOccurrence($firstOccurrence)
            ->setLastOccurrence($lastOccurrence)
            ->setModifiedOccurrences($modifiedOccurrences)
            ->setDeletedOccurrences($deletedOccurrences)
            ->setMeetingTimeZone($meetingTimeZone)
            ->setStartTimeZone($startTimeZone)
            ->setEndTimeZone($endTimeZone)
            ->setConferenceType($conferenceType)
            ->setAllowNewTimeProposal($allowNewTimeProposal)
            ->setIsOnlineMeeting($isOnlineMeeting)
            ->setMeetingWorkspaceUrl($meetingWorkspaceUrl)
            ->setNetShowUrl($netShowUrl)
            ->setEnhancedLocation($enhancedLocation)
            ->setChangeHighlights($changeHighlights)
            ->setStartWallClock($startWallClock)
            ->setEndWallClock($endWallClock)
            ->setStartTimeZoneId($startTimeZoneId)
            ->setEndTimeZoneId($endTimeZoneId);
    }
    /**
     * Get MeetingRequestType value
     * @return string|null
     */
    public function getMeetingRequestType()
    {
        return $this->MeetingRequestType;
    }
    /**
     * Set MeetingRequestType value
     * @uses \Ews\EnumType\EwsMeetingRequestTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsMeetingRequestTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $meetingRequestType
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setMeetingRequestType($meetingRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMeetingRequestTypeType::valueIsValid($meetingRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $meetingRequestType, implode(', ', \Ews\EnumType\EwsMeetingRequestTypeType::getValidValues())), __LINE__);
        }
        $this->MeetingRequestType = $meetingRequestType;
        return $this;
    }
    /**
     * Get IntendedFreeBusyStatus value
     * @return string|null
     */
    public function getIntendedFreeBusyStatus()
    {
        return $this->IntendedFreeBusyStatus;
    }
    /**
     * Set IntendedFreeBusyStatus value
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $intendedFreeBusyStatus
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setIntendedFreeBusyStatus($intendedFreeBusyStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid($intendedFreeBusyStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $intendedFreeBusyStatus, implode(', ', \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->IntendedFreeBusyStatus = $intendedFreeBusyStatus;
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
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
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
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get OriginalStart value
     * @return string|null
     */
    public function getOriginalStart()
    {
        return $this->OriginalStart;
    }
    /**
     * Set OriginalStart value
     * @param string $originalStart
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setOriginalStart($originalStart = null)
    {
        // validation for constraint: string
        if (!is_null($originalStart) && !is_string($originalStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalStart)), __LINE__);
        }
        $this->OriginalStart = $originalStart;
        return $this;
    }
    /**
     * Get IsAllDayEvent value
     * @return bool|null
     */
    public function getIsAllDayEvent()
    {
        return $this->IsAllDayEvent;
    }
    /**
     * Set IsAllDayEvent value
     * @param bool $isAllDayEvent
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setIsAllDayEvent($isAllDayEvent = null)
    {
        $this->IsAllDayEvent = $isAllDayEvent;
        return $this;
    }
    /**
     * Get LegacyFreeBusyStatus value
     * @return string|null
     */
    public function getLegacyFreeBusyStatus()
    {
        return $this->LegacyFreeBusyStatus;
    }
    /**
     * Set LegacyFreeBusyStatus value
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $legacyFreeBusyStatus
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setLegacyFreeBusyStatus($legacyFreeBusyStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid($legacyFreeBusyStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $legacyFreeBusyStatus, implode(', ', \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->LegacyFreeBusyStatus = $legacyFreeBusyStatus;
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
     * @return \Ews\StructType\EwsMeetingRequestMessageType
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
     * Get When value
     * @return string|null
     */
    public function getWhen()
    {
        return $this->When;
    }
    /**
     * Set When value
     * @param string $when
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setWhen($when = null)
    {
        // validation for constraint: string
        if (!is_null($when) && !is_string($when)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($when)), __LINE__);
        }
        $this->When = $when;
        return $this;
    }
    /**
     * Get IsMeeting value
     * @return bool|null
     */
    public function getIsMeeting()
    {
        return $this->IsMeeting;
    }
    /**
     * Set IsMeeting value
     * @param bool $isMeeting
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setIsMeeting($isMeeting = null)
    {
        $this->IsMeeting = $isMeeting;
        return $this;
    }
    /**
     * Get IsCancelled value
     * @return bool|null
     */
    public function getIsCancelled()
    {
        return $this->IsCancelled;
    }
    /**
     * Set IsCancelled value
     * @param bool $isCancelled
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setIsCancelled($isCancelled = null)
    {
        $this->IsCancelled = $isCancelled;
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return bool|null
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param bool $isRecurring
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setIsRecurring($isRecurring = null)
    {
        $this->IsRecurring = $isRecurring;
        return $this;
    }
    /**
     * Get MeetingRequestWasSent value
     * @return bool|null
     */
    public function getMeetingRequestWasSent()
    {
        return $this->MeetingRequestWasSent;
    }
    /**
     * Set MeetingRequestWasSent value
     * @param bool $meetingRequestWasSent
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setMeetingRequestWasSent($meetingRequestWasSent = null)
    {
        $this->MeetingRequestWasSent = $meetingRequestWasSent;
        return $this;
    }
    /**
     * Get CalendarItemType value
     * @return string|null
     */
    public function getCalendarItemType()
    {
        return $this->CalendarItemType;
    }
    /**
     * Set CalendarItemType value
     * @uses \Ews\EnumType\EwsCalendarItemTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarItemTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calendarItemType
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setCalendarItemType($calendarItemType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarItemTypeType::valueIsValid($calendarItemType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calendarItemType, implode(', ', \Ews\EnumType\EwsCalendarItemTypeType::getValidValues())), __LINE__);
        }
        $this->CalendarItemType = $calendarItemType;
        return $this;
    }
    /**
     * Get MyResponseType value
     * @return string|null
     */
    public function getMyResponseType()
    {
        return $this->MyResponseType;
    }
    /**
     * Set MyResponseType value
     * @uses \Ews\EnumType\EwsResponseTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsResponseTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $myResponseType
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setMyResponseType($myResponseType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsResponseTypeType::valueIsValid($myResponseType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $myResponseType, implode(', ', \Ews\EnumType\EwsResponseTypeType::getValidValues())), __LINE__);
        }
        $this->MyResponseType = $myResponseType;
        return $this;
    }
    /**
     * Get Organizer value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getOrganizer()
    {
        return $this->Organizer;
    }
    /**
     * Set Organizer value
     * @param \Ews\StructType\EwsSingleRecipientType $organizer
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setOrganizer(\Ews\StructType\EwsSingleRecipientType $organizer = null)
    {
        $this->Organizer = $organizer;
        return $this;
    }
    /**
     * Get RequiredAttendees value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    public function getRequiredAttendees()
    {
        return $this->RequiredAttendees;
    }
    /**
     * Set RequiredAttendees value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setRequiredAttendees(\Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees = null)
    {
        $this->RequiredAttendees = $requiredAttendees;
        return $this;
    }
    /**
     * Get OptionalAttendees value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    public function getOptionalAttendees()
    {
        return $this->OptionalAttendees;
    }
    /**
     * Set OptionalAttendees value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setOptionalAttendees(\Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees = null)
    {
        $this->OptionalAttendees = $optionalAttendees;
        return $this;
    }
    /**
     * Get Resources value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    public function getResources()
    {
        return $this->Resources;
    }
    /**
     * Set Resources value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setResources(\Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources = null)
    {
        $this->Resources = $resources;
        return $this;
    }
    /**
     * Get ConflictingMeetingCount value
     * @return int|null
     */
    public function getConflictingMeetingCount()
    {
        return $this->ConflictingMeetingCount;
    }
    /**
     * Set ConflictingMeetingCount value
     * @param int $conflictingMeetingCount
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setConflictingMeetingCount($conflictingMeetingCount = null)
    {
        // validation for constraint: int
        if (!is_null($conflictingMeetingCount) && !is_int($conflictingMeetingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($conflictingMeetingCount)), __LINE__);
        }
        $this->ConflictingMeetingCount = $conflictingMeetingCount;
        return $this;
    }
    /**
     * Get AdjacentMeetingCount value
     * @return int|null
     */
    public function getAdjacentMeetingCount()
    {
        return $this->AdjacentMeetingCount;
    }
    /**
     * Set AdjacentMeetingCount value
     * @param int $adjacentMeetingCount
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setAdjacentMeetingCount($adjacentMeetingCount = null)
    {
        // validation for constraint: int
        if (!is_null($adjacentMeetingCount) && !is_int($adjacentMeetingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($adjacentMeetingCount)), __LINE__);
        }
        $this->AdjacentMeetingCount = $adjacentMeetingCount;
        return $this;
    }
    /**
     * Get ConflictingMeetings value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getConflictingMeetings()
    {
        return $this->ConflictingMeetings;
    }
    /**
     * Set ConflictingMeetings value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setConflictingMeetings(\Ews\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings = null)
    {
        $this->ConflictingMeetings = $conflictingMeetings;
        return $this;
    }
    /**
     * Get AdjacentMeetings value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getAdjacentMeetings()
    {
        return $this->AdjacentMeetings;
    }
    /**
     * Set AdjacentMeetings value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setAdjacentMeetings(\Ews\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings = null)
    {
        $this->AdjacentMeetings = $adjacentMeetings;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setTimeZone($timeZone = null)
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZone)), __LINE__);
        }
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get AppointmentReplyTime value
     * @return string|null
     */
    public function getAppointmentReplyTime()
    {
        return $this->AppointmentReplyTime;
    }
    /**
     * Set AppointmentReplyTime value
     * @param string $appointmentReplyTime
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setAppointmentReplyTime($appointmentReplyTime = null)
    {
        // validation for constraint: string
        if (!is_null($appointmentReplyTime) && !is_string($appointmentReplyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appointmentReplyTime)), __LINE__);
        }
        $this->AppointmentReplyTime = $appointmentReplyTime;
        return $this;
    }
    /**
     * Get AppointmentSequenceNumber value
     * @return int|null
     */
    public function getAppointmentSequenceNumber()
    {
        return $this->AppointmentSequenceNumber;
    }
    /**
     * Set AppointmentSequenceNumber value
     * @param int $appointmentSequenceNumber
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setAppointmentSequenceNumber($appointmentSequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($appointmentSequenceNumber) && !is_int($appointmentSequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($appointmentSequenceNumber)), __LINE__);
        }
        $this->AppointmentSequenceNumber = $appointmentSequenceNumber;
        return $this;
    }
    /**
     * Get AppointmentState value
     * @return int|null
     */
    public function getAppointmentState()
    {
        return $this->AppointmentState;
    }
    /**
     * Set AppointmentState value
     * @param int $appointmentState
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setAppointmentState($appointmentState = null)
    {
        // validation for constraint: int
        if (!is_null($appointmentState) && !is_int($appointmentState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($appointmentState)), __LINE__);
        }
        $this->AppointmentState = $appointmentState;
        return $this;
    }
    /**
     * Get Recurrence value
     * @return \Ews\StructType\EwsRecurrenceType|null
     */
    public function getRecurrence()
    {
        return $this->Recurrence;
    }
    /**
     * Set Recurrence value
     * @param \Ews\StructType\EwsRecurrenceType $recurrence
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setRecurrence(\Ews\StructType\EwsRecurrenceType $recurrence = null)
    {
        $this->Recurrence = $recurrence;
        return $this;
    }
    /**
     * Get FirstOccurrence value
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function getFirstOccurrence()
    {
        return $this->FirstOccurrence;
    }
    /**
     * Set FirstOccurrence value
     * @param \Ews\StructType\EwsOccurrenceInfoType $firstOccurrence
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setFirstOccurrence(\Ews\StructType\EwsOccurrenceInfoType $firstOccurrence = null)
    {
        $this->FirstOccurrence = $firstOccurrence;
        return $this;
    }
    /**
     * Get LastOccurrence value
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function getLastOccurrence()
    {
        return $this->LastOccurrence;
    }
    /**
     * Set LastOccurrence value
     * @param \Ews\StructType\EwsOccurrenceInfoType $lastOccurrence
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setLastOccurrence(\Ews\StructType\EwsOccurrenceInfoType $lastOccurrence = null)
    {
        $this->LastOccurrence = $lastOccurrence;
        return $this;
    }
    /**
     * Get ModifiedOccurrences value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType|null
     */
    public function getModifiedOccurrences()
    {
        return $this->ModifiedOccurrences;
    }
    /**
     * Set ModifiedOccurrences value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setModifiedOccurrences(\Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences = null)
    {
        $this->ModifiedOccurrences = $modifiedOccurrences;
        return $this;
    }
    /**
     * Get DeletedOccurrences value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType|null
     */
    public function getDeletedOccurrences()
    {
        return $this->DeletedOccurrences;
    }
    /**
     * Set DeletedOccurrences value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     * $deletedOccurrences
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setDeletedOccurrences(\Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences = null)
    {
        $this->DeletedOccurrences = $deletedOccurrences;
        return $this;
    }
    /**
     * Get MeetingTimeZone value
     * @return \Ews\StructType\EwsTimeZoneType|null
     */
    public function getMeetingTimeZone()
    {
        return $this->MeetingTimeZone;
    }
    /**
     * Set MeetingTimeZone value
     * @param \Ews\StructType\EwsTimeZoneType $meetingTimeZone
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setMeetingTimeZone(\Ews\StructType\EwsTimeZoneType $meetingTimeZone = null)
    {
        $this->MeetingTimeZone = $meetingTimeZone;
        return $this;
    }
    /**
     * Get StartTimeZone value
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function getStartTimeZone()
    {
        return $this->StartTimeZone;
    }
    /**
     * Set StartTimeZone value
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $startTimeZone
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setStartTimeZone(\Ews\StructType\EwsTimeZoneDefinitionType $startTimeZone = null)
    {
        $this->StartTimeZone = $startTimeZone;
        return $this;
    }
    /**
     * Get EndTimeZone value
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function getEndTimeZone()
    {
        return $this->EndTimeZone;
    }
    /**
     * Set EndTimeZone value
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $endTimeZone
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setEndTimeZone(\Ews\StructType\EwsTimeZoneDefinitionType $endTimeZone = null)
    {
        $this->EndTimeZone = $endTimeZone;
        return $this;
    }
    /**
     * Get ConferenceType value
     * @return int|null
     */
    public function getConferenceType()
    {
        return $this->ConferenceType;
    }
    /**
     * Set ConferenceType value
     * @param int $conferenceType
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setConferenceType($conferenceType = null)
    {
        // validation for constraint: int
        if (!is_null($conferenceType) && !is_int($conferenceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($conferenceType)), __LINE__);
        }
        $this->ConferenceType = $conferenceType;
        return $this;
    }
    /**
     * Get AllowNewTimeProposal value
     * @return bool|null
     */
    public function getAllowNewTimeProposal()
    {
        return $this->AllowNewTimeProposal;
    }
    /**
     * Set AllowNewTimeProposal value
     * @param bool $allowNewTimeProposal
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setAllowNewTimeProposal($allowNewTimeProposal = null)
    {
        $this->AllowNewTimeProposal = $allowNewTimeProposal;
        return $this;
    }
    /**
     * Get IsOnlineMeeting value
     * @return bool|null
     */
    public function getIsOnlineMeeting()
    {
        return $this->IsOnlineMeeting;
    }
    /**
     * Set IsOnlineMeeting value
     * @param bool $isOnlineMeeting
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setIsOnlineMeeting($isOnlineMeeting = null)
    {
        $this->IsOnlineMeeting = $isOnlineMeeting;
        return $this;
    }
    /**
     * Get MeetingWorkspaceUrl value
     * @return string|null
     */
    public function getMeetingWorkspaceUrl()
    {
        return $this->MeetingWorkspaceUrl;
    }
    /**
     * Set MeetingWorkspaceUrl value
     * @param string $meetingWorkspaceUrl
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setMeetingWorkspaceUrl($meetingWorkspaceUrl = null)
    {
        // validation for constraint: string
        if (!is_null($meetingWorkspaceUrl) && !is_string($meetingWorkspaceUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingWorkspaceUrl)), __LINE__);
        }
        $this->MeetingWorkspaceUrl = $meetingWorkspaceUrl;
        return $this;
    }
    /**
     * Get NetShowUrl value
     * @return string|null
     */
    public function getNetShowUrl()
    {
        return $this->NetShowUrl;
    }
    /**
     * Set NetShowUrl value
     * @param string $netShowUrl
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setNetShowUrl($netShowUrl = null)
    {
        // validation for constraint: string
        if (!is_null($netShowUrl) && !is_string($netShowUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netShowUrl)), __LINE__);
        }
        $this->NetShowUrl = $netShowUrl;
        return $this;
    }
    /**
     * Get EnhancedLocation value
     * @return \Ews\StructType\EwsEnhancedLocationType|null
     */
    public function getEnhancedLocation()
    {
        return $this->EnhancedLocation;
    }
    /**
     * Set EnhancedLocation value
     * @param \Ews\StructType\EwsEnhancedLocationType $enhancedLocation
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setEnhancedLocation(\Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null)
    {
        $this->EnhancedLocation = $enhancedLocation;
        return $this;
    }
    /**
     * Get ChangeHighlights value
     * @return \Ews\StructType\EwsChangeHighlightsType|null
     */
    public function getChangeHighlights()
    {
        return $this->ChangeHighlights;
    }
    /**
     * Set ChangeHighlights value
     * @param \Ews\StructType\EwsChangeHighlightsType $changeHighlights
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setChangeHighlights(\Ews\StructType\EwsChangeHighlightsType $changeHighlights = null)
    {
        $this->ChangeHighlights = $changeHighlights;
        return $this;
    }
    /**
     * Get StartWallClock value
     * @return string|null
     */
    public function getStartWallClock()
    {
        return $this->StartWallClock;
    }
    /**
     * Set StartWallClock value
     * @param string $startWallClock
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setStartWallClock($startWallClock = null)
    {
        // validation for constraint: string
        if (!is_null($startWallClock) && !is_string($startWallClock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startWallClock)), __LINE__);
        }
        $this->StartWallClock = $startWallClock;
        return $this;
    }
    /**
     * Get EndWallClock value
     * @return string|null
     */
    public function getEndWallClock()
    {
        return $this->EndWallClock;
    }
    /**
     * Set EndWallClock value
     * @param string $endWallClock
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setEndWallClock($endWallClock = null)
    {
        // validation for constraint: string
        if (!is_null($endWallClock) && !is_string($endWallClock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endWallClock)), __LINE__);
        }
        $this->EndWallClock = $endWallClock;
        return $this;
    }
    /**
     * Get StartTimeZoneId value
     * @return string|null
     */
    public function getStartTimeZoneId()
    {
        return $this->StartTimeZoneId;
    }
    /**
     * Set StartTimeZoneId value
     * @param string $startTimeZoneId
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setStartTimeZoneId($startTimeZoneId = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeZoneId) && !is_string($startTimeZoneId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTimeZoneId)), __LINE__);
        }
        $this->StartTimeZoneId = $startTimeZoneId;
        return $this;
    }
    /**
     * Get EndTimeZoneId value
     * @return string|null
     */
    public function getEndTimeZoneId()
    {
        return $this->EndTimeZoneId;
    }
    /**
     * Set EndTimeZoneId value
     * @param string $endTimeZoneId
     * @return \Ews\StructType\EwsMeetingRequestMessageType
     */
    public function setEndTimeZoneId($endTimeZoneId = null)
    {
        // validation for constraint: string
        if (!is_null($endTimeZoneId) && !is_string($endTimeZoneId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTimeZoneId)), __LINE__);
        }
        $this->EndTimeZoneId = $endTimeZoneId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingRequestMessageType
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
