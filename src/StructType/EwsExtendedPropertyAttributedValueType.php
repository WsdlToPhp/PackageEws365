<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsExtendedPropertyType
     */
    public $Value;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfValueAttributionsType
     */
    public $Attributions;
    /**
     * Constructor method for ExtendedPropertyAttributedValueType
     * @uses EwsExtendedPropertyAttributedValueType::setValue()
     * @uses EwsExtendedPropertyAttributedValueType::setAttributions()
     * @param \Ews\StructType\EwsExtendedPropertyType $value
     * @param \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\Ews\StructType\EwsExtendedPropertyType $value = null, \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return \Ews\StructType\EwsExtendedPropertyType
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \Ews\StructType\EwsExtendedPropertyType $value
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType
     */
    public function setValue(\Ews\StructType\EwsExtendedPropertyType $value = null)
    {
        $this->Value = $value;
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
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType
     */
    public function setAttributions(\Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this->Attributions = $attributions;
        return $this;
    }
}
