<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleActionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rule actions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleActionsType extends AbstractStructBase
{
    /**
     * The AssignCategories
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $AssignCategories;
    /**
     * The CopyToFolder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $CopyToFolder;
    /**
     * The Delete
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The ForwardAsAttachmentToRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $ForwardAsAttachmentToRecipients;
    /**
     * The ForwardToRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $ForwardToRecipients;
    /**
     * The MarkImportance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MarkImportance;
    /**
     * The MarkAsRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $MarkAsRead;
    /**
     * The MoveToFolder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $MoveToFolder;
    /**
     * The PermanentDelete
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PermanentDelete;
    /**
     * The RedirectToRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $RedirectToRecipients;
    /**
     * The SendSMSAlertToRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $SendSMSAlertToRecipients;
    /**
     * The ServerReplyWithMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ServerReplyWithMessage;
    /**
     * The StopProcessingRules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $StopProcessingRules;
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
     * @param \Ews\ArrayType\EwsArrayOfStringsType $assignCategories
     * @param \Ews\StructType\EwsTargetFolderIdType $copyToFolder
     * @param bool $delete
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients
     * @param string $markImportance
     * @param bool $markAsRead
     * @param \Ews\StructType\EwsTargetFolderIdType $moveToFolder
     * @param bool $permanentDelete
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients
     * @param \Ews\StructType\EwsItemIdType $serverReplyWithMessage
     * @param bool $stopProcessingRules
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $assignCategories = null, \Ews\StructType\EwsTargetFolderIdType $copyToFolder = null, $delete = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients = null, $markImportance = null, $markAsRead = null, \Ews\StructType\EwsTargetFolderIdType $moveToFolder = null, $permanentDelete = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients = null, \Ews\StructType\EwsItemIdType $serverReplyWithMessage = null, $stopProcessingRules = null)
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
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getAssignCategories()
    {
        return $this->AssignCategories;
    }
    /**
     * Set AssignCategories value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $assignCategories
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setAssignCategories(\Ews\ArrayType\EwsArrayOfStringsType $assignCategories = null)
    {
        $this->AssignCategories = $assignCategories;
        return $this;
    }
    /**
     * Get CopyToFolder value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getCopyToFolder()
    {
        return $this->CopyToFolder;
    }
    /**
     * Set CopyToFolder value
     * @param \Ews\StructType\EwsTargetFolderIdType $copyToFolder
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setCopyToFolder(\Ews\StructType\EwsTargetFolderIdType $copyToFolder = null)
    {
        $this->CopyToFolder = $copyToFolder;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get ForwardAsAttachmentToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getForwardAsAttachmentToRecipients()
    {
        return $this->ForwardAsAttachmentToRecipients;
    }
    /**
     * Set ForwardAsAttachmentToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setForwardAsAttachmentToRecipients(\Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardAsAttachmentToRecipients = null)
    {
        $this->ForwardAsAttachmentToRecipients = $forwardAsAttachmentToRecipients;
        return $this;
    }
    /**
     * Get ForwardToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getForwardToRecipients()
    {
        return $this->ForwardToRecipients;
    }
    /**
     * Set ForwardToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setForwardToRecipients(\Ews\ArrayType\EwsArrayOfEmailAddressesType $forwardToRecipients = null)
    {
        $this->ForwardToRecipients = $forwardToRecipients;
        return $this;
    }
    /**
     * Get MarkImportance value
     * @return string|null
     */
    public function getMarkImportance()
    {
        return $this->MarkImportance;
    }
    /**
     * Set MarkImportance value
     * @uses \Ews\EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $markImportance
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setMarkImportance($markImportance = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($markImportance)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $markImportance, implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->MarkImportance = $markImportance;
        return $this;
    }
    /**
     * Get MarkAsRead value
     * @return bool|null
     */
    public function getMarkAsRead()
    {
        return $this->MarkAsRead;
    }
    /**
     * Set MarkAsRead value
     * @param bool $markAsRead
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setMarkAsRead($markAsRead = null)
    {
        // validation for constraint: boolean
        if (!is_null($markAsRead) && !is_bool($markAsRead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($markAsRead)), __LINE__);
        }
        $this->MarkAsRead = $markAsRead;
        return $this;
    }
    /**
     * Get MoveToFolder value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getMoveToFolder()
    {
        return $this->MoveToFolder;
    }
    /**
     * Set MoveToFolder value
     * @param \Ews\StructType\EwsTargetFolderIdType $moveToFolder
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setMoveToFolder(\Ews\StructType\EwsTargetFolderIdType $moveToFolder = null)
    {
        $this->MoveToFolder = $moveToFolder;
        return $this;
    }
    /**
     * Get PermanentDelete value
     * @return bool|null
     */
    public function getPermanentDelete()
    {
        return $this->PermanentDelete;
    }
    /**
     * Set PermanentDelete value
     * @param bool $permanentDelete
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setPermanentDelete($permanentDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($permanentDelete) && !is_bool($permanentDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($permanentDelete)), __LINE__);
        }
        $this->PermanentDelete = $permanentDelete;
        return $this;
    }
    /**
     * Get RedirectToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getRedirectToRecipients()
    {
        return $this->RedirectToRecipients;
    }
    /**
     * Set RedirectToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setRedirectToRecipients(\Ews\ArrayType\EwsArrayOfEmailAddressesType $redirectToRecipients = null)
    {
        $this->RedirectToRecipients = $redirectToRecipients;
        return $this;
    }
    /**
     * Get SendSMSAlertToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getSendSMSAlertToRecipients()
    {
        return $this->SendSMSAlertToRecipients;
    }
    /**
     * Set SendSMSAlertToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setSendSMSAlertToRecipients(\Ews\ArrayType\EwsArrayOfEmailAddressesType $sendSMSAlertToRecipients = null)
    {
        $this->SendSMSAlertToRecipients = $sendSMSAlertToRecipients;
        return $this;
    }
    /**
     * Get ServerReplyWithMessage value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getServerReplyWithMessage()
    {
        return $this->ServerReplyWithMessage;
    }
    /**
     * Set ServerReplyWithMessage value
     * @param \Ews\StructType\EwsItemIdType $serverReplyWithMessage
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setServerReplyWithMessage(\Ews\StructType\EwsItemIdType $serverReplyWithMessage = null)
    {
        $this->ServerReplyWithMessage = $serverReplyWithMessage;
        return $this;
    }
    /**
     * Get StopProcessingRules value
     * @return bool|null
     */
    public function getStopProcessingRules()
    {
        return $this->StopProcessingRules;
    }
    /**
     * Set StopProcessingRules value
     * @param bool $stopProcessingRules
     * @return \Ews\StructType\EwsRuleActionsType
     */
    public function setStopProcessingRules($stopProcessingRules = null)
    {
        // validation for constraint: boolean
        if (!is_null($stopProcessingRules) && !is_bool($stopProcessingRules)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stopProcessingRules)), __LINE__);
        }
        $this->StopProcessingRules = $stopProcessingRules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRuleActionsType
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
