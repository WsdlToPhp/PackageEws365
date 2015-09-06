<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchableMailboxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Searchable mailbox.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchableMailboxType extends AbstractStructBase
{
    /**
     * The Guid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $Guid;
    /**
     * The PrimarySmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * The IsExternalMailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsExternalMailbox;
    /**
     * The ExternalEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExternalEmailAddress;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The IsMembershipGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsMembershipGroup;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
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
     * @param boolean $isExternalMailbox
     * @param string $externalEmailAddress
     * @param string $displayName
     * @param boolean $isMembershipGroup
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
        $this->PrimarySmtpAddress = $primarySmtpAddress;
        return $this;
    }
    /**
     * Get IsExternalMailbox value
     * @return boolean
     */
    public function getIsExternalMailbox()
    {
        return $this->IsExternalMailbox;
    }
    /**
     * Set IsExternalMailbox value
     * @param boolean $isExternalMailbox
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setIsExternalMailbox($isExternalMailbox = null)
    {
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
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get IsMembershipGroup value
     * @return boolean
     */
    public function getIsMembershipGroup()
    {
        return $this->IsMembershipGroup;
    }
    /**
     * Set IsMembershipGroup value
     * @param boolean $isMembershipGroup
     * @return \Ews\StructType\EwsSearchableMailboxType
     */
    public function setIsMembershipGroup($isMembershipGroup = null)
    {
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
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchableMailboxType
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
