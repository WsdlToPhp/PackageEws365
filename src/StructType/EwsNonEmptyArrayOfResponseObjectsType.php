<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfResponseObjectsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfResponseObjectsType extends AbstractStructBase
{
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
     * The AddItemToMyCalendar
     * @var \Ews\StructType\EwsAddItemToMyCalendarType
     */
    public $AddItemToMyCalendar;
    /**
     * The ProposeNewTime
     * @var \Ews\StructType\EwsProposeNewTimeType
     */
    public $ProposeNewTime;
    /**
     * Constructor method for NonEmptyArrayOfResponseObjectsType
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setAcceptItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setTentativelyAcceptItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setDeclineItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setReplyToItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setForwardItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setReplyAllToItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setCancelCalendarItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setRemoveItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setSuppressReadReceipt()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setPostReplyItem()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setAcceptSharingInvitation()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setAddItemToMyCalendar()
     * @uses EwsNonEmptyArrayOfResponseObjectsType::setProposeNewTime()
     * @param \Ews\StructType\EwsAcceptItemType $acceptItem
     * @param \Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @param \Ews\StructType\EwsDeclineItemType $declineItem
     * @param \Ews\StructType\EwsReplyToItemType $replyToItem
     * @param \Ews\StructType\EwsForwardItemType $forwardItem
     * @param \Ews\StructType\EwsReplyAllToItemType $replyAllToItem
     * @param \Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @param \Ews\StructType\EwsRemoveItemType $removeItem
     * @param \Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @param \Ews\StructType\EwsPostReplyItemType $postReplyItem
     * @param \Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @param \Ews\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar
     * @param \Ews\StructType\EwsProposeNewTimeType $proposeNewTime
     */
    public function __construct(\Ews\StructType\EwsAcceptItemType $acceptItem = null, \Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null, \Ews\StructType\EwsDeclineItemType $declineItem = null, \Ews\StructType\EwsReplyToItemType $replyToItem = null, \Ews\StructType\EwsForwardItemType $forwardItem = null, \Ews\StructType\EwsReplyAllToItemType $replyAllToItem = null, \Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null, \Ews\StructType\EwsRemoveItemType $removeItem = null, \Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null, \Ews\StructType\EwsPostReplyItemType $postReplyItem = null, \Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null, \Ews\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar = null, \Ews\StructType\EwsProposeNewTimeType $proposeNewTime = null)
    {
        $this
            ->setAcceptItem($acceptItem)
            ->setTentativelyAcceptItem($tentativelyAcceptItem)
            ->setDeclineItem($declineItem)
            ->setReplyToItem($replyToItem)
            ->setForwardItem($forwardItem)
            ->setReplyAllToItem($replyAllToItem)
            ->setCancelCalendarItem($cancelCalendarItem)
            ->setRemoveItem($removeItem)
            ->setSuppressReadReceipt($suppressReadReceipt)
            ->setPostReplyItem($postReplyItem)
            ->setAcceptSharingInvitation($acceptSharingInvitation)
            ->setAddItemToMyCalendar($addItemToMyCalendar)
            ->setProposeNewTime($proposeNewTime);
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setDeclineItem(\Ews\StructType\EwsDeclineItemType $declineItem = null)
    {
        $this->DeclineItem = $declineItem;
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setReplyAllToItem(\Ews\StructType\EwsReplyAllToItemType $replyAllToItem = null)
    {
        $this->ReplyAllToItem = $replyAllToItem;
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAcceptSharingInvitation(\Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null)
    {
        $this->AcceptSharingInvitation = $acceptSharingInvitation;
        return $this;
    }
    /**
     * Get AddItemToMyCalendar value
     * @return \Ews\StructType\EwsAddItemToMyCalendarType|null
     */
    public function getAddItemToMyCalendar()
    {
        return $this->AddItemToMyCalendar;
    }
    /**
     * Set AddItemToMyCalendar value
     * @param \Ews\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAddItemToMyCalendar(\Ews\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar = null)
    {
        $this->AddItemToMyCalendar = $addItemToMyCalendar;
        return $this;
    }
    /**
     * Get ProposeNewTime value
     * @return \Ews\StructType\EwsProposeNewTimeType|null
     */
    public function getProposeNewTime()
    {
        return $this->ProposeNewTime;
    }
    /**
     * Set ProposeNewTime value
     * @param \Ews\StructType\EwsProposeNewTimeType $proposeNewTime
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setProposeNewTime(\Ews\StructType\EwsProposeNewTimeType $proposeNewTime = null)
    {
        $this->ProposeNewTime = $proposeNewTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
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
