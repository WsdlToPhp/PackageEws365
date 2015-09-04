<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsCreateItemType extends EwsBaseRequestType
{
    /**
     * The SavedItemFolderId
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MessageDisposition;
    /**
     * The SendMeetingInvitations
     * Meta informations extracted from the WSDL
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
     * @param string $messageDisposition
     * @return \Ews\StructType\EwsCreateItemType
     */
    public function setMessageDisposition($messageDisposition = null)
    {
        if (!\Ews\EnumType\EwsMessageDispositionType::valueIsValid($messageDisposition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $messageDisposition, implode(', ', \Ews\EnumType\EwsMessageDispositionType::getValidValues())), __LINE__);
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
     * @param string $sendMeetingInvitations
     * @return \Ews\StructType\EwsCreateItemType
     */
    public function setSendMeetingInvitations($sendMeetingInvitations = null)
    {
        if (!\Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid($sendMeetingInvitations)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendMeetingInvitations, implode(', ', \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingInvitations = $sendMeetingInvitations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateItemType
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
