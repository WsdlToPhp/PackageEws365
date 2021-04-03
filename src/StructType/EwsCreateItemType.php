<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $SavedItemFolderId = null;
    /**
     * The Items
     * @var \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAllItemsType $Items = null;
    /**
     * The MessageDisposition
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MessageDisposition = null;
    /**
     * The SendMeetingInvitations
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SendMeetingInvitations = null;
    /**
     * Constructor method for CreateItemType
     * @uses EwsCreateItemType::setSavedItemFolderId()
     * @uses EwsCreateItemType::setItems()
     * @uses EwsCreateItemType::setMessageDisposition()
     * @uses EwsCreateItemType::setSendMeetingInvitations()
     * @param \StructType\EwsTargetFolderIdType $savedItemFolderId
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @param string $messageDisposition
     * @param string $sendMeetingInvitations
     */
    public function __construct(?\StructType\EwsTargetFolderIdType $savedItemFolderId = null, ?\StructType\EwsNonEmptyArrayOfAllItemsType $items = null, ?string $messageDisposition = null, ?string $sendMeetingInvitations = null)
    {
        $this
            ->setSavedItemFolderId($savedItemFolderId)
            ->setItems($items)
            ->setMessageDisposition($messageDisposition)
            ->setSendMeetingInvitations($sendMeetingInvitations);
    }
    /**
     * Get SavedItemFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getSavedItemFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->SavedItemFolderId;
    }
    /**
     * Set SavedItemFolderId value
     * @param \StructType\EwsTargetFolderIdType $savedItemFolderId
     * @return \StructType\EwsCreateItemType
     */
    public function setSavedItemFolderId(?\StructType\EwsTargetFolderIdType $savedItemFolderId = null): self
    {
        $this->SavedItemFolderId = $savedItemFolderId;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getItems(): ?\StructType\EwsNonEmptyArrayOfAllItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @return \StructType\EwsCreateItemType
     */
    public function setItems(?\StructType\EwsNonEmptyArrayOfAllItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get MessageDisposition value
     * @return string|null
     */
    public function getMessageDisposition(): ?string
    {
        return $this->MessageDisposition;
    }
    /**
     * Set MessageDisposition value
     * @uses \EnumType\EwsMessageDispositionType::valueIsValid()
     * @uses \EnumType\EwsMessageDispositionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageDisposition
     * @return \StructType\EwsCreateItemType
     */
    public function setMessageDisposition(?string $messageDisposition = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMessageDispositionType::valueIsValid($messageDisposition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMessageDispositionType', is_array($messageDisposition) ? implode(', ', $messageDisposition) : var_export($messageDisposition, true), implode(', ', \EnumType\EwsMessageDispositionType::getValidValues())), __LINE__);
        }
        $this->MessageDisposition = $messageDisposition;
        
        return $this;
    }
    /**
     * Get SendMeetingInvitations value
     * @return string|null
     */
    public function getSendMeetingInvitations(): ?string
    {
        return $this->SendMeetingInvitations;
    }
    /**
     * Set SendMeetingInvitations value
     * @uses \EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid()
     * @uses \EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sendMeetingInvitations
     * @return \StructType\EwsCreateItemType
     */
    public function setSendMeetingInvitations(?string $sendMeetingInvitations = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid($sendMeetingInvitations)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarItemCreateOrDeleteOperationType', is_array($sendMeetingInvitations) ? implode(', ', $sendMeetingInvitations) : var_export($sendMeetingInvitations, true), implode(', ', \EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingInvitations = $sendMeetingInvitations;
        
        return $this;
    }
}
