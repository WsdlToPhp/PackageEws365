<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsPersonaPhoneNumberType
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
     * Constructor method for PhoneNumberAttributedValueType
     * @uses EwsPhoneNumberAttributedValueType::setValue()
     * @uses EwsPhoneNumberAttributedValueType::setAttributions()
     * @param \Ews\StructType\EwsPersonaPhoneNumberType $value
     * @param \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions
     */
    public function __construct(\Ews\StructType\EwsPersonaPhoneNumberType $value = null, \Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this
            ->setValue($value)
            ->setAttributions($attributions);
    }
    /**
     * Get Value value
     * @return \Ews\StructType\EwsPersonaPhoneNumberType
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \Ews\StructType\EwsPersonaPhoneNumberType $value
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType
     */
    public function setValue(\Ews\StructType\EwsPersonaPhoneNumberType $value = null)
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
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType
     */
    public function setAttributions(\Ews\ArrayType\EwsArrayOfValueAttributionsType $attributions = null)
    {
        $this->Attributions = $attributions;
        return $this;
    }
}
