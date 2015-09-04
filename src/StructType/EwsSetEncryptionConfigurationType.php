<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetEncryptionConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSetEncryptionConfigurationType extends EwsBaseRequestType
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
     * @var boolean
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
     * @param boolean $oTPEnabled
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
        $this->DisclaimerText = $disclaimerText;
        return $this;
    }
    /**
     * Get OTPEnabled value
     * @return boolean|null
     */
    public function getOTPEnabled()
    {
        return $this->OTPEnabled;
    }
    /**
     * Set OTPEnabled value
     * @param boolean $oTPEnabled
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
     */
    public function setOTPEnabled($oTPEnabled = null)
    {
        $this->OTPEnabled = $oTPEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetEncryptionConfigurationType
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
