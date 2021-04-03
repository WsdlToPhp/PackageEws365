<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Result;
    /**
     * Constructor method for RecognitionResultType
     * @uses EwsRecognitionResultType::setResult()
     * @param string $result
     */
    public function __construct(string $result)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get Result value
     * @return string
     */
    public function getResult(): string
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @param string $result
     * @return \StructType\EwsRecognitionResultType
     */
    public function setResult(string $result): self
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($result) && mb_strlen((string) $result) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $result)), __LINE__);
        }
        $this->Result = $result;
        
        return $this;
    }
}
