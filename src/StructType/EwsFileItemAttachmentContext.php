<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileItemAttachmentContext StructType
 * Meta information extracted from the WSDL
 * - documentation: Attachment file search result properties.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFileItemAttachmentContext extends EwsFileItemContext
{
    /**
     * The ItemReferenceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemReferenceId = null;
    /**
     * The ReferenceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferenceId = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $Sender = null;
    /**
     * The DisplayTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayTo = null;
    /**
     * The DisplayCc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayCc = null;
    /**
     * The DisplayBcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayBcc = null;
    /**
     * The ReceivedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReceivedTime = null;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Importance = null;
    /**
     * The ItemPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemPath = null;
    /**
     * Constructor method for FileItemAttachmentContext
     * @uses EwsFileItemAttachmentContext::setItemReferenceId()
     * @uses EwsFileItemAttachmentContext::setReferenceId()
     * @uses EwsFileItemAttachmentContext::setSender()
     * @uses EwsFileItemAttachmentContext::setDisplayTo()
     * @uses EwsFileItemAttachmentContext::setDisplayCc()
     * @uses EwsFileItemAttachmentContext::setDisplayBcc()
     * @uses EwsFileItemAttachmentContext::setReceivedTime()
     * @uses EwsFileItemAttachmentContext::setImportance()
     * @uses EwsFileItemAttachmentContext::setItemPath()
     * @param string $itemReferenceId
     * @param string $referenceId
     * @param \StructType\EwsSingleRecipientType $sender
     * @param string $displayTo
     * @param string $displayCc
     * @param string $displayBcc
     * @param string $receivedTime
     * @param string $importance
     * @param string $itemPath
     */
    public function __construct(?string $itemReferenceId = null, ?string $referenceId = null, ?\StructType\EwsSingleRecipientType $sender = null, ?string $displayTo = null, ?string $displayCc = null, ?string $displayBcc = null, ?string $receivedTime = null, ?string $importance = null, ?string $itemPath = null)
    {
        $this
            ->setItemReferenceId($itemReferenceId)
            ->setReferenceId($referenceId)
            ->setSender($sender)
            ->setDisplayTo($displayTo)
            ->setDisplayCc($displayCc)
            ->setDisplayBcc($displayBcc)
            ->setReceivedTime($receivedTime)
            ->setImportance($importance)
            ->setItemPath($itemPath);
    }
    /**
     * Get ItemReferenceId value
     * @return string|null
     */
    public function getItemReferenceId(): ?string
    {
        return $this->ItemReferenceId;
    }
    /**
     * Set ItemReferenceId value
     * @param string $itemReferenceId
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setItemReferenceId(?string $itemReferenceId = null): self
    {
        // validation for constraint: string
        if (!is_null($itemReferenceId) && !is_string($itemReferenceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReferenceId, true), gettype($itemReferenceId)), __LINE__);
        }
        $this->ItemReferenceId = $itemReferenceId;
        
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setReferenceId(?string $referenceId = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceId, true), gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        
        return $this;
    }
    /**
     * Get Sender value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getSender(): ?\StructType\EwsSingleRecipientType
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \StructType\EwsSingleRecipientType $sender
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setSender(?\StructType\EwsSingleRecipientType $sender = null): self
    {
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Get DisplayTo value
     * @return string|null
     */
    public function getDisplayTo(): ?string
    {
        return $this->DisplayTo;
    }
    /**
     * Set DisplayTo value
     * @param string $displayTo
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setDisplayTo(?string $displayTo = null): self
    {
        // validation for constraint: string
        if (!is_null($displayTo) && !is_string($displayTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayTo, true), gettype($displayTo)), __LINE__);
        }
        $this->DisplayTo = $displayTo;
        
        return $this;
    }
    /**
     * Get DisplayCc value
     * @return string|null
     */
    public function getDisplayCc(): ?string
    {
        return $this->DisplayCc;
    }
    /**
     * Set DisplayCc value
     * @param string $displayCc
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setDisplayCc(?string $displayCc = null): self
    {
        // validation for constraint: string
        if (!is_null($displayCc) && !is_string($displayCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayCc, true), gettype($displayCc)), __LINE__);
        }
        $this->DisplayCc = $displayCc;
        
        return $this;
    }
    /**
     * Get DisplayBcc value
     * @return string|null
     */
    public function getDisplayBcc(): ?string
    {
        return $this->DisplayBcc;
    }
    /**
     * Set DisplayBcc value
     * @param string $displayBcc
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setDisplayBcc(?string $displayBcc = null): self
    {
        // validation for constraint: string
        if (!is_null($displayBcc) && !is_string($displayBcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayBcc, true), gettype($displayBcc)), __LINE__);
        }
        $this->DisplayBcc = $displayBcc;
        
        return $this;
    }
    /**
     * Get ReceivedTime value
     * @return string|null
     */
    public function getReceivedTime(): ?string
    {
        return $this->ReceivedTime;
    }
    /**
     * Set ReceivedTime value
     * @param string $receivedTime
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setReceivedTime(?string $receivedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedTime) && !is_string($receivedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedTime, true), gettype($receivedTime)), __LINE__);
        }
        $this->ReceivedTime = $receivedTime;
        
        return $this;
    }
    /**
     * Get Importance value
     * @return string|null
     */
    public function getImportance(): ?string
    {
        return $this->Importance;
    }
    /**
     * Set Importance value
     * @uses \EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $importance
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setImportance(?string $importance = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsImportanceChoicesType', is_array($importance) ? implode(', ', $importance) : var_export($importance, true), implode(', ', \EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->Importance = $importance;
        
        return $this;
    }
    /**
     * Get ItemPath value
     * @return string|null
     */
    public function getItemPath(): ?string
    {
        return $this->ItemPath;
    }
    /**
     * Set ItemPath value
     * @param string $itemPath
     * @return \StructType\EwsFileItemAttachmentContext
     */
    public function setItemPath(?string $itemPath = null): self
    {
        // validation for constraint: string
        if (!is_null($itemPath) && !is_string($itemPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemPath, true), gettype($itemPath)), __LINE__);
        }
        $this->ItemPath = $itemPath;
        
        return $this;
    }
}
