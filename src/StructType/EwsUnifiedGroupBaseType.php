<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupBaseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents base unified group
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupBaseType extends AbstractStructBase
{
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * The LegacyDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LegacyDN = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The AccessType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccessType = null;
    /**
     * Constructor method for UnifiedGroupBaseType
     * @uses EwsUnifiedGroupBaseType::setSmtpAddress()
     * @uses EwsUnifiedGroupBaseType::setLegacyDN()
     * @uses EwsUnifiedGroupBaseType::setDisplayName()
     * @uses EwsUnifiedGroupBaseType::setAccessType()
     * @param string $smtpAddress
     * @param string $legacyDN
     * @param string $displayName
     * @param string $accessType
     */
    public function __construct(?string $smtpAddress = null, ?string $legacyDN = null, ?string $displayName = null, ?string $accessType = null)
    {
        $this
            ->setSmtpAddress($smtpAddress)
            ->setLegacyDN($legacyDN)
            ->setDisplayName($displayName)
            ->setAccessType($accessType);
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsUnifiedGroupBaseType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
    /**
     * Get LegacyDN value
     * @return string|null
     */
    public function getLegacyDN(): ?string
    {
        return $this->LegacyDN;
    }
    /**
     * Set LegacyDN value
     * @param string $legacyDN
     * @return \StructType\EwsUnifiedGroupBaseType
     */
    public function setLegacyDN(?string $legacyDN = null): self
    {
        // validation for constraint: string
        if (!is_null($legacyDN) && !is_string($legacyDN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legacyDN, true), gettype($legacyDN)), __LINE__);
        }
        $this->LegacyDN = $legacyDN;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsUnifiedGroupBaseType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get AccessType value
     * @return string|null
     */
    public function getAccessType(): ?string
    {
        return $this->AccessType;
    }
    /**
     * Set AccessType value
     * @uses \EnumType\EwsUnifiedGroupAccessType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupAccessType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accessType
     * @return \StructType\EwsUnifiedGroupBaseType
     */
    public function setAccessType(?string $accessType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupAccessType::valueIsValid($accessType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupAccessType', is_array($accessType) ? implode(', ', $accessType) : var_export($accessType, true), implode(', ', \EnumType\EwsUnifiedGroupAccessType::getValidValues())), __LINE__);
        }
        $this->AccessType = $accessType;
        
        return $this;
    }
}
