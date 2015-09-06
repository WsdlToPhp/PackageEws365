<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
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
     * Constructor method for StringAttributedValueType
     * @uses EwsStringAttributedValueType::setValue()
     * @uses EwsStringAttributedValueType::setAttributions()
     * @param string $value
     * @param \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct($value = null, \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Ews\StructType\EwsStringAttributedValueType
     */
    public function setValue($value = null)
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
     * @return \Ews\StructType\EwsStringAttributedValueType
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
     * @return \Ews\StructType\EwsStringAttributedValueType
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
