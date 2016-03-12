<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Culture
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Culture;
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
    public function __construct($startTime = null, $endTime = null, $message = null, $culture = null)
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
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsOutOfOfficeInsightValue
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Ews\StructType\EwsOutOfOfficeInsightValue
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Ews\StructType\EwsOutOfOfficeInsightValue
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Culture value
     * @return string|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \Ews\StructType\EwsOutOfOfficeInsightValue
     */
    public function setCulture($culture = null)
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($culture)), __LINE__);
        }
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOutOfOfficeInsightValue
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
