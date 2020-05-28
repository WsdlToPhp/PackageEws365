<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchableMailboxType StructType
 * Meta information extracted from the WSDL
 * - documentation: Searchable mailbox.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchableMailboxType extends AbstractStructBase
{
    /**
     * The Guid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $Guid;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * The IsExternalMailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsExternalMailbox;
    /**
     * The ExternalEmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExternalEmailAddress;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The IsMembershipGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsMembershipGroup;
    /**
     * The ReferenceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReferenceId;
    /**
     * Constructor method for SearchableMailboxType
     * @uses EwsSearchableMailboxType::setGuid()
     * @uses EwsSearchableMailboxType::setPrimarySmtpAddress()
     * @uses EwsSearchableMailboxType::setIsExternalMailbox()
     * @uses EwsSearchableMailboxType::setExternalEmailAddress()
     * @uses EwsSearchableMailboxType::setDisplayName()
     * @uses EwsSearchableMailboxType::setIsMembershipGroup()
     * @uses EwsSearchableMailboxType::setReferenceId()
     * @param string $guid
     * @param string $primarySmtpAddress
     * @param bool $isExternalMailbox
     * @param string $externalEmailAddress
     * @param string $displayName
     * @param bool $isMembershipGroup
     * @param string $referenceId
     */
    public function __construct($guid = null, $primarySmtpAddress = null, $isExternalMailbox = null, $externalEmailAddress = null, $displayName = null, $isMembershipGroup = null, $referenceId = null)
    {
        $this
            ->setGuid($guid)
            ->setPrimarySmtpAddress($primarySmtpAddress)
            ->setIsExternalMailbox($isExternalMailbox)
            ->setExternalEmailAddress($externalEmailAddress)
            ->setDisplayName($displayName)
            ->setIsMembershipGroup($isMembershipGroup)
            ->setReferenceId($referenceId);
    }
    /**
     * Get Guid value
     * @return string
     */
    public function getGuid()
    {
        return $this->Guid;
    }
    /**
     * Set Guid value
     * @param string $guid
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($guid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($guid, true)), __LINE__);
        }
        $this->Guid = $guid;
        return $this;
    }
    /**
     * Get PrimarySmtpAddress value
     * @return string
     */
    public function getPrimarySmtpAddress()
    {
        return $this->PrimarySmtpAddress;
    }
    /**
     * Set PrimarySmtpAddress value
     * @param string $primarySmtpAddress
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setPrimarySmtpAddress($primarySmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($primarySmtpAddress) && !is_string($primarySmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primarySmtpAddress, true), gettype($primarySmtpAddress)), __LINE__);
        }
        $this->PrimarySmtpAddress = $primarySmtpAddress;
        return $this;
    }
    /**
     * Get IsExternalMailbox value
     * @return bool
     */
    public function getIsExternalMailbox()
    {
        return $this->IsExternalMailbox;
    }
    /**
     * Set IsExternalMailbox value
     * @param bool $isExternalMailbox
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setIsExternalMailbox($isExternalMailbox = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExternalMailbox) && !is_bool($isExternalMailbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExternalMailbox, true), gettype($isExternalMailbox)), __LINE__);
        }
        $this->IsExternalMailbox = $isExternalMailbox;
        return $this;
    }
    /**
     * Get ExternalEmailAddress value
     * @return string
     */
    public function getExternalEmailAddress()
    {
        return $this->ExternalEmailAddress;
    }
    /**
     * Set ExternalEmailAddress value
     * @param string $externalEmailAddress
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setExternalEmailAddress($externalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($externalEmailAddress) && !is_string($externalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalEmailAddress, true), gettype($externalEmailAddress)), __LINE__);
        }
        $this->ExternalEmailAddress = $externalEmailAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get IsMembershipGroup value
     * @return bool
     */
    public function getIsMembershipGroup()
    {
        return $this->IsMembershipGroup;
    }
    /**
     * Set IsMembershipGroup value
     * @param bool $isMembershipGroup
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setIsMembershipGroup($isMembershipGroup = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMembershipGroup) && !is_bool($isMembershipGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMembershipGroup, true), gettype($isMembershipGroup)), __LINE__);
        }
        $this->IsMembershipGroup = $isMembershipGroup;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \Ews\StructType\EwsSearchableMailboxType
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
}
