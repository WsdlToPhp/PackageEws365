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
     * The ReplyToItem
     * @var \Ews\StructType\EwsReplyToItemType
     */
    public $ReplyToItem;
    /**
     * The ForwardItem
     * @var \Ews\StructType\EwsForwardItemType
     */
    public $ForwardItem;
    /**
     * The ReplyAllToItem
     * @var \Ews\StructType\EwsReplyAllToItemType
     */
    public $ReplyAllToItem;
    /**
     * The AcceptItem
     * @var \Ews\StructType\EwsAcceptItemType
     */
    public $AcceptItem;
    /**
     * The TentativelyAcceptItem
     * @var \Ews\StructType\EwsTentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;
    /**
     * The DeclineItem
     * @var \Ews\StructType\EwsDeclineItemType
     */
    public $DeclineItem;
    /**
     * The CancelCalendarItem
     * @var \Ews\StructType\EwsCancelCalendarItemType
     */
    public $CancelCalendarItem;
    /**
     * The RemoveItem
     * @var \Ews\StructType\EwsRemoveItemType
     */
    public $RemoveItem;
    /**
     * The SuppressReadReceipt
     * @var \Ews\StructType\EwsSuppressReadReceiptType
     */
    public $SuppressReadReceipt;
    /**
     * The PostReplyItem
     * @var \Ews\StructType\EwsPostReplyItemType
     */
    public $PostReplyItem;
    /**
     * The AcceptSharingInvitation
     * @var \Ews\StructType\EwsAcceptSharingInvitationType
     */
    public $AcceptSharingInvitation;
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
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \Ews\StructType\EwsItemType $item
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPostItem(\Ews\StructType\EwsPostItemType $postItem = null)
    {
        $this->PostItem = $postItem;
        return $this;
    }
    /**
     * Get ReplyToItem value
     * @return \Ews\StructType\EwsReplyToItemType|null
     */
    public function getReplyToItem()
    {
        return $this->ReplyToItem;
    }
    /**
     * Set ReplyToItem value
     * @param \Ews\StructType\EwsReplyToItemType $replyToItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setReplyToItem(\Ews\StructType\EwsReplyToItemType $replyToItem = null)
    {
        $this->ReplyToItem = $replyToItem;
        return $this;
    }
    /**
     * Get ForwardItem value
     * @return \Ews\StructType\EwsForwardItemType|null
     */
    public function getForwardItem()
    {
        return $this->ForwardItem;
    }
    /**
     * Set ForwardItem value
     * @param \Ews\StructType\EwsForwardItemType $forwardItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setForwardItem(\Ews\StructType\EwsForwardItemType $forwardItem = null)
    {
        $this->ForwardItem = $forwardItem;
        return $this;
    }
    /**
     * Get ReplyAllToItem value
     * @return \Ews\StructType\EwsReplyAllToItemType|null
     */
    public function getReplyAllToItem()
    {
        return $this->ReplyAllToItem;
    }
    /**
     * Set ReplyAllToItem value
     * @param \Ews\StructType\EwsReplyAllToItemType $replyAllToItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setReplyAllToItem(\Ews\StructType\EwsReplyAllToItemType $replyAllToItem = null)
    {
        $this->ReplyAllToItem = $replyAllToItem;
        return $this;
    }
    /**
     * Get AcceptItem value
     * @return \Ews\StructType\EwsAcceptItemType|null
     */
    public function getAcceptItem()
    {
        return $this->AcceptItem;
    }
    /**
     * Set AcceptItem value
     * @param \Ews\StructType\EwsAcceptItemType $acceptItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setAcceptItem(\Ews\StructType\EwsAcceptItemType $acceptItem = null)
    {
        $this->AcceptItem = $acceptItem;
        return $this;
    }
    /**
     * Get TentativelyAcceptItem value
     * @return \Ews\StructType\EwsTentativelyAcceptItemType|null
     */
    public function getTentativelyAcceptItem()
    {
        return $this->TentativelyAcceptItem;
    }
    /**
     * Set TentativelyAcceptItem value
     * @param \Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setTentativelyAcceptItem(\Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null)
    {
        $this->TentativelyAcceptItem = $tentativelyAcceptItem;
        return $this;
    }
    /**
     * Get DeclineItem value
     * @return \Ews\StructType\EwsDeclineItemType|null
     */
    public function getDeclineItem()
    {
        return $this->DeclineItem;
    }
    /**
     * Set DeclineItem value
     * @param \Ews\StructType\EwsDeclineItemType $declineItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setDeclineItem(\Ews\StructType\EwsDeclineItemType $declineItem = null)
    {
        $this->DeclineItem = $declineItem;
        return $this;
    }
    /**
     * Get CancelCalendarItem value
     * @return \Ews\StructType\EwsCancelCalendarItemType|null
     */
    public function getCancelCalendarItem()
    {
        return $this->CancelCalendarItem;
    }
    /**
     * Set CancelCalendarItem value
     * @param \Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setCancelCalendarItem(\Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null)
    {
        $this->CancelCalendarItem = $cancelCalendarItem;
        return $this;
    }
    /**
     * Get RemoveItem value
     * @return \Ews\StructType\EwsRemoveItemType|null
     */
    public function getRemoveItem()
    {
        return $this->RemoveItem;
    }
    /**
     * Set RemoveItem value
     * @param \Ews\StructType\EwsRemoveItemType $removeItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setRemoveItem(\Ews\StructType\EwsRemoveItemType $removeItem = null)
    {
        $this->RemoveItem = $removeItem;
        return $this;
    }
    /**
     * Get SuppressReadReceipt value
     * @return \Ews\StructType\EwsSuppressReadReceiptType|null
     */
    public function getSuppressReadReceipt()
    {
        return $this->SuppressReadReceipt;
    }
    /**
     * Set SuppressReadReceipt value
     * @param \Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setSuppressReadReceipt(\Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null)
    {
        $this->SuppressReadReceipt = $suppressReadReceipt;
        return $this;
    }
    /**
     * Get PostReplyItem value
     * @return \Ews\StructType\EwsPostReplyItemType|null
     */
    public function getPostReplyItem()
    {
        return $this->PostReplyItem;
    }
    /**
     * Set PostReplyItem value
     * @param \Ews\StructType\EwsPostReplyItemType $postReplyItem
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setPostReplyItem(\Ews\StructType\EwsPostReplyItemType $postReplyItem = null)
    {
        $this->PostReplyItem = $postReplyItem;
        return $this;
    }
    /**
     * Get AcceptSharingInvitation value
     * @return \Ews\StructType\EwsAcceptSharingInvitationType|null
     */
    public function getAcceptSharingInvitation()
    {
        return $this->AcceptSharingInvitation;
    }
    /**
     * Set AcceptSharingInvitation value
     * @param \Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public function setAcceptSharingInvitation(\Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null)
    {
        $this->AcceptSharingInvitation = $acceptSharingInvitation;
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
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
