<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecognitionResultType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecognitionResultType extends AbstractStructBase
{
    /**
     * The Result
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $Result;
    /**
     * Constructor method for RecognitionResultType
     * @uses EwsRecognitionResultType::setResult()
     * @param string $result
     */
    public function __construct($result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get Result value
     * @return string
     */
    public function getResult()
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @param string $result
     * @return \Ews\StructType\EwsRecognitionResultType
     */
    public function setResult($result = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($result) && strlen($result) < 1) || (is_array($result) && count($result) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($result)), __LINE__);
        }
        $this->Result = $result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecognitionResultType
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
