<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailTipsServiceConfiguration StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailTipsServiceConfiguration extends EwsServiceConfiguration
{
    /**
     * The MailTipsEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $MailTipsEnabled;
    /**
     * The MaxRecipientsPerGetMailTipsRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $MaxRecipientsPerGetMailTipsRequest;
    /**
     * The MaxMessageSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $MaxMessageSize;
    /**
     * The LargeAudienceThreshold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $LargeAudienceThreshold;
    /**
     * The ShowExternalRecipientCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $ShowExternalRecipientCount;
    /**
     * The InternalDomains
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsSmtpDomainList
     */
    protected \StructType\EwsSmtpDomainList $InternalDomains;
    /**
     * The PolicyTipsEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $PolicyTipsEnabled;
    /**
     * The LargeAudienceCap
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $LargeAudienceCap;
    /**
     * Constructor method for MailTipsServiceConfiguration
     * @uses EwsMailTipsServiceConfiguration::setMailTipsEnabled()
     * @uses EwsMailTipsServiceConfiguration::setMaxRecipientsPerGetMailTipsRequest()
     * @uses EwsMailTipsServiceConfiguration::setMaxMessageSize()
     * @uses EwsMailTipsServiceConfiguration::setLargeAudienceThreshold()
     * @uses EwsMailTipsServiceConfiguration::setShowExternalRecipientCount()
     * @uses EwsMailTipsServiceConfiguration::setInternalDomains()
     * @uses EwsMailTipsServiceConfiguration::setPolicyTipsEnabled()
     * @uses EwsMailTipsServiceConfiguration::setLargeAudienceCap()
     * @param bool $mailTipsEnabled
     * @param int $maxRecipientsPerGetMailTipsRequest
     * @param int $maxMessageSize
     * @param int $largeAudienceThreshold
     * @param bool $showExternalRecipientCount
     * @param \StructType\EwsSmtpDomainList $internalDomains
     * @param bool $policyTipsEnabled
     * @param int $largeAudienceCap
     */
    public function __construct(bool $mailTipsEnabled, int $maxRecipientsPerGetMailTipsRequest, int $maxMessageSize, int $largeAudienceThreshold, bool $showExternalRecipientCount, \StructType\EwsSmtpDomainList $internalDomains, bool $policyTipsEnabled, int $largeAudienceCap)
    {
        $this
            ->setMailTipsEnabled($mailTipsEnabled)
            ->setMaxRecipientsPerGetMailTipsRequest($maxRecipientsPerGetMailTipsRequest)
            ->setMaxMessageSize($maxMessageSize)
            ->setLargeAudienceThreshold($largeAudienceThreshold)
            ->setShowExternalRecipientCount($showExternalRecipientCount)
            ->setInternalDomains($internalDomains)
            ->setPolicyTipsEnabled($policyTipsEnabled)
            ->setLargeAudienceCap($largeAudienceCap);
    }
    /**
     * Get MailTipsEnabled value
     * @return bool
     */
    public function getMailTipsEnabled(): bool
    {
        return $this->MailTipsEnabled;
    }
    /**
     * Set MailTipsEnabled value
     * @param bool $mailTipsEnabled
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setMailTipsEnabled(bool $mailTipsEnabled): self
    {
        // validation for constraint: boolean
        if (!is_null($mailTipsEnabled) && !is_bool($mailTipsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailTipsEnabled, true), gettype($mailTipsEnabled)), __LINE__);
        }
        $this->MailTipsEnabled = $mailTipsEnabled;
        
        return $this;
    }
    /**
     * Get MaxRecipientsPerGetMailTipsRequest value
     * @return int
     */
    public function getMaxRecipientsPerGetMailTipsRequest(): int
    {
        return $this->MaxRecipientsPerGetMailTipsRequest;
    }
    /**
     * Set MaxRecipientsPerGetMailTipsRequest value
     * @param int $maxRecipientsPerGetMailTipsRequest
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setMaxRecipientsPerGetMailTipsRequest(int $maxRecipientsPerGetMailTipsRequest): self
    {
        // validation for constraint: int
        if (!is_null($maxRecipientsPerGetMailTipsRequest) && !(is_int($maxRecipientsPerGetMailTipsRequest) || ctype_digit($maxRecipientsPerGetMailTipsRequest))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxRecipientsPerGetMailTipsRequest, true), gettype($maxRecipientsPerGetMailTipsRequest)), __LINE__);
        }
        $this->MaxRecipientsPerGetMailTipsRequest = $maxRecipientsPerGetMailTipsRequest;
        
        return $this;
    }
    /**
     * Get MaxMessageSize value
     * @return int
     */
    public function getMaxMessageSize(): int
    {
        return $this->MaxMessageSize;
    }
    /**
     * Set MaxMessageSize value
     * @param int $maxMessageSize
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setMaxMessageSize(int $maxMessageSize): self
    {
        // validation for constraint: int
        if (!is_null($maxMessageSize) && !(is_int($maxMessageSize) || ctype_digit($maxMessageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxMessageSize, true), gettype($maxMessageSize)), __LINE__);
        }
        $this->MaxMessageSize = $maxMessageSize;
        
        return $this;
    }
    /**
     * Get LargeAudienceThreshold value
     * @return int
     */
    public function getLargeAudienceThreshold(): int
    {
        return $this->LargeAudienceThreshold;
    }
    /**
     * Set LargeAudienceThreshold value
     * @param int $largeAudienceThreshold
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setLargeAudienceThreshold(int $largeAudienceThreshold): self
    {
        // validation for constraint: int
        if (!is_null($largeAudienceThreshold) && !(is_int($largeAudienceThreshold) || ctype_digit($largeAudienceThreshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeAudienceThreshold, true), gettype($largeAudienceThreshold)), __LINE__);
        }
        $this->LargeAudienceThreshold = $largeAudienceThreshold;
        
        return $this;
    }
    /**
     * Get ShowExternalRecipientCount value
     * @return bool
     */
    public function getShowExternalRecipientCount(): bool
    {
        return $this->ShowExternalRecipientCount;
    }
    /**
     * Set ShowExternalRecipientCount value
     * @param bool $showExternalRecipientCount
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setShowExternalRecipientCount(bool $showExternalRecipientCount): self
    {
        // validation for constraint: boolean
        if (!is_null($showExternalRecipientCount) && !is_bool($showExternalRecipientCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showExternalRecipientCount, true), gettype($showExternalRecipientCount)), __LINE__);
        }
        $this->ShowExternalRecipientCount = $showExternalRecipientCount;
        
        return $this;
    }
    /**
     * Get InternalDomains value
     * @return \StructType\EwsSmtpDomainList
     */
    public function getInternalDomains(): \StructType\EwsSmtpDomainList
    {
        return $this->InternalDomains;
    }
    /**
     * Set InternalDomains value
     * @param \StructType\EwsSmtpDomainList $internalDomains
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setInternalDomains(\StructType\EwsSmtpDomainList $internalDomains): self
    {
        $this->InternalDomains = $internalDomains;
        
        return $this;
    }
    /**
     * Get PolicyTipsEnabled value
     * @return bool
     */
    public function getPolicyTipsEnabled(): bool
    {
        return $this->PolicyTipsEnabled;
    }
    /**
     * Set PolicyTipsEnabled value
     * @param bool $policyTipsEnabled
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setPolicyTipsEnabled(bool $policyTipsEnabled): self
    {
        // validation for constraint: boolean
        if (!is_null($policyTipsEnabled) && !is_bool($policyTipsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($policyTipsEnabled, true), gettype($policyTipsEnabled)), __LINE__);
        }
        $this->PolicyTipsEnabled = $policyTipsEnabled;
        
        return $this;
    }
    /**
     * Get LargeAudienceCap value
     * @return int
     */
    public function getLargeAudienceCap(): int
    {
        return $this->LargeAudienceCap;
    }
    /**
     * Set LargeAudienceCap value
     * @param int $largeAudienceCap
     * @return \StructType\EwsMailTipsServiceConfiguration
     */
    public function setLargeAudienceCap(int $largeAudienceCap): self
    {
        // validation for constraint: int
        if (!is_null($largeAudienceCap) && !(is_int($largeAudienceCap) || ctype_digit($largeAudienceCap))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeAudienceCap, true), gettype($largeAudienceCap)), __LINE__);
        }
        $this->LargeAudienceCap = $largeAudienceCap;
        
        return $this;
    }
}
