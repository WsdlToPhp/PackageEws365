<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleActionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Rule actions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleActionsType extends AbstractStructBase
{
    /**
     * The AssignCategories
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $AssignCategories = null;
    /**
     * The CopyToFolder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $CopyToFolder = null;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Delete = null;
    /**
     * The ForwardAsAttachmentToRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $ForwardAsAttachmentToRecipients = null;
    /**
     * The ForwardToRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $ForwardToRecipients = null;
    /**
     * The MarkImportance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MarkImportance = null;
    /**
     * The MarkAsRead
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MarkAsRead = null;
    /**
     * The MoveToFolder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $MoveToFolder = null;
    /**
     * The PermanentDelete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PermanentDelete = null;
    /**
     * The RedirectToRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $RedirectToRecipients = null;
    /**
     * The SendSMSAlertToRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $SendSMSAlertToRecipients = null;
    /**
     * The ServerReplyWithMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ServerReplyWithMessage = null;
    /**
     * The StopProcessingRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $StopProcessingRules = null;
    /**
     * Constructor method for RuleActionsType
     * @uses EwsRuleActionsType::setAssignCategories()
     * @uses EwsRuleActionsType::setCopyToFolder()
     * @uses EwsRuleActionsType::setDelete()
     * @uses EwsRuleActionsType::setForwardAsAttachmentToRecipients()
     * @uses EwsRuleActionsType::setForwardToRecipients()
     * @uses EwsRuleActionsType::setMarkImportance()
     * @uses EwsRuleActionsType::setMarkAsRead()
     * @uses EwsRuleActionsType::setMoveToFolder()
     * @uses EwsRuleActionsType::setPermanentDelete()
     * @uses EwsRuleActionsType::setRedirectToRecipients()
     * @uses EwsRuleActionsType::setSendSMSAlertToRecipients()
     * @uses EwsRuleActionsType::setServerReplyWithMessage()
     * @uses EwsRuleActionsType::setStopProcessingRules()
     * @param \ArrayType\EwsArrayOfStringsType $assignCategories
     * @param \StructType\EwsTargetFolderIdType $copyToFolder
     * @param bool $delete
     * @param \ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients
     * @param \ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients
     * @param string $markImportance
     * @param bool $markAsRead
     * @param \StructType\EwsTargetFolderIdType $moveToFolder
     * @param bool $permanentDelete
     * @param \ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients
     * @param \ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients
     * @param \StructType\EwsItemIdType $serverReplyWithMessage
     * @param bool $stopProcessingRules
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $assignCategories = null, ?\StructType\EwsTargetFolderIdType $copyToFolder = null, ?bool $delete = null, ?\ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients = null, ?\ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients = null, ?string $markImportance = null, ?bool $markAsRead = null, ?\StructType\EwsTargetFolderIdType $moveToFolder = null, ?bool $permanentDelete = null, ?\ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients = null, ?\ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients = null, ?\StructType\EwsItemIdType $serverReplyWithMessage = null, ?bool $stopProcessingRules = null)
    {
        $this
            ->setAssignCategories($assignCategories)
            ->setCopyToFolder($copyToFolder)
            ->setDelete($delete)
            ->setForwardAsAttachmentToRecipients($forwardAsAttachmentToRecipients)
            ->setForwardToRecipients($forwardToRecipients)
            ->setMarkImportance($markImportance)
            ->setMarkAsRead($markAsRead)
            ->setMoveToFolder($moveToFolder)
            ->setPermanentDelete($permanentDelete)
            ->setRedirectToRecipients($redirectToRecipients)
            ->setSendSMSAlertToRecipients($sendSMSAlertToRecipients)
            ->setServerReplyWithMessage($serverReplyWithMessage)
            ->setStopProcessingRules($stopProcessingRules);
    }
    /**
     * Get AssignCategories value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getAssignCategories(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->AssignCategories;
    }
    /**
     * Set AssignCategories value
     * @param \ArrayType\EwsArrayOfStringsType $assignCategories
     * @return \StructType\EwsRuleActionsType
     */
    public function setAssignCategories(?\ArrayType\EwsArrayOfStringsType $assignCategories = null): self
    {
        $this->AssignCategories = $assignCategories;
        
        return $this;
    }
    /**
     * Get CopyToFolder value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getCopyToFolder(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->CopyToFolder;
    }
    /**
     * Set CopyToFolder value
     * @param \StructType\EwsTargetFolderIdType $copyToFolder
     * @return \StructType\EwsRuleActionsType
     */
    public function setCopyToFolder(?\StructType\EwsTargetFolderIdType $copyToFolder = null): self
    {
        $this->CopyToFolder = $copyToFolder;
        
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete(): ?bool
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\EwsRuleActionsType
     */
    public function setDelete(?bool $delete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        
        return $this;
    }
    /**
     * Get ForwardAsAttachmentToRecipients value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getForwardAsAttachmentToRecipients(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->ForwardAsAttachmentToRecipients;
    }
    /**
     * Set ForwardAsAttachmentToRecipients value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients
     * @return \StructType\EwsRuleActionsType
     */
    public function setForwardAsAttachmentToRecipients(?\ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients = null): self
    {
        $this->ForwardAsAttachmentToRecipients = $forwardAsAttachmentToRecipients;
        
        return $this;
    }
    /**
     * Get ForwardToRecipients value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getForwardToRecipients(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->ForwardToRecipients;
    }
    /**
     * Set ForwardToRecipients value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients
     * @return \StructType\EwsRuleActionsType
     */
    public function setForwardToRecipients(?\ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients = null): self
    {
        $this->ForwardToRecipients = $forwardToRecipients;
        
        return $this;
    }
    /**
     * Get MarkImportance value
     * @return string|null
     */
    public function getMarkImportance(): ?string
    {
        return $this->MarkImportance;
    }
    /**
     * Set MarkImportance value
     * @uses \EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $markImportance
     * @return \StructType\EwsRuleActionsType
     */
    public function setMarkImportance(?string $markImportance = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsImportanceChoicesType::valueIsValid($markImportance)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsImportanceChoicesType', is_array($markImportance) ? implode(', ', $markImportance) : var_export($markImportance, true), implode(', ', \EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->MarkImportance = $markImportance;
        
        return $this;
    }
    /**
     * Get MarkAsRead value
     * @return bool|null
     */
    public function getMarkAsRead(): ?bool
    {
        return $this->MarkAsRead;
    }
    /**
     * Set MarkAsRead value
     * @param bool $markAsRead
     * @return \StructType\EwsRuleActionsType
     */
    public function setMarkAsRead(?bool $markAsRead = null): self
    {
        // validation for constraint: boolean
        if (!is_null($markAsRead) && !is_bool($markAsRead)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($markAsRead, true), gettype($markAsRead)), __LINE__);
        }
        $this->MarkAsRead = $markAsRead;
        
        return $this;
    }
    /**
     * Get MoveToFolder value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getMoveToFolder(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->MoveToFolder;
    }
    /**
     * Set MoveToFolder value
     * @param \StructType\EwsTargetFolderIdType $moveToFolder
     * @return \StructType\EwsRuleActionsType
     */
    public function setMoveToFolder(?\StructType\EwsTargetFolderIdType $moveToFolder = null): self
    {
        $this->MoveToFolder = $moveToFolder;
        
        return $this;
    }
    /**
     * Get PermanentDelete value
     * @return bool|null
     */
    public function getPermanentDelete(): ?bool
    {
        return $this->PermanentDelete;
    }
    /**
     * Set PermanentDelete value
     * @param bool $permanentDelete
     * @return \StructType\EwsRuleActionsType
     */
    public function setPermanentDelete(?bool $permanentDelete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($permanentDelete) && !is_bool($permanentDelete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($permanentDelete, true), gettype($permanentDelete)), __LINE__);
        }
        $this->PermanentDelete = $permanentDelete;
        
        return $this;
    }
    /**
     * Get RedirectToRecipients value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getRedirectToRecipients(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->RedirectToRecipients;
    }
    /**
     * Set RedirectToRecipients value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients
     * @return \StructType\EwsRuleActionsType
     */
    public function setRedirectToRecipients(?\ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients = null): self
    {
        $this->RedirectToRecipients = $redirectToRecipients;
        
        return $this;
    }
    /**
     * Get SendSMSAlertToRecipients value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getSendSMSAlertToRecipients(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->SendSMSAlertToRecipients;
    }
    /**
     * Set SendSMSAlertToRecipients value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients
     * @return \StructType\EwsRuleActionsType
     */
    public function setSendSMSAlertToRecipients(?\ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients = null): self
    {
        $this->SendSMSAlertToRecipients = $sendSMSAlertToRecipients;
        
        return $this;
    }
    /**
     * Get ServerReplyWithMessage value
     * @return \StructType\EwsItemIdType|null
     */
    public function getServerReplyWithMessage(): ?\StructType\EwsItemIdType
    {
        return $this->ServerReplyWithMessage;
    }
    /**
     * Set ServerReplyWithMessage value
     * @param \StructType\EwsItemIdType $serverReplyWithMessage
     * @return \StructType\EwsRuleActionsType
     */
    public function setServerReplyWithMessage(?\StructType\EwsItemIdType $serverReplyWithMessage = null): self
    {
        $this->ServerReplyWithMessage = $serverReplyWithMessage;
        
        return $this;
    }
    /**
     * Get StopProcessingRules value
     * @return bool|null
     */
    public function getStopProcessingRules(): ?bool
    {
        return $this->StopProcessingRules;
    }
    /**
     * Set StopProcessingRules value
     * @param bool $stopProcessingRules
     * @return \StructType\EwsRuleActionsType
     */
    public function setStopProcessingRules(?bool $stopProcessingRules = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stopProcessingRules) && !is_bool($stopProcessingRules)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stopProcessingRules, true), gettype($stopProcessingRules)), __LINE__);
        }
        $this->StopProcessingRules = $stopProcessingRules;
        
        return $this;
    }
}
