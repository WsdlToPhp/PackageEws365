<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetItemFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSetItemFieldType extends EwsItemChangeDescriptionType
{
    /**
     * The Item
     * @var \Ews\StructType\EwsItemType
     */
    public $Item;
    /**
     * The Message
     * @var \Ews\StructType\EwsMessageType
     */
    public $Message;
    /**
     * The CalendarItem
     * @var \Ews\StructType\EwsCalendarItemType
     */
    public $CalendarItem;
    /**
     * The Contact
     * @var \Ews\StructType\EwsContactItemType
     */
    public $Contact;
    /**
     * The DistributionList
     * @var \Ews\StructType\EwsDistributionListType
     */
    public $DistributionList;
    /**
     * The MeetingMessage
     * @var \Ews\StructType\EwsMeetingMessageType
     */
    public $MeetingMessage;
    /**
     * The MeetingRequest
     * @var \Ews\StructType\EwsMeetingRequestMessageType
     */
    public $MeetingRequest;
    /**
     * The MeetingResponse
     * @var \Ews\StructType\EwsMeetingResponseMessageType
     */
    public $MeetingResponse;
    /**
     * The MeetingCancellation
     * @var \Ews\StructType\EwsMeetingCancellationMessageType
     */
    public $MeetingCancellation;
    /**
     * The Task
     * @var \Ews\StructType\EwsTaskType
     */
    public $Task;
    /**
     * The PostItem
     * @var \Ews\StructType\EwsPostItemType
     */
    public $PostItem;
    /**
     * The RoleMember
     * @var \Ews\StructType\EwsRoleMemberItemType
     */
    public $RoleMember;
    /**
     * The Network
     * @var \Ews\StructType\EwsNetworkItemType
     */
    public $Network;
    /**
     * The Person
     * @var \Ews\StructType\EwsAbchPersonItemType
     */
    public $Person;
    /**
     * The Booking
     * @var \Ews\StructType\EwsBookingItemType
     */
    public $Booking;
    /**
     * The XrmOrganization
     * @var \Ews\StructType\EwsXrmOrganizationItemType
     */
    public $XrmOrganization;
    /**
     * Constructor method for SetItemFieldType
     * @uses EwsSetItemFieldType::setItem()
     * @uses EwsSetItemFieldType::setMessage()
     * @uses EwsSetItemFieldType::setCalendarItem()
     * @uses EwsSetItemFieldType::setContact()
     * @uses EwsSetItemFieldType::setDistributionList()
     * @uses EwsSetItemFieldType::setMeetingMessage()
     * @uses EwsSetItemFieldType::setMeetingRequest()
     * @uses EwsSetItemFieldType::setMeetingResponse()
     * @uses EwsSetItemFieldType::setMeetingCancellation()
     * @uses EwsSetItemFieldType::setTask()
     * @uses EwsSetItemFieldType::setPostItem()
     * @uses EwsSetItemFieldType::setRoleMember()
     * @uses EwsSetItemFieldType::setNetwork()
     * @uses EwsSetItemFieldType::setPerson()
     * @uses EwsSetItemFieldType::setBooking()
     * @uses EwsSetItemFieldType::setXrmOrganization()
     * @param \Ews\StructType\EwsItemType $item
     * @param \Ews\StructType\EwsMessageType $message
     * @param \Ews\StructType\EwsCalendarItemType $calendarItem
     * @param \Ews\StructType\EwsContactItemType $contact
     * @param \Ews\StructType\EwsDistributionListType $distributionList
     * @param \Ews\StructType\EwsMeetingMessageType $meetingMessage
     * @param \Ews\StructType\EwsMeetingRequestMessageType $meetingRequest
     * @param \Ews\StructType\EwsMeetingResponseMessageType $meetingResponse
     * @param \Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation
     * @param \Ews\StructType\EwsTaskType $task
     * @param \Ews\StructType\EwsPostItemType $postItem
     * @param \Ews\StructType\EwsRoleMemberItemType $roleMember
     * @param \Ews\StructType\EwsNetworkItemType $network
     * @param \Ews\StructType\EwsAbchPersonItemType $person
     * @param \Ews\StructType\EwsBookingItemType $booking
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(\Ews\StructType\EwsItemType $item = null, \Ews\StructType\EwsMessageType $message = null, \Ews\StructType\EwsCalendarItemType $calendarItem = null, \Ews\StructType\EwsContactItemType $contact = null, \Ews\StructType\EwsDistributionListType $distributionList = null, \Ews\StructType\EwsMeetingMessageType $meetingMessage = null, \Ews\StructType\EwsMeetingRequestMessageType $meetingRequest = null, \Ews\StructType\EwsMeetingResponseMessageType $meetingResponse = null, \Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null, \Ews\StructType\EwsTaskType $task = null, \Ews\StructType\EwsPostItemType $postItem = null, \Ews\StructType\EwsRoleMemberItemType $roleMember = null, \Ews\StructType\EwsNetworkItemType $network = null, \Ews\StructType\EwsAbchPersonItemType $person = null, \Ews\StructType\EwsBookingItemType $booking = null, \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        $this
            ->setItem($item)
            ->setMessage($message)
            ->setCalendarItem($calendarItem)
            ->setContact($contact)
            ->setDistributionList($distributionList)
            ->setMeetingMessage($meetingMessage)
            ->setMeetingRequest($meetingRequest)
            ->setMeetingResponse($meetingResponse)
            ->setMeetingCancellation($meetingCancellation)
            ->setTask($task)
            ->setPostItem($postItem)
            ->setRoleMember($roleMember)
            ->setNetwork($network)
            ->setPerson($person)
            ->setBooking($booking)
            ->setXrmOrganization($xrmOrganization);
    }
    /**
     * Get Item value
     * @return \Ews\StructType\EwsItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \Ews\StructType\EwsItemType $item
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setItem(\Ews\StructType\EwsItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get Message value
     * @return \Ews\StructType\EwsMessageType|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param \Ews\StructType\EwsMessageType $message
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMessage(\Ews\StructType\EwsMessageType $message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get CalendarItem value
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function getCalendarItem()
    {
        return $this->CalendarItem;
    }
    /**
     * Set CalendarItem value
     * @param \Ews\StructType\EwsCalendarItemType $calendarItem
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setCalendarItem(\Ews\StructType\EwsCalendarItemType $calendarItem = null)
    {
        $this->CalendarItem = $calendarItem;
        return $this;
    }
    /**
     * Get Contact value
     * @return \Ews\StructType\EwsContactItemType|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Ews\StructType\EwsContactItemType $contact
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setContact(\Ews\StructType\EwsContactItemType $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get DistributionList value
     * @return \Ews\StructType\EwsDistributionListType|null
     */
    public function getDistributionList()
    {
        return $this->DistributionList;
    }
    /**
     * Set DistributionList value
     * @param \Ews\StructType\EwsDistributionListType $distributionList
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setDistributionList(\Ews\StructType\EwsDistributionListType $distributionList = null)
    {
        $this->DistributionList = $distributionList;
        return $this;
    }
    /**
     * Get MeetingMessage value
     * @return \Ews\StructType\EwsMeetingMessageType|null
     */
    public function getMeetingMessage()
    {
        return $this->MeetingMessage;
    }
    /**
     * Set MeetingMessage value
     * @param \Ews\StructType\EwsMeetingMessageType $meetingMessage
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingMessage(\Ews\StructType\EwsMeetingMessageType $meetingMessage = null)
    {
        $this->MeetingMessage = $meetingMessage;
        return $this;
    }
    /**
     * Get MeetingRequest value
     * @return \Ews\StructType\EwsMeetingRequestMessageType|null
     */
    public function getMeetingRequest()
    {
        return $this->MeetingRequest;
    }
    /**
     * Set MeetingRequest value
     * @param \Ews\StructType\EwsMeetingRequestMessageType $meetingRequest
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingRequest(\Ews\StructType\EwsMeetingRequestMessageType $meetingRequest = null)
    {
        $this->MeetingRequest = $meetingRequest;
        return $this;
    }
    /**
     * Get MeetingResponse value
     * @return \Ews\StructType\EwsMeetingResponseMessageType|null
     */
    public function getMeetingResponse()
    {
        return $this->MeetingResponse;
    }
    /**
     * Set MeetingResponse value
     * @param \Ews\StructType\EwsMeetingResponseMessageType $meetingResponse
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingResponse(\Ews\StructType\EwsMeetingResponseMessageType $meetingResponse = null)
    {
        $this->MeetingResponse = $meetingResponse;
        return $this;
    }
    /**
     * Get MeetingCancellation value
     * @return \Ews\StructType\EwsMeetingCancellationMessageType|null
     */
    public function getMeetingCancellation()
    {
        return $this->MeetingCancellation;
    }
    /**
     * Set MeetingCancellation value
     * @param \Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingCancellation(\Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null)
    {
        $this->MeetingCancellation = $meetingCancellation;
        return $this;
    }
    /**
     * Get Task value
     * @return \Ews\StructType\EwsTaskType|null
     */
    public function getTask()
    {
        return $this->Task;
    }
    /**
     * Set Task value
     * @param \Ews\StructType\EwsTaskType $task
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setTask(\Ews\StructType\EwsTaskType $task = null)
    {
        $this->Task = $task;
        return $this;
    }
    /**
     * Get PostItem value
     * @return \Ews\StructType\EwsPostItemType|null
     */
    public function getPostItem()
    {
        return $this->PostItem;
    }
    /**
     * Set PostItem value
     * @param \Ews\StructType\EwsPostItemType $postItem
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setPostItem(\Ews\StructType\EwsPostItemType $postItem = null)
    {
        $this->PostItem = $postItem;
        return $this;
    }
    /**
     * Get RoleMember value
     * @return \Ews\StructType\EwsRoleMemberItemType|null
     */
    public function getRoleMember()
    {
        return $this->RoleMember;
    }
    /**
     * Set RoleMember value
     * @param \Ews\StructType\EwsRoleMemberItemType $roleMember
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setRoleMember(\Ews\StructType\EwsRoleMemberItemType $roleMember = null)
    {
        $this->RoleMember = $roleMember;
        return $this;
    }
    /**
     * Get Network value
     * @return \Ews\StructType\EwsNetworkItemType|null
     */
    public function getNetwork()
    {
        return $this->Network;
    }
    /**
     * Set Network value
     * @param \Ews\StructType\EwsNetworkItemType $network
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setNetwork(\Ews\StructType\EwsNetworkItemType $network = null)
    {
        $this->Network = $network;
        return $this;
    }
    /**
     * Get Person value
     * @return \Ews\StructType\EwsAbchPersonItemType|null
     */
    public function getPerson()
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \Ews\StructType\EwsAbchPersonItemType $person
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setPerson(\Ews\StructType\EwsAbchPersonItemType $person = null)
    {
        $this->Person = $person;
        return $this;
    }
    /**
     * Get Booking value
     * @return \Ews\StructType\EwsBookingItemType|null
     */
    public function getBooking()
    {
        return $this->Booking;
    }
    /**
     * Set Booking value
     * @param \Ews\StructType\EwsBookingItemType $booking
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setBooking(\Ews\StructType\EwsBookingItemType $booking = null)
    {
        $this->Booking = $booking;
        return $this;
    }
    /**
     * Get XrmOrganization value
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function getXrmOrganization()
    {
        return $this->XrmOrganization;
    }
    /**
     * Set XrmOrganization value
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setXrmOrganization(\Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        $this->XrmOrganization = $xrmOrganization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetItemFieldType
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
