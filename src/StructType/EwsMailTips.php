<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEmailAddressType
     */
    protected \StructType\EwsEmailAddressType $RecipientAddress;
    /**
     * The PendingMailTips
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $PendingMailTips;
    /**
     * The OutOfOffice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsOutOfOfficeMailTip|null
     */
    protected ?\StructType\EwsOutOfOfficeMailTip $OutOfOffice = null;
    /**
     * The MailboxFull
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MailboxFull = null;
    /**
     * The CustomMailTip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomMailTip = null;
    /**
     * The TotalMemberCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalMemberCount = null;
    /**
     * The ExternalMemberCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ExternalMemberCount = null;
    /**
     * The MaxMessageSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxMessageSize = null;
    /**
     * The DeliveryRestricted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DeliveryRestricted = null;
    /**
     * The IsModerated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsModerated = null;
    /**
     * The InvalidRecipient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InvalidRecipient = null;
    /**
     * The Scope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Scope = null;
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
     * @param \StructType\EwsEmailAddressType $recipientAddress
     * @param array|string $pendingMailTips
     * @param \StructType\EwsOutOfOfficeMailTip $outOfOffice
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
    public function __construct(\StructType\EwsEmailAddressType $recipientAddress, $pendingMailTips, ?\StructType\EwsOutOfOfficeMailTip $outOfOffice = null, ?bool $mailboxFull = null, ?string $customMailTip = null, ?int $totalMemberCount = null, ?int $externalMemberCount = null, ?int $maxMessageSize = null, ?bool $deliveryRestricted = null, ?bool $isModerated = null, ?bool $invalidRecipient = null, ?int $scope = null)
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
     * @return \StructType\EwsEmailAddressType
     */
    public function getRecipientAddress(): \StructType\EwsEmailAddressType
    {
        return $this->RecipientAddress;
    }
    /**
     * Set RecipientAddress value
     * @param \StructType\EwsEmailAddressType $recipientAddress
     * @return \StructType\EwsMailTips
     */
    public function setRecipientAddress(\StructType\EwsEmailAddressType $recipientAddress): self
    {
        $this->RecipientAddress = $recipientAddress;
        
        return $this;
    }
    /**
     * Get PendingMailTips value
     * @return string
     */
    public function getPendingMailTips(): string
    {
        return $this->PendingMailTips;
    }
    /**
     * This method is responsible for validating the values passed to the setPendingMailTips method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPendingMailTips method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePendingMailTipsForArrayConstraintsFromSetPendingMailTips(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mailTipsPendingMailTipsItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsMailTipTypes::valueIsValid($mailTipsPendingMailTipsItem)) {
                $invalidValues[] = is_object($mailTipsPendingMailTipsItem) ? get_class($mailTipsPendingMailTipsItem) : sprintf('%s(%s)', gettype($mailTipsPendingMailTipsItem), var_export($mailTipsPendingMailTipsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMailTipTypes', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsMailTipTypes::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PendingMailTips value
     * @uses \EnumType\EwsMailTipTypes::valueIsValid()
     * @uses \EnumType\EwsMailTipTypes::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $pendingMailTips
     * @return \StructType\EwsMailTips
     */
    public function setPendingMailTips($pendingMailTips): self
    {
        // validation for constraint: list
        if ('' !== ($pendingMailTipsArrayErrorMessage = self::validatePendingMailTipsForArrayConstraintsFromSetPendingMailTips(is_string($pendingMailTips) ? explode(' ', $pendingMailTips) : $pendingMailTips))) {
            throw new InvalidArgumentException($pendingMailTipsArrayErrorMessage, __LINE__);
        }
        $this->PendingMailTips = is_array($pendingMailTips) ? implode(' ', $pendingMailTips) : $pendingMailTips;
        
        return $this;
    }
    /**
     * Get OutOfOffice value
     * @return \StructType\EwsOutOfOfficeMailTip|null
     */
    public function getOutOfOffice(): ?\StructType\EwsOutOfOfficeMailTip
    {
        return $this->OutOfOffice;
    }
    /**
     * Set OutOfOffice value
     * @param \StructType\EwsOutOfOfficeMailTip $outOfOffice
     * @return \StructType\EwsMailTips
     */
    public function setOutOfOffice(?\StructType\EwsOutOfOfficeMailTip $outOfOffice = null): self
    {
        $this->OutOfOffice = $outOfOffice;
        
        return $this;
    }
    /**
     * Get MailboxFull value
     * @return bool|null
     */
    public function getMailboxFull(): ?bool
    {
        return $this->MailboxFull;
    }
    /**
     * Set MailboxFull value
     * @param bool $mailboxFull
     * @return \StructType\EwsMailTips
     */
    public function setMailboxFull(?bool $mailboxFull = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailboxFull) && !is_bool($mailboxFull)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailboxFull, true), gettype($mailboxFull)), __LINE__);
        }
        $this->MailboxFull = $mailboxFull;
        
        return $this;
    }
    /**
     * Get CustomMailTip value
     * @return string|null
     */
    public function getCustomMailTip(): ?string
    {
        return $this->CustomMailTip;
    }
    /**
     * Set CustomMailTip value
     * @param string $customMailTip
     * @return \StructType\EwsMailTips
     */
    public function setCustomMailTip(?string $customMailTip = null): self
    {
        // validation for constraint: string
        if (!is_null($customMailTip) && !is_string($customMailTip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customMailTip, true), gettype($customMailTip)), __LINE__);
        }
        $this->CustomMailTip = $customMailTip;
        
        return $this;
    }
    /**
     * Get TotalMemberCount value
     * @return int|null
     */
    public function getTotalMemberCount(): ?int
    {
        return $this->TotalMemberCount;
    }
    /**
     * Set TotalMemberCount value
     * @param int $totalMemberCount
     * @return \StructType\EwsMailTips
     */
    public function setTotalMemberCount(?int $totalMemberCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalMemberCount) && !(is_int($totalMemberCount) || ctype_digit($totalMemberCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMemberCount, true), gettype($totalMemberCount)), __LINE__);
        }
        $this->TotalMemberCount = $totalMemberCount;
        
        return $this;
    }
    /**
     * Get ExternalMemberCount value
     * @return int|null
     */
    public function getExternalMemberCount(): ?int
    {
        return $this->ExternalMemberCount;
    }
    /**
     * Set ExternalMemberCount value
     * @param int $externalMemberCount
     * @return \StructType\EwsMailTips
     */
    public function setExternalMemberCount(?int $externalMemberCount = null): self
    {
        // validation for constraint: int
        if (!is_null($externalMemberCount) && !(is_int($externalMemberCount) || ctype_digit($externalMemberCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalMemberCount, true), gettype($externalMemberCount)), __LINE__);
        }
        $this->ExternalMemberCount = $externalMemberCount;
        
        return $this;
    }
    /**
     * Get MaxMessageSize value
     * @return int|null
     */
    public function getMaxMessageSize(): ?int
    {
        return $this->MaxMessageSize;
    }
    /**
     * Set MaxMessageSize value
     * @param int $maxMessageSize
     * @return \StructType\EwsMailTips
     */
    public function setMaxMessageSize(?int $maxMessageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($maxMessageSize) && !(is_int($maxMessageSize) || ctype_digit($maxMessageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxMessageSize, true), gettype($maxMessageSize)), __LINE__);
        }
        $this->MaxMessageSize = $maxMessageSize;
        
        return $this;
    }
    /**
     * Get DeliveryRestricted value
     * @return bool|null
     */
    public function getDeliveryRestricted(): ?bool
    {
        return $this->DeliveryRestricted;
    }
    /**
     * Set DeliveryRestricted value
     * @param bool $deliveryRestricted
     * @return \StructType\EwsMailTips
     */
    public function setDeliveryRestricted(?bool $deliveryRestricted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deliveryRestricted) && !is_bool($deliveryRestricted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deliveryRestricted, true), gettype($deliveryRestricted)), __LINE__);
        }
        $this->DeliveryRestricted = $deliveryRestricted;
        
        return $this;
    }
    /**
     * Get IsModerated value
     * @return bool|null
     */
    public function getIsModerated(): ?bool
    {
        return $this->IsModerated;
    }
    /**
     * Set IsModerated value
     * @param bool $isModerated
     * @return \StructType\EwsMailTips
     */
    public function setIsModerated(?bool $isModerated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isModerated) && !is_bool($isModerated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isModerated, true), gettype($isModerated)), __LINE__);
        }
        $this->IsModerated = $isModerated;
        
        return $this;
    }
    /**
     * Get InvalidRecipient value
     * @return bool|null
     */
    public function getInvalidRecipient(): ?bool
    {
        return $this->InvalidRecipient;
    }
    /**
     * Set InvalidRecipient value
     * @param bool $invalidRecipient
     * @return \StructType\EwsMailTips
     */
    public function setInvalidRecipient(?bool $invalidRecipient = null): self
    {
        // validation for constraint: boolean
        if (!is_null($invalidRecipient) && !is_bool($invalidRecipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invalidRecipient, true), gettype($invalidRecipient)), __LINE__);
        }
        $this->InvalidRecipient = $invalidRecipient;
        
        return $this;
    }
    /**
     * Get Scope value
     * @return int|null
     */
    public function getScope(): ?int
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param int $scope
     * @return \StructType\EwsMailTips
     */
    public function setScope(?int $scope = null): self
    {
        // validation for constraint: int
        if (!is_null($scope) && !(is_int($scope) || ctype_digit($scope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        
        return $this;
    }
}
