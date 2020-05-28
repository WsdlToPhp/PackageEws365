<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $ItemReferenceId;
    /**
     * The ReferenceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $Sender;
    /**
     * The DisplayTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayTo;
    /**
     * The DisplayCc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayCc;
    /**
     * The DisplayBcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayBcc;
    /**
     * The ReceivedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceivedTime;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The ItemPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemPath;
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
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     * @param string $displayTo
     * @param string $displayCc
     * @param string $displayBcc
     * @param string $receivedTime
     * @param string $importance
     * @param string $itemPath
     */
    public function __construct($itemReferenceId = null, $referenceId = null, \Ews\StructType\EwsSingleRecipientType $sender = null, $displayTo = null, $displayCc = null, $displayBcc = null, $receivedTime = null, $importance = null, $itemPath = null)
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
    public function getItemReferenceId()
    {
        return $this->ItemReferenceId;
    }
    /**
     * Set ItemReferenceId value
     * @param string $itemReferenceId
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setItemReferenceId($itemReferenceId = null)
    {
        // validation for constraint: string
        if (!is_null($itemReferenceId) && !is_string($itemReferenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReferenceId, true), gettype($itemReferenceId)), __LINE__);
        }
        $this->ItemReferenceId = $itemReferenceId;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceId, true), gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Get Sender value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setSender(\Ews\StructType\EwsSingleRecipientType $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get DisplayTo value
     * @return string|null
     */
    public function getDisplayTo()
    {
        return $this->DisplayTo;
    }
    /**
     * Set DisplayTo value
     * @param string $displayTo
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setDisplayTo($displayTo = null)
    {
        // validation for constraint: string
        if (!is_null($displayTo) && !is_string($displayTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayTo, true), gettype($displayTo)), __LINE__);
        }
        $this->DisplayTo = $displayTo;
        return $this;
    }
    /**
     * Get DisplayCc value
     * @return string|null
     */
    public function getDisplayCc()
    {
        return $this->DisplayCc;
    }
    /**
     * Set DisplayCc value
     * @param string $displayCc
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setDisplayCc($displayCc = null)
    {
        // validation for constraint: string
        if (!is_null($displayCc) && !is_string($displayCc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayCc, true), gettype($displayCc)), __LINE__);
        }
        $this->DisplayCc = $displayCc;
        return $this;
    }
    /**
     * Get DisplayBcc value
     * @return string|null
     */
    public function getDisplayBcc()
    {
        return $this->DisplayBcc;
    }
    /**
     * Set DisplayBcc value
     * @param string $displayBcc
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setDisplayBcc($displayBcc = null)
    {
        // validation for constraint: string
        if (!is_null($displayBcc) && !is_string($displayBcc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayBcc, true), gettype($displayBcc)), __LINE__);
        }
        $this->DisplayBcc = $displayBcc;
        return $this;
    }
    /**
     * Get ReceivedTime value
     * @return string|null
     */
    public function getReceivedTime()
    {
        return $this->ReceivedTime;
    }
    /**
     * Set ReceivedTime value
     * @param string $receivedTime
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setReceivedTime($receivedTime = null)
    {
        // validation for constraint: string
        if (!is_null($receivedTime) && !is_string($receivedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedTime, true), gettype($receivedTime)), __LINE__);
        }
        $this->ReceivedTime = $receivedTime;
        return $this;
    }
    /**
     * Get Importance value
     * @return string|null
     */
    public function getImportance()
    {
        return $this->Importance;
    }
    /**
     * Set Importance value
     * @uses \Ews\EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsImportanceChoicesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importance
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setImportance($importance = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsImportanceChoicesType', is_array($importance) ? implode(', ', $importance) : var_export($importance, true), implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->Importance = $importance;
        return $this;
    }
    /**
     * Get ItemPath value
     * @return string|null
     */
    public function getItemPath()
    {
        return $this->ItemPath;
    }
    /**
     * Set ItemPath value
     * @param string $itemPath
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setItemPath($itemPath = null)
    {
        // validation for constraint: string
        if (!is_null($itemPath) && !is_string($itemPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemPath, true), gettype($itemPath)), __LINE__);
        }
        $this->ItemPath = $itemPath;
        return $this;
    }
}
