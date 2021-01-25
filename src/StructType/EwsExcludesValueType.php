<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Value;
    /**
     * Constructor method for ExcludesValueType
     * @uses EwsExcludesValueType::setValue()
     * @param string $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Ews\StructType\EwsExcludesValueType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: pattern(((0x|0X)[0-9A-Fa-f]*)|([0-9]*))
        if (!is_null($value) && !preg_match('/((0x|0X)[0-9A-Fa-f]*)|([0-9]*)/', $value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /((0x|0X)[0-9A-Fa-f]*)|([0-9]*)/', var_export($value, true)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
}
