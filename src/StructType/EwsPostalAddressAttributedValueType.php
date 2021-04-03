<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostalAddressAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPostalAddressAttributedValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsPersonaPostalAddressType
     */
    protected \StructType\EwsPersonaPostalAddressType $Value;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfValueAttributionsType
     */
    protected \ArrayType\EwsArrayOfValueAttributionsType $Attributions;
    /**
     * Constructor method for PostalAddressAttributedValueType
     * @uses EwsPostalAddressAttributedValueType::setValue()
     * @uses EwsPostalAddressAttributedValueType::setAttributions()
     * @param \StructType\EwsPersonaPostalAddressType $value
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\StructType\EwsPersonaPostalAddressType $value, \ArrayType\EwsArrayOfValueAttributionsType $attributions)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function getValue(): \StructType\EwsPersonaPostalAddressType
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\EwsPersonaPostalAddressType $value
     * @return \StructType\EwsPostalAddressAttributedValueType
     */
    public function setValue(\StructType\EwsPersonaPostalAddressType $value): self
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
     * @return \StructType\EwsPostalAddressAttributedValueType
     */
    public function setAttributions(\ArrayType\EwsArrayOfValueAttributionsType $attributions): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
}
