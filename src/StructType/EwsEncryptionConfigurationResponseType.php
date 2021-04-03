<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageBase64 = null;
    /**
     * The EmailText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailText = null;
    /**
     * The PortalText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PortalText = null;
    /**
     * The DisclaimerText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisclaimerText = null;
    /**
     * The OTPEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OTPEnabled = null;
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
    public function __construct(?string $imageBase64 = null, ?string $emailText = null, ?string $portalText = null, ?string $disclaimerText = null, ?bool $oTPEnabled = null)
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
    public function getImageBase64(): ?string
    {
        return $this->ImageBase64;
    }
    /**
     * Set ImageBase64 value
     * @param string $imageBase64
     * @return \StructType\EwsEncryptionConfigurationResponseType
     */
    public function setImageBase64(?string $imageBase64 = null): self
    {
        // validation for constraint: string
        if (!is_null($imageBase64) && !is_string($imageBase64)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageBase64, true), gettype($imageBase64)), __LINE__);
        }
        $this->ImageBase64 = $imageBase64;
        
        return $this;
    }
    /**
     * Get EmailText value
     * @return string|null
     */
    public function getEmailText(): ?string
    {
        return $this->EmailText;
    }
    /**
     * Set EmailText value
     * @param string $emailText
     * @return \StructType\EwsEncryptionConfigurationResponseType
     */
    public function setEmailText(?string $emailText = null): self
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailText, true), gettype($emailText)), __LINE__);
        }
        $this->EmailText = $emailText;
        
        return $this;
    }
    /**
     * Get PortalText value
     * @return string|null
     */
    public function getPortalText(): ?string
    {
        return $this->PortalText;
    }
    /**
     * Set PortalText value
     * @param string $portalText
     * @return \StructType\EwsEncryptionConfigurationResponseType
     */
    public function setPortalText(?string $portalText = null): self
    {
        // validation for constraint: string
        if (!is_null($portalText) && !is_string($portalText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portalText, true), gettype($portalText)), __LINE__);
        }
        $this->PortalText = $portalText;
        
        return $this;
    }
    /**
     * Get DisclaimerText value
     * @return string|null
     */
    public function getDisclaimerText(): ?string
    {
        return $this->DisclaimerText;
    }
    /**
     * Set DisclaimerText value
     * @param string $disclaimerText
     * @return \StructType\EwsEncryptionConfigurationResponseType
     */
    public function setDisclaimerText(?string $disclaimerText = null): self
    {
        // validation for constraint: string
        if (!is_null($disclaimerText) && !is_string($disclaimerText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disclaimerText, true), gettype($disclaimerText)), __LINE__);
        }
        $this->DisclaimerText = $disclaimerText;
        
        return $this;
    }
    /**
     * Get OTPEnabled value
     * @return bool|null
     */
    public function getOTPEnabled(): ?bool
    {
        return $this->OTPEnabled;
    }
    /**
     * Set OTPEnabled value
     * @param bool $oTPEnabled
     * @return \StructType\EwsEncryptionConfigurationResponseType
     */
    public function setOTPEnabled(?bool $oTPEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oTPEnabled) && !is_bool($oTPEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oTPEnabled, true), gettype($oTPEnabled)), __LINE__);
        }
        $this->OTPEnabled = $oTPEnabled;
        
        return $this;
    }
}
