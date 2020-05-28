<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfStringValueType
     */
    public $Values;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfValueAttributionsType
     */
    public $Attributions;
    /**
     * Constructor method for StringArrayAttributedValueType
     * @uses EwsStringArrayAttributedValueType::setValues()
     * @uses EwsStringArrayAttributedValueType::setAttributions()
     * @param \Ews\ArrayType\EwsArrayOfStringValueType $values
     * @param \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringValueType $values = null, \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this
            ->setValues($values)
            ->setAttributions($attributions);
    }
    /**
     * Get Values value
     * @return \Ews\ArrayType\EwsArrayOfStringValueType
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Ews\ArrayType\EwsArrayOfStringValueType $values
     * @return \Ews\StructType\EwsStringArrayAttributedValueType
     */
    public function setValues(\Ews\ArrayType\EwsArrayOfStringValueType $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Attributions value
     * @return \Ews\ArrayType\EwsArrayOfValueAttributionsType
     */
    public function getAttributions()
    {
        return $this->Attributions;
    }
    /**
     * Set Attributions value
     * @param \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions
     * @return \Ews\StructType\EwsStringArrayAttributedValueType
     */
    public function setAttributions(\Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this->Attributions = $attributions;
        return $this;
    }
}
