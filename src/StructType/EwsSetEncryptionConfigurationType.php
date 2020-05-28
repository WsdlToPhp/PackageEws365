<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetEncryptionConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetEncryptionConfigurationType extends EwsBaseRequestType
{
    /**
     * The ImageBase64
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImageBase64;
    /**
     * The EmailText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailText;
    /**
     * The PortalText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PortalText;
    /**
     * The DisclaimerText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisclaimerText;
    /**
     * The OTPEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $OTPEnabled;
    /**
     * Constructor method for SetEncryptionConfigurationType
     * @uses EwsSetEncryptionConfigurationType::setImageBase64()
     * @uses EwsSetEncryptionConfigurationType::setEmailText()
     * @uses EwsSetEncryptionConfigurationType::setPortalText()
     * @uses EwsSetEncryptionConfigurationType::setDisclaimerText()
     * @uses EwsSetEncryptionConfigurationType::setOTPEnabled()
     * @param string $imageBase64
     * @param string $emailText
     * @param string $portalText
     * @param string $disclaimerText
     * @param bool $oTPEnabled
     */
    public function __construct($imageBase64 = null, $emailText = null, $portalText = null, $disclaimerText = null, $oTPEnabled = null)
    {
        $this
            ->setImageBase64($imageBase64)
            ->setEmailText($emailText)
            ->setPortalText($portalText)
            ->setDisclaimerText($disclaimerText)
            ->setOTPEnabled($oTPEnabled);
    }
    /**
     * Get ImageBase64 value
     * @return string|null
     */
    public function getImageBase64()
    {
        return $this->ImageBase64;
    }
    /**
     * Set ImageBase64 value
     * @param string $imageBase64
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
     */
    public function setImageBase64($imageBase64 = null)
    {
        // validation for constraint: string
        if (!is_null($imageBase64) && !is_string($imageBase64)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageBase64, true), gettype($imageBase64)), __LINE__);
        }
        $this->ImageBase64 = $imageBase64;
        return $this;
    }
    /**
     * Get EmailText value
     * @return string|null
     */
    public function getEmailText()
    {
        return $this->EmailText;
    }
    /**
     * Set EmailText value
     * @param string $emailText
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
     */
    public function setEmailText($emailText = null)
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailText, true), gettype($emailText)), __LINE__);
        }
        $this->EmailText = $emailText;
        return $this;
    }
    /**
     * Get PortalText value
     * @return string|null
     */
    public function getPortalText()
    {
        return $this->PortalText;
    }
    /**
     * Set PortalText value
     * @param string $portalText
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
     */
    public function setPortalText($portalText = null)
    {
        // validation for constraint: string
        if (!is_null($portalText) && !is_string($portalText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portalText, true), gettype($portalText)), __LINE__);
        }
        $this->PortalText = $portalText;
        return $this;
    }
    /**
     * Get DisclaimerText value
     * @return string|null
     */
    public function getDisclaimerText()
    {
        return $this->DisclaimerText;
    }
    /**
     * Set DisclaimerText value
     * @param string $disclaimerText
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
     */
    public function setDisclaimerText($disclaimerText = null)
    {
        // validation for constraint: string
        if (!is_null($disclaimerText) && !is_string($disclaimerText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disclaimerText, true), gettype($disclaimerText)), __LINE__);
        }
        $this->DisclaimerText = $disclaimerText;
        return $this;
    }
    /**
     * Get OTPEnabled value
     * @return bool|null
     */
    public function getOTPEnabled()
    {
        return $this->OTPEnabled;
    }
    /**
     * Set OTPEnabled value
     * @param bool $oTPEnabled
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
     */
    public function setOTPEnabled($oTPEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($oTPEnabled) && !is_bool($oTPEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oTPEnabled, true), gettype($oTPEnabled)), __LINE__);
        }
        $this->OTPEnabled = $oTPEnabled;
        return $this;
    }
}
