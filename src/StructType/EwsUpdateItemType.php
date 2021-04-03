<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateItemType extends EwsBaseRequestType
{
    /**
     * The ConflictResolution
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ConflictResolution;
    /**
     * The SavedItemFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $SavedItemFolderId = null;
    /**
     * The ItemChanges
     * @var \ArrayType\EwsNonEmptyArrayOfItemChangesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfItemChangesType $ItemChanges = null;
    /**
     * The MessageDisposition
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MessageDisposition = null;
    /**
     * The SendMeetingInvitationsOrCancellations
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SendMeetingInvitationsOrCancellations = null;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SuppressReadReceipts = null;
    /**
     * Constructor method for UpdateItemType
     * @uses EwsUpdateItemType::setConflictResolution()
     * @uses EwsUpdateItemType::setSavedItemFolderId()
     * @uses EwsUpdateItemType::setItemChanges()
     * @uses EwsUpdateItemType::setMessageDisposition()
     * @uses EwsUpdateItemType::setSendMeetingInvitationsOrCancellations()
     * @uses EwsUpdateItemType::setSuppressReadReceipts()
     * @param string $conflictResolution
     * @param \StructType\EwsTargetFolderIdType $savedItemFolderId
     * @param \ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges
     * @param string $messageDisposition
     * @param string $sendMeetingInvitationsOrCancellations
     * @param bool $suppressReadReceipts
     */
    public function __construct(string $conflictResolution, ?\StructType\EwsTargetFolderIdType $savedItemFolderId = null, ?\ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges = null, ?string $messageDisposition = null, ?string $sendMeetingInvitationsOrCancellations = null, ?bool $suppressReadReceipts = null)
    {
        $this
            ->setConflictResolution($conflictResolution)
            ->setSavedItemFolderId($savedItemFolderId)
            ->setItemChanges($itemChanges)
            ->setMessageDisposition($messageDisposition)
            ->setSendMeetingInvitationsOrCancellations($sendMeetingInvitationsOrCancellations)
            ->setSuppressReadReceipts($suppressReadReceipts);
    }
    /**
     * Get ConflictResolution value
     * @return string
     */
    public function getConflictResolution(): string
    {
        return $this->ConflictResolution;
    }
    /**
     * Set ConflictResolution value
     * @uses \EnumType\EwsConflictResolutionType::valueIsValid()
     * @uses \EnumType\EwsConflictResolutionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $conflictResolution
     * @return \StructType\EwsUpdateItemType
     */
    public function setConflictResolution(string $conflictResolution): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConflictResolutionType::valueIsValid($conflictResolution)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConflictResolutionType', is_array($conflictResolution) ? implode(', ', $conflictResolution) : var_export($conflictResolution, true), implode(', ', \EnumType\EwsConflictResolutionType::getValidValues())), __LINE__);
        }
        $this->ConflictResolution = $conflictResolution;
        
        return $this;
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
     * @return \StructType\EwsUpdateItemType
     */
    public function setSavedItemFolderId(?\StructType\EwsTargetFolderIdType $savedItemFolderId = null): self
    {
        $this->SavedItemFolderId = $savedItemFolderId;
        
        return $this;
    }
    /**
     * Get ItemChanges value
     * @return \ArrayType\EwsNonEmptyArrayOfItemChangesType|null
     */
    public function getItemChanges(): ?\ArrayType\EwsNonEmptyArrayOfItemChangesType
    {
        return $this->ItemChanges;
    }
    /**
     * Set ItemChanges value
     * @param \ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges
     * @return \StructType\EwsUpdateItemType
     */
    public function setItemChanges(?\ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges = null): self
    {
        $this->ItemChanges = $itemChanges;
        
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
     * @return \StructType\EwsUpdateItemType
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
     * Get SendMeetingInvitationsOrCancellations value
     * @return string|null
     */
    public function getSendMeetingInvitationsOrCancellations(): ?string
    {
        return $this->SendMeetingInvitationsOrCancellations;
    }
    /**
     * Set SendMeetingInvitationsOrCancellations value
     * @uses \EnumType\EwsCalendarItemUpdateOperationType::valueIsValid()
     * @uses \EnumType\EwsCalendarItemUpdateOperationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sendMeetingInvitationsOrCancellations
     * @return \StructType\EwsUpdateItemType
     */
    public function setSendMeetingInvitationsOrCancellations(?string $sendMeetingInvitationsOrCancellations = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarItemUpdateOperationType::valueIsValid($sendMeetingInvitationsOrCancellations)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarItemUpdateOperationType', is_array($sendMeetingInvitationsOrCancellations) ? implode(', ', $sendMeetingInvitationsOrCancellations) : var_export($sendMeetingInvitationsOrCancellations, true), implode(', ', \EnumType\EwsCalendarItemUpdateOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingInvitationsOrCancellations = $sendMeetingInvitationsOrCancellations;
        
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return bool|null
     */
    public function getSuppressReadReceipts(): ?bool
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \StructType\EwsUpdateItemType
     */
    public function setSuppressReadReceipts(?bool $suppressReadReceipts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressReadReceipts) && !is_bool($suppressReadReceipts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressReadReceipts, true), gettype($suppressReadReceipts)), __LINE__);
        }
        $this->SuppressReadReceipts = $suppressReadReceipts;
        
        return $this;
    }
}
