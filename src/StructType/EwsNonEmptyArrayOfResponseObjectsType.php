<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsAcceptItemType|null
     */
    protected ?\StructType\EwsAcceptItemType $AcceptItem = null;
    /**
     * The TentativelyAcceptItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsTentativelyAcceptItemType|null
     */
    protected ?\StructType\EwsTentativelyAcceptItemType $TentativelyAcceptItem = null;
    /**
     * The DeclineItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsDeclineItemType|null
     */
    protected ?\StructType\EwsDeclineItemType $DeclineItem = null;
    /**
     * The ReplyToItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsReplyToItemType|null
     */
    protected ?\StructType\EwsReplyToItemType $ReplyToItem = null;
    /**
     * The ForwardItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsForwardItemType|null
     */
    protected ?\StructType\EwsForwardItemType $ForwardItem = null;
    /**
     * The ReplyAllToItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsReplyAllToItemType|null
     */
    protected ?\StructType\EwsReplyAllToItemType $ReplyAllToItem = null;
    /**
     * The CancelCalendarItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsCancelCalendarItemType|null
     */
    protected ?\StructType\EwsCancelCalendarItemType $CancelCalendarItem = null;
    /**
     * The RemoveItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsRemoveItemType|null
     */
    protected ?\StructType\EwsRemoveItemType $RemoveItem = null;
    /**
     * The SuppressReadReceipt
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSuppressReadReceiptType|null
     */
    protected ?\StructType\EwsSuppressReadReceiptType $SuppressReadReceipt = null;
    /**
     * The PostReplyItem
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsPostReplyItemType|null
     */
    protected ?\StructType\EwsPostReplyItemType $PostReplyItem = null;
    /**
     * The AcceptSharingInvitation
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsAcceptSharingInvitationType|null
     */
    protected ?\StructType\EwsAcceptSharingInvitationType $AcceptSharingInvitation = null;
    /**
     * The AddItemToMyCalendar
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsAddItemToMyCalendarType|null
     */
    protected ?\StructType\EwsAddItemToMyCalendarType $AddItemToMyCalendar = null;
    /**
     * The ProposeNewTime
     * Meta information extracted from the WSDL
     * - choice: AcceptItem | TentativelyAcceptItem | DeclineItem | ReplyToItem | ForwardItem | ReplyAllToItem | CancelCalendarItem | RemoveItem | SuppressReadReceipt | PostReplyItem | AcceptSharingInvitation | AddItemToMyCalendar | ProposeNewTime
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsProposeNewTimeType|null
     */
    protected ?\StructType\EwsProposeNewTimeType $ProposeNewTime = null;
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
     * @param \StructType\EwsAcceptItemType $acceptItem
     * @param \StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem
     * @param \StructType\EwsDeclineItemType $declineItem
     * @param \StructType\EwsReplyToItemType $replyToItem
     * @param \StructType\EwsForwardItemType $forwardItem
     * @param \StructType\EwsReplyAllToItemType $replyAllToItem
     * @param \StructType\EwsCancelCalendarItemType $cancelCalendarItem
     * @param \StructType\EwsRemoveItemType $removeItem
     * @param \StructType\EwsSuppressReadReceiptType $suppressReadReceipt
     * @param \StructType\EwsPostReplyItemType $postReplyItem
     * @param \StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation
     * @param \StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar
     * @param \StructType\EwsProposeNewTimeType $proposeNewTime
     */
    public function __construct(?\StructType\EwsAcceptItemType $acceptItem = null, ?\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null, ?\StructType\EwsDeclineItemType $declineItem = null, ?\StructType\EwsReplyToItemType $replyToItem = null, ?\StructType\EwsForwardItemType $forwardItem = null, ?\StructType\EwsReplyAllToItemType $replyAllToItem = null, ?\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null, ?\StructType\EwsRemoveItemType $removeItem = null, ?\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null, ?\StructType\EwsPostReplyItemType $postReplyItem = null, ?\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null, ?\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar = null, ?\StructType\EwsProposeNewTimeType $proposeNewTime = null)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAcceptItem(?\StructType\EwsAcceptItemType $acceptItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setTentativelyAcceptItem(?\StructType\EwsTentativelyAcceptItemType $tentativelyAcceptItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setDeclineItem(?\StructType\EwsDeclineItemType $declineItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setReplyToItem(?\StructType\EwsReplyToItemType $replyToItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setForwardItem(?\StructType\EwsForwardItemType $forwardItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setReplyAllToItem(?\StructType\EwsReplyAllToItemType $replyAllToItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setCancelCalendarItem(?\StructType\EwsCancelCalendarItemType $cancelCalendarItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setRemoveItem(?\StructType\EwsRemoveItemType $removeItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setSuppressReadReceipt(?\StructType\EwsSuppressReadReceiptType $suppressReadReceipt = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setPostReplyItem(?\StructType\EwsPostReplyItemType $postReplyItem = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAcceptSharingInvitation(?\StructType\EwsAcceptSharingInvitationType $acceptSharingInvitation = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
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
     * Get AddItemToMyCalendar value
     * @return \StructType\EwsAddItemToMyCalendarType|null
     */
    public function getAddItemToMyCalendar(): ?\StructType\EwsAddItemToMyCalendarType
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
    public function validateAddItemToMyCalendarForChoiceConstraintsFromSetAddItemToMyCalendar($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AddItemToMyCalendar can\'t be set as the property %s is already set. Only one property must be set among these properties: AddItemToMyCalendar, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AddItemToMyCalendar value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setAddItemToMyCalendar(?\StructType\EwsAddItemToMyCalendarType $addItemToMyCalendar = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
        if ('' !== ($addItemToMyCalendarChoiceErrorMessage = self::validateAddItemToMyCalendarForChoiceConstraintsFromSetAddItemToMyCalendar($addItemToMyCalendar))) {
            throw new InvalidArgumentException($addItemToMyCalendarChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsProposeNewTimeType|null
     */
    public function getProposeNewTime(): ?\StructType\EwsProposeNewTimeType
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
    public function validateProposeNewTimeForChoiceConstraintsFromSetProposeNewTime($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ProposeNewTime can\'t be set as the property %s is already set. Only one property must be set among these properties: ProposeNewTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ProposeNewTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsProposeNewTimeType $proposeNewTime
     * @return \StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public function setProposeNewTime(?\StructType\EwsProposeNewTimeType $proposeNewTime = null): self
    {
        // validation for constraint: choice(AcceptItem, TentativelyAcceptItem, DeclineItem, ReplyToItem, ForwardItem, ReplyAllToItem, CancelCalendarItem, RemoveItem, SuppressReadReceipt, PostReplyItem, AcceptSharingInvitation, AddItemToMyCalendar, ProposeNewTime)
        if ('' !== ($proposeNewTimeChoiceErrorMessage = self::validateProposeNewTimeForChoiceConstraintsFromSetProposeNewTime($proposeNewTime))) {
            throw new InvalidArgumentException($proposeNewTimeChoiceErrorMessage, __LINE__);
        }
        if (is_null($proposeNewTime) || (is_array($proposeNewTime) && empty($proposeNewTime))) {
            unset($this->ProposeNewTime);
        } else {
            $this->ProposeNewTime = $proposeNewTime;
        }
        
        return $this;
    }
}
