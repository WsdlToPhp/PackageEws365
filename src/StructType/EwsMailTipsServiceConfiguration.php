<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailTipsServiceConfiguration StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMailTipsServiceConfiguration extends EwsServiceConfiguration
{
    /**
     * The MailTipsEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $MailTipsEnabled;
    /**
     * The MaxRecipientsPerGetMailTipsRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxRecipientsPerGetMailTipsRequest;
    /**
     * The MaxMessageSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxMessageSize;
    /**
     * The LargeAudienceThreshold
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LargeAudienceThreshold;
    /**
     * The ShowExternalRecipientCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $ShowExternalRecipientCount;
    /**
     * The InternalDomains
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSmtpDomainList
     */
    public $InternalDomains;
    /**
     * The PolicyTipsEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $PolicyTipsEnabled;
    /**
     * The LargeAudienceCap
     * Meta informations extracted from the WSDL
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
     * @param boolean $mailTipsEnabled
     * @param int $maxRecipientsPerGetMailTipsRequest
     * @param int $maxMessageSize
     * @param int $largeAudienceThreshold
     * @param boolean $showExternalRecipientCount
     * @param \Ews\StructType\EwsSmtpDomainList $internalDomains
     * @param boolean $policyTipsEnabled
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
     * @return boolean
     */
    public function getMailTipsEnabled()
    {
        return $this->MailTipsEnabled;
    }
    /**
     * Set MailTipsEnabled value
     * @param boolean $mailTipsEnabled
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setMailTipsEnabled($mailTipsEnabled = null)
    {
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
        $this->LargeAudienceThreshold = $largeAudienceThreshold;
        return $this;
    }
    /**
     * Get ShowExternalRecipientCount value
     * @return boolean
     */
    public function getShowExternalRecipientCount()
    {
        return $this->ShowExternalRecipientCount;
    }
    /**
     * Set ShowExternalRecipientCount value
     * @param boolean $showExternalRecipientCount
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setShowExternalRecipientCount($showExternalRecipientCount = null)
    {
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
     * @return boolean
     */
    public function getPolicyTipsEnabled()
    {
        return $this->PolicyTipsEnabled;
    }
    /**
     * Set PolicyTipsEnabled value
     * @param boolean $policyTipsEnabled
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public function setPolicyTipsEnabled($policyTipsEnabled = null)
    {
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
        $this->LargeAudienceCap = $largeAudienceCap;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration
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