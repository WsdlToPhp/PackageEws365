<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMSubscriberCallAnsweringDataResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUMSubscriberCallAnsweringDataResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IsOOF
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsOOF;
    /**
     * The IsTranscriptionEnabledInMailboxConfig
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $IsTranscriptionEnabledInMailboxConfig;
    /**
     * The IsMailboxQuotaExceeded
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsMailboxQuotaExceeded;
    /**
     * The TaskTimedOut
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $TaskTimedOut;
    /**
     * The Greeting
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Greeting;
    /**
     * The GreetingName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GreetingName;
    /**
     * Constructor method for GetUMSubscriberCallAnsweringDataResponseMessageType
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setIsOOF()
     * @uses
     * EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setIsTranscriptionEnable
     * dInMailboxConfig()
     * @uses
     * EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setIsMailboxQuotaExceede
     * d()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setTaskTimedOut()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setGreeting()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setGreetingName()
     * @param boolean $isOOF
     * @param string $isTranscriptionEnabledInMailboxConfig
     * @param boolean $isMailboxQuotaExceeded
     * @param boolean $taskTimedOut
     * @param base64Binary $greeting
     * @param string $greetingName
     */
    public function __construct($isOOF = null, $isTranscriptionEnabledInMailboxConfig = null, $isMailboxQuotaExceeded = null, $taskTimedOut = null, base64Binary $greeting = null, $greetingName = null)
    {
        $this
            ->setIsOOF($isOOF)
            ->setIsTranscriptionEnabledInMailboxConfig($isTranscriptionEnabledInMailboxConfig)
            ->setIsMailboxQuotaExceeded($isMailboxQuotaExceeded)
            ->setTaskTimedOut($taskTimedOut)
            ->setGreeting($greeting)
            ->setGreetingName($greetingName);
    }
    /**
     * Get IsOOF value
     * @return boolean
     */
    public function getIsOOF()
    {
        return $this->IsOOF;
    }
    /**
     * Set IsOOF value
     * @param boolean $isOOF
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsOOF($isOOF = null)
    {
        $this->IsOOF = $isOOF;
        return $this;
    }
    /**
     * Get IsTranscriptionEnabledInMailboxConfig value
     * @return string
     */
    public function getIsTranscriptionEnabledInMailboxConfig()
    {
        return $this->IsTranscriptionEnabledInMailboxConfig;
    }
    /**
     * Set IsTranscriptionEnabledInMailboxConfig value
     * @uses \Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting::valueIsValid()
     * @uses \Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting::getValidValues()
     * @param string $isTranscriptionEnabledInMailboxConfig
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsTranscriptionEnabledInMailboxConfig($isTranscriptionEnabledInMailboxConfig = null)
    {
        if (!\Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting::valueIsValid($isTranscriptionEnabledInMailboxConfig)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $isTranscriptionEnabledInMailboxConfig, implode(', ', \Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting::getValidValues())), __LINE__);
        }
        $this->IsTranscriptionEnabledInMailboxConfig = $isTranscriptionEnabledInMailboxConfig;
        return $this;
    }
    /**
     * Get IsMailboxQuotaExceeded value
     * @return boolean
     */
    public function getIsMailboxQuotaExceeded()
    {
        return $this->IsMailboxQuotaExceeded;
    }
    /**
     * Set IsMailboxQuotaExceeded value
     * @param boolean $isMailboxQuotaExceeded
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsMailboxQuotaExceeded($isMailboxQuotaExceeded = null)
    {
        $this->IsMailboxQuotaExceeded = $isMailboxQuotaExceeded;
        return $this;
    }
    /**
     * Get TaskTimedOut value
     * @return boolean
     */
    public function getTaskTimedOut()
    {
        return $this->TaskTimedOut;
    }
    /**
     * Set TaskTimedOut value
     * @param boolean $taskTimedOut
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setTaskTimedOut($taskTimedOut = null)
    {
        $this->TaskTimedOut = $taskTimedOut;
        return $this;
    }
    /**
     * Get Greeting value
     * @return base64Binary|null
     */
    public function getGreeting()
    {
        return $this->Greeting;
    }
    /**
     * Set Greeting value
     * @param base64Binary $greeting
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setGreeting(base64Binary $greeting = null)
    {
        $this->Greeting = $greeting;
        return $this;
    }
    /**
     * Get GreetingName value
     * @return string|null
     */
    public function getGreetingName()
    {
        return $this->GreetingName;
    }
    /**
     * Set GreetingName value
     * @param string $greetingName
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setGreetingName($greetingName = null)
    {
        $this->GreetingName = $greetingName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
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