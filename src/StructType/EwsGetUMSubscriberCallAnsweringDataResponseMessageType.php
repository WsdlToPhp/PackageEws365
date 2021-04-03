<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected bool $IsOOF;
    /**
     * The IsTranscriptionEnabledInMailboxConfig
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $IsTranscriptionEnabledInMailboxConfig;
    /**
     * The IsMailboxQuotaExceeded
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsMailboxQuotaExceeded;
    /**
     * The TaskTimedOut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $TaskTimedOut;
    /**
     * The Greeting
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Greeting = null;
    /**
     * The GreetingName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GreetingName = null;
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
    public function __construct(bool $isOOF, string $isTranscriptionEnabledInMailboxConfig, bool $isMailboxQuotaExceeded, bool $taskTimedOut, ?string $greeting = null, ?string $greetingName = null)
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
    public function getIsOOF(): bool
    {
        return $this->IsOOF;
    }
    /**
     * Set IsOOF value
     * @param bool $isOOF
     * @return \StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsOOF(bool $isOOF): self
    {
        // validation for constraint: boolean
        if (!is_null($isOOF) && !is_bool($isOOF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOOF, true), gettype($isOOF)), __LINE__);
        }
        $this->IsOOF = $isOOF;
        
        return $this;
    }
    /**
     * Get IsTranscriptionEnabledInMailboxConfig value
     * @return string
     */
    public function getIsTranscriptionEnabledInMailboxConfig(): string
    {
        return $this->IsTranscriptionEnabledInMailboxConfig;
    }
    /**
     * Set IsTranscriptionEnabledInMailboxConfig value
     * @uses \EnumType\EwsUMMailboxTranscriptionEnabledSetting::valueIsValid()
     * @uses \EnumType\EwsUMMailboxTranscriptionEnabledSetting::getValidValues()
     * @throws InvalidArgumentException
     * @param string $isTranscriptionEnabledInMailboxConfig
     * @return \StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsTranscriptionEnabledInMailboxConfig(string $isTranscriptionEnabledInMailboxConfig): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUMMailboxTranscriptionEnabledSetting::valueIsValid($isTranscriptionEnabledInMailboxConfig)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUMMailboxTranscriptionEnabledSetting', is_array($isTranscriptionEnabledInMailboxConfig) ? implode(', ', $isTranscriptionEnabledInMailboxConfig) : var_export($isTranscriptionEnabledInMailboxConfig, true), implode(', ', \EnumType\EwsUMMailboxTranscriptionEnabledSetting::getValidValues())), __LINE__);
        }
        $this->IsTranscriptionEnabledInMailboxConfig = $isTranscriptionEnabledInMailboxConfig;
        
        return $this;
    }
    /**
     * Get IsMailboxQuotaExceeded value
     * @return bool
     */
    public function getIsMailboxQuotaExceeded(): bool
    {
        return $this->IsMailboxQuotaExceeded;
    }
    /**
     * Set IsMailboxQuotaExceeded value
     * @param bool $isMailboxQuotaExceeded
     * @return \StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setIsMailboxQuotaExceeded(bool $isMailboxQuotaExceeded): self
    {
        // validation for constraint: boolean
        if (!is_null($isMailboxQuotaExceeded) && !is_bool($isMailboxQuotaExceeded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMailboxQuotaExceeded, true), gettype($isMailboxQuotaExceeded)), __LINE__);
        }
        $this->IsMailboxQuotaExceeded = $isMailboxQuotaExceeded;
        
        return $this;
    }
    /**
     * Get TaskTimedOut value
     * @return bool
     */
    public function getTaskTimedOut(): bool
    {
        return $this->TaskTimedOut;
    }
    /**
     * Set TaskTimedOut value
     * @param bool $taskTimedOut
     * @return \StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setTaskTimedOut(bool $taskTimedOut): self
    {
        // validation for constraint: boolean
        if (!is_null($taskTimedOut) && !is_bool($taskTimedOut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($taskTimedOut, true), gettype($taskTimedOut)), __LINE__);
        }
        $this->TaskTimedOut = $taskTimedOut;
        
        return $this;
    }
    /**
     * Get Greeting value
     * @return string|null
     */
    public function getGreeting(): ?string
    {
        return $this->Greeting;
    }
    /**
     * Set Greeting value
     * @param string $greeting
     * @return \StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setGreeting(?string $greeting = null): self
    {
        // validation for constraint: string
        if (!is_null($greeting) && !is_string($greeting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($greeting, true), gettype($greeting)), __LINE__);
        }
        $this->Greeting = $greeting;
        
        return $this;
    }
    /**
     * Get GreetingName value
     * @return string|null
     */
    public function getGreetingName(): ?string
    {
        return $this->GreetingName;
    }
    /**
     * Set GreetingName value
     * @param string $greetingName
     * @return \StructType\EwsGetUMSubscriberCallAnsweringDataResponseMessageType
     */
    public function setGreetingName(?string $greetingName = null): self
    {
        // validation for constraint: string
        if (!is_null($greetingName) && !is_string($greetingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($greetingName, true), gettype($greetingName)), __LINE__);
        }
        $this->GreetingName = $greetingName;
        
        return $this;
    }
}
