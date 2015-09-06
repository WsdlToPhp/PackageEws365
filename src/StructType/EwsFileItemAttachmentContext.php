<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileItemAttachmentContext StructType
 * Meta informations extracted from the WSDL
 * - documentation: Attachment file search result properties.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFileItemAttachmentContext extends EwsFileItemContext
{
    /**
     * The ItemReferenceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemReferenceId;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $Sender;
    /**
     * The DisplayTo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayTo;
    /**
     * The DisplayCc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayCc;
    /**
     * The DisplayBcc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayBcc;
    /**
     * The ReceivedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $ReceivedTime;
    /**
     * The Importance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The ItemPath
     * Meta informations extracted from the WSDL
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
     * @param dateTime $receivedTime
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
        $this->DisplayBcc = $displayBcc;
        return $this;
    }
    /**
     * Get ReceivedTime value
     * @return dateTime|null
     */
    public function getReceivedTime()
    {
        return $this->ReceivedTime;
    }
    /**
     * Set ReceivedTime value
     * @param dateTime $receivedTime
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setReceivedTime($receivedTime = null)
    {
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
     * @param string $importance
     * @return \Ews\StructType\EwsFileItemAttachmentContext
     */
    public function setImportance($importance = null)
    {
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importance, implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
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
        $this->ItemPath = $itemPath;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFileItemAttachmentContext
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
