<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $ConflictResolution;
    /**
     * The SavedItemFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $SavedItemFolderId;
    /**
     * The ItemChanges
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType
     */
    public $ItemChanges;
    /**
     * The MessageDisposition
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MessageDisposition;
    /**
     * The SendMeetingInvitationsOrCancellations
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SendMeetingInvitationsOrCancellations;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $SuppressReadReceipts;
    /**
     * Constructor method for UpdateItemType
     * @uses EwsUpdateItemType::setConflictResolution()
     * @uses EwsUpdateItemType::setSavedItemFolderId()
     * @uses EwsUpdateItemType::setItemChanges()
     * @uses EwsUpdateItemType::setMessageDisposition()
     * @uses EwsUpdateItemType::setSendMeetingInvitationsOrCancellations()
     * @uses EwsUpdateItemType::setSuppressReadReceipts()
     * @param string $conflictResolution
     * @param \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges
     * @param string $messageDisposition
     * @param string $sendMeetingInvitationsOrCancellations
     * @param bool $suppressReadReceipts
     */
    public function __construct($conflictResolution = null, \Ews\StructType\EwsTargetFolderIdType $savedItemFolderId = null, \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges = null, $messageDisposition = null, $sendMeetingInvitationsOrCancellations = null, $suppressReadReceipts = null)
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
    public function getConflictResolution()
    {
        return $this->ConflictResolution;
    }
    /**
     * Set ConflictResolution value
     * @uses \Ews\EnumType\EwsConflictResolutionType::valueIsValid()
     * @uses \Ews\EnumType\EwsConflictResolutionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $conflictResolution
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setConflictResolution($conflictResolution = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConflictResolutionType::valueIsValid($conflictResolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsConflictResolutionType', is_array($conflictResolution) ? implode(', ', $conflictResolution) : var_export($conflictResolution, true), implode(', ', \Ews\EnumType\EwsConflictResolutionType::getValidValues())), __LINE__);
        }
        $this->ConflictResolution = $conflictResolution;
        return $this;
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
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setSavedItemFolderId(\Ews\StructType\EwsTargetFolderIdType $savedItemFolderId = null)
    {
        $this->SavedItemFolderId = $savedItemFolderId;
        return $this;
    }
    /**
     * Get ItemChanges value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType|null
     */
    public function getItemChanges()
    {
        return $this->ItemChanges;
    }
    /**
     * Set ItemChanges value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setItemChanges(\Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType $itemChanges = null)
    {
        $this->ItemChanges = $itemChanges;
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
     * @return \Ews\StructType\EwsUpdateItemType
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
     * Get SendMeetingInvitationsOrCancellations value
     * @return string|null
     */
    public function getSendMeetingInvitationsOrCancellations()
    {
        return $this->SendMeetingInvitationsOrCancellations;
    }
    /**
     * Set SendMeetingInvitationsOrCancellations value
     * @uses \Ews\EnumType\EwsCalendarItemUpdateOperationType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarItemUpdateOperationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sendMeetingInvitationsOrCancellations
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setSendMeetingInvitationsOrCancellations($sendMeetingInvitationsOrCancellations = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarItemUpdateOperationType::valueIsValid($sendMeetingInvitationsOrCancellations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCalendarItemUpdateOperationType', is_array($sendMeetingInvitationsOrCancellations) ? implode(', ', $sendMeetingInvitationsOrCancellations) : var_export($sendMeetingInvitationsOrCancellations, true), implode(', ', \Ews\EnumType\EwsCalendarItemUpdateOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingInvitationsOrCancellations = $sendMeetingInvitationsOrCancellations;
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return bool|null
     */
    public function getSuppressReadReceipts()
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setSuppressReadReceipts($suppressReadReceipts = null)
    {
        // validation for constraint: boolean
        if (!is_null($suppressReadReceipts) && !is_bool($suppressReadReceipts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressReadReceipts, true), gettype($suppressReadReceipts)), __LINE__);
        }
        $this->SuppressReadReceipts = $suppressReadReceipts;
        return $this;
    }
}
