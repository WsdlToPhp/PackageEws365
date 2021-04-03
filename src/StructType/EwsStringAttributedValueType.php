<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StringAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStringAttributedValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Value;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfValueAttributionsType
     */
    protected \ArrayType\EwsArrayOfValueAttributionsType $Attributions;
    /**
     * Constructor method for StringAttributedValueType
     * @uses EwsStringAttributedValueType::setValue()
     * @uses EwsStringAttributedValueType::setAttributions()
     * @param string $value
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(string $value, \ArrayType\EwsArrayOfValueAttributionsType $attributions)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
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
     * @return \StructType\EwsStringAttributedValueType
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get Attributions value
     * @return \ArrayType\EwsArrayOfValueAttributionsType
     */
    public function getAttributions(): \ArrayType\EwsArrayOfValueAttributionsType
    {
        return $this->Attributions;
    }
    /**
     * Set Attributions value
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     * @return \StructType\EwsStringAttributedValueType
     */
    public function setAttributions(\ArrayType\EwsArrayOfValueAttributionsType $attributions): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
}
