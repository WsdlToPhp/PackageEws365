<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $TargetItemType;
    /**
     * The TargetConversationId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $TargetConversationId;
    /**
     * The TargetItemId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $TargetItemId;
    /**
     * The TargetMailboxSmtpAddress
     * @var string
     */
    public $TargetMailboxSmtpAddress;
    /**
     * The TargetMailboxGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TargetMailboxGuid;
    /**
     * The TargetSubject
     * @var string
     */
    public $TargetSubject;
    /**
     * The TargetLogicalId
     * @var string
     */
    public $TargetLogicalId;
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
     * @param \Ews\StructType\EwsItemIdType $targetConversationId
     * @param \Ews\StructType\EwsItemIdType $targetItemId
     * @param string $targetMailboxSmtpAddress
     * @param string $targetMailboxGuid
     * @param string $targetSubject
     * @param string $targetLogicalId
     */
    public function __construct($targetItemType = null, \Ews\StructType\EwsItemIdType $targetConversationId = null, \Ews\StructType\EwsItemIdType $targetItemId = null, $targetMailboxSmtpAddress = null, $targetMailboxGuid = null, $targetSubject = null, $targetLogicalId = null)
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
    public function getTargetItemType()
    {
        return $this->TargetItemType;
    }
    /**
     * Set TargetItemType value
     * @param string $targetItemType
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetItemType($targetItemType = null)
    {
        // validation for constraint: string
        if (!is_null($targetItemType) && !is_string($targetItemType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetItemType, true), gettype($targetItemType)), __LINE__);
        }
        $this->TargetItemType = $targetItemType;
        return $this;
    }
    /**
     * Get TargetConversationId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getTargetConversationId()
    {
        return $this->TargetConversationId;
    }
    /**
     * Set TargetConversationId value
     * @param \Ews\StructType\EwsItemIdType $targetConversationId
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetConversationId(\Ews\StructType\EwsItemIdType $targetConversationId = null)
    {
        $this->TargetConversationId = $targetConversationId;
        return $this;
    }
    /**
     * Get TargetItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getTargetItemId()
    {
        return $this->TargetItemId;
    }
    /**
     * Set TargetItemId value
     * @param \Ews\StructType\EwsItemIdType $targetItemId
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetItemId(\Ews\StructType\EwsItemIdType $targetItemId = null)
    {
        $this->TargetItemId = $targetItemId;
        return $this;
    }
    /**
     * Get TargetMailboxSmtpAddress value
     * @return string|null
     */
    public function getTargetMailboxSmtpAddress()
    {
        return $this->TargetMailboxSmtpAddress;
    }
    /**
     * Set TargetMailboxSmtpAddress value
     * @param string $targetMailboxSmtpAddress
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetMailboxSmtpAddress($targetMailboxSmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($targetMailboxSmtpAddress) && !is_string($targetMailboxSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMailboxSmtpAddress, true), gettype($targetMailboxSmtpAddress)), __LINE__);
        }
        $this->TargetMailboxSmtpAddress = $targetMailboxSmtpAddress;
        return $this;
    }
    /**
     * Get TargetMailboxGuid value
     * @return string|null
     */
    public function getTargetMailboxGuid()
    {
        return $this->TargetMailboxGuid;
    }
    /**
     * Set TargetMailboxGuid value
     * @param string $targetMailboxGuid
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetMailboxGuid($targetMailboxGuid = null)
    {
        // validation for constraint: string
        if (!is_null($targetMailboxGuid) && !is_string($targetMailboxGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetMailboxGuid, true), gettype($targetMailboxGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($targetMailboxGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $targetMailboxGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($targetMailboxGuid, true)), __LINE__);
        }
        $this->TargetMailboxGuid = $targetMailboxGuid;
        return $this;
    }
    /**
     * Get TargetSubject value
     * @return string|null
     */
    public function getTargetSubject()
    {
        return $this->TargetSubject;
    }
    /**
     * Set TargetSubject value
     * @param string $targetSubject
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetSubject($targetSubject = null)
    {
        // validation for constraint: string
        if (!is_null($targetSubject) && !is_string($targetSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetSubject, true), gettype($targetSubject)), __LINE__);
        }
        $this->TargetSubject = $targetSubject;
        return $this;
    }
    /**
     * Get TargetLogicalId value
     * @return string|null
     */
    public function getTargetLogicalId()
    {
        return $this->TargetLogicalId;
    }
    /**
     * Set TargetLogicalId value
     * @param string $targetLogicalId
     * @return \Ews\StructType\EwsSocialActivityTargetDataType
     */
    public function setTargetLogicalId($targetLogicalId = null)
    {
        // validation for constraint: string
        if (!is_null($targetLogicalId) && !is_string($targetLogicalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetLogicalId, true), gettype($targetLogicalId)), __LINE__);
        }
        $this->TargetLogicalId = $targetLogicalId;
        return $this;
    }
}
