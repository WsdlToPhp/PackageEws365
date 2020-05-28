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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $RecipientAddress;
    /**
     * The PendingMailTips
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $PendingMailTips;
    /**
     * The OutOfOffice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOutOfOfficeMailTip
     */
    public $OutOfOffice;
    /**
     * The MailboxFull
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $MailboxFull;
    /**
     * The CustomMailTip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomMailTip;
    /**
     * The TotalMemberCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalMemberCount;
    /**
     * The ExternalMemberCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExternalMemberCount;
    /**
     * The MaxMessageSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxMessageSize;
    /**
     * The DeliveryRestricted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DeliveryRestricted;
    /**
     * The IsModerated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsModerated;
    /**
     * The InvalidRecipient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $InvalidRecipient;
    /**
     * The Scope
     * Meta information extracted from the WSDL
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
     * @param string[] $pendingMailTips
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
    public function __construct(\Ews\StructType\EwsEmailAddressType $recipientAddress = null, array $pendingMailTips = array(), \Ews\StructType\EwsOutOfOfficeMailTip $outOfOffice = null, $mailboxFull = null, $customMailTip = null, $totalMemberCount = null, $externalMemberCount = null, $maxMessageSize = null, $deliveryRestricted = null, $isModerated = null, $invalidRecipient = null, $scope = null)
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
     * @return string[]
     */
    public function getPendingMailTips()
    {
        return $this->PendingMailTips;
    }
    /**
     * This method is responsible for validating the values passed to the setPendingMailTips method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPendingMailTips method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePendingMailTipsForArrayConstraintsFromSetPendingMailTips(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mailTipsPendingMailTipsItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsMailTipTypes::valueIsValid($mailTipsPendingMailTipsItem)) {
                $invalidValues[] = is_object($mailTipsPendingMailTipsItem) ? get_class($mailTipsPendingMailTipsItem) : sprintf('%s(%s)', gettype($mailTipsPendingMailTipsItem), var_export($mailTipsPendingMailTipsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMailTipTypes', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsMailTipTypes::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PendingMailTips value
     * @uses \Ews\EnumType\EwsMailTipTypes::valueIsValid()
     * @uses \Ews\EnumType\EwsMailTipTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $pendingMailTips
     * @return \Ews\StructType\EwsMailTips
     */
    public function setPendingMailTips(array $pendingMailTips = array())
    {
        // validation for constraint: list
        if ('' !== ($pendingMailTipsArrayErrorMessage = self::validatePendingMailTipsForArrayConstraintsFromSetPendingMailTips($pendingMailTips))) {
            throw new \InvalidArgumentException($pendingMailTipsArrayErrorMessage, __LINE__);
        }
        $this->PendingMailTips = is_array($pendingMailTips) ? implode(' ', $pendingMailTips) : null;
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
        // validation for constraint: boolean
        if (!is_null($mailboxFull) && !is_bool($mailboxFull)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailboxFull, true), gettype($mailboxFull)), __LINE__);
        }
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customMailTip, true), gettype($customMailTip)), __LINE__);
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
        if (!is_null($totalMemberCount) && !(is_int($totalMemberCount) || ctype_digit($totalMemberCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMemberCount, true), gettype($totalMemberCount)), __LINE__);
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
        if (!is_null($externalMemberCount) && !(is_int($externalMemberCount) || ctype_digit($externalMemberCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalMemberCount, true), gettype($externalMemberCount)), __LINE__);
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
        if (!is_null($maxMessageSize) && !(is_int($maxMessageSize) || ctype_digit($maxMessageSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxMessageSize, true), gettype($maxMessageSize)), __LINE__);
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
        // validation for constraint: boolean
        if (!is_null($deliveryRestricted) && !is_bool($deliveryRestricted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deliveryRestricted, true), gettype($deliveryRestricted)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($isModerated) && !is_bool($isModerated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isModerated, true), gettype($isModerated)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($invalidRecipient) && !is_bool($invalidRecipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invalidRecipient, true), gettype($invalidRecipient)), __LINE__);
        }
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
        if (!is_null($scope) && !(is_int($scope) || ctype_digit($scope))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
}
