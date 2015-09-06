<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarItemType extends EwsItemType
{
    /**
     * The UID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UID;
    /**
     * The RecurrenceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $RecurrenceId;
    /**
     * The DateTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DateTimeStamp;
    /**
     * The Start
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $Start;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $End;
    /**
     * The OriginalStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $OriginalStart;
    /**
     * The IsAllDayEvent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
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
     * @var boolean
     */
    public $IsMeeting;
    /**
     * The IsCancelled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsCancelled;
    /**
     * The IsRecurring
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsRecurring;
    /**
     * The MeetingRequestWasSent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $MeetingRequestWasSent;
    /**
     * The IsResponseRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsResponseRequested;
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
     * The InboxReminders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfInboxReminderType
     */
    public $InboxReminders;
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
     * @var dateTime
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
     * @var boolean
     */
    public $AllowNewTimeProposal;
    /**
     * The IsOnlineMeeting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
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
     * The StartWallClock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $StartWallClock;
    /**
     * The EndWallClock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
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
     * The IntendedFreeBusyStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IntendedFreeBusyStatus;
    /**
     * The JoinOnlineMeetingUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $JoinOnlineMeetingUrl;
    /**
     * The OnlineMeetingSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOnlineMeetingSettingsType
     */
    public $OnlineMeetingSettings;
    /**
     * The IsOrganizer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOrganizer;
    /**
     * Constructor method for CalendarItemType
     * @uses EwsCalendarItemType::setUID()
     * @uses EwsCalendarItemType::setRecurrenceId()
     * @uses EwsCalendarItemType::setDateTimeStamp()
     * @uses EwsCalendarItemType::setStart()
     * @uses EwsCalendarItemType::setEnd()
     * @uses EwsCalendarItemType::setOriginalStart()
     * @uses EwsCalendarItemType::setIsAllDayEvent()
     * @uses EwsCalendarItemType::setLegacyFreeBusyStatus()
     * @uses EwsCalendarItemType::setLocation()
     * @uses EwsCalendarItemType::setWhen()
     * @uses EwsCalendarItemType::setIsMeeting()
     * @uses EwsCalendarItemType::setIsCancelled()
     * @uses EwsCalendarItemType::setIsRecurring()
     * @uses EwsCalendarItemType::setMeetingRequestWasSent()
     * @uses EwsCalendarItemType::setIsResponseRequested()
     * @uses EwsCalendarItemType::setCalendarItemType()
     * @uses EwsCalendarItemType::setMyResponseType()
     * @uses EwsCalendarItemType::setOrganizer()
     * @uses EwsCalendarItemType::setRequiredAttendees()
     * @uses EwsCalendarItemType::setOptionalAttendees()
     * @uses EwsCalendarItemType::setResources()
     * @uses EwsCalendarItemType::setInboxReminders()
     * @uses EwsCalendarItemType::setConflictingMeetingCount()
     * @uses EwsCalendarItemType::setAdjacentMeetingCount()
     * @uses EwsCalendarItemType::setConflictingMeetings()
     * @uses EwsCalendarItemType::setAdjacentMeetings()
     * @uses EwsCalendarItemType::setDuration()
     * @uses EwsCalendarItemType::setTimeZone()
     * @uses EwsCalendarItemType::setAppointmentReplyTime()
     * @uses EwsCalendarItemType::setAppointmentSequenceNumber()
     * @uses EwsCalendarItemType::setAppointmentState()
     * @uses EwsCalendarItemType::setRecurrence()
     * @uses EwsCalendarItemType::setFirstOccurrence()
     * @uses EwsCalendarItemType::setLastOccurrence()
     * @uses EwsCalendarItemType::setModifiedOccurrences()
     * @uses EwsCalendarItemType::setDeletedOccurrences()
     * @uses EwsCalendarItemType::setMeetingTimeZone()
     * @uses EwsCalendarItemType::setStartTimeZone()
     * @uses EwsCalendarItemType::setEndTimeZone()
     * @uses EwsCalendarItemType::setConferenceType()
     * @uses EwsCalendarItemType::setAllowNewTimeProposal()
     * @uses EwsCalendarItemType::setIsOnlineMeeting()
     * @uses EwsCalendarItemType::setMeetingWorkspaceUrl()
     * @uses EwsCalendarItemType::setNetShowUrl()
     * @uses EwsCalendarItemType::setEnhancedLocation()
     * @uses EwsCalendarItemType::setStartWallClock()
     * @uses EwsCalendarItemType::setEndWallClock()
     * @uses EwsCalendarItemType::setStartTimeZoneId()
     * @uses EwsCalendarItemType::setEndTimeZoneId()
     * @uses EwsCalendarItemType::setIntendedFreeBusyStatus()
     * @uses EwsCalendarItemType::setJoinOnlineMeetingUrl()
     * @uses EwsCalendarItemType::setOnlineMeetingSettings()
     * @uses EwsCalendarItemType::setIsOrganizer()
     * @param string $uID
     * @param dateTime $recurrenceId
     * @param dateTime $dateTimeStamp
     * @param dateTime $start
     * @param dateTime $end
     * @param dateTime $originalStart
     * @param boolean $isAllDayEvent
     * @param string $legacyFreeBusyStatus
     * @param string $location
     * @param string $when
     * @param boolean $isMeeting
     * @param boolean $isCancelled
     * @param boolean $isRecurring
     * @param boolean $meetingRequestWasSent
     * @param boolean $isResponseRequested
     * @param string $calendarItemType
     * @param string $myResponseType
     * @param \Ews\StructType\EwsSingleRecipientType $organizer
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources
     * @param \Ews\ArrayType\EwsArrayOfInboxReminderType $inboxReminders
     * @param int $conflictingMeetingCount
     * @param int $adjacentMeetingCount
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings
     * @param string $duration
     * @param string $timeZone
     * @param dateTime $appointmentReplyTime
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
     * @param boolean $allowNewTimeProposal
     * @param boolean $isOnlineMeeting
     * @param string $meetingWorkspaceUrl
     * @param string $netShowUrl
     * @param \Ews\StructType\EwsEnhancedLocationType $enhancedLocation
     * @param dateTime $startWallClock
     * @param dateTime $endWallClock
     * @param string $startTimeZoneId
     * @param string $endTimeZoneId
     * @param string $intendedFreeBusyStatus
     * @param string $joinOnlineMeetingUrl
     * @param \Ews\StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings
     * @param boolean $isOrganizer
     */
    public function __construct($uID = null, $recurrenceId = null, $dateTimeStamp = null, $start = null, $end = null, $originalStart = null, $isAllDayEvent = null, $legacyFreeBusyStatus = null, $location = null, $when = null, $isMeeting = null, $isCancelled = null, $isRecurring = null, $meetingRequestWasSent = null, $isResponseRequested = null, $calendarItemType = null, $myResponseType = null, \Ews\StructType\EwsSingleRecipientType $organizer = null, \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees = null, \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees = null, \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources = null, \Ews\ArrayType\EwsArrayOfInboxReminderType $inboxReminders = null, $conflictingMeetingCount = null, $adjacentMeetingCount = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings = null, $duration = null, $timeZone = null, $appointmentReplyTime = null, $appointmentSequenceNumber = null, $appointmentState = null, \Ews\StructType\EwsRecurrenceType $recurrence = null, \Ews\StructType\EwsOccurrenceInfoType $firstOccurrence = null, \Ews\StructType\EwsOccurrenceInfoType $lastOccurrence = null, \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences = null, \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences = null, \Ews\StructType\EwsTimeZoneType $meetingTimeZone = null, \Ews\StructType\EwsTimeZoneDefinitionType $startTimeZone = null, \Ews\StructType\EwsTimeZoneDefinitionType $endTimeZone = null, $conferenceType = null, $allowNewTimeProposal = null, $isOnlineMeeting = null, $meetingWorkspaceUrl = null, $netShowUrl = null, \Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null, $startWallClock = null, $endWallClock = null, $startTimeZoneId = null, $endTimeZoneId = null, $intendedFreeBusyStatus = null, $joinOnlineMeetingUrl = null, \Ews\StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings = null, $isOrganizer = null)
    {
        $this
            ->setUID($uID)
            ->setRecurrenceId($recurrenceId)
            ->setDateTimeStamp($dateTimeStamp)
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
            ->setIsResponseRequested($isResponseRequested)
            ->setCalendarItemType($calendarItemType)
            ->setMyResponseType($myResponseType)
            ->setOrganizer($organizer)
            ->setRequiredAttendees($requiredAttendees)
            ->setOptionalAttendees($optionalAttendees)
            ->setResources($resources)
            ->setInboxReminders($inboxReminders)
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
            ->setStartWallClock($startWallClock)
            ->setEndWallClock($endWallClock)
            ->setStartTimeZoneId($startTimeZoneId)
            ->setEndTimeZoneId($endTimeZoneId)
            ->setIntendedFreeBusyStatus($intendedFreeBusyStatus)
            ->setJoinOnlineMeetingUrl($joinOnlineMeetingUrl)
            ->setOnlineMeetingSettings($onlineMeetingSettings)
            ->setIsOrganizer($isOrganizer);
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setUID($uID = null)
    {
        $this->UID = $uID;
        return $this;
    }
    /**
     * Get RecurrenceId value
     * @return dateTime|null
     */
    public function getRecurrenceId()
    {
        return $this->RecurrenceId;
    }
    /**
     * Set RecurrenceId value
     * @param dateTime $recurrenceId
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setRecurrenceId($recurrenceId = null)
    {
        $this->RecurrenceId = $recurrenceId;
        return $this;
    }
    /**
     * Get DateTimeStamp value
     * @return dateTime|null
     */
    public function getDateTimeStamp()
    {
        return $this->DateTimeStamp;
    }
    /**
     * Set DateTimeStamp value
     * @param dateTime $dateTimeStamp
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setDateTimeStamp($dateTimeStamp = null)
    {
        $this->DateTimeStamp = $dateTimeStamp;
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setStart($start = null)
    {
        $this->Start = $start;
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setEnd($end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Get OriginalStart value
     * @return dateTime|null
     */
    public function getOriginalStart()
    {
        return $this->OriginalStart;
    }
    /**
     * Set OriginalStart value
     * @param dateTime $originalStart
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setOriginalStart($originalStart = null)
    {
        $this->OriginalStart = $originalStart;
        return $this;
    }
    /**
     * Get IsAllDayEvent value
     * @return boolean|null
     */
    public function getIsAllDayEvent()
    {
        return $this->IsAllDayEvent;
    }
    /**
     * Set IsAllDayEvent value
     * @param boolean $isAllDayEvent
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @param string $legacyFreeBusyStatus
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setLegacyFreeBusyStatus($legacyFreeBusyStatus = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setLocation($location = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setWhen($when = null)
    {
        $this->When = $when;
        return $this;
    }
    /**
     * Get IsMeeting value
     * @return boolean|null
     */
    public function getIsMeeting()
    {
        return $this->IsMeeting;
    }
    /**
     * Set IsMeeting value
     * @param boolean $isMeeting
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setIsMeeting($isMeeting = null)
    {
        $this->IsMeeting = $isMeeting;
        return $this;
    }
    /**
     * Get IsCancelled value
     * @return boolean|null
     */
    public function getIsCancelled()
    {
        return $this->IsCancelled;
    }
    /**
     * Set IsCancelled value
     * @param boolean $isCancelled
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setIsCancelled($isCancelled = null)
    {
        $this->IsCancelled = $isCancelled;
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return boolean|null
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param boolean $isRecurring
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setIsRecurring($isRecurring = null)
    {
        $this->IsRecurring = $isRecurring;
        return $this;
    }
    /**
     * Get MeetingRequestWasSent value
     * @return boolean|null
     */
    public function getMeetingRequestWasSent()
    {
        return $this->MeetingRequestWasSent;
    }
    /**
     * Set MeetingRequestWasSent value
     * @param boolean $meetingRequestWasSent
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setMeetingRequestWasSent($meetingRequestWasSent = null)
    {
        $this->MeetingRequestWasSent = $meetingRequestWasSent;
        return $this;
    }
    /**
     * Get IsResponseRequested value
     * @return boolean|null
     */
    public function getIsResponseRequested()
    {
        return $this->IsResponseRequested;
    }
    /**
     * Set IsResponseRequested value
     * @param boolean $isResponseRequested
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setIsResponseRequested($isResponseRequested = null)
    {
        $this->IsResponseRequested = $isResponseRequested;
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
     * @param string $calendarItemType
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setCalendarItemType($calendarItemType = null)
    {
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
     * @param string $myResponseType
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setMyResponseType($myResponseType = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setResources(\Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources = null)
    {
        $this->Resources = $resources;
        return $this;
    }
    /**
     * Get InboxReminders value
     * @return \Ews\ArrayType\EwsArrayOfInboxReminderType|null
     */
    public function getInboxReminders()
    {
        return $this->InboxReminders;
    }
    /**
     * Set InboxReminders value
     * @param \Ews\ArrayType\EwsArrayOfInboxReminderType $inboxReminders
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setInboxReminders(\Ews\ArrayType\EwsArrayOfInboxReminderType $inboxReminders = null)
    {
        $this->InboxReminders = $inboxReminders;
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setConflictingMeetingCount($conflictingMeetingCount = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setAdjacentMeetingCount($adjacentMeetingCount = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setDuration($duration = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setTimeZone($timeZone = null)
    {
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get AppointmentReplyTime value
     * @return dateTime|null
     */
    public function getAppointmentReplyTime()
    {
        return $this->AppointmentReplyTime;
    }
    /**
     * Set AppointmentReplyTime value
     * @param dateTime $appointmentReplyTime
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setAppointmentReplyTime($appointmentReplyTime = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setAppointmentSequenceNumber($appointmentSequenceNumber = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setAppointmentState($appointmentState = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setConferenceType($conferenceType = null)
    {
        $this->ConferenceType = $conferenceType;
        return $this;
    }
    /**
     * Get AllowNewTimeProposal value
     * @return boolean|null
     */
    public function getAllowNewTimeProposal()
    {
        return $this->AllowNewTimeProposal;
    }
    /**
     * Set AllowNewTimeProposal value
     * @param boolean $allowNewTimeProposal
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setAllowNewTimeProposal($allowNewTimeProposal = null)
    {
        $this->AllowNewTimeProposal = $allowNewTimeProposal;
        return $this;
    }
    /**
     * Get IsOnlineMeeting value
     * @return boolean|null
     */
    public function getIsOnlineMeeting()
    {
        return $this->IsOnlineMeeting;
    }
    /**
     * Set IsOnlineMeeting value
     * @param boolean $isOnlineMeeting
     * @return \Ews\StructType\EwsCalendarItemType
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setMeetingWorkspaceUrl($meetingWorkspaceUrl = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setNetShowUrl($netShowUrl = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setEnhancedLocation(\Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null)
    {
        $this->EnhancedLocation = $enhancedLocation;
        return $this;
    }
    /**
     * Get StartWallClock value
     * @return dateTime|null
     */
    public function getStartWallClock()
    {
        return $this->StartWallClock;
    }
    /**
     * Set StartWallClock value
     * @param dateTime $startWallClock
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setStartWallClock($startWallClock = null)
    {
        $this->StartWallClock = $startWallClock;
        return $this;
    }
    /**
     * Get EndWallClock value
     * @return dateTime|null
     */
    public function getEndWallClock()
    {
        return $this->EndWallClock;
    }
    /**
     * Set EndWallClock value
     * @param dateTime $endWallClock
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setEndWallClock($endWallClock = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setStartTimeZoneId($startTimeZoneId = null)
    {
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
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setEndTimeZoneId($endTimeZoneId = null)
    {
        $this->EndTimeZoneId = $endTimeZoneId;
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
     * @param string $intendedFreeBusyStatus
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setIntendedFreeBusyStatus($intendedFreeBusyStatus = null)
    {
        if (!\Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid($intendedFreeBusyStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $intendedFreeBusyStatus, implode(', ', \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->IntendedFreeBusyStatus = $intendedFreeBusyStatus;
        return $this;
    }
    /**
     * Get JoinOnlineMeetingUrl value
     * @return string|null
     */
    public function getJoinOnlineMeetingUrl()
    {
        return $this->JoinOnlineMeetingUrl;
    }
    /**
     * Set JoinOnlineMeetingUrl value
     * @param string $joinOnlineMeetingUrl
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setJoinOnlineMeetingUrl($joinOnlineMeetingUrl = null)
    {
        $this->JoinOnlineMeetingUrl = $joinOnlineMeetingUrl;
        return $this;
    }
    /**
     * Get OnlineMeetingSettings value
     * @return \Ews\StructType\EwsOnlineMeetingSettingsType|null
     */
    public function getOnlineMeetingSettings()
    {
        return $this->OnlineMeetingSettings;
    }
    /**
     * Set OnlineMeetingSettings value
     * @param \Ews\StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setOnlineMeetingSettings(\Ews\StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings = null)
    {
        $this->OnlineMeetingSettings = $onlineMeetingSettings;
        return $this;
    }
    /**
     * Get IsOrganizer value
     * @return boolean|null
     */
    public function getIsOrganizer()
    {
        return $this->IsOrganizer;
    }
    /**
     * Set IsOrganizer value
     * @param boolean $isOrganizer
     * @return \Ews\StructType\EwsCalendarItemType
     */
    public function setIsOrganizer($isOrganizer = null)
    {
        $this->IsOrganizer = $isOrganizer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCalendarItemType
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
