<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $MailTipsEnabled;
    /**
     * The MaxRecipientsPerGetMailTipsRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxRecipientsPerGetMailTipsRequest;
    /**
     * The MaxMessageSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxMessageSize;
    /**
     * The LargeAudienceThreshold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LargeAudienceThreshold;
    /**
     * The ShowExternalRecipientCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ShowExternalRecipientCount;
    /**
     * The InternalDomains
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSmtpDomainList
     */
    public $InternalDomains;
    /**
     * The PolicyTipsEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $PolicyTipsEnabled;
    /**
     * The LargeAudienceCap
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LargeAudienceCap;
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
     * @param \Ews\StructType\EwsSmtpDomainList $internalDomains
     * @param bool $policyTipsEnabled
     * @param int $largeAudienceCap
     */
    public function __construct($mailTipsEnabled = null, $maxRecipientsPerGetMailTipsRequest = null, $maxMessageSize = null, $largeAudienceThreshold = null, $showExternalRecipientCount = null, \Ews\StructType\EwsSmtpDomainList $internalDomains = null, $policyTipsEnabled = null, $largeAudienceCap = null)
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
    public function getMailTipsEnabled()
    {
        return $this->MailTipsEnabled;
    }
    /**
     * Set MailTipsEnabled value
     * @param bool $mailTipsEnabled
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setMailTipsEnabled($mailTipsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailTipsEnabled) && !is_bool($mailTipsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailTipsEnabled, true), gettype($mailTipsEnabled)), __LINE__);
        }
        $this->MailTipsEnabled = $mailTipsEnabled;
        return $this;
    }
    /**
     * Get MaxRecipientsPerGetMailTipsRequest value
     * @return int
     */
    public function getMaxRecipientsPerGetMailTipsRequest()
    {
        return $this->MaxRecipientsPerGetMailTipsRequest;
    }
    /**
     * Set MaxRecipientsPerGetMailTipsRequest value
     * @param int $maxRecipientsPerGetMailTipsRequest
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setMaxRecipientsPerGetMailTipsRequest($maxRecipientsPerGetMailTipsRequest = null)
    {
        // validation for constraint: int
        if (!is_null($maxRecipientsPerGetMailTipsRequest) && !(is_int($maxRecipientsPerGetMailTipsRequest) || ctype_digit($maxRecipientsPerGetMailTipsRequest))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxRecipientsPerGetMailTipsRequest, true), gettype($maxRecipientsPerGetMailTipsRequest)), __LINE__);
        }
        $this->MaxRecipientsPerGetMailTipsRequest = $maxRecipientsPerGetMailTipsRequest;
        return $this;
    }
    /**
     * Get MaxMessageSize value
     * @return int
     */
    public function getMaxMessageSize()
    {
        return $this->MaxMessageSize;
    }
    /**
     * Set MaxMessageSize value
     * @param int $maxMessageSize
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
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
     * Get LargeAudienceThreshold value
     * @return int
     */
    public function getLargeAudienceThreshold()
    {
        return $this->LargeAudienceThreshold;
    }
    /**
     * Set LargeAudienceThreshold value
     * @param int $largeAudienceThreshold
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setLargeAudienceThreshold($largeAudienceThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($largeAudienceThreshold) && !(is_int($largeAudienceThreshold) || ctype_digit($largeAudienceThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeAudienceThreshold, true), gettype($largeAudienceThreshold)), __LINE__);
        }
        $this->LargeAudienceThreshold = $largeAudienceThreshold;
        return $this;
    }
    /**
     * Get ShowExternalRecipientCount value
     * @return bool
     */
    public function getShowExternalRecipientCount()
    {
        return $this->ShowExternalRecipientCount;
    }
    /**
     * Set ShowExternalRecipientCount value
     * @param bool $showExternalRecipientCount
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setShowExternalRecipientCount($showExternalRecipientCount = null)
    {
        // validation for constraint: boolean
        if (!is_null($showExternalRecipientCount) && !is_bool($showExternalRecipientCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showExternalRecipientCount, true), gettype($showExternalRecipientCount)), __LINE__);
        }
        $this->ShowExternalRecipientCount = $showExternalRecipientCount;
        return $this;
    }
    /**
     * Get InternalDomains value
     * @return \Ews\StructType\EwsSmtpDomainList
     */
    public function getInternalDomains()
    {
        return $this->InternalDomains;
    }
    /**
     * Set InternalDomains value
     * @param \Ews\StructType\EwsSmtpDomainList $internalDomains
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setInternalDomains(\Ews\StructType\EwsSmtpDomainList $internalDomains = null)
    {
        $this->InternalDomains = $internalDomains;
        return $this;
    }
    /**
     * Get PolicyTipsEnabled value
     * @return bool
     */
    public function getPolicyTipsEnabled()
    {
        return $this->PolicyTipsEnabled;
    }
    /**
     * Set PolicyTipsEnabled value
     * @param bool $policyTipsEnabled
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setPolicyTipsEnabled($policyTipsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($policyTipsEnabled) && !is_bool($policyTipsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($policyTipsEnabled, true), gettype($policyTipsEnabled)), __LINE__);
        }
        $this->PolicyTipsEnabled = $policyTipsEnabled;
        return $this;
    }
    /**
     * Get LargeAudienceCap value
     * @return int
     */
    public function getLargeAudienceCap()
    {
        return $this->LargeAudienceCap;
    }
    /**
     * Set LargeAudienceCap value
     * @param int $largeAudienceCap
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setLargeAudienceCap($largeAudienceCap = null)
    {
        // validation for constraint: int
        if (!is_null($largeAudienceCap) && !(is_int($largeAudienceCap) || ctype_digit($largeAudienceCap))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeAudienceCap, true), gettype($largeAudienceCap)), __LINE__);
        }
        $this->LargeAudienceCap = $largeAudienceCap;
        return $this;
    }
}
