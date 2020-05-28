<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationActionType extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Action;
    /**
     * The ConversationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The ContextFolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ContextFolderId;
    /**
     * The ConversationLastSyncTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ConversationLastSyncTime;
    /**
     * The ProcessRightAway
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ProcessRightAway;
    /**
     * The DestinationFolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $DestinationFolderId;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Categories;
    /**
     * The EnableAlwaysDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EnableAlwaysDelete;
    /**
     * The IsRead
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsRead;
    /**
     * The DeleteType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeleteType;
    /**
     * The RetentionPolicyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RetentionPolicyType;
    /**
     * The RetentionPolicyTagId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RetentionPolicyTagId;
    /**
     * The Flag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFlagType
     */
    public $Flag;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
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
     * @param string $conversationLastSyncTime
     * @param bool $processRightAway
     * @param \Ews\StructType\EwsTargetFolderIdType $destinationFolderId
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @param bool $enableAlwaysDelete
     * @param bool $isRead
     * @param string $deleteType
     * @param string $retentionPolicyType
     * @param string $retentionPolicyTagId
     * @param \Ews\StructType\EwsFlagType $flag
     * @param bool $suppressReadReceipts
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
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConversationActionTypeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsConversationActionTypeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \Ews\EnumType\EwsConversationActionTypeType::getValidValues())), __LINE__);
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
     * @return string|null
     */
    public function getConversationLastSyncTime()
    {
        return $this->ConversationLastSyncTime;
    }
    /**
     * Set ConversationLastSyncTime value
     * @param string $conversationLastSyncTime
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setConversationLastSyncTime($conversationLastSyncTime = null)
    {
        // validation for constraint: string
        if (!is_null($conversationLastSyncTime) && !is_string($conversationLastSyncTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conversationLastSyncTime, true), gettype($conversationLastSyncTime)), __LINE__);
        }
        $this->ConversationLastSyncTime = $conversationLastSyncTime;
        return $this;
    }
    /**
     * Get ProcessRightAway value
     * @return bool|null
     */
    public function getProcessRightAway()
    {
        return $this->ProcessRightAway;
    }
    /**
     * Set ProcessRightAway value
     * @param bool $processRightAway
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setProcessRightAway($processRightAway = null)
    {
        // validation for constraint: boolean
        if (!is_null($processRightAway) && !is_bool($processRightAway)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processRightAway, true), gettype($processRightAway)), __LINE__);
        }
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
     * @return bool|null
     */
    public function getEnableAlwaysDelete()
    {
        return $this->EnableAlwaysDelete;
    }
    /**
     * Set EnableAlwaysDelete value
     * @param bool $enableAlwaysDelete
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setEnableAlwaysDelete($enableAlwaysDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableAlwaysDelete) && !is_bool($enableAlwaysDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableAlwaysDelete, true), gettype($enableAlwaysDelete)), __LINE__);
        }
        $this->EnableAlwaysDelete = $enableAlwaysDelete;
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool|null
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setIsRead($isRead = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRead) && !is_bool($isRead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRead, true), gettype($isRead)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $deleteType
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setDeleteType($deleteType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDisposalType', is_array($deleteType) ? implode(', ', $deleteType) : var_export($deleteType, true), implode(', ', \Ews\EnumType\EwsDisposalType::getValidValues())), __LINE__);
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
     * @throws \InvalidArgumentException
     * @param string $retentionPolicyType
     * @return \Ews\StructType\EwsConversationActionType
     */
    public function setRetentionPolicyType($retentionPolicyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsRetentionType::valueIsValid($retentionPolicyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsRetentionType', is_array($retentionPolicyType) ? implode(', ', $retentionPolicyType) : var_export($retentionPolicyType, true), implode(', ', \Ews\EnumType\EwsRetentionType::getValidValues())), __LINE__);
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
        // validation for constraint: string
        if (!is_null($retentionPolicyTagId) && !is_string($retentionPolicyTagId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retentionPolicyTagId, true), gettype($retentionPolicyTagId)), __LINE__);
        }
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
     * @return bool|null
     */
    public function getSuppressReadReceipts()
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \Ews\StructType\EwsConversationActionType
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
