<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPreviewItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox search preview item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchPreviewItemType extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $Id;
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPreviewItemMailboxType
     */
    public $Mailbox;
    /**
     * The ParentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ParentId;
    /**
     * The ItemClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemClass;
    /**
     * The UniqueHash
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueHash;
    /**
     * The SortValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SortValue;
    /**
     * The OwaLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OwaLink;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sender;
    /**
     * The ToRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $ToRecipients;
    /**
     * The CcRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $CcRecipients;
    /**
     * The BccRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $BccRecipients;
    /**
     * The CreatedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreatedTime;
    /**
     * The ReceivedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceivedTime;
    /**
     * The SentTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SentTime;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Preview;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The Read
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Read;
    /**
     * The HasAttachment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $HasAttachment;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public $ExtendedProperties;
    /**
     * Constructor method for SearchPreviewItemType
     * @uses EwsSearchPreviewItemType::setId()
     * @uses EwsSearchPreviewItemType::setMailbox()
     * @uses EwsSearchPreviewItemType::setParentId()
     * @uses EwsSearchPreviewItemType::setItemClass()
     * @uses EwsSearchPreviewItemType::setUniqueHash()
     * @uses EwsSearchPreviewItemType::setSortValue()
     * @uses EwsSearchPreviewItemType::setOwaLink()
     * @uses EwsSearchPreviewItemType::setSender()
     * @uses EwsSearchPreviewItemType::setToRecipients()
     * @uses EwsSearchPreviewItemType::setCcRecipients()
     * @uses EwsSearchPreviewItemType::setBccRecipients()
     * @uses EwsSearchPreviewItemType::setCreatedTime()
     * @uses EwsSearchPreviewItemType::setReceivedTime()
     * @uses EwsSearchPreviewItemType::setSentTime()
     * @uses EwsSearchPreviewItemType::setSubject()
     * @uses EwsSearchPreviewItemType::setSize()
     * @uses EwsSearchPreviewItemType::setPreview()
     * @uses EwsSearchPreviewItemType::setImportance()
     * @uses EwsSearchPreviewItemType::setRead()
     * @uses EwsSearchPreviewItemType::setHasAttachment()
     * @uses EwsSearchPreviewItemType::setExtendedProperties()
     * @param \Ews\StructType\EwsItemIdType $id
     * @param \Ews\StructType\EwsPreviewItemMailboxType $mailbox
     * @param \Ews\StructType\EwsItemIdType $parentId
     * @param string $itemClass
     * @param string $uniqueHash
     * @param string $sortValue
     * @param string $owaLink
     * @param string $sender
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $toRecipients
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $ccRecipients
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $bccRecipients
     * @param string $createdTime
     * @param string $receivedTime
     * @param string $sentTime
     * @param string $subject
     * @param int $size
     * @param string $preview
     * @param string $importance
     * @param bool $read
     * @param bool $hasAttachment
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     */
    public function __construct(\Ews\StructType\EwsItemIdType $id = null, \Ews\StructType\EwsPreviewItemMailboxType $mailbox = null, \Ews\StructType\EwsItemIdType $parentId = null, $itemClass = null, $uniqueHash = null, $sortValue = null, $owaLink = null, $sender = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $toRecipients = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $ccRecipients = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $bccRecipients = null, $createdTime = null, $receivedTime = null, $sentTime = null, $subject = null, $size = null, $preview = null, $importance = null, $read = null, $hasAttachment = null, \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null)
    {
        $this
            ->setId($id)
            ->setMailbox($mailbox)
            ->setParentId($parentId)
            ->setItemClass($itemClass)
            ->setUniqueHash($uniqueHash)
            ->setSortValue($sortValue)
            ->setOwaLink($owaLink)
            ->setSender($sender)
            ->setToRecipients($toRecipients)
            ->setCcRecipients($ccRecipients)
            ->setBccRecipients($bccRecipients)
            ->setCreatedTime($createdTime)
            ->setReceivedTime($receivedTime)
            ->setSentTime($sentTime)
            ->setSubject($subject)
            ->setSize($size)
            ->setPreview($preview)
            ->setImportance($importance)
            ->setRead($read)
            ->setHasAttachment($hasAttachment)
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get Id value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \Ews\StructType\EwsItemIdType $id
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setId(\Ews\StructType\EwsItemIdType $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsPreviewItemMailboxType|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsPreviewItemMailboxType $mailbox
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setMailbox(\Ews\StructType\EwsPreviewItemMailboxType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get ParentId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getParentId()
    {
        return $this->ParentId;
    }
    /**
     * Set ParentId value
     * @param \Ews\StructType\EwsItemIdType $parentId
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setParentId(\Ews\StructType\EwsItemIdType $parentId = null)
    {
        $this->ParentId = $parentId;
        return $this;
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass()
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setItemClass($itemClass = null)
    {
        // validation for constraint: string
        if (!is_null($itemClass) && !is_string($itemClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemClass, true), gettype($itemClass)), __LINE__);
        }
        $this->ItemClass = $itemClass;
        return $this;
    }
    /**
     * Get UniqueHash value
     * @return string|null
     */
    public function getUniqueHash()
    {
        return $this->UniqueHash;
    }
    /**
     * Set UniqueHash value
     * @param string $uniqueHash
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setUniqueHash($uniqueHash = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueHash) && !is_string($uniqueHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniqueHash, true), gettype($uniqueHash)), __LINE__);
        }
        $this->UniqueHash = $uniqueHash;
        return $this;
    }
    /**
     * Get SortValue value
     * @return string|null
     */
    public function getSortValue()
    {
        return $this->SortValue;
    }
    /**
     * Set SortValue value
     * @param string $sortValue
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSortValue($sortValue = null)
    {
        // validation for constraint: string
        if (!is_null($sortValue) && !is_string($sortValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortValue, true), gettype($sortValue)), __LINE__);
        }
        $this->SortValue = $sortValue;
        return $this;
    }
    /**
     * Get OwaLink value
     * @return string|null
     */
    public function getOwaLink()
    {
        return $this->OwaLink;
    }
    /**
     * Set OwaLink value
     * @param string $owaLink
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setOwaLink($owaLink = null)
    {
        // validation for constraint: string
        if (!is_null($owaLink) && !is_string($owaLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owaLink, true), gettype($owaLink)), __LINE__);
        }
        $this->OwaLink = $owaLink;
        return $this;
    }
    /**
     * Get Sender value
     * @return string|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param string $sender
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSender($sender = null)
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get ToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getToRecipients()
    {
        return $this->ToRecipients;
    }
    /**
     * Set ToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $toRecipients
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setToRecipients(\Ews\ArrayType\EwsArrayOfSmtpAddressType $toRecipients = null)
    {
        $this->ToRecipients = $toRecipients;
        return $this;
    }
    /**
     * Get CcRecipients value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getCcRecipients()
    {
        return $this->CcRecipients;
    }
    /**
     * Set CcRecipients value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $ccRecipients
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setCcRecipients(\Ews\ArrayType\EwsArrayOfSmtpAddressType $ccRecipients = null)
    {
        $this->CcRecipients = $ccRecipients;
        return $this;
    }
    /**
     * Get BccRecipients value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getBccRecipients()
    {
        return $this->BccRecipients;
    }
    /**
     * Set BccRecipients value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $bccRecipients
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setBccRecipients(\Ews\ArrayType\EwsArrayOfSmtpAddressType $bccRecipients = null)
    {
        $this->BccRecipients = $bccRecipients;
        return $this;
    }
    /**
     * Get CreatedTime value
     * @return string|null
     */
    public function getCreatedTime()
    {
        return $this->CreatedTime;
    }
    /**
     * Set CreatedTime value
     * @param string $createdTime
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setCreatedTime($createdTime = null)
    {
        // validation for constraint: string
        if (!is_null($createdTime) && !is_string($createdTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdTime, true), gettype($createdTime)), __LINE__);
        }
        $this->CreatedTime = $createdTime;
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
     * @return \Ews\StructType\EwsSearchPreviewItemType
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
     * Get SentTime value
     * @return string|null
     */
    public function getSentTime()
    {
        return $this->SentTime;
    }
    /**
     * Set SentTime value
     * @param string $sentTime
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSentTime($sentTime = null)
    {
        // validation for constraint: string
        if (!is_null($sentTime) && !is_string($sentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentTime, true), gettype($sentTime)), __LINE__);
        }
        $this->SentTime = $sentTime;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Preview value
     * @return string|null
     */
    public function getPreview()
    {
        return $this->Preview;
    }
    /**
     * Set Preview value
     * @param string $preview
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setPreview($preview = null)
    {
        // validation for constraint: string
        if (!is_null($preview) && !is_string($preview)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->Preview = $preview;
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
     * @return \Ews\StructType\EwsSearchPreviewItemType
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
     * Get Read value
     * @return bool|null
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setRead($read = null)
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($read, true), gettype($read)), __LINE__);
        }
        $this->Read = $read;
        return $this;
    }
    /**
     * Get HasAttachment value
     * @return bool|null
     */
    public function getHasAttachment()
    {
        return $this->HasAttachment;
    }
    /**
     * Set HasAttachment value
     * @param bool $hasAttachment
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setHasAttachment($hasAttachment = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAttachment) && !is_bool($hasAttachment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAttachment, true), gettype($hasAttachment)), __LINE__);
        }
        $this->HasAttachment = $hasAttachment;
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType|null
     */
    public function getExtendedProperties()
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setExtendedProperties(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null)
    {
        $this->ExtendedProperties = $extendedProperties;
        return $this;
    }
}
