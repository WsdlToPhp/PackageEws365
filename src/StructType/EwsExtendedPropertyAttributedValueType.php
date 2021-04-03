<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPropertyAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExtendedPropertyAttributedValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsExtendedPropertyType
     */
    protected \StructType\EwsExtendedPropertyType $Value;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfValueAttributionsType
     */
    protected \ArrayType\EwsArrayOfValueAttributionsType $Attributions;
    /**
     * Constructor method for ExtendedPropertyAttributedValueType
     * @uses EwsExtendedPropertyAttributedValueType::setValue()
     * @uses EwsExtendedPropertyAttributedValueType::setAttributions()
     * @param \StructType\EwsExtendedPropertyType $value
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\StructType\EwsExtendedPropertyType $value, \ArrayType\EwsArrayOfValueAttributionsType $attributions)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return \StructType\EwsExtendedPropertyType
     */
    public function getValue(): \StructType\EwsExtendedPropertyType
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\EwsExtendedPropertyType $value
     * @return \StructType\EwsExtendedPropertyAttributedValueType
     */
    public function setValue(\StructType\EwsExtendedPropertyType $value): self
    {
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
     * @return \StructType\EwsExtendedPropertyAttributedValueType
     */
    public function setAttributions(\ArrayType\EwsArrayOfValueAttributionsType $attributions): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
}
