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
