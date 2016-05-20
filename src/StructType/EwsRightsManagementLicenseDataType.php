<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RightsManagementLicenseDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRightsManagementLicenseDataType extends AbstractStructBase
{
    /**
     * The RightsManagedMessageDecryptionStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RightsManagedMessageDecryptionStatus;
    /**
     * The RmsTemplateId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RmsTemplateId;
    /**
     * The TemplateName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TemplateName;
    /**
     * The TemplateDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TemplateDescription;
    /**
     * The EditAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $EditAllowed;
    /**
     * The ReplyAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReplyAllowed;
    /**
     * The ReplyAllAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReplyAllAllowed;
    /**
     * The ForwardAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ForwardAllowed;
    /**
     * The ModifyRecipientsAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ModifyRecipientsAllowed;
    /**
     * The ExtractAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExtractAllowed;
    /**
     * The PrintAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PrintAllowed;
    /**
     * The ExportAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExportAllowed;
    /**
     * The ProgrammaticAccessAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ProgrammaticAccessAllowed;
    /**
     * The IsOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOwner;
    /**
     * The ContentOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContentOwner;
    /**
     * The ContentExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContentExpiryDate;
    /**
     * Constructor method for RightsManagementLicenseDataType
     * @uses EwsRightsManagementLicenseDataType::setRightsManagedMessageDecryptionStatus()
     * @uses EwsRightsManagementLicenseDataType::setRmsTemplateId()
     * @uses EwsRightsManagementLicenseDataType::setTemplateName()
     * @uses EwsRightsManagementLicenseDataType::setTemplateDescription()
     * @uses EwsRightsManagementLicenseDataType::setEditAllowed()
     * @uses EwsRightsManagementLicenseDataType::setReplyAllowed()
     * @uses EwsRightsManagementLicenseDataType::setReplyAllAllowed()
     * @uses EwsRightsManagementLicenseDataType::setForwardAllowed()
     * @uses EwsRightsManagementLicenseDataType::setModifyRecipientsAllowed()
     * @uses EwsRightsManagementLicenseDataType::setExtractAllowed()
     * @uses EwsRightsManagementLicenseDataType::setPrintAllowed()
     * @uses EwsRightsManagementLicenseDataType::setExportAllowed()
     * @uses EwsRightsManagementLicenseDataType::setProgrammaticAccessAllowed()
     * @uses EwsRightsManagementLicenseDataType::setIsOwner()
     * @uses EwsRightsManagementLicenseDataType::setContentOwner()
     * @uses EwsRightsManagementLicenseDataType::setContentExpiryDate()
     * @param int $rightsManagedMessageDecryptionStatus
     * @param string $rmsTemplateId
     * @param string $templateName
     * @param string $templateDescription
     * @param bool $editAllowed
     * @param bool $replyAllowed
     * @param bool $replyAllAllowed
     * @param bool $forwardAllowed
     * @param bool $modifyRecipientsAllowed
     * @param bool $extractAllowed
     * @param bool $printAllowed
     * @param bool $exportAllowed
     * @param bool $programmaticAccessAllowed
     * @param bool $isOwner
     * @param string $contentOwner
     * @param string $contentExpiryDate
     */
    public function __construct($rightsManagedMessageDecryptionStatus = null, $rmsTemplateId = null, $templateName = null, $templateDescription = null, $editAllowed = null, $replyAllowed = null, $replyAllAllowed = null, $forwardAllowed = null, $modifyRecipientsAllowed = null, $extractAllowed = null, $printAllowed = null, $exportAllowed = null, $programmaticAccessAllowed = null, $isOwner = null, $contentOwner = null, $contentExpiryDate = null)
    {
        $this
            ->setRightsManagedMessageDecryptionStatus($rightsManagedMessageDecryptionStatus)
            ->setRmsTemplateId($rmsTemplateId)
            ->setTemplateName($templateName)
            ->setTemplateDescription($templateDescription)
            ->setEditAllowed($editAllowed)
            ->setReplyAllowed($replyAllowed)
            ->setReplyAllAllowed($replyAllAllowed)
            ->setForwardAllowed($forwardAllowed)
            ->setModifyRecipientsAllowed($modifyRecipientsAllowed)
            ->setExtractAllowed($extractAllowed)
            ->setPrintAllowed($printAllowed)
            ->setExportAllowed($exportAllowed)
            ->setProgrammaticAccessAllowed($programmaticAccessAllowed)
            ->setIsOwner($isOwner)
            ->setContentOwner($contentOwner)
            ->setContentExpiryDate($contentExpiryDate);
    }
    /**
     * Get RightsManagedMessageDecryptionStatus value
     * @return int|null
     */
    public function getRightsManagedMessageDecryptionStatus()
    {
        return $this->RightsManagedMessageDecryptionStatus;
    }
    /**
     * Set RightsManagedMessageDecryptionStatus value
     * @param int $rightsManagedMessageDecryptionStatus
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setRightsManagedMessageDecryptionStatus($rightsManagedMessageDecryptionStatus = null)
    {
        // validation for constraint: int
        if (!is_null($rightsManagedMessageDecryptionStatus) && !is_numeric($rightsManagedMessageDecryptionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rightsManagedMessageDecryptionStatus)), __LINE__);
        }
        $this->RightsManagedMessageDecryptionStatus = $rightsManagedMessageDecryptionStatus;
        return $this;
    }
    /**
     * Get RmsTemplateId value
     * @return string|null
     */
    public function getRmsTemplateId()
    {
        return $this->RmsTemplateId;
    }
    /**
     * Set RmsTemplateId value
     * @param string $rmsTemplateId
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setRmsTemplateId($rmsTemplateId = null)
    {
        // validation for constraint: string
        if (!is_null($rmsTemplateId) && !is_string($rmsTemplateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rmsTemplateId)), __LINE__);
        }
        $this->RmsTemplateId = $rmsTemplateId;
        return $this;
    }
    /**
     * Get TemplateName value
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     * @param string $templateName
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($templateName)), __LINE__);
        }
        $this->TemplateName = $templateName;
        return $this;
    }
    /**
     * Get TemplateDescription value
     * @return string|null
     */
    public function getTemplateDescription()
    {
        return $this->TemplateDescription;
    }
    /**
     * Set TemplateDescription value
     * @param string $templateDescription
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setTemplateDescription($templateDescription = null)
    {
        // validation for constraint: string
        if (!is_null($templateDescription) && !is_string($templateDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($templateDescription)), __LINE__);
        }
        $this->TemplateDescription = $templateDescription;
        return $this;
    }
    /**
     * Get EditAllowed value
     * @return bool|null
     */
    public function getEditAllowed()
    {
        return $this->EditAllowed;
    }
    /**
     * Set EditAllowed value
     * @param bool $editAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setEditAllowed($editAllowed = null)
    {
        $this->EditAllowed = $editAllowed;
        return $this;
    }
    /**
     * Get ReplyAllowed value
     * @return bool|null
     */
    public function getReplyAllowed()
    {
        return $this->ReplyAllowed;
    }
    /**
     * Set ReplyAllowed value
     * @param bool $replyAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setReplyAllowed($replyAllowed = null)
    {
        $this->ReplyAllowed = $replyAllowed;
        return $this;
    }
    /**
     * Get ReplyAllAllowed value
     * @return bool|null
     */
    public function getReplyAllAllowed()
    {
        return $this->ReplyAllAllowed;
    }
    /**
     * Set ReplyAllAllowed value
     * @param bool $replyAllAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setReplyAllAllowed($replyAllAllowed = null)
    {
        $this->ReplyAllAllowed = $replyAllAllowed;
        return $this;
    }
    /**
     * Get ForwardAllowed value
     * @return bool|null
     */
    public function getForwardAllowed()
    {
        return $this->ForwardAllowed;
    }
    /**
     * Set ForwardAllowed value
     * @param bool $forwardAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setForwardAllowed($forwardAllowed = null)
    {
        $this->ForwardAllowed = $forwardAllowed;
        return $this;
    }
    /**
     * Get ModifyRecipientsAllowed value
     * @return bool|null
     */
    public function getModifyRecipientsAllowed()
    {
        return $this->ModifyRecipientsAllowed;
    }
    /**
     * Set ModifyRecipientsAllowed value
     * @param bool $modifyRecipientsAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setModifyRecipientsAllowed($modifyRecipientsAllowed = null)
    {
        $this->ModifyRecipientsAllowed = $modifyRecipientsAllowed;
        return $this;
    }
    /**
     * Get ExtractAllowed value
     * @return bool|null
     */
    public function getExtractAllowed()
    {
        return $this->ExtractAllowed;
    }
    /**
     * Set ExtractAllowed value
     * @param bool $extractAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setExtractAllowed($extractAllowed = null)
    {
        $this->ExtractAllowed = $extractAllowed;
        return $this;
    }
    /**
     * Get PrintAllowed value
     * @return bool|null
     */
    public function getPrintAllowed()
    {
        return $this->PrintAllowed;
    }
    /**
     * Set PrintAllowed value
     * @param bool $printAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setPrintAllowed($printAllowed = null)
    {
        $this->PrintAllowed = $printAllowed;
        return $this;
    }
    /**
     * Get ExportAllowed value
     * @return bool|null
     */
    public function getExportAllowed()
    {
        return $this->ExportAllowed;
    }
    /**
     * Set ExportAllowed value
     * @param bool $exportAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setExportAllowed($exportAllowed = null)
    {
        $this->ExportAllowed = $exportAllowed;
        return $this;
    }
    /**
     * Get ProgrammaticAccessAllowed value
     * @return bool|null
     */
    public function getProgrammaticAccessAllowed()
    {
        return $this->ProgrammaticAccessAllowed;
    }
    /**
     * Set ProgrammaticAccessAllowed value
     * @param bool $programmaticAccessAllowed
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setProgrammaticAccessAllowed($programmaticAccessAllowed = null)
    {
        $this->ProgrammaticAccessAllowed = $programmaticAccessAllowed;
        return $this;
    }
    /**
     * Get IsOwner value
     * @return bool|null
     */
    public function getIsOwner()
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param bool $isOwner
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setIsOwner($isOwner = null)
    {
        $this->IsOwner = $isOwner;
        return $this;
    }
    /**
     * Get ContentOwner value
     * @return string|null
     */
    public function getContentOwner()
    {
        return $this->ContentOwner;
    }
    /**
     * Set ContentOwner value
     * @param string $contentOwner
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setContentOwner($contentOwner = null)
    {
        // validation for constraint: string
        if (!is_null($contentOwner) && !is_string($contentOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentOwner)), __LINE__);
        }
        $this->ContentOwner = $contentOwner;
        return $this;
    }
    /**
     * Get ContentExpiryDate value
     * @return string|null
     */
    public function getContentExpiryDate()
    {
        return $this->ContentExpiryDate;
    }
    /**
     * Set ContentExpiryDate value
     * @param string $contentExpiryDate
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public function setContentExpiryDate($contentExpiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($contentExpiryDate) && !is_string($contentExpiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentExpiryDate)), __LINE__);
        }
        $this->ContentExpiryDate = $contentExpiryDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType
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
