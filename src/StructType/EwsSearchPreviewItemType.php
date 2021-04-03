<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $Id;
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPreviewItemMailboxType|null
     */
    protected ?\StructType\EwsPreviewItemMailboxType $Mailbox = null;
    /**
     * The ParentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ParentId = null;
    /**
     * The ItemClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemClass = null;
    /**
     * The UniqueHash
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UniqueHash = null;
    /**
     * The SortValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortValue = null;
    /**
     * The OwaLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OwaLink = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sender = null;
    /**
     * The ToRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $ToRecipients = null;
    /**
     * The CcRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $CcRecipients = null;
    /**
     * The BccRecipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $BccRecipients = null;
    /**
     * The CreatedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatedTime = null;
    /**
     * The ReceivedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReceivedTime = null;
    /**
     * The SentTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SentTime = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Preview = null;
    /**
     * The Importance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Importance = null;
    /**
     * The Read
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Read = null;
    /**
     * The HasAttachment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasAttachment = null;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $ExtendedProperties = null;
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
     * @param \StructType\EwsItemIdType $id
     * @param \StructType\EwsPreviewItemMailboxType $mailbox
     * @param \StructType\EwsItemIdType $parentId
     * @param string $itemClass
     * @param string $uniqueHash
     * @param string $sortValue
     * @param string $owaLink
     * @param string $sender
     * @param \ArrayType\EwsArrayOfSmtpAddressType $toRecipients
     * @param \ArrayType\EwsArrayOfSmtpAddressType $ccRecipients
     * @param \ArrayType\EwsArrayOfSmtpAddressType $bccRecipients
     * @param string $createdTime
     * @param string $receivedTime
     * @param string $sentTime
     * @param string $subject
     * @param int $size
     * @param string $preview
     * @param string $importance
     * @param bool $read
     * @param bool $hasAttachment
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     */
    public function __construct(\StructType\EwsItemIdType $id, ?\StructType\EwsPreviewItemMailboxType $mailbox = null, ?\StructType\EwsItemIdType $parentId = null, ?string $itemClass = null, ?string $uniqueHash = null, ?string $sortValue = null, ?string $owaLink = null, ?string $sender = null, ?\ArrayType\EwsArrayOfSmtpAddressType $toRecipients = null, ?\ArrayType\EwsArrayOfSmtpAddressType $ccRecipients = null, ?\ArrayType\EwsArrayOfSmtpAddressType $bccRecipients = null, ?string $createdTime = null, ?string $receivedTime = null, ?string $sentTime = null, ?string $subject = null, ?int $size = null, ?string $preview = null, ?string $importance = null, ?bool $read = null, ?bool $hasAttachment = null, ?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null)
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
     * @return \StructType\EwsItemIdType
     */
    public function getId(): \StructType\EwsItemIdType
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \StructType\EwsItemIdType $id
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setId(\StructType\EwsItemIdType $id): self
    {
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsPreviewItemMailboxType|null
     */
    public function getMailbox(): ?\StructType\EwsPreviewItemMailboxType
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \StructType\EwsPreviewItemMailboxType $mailbox
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setMailbox(?\StructType\EwsPreviewItemMailboxType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get ParentId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getParentId(): ?\StructType\EwsItemIdType
    {
        return $this->ParentId;
    }
    /**
     * Set ParentId value
     * @param \StructType\EwsItemIdType $parentId
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setParentId(?\StructType\EwsItemIdType $parentId = null): self
    {
        $this->ParentId = $parentId;
        
        return $this;
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass(): ?string
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setItemClass(?string $itemClass = null): self
    {
        // validation for constraint: string
        if (!is_null($itemClass) && !is_string($itemClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemClass, true), gettype($itemClass)), __LINE__);
        }
        $this->ItemClass = $itemClass;
        
        return $this;
    }
    /**
     * Get UniqueHash value
     * @return string|null
     */
    public function getUniqueHash(): ?string
    {
        return $this->UniqueHash;
    }
    /**
     * Set UniqueHash value
     * @param string $uniqueHash
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setUniqueHash(?string $uniqueHash = null): self
    {
        // validation for constraint: string
        if (!is_null($uniqueHash) && !is_string($uniqueHash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniqueHash, true), gettype($uniqueHash)), __LINE__);
        }
        $this->UniqueHash = $uniqueHash;
        
        return $this;
    }
    /**
     * Get SortValue value
     * @return string|null
     */
    public function getSortValue(): ?string
    {
        return $this->SortValue;
    }
    /**
     * Set SortValue value
     * @param string $sortValue
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setSortValue(?string $sortValue = null): self
    {
        // validation for constraint: string
        if (!is_null($sortValue) && !is_string($sortValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortValue, true), gettype($sortValue)), __LINE__);
        }
        $this->SortValue = $sortValue;
        
        return $this;
    }
    /**
     * Get OwaLink value
     * @return string|null
     */
    public function getOwaLink(): ?string
    {
        return $this->OwaLink;
    }
    /**
     * Set OwaLink value
     * @param string $owaLink
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setOwaLink(?string $owaLink = null): self
    {
        // validation for constraint: string
        if (!is_null($owaLink) && !is_string($owaLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owaLink, true), gettype($owaLink)), __LINE__);
        }
        $this->OwaLink = $owaLink;
        
        return $this;
    }
    /**
     * Get Sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param string $sender
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Get ToRecipients value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getToRecipients(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->ToRecipients;
    }
    /**
     * Set ToRecipients value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $toRecipients
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setToRecipients(?\ArrayType\EwsArrayOfSmtpAddressType $toRecipients = null): self
    {
        $this->ToRecipients = $toRecipients;
        
        return $this;
    }
    /**
     * Get CcRecipients value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getCcRecipients(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->CcRecipients;
    }
    /**
     * Set CcRecipients value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $ccRecipients
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setCcRecipients(?\ArrayType\EwsArrayOfSmtpAddressType $ccRecipients = null): self
    {
        $this->CcRecipients = $ccRecipients;
        
        return $this;
    }
    /**
     * Get BccRecipients value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getBccRecipients(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->BccRecipients;
    }
    /**
     * Set BccRecipients value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $bccRecipients
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setBccRecipients(?\ArrayType\EwsArrayOfSmtpAddressType $bccRecipients = null): self
    {
        $this->BccRecipients = $bccRecipients;
        
        return $this;
    }
    /**
     * Get CreatedTime value
     * @return string|null
     */
    public function getCreatedTime(): ?string
    {
        return $this->CreatedTime;
    }
    /**
     * Set CreatedTime value
     * @param string $createdTime
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setCreatedTime(?string $createdTime = null): self
    {
        // validation for constraint: string
        if (!is_null($createdTime) && !is_string($createdTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdTime, true), gettype($createdTime)), __LINE__);
        }
        $this->CreatedTime = $createdTime;
        
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
     * @return \StructType\EwsSearchPreviewItemType
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
     * Get SentTime value
     * @return string|null
     */
    public function getSentTime(): ?string
    {
        return $this->SentTime;
    }
    /**
     * Set SentTime value
     * @param string $sentTime
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setSentTime(?string $sentTime = null): self
    {
        // validation for constraint: string
        if (!is_null($sentTime) && !is_string($sentTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentTime, true), gettype($sentTime)), __LINE__);
        }
        $this->SentTime = $sentTime;
        
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        
        return $this;
    }
    /**
     * Get Preview value
     * @return string|null
     */
    public function getPreview(): ?string
    {
        return $this->Preview;
    }
    /**
     * Set Preview value
     * @param string $preview
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setPreview(?string $preview = null): self
    {
        // validation for constraint: string
        if (!is_null($preview) && !is_string($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->Preview = $preview;
        
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
     * @return \StructType\EwsSearchPreviewItemType
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
     * Get Read value
     * @return bool|null
     */
    public function getRead(): ?bool
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setRead(?bool $read = null): self
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($read, true), gettype($read)), __LINE__);
        }
        $this->Read = $read;
        
        return $this;
    }
    /**
     * Get HasAttachment value
     * @return bool|null
     */
    public function getHasAttachment(): ?bool
    {
        return $this->HasAttachment;
    }
    /**
     * Set HasAttachment value
     * @param bool $hasAttachment
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setHasAttachment(?bool $hasAttachment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAttachment) && !is_bool($hasAttachment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAttachment, true), gettype($hasAttachment)), __LINE__);
        }
        $this->HasAttachment = $hasAttachment;
        
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType|null
     */
    public function getExtendedProperties(): ?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     * @return \StructType\EwsSearchPreviewItemType
     */
    public function setExtendedProperties(?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null): self
    {
        $this->ExtendedProperties = $extendedProperties;
        
        return $this;
    }
}
