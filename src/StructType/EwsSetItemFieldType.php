<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetItemFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetItemFieldType extends EwsItemChangeDescriptionType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemType
     */
    public $Item;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMessageType
     */
    public $Message;
    /**
     * The CalendarItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsCalendarItemType
     */
    public $CalendarItem;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsContactItemType
     */
    public $Contact;
    /**
     * The DistributionList
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDistributionListType
     */
    public $DistributionList;
    /**
     * The MeetingMessage
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingMessageType
     */
    public $MeetingMessage;
    /**
     * The MeetingRequest
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingRequestMessageType
     */
    public $MeetingRequest;
    /**
     * The MeetingResponse
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingResponseMessageType
     */
    public $MeetingResponse;
    /**
     * The MeetingCancellation
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingCancellationMessageType
     */
    public $MeetingCancellation;
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsTaskType
     */
    public $Task;
    /**
     * The PostItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPostItemType
     */
    public $PostItem;
    /**
     * The RoleMember
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRoleMemberItemType
     */
    public $RoleMember;
    /**
     * The Network
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsNetworkItemType
     */
    public $Network;
    /**
     * The Person
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAbchPersonItemType
     */
    public $Person;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBookingItemType
     */
    public $Booking;
    /**
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
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
        return isset($this->Item) ? $this->Item : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromSetItem($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Item can\'t be set as the property %s is already set. Only one property must be set among these properties: Item, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Item value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemType $item
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setItem(\Ews\StructType\EwsItemType $item = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromSetItem($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        if (is_null($item) || (is_array($item) && empty($item))) {
            unset($this->Item);
        } else {
            $this->Item = $item;
        }
        return $this;
    }
    /**
     * Get Message value
     * @return \Ews\StructType\EwsMessageType|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMessageForChoiceConstraintsFromSetMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Message can\'t be set as the property %s is already set. Only one property must be set among these properties: Message, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Message value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMessageType $message
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMessage(\Ews\StructType\EwsMessageType $message = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($messageChoiceErrorMessage = self::validateMessageForChoiceConstraintsFromSetMessage($message))) {
            throw new \InvalidArgumentException($messageChoiceErrorMessage, __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
    /**
     * Get CalendarItem value
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function getCalendarItem()
    {
        return isset($this->CalendarItem) ? $this->CalendarItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCalendarItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCalendarItemForChoiceConstraintsFromSetCalendarItem($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CalendarItem can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CalendarItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarItemType $calendarItem
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setCalendarItem(\Ews\StructType\EwsCalendarItemType $calendarItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($calendarItemChoiceErrorMessage = self::validateCalendarItemForChoiceConstraintsFromSetCalendarItem($calendarItem))) {
            throw new \InvalidArgumentException($calendarItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($calendarItem) || (is_array($calendarItem) && empty($calendarItem))) {
            unset($this->CalendarItem);
        } else {
            $this->CalendarItem = $calendarItem;
        }
        return $this;
    }
    /**
     * Get Contact value
     * @return \Ews\StructType\EwsContactItemType|null
     */
    public function getContact()
    {
        return isset($this->Contact) ? $this->Contact : null;
    }
    /**
     * This method is responsible for validating the value passed to the setContact method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateContactForChoiceConstraintsFromSetContact($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Contact can\'t be set as the property %s is already set. Only one property must be set among these properties: Contact, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Contact value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactItemType $contact
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setContact(\Ews\StructType\EwsContactItemType $contact = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($contactChoiceErrorMessage = self::validateContactForChoiceConstraintsFromSetContact($contact))) {
            throw new \InvalidArgumentException($contactChoiceErrorMessage, __LINE__);
        }
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->Contact);
        } else {
            $this->Contact = $contact;
        }
        return $this;
    }
    /**
     * Get DistributionList value
     * @return \Ews\StructType\EwsDistributionListType|null
     */
    public function getDistributionList()
    {
        return isset($this->DistributionList) ? $this->DistributionList : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDistributionList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistributionList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistributionListForChoiceConstraintsFromSetDistributionList($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DistributionList can\'t be set as the property %s is already set. Only one property must be set among these properties: DistributionList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DistributionList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDistributionListType $distributionList
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setDistributionList(\Ews\StructType\EwsDistributionListType $distributionList = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($distributionListChoiceErrorMessage = self::validateDistributionListForChoiceConstraintsFromSetDistributionList($distributionList))) {
            throw new \InvalidArgumentException($distributionListChoiceErrorMessage, __LINE__);
        }
        if (is_null($distributionList) || (is_array($distributionList) && empty($distributionList))) {
            unset($this->DistributionList);
        } else {
            $this->DistributionList = $distributionList;
        }
        return $this;
    }
    /**
     * Get MeetingMessage value
     * @return \Ews\StructType\EwsMeetingMessageType|null
     */
    public function getMeetingMessage()
    {
        return isset($this->MeetingMessage) ? $this->MeetingMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMeetingMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMeetingMessageForChoiceConstraintsFromSetMeetingMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MeetingMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MeetingMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingMessageType $meetingMessage
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingMessage(\Ews\StructType\EwsMeetingMessageType $meetingMessage = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingMessageChoiceErrorMessage = self::validateMeetingMessageForChoiceConstraintsFromSetMeetingMessage($meetingMessage))) {
            throw new \InvalidArgumentException($meetingMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($meetingMessage) || (is_array($meetingMessage) && empty($meetingMessage))) {
            unset($this->MeetingMessage);
        } else {
            $this->MeetingMessage = $meetingMessage;
        }
        return $this;
    }
    /**
     * Get MeetingRequest value
     * @return \Ews\StructType\EwsMeetingRequestMessageType|null
     */
    public function getMeetingRequest()
    {
        return isset($this->MeetingRequest) ? $this->MeetingRequest : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMeetingRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMeetingRequestForChoiceConstraintsFromSetMeetingRequest($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MeetingRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MeetingRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingRequestMessageType $meetingRequest
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingRequest(\Ews\StructType\EwsMeetingRequestMessageType $meetingRequest = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingRequestChoiceErrorMessage = self::validateMeetingRequestForChoiceConstraintsFromSetMeetingRequest($meetingRequest))) {
            throw new \InvalidArgumentException($meetingRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($meetingRequest) || (is_array($meetingRequest) && empty($meetingRequest))) {
            unset($this->MeetingRequest);
        } else {
            $this->MeetingRequest = $meetingRequest;
        }
        return $this;
    }
    /**
     * Get MeetingResponse value
     * @return \Ews\StructType\EwsMeetingResponseMessageType|null
     */
    public function getMeetingResponse()
    {
        return isset($this->MeetingResponse) ? $this->MeetingResponse : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMeetingResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingResponse method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMeetingResponseForChoiceConstraintsFromSetMeetingResponse($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MeetingResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MeetingResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingResponseMessageType $meetingResponse
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingResponse(\Ews\StructType\EwsMeetingResponseMessageType $meetingResponse = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingResponseChoiceErrorMessage = self::validateMeetingResponseForChoiceConstraintsFromSetMeetingResponse($meetingResponse))) {
            throw new \InvalidArgumentException($meetingResponseChoiceErrorMessage, __LINE__);
        }
        if (is_null($meetingResponse) || (is_array($meetingResponse) && empty($meetingResponse))) {
            unset($this->MeetingResponse);
        } else {
            $this->MeetingResponse = $meetingResponse;
        }
        return $this;
    }
    /**
     * Get MeetingCancellation value
     * @return \Ews\StructType\EwsMeetingCancellationMessageType|null
     */
    public function getMeetingCancellation()
    {
        return isset($this->MeetingCancellation) ? $this->MeetingCancellation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMeetingCancellation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingCancellation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMeetingCancellationForChoiceConstraintsFromSetMeetingCancellation($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MeetingCancellation can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingCancellation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MeetingCancellation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setMeetingCancellation(\Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingCancellationChoiceErrorMessage = self::validateMeetingCancellationForChoiceConstraintsFromSetMeetingCancellation($meetingCancellation))) {
            throw new \InvalidArgumentException($meetingCancellationChoiceErrorMessage, __LINE__);
        }
        if (is_null($meetingCancellation) || (is_array($meetingCancellation) && empty($meetingCancellation))) {
            unset($this->MeetingCancellation);
        } else {
            $this->MeetingCancellation = $meetingCancellation;
        }
        return $this;
    }
    /**
     * Get Task value
     * @return \Ews\StructType\EwsTaskType|null
     */
    public function getTask()
    {
        return isset($this->Task) ? $this->Task : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTask method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTaskForChoiceConstraintsFromSetTask($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Task can\'t be set as the property %s is already set. Only one property must be set among these properties: Task, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Task value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTaskType $task
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setTask(\Ews\StructType\EwsTaskType $task = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($taskChoiceErrorMessage = self::validateTaskForChoiceConstraintsFromSetTask($task))) {
            throw new \InvalidArgumentException($taskChoiceErrorMessage, __LINE__);
        }
        if (is_null($task) || (is_array($task) && empty($task))) {
            unset($this->Task);
        } else {
            $this->Task = $task;
        }
        return $this;
    }
    /**
     * Get PostItem value
     * @return \Ews\StructType\EwsPostItemType|null
     */
    public function getPostItem()
    {
        return isset($this->PostItem) ? $this->PostItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPostItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePostItemForChoiceConstraintsFromSetPostItem($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PostItem can\'t be set as the property %s is already set. Only one property must be set among these properties: PostItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PostItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPostItemType $postItem
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setPostItem(\Ews\StructType\EwsPostItemType $postItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($postItemChoiceErrorMessage = self::validatePostItemForChoiceConstraintsFromSetPostItem($postItem))) {
            throw new \InvalidArgumentException($postItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($postItem) || (is_array($postItem) && empty($postItem))) {
            unset($this->PostItem);
        } else {
            $this->PostItem = $postItem;
        }
        return $this;
    }
    /**
     * Get RoleMember value
     * @return \Ews\StructType\EwsRoleMemberItemType|null
     */
    public function getRoleMember()
    {
        return isset($this->RoleMember) ? $this->RoleMember : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRoleMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoleMember method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRoleMemberForChoiceConstraintsFromSetRoleMember($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property RoleMember can\'t be set as the property %s is already set. Only one property must be set among these properties: RoleMember, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RoleMember value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRoleMemberItemType $roleMember
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setRoleMember(\Ews\StructType\EwsRoleMemberItemType $roleMember = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($roleMemberChoiceErrorMessage = self::validateRoleMemberForChoiceConstraintsFromSetRoleMember($roleMember))) {
            throw new \InvalidArgumentException($roleMemberChoiceErrorMessage, __LINE__);
        }
        if (is_null($roleMember) || (is_array($roleMember) && empty($roleMember))) {
            unset($this->RoleMember);
        } else {
            $this->RoleMember = $roleMember;
        }
        return $this;
    }
    /**
     * Get Network value
     * @return \Ews\StructType\EwsNetworkItemType|null
     */
    public function getNetwork()
    {
        return isset($this->Network) ? $this->Network : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNetwork method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNetwork method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNetworkForChoiceConstraintsFromSetNetwork($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Network can\'t be set as the property %s is already set. Only one property must be set among these properties: Network, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Network value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNetworkItemType $network
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setNetwork(\Ews\StructType\EwsNetworkItemType $network = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($networkChoiceErrorMessage = self::validateNetworkForChoiceConstraintsFromSetNetwork($network))) {
            throw new \InvalidArgumentException($networkChoiceErrorMessage, __LINE__);
        }
        if (is_null($network) || (is_array($network) && empty($network))) {
            unset($this->Network);
        } else {
            $this->Network = $network;
        }
        return $this;
    }
    /**
     * Get Person value
     * @return \Ews\StructType\EwsAbchPersonItemType|null
     */
    public function getPerson()
    {
        return isset($this->Person) ? $this->Person : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePersonForChoiceConstraintsFromSetPerson($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Person can\'t be set as the property %s is already set. Only one property must be set among these properties: Person, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Person value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchPersonItemType $person
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setPerson(\Ews\StructType\EwsAbchPersonItemType $person = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($personChoiceErrorMessage = self::validatePersonForChoiceConstraintsFromSetPerson($person))) {
            throw new \InvalidArgumentException($personChoiceErrorMessage, __LINE__);
        }
        if (is_null($person) || (is_array($person) && empty($person))) {
            unset($this->Person);
        } else {
            $this->Person = $person;
        }
        return $this;
    }
    /**
     * Get Booking value
     * @return \Ews\StructType\EwsBookingItemType|null
     */
    public function getBooking()
    {
        return isset($this->Booking) ? $this->Booking : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBooking method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingForChoiceConstraintsFromSetBooking($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Booking can\'t be set as the property %s is already set. Only one property must be set among these properties: Booking, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Booking value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingItemType $booking
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setBooking(\Ews\StructType\EwsBookingItemType $booking = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($bookingChoiceErrorMessage = self::validateBookingForChoiceConstraintsFromSetBooking($booking))) {
            throw new \InvalidArgumentException($bookingChoiceErrorMessage, __LINE__);
        }
        if (is_null($booking) || (is_array($booking) && empty($booking))) {
            unset($this->Booking);
        } else {
            $this->Booking = $booking;
        }
        return $this;
    }
    /**
     * Get XrmOrganization value
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function getXrmOrganization()
    {
        return isset($this->XrmOrganization) ? $this->XrmOrganization : null;
    }
    /**
     * This method is responsible for validating the value passed to the setXrmOrganization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXrmOrganization method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateXrmOrganizationForChoiceConstraintsFromSetXrmOrganization($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Item',
            'Message',
            'CalendarItem',
            'Contact',
            'DistributionList',
            'MeetingMessage',
            'MeetingRequest',
            'MeetingResponse',
            'MeetingCancellation',
            'Task',
            'PostItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property XrmOrganization can\'t be set as the property %s is already set. Only one property must be set among these properties: XrmOrganization, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set XrmOrganization value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     * @return \Ews\StructType\EwsSetItemFieldType
     */
    public function setXrmOrganization(\Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($xrmOrganizationChoiceErrorMessage = self::validateXrmOrganizationForChoiceConstraintsFromSetXrmOrganization($xrmOrganization))) {
            throw new \InvalidArgumentException($xrmOrganizationChoiceErrorMessage, __LINE__);
        }
        if (is_null($xrmOrganization) || (is_array($xrmOrganization) && empty($xrmOrganization))) {
            unset($this->XrmOrganization);
        } else {
            $this->XrmOrganization = $xrmOrganization;
        }
        return $this;
    }
}
