<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleRecipientIsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleRecipientIsType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $Value;
    /**
     * Constructor method for ProtectionRuleRecipientIsType
     * @uses EwsProtectionRuleRecipientIsType::setValue()
     * @param string $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
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
     * @return \Ews\StructType\EwsProtectionRuleRecipientIsType
     */
    public function setValue($value = null)
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
     * @return \Ews\StructType\EwsProtectionRuleRecipientIsType
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
