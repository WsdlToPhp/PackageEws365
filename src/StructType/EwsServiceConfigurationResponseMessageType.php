<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceConfigurationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsServiceConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailTipsConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMailTipsServiceConfiguration
     */
    public $MailTipsConfiguration;
    /**
     * The UnifiedMessagingConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnifiedMessageServiceConfiguration
     */
    public $UnifiedMessagingConfiguration;
    /**
     * The ProtectionRulesConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsProtectionRulesServiceConfiguration
     */
    public $ProtectionRulesConfiguration;
    /**
     * The PolicyNudgeRulesConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPolicyNudgeRulesServiceConfiguration
     */
    public $PolicyNudgeRulesConfiguration;
    /**
     * Constructor method for ServiceConfigurationResponseMessageType
     * @uses EwsServiceConfigurationResponseMessageType::setMailTipsConfiguration()
     * @uses EwsServiceConfigurationResponseMessageType::setUnifiedMessagingConfiguration()
     * @uses EwsServiceConfigurationResponseMessageType::setProtectionRulesConfiguration()
     * @uses EwsServiceConfigurationResponseMessageType::setPolicyNudgeRulesConfiguration()
     * @param \Ews\StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration
     * @param \Ews\StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration
     * @param \Ews\StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration
     * @param \Ews\StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration
     */
    public function __construct(\Ews\StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration = null, \Ews\StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration = null, \Ews\StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration = null, \Ews\StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration = null)
    {
        $this
            ->setMailTipsConfiguration($mailTipsConfiguration)
            ->setUnifiedMessagingConfiguration($unifiedMessagingConfiguration)
            ->setProtectionRulesConfiguration($protectionRulesConfiguration)
            ->setPolicyNudgeRulesConfiguration($policyNudgeRulesConfiguration);
    }
    /**
     * Get MailTipsConfiguration value
     * @return \Ews\StructType\EwsMailTipsServiceConfiguration|null
     */
    public function getMailTipsConfiguration()
    {
        return $this->MailTipsConfiguration;
    }
    /**
     * Set MailTipsConfiguration value
     * @param \Ews\StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setMailTipsConfiguration(\Ews\StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration = null)
    {
        $this->MailTipsConfiguration = $mailTipsConfiguration;
        return $this;
    }
    /**
     * Get UnifiedMessagingConfiguration value
     * @return \Ews\StructType\EwsUnifiedMessageServiceConfiguration|null
     */
    public function getUnifiedMessagingConfiguration()
    {
        return $this->UnifiedMessagingConfiguration;
    }
    /**
     * Set UnifiedMessagingConfiguration value
     * @param \Ews\StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setUnifiedMessagingConfiguration(\Ews\StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration = null)
    {
        $this->UnifiedMessagingConfiguration = $unifiedMessagingConfiguration;
        return $this;
    }
    /**
     * Get ProtectionRulesConfiguration value
     * @return \Ews\StructType\EwsProtectionRulesServiceConfiguration|null
     */
    public function getProtectionRulesConfiguration()
    {
        return $this->ProtectionRulesConfiguration;
    }
    /**
     * Set ProtectionRulesConfiguration value
     * @param \Ews\StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setProtectionRulesConfiguration(\Ews\StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration = null)
    {
        $this->ProtectionRulesConfiguration = $protectionRulesConfiguration;
        return $this;
    }
    /**
     * Get PolicyNudgeRulesConfiguration value
     * @return \Ews\StructType\EwsPolicyNudgeRulesServiceConfiguration|null
     */
    public function getPolicyNudgeRulesConfiguration()
    {
        return $this->PolicyNudgeRulesConfiguration;
    }
    /**
     * Set PolicyNudgeRulesConfiguration value
     * @param \Ews\StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setPolicyNudgeRulesConfiguration(\Ews\StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration = null)
    {
        $this->PolicyNudgeRulesConfiguration = $policyNudgeRulesConfiguration;
        return $this;
    }
}
