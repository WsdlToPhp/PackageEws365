<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDistributionGroupToImListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddDistributionGroupToImListType extends EwsBaseRequestType
{
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * Constructor method for AddDistributionGroupToImListType
     * @uses EwsAddDistributionGroupToImListType::setSmtpAddress()
     * @uses EwsAddDistributionGroupToImListType::setDisplayName()
     * @param string $smtpAddress
     * @param string $displayName
     */
    public function __construct(?string $smtpAddress = null, ?string $displayName = null)
    {
        $this
            ->setSmtpAddress($smtpAddress)
            ->setDisplayName($displayName);
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
     * @return \StructType\EwsAddDistributionGroupToImListType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($smtpAddress) && mb_strlen((string) $smtpAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
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
     * @return \StructType\EwsAddDistributionGroupToImListType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen((string) $displayName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
}
