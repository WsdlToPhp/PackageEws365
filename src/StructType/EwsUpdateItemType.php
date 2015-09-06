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
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Type of conflict resolution to attempt during update
     * @var string
     */
    public $ConflictResolution;
    /**
     * The SavedItemFolderId
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MessageDisposition;
    /**
     * The SendMeetingInvitationsOrCancellations
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SendMeetingInvitationsOrCancellations;
    /**
     * The SuppressReadReceipts
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
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
     * @param boolean $suppressReadReceipts
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
     * @param string $conflictResolution
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setConflictResolution($conflictResolution = null)
    {
        if (!\Ews\EnumType\EwsConflictResolutionType::valueIsValid($conflictResolution)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $conflictResolution, implode(', ', \Ews\EnumType\EwsConflictResolutionType::getValidValues())), __LINE__);
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
     * @param string $messageDisposition
     * @return \Ews\StructType\EwsUpdateItemType
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
     * @param string $sendMeetingInvitationsOrCancellations
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setSendMeetingInvitationsOrCancellations($sendMeetingInvitationsOrCancellations = null)
    {
        if (!\Ews\EnumType\EwsCalendarItemUpdateOperationType::valueIsValid($sendMeetingInvitationsOrCancellations)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendMeetingInvitationsOrCancellations, implode(', ', \Ews\EnumType\EwsCalendarItemUpdateOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingInvitationsOrCancellations = $sendMeetingInvitationsOrCancellations;
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return boolean|null
     */
    public function getSuppressReadReceipts()
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param boolean $suppressReadReceipts
     * @return \Ews\StructType\EwsUpdateItemType
     */
    public function setSuppressReadReceipts($suppressReadReceipts = null)
    {
        $this->SuppressReadReceipts = $suppressReadReceipts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateItemType
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
