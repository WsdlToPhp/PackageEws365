<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailAddressAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailAddressAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The EmailAddressAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $EmailAddressAttributedValue;
    /**
     * Constructor method for ArrayOfEmailAddressAttributedValuesType
     * @uses
     * EwsArrayOfEmailAddressAttributedValuesType::setEmailAddressAttributedValue()
     * @param array $emailAddressAttributedValue
     */
    public function __construct(array $emailAddressAttributedValue = array())
    {
        $this
            ->setEmailAddressAttributedValue($emailAddressAttributedValue);
    }
    /**
     * Get EmailAddressAttributedValue value
     * @return array
     */
    public function getEmailAddressAttributedValue()
    {
        return $this->EmailAddressAttributedValue;
    }
    /**
     * Set EmailAddressAttributedValue value
     * @param array $emailAddressAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public function setEmailAddressAttributedValue(array $emailAddressAttributedValue = array())
    {
        $this->EmailAddressAttributedValue = $emailAddressAttributedValue;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailAddressAttributedValue
     */
    public function getAttributeName()
    {
        return 'EmailAddressAttributedValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
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
