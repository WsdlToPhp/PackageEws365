<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailTips StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailTips extends AbstractStructBase
{
    /**
     * The RecipientAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $RecipientAddress;
    /**
     * The PendingMailTips
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PendingMailTips;
    /**
     * The OutOfOffice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOutOfOfficeMailTip
     */
    public $OutOfOffice;
    /**
     * The MailboxFull
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $MailboxFull;
    /**
     * The CustomMailTip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomMailTip;
    /**
     * The TotalMemberCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalMemberCount;
    /**
     * The ExternalMemberCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExternalMemberCount;
    /**
     * The MaxMessageSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxMessageSize;
    /**
     * The DeliveryRestricted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DeliveryRestricted;
    /**
     * The IsModerated
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsModerated;
    /**
     * The InvalidRecipient
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $InvalidRecipient;
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Scope;
    /**
     * Constructor method for MailTips
     * @uses EwsMailTips::setRecipientAddress()
     * @uses EwsMailTips::setPendingMailTips()
     * @uses EwsMailTips::setOutOfOffice()
     * @uses EwsMailTips::setMailboxFull()
     * @uses EwsMailTips::setCustomMailTip()
     * @uses EwsMailTips::setTotalMemberCount()
     * @uses EwsMailTips::setExternalMemberCount()
     * @uses EwsMailTips::setMaxMessageSize()
     * @uses EwsMailTips::setDeliveryRestricted()
     * @uses EwsMailTips::setIsModerated()
     * @uses EwsMailTips::setInvalidRecipient()
     * @uses EwsMailTips::setScope()
     * @param \Ews\StructType\EwsEmailAddressType $recipientAddress
     * @param string $pendingMailTips
     * @param \Ews\StructType\EwsOutOfOfficeMailTip $outOfOffice
     * @param bool $mailboxFull
     * @param string $customMailTip
     * @param int $totalMemberCount
     * @param int $externalMemberCount
     * @param int $maxMessageSize
     * @param bool $deliveryRestricted
     * @param bool $isModerated
     * @param bool $invalidRecipient
     * @param int $scope
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $recipientAddress = null, $pendingMailTips = null, \Ews\StructType\EwsOutOfOfficeMailTip $outOfOffice = null, $mailboxFull = null, $customMailTip = null, $totalMemberCount = null, $externalMemberCount = null, $maxMessageSize = null, $deliveryRestricted = null, $isModerated = null, $invalidRecipient = null, $scope = null)
    {
        $this
            ->setRecipientAddress($recipientAddress)
            ->setPendingMailTips($pendingMailTips)
            ->setOutOfOffice($outOfOffice)
            ->setMailboxFull($mailboxFull)
            ->setCustomMailTip($customMailTip)
            ->setTotalMemberCount($totalMemberCount)
            ->setExternalMemberCount($externalMemberCount)
            ->setMaxMessageSize($maxMessageSize)
            ->setDeliveryRestricted($deliveryRestricted)
            ->setIsModerated($isModerated)
            ->setInvalidRecipient($invalidRecipient)
            ->setScope($scope);
    }
    /**
     * Get RecipientAddress value
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function getRecipientAddress()
    {
        return $this->RecipientAddress;
    }
    /**
     * Set RecipientAddress value
     * @param \Ews\StructType\EwsEmailAddressType $recipientAddress
     * @return \Ews\StructType\EwsMailTips
     */
    public function setRecipientAddress(\Ews\StructType\EwsEmailAddressType $recipientAddress = null)
    {
        $this->RecipientAddress = $recipientAddress;
        return $this;
    }
    /**
     * Get PendingMailTips value
     * @return string
     */
    public function getPendingMailTips()
    {
        return $this->PendingMailTips;
    }
    /**
     * Set PendingMailTips value
     * @uses \Ews\EnumType\EwsMailTipTypes::valueIsValid()
     * @uses \Ews\EnumType\EwsMailTipTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pendingMailTips
     * @return \Ews\StructType\EwsMailTips
     */
    public function setPendingMailTips($pendingMailTips = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailTipTypes::valueIsValid($pendingMailTips)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pendingMailTips, implode(', ', \Ews\EnumType\EwsMailTipTypes::getValidValues())), __LINE__);
        }
        $this->PendingMailTips = $pendingMailTips;
        return $this;
    }
    /**
     * Get OutOfOffice value
     * @return \Ews\StructType\EwsOutOfOfficeMailTip|null
     */
    public function getOutOfOffice()
    {
        return $this->OutOfOffice;
    }
    /**
     * Set OutOfOffice value
     * @param \Ews\StructType\EwsOutOfOfficeMailTip $outOfOffice
     * @return \Ews\StructType\EwsMailTips
     */
    public function setOutOfOffice(\Ews\StructType\EwsOutOfOfficeMailTip $outOfOffice = null)
    {
        $this->OutOfOffice = $outOfOffice;
        return $this;
    }
    /**
     * Get MailboxFull value
     * @return bool|null
     */
    public function getMailboxFull()
    {
        return $this->MailboxFull;
    }
    /**
     * Set MailboxFull value
     * @param bool $mailboxFull
     * @return \Ews\StructType\EwsMailTips
     */
    public function setMailboxFull($mailboxFull = null)
    {
        $this->MailboxFull = $mailboxFull;
        return $this;
    }
    /**
     * Get CustomMailTip value
     * @return string|null
     */
    public function getCustomMailTip()
    {
        return $this->CustomMailTip;
    }
    /**
     * Set CustomMailTip value
     * @param string $customMailTip
     * @return \Ews\StructType\EwsMailTips
     */
    public function setCustomMailTip($customMailTip = null)
    {
        // validation for constraint: string
        if (!is_null($customMailTip) && !is_string($customMailTip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customMailTip)), __LINE__);
        }
        $this->CustomMailTip = $customMailTip;
        return $this;
    }
    /**
     * Get TotalMemberCount value
     * @return int|null
     */
    public function getTotalMemberCount()
    {
        return $this->TotalMemberCount;
    }
    /**
     * Set TotalMemberCount value
     * @param int $totalMemberCount
     * @return \Ews\StructType\EwsMailTips
     */
    public function setTotalMemberCount($totalMemberCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalMemberCount) && !is_numeric($totalMemberCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalMemberCount)), __LINE__);
        }
        $this->TotalMemberCount = $totalMemberCount;
        return $this;
    }
    /**
     * Get ExternalMemberCount value
     * @return int|null
     */
    public function getExternalMemberCount()
    {
        return $this->ExternalMemberCount;
    }
    /**
     * Set ExternalMemberCount value
     * @param int $externalMemberCount
     * @return \Ews\StructType\EwsMailTips
     */
    public function setExternalMemberCount($externalMemberCount = null)
    {
        // validation for constraint: int
        if (!is_null($externalMemberCount) && !is_numeric($externalMemberCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($externalMemberCount)), __LINE__);
        }
        $this->ExternalMemberCount = $externalMemberCount;
        return $this;
    }
    /**
     * Get MaxMessageSize value
     * @return int|null
     */
    public function getMaxMessageSize()
    {
        return $this->MaxMessageSize;
    }
    /**
     * Set MaxMessageSize value
     * @param int $maxMessageSize
     * @return \Ews\StructType\EwsMailTips
     */
    public function setMaxMessageSize($maxMessageSize = null)
    {
        // validation for constraint: int
        if (!is_null($maxMessageSize) && !is_numeric($maxMessageSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxMessageSize)), __LINE__);
        }
        $this->MaxMessageSize = $maxMessageSize;
        return $this;
    }
    /**
     * Get DeliveryRestricted value
     * @return bool|null
     */
    public function getDeliveryRestricted()
    {
        return $this->DeliveryRestricted;
    }
    /**
     * Set DeliveryRestricted value
     * @param bool $deliveryRestricted
     * @return \Ews\StructType\EwsMailTips
     */
    public function setDeliveryRestricted($deliveryRestricted = null)
    {
        $this->DeliveryRestricted = $deliveryRestricted;
        return $this;
    }
    /**
     * Get IsModerated value
     * @return bool|null
     */
    public function getIsModerated()
    {
        return $this->IsModerated;
    }
    /**
     * Set IsModerated value
     * @param bool $isModerated
     * @return \Ews\StructType\EwsMailTips
     */
    public function setIsModerated($isModerated = null)
    {
        $this->IsModerated = $isModerated;
        return $this;
    }
    /**
     * Get InvalidRecipient value
     * @return bool|null
     */
    public function getInvalidRecipient()
    {
        return $this->InvalidRecipient;
    }
    /**
     * Set InvalidRecipient value
     * @param bool $invalidRecipient
     * @return \Ews\StructType\EwsMailTips
     */
    public function setInvalidRecipient($invalidRecipient = null)
    {
        $this->InvalidRecipient = $invalidRecipient;
        return $this;
    }
    /**
     * Get Scope value
     * @return int|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param int $scope
     * @return \Ews\StructType\EwsMailTips
     */
    public function setScope($scope = null)
    {
        // validation for constraint: int
        if (!is_null($scope) && !is_numeric($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailTips
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
