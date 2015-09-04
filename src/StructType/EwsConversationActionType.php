<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsConversationActionType extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Action;
    /**
     * The ConversationId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The ContextFolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ContextFolderId;
    /**
     * The ConversationLastSyncTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $ConversationLastSyncTime;
    /**
     * The ProcessRightAway
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ProcessRightAway;
    /**
     * The DestinationFolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $DestinationFolderId;
    /**
     * The Categories
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Categories;
    /**
     * The EnableAlwaysDelete
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $EnableAlwaysDelete;
    /**
     * The IsRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsRead;
    /**
     * The DeleteType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeleteType;
    /**
     * The RetentionPolicyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RetentionPolicyType;
    /**
     * The RetentionPolicyTagId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RetentionPolicyTagId;
    /**
     * The Flag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFlagType
     */
    public $Flag;
    /**
     * The SuppressReadReceipts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $SuppressReadReceipts;
    /**
     * Constructor method for ConversationActionType
     * @uses EwsConversationActionType::setAction()
     * @uses EwsConversationActionType::setConversationId()
     * @uses EwsConversationActionType::setContextFolderId()
     * @uses EwsConversationActionType::setConversationLastSyncTime()
     * @uses EwsConversationActionType::setProcessRightAway()
     * @uses EwsConversationActionType::setDestinationFolderId()
     * @uses EwsConversationActionType::setCategories()
     * @uses EwsConversationActionType::setEnableAlwaysDelete()
     * @uses EwsConversationActionType::setIsRead()
     * @uses EwsConversationActionType::setDeleteType()
     * @uses EwsConversationActionType::setRetentionPolicyType()
     * @uses EwsConversationActionType::setRetentionPolicyTagId()
     * @uses EwsConversationActionType::setFlag()
     * @uses EwsConversationActionType::setSuppressReadReceipts()
     * @param string $action
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @param \Ews\StructType\EwsTargetFolderIdType $contextFolderId
     * @param dateTime $conversationLastSyncTime
     * @param boolean $processRightAway
     * @param \Ews\StructType\EwsTargetFolderIdType $destinationFolderId
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @param boolean $enableAlwaysDelete
     * @param boolean $isRead
     * @param string $deleteType
     * @param string $retentionPolicyType
     * @param string $retentionPolicyTagId
     * @param \Ews\StructType\EwsFlagType $flag
     * @param boolean $suppressReadReceipts
     */
    public function __construct($action = null, \Ews\StructType\EwsItemIdType $conversationId = null, \Ews\StructType\EwsTargetFolderIdType $contextFolderId = null, $conversationLastSyncTime = null, $processRightAway = null, \Ews\StructType\EwsTargetFolderIdType $destinationFolderId = null, \Ews\ArrayType\EwsArrayOfStringsType $categories = null, $enableAlwaysDelete = null, $isRead = null, $deleteType = null, $retentionPolicyType = null, $retentionPolicyTagId = null, \Ews\StructType\EwsFlagType $flag = null, $suppressReadReceipts = null)
    {
        $this
            ->setAction($action)
            ->setConversationId($conversationId)
            ->setContextFolderId($contextFolderId)
            ->setConversationLastSyncTime($conversationLastSyncTime)
            ->setProcessRightAway($processRightAway)
            ->setDestinationFolderId($destinationFolderId)
            ->setCategories($categories)
            ->setEnableAlwaysDelete($enableAlwaysDelete)
            ->setIsRead($isRead)
            ->setDeleteType($deleteType)
            ->setRetentionPolicyType($retentionPolicyType)
            ->setRetentionPolicyTagId($retentionPolicyTagId)
            ->setFlag($flag)
            ->setSuppressReadReceipts($suppressReadReceipts);
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Ews\EnumType\EwsConversationActionTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsConversationActionTypeType::getValidValues()
     * @param string $action
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setAction($action = null)
    {
        if (!\Ews\EnumType\EwsConversationActionTypeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \Ews\EnumType\EwsConversationActionTypeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get ConversationId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getConversationId()
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setConversationId(\Ews\StructType\EwsItemIdType $conversationId = null)
    {
        $this->ConversationId = $conversationId;
        return $this;
    }
    /**
     * Get ContextFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getContextFolderId()
    {
        return $this->ContextFolderId;
    }
    /**
     * Set ContextFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $contextFolderId
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setContextFolderId(\Ews\StructType\EwsTargetFolderIdType $contextFolderId = null)
    {
        $this->ContextFolderId = $contextFolderId;
        return $this;
    }
    /**
     * Get ConversationLastSyncTime value
     * @return dateTime|null
     */
    public function getConversationLastSyncTime()
    {
        return $this->ConversationLastSyncTime;
    }
    /**
     * Set ConversationLastSyncTime value
     * @param dateTime $conversationLastSyncTime
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setConversationLastSyncTime($conversationLastSyncTime = null)
    {
        $this->ConversationLastSyncTime = $conversationLastSyncTime;
        return $this;
    }
    /**
     * Get ProcessRightAway value
     * @return boolean|null
     */
    public function getProcessRightAway()
    {
        return $this->ProcessRightAway;
    }
    /**
     * Set ProcessRightAway value
     * @param boolean $processRightAway
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setProcessRightAway($processRightAway = null)
    {
        $this->ProcessRightAway = $processRightAway;
        return $this;
    }
    /**
     * Get DestinationFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getDestinationFolderId()
    {
        return $this->DestinationFolderId;
    }
    /**
     * Set DestinationFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $destinationFolderId
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setDestinationFolderId(\Ews\StructType\EwsTargetFolderIdType $destinationFolderId = null)
    {
        $this->DestinationFolderId = $destinationFolderId;
        return $this;
    }
    /**
     * Get Categories value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }
    /**
     * Set Categories value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setCategories(\Ews\ArrayType\EwsArrayOfStringsType $categories = null)
    {
        $this->Categories = $categories;
        return $this;
    }
    /**
     * Get EnableAlwaysDelete value
     * @return boolean|null
     */
    public function getEnableAlwaysDelete()
    {
        return $this->EnableAlwaysDelete;
    }
    /**
     * Set EnableAlwaysDelete value
     * @param boolean $enableAlwaysDelete
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setEnableAlwaysDelete($enableAlwaysDelete = null)
    {
        $this->EnableAlwaysDelete = $enableAlwaysDelete;
        return $this;
    }
    /**
     * Get IsRead value
     * @return boolean|null
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param boolean $isRead
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setIsRead($isRead = null)
    {
        $this->IsRead = $isRead;
        return $this;
    }
    /**
     * Get DeleteType value
     * @return string|null
     */
    public function getDeleteType()
    {
        return $this->DeleteType;
    }
    /**
     * Set DeleteType value
     * @uses \Ews\EnumType\EwsDisposalType::valueIsValid()
     * @uses \Ews\EnumType\EwsDisposalType::getValidValues()
     * @param string $deleteType
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setDeleteType($deleteType = null)
    {
        if (!\Ews\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deleteType, implode(', ', \Ews\EnumType\EwsDisposalType::getValidValues())), __LINE__);
        }
        $this->DeleteType = $deleteType;
        return $this;
    }
    /**
     * Get RetentionPolicyType value
     * @return string|null
     */
    public function getRetentionPolicyType()
    {
        return $this->RetentionPolicyType;
    }
    /**
     * Set RetentionPolicyType value
     * @uses \Ews\EnumType\EwsRetentionType::valueIsValid()
     * @uses \Ews\EnumType\EwsRetentionType::getValidValues()
     * @param string $retentionPolicyType
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setRetentionPolicyType($retentionPolicyType = null)
    {
        if (!\Ews\EnumType\EwsRetentionType::valueIsValid($retentionPolicyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $retentionPolicyType, implode(', ', \Ews\EnumType\EwsRetentionType::getValidValues())), __LINE__);
        }
        $this->RetentionPolicyType = $retentionPolicyType;
        return $this;
    }
    /**
     * Get RetentionPolicyTagId value
     * @return string|null
     */
    public function getRetentionPolicyTagId()
    {
        return $this->RetentionPolicyTagId;
    }
    /**
     * Set RetentionPolicyTagId value
     * @param string $retentionPolicyTagId
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setRetentionPolicyTagId($retentionPolicyTagId = null)
    {
        $this->RetentionPolicyTagId = $retentionPolicyTagId;
        return $this;
    }
    /**
     * Get Flag value
     * @return \Ews\StructType\EwsFlagType|null
     */
    public function getFlag()
    {
        return $this->Flag;
    }
    /**
     * Set Flag value
     * @param \Ews\StructType\EwsFlagType $flag
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setFlag(\Ews\StructType\EwsFlagType $flag = null)
    {
        $this->Flag = $flag;
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
     * @return \Ews\StructType\EwsConversationActionType
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
     * @return \Ews\StructType\EwsConversationActionType
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
