<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneCallInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPhoneCallInformationType extends AbstractStructBase
{
    /**
     * The PhoneCallState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PhoneCallState;
    /**
     * The ConnectionFailureCause
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ConnectionFailureCause;
    /**
     * The SIPResponseText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SIPResponseText;
    /**
     * The SIPResponseCode
     * Meta informations extracted from the WSDL
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
     * @param string $phoneCallState
     * @return \Ews\StructType\EwsPhoneCallInformationType
     */
    public function setPhoneCallState($phoneCallState = null)
    {
        if (!\Ews\EnumType\EwsPhoneCallStateType::valueIsValid($phoneCallState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $phoneCallState, implode(', ', \Ews\EnumType\EwsPhoneCallStateType::getValidValues())), __LINE__);
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
     * @param string $connectionFailureCause
     * @return \Ews\StructType\EwsPhoneCallInformationType
     */
    public function setConnectionFailureCause($connectionFailureCause = null)
    {
        if (!\Ews\EnumType\EwsConnectionFailureCauseType::valueIsValid($connectionFailureCause)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $connectionFailureCause, implode(', ', \Ews\EnumType\EwsConnectionFailureCauseType::getValidValues())), __LINE__);
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
        $this->SIPResponseCode = $sIPResponseCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPhoneCallInformationType
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
