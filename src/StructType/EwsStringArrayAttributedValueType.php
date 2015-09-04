<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StringArrayAttributedValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsStringArrayAttributedValueType extends AbstractStructBase
{
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfStringValueType
     */
    public $Values;
    /**
     * The Attributions
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsStringArrayAttributedValueType
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
