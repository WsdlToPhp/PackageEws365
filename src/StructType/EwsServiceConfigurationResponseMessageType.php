<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsMailTipsServiceConfiguration|null
     */
    protected ?\StructType\EwsMailTipsServiceConfiguration $MailTipsConfiguration = null;
    /**
     * The UnifiedMessagingConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedMessageServiceConfiguration|null
     */
    protected ?\StructType\EwsUnifiedMessageServiceConfiguration $UnifiedMessagingConfiguration = null;
    /**
     * The ProtectionRulesConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsProtectionRulesServiceConfiguration|null
     */
    protected ?\StructType\EwsProtectionRulesServiceConfiguration $ProtectionRulesConfiguration = null;
    /**
     * The PolicyNudgeRulesConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPolicyNudgeRulesServiceConfiguration|null
     */
    protected ?\StructType\EwsPolicyNudgeRulesServiceConfiguration $PolicyNudgeRulesConfiguration = null;
    /**
     * Constructor method for ServiceConfigurationResponseMessageType
     * @uses EwsServiceConfigurationResponseMessageType::setMailTipsConfiguration()
     * @uses EwsServiceConfigurationResponseMessageType::setUnifiedMessagingConfiguration()
     * @uses EwsServiceConfigurationResponseMessageType::setProtectionRulesConfiguration()
     * @uses EwsServiceConfigurationResponseMessageType::setPolicyNudgeRulesConfiguration()
     * @param \StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration
     * @param \StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration
     * @param \StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration
     * @param \StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration
     */
    public function __construct(?\StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration = null, ?\StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration = null, ?\StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration = null, ?\StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration = null)
    {
        $this
            ->setMailTipsConfiguration($mailTipsConfiguration)
            ->setUnifiedMessagingConfiguration($unifiedMessagingConfiguration)
            ->setProtectionRulesConfiguration($protectionRulesConfiguration)
            ->setPolicyNudgeRulesConfiguration($policyNudgeRulesConfiguration);
    }
    /**
     * Get MailTipsConfiguration value
     * @return \StructType\EwsMailTipsServiceConfiguration|null
     */
    public function getMailTipsConfiguration(): ?\StructType\EwsMailTipsServiceConfiguration
    {
        return $this->MailTipsConfiguration;
    }
    /**
     * Set MailTipsConfiguration value
     * @param \StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration
     * @return \StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setMailTipsConfiguration(?\StructType\EwsMailTipsServiceConfiguration $mailTipsConfiguration = null): self
    {
        $this->MailTipsConfiguration = $mailTipsConfiguration;
        
        return $this;
    }
    /**
     * Get UnifiedMessagingConfiguration value
     * @return \StructType\EwsUnifiedMessageServiceConfiguration|null
     */
    public function getUnifiedMessagingConfiguration(): ?\StructType\EwsUnifiedMessageServiceConfiguration
    {
        return $this->UnifiedMessagingConfiguration;
    }
    /**
     * Set UnifiedMessagingConfiguration value
     * @param \StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration
     * @return \StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setUnifiedMessagingConfiguration(?\StructType\EwsUnifiedMessageServiceConfiguration $unifiedMessagingConfiguration = null): self
    {
        $this->UnifiedMessagingConfiguration = $unifiedMessagingConfiguration;
        
        return $this;
    }
    /**
     * Get ProtectionRulesConfiguration value
     * @return \StructType\EwsProtectionRulesServiceConfiguration|null
     */
    public function getProtectionRulesConfiguration(): ?\StructType\EwsProtectionRulesServiceConfiguration
    {
        return $this->ProtectionRulesConfiguration;
    }
    /**
     * Set ProtectionRulesConfiguration value
     * @param \StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration
     * @return \StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setProtectionRulesConfiguration(?\StructType\EwsProtectionRulesServiceConfiguration $protectionRulesConfiguration = null): self
    {
        $this->ProtectionRulesConfiguration = $protectionRulesConfiguration;
        
        return $this;
    }
    /**
     * Get PolicyNudgeRulesConfiguration value
     * @return \StructType\EwsPolicyNudgeRulesServiceConfiguration|null
     */
    public function getPolicyNudgeRulesConfiguration(): ?\StructType\EwsPolicyNudgeRulesServiceConfiguration
    {
        return $this->PolicyNudgeRulesConfiguration;
    }
    /**
     * Set PolicyNudgeRulesConfiguration value
     * @param \StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration
     * @return \StructType\EwsServiceConfigurationResponseMessageType
     */
    public function setPolicyNudgeRulesConfiguration(?\StructType\EwsPolicyNudgeRulesServiceConfiguration $policyNudgeRulesConfiguration = null): self
    {
        $this->PolicyNudgeRulesConfiguration = $policyNudgeRulesConfiguration;
        
        return $this;
    }
}
