<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfAllItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfAllItemsType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemType
     */
    public $Item;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMessageType
     */
    public $Message;
    /**
     * The CalendarItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsCalendarItemType
     */
    public $CalendarItem;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsContactItemType
     */
    public $Contact;
    /**
     * The DistributionList
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDistributionListType
     */
    public $DistributionList;
    /**
     * The MeetingMessage
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingMessageType
     */
    public $MeetingMessage;
    /**
     * The MeetingRequest
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingRequestMessageType
     */
    public $MeetingRequest;
    /**
     * The MeetingResponse
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingResponseMessageType
     */
    public $MeetingResponse;
    /**
     * The MeetingCancellation
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMeetingCancellationMessageType
     */
    public $MeetingCancellation;
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsTaskType
     */
    public $Task;
    /**
     * The PostItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPostItemType
     */
    public $PostItem;
    /**
     * The ReplyToItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsReplyToItemType
     */
    public $ReplyToItem;
    /**
     * The ForwardItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsForwardItemType
     */
    public $ForwardItem;
    /**
     * The ReplyAllToItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsReplyAllToItemType
     */
    public $ReplyAllToItem;
    /**
     * The AcceptItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAcceptItemType
     */
    public $AcceptItem;
    /**
     * The TentativelyAcceptItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsTentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;
    /**
     * The DeclineItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDeclineItemType
     */
    public $DeclineItem;
    /**
     * The CancelCalendarItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsCancelCalendarItemType
     */
    public $CancelCalendarItem;
    /**
     * The RemoveItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRemoveItemType
     */
    public $RemoveItem;
    /**
     * The SuppressReadReceipt
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSuppressReadReceiptType
     */
    public $SuppressReadReceipt;
    /**
     * The PostReplyItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPostReplyItemType
     */
    public $PostReplyItem;
    /**
     * The AcceptSharingInvitation
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAcceptSharingInvitationType
     */
    public $AcceptSharingInvitation;
    /**
     * The RoleMember
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRoleMemberItemType
     */
    public $RoleMember;
    /**
     * The Network
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsNetworkItemType
     */
    public $Network;
    /**
     * The Person
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAbchPersonItemType
     */
    public $Person;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBookingItemType
     */
    public $Booking;
    /**
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsXrmOrganizationItemType
     */
    public $XrmOrganization;
    /**
     * Constructor method for NonEmptyArrayOfAllItemsType
     * @uses EwsNonEmptyArrayOfAllItemsType::setItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setMessage()
     * @uses EwsNonEmptyArrayOfAllItemsType::setCalendarItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setContact()
     * @uses EwsNonEmptyArrayOfAllItemsType::setDistributionList()
     * @uses EwsNonEmptyArrayOfAllItemsType::setMeetingMessage()
     * @uses EwsNonEmptyArrayOfAllItemsType::setMeetingRequest()
     * @uses EwsNonEmptyArrayOfAllItemsType::setMeetingResponse()
     * @uses EwsNonEmptyArrayOfAllItemsType::setMeetingCancellation()
     * @uses EwsNonEmptyArrayOfAllItemsType::setTask()
     * @uses EwsNonEmptyArrayOfAllItemsType::setPostItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setReplyToItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setForwardItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setReplyAllToItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setAcceptItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setTentativelyAcceptItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setDeclineItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setCancelCalendarItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setRemoveItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setSuppressReadReceipt()
     * @uses EwsNonEmptyArrayOfAllItemsType::setPostReplyItem()
     * @uses EwsNonEmptyArrayOfAllItemsType::setAcceptSharingInvitation()
     * @uses EwsNonEmptyArrayOfAllItemsType::setRoleMember()
     * @uses EwsNonEmptyArrayOfAllItemsType::setNetwork()
     * @uses EwsNonEmptyArrayOfAllItemsType::setPerson()
     * @uses EwsNonEmptyArrayOfAllItemsType::setBooking()
     * @uses EwsNonEmptyArrayOfAllItemsType::setXrmOrganization()
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
     * @param \Ews\StructType\EwsReplyToItemType $replyToItem
     * @param \Ews\StructType\EwsForwardItemType $forwardItem
     * @param \Ews\StructType\EwsReplyAllToItemType $replyAllToItem
     * @param \Ews\StructType\EwsAcceptItemType $acceptItem
     * @param \Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @param \Ews\StructType\EwsDeclineItemType $declineItem
     * @param \Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @param \Ews\StructType\EwsRemoveItemType $removeItem
     * @param \Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @param \Ews\StructType\EwsPostReplyItemType $postReplyItem
     * @param \Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @param \Ews\StructType\EwsRoleMemberItemType $roleMember
     * @param \Ews\StructType\EwsNetworkItemType $network
     * @param \Ews\StructType\EwsAbchPersonItemType $person
     * @param \Ews\StructType\EwsBookingItemType $booking
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(\Ews\StructType\EwsItemType $item = null, \Ews\StructType\EwsMessageType $message = null, \Ews\StructType\EwsCalendarItemType $calendarItem = null, \Ews\StructType\EwsContactItemType $contact = null, \Ews\StructType\EwsDistributionListType $distributionList = null, \Ews\StructType\EwsMeetingMessageType $meetingMessage = null, \Ews\StructType\EwsMeetingRequestMessageType $meetingRequest = null, \Ews\StructType\EwsMeetingResponseMessageType $meetingResponse = null, \Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null, \Ews\StructType\EwsTaskType $task = null, \Ews\StructType\EwsPostItemType $postItem = null, \Ews\StructType\EwsReplyToItemType $replyToItem = null, \Ews\StructType\EwsForwardItemType $forwardItem = null, \Ews\StructType\EwsReplyAllToItemType $replyAllToItem = null, \Ews\StructType\EwsAcceptItemType $acceptItem = null, \Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null, \Ews\StructType\EwsDeclineItemType $declineItem = null, \Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null, \Ews\StructType\EwsRemoveItemType $removeItem = null, \Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null, \Ews\StructType\EwsPostReplyItemType $postReplyItem = null, \Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null, \Ews\StructType\EwsRoleMemberItemType $roleMember = null, \Ews\StructType\EwsNetworkItemType $network = null, \Ews\StructType\EwsAbchPersonItemType $person = null, \Ews\StructType\EwsBookingItemType $booking = null, \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
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
            ->setReplyToItem($replyToItem)
            ->setForwardItem($forwardItem)
            ->setReplyAllToItem($replyAllToItem)
            ->setAcceptItem($acceptItem)
            ->setTentativelyAcceptItem($tentativelyAcceptItem)
            ->setDeclineItem($declineItem)
            ->setCancelCalendarItem($cancelCalendarItem)
            ->setRemoveItem($removeItem)
            ->setSuppressReadReceipt($suppressReadReceipt)
            ->setPostReplyItem($postReplyItem)
            ->setAcceptSharingInvitation($acceptSharingInvitation)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setItem(\Ews\StructType\EwsItemType $item = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMessage(\Ews\StructType\EwsMessageType $message = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setCalendarItem(\Ews\StructType\EwsCalendarItemType $calendarItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setContact(\Ews\StructType\EwsContactItemType $contact = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setDistributionList(\Ews\StructType\EwsDistributionListType $distributionList = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingMessage(\Ews\StructType\EwsMeetingMessageType $meetingMessage = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingRequest(\Ews\StructType\EwsMeetingRequestMessageType $meetingRequest = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingResponse(\Ews\StructType\EwsMeetingResponseMessageType $meetingResponse = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingCancellation(\Ews\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setTask(\Ews\StructType\EwsTaskType $task = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPostItem(\Ews\StructType\EwsPostItemType $postItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
     * Get ReplyToItem value
     * @return \Ews\StructType\EwsReplyToItemType|null
     */
    public function getReplyToItem()
    {
        return isset($this->ReplyToItem) ? $this->ReplyToItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setReplyToItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReplyToItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateReplyToItemForChoiceConstraintsFromSetReplyToItem($value)
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
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ReplyToItem can\'t be set as the property %s is already set. Only one property must be set among these properties: ReplyToItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ReplyToItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReplyToItemType $replyToItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setReplyToItem(\Ews\StructType\EwsReplyToItemType $replyToItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($replyToItemChoiceErrorMessage = self::validateReplyToItemForChoiceConstraintsFromSetReplyToItem($replyToItem))) {
            throw new \InvalidArgumentException($replyToItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($replyToItem) || (is_array($replyToItem) && empty($replyToItem))) {
            unset($this->ReplyToItem);
        } else {
            $this->ReplyToItem = $replyToItem;
        }
        return $this;
    }
    /**
     * Get ForwardItem value
     * @return \Ews\StructType\EwsForwardItemType|null
     */
    public function getForwardItem()
    {
        return isset($this->ForwardItem) ? $this->ForwardItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setForwardItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setForwardItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateForwardItemForChoiceConstraintsFromSetForwardItem($value)
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
            'ReplyToItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ForwardItem can\'t be set as the property %s is already set. Only one property must be set among these properties: ForwardItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ForwardItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsForwardItemType $forwardItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setForwardItem(\Ews\StructType\EwsForwardItemType $forwardItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($forwardItemChoiceErrorMessage = self::validateForwardItemForChoiceConstraintsFromSetForwardItem($forwardItem))) {
            throw new \InvalidArgumentException($forwardItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($forwardItem) || (is_array($forwardItem) && empty($forwardItem))) {
            unset($this->ForwardItem);
        } else {
            $this->ForwardItem = $forwardItem;
        }
        return $this;
    }
    /**
     * Get ReplyAllToItem value
     * @return \Ews\StructType\EwsReplyAllToItemType|null
     */
    public function getReplyAllToItem()
    {
        return isset($this->ReplyAllToItem) ? $this->ReplyAllToItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setReplyAllToItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReplyAllToItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateReplyAllToItemForChoiceConstraintsFromSetReplyAllToItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ReplyAllToItem can\'t be set as the property %s is already set. Only one property must be set among these properties: ReplyAllToItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ReplyAllToItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReplyAllToItemType $replyAllToItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setReplyAllToItem(\Ews\StructType\EwsReplyAllToItemType $replyAllToItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($replyAllToItemChoiceErrorMessage = self::validateReplyAllToItemForChoiceConstraintsFromSetReplyAllToItem($replyAllToItem))) {
            throw new \InvalidArgumentException($replyAllToItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($replyAllToItem) || (is_array($replyAllToItem) && empty($replyAllToItem))) {
            unset($this->ReplyAllToItem);
        } else {
            $this->ReplyAllToItem = $replyAllToItem;
        }
        return $this;
    }
    /**
     * Get AcceptItem value
     * @return \Ews\StructType\EwsAcceptItemType|null
     */
    public function getAcceptItem()
    {
        return isset($this->AcceptItem) ? $this->AcceptItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAcceptItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcceptItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAcceptItemForChoiceConstraintsFromSetAcceptItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AcceptItem can\'t be set as the property %s is already set. Only one property must be set among these properties: AcceptItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AcceptItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAcceptItemType $acceptItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setAcceptItem(\Ews\StructType\EwsAcceptItemType $acceptItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($acceptItemChoiceErrorMessage = self::validateAcceptItemForChoiceConstraintsFromSetAcceptItem($acceptItem))) {
            throw new \InvalidArgumentException($acceptItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($acceptItem) || (is_array($acceptItem) && empty($acceptItem))) {
            unset($this->AcceptItem);
        } else {
            $this->AcceptItem = $acceptItem;
        }
        return $this;
    }
    /**
     * Get TentativelyAcceptItem value
     * @return \Ews\StructType\EwsTentativelyAcceptItemType|null
     */
    public function getTentativelyAcceptItem()
    {
        return isset($this->TentativelyAcceptItem) ? $this->TentativelyAcceptItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTentativelyAcceptItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTentativelyAcceptItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTentativelyAcceptItemForChoiceConstraintsFromSetTentativelyAcceptItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property TentativelyAcceptItem can\'t be set as the property %s is already set. Only one property must be set among these properties: TentativelyAcceptItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set TentativelyAcceptItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setTentativelyAcceptItem(\Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($tentativelyAcceptItemChoiceErrorMessage = self::validateTentativelyAcceptItemForChoiceConstraintsFromSetTentativelyAcceptItem($tentativelyAcceptItem))) {
            throw new \InvalidArgumentException($tentativelyAcceptItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($tentativelyAcceptItem) || (is_array($tentativelyAcceptItem) && empty($tentativelyAcceptItem))) {
            unset($this->TentativelyAcceptItem);
        } else {
            $this->TentativelyAcceptItem = $tentativelyAcceptItem;
        }
        return $this;
    }
    /**
     * Get DeclineItem value
     * @return \Ews\StructType\EwsDeclineItemType|null
     */
    public function getDeclineItem()
    {
        return isset($this->DeclineItem) ? $this->DeclineItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeclineItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeclineItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeclineItemForChoiceConstraintsFromSetDeclineItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeclineItem can\'t be set as the property %s is already set. Only one property must be set among these properties: DeclineItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeclineItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeclineItemType $declineItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setDeclineItem(\Ews\StructType\EwsDeclineItemType $declineItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($declineItemChoiceErrorMessage = self::validateDeclineItemForChoiceConstraintsFromSetDeclineItem($declineItem))) {
            throw new \InvalidArgumentException($declineItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($declineItem) || (is_array($declineItem) && empty($declineItem))) {
            unset($this->DeclineItem);
        } else {
            $this->DeclineItem = $declineItem;
        }
        return $this;
    }
    /**
     * Get CancelCalendarItem value
     * @return \Ews\StructType\EwsCancelCalendarItemType|null
     */
    public function getCancelCalendarItem()
    {
        return isset($this->CancelCalendarItem) ? $this->CancelCalendarItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCancelCalendarItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelCalendarItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCancelCalendarItemForChoiceConstraintsFromSetCancelCalendarItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CancelCalendarItem can\'t be set as the property %s is already set. Only one property must be set among these properties: CancelCalendarItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CancelCalendarItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setCancelCalendarItem(\Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($cancelCalendarItemChoiceErrorMessage = self::validateCancelCalendarItemForChoiceConstraintsFromSetCancelCalendarItem($cancelCalendarItem))) {
            throw new \InvalidArgumentException($cancelCalendarItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($cancelCalendarItem) || (is_array($cancelCalendarItem) && empty($cancelCalendarItem))) {
            unset($this->CancelCalendarItem);
        } else {
            $this->CancelCalendarItem = $cancelCalendarItem;
        }
        return $this;
    }
    /**
     * Get RemoveItem value
     * @return \Ews\StructType\EwsRemoveItemType|null
     */
    public function getRemoveItem()
    {
        return isset($this->RemoveItem) ? $this->RemoveItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRemoveItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemoveItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRemoveItemForChoiceConstraintsFromSetRemoveItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property RemoveItem can\'t be set as the property %s is already set. Only one property must be set among these properties: RemoveItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RemoveItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRemoveItemType $removeItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setRemoveItem(\Ews\StructType\EwsRemoveItemType $removeItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($removeItemChoiceErrorMessage = self::validateRemoveItemForChoiceConstraintsFromSetRemoveItem($removeItem))) {
            throw new \InvalidArgumentException($removeItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($removeItem) || (is_array($removeItem) && empty($removeItem))) {
            unset($this->RemoveItem);
        } else {
            $this->RemoveItem = $removeItem;
        }
        return $this;
    }
    /**
     * Get SuppressReadReceipt value
     * @return \Ews\StructType\EwsSuppressReadReceiptType|null
     */
    public function getSuppressReadReceipt()
    {
        return isset($this->SuppressReadReceipt) ? $this->SuppressReadReceipt : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSuppressReadReceipt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuppressReadReceipt method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSuppressReadReceiptForChoiceConstraintsFromSetSuppressReadReceipt($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SuppressReadReceipt can\'t be set as the property %s is already set. Only one property must be set among these properties: SuppressReadReceipt, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SuppressReadReceipt value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setSuppressReadReceipt(\Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($suppressReadReceiptChoiceErrorMessage = self::validateSuppressReadReceiptForChoiceConstraintsFromSetSuppressReadReceipt($suppressReadReceipt))) {
            throw new \InvalidArgumentException($suppressReadReceiptChoiceErrorMessage, __LINE__);
        }
        if (is_null($suppressReadReceipt) || (is_array($suppressReadReceipt) && empty($suppressReadReceipt))) {
            unset($this->SuppressReadReceipt);
        } else {
            $this->SuppressReadReceipt = $suppressReadReceipt;
        }
        return $this;
    }
    /**
     * Get PostReplyItem value
     * @return \Ews\StructType\EwsPostReplyItemType|null
     */
    public function getPostReplyItem()
    {
        return isset($this->PostReplyItem) ? $this->PostReplyItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPostReplyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostReplyItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePostReplyItemForChoiceConstraintsFromSetPostReplyItem($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'AcceptSharingInvitation',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PostReplyItem can\'t be set as the property %s is already set. Only one property must be set among these properties: PostReplyItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PostReplyItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPostReplyItemType $postReplyItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPostReplyItem(\Ews\StructType\EwsPostReplyItemType $postReplyItem = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($postReplyItemChoiceErrorMessage = self::validatePostReplyItemForChoiceConstraintsFromSetPostReplyItem($postReplyItem))) {
            throw new \InvalidArgumentException($postReplyItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($postReplyItem) || (is_array($postReplyItem) && empty($postReplyItem))) {
            unset($this->PostReplyItem);
        } else {
            $this->PostReplyItem = $postReplyItem;
        }
        return $this;
    }
    /**
     * Get AcceptSharingInvitation value
     * @return \Ews\StructType\EwsAcceptSharingInvitationType|null
     */
    public function getAcceptSharingInvitation()
    {
        return isset($this->AcceptSharingInvitation) ? $this->AcceptSharingInvitation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAcceptSharingInvitation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcceptSharingInvitation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAcceptSharingInvitationForChoiceConstraintsFromSetAcceptSharingInvitation($value)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'RoleMember',
            'Network',
            'Person',
            'Booking',
            'XrmOrganization',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AcceptSharingInvitation can\'t be set as the property %s is already set. Only one property must be set among these properties: AcceptSharingInvitation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AcceptSharingInvitation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setAcceptSharingInvitation(\Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($acceptSharingInvitationChoiceErrorMessage = self::validateAcceptSharingInvitationForChoiceConstraintsFromSetAcceptSharingInvitation($acceptSharingInvitation))) {
            throw new \InvalidArgumentException($acceptSharingInvitationChoiceErrorMessage, __LINE__);
        }
        if (is_null($acceptSharingInvitation) || (is_array($acceptSharingInvitation) && empty($acceptSharingInvitation))) {
            unset($this->AcceptSharingInvitation);
        } else {
            $this->AcceptSharingInvitation = $acceptSharingInvitation;
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setRoleMember(\Ews\StructType\EwsRoleMemberItemType $roleMember = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setNetwork(\Ews\StructType\EwsNetworkItemType $network = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPerson(\Ews\StructType\EwsAbchPersonItemType $person = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setBooking(\Ews\StructType\EwsBookingItemType $booking = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setXrmOrganization(\Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
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
