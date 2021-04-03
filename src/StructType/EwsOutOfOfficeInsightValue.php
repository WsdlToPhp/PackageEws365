<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OutOfOfficeInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOutOfOfficeInsightValue extends EwsInsightValue
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * Constructor method for OutOfOfficeInsightValue
     * @uses EwsOutOfOfficeInsightValue::setStartTime()
     * @uses EwsOutOfOfficeInsightValue::setEndTime()
     * @uses EwsOutOfOfficeInsightValue::setMessage()
     * @uses EwsOutOfOfficeInsightValue::setCulture()
     * @param string $startTime
     * @param string $endTime
     * @param string $message
     * @param string $culture
     */
    public function __construct(?string $startTime = null, ?string $endTime = null, ?string $message = null, ?string $culture = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setMessage($message)
            ->setCulture($culture);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsOutOfOfficeInsightValue
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EwsOutOfOfficeInsightValue
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\EwsOutOfOfficeInsightValue
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get Culture value
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \StructType\EwsOutOfOfficeInsightValue
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->Culture = $culture;
        
        return $this;
    }
}
