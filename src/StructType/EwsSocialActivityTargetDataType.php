<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocialActivityTargetDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSocialActivityTargetDataType extends AbstractStructBase
{
    /**
     * The TargetItemType
     * @var string|null
     */
    protected ?string $TargetItemType = null;
    /**
     * The TargetConversationId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $TargetConversationId = null;
    /**
     * The TargetItemId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $TargetItemId = null;
    /**
     * The TargetMailboxSmtpAddress
     * @var string|null
     */
    protected ?string $TargetMailboxSmtpAddress = null;
    /**
     * The TargetMailboxGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $TargetMailboxGuid = null;
    /**
     * The TargetSubject
     * @var string|null
     */
    protected ?string $TargetSubject = null;
    /**
     * The TargetLogicalId
     * @var string|null
     */
    protected ?string $TargetLogicalId = null;
    /**
     * Constructor method for SocialActivityTargetDataType
     * @uses EwsSocialActivityTargetDataType::setTargetItemType()
     * @uses EwsSocialActivityTargetDataType::setTargetConversationId()
     * @uses EwsSocialActivityTargetDataType::setTargetItemId()
     * @uses EwsSocialActivityTargetDataType::setTargetMailboxSmtpAddress()
     * @uses EwsSocialActivityTargetDataType::setTargetMailboxGuid()
     * @uses EwsSocialActivityTargetDataType::setTargetSubject()
     * @uses EwsSocialActivityTargetDataType::setTargetLogicalId()
     * @param string $targetItemType
     * @param \StructType\EwsItemIdType $targetConversationId
     * @param \StructType\EwsItemIdType $targetItemId
     * @param string $targetMailboxSmtpAddress
     * @param string $targetMailboxGuid
     * @param string $targetSubject
     * @param string $targetLogicalId
     */
    public function __construct(?string $targetItemType = null, ?\StructType\EwsItemIdType $targetConversationId = null, ?\StructType\EwsItemIdType $targetItemId = null, ?string $targetMailboxSmtpAddress = null, ?string $targetMailboxGuid = null, ?string $targetSubject = null, ?string $targetLogicalId = null)
    {
        $this
            ->setTargetItemType($targetItemType)
            ->setTargetConversationId($targetConversationId)
            ->setTargetItemId($targetItemId)
            ->setTargetMailboxSmtpAddress($targetMailboxSmtpAddress)
            ->setTargetMailboxGuid($targetMailboxGuid)
            ->setTargetSubject($targetSubject)
            ->setTargetLogicalId($targetLogicalId);
    }
    /**
     * Get TargetItemType value
     * @return string|null
     */
    public function getTargetItemType(): ?string
    {
        return $this->TargetItemType;
    }
    /**
     * Set TargetItemType value
     * @param string $targetItemType
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetItemType(?string $targetItemType = null): self
    {
        // validation for constraint: string
        if (!is_null($targetItemType) && !is_string($targetItemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetItemType, true), gettype($targetItemType)), __LINE__);
        }
        $this->TargetItemType = $targetItemType;
        
        return $this;
    }
    /**
     * Get TargetConversationId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getTargetConversationId(): ?\StructType\EwsItemIdType
    {
        return $this->TargetConversationId;
    }
    /**
     * Set TargetConversationId value
     * @param \StructType\EwsItemIdType $targetConversationId
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetConversationId(?\StructType\EwsItemIdType $targetConversationId = null): self
    {
        $this->TargetConversationId = $targetConversationId;
        
        return $this;
    }
    /**
     * Get TargetItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getTargetItemId(): ?\StructType\EwsItemIdType
    {
        return $this->TargetItemId;
    }
    /**
     * Set TargetItemId value
     * @param \StructType\EwsItemIdType $targetItemId
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetItemId(?\StructType\EwsItemIdType $targetItemId = null): self
    {
        $this->TargetItemId = $targetItemId;
        
        return $this;
    }
    /**
     * Get TargetMailboxSmtpAddress value
     * @return string|null
     */
    public function getTargetMailboxSmtpAddress(): ?string
    {
        return $this->TargetMailboxSmtpAddress;
    }
    /**
     * Set TargetMailboxSmtpAddress value
     * @param string $targetMailboxSmtpAddress
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetMailboxSmtpAddress(?string $targetMailboxSmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($targetMailboxSmtpAddress) && !is_string($targetMailboxSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMailboxSmtpAddress, true), gettype($targetMailboxSmtpAddress)), __LINE__);
        }
        $this->TargetMailboxSmtpAddress = $targetMailboxSmtpAddress;
        
        return $this;
    }
    /**
     * Get TargetMailboxGuid value
     * @return string|null
     */
    public function getTargetMailboxGuid(): ?string
    {
        return $this->TargetMailboxGuid;
    }
    /**
     * Set TargetMailboxGuid value
     * @param string $targetMailboxGuid
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetMailboxGuid(?string $targetMailboxGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($targetMailboxGuid) && !is_string($targetMailboxGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMailboxGuid, true), gettype($targetMailboxGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($targetMailboxGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $targetMailboxGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($targetMailboxGuid, true)), __LINE__);
        }
        $this->TargetMailboxGuid = $targetMailboxGuid;
        
        return $this;
    }
    /**
     * Get TargetSubject value
     * @return string|null
     */
    public function getTargetSubject(): ?string
    {
        return $this->TargetSubject;
    }
    /**
     * Set TargetSubject value
     * @param string $targetSubject
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetSubject(?string $targetSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($targetSubject) && !is_string($targetSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetSubject, true), gettype($targetSubject)), __LINE__);
        }
        $this->TargetSubject = $targetSubject;
        
        return $this;
    }
    /**
     * Get TargetLogicalId value
     * @return string|null
     */
    public function getTargetLogicalId(): ?string
    {
        return $this->TargetLogicalId;
    }
    /**
     * Set TargetLogicalId value
     * @param string $targetLogicalId
     * @return \StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetLogicalId(?string $targetLogicalId = null): self
    {
        // validation for constraint: string
        if (!is_null($targetLogicalId) && !is_string($targetLogicalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetLogicalId, true), gettype($targetLogicalId)), __LINE__);
        }
        $this->TargetLogicalId = $targetLogicalId;
        
        return $this;
    }
}
