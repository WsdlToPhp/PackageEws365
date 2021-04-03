<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StringArrayAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStringArrayAttributedValueType extends AbstractStructBase
{
    /**
     * The Values
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfStringValueType
     */
    protected \ArrayType\EwsArrayOfStringValueType $Values;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfValueAttributionsType
     */
    protected \ArrayType\EwsArrayOfValueAttributionsType $Attributions;
    /**
     * Constructor method for StringArrayAttributedValueType
     * @uses EwsStringArrayAttributedValueType::setValues()
     * @uses EwsStringArrayAttributedValueType::setAttributions()
     * @param \ArrayType\EwsArrayOfStringValueType $values
     * @param \ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\ArrayType\EwsArrayOfStringValueType $values, \ArrayType\EwsArrayOfValueAttributionsType $attributions)
    {
        $this
            ->setValues($values)
            ->setAttributions($attributions);
    }
    /**
     * Get Values value
     * @return \ArrayType\EwsArrayOfStringValueType
     */
    public function getValues(): \ArrayType\EwsArrayOfStringValueType
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \ArrayType\EwsArrayOfStringValueType $values
     * @return \StructType\EwsStringArrayAttributedValueType
     */
    public function setValues(\ArrayType\EwsArrayOfStringValueType $values): self
    {
        $this->Values = $values;
        
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
     * @return \StructType\EwsStringArrayAttributedValueType
     */
    public function setAttributions(\ArrayType\EwsArrayOfValueAttributionsType $attributions): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
}
