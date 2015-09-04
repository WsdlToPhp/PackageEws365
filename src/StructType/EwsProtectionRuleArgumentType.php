<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleArgumentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsProtectionRuleArgumentType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - use: required
     * @var anonymous647
     */
    public $Value;
    /**
     * Constructor method for ProtectionRuleArgumentType
     * @uses EwsProtectionRuleArgumentType::setValue()
     * @param anonymous647 $value
     */
    public function __construct(anonymous647 $value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return anonymous647
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param anonymous647 $value
     * @return \Ews\StructType\EwsProtectionRuleArgumentType
     */
    public function setValue(anonymous647 $value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProtectionRuleArgumentType
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
