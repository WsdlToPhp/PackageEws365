<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemType|null
     */
    protected ?\StructType\EwsItemType $Item = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMessageType|null
     */
    protected ?\StructType\EwsMessageType $Message = null;
    /**
     * The CalendarItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsCalendarItemType|null
     */
    protected ?\StructType\EwsCalendarItemType $CalendarItem = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsContactItemType|null
     */
    protected ?\StructType\EwsContactItemType $Contact = null;
    /**
     * The DistributionList
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsDistributionListType|null
     */
    protected ?\StructType\EwsDistributionListType $DistributionList = null;
    /**
     * The MeetingMessage
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMeetingMessageType|null
     */
    protected ?\StructType\EwsMeetingMessageType $MeetingMessage = null;
    /**
     * The MeetingRequest
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMeetingRequestMessageType|null
     */
    protected ?\StructType\EwsMeetingRequestMessageType $MeetingRequest = null;
    /**
     * The MeetingResponse
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMeetingResponseMessageType|null
     */
    protected ?\StructType\EwsMeetingResponseMessageType $MeetingResponse = null;
    /**
     * The MeetingCancellation
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMeetingCancellationMessageType|null
     */
    protected ?\StructType\EwsMeetingCancellationMessageType $MeetingCancellation = null;
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsTaskType|null
     */
    protected ?\StructType\EwsTaskType $Task = null;
    /**
     * The PostItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPostItemType|null
     */
    protected ?\StructType\EwsPostItemType $PostItem = null;
    /**
     * The ReplyToItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsReplyToItemType|null
     */
    protected ?\StructType\EwsReplyToItemType $ReplyToItem = null;
    /**
     * The ForwardItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsForwardItemType|null
     */
    protected ?\StructType\EwsForwardItemType $ForwardItem = null;
    /**
     * The ReplyAllToItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsReplyAllToItemType|null
     */
    protected ?\StructType\EwsReplyAllToItemType $ReplyAllToItem = null;
    /**
     * The AcceptItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAcceptItemType|null
     */
    protected ?\StructType\EwsAcceptItemType $AcceptItem = null;
    /**
     * The TentativelyAcceptItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsTentativelyAcceptItemType|null
     */
    protected ?\StructType\EwsTentativelyAcceptItemType $TentativelyAcceptItem = null;
    /**
     * The DeclineItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsDeclineItemType|null
     */
    protected ?\StructType\EwsDeclineItemType $DeclineItem = null;
    /**
     * The CancelCalendarItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsCancelCalendarItemType|null
     */
    protected ?\StructType\EwsCancelCalendarItemType $CancelCalendarItem = null;
    /**
     * The RemoveItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsRemoveItemType|null
     */
    protected ?\StructType\EwsRemoveItemType $RemoveItem = null;
    /**
     * The SuppressReadReceipt
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsSuppressReadReceiptType|null
     */
    protected ?\StructType\EwsSuppressReadReceiptType $SuppressReadReceipt = null;
    /**
     * The PostReplyItem
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPostReplyItemType|null
     */
    protected ?\StructType\EwsPostReplyItemType $PostReplyItem = null;
    /**
     * The AcceptSharingInvitation
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAcceptSharingInvitationType|null
     */
    protected ?\StructType\EwsAcceptSharingInvitationType $AcceptSharingInvitation = null;
    /**
     * The RoleMember
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsRoleMemberItemType|null
     */
    protected ?\StructType\EwsRoleMemberItemType $RoleMember = null;
    /**
     * The Network
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsNetworkItemType|null
     */
    protected ?\StructType\EwsNetworkItemType $Network = null;
    /**
     * The Person
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAbchPersonItemType|null
     */
    protected ?\StructType\EwsAbchPersonItemType $Person = null;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsBookingItemType|null
     */
    protected ?\StructType\EwsBookingItemType $Booking = null;
    /**
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - choice: Item | Message | CalendarItem | Contact | DistributionList | MeetingMessage | MeetingRequest | MeetingResponse | MeetingCancellation | Task | PostItem | ReplyToItem | ForwardItem | ReplyAllToItem | AcceptItem | TentativelyAcceptItem |
     * DeclineItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | RoleMember | Network | Person | Booking | XrmOrganization
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsXrmOrganizationItemType|null
     */
    protected ?\StructType\EwsXrmOrganizationItemType $XrmOrganization = null;
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
     * @param \StructType\EwsItemType $item
     * @param \StructType\EwsMessageType $message
     * @param \StructType\EwsCalendarItemType $calendarItem
     * @param \StructType\EwsContactItemType $contact
     * @param \StructType\EwsDistributionListType $distributionList
     * @param \StructType\EwsMeetingMessageType $meetingMessage
     * @param \StructType\EwsMeetingRequestMessageType $meetingRequest
     * @param \StructType\EwsMeetingResponseMessageType $meetingResponse
     * @param \StructType\EwsMeetingCancellationMessageType $meetingCancellation
     * @param \StructType\EwsTaskType $task
     * @param \StructType\EwsPostItemType $postItem
     * @param \StructType\EwsReplyToItemType $replyToItem
     * @param \StructType\EwsForwardItemType $forwardItem
     * @param \StructType\EwsReplyAllToItemType $replyAllToItem
     * @param \StructType\EwsAcceptItemType $acceptItem
     * @param \StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @param \StructType\EwsDeclineItemType $declineItem
     * @param \StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @param \StructType\EwsRemoveItemType $removeItem
     * @param \StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @param \StructType\EwsPostReplyItemType $postReplyItem
     * @param \StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @param \StructType\EwsRoleMemberItemType $roleMember
     * @param \StructType\EwsNetworkItemType $network
     * @param \StructType\EwsAbchPersonItemType $person
     * @param \StructType\EwsBookingItemType $booking
     * @param \StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(?\StructType\EwsItemType $item = null, ?\StructType\EwsMessageType $message = null, ?\StructType\EwsCalendarItemType $calendarItem = null, ?\StructType\EwsContactItemType $contact = null, ?\StructType\EwsDistributionListType $distributionList = null, ?\StructType\EwsMeetingMessageType $meetingMessage = null, ?\StructType\EwsMeetingRequestMessageType $meetingRequest = null, ?\StructType\EwsMeetingResponseMessageType $meetingResponse = null, ?\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null, ?\StructType\EwsTaskType $task = null, ?\StructType\EwsPostItemType $postItem = null, ?\StructType\EwsReplyToItemType $replyToItem = null, ?\StructType\EwsForwardItemType $forwardItem = null, ?\StructType\EwsReplyAllToItemType $replyAllToItem = null, ?\StructType\EwsAcceptItemType $acceptItem = null, ?\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null, ?\StructType\EwsDeclineItemType $declineItem = null, ?\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null, ?\StructType\EwsRemoveItemType $removeItem = null, ?\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null, ?\StructType\EwsPostReplyItemType $postReplyItem = null, ?\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null, ?\StructType\EwsRoleMemberItemType $roleMember = null, ?\StructType\EwsNetworkItemType $network = null, ?\StructType\EwsAbchPersonItemType $person = null, ?\StructType\EwsBookingItemType $booking = null, ?\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
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
     * @return \StructType\EwsItemType|null
     */
    public function getItem(): ?\StructType\EwsItemType
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
    public function validateItemForChoiceConstraintsFromSetItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Item can\'t be set as the property %s is already set. Only one property must be set among these properties: Item, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Item value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemType $item
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setItem(?\StructType\EwsItemType $item = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsMessageType|null
     */
    public function getMessage(): ?\StructType\EwsMessageType
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
    public function validateMessageForChoiceConstraintsFromSetMessage($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Message can\'t be set as the property %s is already set. Only one property must be set among these properties: Message, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Message value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMessageType $message
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMessage(?\StructType\EwsMessageType $message = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($messageChoiceErrorMessage = self::validateMessageForChoiceConstraintsFromSetMessage($message))) {
            throw new InvalidArgumentException($messageChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsCalendarItemType|null
     */
    public function getCalendarItem(): ?\StructType\EwsCalendarItemType
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
    public function validateCalendarItemForChoiceConstraintsFromSetCalendarItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CalendarItem can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CalendarItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarItemType $calendarItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setCalendarItem(?\StructType\EwsCalendarItemType $calendarItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($calendarItemChoiceErrorMessage = self::validateCalendarItemForChoiceConstraintsFromSetCalendarItem($calendarItem))) {
            throw new InvalidArgumentException($calendarItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsContactItemType|null
     */
    public function getContact(): ?\StructType\EwsContactItemType
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
    public function validateContactForChoiceConstraintsFromSetContact($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Contact can\'t be set as the property %s is already set. Only one property must be set among these properties: Contact, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Contact value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsContactItemType $contact
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setContact(?\StructType\EwsContactItemType $contact = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($contactChoiceErrorMessage = self::validateContactForChoiceConstraintsFromSetContact($contact))) {
            throw new InvalidArgumentException($contactChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsDistributionListType|null
     */
    public function getDistributionList(): ?\StructType\EwsDistributionListType
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
    public function validateDistributionListForChoiceConstraintsFromSetDistributionList($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DistributionList can\'t be set as the property %s is already set. Only one property must be set among these properties: DistributionList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistributionList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDistributionListType $distributionList
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setDistributionList(?\StructType\EwsDistributionListType $distributionList = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($distributionListChoiceErrorMessage = self::validateDistributionListForChoiceConstraintsFromSetDistributionList($distributionList))) {
            throw new InvalidArgumentException($distributionListChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsMeetingMessageType|null
     */
    public function getMeetingMessage(): ?\StructType\EwsMeetingMessageType
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
    public function validateMeetingMessageForChoiceConstraintsFromSetMeetingMessage($value): string
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
                    throw new InvalidArgumentException(sprintf('The property MeetingMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MeetingMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingMessageType $meetingMessage
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingMessage(?\StructType\EwsMeetingMessageType $meetingMessage = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingMessageChoiceErrorMessage = self::validateMeetingMessageForChoiceConstraintsFromSetMeetingMessage($meetingMessage))) {
            throw new InvalidArgumentException($meetingMessageChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsMeetingRequestMessageType|null
     */
    public function getMeetingRequest(): ?\StructType\EwsMeetingRequestMessageType
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
    public function validateMeetingRequestForChoiceConstraintsFromSetMeetingRequest($value): string
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
                    throw new InvalidArgumentException(sprintf('The property MeetingRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MeetingRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingRequestMessageType $meetingRequest
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingRequest(?\StructType\EwsMeetingRequestMessageType $meetingRequest = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingRequestChoiceErrorMessage = self::validateMeetingRequestForChoiceConstraintsFromSetMeetingRequest($meetingRequest))) {
            throw new InvalidArgumentException($meetingRequestChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsMeetingResponseMessageType|null
     */
    public function getMeetingResponse(): ?\StructType\EwsMeetingResponseMessageType
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
    public function validateMeetingResponseForChoiceConstraintsFromSetMeetingResponse($value): string
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
                    throw new InvalidArgumentException(sprintf('The property MeetingResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MeetingResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingResponseMessageType $meetingResponse
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingResponse(?\StructType\EwsMeetingResponseMessageType $meetingResponse = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingResponseChoiceErrorMessage = self::validateMeetingResponseForChoiceConstraintsFromSetMeetingResponse($meetingResponse))) {
            throw new InvalidArgumentException($meetingResponseChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsMeetingCancellationMessageType|null
     */
    public function getMeetingCancellation(): ?\StructType\EwsMeetingCancellationMessageType
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
    public function validateMeetingCancellationForChoiceConstraintsFromSetMeetingCancellation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property MeetingCancellation can\'t be set as the property %s is already set. Only one property must be set among these properties: MeetingCancellation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MeetingCancellation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingCancellationMessageType $meetingCancellation
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setMeetingCancellation(?\StructType\EwsMeetingCancellationMessageType $meetingCancellation = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($meetingCancellationChoiceErrorMessage = self::validateMeetingCancellationForChoiceConstraintsFromSetMeetingCancellation($meetingCancellation))) {
            throw new InvalidArgumentException($meetingCancellationChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsTaskType|null
     */
    public function getTask(): ?\StructType\EwsTaskType
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
    public function validateTaskForChoiceConstraintsFromSetTask($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Task can\'t be set as the property %s is already set. Only one property must be set among these properties: Task, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Task value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsTaskType $task
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setTask(?\StructType\EwsTaskType $task = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($taskChoiceErrorMessage = self::validateTaskForChoiceConstraintsFromSetTask($task))) {
            throw new InvalidArgumentException($taskChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsPostItemType|null
     */
    public function getPostItem(): ?\StructType\EwsPostItemType
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
    public function validatePostItemForChoiceConstraintsFromSetPostItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PostItem can\'t be set as the property %s is already set. Only one property must be set among these properties: PostItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PostItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPostItemType $postItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPostItem(?\StructType\EwsPostItemType $postItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($postItemChoiceErrorMessage = self::validatePostItemForChoiceConstraintsFromSetPostItem($postItem))) {
            throw new InvalidArgumentException($postItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsReplyToItemType|null
     */
    public function getReplyToItem(): ?\StructType\EwsReplyToItemType
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
    public function validateReplyToItemForChoiceConstraintsFromSetReplyToItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ReplyToItem can\'t be set as the property %s is already set. Only one property must be set among these properties: ReplyToItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ReplyToItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsReplyToItemType $replyToItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setReplyToItem(?\StructType\EwsReplyToItemType $replyToItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($replyToItemChoiceErrorMessage = self::validateReplyToItemForChoiceConstraintsFromSetReplyToItem($replyToItem))) {
            throw new InvalidArgumentException($replyToItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsForwardItemType|null
     */
    public function getForwardItem(): ?\StructType\EwsForwardItemType
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
    public function validateForwardItemForChoiceConstraintsFromSetForwardItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ForwardItem can\'t be set as the property %s is already set. Only one property must be set among these properties: ForwardItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ForwardItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsForwardItemType $forwardItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setForwardItem(?\StructType\EwsForwardItemType $forwardItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($forwardItemChoiceErrorMessage = self::validateForwardItemForChoiceConstraintsFromSetForwardItem($forwardItem))) {
            throw new InvalidArgumentException($forwardItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsReplyAllToItemType|null
     */
    public function getReplyAllToItem(): ?\StructType\EwsReplyAllToItemType
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
    public function validateReplyAllToItemForChoiceConstraintsFromSetReplyAllToItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ReplyAllToItem can\'t be set as the property %s is already set. Only one property must be set among these properties: ReplyAllToItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ReplyAllToItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsReplyAllToItemType $replyAllToItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setReplyAllToItem(?\StructType\EwsReplyAllToItemType $replyAllToItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($replyAllToItemChoiceErrorMessage = self::validateReplyAllToItemForChoiceConstraintsFromSetReplyAllToItem($replyAllToItem))) {
            throw new InvalidArgumentException($replyAllToItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsAcceptItemType|null
     */
    public function getAcceptItem(): ?\StructType\EwsAcceptItemType
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
    public function validateAcceptItemForChoiceConstraintsFromSetAcceptItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AcceptItem can\'t be set as the property %s is already set. Only one property must be set among these properties: AcceptItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AcceptItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAcceptItemType $acceptItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setAcceptItem(?\StructType\EwsAcceptItemType $acceptItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($acceptItemChoiceErrorMessage = self::validateAcceptItemForChoiceConstraintsFromSetAcceptItem($acceptItem))) {
            throw new InvalidArgumentException($acceptItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsTentativelyAcceptItemType|null
     */
    public function getTentativelyAcceptItem(): ?\StructType\EwsTentativelyAcceptItemType
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
    public function validateTentativelyAcceptItemForChoiceConstraintsFromSetTentativelyAcceptItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property TentativelyAcceptItem can\'t be set as the property %s is already set. Only one property must be set among these properties: TentativelyAcceptItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TentativelyAcceptItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setTentativelyAcceptItem(?\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($tentativelyAcceptItemChoiceErrorMessage = self::validateTentativelyAcceptItemForChoiceConstraintsFromSetTentativelyAcceptItem($tentativelyAcceptItem))) {
            throw new InvalidArgumentException($tentativelyAcceptItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsDeclineItemType|null
     */
    public function getDeclineItem(): ?\StructType\EwsDeclineItemType
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
    public function validateDeclineItemForChoiceConstraintsFromSetDeclineItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DeclineItem can\'t be set as the property %s is already set. Only one property must be set among these properties: DeclineItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeclineItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDeclineItemType $declineItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setDeclineItem(?\StructType\EwsDeclineItemType $declineItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($declineItemChoiceErrorMessage = self::validateDeclineItemForChoiceConstraintsFromSetDeclineItem($declineItem))) {
            throw new InvalidArgumentException($declineItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsCancelCalendarItemType|null
     */
    public function getCancelCalendarItem(): ?\StructType\EwsCancelCalendarItemType
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
    public function validateCancelCalendarItemForChoiceConstraintsFromSetCancelCalendarItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CancelCalendarItem can\'t be set as the property %s is already set. Only one property must be set among these properties: CancelCalendarItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CancelCalendarItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setCancelCalendarItem(?\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($cancelCalendarItemChoiceErrorMessage = self::validateCancelCalendarItemForChoiceConstraintsFromSetCancelCalendarItem($cancelCalendarItem))) {
            throw new InvalidArgumentException($cancelCalendarItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsRemoveItemType|null
     */
    public function getRemoveItem(): ?\StructType\EwsRemoveItemType
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
    public function validateRemoveItemForChoiceConstraintsFromSetRemoveItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property RemoveItem can\'t be set as the property %s is already set. Only one property must be set among these properties: RemoveItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RemoveItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsRemoveItemType $removeItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setRemoveItem(?\StructType\EwsRemoveItemType $removeItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($removeItemChoiceErrorMessage = self::validateRemoveItemForChoiceConstraintsFromSetRemoveItem($removeItem))) {
            throw new InvalidArgumentException($removeItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsSuppressReadReceiptType|null
     */
    public function getSuppressReadReceipt(): ?\StructType\EwsSuppressReadReceiptType
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
    public function validateSuppressReadReceiptForChoiceConstraintsFromSetSuppressReadReceipt($value): string
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
                    throw new InvalidArgumentException(sprintf('The property SuppressReadReceipt can\'t be set as the property %s is already set. Only one property must be set among these properties: SuppressReadReceipt, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SuppressReadReceipt value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setSuppressReadReceipt(?\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($suppressReadReceiptChoiceErrorMessage = self::validateSuppressReadReceiptForChoiceConstraintsFromSetSuppressReadReceipt($suppressReadReceipt))) {
            throw new InvalidArgumentException($suppressReadReceiptChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsPostReplyItemType|null
     */
    public function getPostReplyItem(): ?\StructType\EwsPostReplyItemType
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
    public function validatePostReplyItemForChoiceConstraintsFromSetPostReplyItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PostReplyItem can\'t be set as the property %s is already set. Only one property must be set among these properties: PostReplyItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PostReplyItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPostReplyItemType $postReplyItem
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPostReplyItem(?\StructType\EwsPostReplyItemType $postReplyItem = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($postReplyItemChoiceErrorMessage = self::validatePostReplyItemForChoiceConstraintsFromSetPostReplyItem($postReplyItem))) {
            throw new InvalidArgumentException($postReplyItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsAcceptSharingInvitationType|null
     */
    public function getAcceptSharingInvitation(): ?\StructType\EwsAcceptSharingInvitationType
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
    public function validateAcceptSharingInvitationForChoiceConstraintsFromSetAcceptSharingInvitation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AcceptSharingInvitation can\'t be set as the property %s is already set. Only one property must be set among these properties: AcceptSharingInvitation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AcceptSharingInvitation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setAcceptSharingInvitation(?\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($acceptSharingInvitationChoiceErrorMessage = self::validateAcceptSharingInvitationForChoiceConstraintsFromSetAcceptSharingInvitation($acceptSharingInvitation))) {
            throw new InvalidArgumentException($acceptSharingInvitationChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsRoleMemberItemType|null
     */
    public function getRoleMember(): ?\StructType\EwsRoleMemberItemType
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
    public function validateRoleMemberForChoiceConstraintsFromSetRoleMember($value): string
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
                    throw new InvalidArgumentException(sprintf('The property RoleMember can\'t be set as the property %s is already set. Only one property must be set among these properties: RoleMember, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RoleMember value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsRoleMemberItemType $roleMember
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setRoleMember(?\StructType\EwsRoleMemberItemType $roleMember = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($roleMemberChoiceErrorMessage = self::validateRoleMemberForChoiceConstraintsFromSetRoleMember($roleMember))) {
            throw new InvalidArgumentException($roleMemberChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsNetworkItemType|null
     */
    public function getNetwork(): ?\StructType\EwsNetworkItemType
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
    public function validateNetworkForChoiceConstraintsFromSetNetwork($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Network can\'t be set as the property %s is already set. Only one property must be set among these properties: Network, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Network value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsNetworkItemType $network
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setNetwork(?\StructType\EwsNetworkItemType $network = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($networkChoiceErrorMessage = self::validateNetworkForChoiceConstraintsFromSetNetwork($network))) {
            throw new InvalidArgumentException($networkChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsAbchPersonItemType|null
     */
    public function getPerson(): ?\StructType\EwsAbchPersonItemType
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
    public function validatePersonForChoiceConstraintsFromSetPerson($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Person can\'t be set as the property %s is already set. Only one property must be set among these properties: Person, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Person value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAbchPersonItemType $person
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPerson(?\StructType\EwsAbchPersonItemType $person = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($personChoiceErrorMessage = self::validatePersonForChoiceConstraintsFromSetPerson($person))) {
            throw new InvalidArgumentException($personChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsBookingItemType|null
     */
    public function getBooking(): ?\StructType\EwsBookingItemType
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
    public function validateBookingForChoiceConstraintsFromSetBooking($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Booking can\'t be set as the property %s is already set. Only one property must be set among these properties: Booking, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Booking value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingItemType $booking
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setBooking(?\StructType\EwsBookingItemType $booking = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($bookingChoiceErrorMessage = self::validateBookingForChoiceConstraintsFromSetBooking($booking))) {
            throw new InvalidArgumentException($bookingChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsXrmOrganizationItemType|null
     */
    public function getXrmOrganization(): ?\StructType\EwsXrmOrganizationItemType
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
    public function validateXrmOrganizationForChoiceConstraintsFromSetXrmOrganization($value): string
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
                    throw new InvalidArgumentException(sprintf('The property XrmOrganization can\'t be set as the property %s is already set. Only one property must be set among these properties: XrmOrganization, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set XrmOrganization value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmOrganizationItemType $xrmOrganization
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setXrmOrganization(?\StructType\EwsXrmOrganizationItemType $xrmOrganization = null): self
    {
        // validation for constraint: choice(Item, Message, CalendarItem, Contact, DistributionList, MeetingMessage, MeetingRequest, MeetingResponse, MeetingCancellation, Task, PostItem, ReplyToItem, ForwardItem, ReplyAllToItem, AcceptItem, TentativelyAcceptItem, DeclineItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, RoleMember, Network, Person, Booking, XrmOrganization)
        if ('' !== ($xrmOrganizationChoiceErrorMessage = self::validateXrmOrganizationForChoiceConstraintsFromSetXrmOrganization($xrmOrganization))) {
            throw new InvalidArgumentException($xrmOrganizationChoiceErrorMessage, __LINE__);
        }
        if (is_null($xrmOrganization) || (is_array($xrmOrganization) && empty($xrmOrganization))) {
            unset($this->XrmOrganization);
        } else {
            $this->XrmOrganization = $xrmOrganization;
        }
        
        return $this;
    }
}
