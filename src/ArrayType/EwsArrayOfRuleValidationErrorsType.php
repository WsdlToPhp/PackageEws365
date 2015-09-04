<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleValidationErrorsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an array of rule validation errors
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfRuleValidationErrorsType extends AbstractStructArrayBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - documentation: Represents a single validation error on a particular rule property value, predicate property value or action property value
     * @var array
     */
    public $Error;
    /**
     * Constructor method for ArrayOfRuleValidationErrorsType
     * @uses EwsArrayOfRuleValidationErrorsType::setError()
     * @param array $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return array
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param array $error
     * @return \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function setError(array $error = array())
    {
        $this->Error = $error;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Error
     */
    public function getAttributeName()
    {
        return 'Error';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType
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
