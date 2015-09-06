<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPreviewItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailbox search preview item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchPreviewItemType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $Id;
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Mailbox information for each preview item.
     * @var \Ews\StructType\EwsPreviewItemMailboxType
     */
    public $Mailbox;
    /**
     * The ParentId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ParentId;
    /**
     * The ItemClass
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemClass;
    /**
     * The UniqueHash
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueHash;
    /**
     * The SortValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SortValue;
    /**
     * The OwaLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OwaLink;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sender;
    /**
     * The ToRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $ToRecipients;
    /**
     * The CcRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $CcRecipients;
    /**
     * The BccRecipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $BccRecipients;
    /**
     * The CreatedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $CreatedTime;
    /**
     * The ReceivedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $ReceivedTime;
    /**
     * The SentTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $SentTime;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var long
     */
    public $Size;
    /**
     * The Preview
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Preview;
    /**
     * The Importance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The Read
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $Read;
    /**
     * The HasAttachment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $HasAttachment;
    /**
     * The ExtendedProperties
     * Meta informations extracted from the WSDL
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
     * @param dateTime $createdTime
     * @param dateTime $receivedTime
     * @param dateTime $sentTime
     * @param string $subject
     * @param long $size
     * @param string $preview
     * @param string $importance
     * @param boolean $read
     * @param boolean $hasAttachment
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
     * @return dateTime|null
     */
    public function getCreatedTime()
    {
        return $this->CreatedTime;
    }
    /**
     * Set CreatedTime value
     * @param dateTime $createdTime
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setCreatedTime($createdTime = null)
    {
        $this->CreatedTime = $createdTime;
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
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setReceivedTime($receivedTime = null)
    {
        $this->ReceivedTime = $receivedTime;
        return $this;
    }
    /**
     * Get SentTime value
     * @return dateTime|null
     */
    public function getSentTime()
    {
        return $this->SentTime;
    }
    /**
     * Set SentTime value
     * @param dateTime $sentTime
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSentTime($sentTime = null)
    {
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
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Size value
     * @return long|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param long $size
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setSize($size = null)
    {
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
     * @param string $importance
     * @return \Ews\StructType\EwsSearchPreviewItemType
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
     * Get Read value
     * @return boolean|null
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param boolean $read
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setRead($read = null)
    {
        $this->Read = $read;
        return $this;
    }
    /**
     * Get HasAttachment value
     * @return boolean|null
     */
    public function getHasAttachment()
    {
        return $this->HasAttachment;
    }
    /**
     * Set HasAttachment value
     * @param boolean $hasAttachment
     * @return \Ews\StructType\EwsSearchPreviewItemType
     */
    public function setHasAttachment($hasAttachment = null)
    {
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchPreviewItemType
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
