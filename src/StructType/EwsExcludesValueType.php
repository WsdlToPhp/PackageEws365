<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcludesValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExcludesValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: ((0x|0X)[0-9A-Fa-f]*)|([0-9]*)
     * - use: required
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for ExcludesValueType
     * @uses EwsExcludesValueType::setValue()
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \StructType\EwsExcludesValueType
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: pattern(((0x|0X)[0-9A-Fa-f]*)|([0-9]*))
        if (!is_null($value) && !preg_match('/((0x|0X)[0-9A-Fa-f]*)|([0-9]*)/', $value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /((0x|0X)[0-9A-Fa-f]*)|([0-9]*)/', var_export($value, true)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
