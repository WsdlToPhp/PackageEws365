<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $PhoneCallState;
    /**
     * The ConnectionFailureCause
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ConnectionFailureCause;
    /**
     * The SIPResponseText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SIPResponseText;
    /**
     * The SIPResponseCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SIPResponseCode;
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
    public function __construct($phoneCallState = null, $connectionFailureCause = null, $sIPResponseText = null, $sIPResponseCode = null)
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
    public function getPhoneCallState()
    {
        return $this->PhoneCallState;
    }
    /**
     * Set PhoneCallState value
     * @uses \Ews\EnumType\EwsPhoneCallStateType::valueIsValid()
     * @uses \Ews\EnumType\EwsPhoneCallStateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $phoneCallState
     * @return \Ews\StructType\EwsPhoneCallInformationType
     */
    public function setPhoneCallState($phoneCallState = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPhoneCallStateType::valueIsValid($phoneCallState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPhoneCallStateType', is_array($phoneCallState) ? implode(', ', $phoneCallState) : var_export($phoneCallState, true), implode(', ', \Ews\EnumType\EwsPhoneCallStateType::getValidValues())), __LINE__);
        }
        $this->PhoneCallState = $phoneCallState;
        return $this;
    }
    /**
     * Get ConnectionFailureCause value
     * @return string
     */
    public function getConnectionFailureCause()
    {
        return $this->ConnectionFailureCause;
    }
    /**
     * Set ConnectionFailureCause value
     * @uses \Ews\EnumType\EwsConnectionFailureCauseType::valueIsValid()
     * @uses \Ews\EnumType\EwsConnectionFailureCauseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $connectionFailureCause
     * @return \Ews\StructType\EwsPhoneCallInformationType
     */
    public function setConnectionFailureCause($connectionFailureCause = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConnectionFailureCauseType::valueIsValid($connectionFailureCause)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsConnectionFailureCauseType', is_array($connectionFailureCause) ? implode(', ', $connectionFailureCause) : var_export($connectionFailureCause, true), implode(', ', \Ews\EnumType\EwsConnectionFailureCauseType::getValidValues())), __LINE__);
        }
        $this->ConnectionFailureCause = $connectionFailureCause;
        return $this;
    }
    /**
     * Get SIPResponseText value
     * @return string|null
     */
    public function getSIPResponseText()
    {
        return $this->SIPResponseText;
    }
    /**
     * Set SIPResponseText value
     * @param string $sIPResponseText
     * @return \Ews\StructType\EwsPhoneCallInformationType
     */
    public function setSIPResponseText($sIPResponseText = null)
    {
        // validation for constraint: string
        if (!is_null($sIPResponseText) && !is_string($sIPResponseText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sIPResponseText, true), gettype($sIPResponseText)), __LINE__);
        }
        $this->SIPResponseText = $sIPResponseText;
        return $this;
    }
    /**
     * Get SIPResponseCode value
     * @return int|null
     */
    public function getSIPResponseCode()
    {
        return $this->SIPResponseCode;
    }
    /**
     * Set SIPResponseCode value
     * @param int $sIPResponseCode
     * @return \Ews\StructType\EwsPhoneCallInformationType
     */
    public function setSIPResponseCode($sIPResponseCode = null)
    {
        // validation for constraint: int
        if (!is_null($sIPResponseCode) && !(is_int($sIPResponseCode) || ctype_digit($sIPResponseCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sIPResponseCode, true), gettype($sIPResponseCode)), __LINE__);
        }
        $this->SIPResponseCode = $sIPResponseCode;
        return $this;
    }
}
