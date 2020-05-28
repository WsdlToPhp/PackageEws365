<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfResponseObjectsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfResponseObjectsType extends AbstractStructBase
{
    /**
     * The AcceptItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsAcceptItemType
     */
    public $AcceptItem;
    /**
     * The TentativelyAcceptItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsTentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;
    /**
     * The DeclineItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsDeclineItemType
     */
    public $DeclineItem;
    /**
     * The ReplyToItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsReplyToItemType
     */
    public $ReplyToItem;
    /**
     * The ForwardItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsForwardItemType
     */
    public $ForwardItem;
    /**
     * The ReplyAllToItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsReplyAllToItemType
     */
    public $ReplyAllToItem;
    /**
     * The CancelCalendarItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsCancelCalendarItemType
     */
    public $CancelCalendarItem;
    /**
     * The RemoveItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsRemoveItemType
     */
    public $RemoveItem;
    /**
     * The SuppressReadReceipt
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSuppressReadReceiptType
     */
    public $SuppressReadReceipt;
    /**
     * The PostReplyItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsPostReplyItemType
     */
    public $PostReplyItem;
    /**
     * The AcceptSharingInvitation
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsAcceptSharingInvitationType
     */
    public $AcceptSharingInvitation;
    /**
     * The AddItemToMyCalendar
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsAddItemToMyCalendarType
     */
    public $AddItemToMyCalendar;
    /**
     * The ProposeNewTime
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
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
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAcceptItem(\Ews\StructType\EwsAcceptItemType $acceptItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setTentativelyAcceptItem(\Ews\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setDeclineItem(\Ews\StructType\EwsDeclineItemType $declineItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setReplyToItem(\Ews\StructType\EwsReplyToItemType $replyToItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setForwardItem(\Ews\StructType\EwsForwardItemType $forwardItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setReplyAllToItem(\Ews\StructType\EwsReplyAllToItemType $replyAllToItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setCancelCalendarItem(\Ews\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setRemoveItem(\Ews\StructType\EwsRemoveItemType $removeItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setSuppressReadReceipt(\Ews\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setPostReplyItem(\Ews\StructType\EwsPostReplyItemType $postReplyItem = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AddItemToMyCalendar',
            'ProposeNewTime',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAcceptSharingInvitation(\Ews\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * Get AddItemToMyCalendar value
     * @return \Ews\StructType\EwsAddItemToMyCalendarType|null
     */
    public function getAddItemToMyCalendar()
    {
        return isset($this->AddItemToMyCalendar) ? $this->AddItemToMyCalendar : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAddItemToMyCalendar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddItemToMyCalendar method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAddItemToMyCalendarForChoiceConstraintsFromSetAddItemToMyCalendar($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'ProposeNewTime',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AddItemToMyCalendar can\'t be set as the property %s is already set. Only one property must be set among these properties: AddItemToMyCalendar, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AddItemToMyCalendar value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAddItemToMyCalendar(\Ews\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
        if ('' !== ($addItemToMyCalendarChoiceErrorMessage = self::validateAddItemToMyCalendarForChoiceConstraintsFromSetAddItemToMyCalendar($addItemToMyCalendar))) {
            throw new \InvalidArgumentException($addItemToMyCalendarChoiceErrorMessage, __LINE__);
        }
        if (is_null($addItemToMyCalendar) || (is_array($addItemToMyCalendar) && empty($addItemToMyCalendar))) {
            unset($this->AddItemToMyCalendar);
        } else {
            $this->AddItemToMyCalendar = $addItemToMyCalendar;
        }
        return $this;
    }
    /**
     * Get ProposeNewTime value
     * @return \Ews\StructType\EwsProposeNewTimeType|null
     */
    public function getProposeNewTime()
    {
        return isset($this->ProposeNewTime) ? $this->ProposeNewTime : null;
    }
    /**
     * This method is responsible for validating the value passed to the setProposeNewTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProposeNewTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateProposeNewTimeForChoiceConstraintsFromSetProposeNewTime($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AcceptItem',
            'TentativelyAcceptItem',
            'DeclineItem',
            'ReplyToItem',
            'ForwardItem',
            'ReplyAllToItem',
            'CancelCalendarItem',
            'RemoveItem',
            'SuppressReadReceipt',
            'PostReplyItem',
            'AcceptSharingInvitation',
            'AddItemToMyCalendar',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ProposeNewTime can\'t be set as the property %s is already set. Only one property must be set among these properties: ProposeNewTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ProposeNewTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsProposeNewTimeType $proposeNewTime
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setProposeNewTime(\Ews\StructType\EwsProposeNewTimeType $proposeNewTime = null)
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
        if ('' !== ($proposeNewTimeChoiceErrorMessage = self::validateProposeNewTimeForChoiceConstraintsFromSetProposeNewTime($proposeNewTime))) {
            throw new \InvalidArgumentException($proposeNewTimeChoiceErrorMessage, __LINE__);
        }
        if (is_null($proposeNewTime) || (is_array($proposeNewTime) && empty($proposeNewTime))) {
            unset($this->ProposeNewTime);
        } else {
            $this->ProposeNewTime = $proposeNewTime;
        }
        return $this;
    }
}
