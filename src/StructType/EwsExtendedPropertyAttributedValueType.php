<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPropertyAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsExtendedPropertyAttributedValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Represents an extended property instance (both its path identifier along with its associated value).
     * @var \Ews\StructType\EwsExtendedPropertyType
     */
    public $Value;
    /**
     * The Attributions
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
