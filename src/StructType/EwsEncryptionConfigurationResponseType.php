<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptionConfigurationResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEncryptionConfigurationResponseType extends EwsResponseMessageType
{
    /**
     * The ImageBase64
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImageBase64;
    /**
     * The EmailText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailText;
    /**
     * The PortalText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PortalText;
    /**
     * The DisclaimerText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisclaimerText;
    /**
     * The OTPEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $OTPEnabled;
    /**
     * Constructor method for EncryptionConfigurationResponseType
     * @uses EwsEncryptionConfigurationResponseType::setImageBase64()
     * @uses EwsEncryptionConfigurationResponseType::setEmailText()
     * @uses EwsEncryptionConfigurationResponseType::setPortalText()
     * @uses EwsEncryptionConfigurationResponseType::setDisclaimerText()
     * @uses EwsEncryptionConfigurationResponseType::setOTPEnabled()
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
     * @return \Ews\StructType\EwsEncryptionConfigurationResponseType
     */
    public function setImageBase64($imageBase64 = null)
    {
        // validation for constraint: string
        if (!is_null($imageBase64) && !is_string($imageBase64)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageBase64)), __LINE__);
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
     * @return \Ews\StructType\EwsEncryptionConfigurationResponseType
     */
    public function setEmailText($emailText = null)
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailText)), __LINE__);
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
     * @return \Ews\StructType\EwsEncryptionConfigurationResponseType
     */
    public function setPortalText($portalText = null)
    {
        // validation for constraint: string
        if (!is_null($portalText) && !is_string($portalText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portalText)), __LINE__);
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
     * @return \Ews\StructType\EwsEncryptionConfigurationResponseType
     */
    public function setDisclaimerText($disclaimerText = null)
    {
        // validation for constraint: string
        if (!is_null($disclaimerText) && !is_string($disclaimerText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disclaimerText)), __LINE__);
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
     * @return \Ews\StructType\EwsEncryptionConfigurationResponseType
     */
    public function setOTPEnabled($oTPEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($oTPEnabled) && !is_bool($oTPEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($oTPEnabled)), __LINE__);
        }
        $this->OTPEnabled = $oTPEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEncryptionConfigurationResponseType
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
