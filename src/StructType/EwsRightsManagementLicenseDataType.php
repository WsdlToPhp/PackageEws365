<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RightsManagedMessageDecryptionStatus = null;
    /**
     * The RmsTemplateId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RmsTemplateId = null;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TemplateName = null;
    /**
     * The TemplateDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TemplateDescription = null;
    /**
     * The EditAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EditAllowed = null;
    /**
     * The ReplyAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReplyAllowed = null;
    /**
     * The ReplyAllAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReplyAllAllowed = null;
    /**
     * The ForwardAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ForwardAllowed = null;
    /**
     * The ModifyRecipientsAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ModifyRecipientsAllowed = null;
    /**
     * The ExtractAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExtractAllowed = null;
    /**
     * The PrintAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PrintAllowed = null;
    /**
     * The ExportAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExportAllowed = null;
    /**
     * The ProgrammaticAccessAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ProgrammaticAccessAllowed = null;
    /**
     * The IsOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOwner = null;
    /**
     * The ContentOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentOwner = null;
    /**
     * The ContentExpiryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentExpiryDate = null;
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
    public function __construct(?int $rightsManagedMessageDecryptionStatus = null, ?string $rmsTemplateId = null, ?string $templateName = null, ?string $templateDescription = null, ?bool $editAllowed = null, ?bool $replyAllowed = null, ?bool $replyAllAllowed = null, ?bool $forwardAllowed = null, ?bool $modifyRecipientsAllowed = null, ?bool $extractAllowed = null, ?bool $printAllowed = null, ?bool $exportAllowed = null, ?bool $programmaticAccessAllowed = null, ?bool $isOwner = null, ?string $contentOwner = null, ?string $contentExpiryDate = null)
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
    public function getRightsManagedMessageDecryptionStatus(): ?int
    {
        return $this->RightsManagedMessageDecryptionStatus;
    }
    /**
     * Set RightsManagedMessageDecryptionStatus value
     * @param int $rightsManagedMessageDecryptionStatus
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setRightsManagedMessageDecryptionStatus(?int $rightsManagedMessageDecryptionStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($rightsManagedMessageDecryptionStatus) && !(is_int($rightsManagedMessageDecryptionStatus) || ctype_digit($rightsManagedMessageDecryptionStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rightsManagedMessageDecryptionStatus, true), gettype($rightsManagedMessageDecryptionStatus)), __LINE__);
        }
        $this->RightsManagedMessageDecryptionStatus = $rightsManagedMessageDecryptionStatus;
        
        return $this;
    }
    /**
     * Get RmsTemplateId value
     * @return string|null
     */
    public function getRmsTemplateId(): ?string
    {
        return $this->RmsTemplateId;
    }
    /**
     * Set RmsTemplateId value
     * @param string $rmsTemplateId
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setRmsTemplateId(?string $rmsTemplateId = null): self
    {
        // validation for constraint: string
        if (!is_null($rmsTemplateId) && !is_string($rmsTemplateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rmsTemplateId, true), gettype($rmsTemplateId)), __LINE__);
        }
        $this->RmsTemplateId = $rmsTemplateId;
        
        return $this;
    }
    /**
     * Get TemplateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     * @param string $templateName
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->TemplateName = $templateName;
        
        return $this;
    }
    /**
     * Get TemplateDescription value
     * @return string|null
     */
    public function getTemplateDescription(): ?string
    {
        return $this->TemplateDescription;
    }
    /**
     * Set TemplateDescription value
     * @param string $templateDescription
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setTemplateDescription(?string $templateDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($templateDescription) && !is_string($templateDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateDescription, true), gettype($templateDescription)), __LINE__);
        }
        $this->TemplateDescription = $templateDescription;
        
        return $this;
    }
    /**
     * Get EditAllowed value
     * @return bool|null
     */
    public function getEditAllowed(): ?bool
    {
        return $this->EditAllowed;
    }
    /**
     * Set EditAllowed value
     * @param bool $editAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setEditAllowed(?bool $editAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($editAllowed) && !is_bool($editAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editAllowed, true), gettype($editAllowed)), __LINE__);
        }
        $this->EditAllowed = $editAllowed;
        
        return $this;
    }
    /**
     * Get ReplyAllowed value
     * @return bool|null
     */
    public function getReplyAllowed(): ?bool
    {
        return $this->ReplyAllowed;
    }
    /**
     * Set ReplyAllowed value
     * @param bool $replyAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setReplyAllowed(?bool $replyAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($replyAllowed) && !is_bool($replyAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replyAllowed, true), gettype($replyAllowed)), __LINE__);
        }
        $this->ReplyAllowed = $replyAllowed;
        
        return $this;
    }
    /**
     * Get ReplyAllAllowed value
     * @return bool|null
     */
    public function getReplyAllAllowed(): ?bool
    {
        return $this->ReplyAllAllowed;
    }
    /**
     * Set ReplyAllAllowed value
     * @param bool $replyAllAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setReplyAllAllowed(?bool $replyAllAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($replyAllAllowed) && !is_bool($replyAllAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replyAllAllowed, true), gettype($replyAllAllowed)), __LINE__);
        }
        $this->ReplyAllAllowed = $replyAllAllowed;
        
        return $this;
    }
    /**
     * Get ForwardAllowed value
     * @return bool|null
     */
    public function getForwardAllowed(): ?bool
    {
        return $this->ForwardAllowed;
    }
    /**
     * Set ForwardAllowed value
     * @param bool $forwardAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setForwardAllowed(?bool $forwardAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forwardAllowed) && !is_bool($forwardAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forwardAllowed, true), gettype($forwardAllowed)), __LINE__);
        }
        $this->ForwardAllowed = $forwardAllowed;
        
        return $this;
    }
    /**
     * Get ModifyRecipientsAllowed value
     * @return bool|null
     */
    public function getModifyRecipientsAllowed(): ?bool
    {
        return $this->ModifyRecipientsAllowed;
    }
    /**
     * Set ModifyRecipientsAllowed value
     * @param bool $modifyRecipientsAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setModifyRecipientsAllowed(?bool $modifyRecipientsAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($modifyRecipientsAllowed) && !is_bool($modifyRecipientsAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($modifyRecipientsAllowed, true), gettype($modifyRecipientsAllowed)), __LINE__);
        }
        $this->ModifyRecipientsAllowed = $modifyRecipientsAllowed;
        
        return $this;
    }
    /**
     * Get ExtractAllowed value
     * @return bool|null
     */
    public function getExtractAllowed(): ?bool
    {
        return $this->ExtractAllowed;
    }
    /**
     * Set ExtractAllowed value
     * @param bool $extractAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setExtractAllowed(?bool $extractAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($extractAllowed) && !is_bool($extractAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extractAllowed, true), gettype($extractAllowed)), __LINE__);
        }
        $this->ExtractAllowed = $extractAllowed;
        
        return $this;
    }
    /**
     * Get PrintAllowed value
     * @return bool|null
     */
    public function getPrintAllowed(): ?bool
    {
        return $this->PrintAllowed;
    }
    /**
     * Set PrintAllowed value
     * @param bool $printAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setPrintAllowed(?bool $printAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllowed) && !is_bool($printAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllowed, true), gettype($printAllowed)), __LINE__);
        }
        $this->PrintAllowed = $printAllowed;
        
        return $this;
    }
    /**
     * Get ExportAllowed value
     * @return bool|null
     */
    public function getExportAllowed(): ?bool
    {
        return $this->ExportAllowed;
    }
    /**
     * Set ExportAllowed value
     * @param bool $exportAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setExportAllowed(?bool $exportAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportAllowed) && !is_bool($exportAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportAllowed, true), gettype($exportAllowed)), __LINE__);
        }
        $this->ExportAllowed = $exportAllowed;
        
        return $this;
    }
    /**
     * Get ProgrammaticAccessAllowed value
     * @return bool|null
     */
    public function getProgrammaticAccessAllowed(): ?bool
    {
        return $this->ProgrammaticAccessAllowed;
    }
    /**
     * Set ProgrammaticAccessAllowed value
     * @param bool $programmaticAccessAllowed
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setProgrammaticAccessAllowed(?bool $programmaticAccessAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($programmaticAccessAllowed) && !is_bool($programmaticAccessAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($programmaticAccessAllowed, true), gettype($programmaticAccessAllowed)), __LINE__);
        }
        $this->ProgrammaticAccessAllowed = $programmaticAccessAllowed;
        
        return $this;
    }
    /**
     * Get IsOwner value
     * @return bool|null
     */
    public function getIsOwner(): ?bool
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param bool $isOwner
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setIsOwner(?bool $isOwner = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwner) && !is_bool($isOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwner, true), gettype($isOwner)), __LINE__);
        }
        $this->IsOwner = $isOwner;
        
        return $this;
    }
    /**
     * Get ContentOwner value
     * @return string|null
     */
    public function getContentOwner(): ?string
    {
        return $this->ContentOwner;
    }
    /**
     * Set ContentOwner value
     * @param string $contentOwner
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setContentOwner(?string $contentOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($contentOwner) && !is_string($contentOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentOwner, true), gettype($contentOwner)), __LINE__);
        }
        $this->ContentOwner = $contentOwner;
        
        return $this;
    }
    /**
     * Get ContentExpiryDate value
     * @return string|null
     */
    public function getContentExpiryDate(): ?string
    {
        return $this->ContentExpiryDate;
    }
    /**
     * Set ContentExpiryDate value
     * @param string $contentExpiryDate
     * @return \StructType\EwsRightsManagementLicenseDataType
     */
    public function setContentExpiryDate(?string $contentExpiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($contentExpiryDate) && !is_string($contentExpiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentExpiryDate, true), gettype($contentExpiryDate)), __LINE__);
        }
        $this->ContentExpiryDate = $contentExpiryDate;
        
        return $this;
    }
}
