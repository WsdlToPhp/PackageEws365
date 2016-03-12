<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleSenderDepartmentsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleSenderDepartmentsType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - minLength: 1
     * @var string[]
     */
    public $Value;
    /**
     * Constructor method for ProtectionRuleSenderDepartmentsType
     * @uses EwsProtectionRuleSenderDepartmentsType::setValue()
     * @param string[] $value
     */
    public function __construct(array $value = array())
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string[]
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param string[] $value
     * @return \Ews\StructType\EwsProtectionRuleSenderDepartmentsType
     */
    public function setValue(array $value = array())
    {
        // validation for constraint: minLength
        if ((is_scalar(value) && strlen(value) < 1) || (is_array(value) && count(value) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        foreach ($value as $protectionRuleSenderDepartmentsTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($protectionRuleSenderDepartmentsTypeValueItem)) {
                throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($protectionRuleSenderDepartmentsTypeValueItem) ? get_class($protectionRuleSenderDepartmentsTypeValueItem) : gettype($protectionRuleSenderDepartmentsTypeValueItem)), __LINE__);
            }
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\StructType\EwsProtectionRuleSenderDepartmentsType
     */
    public function addToValue($item)
    {
        // validation for constraint: minLength
        if ((is_scalar(item) && strlen(item) < 1) || (is_array(item) && count(item) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Value[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProtectionRuleSenderDepartmentsType
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
