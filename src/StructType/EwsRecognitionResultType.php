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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
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
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($result) && mb_strlen($result) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($result)), __LINE__);
        }
        $this->Result = $result;
        return $this;
    }
}
