<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressAttributedValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsEmailAddressType
     */
    protected \StructType\EwsEmailAddressType $Value;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfValueAttributionsType
     */
    protected \ArrayType\EwsArrayOfValueAttributionsType $Attributions;
    /**
     * Constructor method for EmailAddressAttributedValueType
     * @uses EwsEmailAddressAttributedValueType::setValue()
     * @uses EwsEmailAddressAttributedValueType::setAttributions()
     * @param \StructType\EwsEmailAddressType $value
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\StructType\EwsEmailAddressType $value, \ArrayType\EwsArrayOfValueAttributionsType $attributions)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return \StructType\EwsEmailAddressType
     */
    public function getValue(): \StructType\EwsEmailAddressType
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\EwsEmailAddressType $value
     * @return \StructType\EwsEmailAddressAttributedValueType
     */
    public function setValue(\StructType\EwsEmailAddressType $value): self
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
     * @return \StructType\EwsEmailAddressAttributedValueType
     */
    public function setAttributions(\ArrayType\EwsArrayOfValueAttributionsType $attributions): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
}
