<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UID = null;
    /**
     * The RecurrenceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecurrenceId = null;
    /**
     * The DateTimeStamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeStamp = null;
    /**
     * The Start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Start = null;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $End = null;
    /**
     * The OriginalStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginalStart = null;
    /**
     * The IsAllDayEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAllDayEvent = null;
    /**
     * The LegacyFreeBusyStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LegacyFreeBusyStatus = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The When
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $When = null;
    /**
     * The IsMeeting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMeeting = null;
    /**
     * The IsCancelled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsCancelled = null;
    /**
     * The IsRecurring
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRecurring = null;
    /**
     * The MeetingRequestWasSent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MeetingRequestWasSent = null;
    /**
     * The IsResponseRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsResponseRequested = null;
    /**
     * The CalendarItemType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalendarItemType = null;
    /**
     * The MyResponseType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MyResponseType = null;
    /**
     * The Organizer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $Organizer = null;
    /**
     * The RequiredAttendees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfAttendeesType $RequiredAttendees = null;
    /**
     * The OptionalAttendees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfAttendeesType $OptionalAttendees = null;
    /**
     * The Resources
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfAttendeesType $Resources = null;
    /**
     * The InboxReminders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfInboxReminderType|null
     */
    protected ?\ArrayType\EwsArrayOfInboxReminderType $InboxReminders = null;
    /**
     * The ConflictingMeetingCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ConflictingMeetingCount = null;
    /**
     * The AdjacentMeetingCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AdjacentMeetingCount = null;
    /**
     * The ConflictingMeetings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAllItemsType $ConflictingMeetings = null;
    /**
     * The AdjacentMeetings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAllItemsType $AdjacentMeetings = null;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Duration = null;
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeZone = null;
    /**
     * The AppointmentReplyTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AppointmentReplyTime = null;
    /**
     * The AppointmentSequenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AppointmentSequenceNumber = null;
    /**
     * The AppointmentState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AppointmentState = null;
    /**
     * The Recurrence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRecurrenceType|null
     */
    protected ?\StructType\EwsRecurrenceType $Recurrence = null;
    /**
     * The FirstOccurrence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsOccurrenceInfoType|null
     */
    protected ?\StructType\EwsOccurrenceInfoType $FirstOccurrence = null;
    /**
     * The LastOccurrence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsOccurrenceInfoType|null
     */
    protected ?\StructType\EwsOccurrenceInfoType $LastOccurrence = null;
    /**
     * The ModifiedOccurrences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $ModifiedOccurrences = null;
    /**
     * The DeletedOccurrences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $DeletedOccurrences = null;
    /**
     * The MeetingTimeZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsTimeZoneType|null
     */
    protected ?\StructType\EwsTimeZoneType $MeetingTimeZone = null;
    /**
     * The StartTimeZone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTimeZoneDefinitionType|null
     */
    protected ?\StructType\EwsTimeZoneDefinitionType $StartTimeZone = null;
    /**
     * The EndTimeZone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTimeZoneDefinitionType|null
     */
    protected ?\StructType\EwsTimeZoneDefinitionType $EndTimeZone = null;
    /**
     * The ConferenceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ConferenceType = null;
    /**
     * The AllowNewTimeProposal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllowNewTimeProposal = null;
    /**
     * The IsOnlineMeeting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOnlineMeeting = null;
    /**
     * The MeetingWorkspaceUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MeetingWorkspaceUrl = null;
    /**
     * The NetShowUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NetShowUrl = null;
    /**
     * The EnhancedLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEnhancedLocationType|null
     */
    protected ?\StructType\EwsEnhancedLocationType $EnhancedLocation = null;
    /**
     * The StartWallClock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartWallClock = null;
    /**
     * The EndWallClock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndWallClock = null;
    /**
     * The StartTimeZoneId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTimeZoneId = null;
    /**
     * The EndTimeZoneId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeZoneId = null;
    /**
     * The IntendedFreeBusyStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IntendedFreeBusyStatus = null;
    /**
     * The JoinOnlineMeetingUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JoinOnlineMeetingUrl = null;
    /**
     * The OnlineMeetingSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsOnlineMeetingSettingsType|null
     */
    protected ?\StructType\EwsOnlineMeetingSettingsType $OnlineMeetingSettings = null;
    /**
     * The IsOrganizer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOrganizer = null;
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
     * @param string $recurrenceId
     * @param string $dateTimeStamp
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
     * @param bool $isResponseRequested
     * @param string $calendarItemType
     * @param string $myResponseType
     * @param \StructType\EwsSingleRecipientType $organizer
     * @param \ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees
     * @param \ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees
     * @param \ArrayType\EwsNonEmptyArrayOfAttendeesType $resources
     * @param \ArrayType\EwsArrayOfInboxReminderType $inboxReminders
     * @param int $conflictingMeetingCount
     * @param int $adjacentMeetingCount
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings
     * @param string $duration
     * @param string $timeZone
     * @param string $appointmentReplyTime
     * @param int $appointmentSequenceNumber
     * @param int $appointmentState
     * @param \StructType\EwsRecurrenceType $recurrence
     * @param \StructType\EwsOccurrenceInfoType $firstOccurrence
     * @param \StructType\EwsOccurrenceInfoType $lastOccurrence
     * @param \ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences
     * @param \ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences
     * @param \StructType\EwsTimeZoneType $meetingTimeZone
     * @param \StructType\EwsTimeZoneDefinitionType $startTimeZone
     * @param \StructType\EwsTimeZoneDefinitionType $endTimeZone
     * @param int $conferenceType
     * @param bool $allowNewTimeProposal
     * @param bool $isOnlineMeeting
     * @param string $meetingWorkspaceUrl
     * @param string $netShowUrl
     * @param \StructType\EwsEnhancedLocationType $enhancedLocation
     * @param string $startWallClock
     * @param string $endWallClock
     * @param string $startTimeZoneId
     * @param string $endTimeZoneId
     * @param string $intendedFreeBusyStatus
     * @param string $joinOnlineMeetingUrl
     * @param \StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings
     * @param bool $isOrganizer
     */
    public function __construct(?string $uID = null, ?string $recurrenceId = null, ?string $dateTimeStamp = null, ?string $start = null, ?string $end = null, ?string $originalStart = null, ?bool $isAllDayEvent = null, ?string $legacyFreeBusyStatus = null, ?string $location = null, ?string $when = null, ?bool $isMeeting = null, ?bool $isCancelled = null, ?bool $isRecurring = null, ?bool $meetingRequestWasSent = null, ?bool $isResponseRequested = null, ?string $calendarItemType = null, ?string $myResponseType = null, ?\StructType\EwsSingleRecipientType $organizer = null, ?\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees = null, ?\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees = null, ?\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources = null, ?\ArrayType\EwsArrayOfInboxReminderType $inboxReminders = null, ?int $conflictingMeetingCount = null, ?int $adjacentMeetingCount = null, ?\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings = null, ?\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings = null, ?string $duration = null, ?string $timeZone = null, ?string $appointmentReplyTime = null, ?int $appointmentSequenceNumber = null, ?int $appointmentState = null, ?\StructType\EwsRecurrenceType $recurrence = null, ?\StructType\EwsOccurrenceInfoType $firstOccurrence = null, ?\StructType\EwsOccurrenceInfoType $lastOccurrence = null, ?\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences = null, ?\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences = null, ?\StructType\EwsTimeZoneType $meetingTimeZone = null, ?\StructType\EwsTimeZoneDefinitionType $startTimeZone = null, ?\StructType\EwsTimeZoneDefinitionType $endTimeZone = null, ?int $conferenceType = null, ?bool $allowNewTimeProposal = null, ?bool $isOnlineMeeting = null, ?string $meetingWorkspaceUrl = null, ?string $netShowUrl = null, ?\StructType\EwsEnhancedLocationType $enhancedLocation = null, ?string $startWallClock = null, ?string $endWallClock = null, ?string $startTimeZoneId = null, ?string $endTimeZoneId = null, ?string $intendedFreeBusyStatus = null, ?string $joinOnlineMeetingUrl = null, ?\StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings = null, ?bool $isOrganizer = null)
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
    public function getUID(): ?string
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \StructType\EwsCalendarItemType
     */
    public function setUID(?string $uID = null): self
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uID, true), gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        
        return $this;
    }
    /**
     * Get RecurrenceId value
     * @return string|null
     */
    public function getRecurrenceId(): ?string
    {
        return $this->RecurrenceId;
    }
    /**
     * Set RecurrenceId value
     * @param string $recurrenceId
     * @return \StructType\EwsCalendarItemType
     */
    public function setRecurrenceId(?string $recurrenceId = null): self
    {
        // validation for constraint: string
        if (!is_null($recurrenceId) && !is_string($recurrenceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurrenceId, true), gettype($recurrenceId)), __LINE__);
        }
        $this->RecurrenceId = $recurrenceId;
        
        return $this;
    }
    /**
     * Get DateTimeStamp value
     * @return string|null
     */
    public function getDateTimeStamp(): ?string
    {
        return $this->DateTimeStamp;
    }
    /**
     * Set DateTimeStamp value
     * @param string $dateTimeStamp
     * @return \StructType\EwsCalendarItemType
     */
    public function setDateTimeStamp(?string $dateTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeStamp) && !is_string($dateTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeStamp, true), gettype($dateTimeStamp)), __LINE__);
        }
        $this->DateTimeStamp = $dateTimeStamp;
        
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
     * @return \StructType\EwsCalendarItemType
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
     * @return \StructType\EwsCalendarItemType
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
    /**
     * Get OriginalStart value
     * @return string|null
     */
    public function getOriginalStart(): ?string
    {
        return $this->OriginalStart;
    }
    /**
     * Set OriginalStart value
     * @param string $originalStart
     * @return \StructType\EwsCalendarItemType
     */
    public function setOriginalStart(?string $originalStart = null): self
    {
        // validation for constraint: string
        if (!is_null($originalStart) && !is_string($originalStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalStart, true), gettype($originalStart)), __LINE__);
        }
        $this->OriginalStart = $originalStart;
        
        return $this;
    }
    /**
     * Get IsAllDayEvent value
     * @return bool|null
     */
    public function getIsAllDayEvent(): ?bool
    {
        return $this->IsAllDayEvent;
    }
    /**
     * Set IsAllDayEvent value
     * @param bool $isAllDayEvent
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsAllDayEvent(?bool $isAllDayEvent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAllDayEvent) && !is_bool($isAllDayEvent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAllDayEvent, true), gettype($isAllDayEvent)), __LINE__);
        }
        $this->IsAllDayEvent = $isAllDayEvent;
        
        return $this;
    }
    /**
     * Get LegacyFreeBusyStatus value
     * @return string|null
     */
    public function getLegacyFreeBusyStatus(): ?string
    {
        return $this->LegacyFreeBusyStatus;
    }
    /**
     * Set LegacyFreeBusyStatus value
     * @uses \EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $legacyFreeBusyStatus
     * @return \StructType\EwsCalendarItemType
     */
    public function setLegacyFreeBusyStatus(?string $legacyFreeBusyStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsLegacyFreeBusyType::valueIsValid($legacyFreeBusyStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsLegacyFreeBusyType', is_array($legacyFreeBusyStatus) ? implode(', ', $legacyFreeBusyStatus) : var_export($legacyFreeBusyStatus, true), implode(', ', \EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->LegacyFreeBusyStatus = $legacyFreeBusyStatus;
        
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
     * @return \StructType\EwsCalendarItemType
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
     * Get When value
     * @return string|null
     */
    public function getWhen(): ?string
    {
        return $this->When;
    }
    /**
     * Set When value
     * @param string $when
     * @return \StructType\EwsCalendarItemType
     */
    public function setWhen(?string $when = null): self
    {
        // validation for constraint: string
        if (!is_null($when) && !is_string($when)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($when, true), gettype($when)), __LINE__);
        }
        $this->When = $when;
        
        return $this;
    }
    /**
     * Get IsMeeting value
     * @return bool|null
     */
    public function getIsMeeting(): ?bool
    {
        return $this->IsMeeting;
    }
    /**
     * Set IsMeeting value
     * @param bool $isMeeting
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsMeeting(?bool $isMeeting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMeeting) && !is_bool($isMeeting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMeeting, true), gettype($isMeeting)), __LINE__);
        }
        $this->IsMeeting = $isMeeting;
        
        return $this;
    }
    /**
     * Get IsCancelled value
     * @return bool|null
     */
    public function getIsCancelled(): ?bool
    {
        return $this->IsCancelled;
    }
    /**
     * Set IsCancelled value
     * @param bool $isCancelled
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsCancelled(?bool $isCancelled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCancelled) && !is_bool($isCancelled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCancelled, true), gettype($isCancelled)), __LINE__);
        }
        $this->IsCancelled = $isCancelled;
        
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param bool $isRecurring
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->IsRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get MeetingRequestWasSent value
     * @return bool|null
     */
    public function getMeetingRequestWasSent(): ?bool
    {
        return $this->MeetingRequestWasSent;
    }
    /**
     * Set MeetingRequestWasSent value
     * @param bool $meetingRequestWasSent
     * @return \StructType\EwsCalendarItemType
     */
    public function setMeetingRequestWasSent(?bool $meetingRequestWasSent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($meetingRequestWasSent) && !is_bool($meetingRequestWasSent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($meetingRequestWasSent, true), gettype($meetingRequestWasSent)), __LINE__);
        }
        $this->MeetingRequestWasSent = $meetingRequestWasSent;
        
        return $this;
    }
    /**
     * Get IsResponseRequested value
     * @return bool|null
     */
    public function getIsResponseRequested(): ?bool
    {
        return $this->IsResponseRequested;
    }
    /**
     * Set IsResponseRequested value
     * @param bool $isResponseRequested
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsResponseRequested(?bool $isResponseRequested = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isResponseRequested) && !is_bool($isResponseRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isResponseRequested, true), gettype($isResponseRequested)), __LINE__);
        }
        $this->IsResponseRequested = $isResponseRequested;
        
        return $this;
    }
    /**
     * Get CalendarItemType value
     * @return string|null
     */
    public function getCalendarItemType(): ?string
    {
        return $this->CalendarItemType;
    }
    /**
     * Set CalendarItemType value
     * @uses \EnumType\EwsCalendarItemTypeType::valueIsValid()
     * @uses \EnumType\EwsCalendarItemTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $calendarItemType
     * @return \StructType\EwsCalendarItemType
     */
    public function setCalendarItemType(?string $calendarItemType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarItemTypeType::valueIsValid($calendarItemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarItemTypeType', is_array($calendarItemType) ? implode(', ', $calendarItemType) : var_export($calendarItemType, true), implode(', ', \EnumType\EwsCalendarItemTypeType::getValidValues())), __LINE__);
        }
        $this->CalendarItemType = $calendarItemType;
        
        return $this;
    }
    /**
     * Get MyResponseType value
     * @return string|null
     */
    public function getMyResponseType(): ?string
    {
        return $this->MyResponseType;
    }
    /**
     * Set MyResponseType value
     * @uses \EnumType\EwsResponseTypeType::valueIsValid()
     * @uses \EnumType\EwsResponseTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $myResponseType
     * @return \StructType\EwsCalendarItemType
     */
    public function setMyResponseType(?string $myResponseType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsResponseTypeType::valueIsValid($myResponseType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsResponseTypeType', is_array($myResponseType) ? implode(', ', $myResponseType) : var_export($myResponseType, true), implode(', ', \EnumType\EwsResponseTypeType::getValidValues())), __LINE__);
        }
        $this->MyResponseType = $myResponseType;
        
        return $this;
    }
    /**
     * Get Organizer value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getOrganizer(): ?\StructType\EwsSingleRecipientType
    {
        return $this->Organizer;
    }
    /**
     * Set Organizer value
     * @param \StructType\EwsSingleRecipientType $organizer
     * @return \StructType\EwsCalendarItemType
     */
    public function setOrganizer(?\StructType\EwsSingleRecipientType $organizer = null): self
    {
        $this->Organizer = $organizer;
        
        return $this;
    }
    /**
     * Get RequiredAttendees value
     * @return \ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    public function getRequiredAttendees(): ?\ArrayType\EwsNonEmptyArrayOfAttendeesType
    {
        return $this->RequiredAttendees;
    }
    /**
     * Set RequiredAttendees value
     * @param \ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees
     * @return \StructType\EwsCalendarItemType
     */
    public function setRequiredAttendees(?\ArrayType\EwsNonEmptyArrayOfAttendeesType $requiredAttendees = null): self
    {
        $this->RequiredAttendees = $requiredAttendees;
        
        return $this;
    }
    /**
     * Get OptionalAttendees value
     * @return \ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    public function getOptionalAttendees(): ?\ArrayType\EwsNonEmptyArrayOfAttendeesType
    {
        return $this->OptionalAttendees;
    }
    /**
     * Set OptionalAttendees value
     * @param \ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees
     * @return \StructType\EwsCalendarItemType
     */
    public function setOptionalAttendees(?\ArrayType\EwsNonEmptyArrayOfAttendeesType $optionalAttendees = null): self
    {
        $this->OptionalAttendees = $optionalAttendees;
        
        return $this;
    }
    /**
     * Get Resources value
     * @return \ArrayType\EwsNonEmptyArrayOfAttendeesType|null
     */
    public function getResources(): ?\ArrayType\EwsNonEmptyArrayOfAttendeesType
    {
        return $this->Resources;
    }
    /**
     * Set Resources value
     * @param \ArrayType\EwsNonEmptyArrayOfAttendeesType $resources
     * @return \StructType\EwsCalendarItemType
     */
    public function setResources(?\ArrayType\EwsNonEmptyArrayOfAttendeesType $resources = null): self
    {
        $this->Resources = $resources;
        
        return $this;
    }
    /**
     * Get InboxReminders value
     * @return \ArrayType\EwsArrayOfInboxReminderType|null
     */
    public function getInboxReminders(): ?\ArrayType\EwsArrayOfInboxReminderType
    {
        return $this->InboxReminders;
    }
    /**
     * Set InboxReminders value
     * @param \ArrayType\EwsArrayOfInboxReminderType $inboxReminders
     * @return \StructType\EwsCalendarItemType
     */
    public function setInboxReminders(?\ArrayType\EwsArrayOfInboxReminderType $inboxReminders = null): self
    {
        $this->InboxReminders = $inboxReminders;
        
        return $this;
    }
    /**
     * Get ConflictingMeetingCount value
     * @return int|null
     */
    public function getConflictingMeetingCount(): ?int
    {
        return $this->ConflictingMeetingCount;
    }
    /**
     * Set ConflictingMeetingCount value
     * @param int $conflictingMeetingCount
     * @return \StructType\EwsCalendarItemType
     */
    public function setConflictingMeetingCount(?int $conflictingMeetingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($conflictingMeetingCount) && !(is_int($conflictingMeetingCount) || ctype_digit($conflictingMeetingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($conflictingMeetingCount, true), gettype($conflictingMeetingCount)), __LINE__);
        }
        $this->ConflictingMeetingCount = $conflictingMeetingCount;
        
        return $this;
    }
    /**
     * Get AdjacentMeetingCount value
     * @return int|null
     */
    public function getAdjacentMeetingCount(): ?int
    {
        return $this->AdjacentMeetingCount;
    }
    /**
     * Set AdjacentMeetingCount value
     * @param int $adjacentMeetingCount
     * @return \StructType\EwsCalendarItemType
     */
    public function setAdjacentMeetingCount(?int $adjacentMeetingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($adjacentMeetingCount) && !(is_int($adjacentMeetingCount) || ctype_digit($adjacentMeetingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adjacentMeetingCount, true), gettype($adjacentMeetingCount)), __LINE__);
        }
        $this->AdjacentMeetingCount = $adjacentMeetingCount;
        
        return $this;
    }
    /**
     * Get ConflictingMeetings value
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getConflictingMeetings(): ?\StructType\EwsNonEmptyArrayOfAllItemsType
    {
        return $this->ConflictingMeetings;
    }
    /**
     * Set ConflictingMeetings value
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings
     * @return \StructType\EwsCalendarItemType
     */
    public function setConflictingMeetings(?\StructType\EwsNonEmptyArrayOfAllItemsType $conflictingMeetings = null): self
    {
        $this->ConflictingMeetings = $conflictingMeetings;
        
        return $this;
    }
    /**
     * Get AdjacentMeetings value
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getAdjacentMeetings(): ?\StructType\EwsNonEmptyArrayOfAllItemsType
    {
        return $this->AdjacentMeetings;
    }
    /**
     * Set AdjacentMeetings value
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings
     * @return \StructType\EwsCalendarItemType
     */
    public function setAdjacentMeetings(?\StructType\EwsNonEmptyArrayOfAllItemsType $adjacentMeetings = null): self
    {
        $this->AdjacentMeetings = $adjacentMeetings;
        
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \StructType\EwsCalendarItemType
     */
    public function setDuration(?string $duration = null): self
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string|null
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \StructType\EwsCalendarItemType
     */
    public function setTimeZone(?string $timeZone = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZone, true), gettype($timeZone)), __LINE__);
        }
        $this->TimeZone = $timeZone;
        
        return $this;
    }
    /**
     * Get AppointmentReplyTime value
     * @return string|null
     */
    public function getAppointmentReplyTime(): ?string
    {
        return $this->AppointmentReplyTime;
    }
    /**
     * Set AppointmentReplyTime value
     * @param string $appointmentReplyTime
     * @return \StructType\EwsCalendarItemType
     */
    public function setAppointmentReplyTime(?string $appointmentReplyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($appointmentReplyTime) && !is_string($appointmentReplyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appointmentReplyTime, true), gettype($appointmentReplyTime)), __LINE__);
        }
        $this->AppointmentReplyTime = $appointmentReplyTime;
        
        return $this;
    }
    /**
     * Get AppointmentSequenceNumber value
     * @return int|null
     */
    public function getAppointmentSequenceNumber(): ?int
    {
        return $this->AppointmentSequenceNumber;
    }
    /**
     * Set AppointmentSequenceNumber value
     * @param int $appointmentSequenceNumber
     * @return \StructType\EwsCalendarItemType
     */
    public function setAppointmentSequenceNumber(?int $appointmentSequenceNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($appointmentSequenceNumber) && !(is_int($appointmentSequenceNumber) || ctype_digit($appointmentSequenceNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($appointmentSequenceNumber, true), gettype($appointmentSequenceNumber)), __LINE__);
        }
        $this->AppointmentSequenceNumber = $appointmentSequenceNumber;
        
        return $this;
    }
    /**
     * Get AppointmentState value
     * @return int|null
     */
    public function getAppointmentState(): ?int
    {
        return $this->AppointmentState;
    }
    /**
     * Set AppointmentState value
     * @param int $appointmentState
     * @return \StructType\EwsCalendarItemType
     */
    public function setAppointmentState(?int $appointmentState = null): self
    {
        // validation for constraint: int
        if (!is_null($appointmentState) && !(is_int($appointmentState) || ctype_digit($appointmentState))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($appointmentState, true), gettype($appointmentState)), __LINE__);
        }
        $this->AppointmentState = $appointmentState;
        
        return $this;
    }
    /**
     * Get Recurrence value
     * @return \StructType\EwsRecurrenceType|null
     */
    public function getRecurrence(): ?\StructType\EwsRecurrenceType
    {
        return $this->Recurrence;
    }
    /**
     * Set Recurrence value
     * @param \StructType\EwsRecurrenceType $recurrence
     * @return \StructType\EwsCalendarItemType
     */
    public function setRecurrence(?\StructType\EwsRecurrenceType $recurrence = null): self
    {
        $this->Recurrence = $recurrence;
        
        return $this;
    }
    /**
     * Get FirstOccurrence value
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function getFirstOccurrence(): ?\StructType\EwsOccurrenceInfoType
    {
        return $this->FirstOccurrence;
    }
    /**
     * Set FirstOccurrence value
     * @param \StructType\EwsOccurrenceInfoType $firstOccurrence
     * @return \StructType\EwsCalendarItemType
     */
    public function setFirstOccurrence(?\StructType\EwsOccurrenceInfoType $firstOccurrence = null): self
    {
        $this->FirstOccurrence = $firstOccurrence;
        
        return $this;
    }
    /**
     * Get LastOccurrence value
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function getLastOccurrence(): ?\StructType\EwsOccurrenceInfoType
    {
        return $this->LastOccurrence;
    }
    /**
     * Set LastOccurrence value
     * @param \StructType\EwsOccurrenceInfoType $lastOccurrence
     * @return \StructType\EwsCalendarItemType
     */
    public function setLastOccurrence(?\StructType\EwsOccurrenceInfoType $lastOccurrence = null): self
    {
        $this->LastOccurrence = $lastOccurrence;
        
        return $this;
    }
    /**
     * Get ModifiedOccurrences value
     * @return \ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType|null
     */
    public function getModifiedOccurrences(): ?\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
    {
        return $this->ModifiedOccurrences;
    }
    /**
     * Set ModifiedOccurrences value
     * @param \ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences
     * @return \StructType\EwsCalendarItemType
     */
    public function setModifiedOccurrences(?\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType $modifiedOccurrences = null): self
    {
        $this->ModifiedOccurrences = $modifiedOccurrences;
        
        return $this;
    }
    /**
     * Get DeletedOccurrences value
     * @return \ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType|null
     */
    public function getDeletedOccurrences(): ?\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
    {
        return $this->DeletedOccurrences;
    }
    /**
     * Set DeletedOccurrences value
     * @param \ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences
     * @return \StructType\EwsCalendarItemType
     */
    public function setDeletedOccurrences(?\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType $deletedOccurrences = null): self
    {
        $this->DeletedOccurrences = $deletedOccurrences;
        
        return $this;
    }
    /**
     * Get MeetingTimeZone value
     * @return \StructType\EwsTimeZoneType|null
     */
    public function getMeetingTimeZone(): ?\StructType\EwsTimeZoneType
    {
        return $this->MeetingTimeZone;
    }
    /**
     * Set MeetingTimeZone value
     * @param \StructType\EwsTimeZoneType $meetingTimeZone
     * @return \StructType\EwsCalendarItemType
     */
    public function setMeetingTimeZone(?\StructType\EwsTimeZoneType $meetingTimeZone = null): self
    {
        $this->MeetingTimeZone = $meetingTimeZone;
        
        return $this;
    }
    /**
     * Get StartTimeZone value
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function getStartTimeZone(): ?\StructType\EwsTimeZoneDefinitionType
    {
        return $this->StartTimeZone;
    }
    /**
     * Set StartTimeZone value
     * @param \StructType\EwsTimeZoneDefinitionType $startTimeZone
     * @return \StructType\EwsCalendarItemType
     */
    public function setStartTimeZone(?\StructType\EwsTimeZoneDefinitionType $startTimeZone = null): self
    {
        $this->StartTimeZone = $startTimeZone;
        
        return $this;
    }
    /**
     * Get EndTimeZone value
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function getEndTimeZone(): ?\StructType\EwsTimeZoneDefinitionType
    {
        return $this->EndTimeZone;
    }
    /**
     * Set EndTimeZone value
     * @param \StructType\EwsTimeZoneDefinitionType $endTimeZone
     * @return \StructType\EwsCalendarItemType
     */
    public function setEndTimeZone(?\StructType\EwsTimeZoneDefinitionType $endTimeZone = null): self
    {
        $this->EndTimeZone = $endTimeZone;
        
        return $this;
    }
    /**
     * Get ConferenceType value
     * @return int|null
     */
    public function getConferenceType(): ?int
    {
        return $this->ConferenceType;
    }
    /**
     * Set ConferenceType value
     * @param int $conferenceType
     * @return \StructType\EwsCalendarItemType
     */
    public function setConferenceType(?int $conferenceType = null): self
    {
        // validation for constraint: int
        if (!is_null($conferenceType) && !(is_int($conferenceType) || ctype_digit($conferenceType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($conferenceType, true), gettype($conferenceType)), __LINE__);
        }
        $this->ConferenceType = $conferenceType;
        
        return $this;
    }
    /**
     * Get AllowNewTimeProposal value
     * @return bool|null
     */
    public function getAllowNewTimeProposal(): ?bool
    {
        return $this->AllowNewTimeProposal;
    }
    /**
     * Set AllowNewTimeProposal value
     * @param bool $allowNewTimeProposal
     * @return \StructType\EwsCalendarItemType
     */
    public function setAllowNewTimeProposal(?bool $allowNewTimeProposal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowNewTimeProposal) && !is_bool($allowNewTimeProposal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowNewTimeProposal, true), gettype($allowNewTimeProposal)), __LINE__);
        }
        $this->AllowNewTimeProposal = $allowNewTimeProposal;
        
        return $this;
    }
    /**
     * Get IsOnlineMeeting value
     * @return bool|null
     */
    public function getIsOnlineMeeting(): ?bool
    {
        return $this->IsOnlineMeeting;
    }
    /**
     * Set IsOnlineMeeting value
     * @param bool $isOnlineMeeting
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsOnlineMeeting(?bool $isOnlineMeeting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOnlineMeeting) && !is_bool($isOnlineMeeting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOnlineMeeting, true), gettype($isOnlineMeeting)), __LINE__);
        }
        $this->IsOnlineMeeting = $isOnlineMeeting;
        
        return $this;
    }
    /**
     * Get MeetingWorkspaceUrl value
     * @return string|null
     */
    public function getMeetingWorkspaceUrl(): ?string
    {
        return $this->MeetingWorkspaceUrl;
    }
    /**
     * Set MeetingWorkspaceUrl value
     * @param string $meetingWorkspaceUrl
     * @return \StructType\EwsCalendarItemType
     */
    public function setMeetingWorkspaceUrl(?string $meetingWorkspaceUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($meetingWorkspaceUrl) && !is_string($meetingWorkspaceUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meetingWorkspaceUrl, true), gettype($meetingWorkspaceUrl)), __LINE__);
        }
        $this->MeetingWorkspaceUrl = $meetingWorkspaceUrl;
        
        return $this;
    }
    /**
     * Get NetShowUrl value
     * @return string|null
     */
    public function getNetShowUrl(): ?string
    {
        return $this->NetShowUrl;
    }
    /**
     * Set NetShowUrl value
     * @param string $netShowUrl
     * @return \StructType\EwsCalendarItemType
     */
    public function setNetShowUrl(?string $netShowUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($netShowUrl) && !is_string($netShowUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netShowUrl, true), gettype($netShowUrl)), __LINE__);
        }
        $this->NetShowUrl = $netShowUrl;
        
        return $this;
    }
    /**
     * Get EnhancedLocation value
     * @return \StructType\EwsEnhancedLocationType|null
     */
    public function getEnhancedLocation(): ?\StructType\EwsEnhancedLocationType
    {
        return $this->EnhancedLocation;
    }
    /**
     * Set EnhancedLocation value
     * @param \StructType\EwsEnhancedLocationType $enhancedLocation
     * @return \StructType\EwsCalendarItemType
     */
    public function setEnhancedLocation(?\StructType\EwsEnhancedLocationType $enhancedLocation = null): self
    {
        $this->EnhancedLocation = $enhancedLocation;
        
        return $this;
    }
    /**
     * Get StartWallClock value
     * @return string|null
     */
    public function getStartWallClock(): ?string
    {
        return $this->StartWallClock;
    }
    /**
     * Set StartWallClock value
     * @param string $startWallClock
     * @return \StructType\EwsCalendarItemType
     */
    public function setStartWallClock(?string $startWallClock = null): self
    {
        // validation for constraint: string
        if (!is_null($startWallClock) && !is_string($startWallClock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startWallClock, true), gettype($startWallClock)), __LINE__);
        }
        $this->StartWallClock = $startWallClock;
        
        return $this;
    }
    /**
     * Get EndWallClock value
     * @return string|null
     */
    public function getEndWallClock(): ?string
    {
        return $this->EndWallClock;
    }
    /**
     * Set EndWallClock value
     * @param string $endWallClock
     * @return \StructType\EwsCalendarItemType
     */
    public function setEndWallClock(?string $endWallClock = null): self
    {
        // validation for constraint: string
        if (!is_null($endWallClock) && !is_string($endWallClock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endWallClock, true), gettype($endWallClock)), __LINE__);
        }
        $this->EndWallClock = $endWallClock;
        
        return $this;
    }
    /**
     * Get StartTimeZoneId value
     * @return string|null
     */
    public function getStartTimeZoneId(): ?string
    {
        return $this->StartTimeZoneId;
    }
    /**
     * Set StartTimeZoneId value
     * @param string $startTimeZoneId
     * @return \StructType\EwsCalendarItemType
     */
    public function setStartTimeZoneId(?string $startTimeZoneId = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeZoneId) && !is_string($startTimeZoneId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeZoneId, true), gettype($startTimeZoneId)), __LINE__);
        }
        $this->StartTimeZoneId = $startTimeZoneId;
        
        return $this;
    }
    /**
     * Get EndTimeZoneId value
     * @return string|null
     */
    public function getEndTimeZoneId(): ?string
    {
        return $this->EndTimeZoneId;
    }
    /**
     * Set EndTimeZoneId value
     * @param string $endTimeZoneId
     * @return \StructType\EwsCalendarItemType
     */
    public function setEndTimeZoneId(?string $endTimeZoneId = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeZoneId) && !is_string($endTimeZoneId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeZoneId, true), gettype($endTimeZoneId)), __LINE__);
        }
        $this->EndTimeZoneId = $endTimeZoneId;
        
        return $this;
    }
    /**
     * Get IntendedFreeBusyStatus value
     * @return string|null
     */
    public function getIntendedFreeBusyStatus(): ?string
    {
        return $this->IntendedFreeBusyStatus;
    }
    /**
     * Set IntendedFreeBusyStatus value
     * @uses \EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $intendedFreeBusyStatus
     * @return \StructType\EwsCalendarItemType
     */
    public function setIntendedFreeBusyStatus(?string $intendedFreeBusyStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsLegacyFreeBusyType::valueIsValid($intendedFreeBusyStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsLegacyFreeBusyType', is_array($intendedFreeBusyStatus) ? implode(', ', $intendedFreeBusyStatus) : var_export($intendedFreeBusyStatus, true), implode(', ', \EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->IntendedFreeBusyStatus = $intendedFreeBusyStatus;
        
        return $this;
    }
    /**
     * Get JoinOnlineMeetingUrl value
     * @return string|null
     */
    public function getJoinOnlineMeetingUrl(): ?string
    {
        return $this->JoinOnlineMeetingUrl;
    }
    /**
     * Set JoinOnlineMeetingUrl value
     * @param string $joinOnlineMeetingUrl
     * @return \StructType\EwsCalendarItemType
     */
    public function setJoinOnlineMeetingUrl(?string $joinOnlineMeetingUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($joinOnlineMeetingUrl) && !is_string($joinOnlineMeetingUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinOnlineMeetingUrl, true), gettype($joinOnlineMeetingUrl)), __LINE__);
        }
        $this->JoinOnlineMeetingUrl = $joinOnlineMeetingUrl;
        
        return $this;
    }
    /**
     * Get OnlineMeetingSettings value
     * @return \StructType\EwsOnlineMeetingSettingsType|null
     */
    public function getOnlineMeetingSettings(): ?\StructType\EwsOnlineMeetingSettingsType
    {
        return $this->OnlineMeetingSettings;
    }
    /**
     * Set OnlineMeetingSettings value
     * @param \StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings
     * @return \StructType\EwsCalendarItemType
     */
    public function setOnlineMeetingSettings(?\StructType\EwsOnlineMeetingSettingsType $onlineMeetingSettings = null): self
    {
        $this->OnlineMeetingSettings = $onlineMeetingSettings;
        
        return $this;
    }
    /**
     * Get IsOrganizer value
     * @return bool|null
     */
    public function getIsOrganizer(): ?bool
    {
        return $this->IsOrganizer;
    }
    /**
     * Set IsOrganizer value
     * @param bool $isOrganizer
     * @return \StructType\EwsCalendarItemType
     */
    public function setIsOrganizer(?bool $isOrganizer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrganizer) && !is_bool($isOrganizer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrganizer, true), gettype($isOrganizer)), __LINE__);
        }
        $this->IsOrganizer = $isOrganizer;
        
        return $this;
    }
}
