<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateItemType extends EwsBaseRequestType
{
    /**
     * The SavedItemFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $SavedItemFolderId;
    /**
     * The Items
     * @var \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public $Items;
    /**
     * The MessageDisposition
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MessageDisposition;
    /**
     * The SendMeetingInvitations
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SendMeetingInvitations;
    /**
     * Constructor method for CreateItemType
     * @uses EwsCreateItemType::setSavedItemFolderId()
     * @uses EwsCreateItemType::setItems()
     * @uses EwsCreateItemType::setMessageDisposition()
     * @uses EwsCreateItemType::setSendMeetingInvitations()
     * @param \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @param string $messageDisposition
     * @param string $sendMeetingInvitations
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $savedItemFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items = null, $messageDisposition = null, $sendMeetingInvitations = null)
    {
        $this
            ->setSavedItemFolderId($savedItemFolderId)
            ->setItems($items)
            ->setMessageDisposition($messageDisposition)
            ->setSendMeetingInvitations($sendMeetingInvitations);
    }
    /**
     * Get SavedItemFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getSavedItemFolderId()
    {
        return $this->SavedItemFolderId;
    }
    /**
     * Set SavedItemFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId
     * @return \Ews\StructType\EwsCreateItemType
     */
    public function setSavedItemFolderId(\Ews\StructType\EwsTargetFolderIdType $savedItemFolderId = null)
    {
        $this->SavedItemFolderId = $savedItemFolderId;
        return $this;
    }
    /**
     * Get Items value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @return \Ews\StructType\EwsCreateItemType
     */
    public function setItems(\Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Get MessageDisposition value
     * @return string|null
     */
    public function getMessageDisposition()
    {
        return $this->MessageDisposition;
    }
    /**
     * Set MessageDisposition value
     * @uses \Ews\EnumType\EwsMessageDispositionType::valueIsValid()
     * @uses \Ews\EnumType\EwsMessageDispositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageDisposition
     * @return \Ews\StructType\EwsCreateItemType
     */
    public function setMessageDisposition($messageDisposition = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMessageDispositionType::valueIsValid($messageDisposition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMessageDispositionType', is_array($messageDisposition) ? implode(', ', $messageDisposition) : var_export($messageDisposition, true), implode(', ', \Ews\EnumType\EwsMessageDispositionType::getValidValues())), __LINE__);
        }
        $this->MessageDisposition = $messageDisposition;
        return $this;
    }
    /**
     * Get SendMeetingInvitations value
     * @return string|null
     */
    public function getSendMeetingInvitations()
    {
        return $this->SendMeetingInvitations;
    }
    /**
     * Set SendMeetingInvitations value
     * @uses \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sendMeetingInvitations
     * @return \Ews\StructType\EwsCreateItemType
     */
    public function setSendMeetingInvitations($sendMeetingInvitations = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid($sendMeetingInvitations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType', is_array($sendMeetingInvitations) ? implode(', ', $sendMeetingInvitations) : var_export($sendMeetingInvitations, true), implode(', ', \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingInvitations = $sendMeetingInvitations;
        return $this;
    }
}
