<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Action;
    /**
     * The ConversationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ConversationId;
    /**
     * The ContextFolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ContextFolderId = null;
    /**
     * The ConversationLastSyncTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConversationLastSyncTime = null;
    /**
     * The ProcessRightAway
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ProcessRightAway = null;
    /**
     * The DestinationFolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $DestinationFolderId = null;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Categories = null;
    /**
     * The EnableAlwaysDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnableAlwaysDelete = null;
    /**
     * The IsRead
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRead = null;
    /**
     * The DeleteType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeleteType = null;
    /**
     * The RetentionPolicyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RetentionPolicyType = null;
    /**
     * The RetentionPolicyTagId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RetentionPolicyTagId = null;
    /**
     * The Flag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsFlagType|null
     */
    protected ?\StructType\EwsFlagType $Flag = null;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SuppressReadReceipts = null;
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
     * @param \StructType\EwsItemIdType $conversationId
     * @param \StructType\EwsTargetFolderIdType $contextFolderId
     * @param string $conversationLastSyncTime
     * @param bool $processRightAway
     * @param \StructType\EwsTargetFolderIdType $destinationFolderId
     * @param \ArrayType\EwsArrayOfStringsType $categories
     * @param bool $enableAlwaysDelete
     * @param bool $isRead
     * @param string $deleteType
     * @param string $retentionPolicyType
     * @param string $retentionPolicyTagId
     * @param \StructType\EwsFlagType $flag
     * @param bool $suppressReadReceipts
     */
    public function __construct(string $action, \StructType\EwsItemIdType $conversationId, ?\StructType\EwsTargetFolderIdType $contextFolderId = null, ?string $conversationLastSyncTime = null, ?bool $processRightAway = null, ?\StructType\EwsTargetFolderIdType $destinationFolderId = null, ?\ArrayType\EwsArrayOfStringsType $categories = null, ?bool $enableAlwaysDelete = null, ?bool $isRead = null, ?string $deleteType = null, ?string $retentionPolicyType = null, ?string $retentionPolicyTagId = null, ?\StructType\EwsFlagType $flag = null, ?bool $suppressReadReceipts = null)
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
    public function getAction(): string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\EwsConversationActionTypeType::valueIsValid()
     * @uses \EnumType\EwsConversationActionTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \StructType\EwsConversationActionType
     */
    public function setAction(string $action): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConversationActionTypeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConversationActionTypeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\EwsConversationActionTypeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get ConversationId value
     * @return \StructType\EwsItemIdType
     */
    public function getConversationId(): \StructType\EwsItemIdType
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \StructType\EwsItemIdType $conversationId
     * @return \StructType\EwsConversationActionType
     */
    public function setConversationId(\StructType\EwsItemIdType $conversationId): self
    {
        $this->ConversationId = $conversationId;
        
        return $this;
    }
    /**
     * Get ContextFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getContextFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->ContextFolderId;
    }
    /**
     * Set ContextFolderId value
     * @param \StructType\EwsTargetFolderIdType $contextFolderId
     * @return \StructType\EwsConversationActionType
     */
    public function setContextFolderId(?\StructType\EwsTargetFolderIdType $contextFolderId = null): self
    {
        $this->ContextFolderId = $contextFolderId;
        
        return $this;
    }
    /**
     * Get ConversationLastSyncTime value
     * @return string|null
     */
    public function getConversationLastSyncTime(): ?string
    {
        return $this->ConversationLastSyncTime;
    }
    /**
     * Set ConversationLastSyncTime value
     * @param string $conversationLastSyncTime
     * @return \StructType\EwsConversationActionType
     */
    public function setConversationLastSyncTime(?string $conversationLastSyncTime = null): self
    {
        // validation for constraint: string
        if (!is_null($conversationLastSyncTime) && !is_string($conversationLastSyncTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conversationLastSyncTime, true), gettype($conversationLastSyncTime)), __LINE__);
        }
        $this->ConversationLastSyncTime = $conversationLastSyncTime;
        
        return $this;
    }
    /**
     * Get ProcessRightAway value
     * @return bool|null
     */
    public function getProcessRightAway(): ?bool
    {
        return $this->ProcessRightAway;
    }
    /**
     * Set ProcessRightAway value
     * @param bool $processRightAway
     * @return \StructType\EwsConversationActionType
     */
    public function setProcessRightAway(?bool $processRightAway = null): self
    {
        // validation for constraint: boolean
        if (!is_null($processRightAway) && !is_bool($processRightAway)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processRightAway, true), gettype($processRightAway)), __LINE__);
        }
        $this->ProcessRightAway = $processRightAway;
        
        return $this;
    }
    /**
     * Get DestinationFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getDestinationFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->DestinationFolderId;
    }
    /**
     * Set DestinationFolderId value
     * @param \StructType\EwsTargetFolderIdType $destinationFolderId
     * @return \StructType\EwsConversationActionType
     */
    public function setDestinationFolderId(?\StructType\EwsTargetFolderIdType $destinationFolderId = null): self
    {
        $this->DestinationFolderId = $destinationFolderId;
        
        return $this;
    }
    /**
     * Get Categories value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getCategories(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Categories;
    }
    /**
     * Set Categories value
     * @param \ArrayType\EwsArrayOfStringsType $categories
     * @return \StructType\EwsConversationActionType
     */
    public function setCategories(?\ArrayType\EwsArrayOfStringsType $categories = null): self
    {
        $this->Categories = $categories;
        
        return $this;
    }
    /**
     * Get EnableAlwaysDelete value
     * @return bool|null
     */
    public function getEnableAlwaysDelete(): ?bool
    {
        return $this->EnableAlwaysDelete;
    }
    /**
     * Set EnableAlwaysDelete value
     * @param bool $enableAlwaysDelete
     * @return \StructType\EwsConversationActionType
     */
    public function setEnableAlwaysDelete(?bool $enableAlwaysDelete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableAlwaysDelete) && !is_bool($enableAlwaysDelete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableAlwaysDelete, true), gettype($enableAlwaysDelete)), __LINE__);
        }
        $this->EnableAlwaysDelete = $enableAlwaysDelete;
        
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool|null
     */
    public function getIsRead(): ?bool
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \StructType\EwsConversationActionType
     */
    public function setIsRead(?bool $isRead = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRead) && !is_bool($isRead)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRead, true), gettype($isRead)), __LINE__);
        }
        $this->IsRead = $isRead;
        
        return $this;
    }
    /**
     * Get DeleteType value
     * @return string|null
     */
    public function getDeleteType(): ?string
    {
        return $this->DeleteType;
    }
    /**
     * Set DeleteType value
     * @uses \EnumType\EwsDisposalType::valueIsValid()
     * @uses \EnumType\EwsDisposalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deleteType
     * @return \StructType\EwsConversationActionType
     */
    public function setDeleteType(?string $deleteType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDisposalType', is_array($deleteType) ? implode(', ', $deleteType) : var_export($deleteType, true), implode(', ', \EnumType\EwsDisposalType::getValidValues())), __LINE__);
        }
        $this->DeleteType = $deleteType;
        
        return $this;
    }
    /**
     * Get RetentionPolicyType value
     * @return string|null
     */
    public function getRetentionPolicyType(): ?string
    {
        return $this->RetentionPolicyType;
    }
    /**
     * Set RetentionPolicyType value
     * @uses \EnumType\EwsRetentionType::valueIsValid()
     * @uses \EnumType\EwsRetentionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $retentionPolicyType
     * @return \StructType\EwsConversationActionType
     */
    public function setRetentionPolicyType(?string $retentionPolicyType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsRetentionType::valueIsValid($retentionPolicyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsRetentionType', is_array($retentionPolicyType) ? implode(', ', $retentionPolicyType) : var_export($retentionPolicyType, true), implode(', ', \EnumType\EwsRetentionType::getValidValues())), __LINE__);
        }
        $this->RetentionPolicyType = $retentionPolicyType;
        
        return $this;
    }
    /**
     * Get RetentionPolicyTagId value
     * @return string|null
     */
    public function getRetentionPolicyTagId(): ?string
    {
        return $this->RetentionPolicyTagId;
    }
    /**
     * Set RetentionPolicyTagId value
     * @param string $retentionPolicyTagId
     * @return \StructType\EwsConversationActionType
     */
    public function setRetentionPolicyTagId(?string $retentionPolicyTagId = null): self
    {
        // validation for constraint: string
        if (!is_null($retentionPolicyTagId) && !is_string($retentionPolicyTagId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retentionPolicyTagId, true), gettype($retentionPolicyTagId)), __LINE__);
        }
        $this->RetentionPolicyTagId = $retentionPolicyTagId;
        
        return $this;
    }
    /**
     * Get Flag value
     * @return \StructType\EwsFlagType|null
     */
    public function getFlag(): ?\StructType\EwsFlagType
    {
        return $this->Flag;
    }
    /**
     * Set Flag value
     * @param \StructType\EwsFlagType $flag
     * @return \StructType\EwsConversationActionType
     */
    public function setFlag(?\StructType\EwsFlagType $flag = null): self
    {
        $this->Flag = $flag;
        
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
     * @return \StructType\EwsConversationActionType
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
