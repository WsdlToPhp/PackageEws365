<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumberAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneNumberAttributedValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsPersonaPhoneNumberType
     */
    protected \StructType\EwsPersonaPhoneNumberType $Value;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfValueAttributionsType
     */
    protected \ArrayType\EwsArrayOfValueAttributionsType $Attributions;
    /**
     * Constructor method for PhoneNumberAttributedValueType
     * @uses EwsPhoneNumberAttributedValueType::setValue()
     * @uses EwsPhoneNumberAttributedValueType::setAttributions()
     * @param \StructType\EwsPersonaPhoneNumberType $value
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\StructType\EwsPersonaPhoneNumberType $value, \ArrayType\EwsArrayOfValueAttributionsType $attributions)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return \StructType\EwsPersonaPhoneNumberType
     */
    public function getValue(): \StructType\EwsPersonaPhoneNumberType
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\EwsPersonaPhoneNumberType $value
     * @return \StructType\EwsPhoneNumberAttributedValueType
     */
    public function setValue(\StructType\EwsPersonaPhoneNumberType $value): self
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
     * @return \StructType\EwsPhoneNumberAttributedValueType
     */
    public function setAttributions(\ArrayType\EwsArrayOfValueAttributionsType $attributions): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
}
