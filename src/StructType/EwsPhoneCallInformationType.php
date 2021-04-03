<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneCallInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneCallInformationType extends AbstractStructBase
{
    /**
     * The PhoneCallState
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $PhoneCallState;
    /**
     * The ConnectionFailureCause
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ConnectionFailureCause;
    /**
     * The SIPResponseText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SIPResponseText = null;
    /**
     * The SIPResponseCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SIPResponseCode = null;
    /**
     * Constructor method for PhoneCallInformationType
     * @uses EwsPhoneCallInformationType::setPhoneCallState()
     * @uses EwsPhoneCallInformationType::setConnectionFailureCause()
     * @uses EwsPhoneCallInformationType::setSIPResponseText()
     * @uses EwsPhoneCallInformationType::setSIPResponseCode()
     * @param string $phoneCallState
     * @param string $connectionFailureCause
     * @param string $sIPResponseText
     * @param int $sIPResponseCode
     */
    public function __construct(string $phoneCallState, string $connectionFailureCause, ?string $sIPResponseText = null, ?int $sIPResponseCode = null)
    {
        $this
            ->setPhoneCallState($phoneCallState)
            ->setConnectionFailureCause($connectionFailureCause)
            ->setSIPResponseText($sIPResponseText)
            ->setSIPResponseCode($sIPResponseCode);
    }
    /**
     * Get PhoneCallState value
     * @return string
     */
    public function getPhoneCallState(): string
    {
        return $this->PhoneCallState;
    }
    /**
     * Set PhoneCallState value
     * @uses \EnumType\EwsPhoneCallStateType::valueIsValid()
     * @uses \EnumType\EwsPhoneCallStateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $phoneCallState
     * @return \StructType\EwsPhoneCallInformationType
     */
    public function setPhoneCallState(string $phoneCallState): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPhoneCallStateType::valueIsValid($phoneCallState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPhoneCallStateType', is_array($phoneCallState) ? implode(', ', $phoneCallState) : var_export($phoneCallState, true), implode(', ', \EnumType\EwsPhoneCallStateType::getValidValues())), __LINE__);
        }
        $this->PhoneCallState = $phoneCallState;
        
        return $this;
    }
    /**
     * Get ConnectionFailureCause value
     * @return string
     */
    public function getConnectionFailureCause(): string
    {
        return $this->ConnectionFailureCause;
    }
    /**
     * Set ConnectionFailureCause value
     * @uses \EnumType\EwsConnectionFailureCauseType::valueIsValid()
     * @uses \EnumType\EwsConnectionFailureCauseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $connectionFailureCause
     * @return \StructType\EwsPhoneCallInformationType
     */
    public function setConnectionFailureCause(string $connectionFailureCause): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConnectionFailureCauseType::valueIsValid($connectionFailureCause)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConnectionFailureCauseType', is_array($connectionFailureCause) ? implode(', ', $connectionFailureCause) : var_export($connectionFailureCause, true), implode(', ', \EnumType\EwsConnectionFailureCauseType::getValidValues())), __LINE__);
        }
        $this->ConnectionFailureCause = $connectionFailureCause;
        
        return $this;
    }
    /**
     * Get SIPResponseText value
     * @return string|null
     */
    public function getSIPResponseText(): ?string
    {
        return $this->SIPResponseText;
    }
    /**
     * Set SIPResponseText value
     * @param string $sIPResponseText
     * @return \StructType\EwsPhoneCallInformationType
     */
    public function setSIPResponseText(?string $sIPResponseText = null): self
    {
        // validation for constraint: string
        if (!is_null($sIPResponseText) && !is_string($sIPResponseText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sIPResponseText, true), gettype($sIPResponseText)), __LINE__);
        }
        $this->SIPResponseText = $sIPResponseText;
        
        return $this;
    }
    /**
     * Get SIPResponseCode value
     * @return int|null
     */
    public function getSIPResponseCode(): ?int
    {
        return $this->SIPResponseCode;
    }
    /**
     * Set SIPResponseCode value
     * @param int $sIPResponseCode
     * @return \StructType\EwsPhoneCallInformationType
     */
    public function setSIPResponseCode(?int $sIPResponseCode = null): self
    {
        // validation for constraint: int
        if (!is_null($sIPResponseCode) && !(is_int($sIPResponseCode) || ctype_digit($sIPResponseCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sIPResponseCode, true), gettype($sIPResponseCode)), __LINE__);
        }
        $this->SIPResponseCode = $sIPResponseCode;
        
        return $this;
    }
}
