<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMSubscriberCallAnsweringDataResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMSubscriberCallAnsweringDataResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IsOOF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsOOF;
    /**
     * The IsTranscriptionEnabledInMailboxConfig
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $IsTranscriptionEnabledInMailboxConfig;
    /**
     * The IsMailboxQuotaExceeded
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsMailboxQuotaExceeded;
    /**
     * The TaskTimedOut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $TaskTimedOut;
    /**
     * The Greeting
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Greeting;
    /**
     * The GreetingName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GreetingName;
    /**
     * Constructor method for GetUMSubscriberCallAnsweringDataResponseMessageType
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setIsOOF()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setIsTranscriptionEnabledInMailboxConfig()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setIsMailboxQuotaExceeded()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setTaskTimedOut()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setGreeting()
     * @uses EwsGetUMSubscriberCallAnsweringDataResponseMessageType::setGreetingName()
     * @param bool $isOOF
     * @param string $isTranscriptionEnabledInMailboxConfig
     * @param bool $isMailboxQuotaExceeded
     * @param bool $taskTimedOut
     * @param string $greeting
     * @param string $greetingName
     */
    public function __construct($isOOF = null, $isTranscriptionEnabledInMailboxConfig = null, $isMailboxQuotaExceeded = null, $taskTimedOut = null, $greeting = null, $greetingName = null)
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
     * @return bool
     */
    public function getIsOOF()
    {
        return $this->IsOOF;
    }
    /**
     * Set IsOOF value
     * @param bool $isOOF
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsOOF($isOOF = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOOF) && !is_bool($isOOF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOOF, true), gettype($isOOF)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $isTranscriptionEnabledInMailboxConfig
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsTranscriptionEnabledInMailboxConfig($isTranscriptionEnabledInMailboxConfig = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting::valueIsValid($isTranscriptionEnabledInMailboxConfig)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting', is_array($isTranscriptionEnabledInMailboxConfig) ? implode(', ', $isTranscriptionEnabledInMailboxConfig) : var_export($isTranscriptionEnabledInMailboxConfig, true), implode(', ', \Ews\EnumType\EwsUMMailboxTranscriptionEnabledSetting::getValidValues())), __LINE__);
        }
        $this->IsTranscriptionEnabledInMailboxConfig = $isTranscriptionEnabledInMailboxConfig;
        return $this;
    }
    /**
     * Get IsMailboxQuotaExceeded value
     * @return bool
     */
    public function getIsMailboxQuotaExceeded()
    {
        return $this->IsMailboxQuotaExceeded;
    }
    /**
     * Set IsMailboxQuotaExceeded value
     * @param bool $isMailboxQuotaExceeded
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsMailboxQuotaExceeded($isMailboxQuotaExceeded = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMailboxQuotaExceeded) && !is_bool($isMailboxQuotaExceeded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMailboxQuotaExceeded, true), gettype($isMailboxQuotaExceeded)), __LINE__);
        }
        $this->IsMailboxQuotaExceeded = $isMailboxQuotaExceeded;
        return $this;
    }
    /**
     * Get TaskTimedOut value
     * @return bool
     */
    public function getTaskTimedOut()
    {
        return $this->TaskTimedOut;
    }
    /**
     * Set TaskTimedOut value
     * @param bool $taskTimedOut
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setTaskTimedOut($taskTimedOut = null)
    {
        // validation for constraint: boolean
        if (!is_null($taskTimedOut) && !is_bool($taskTimedOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($taskTimedOut, true), gettype($taskTimedOut)), __LINE__);
        }
        $this->TaskTimedOut = $taskTimedOut;
        return $this;
    }
    /**
     * Get Greeting value
     * @return string|null
     */
    public function getGreeting()
    {
        return $this->Greeting;
    }
    /**
     * Set Greeting value
     * @param string $greeting
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setGreeting($greeting = null)
    {
        // validation for constraint: string
        if (!is_null($greeting) && !is_string($greeting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($greeting, true), gettype($greeting)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($greetingName) && !is_string($greetingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($greetingName, true), gettype($greetingName)), __LINE__);
        }
        $this->GreetingName = $greetingName;
        return $this;
    }
}
