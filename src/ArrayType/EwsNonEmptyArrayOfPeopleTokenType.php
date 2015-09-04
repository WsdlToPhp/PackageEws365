<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfPeopleTokenType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfPeopleTokenType extends AbstractStructArrayBase
{
    /**
     * The PeopleToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $PeopleToken;
    /**
     * Constructor method for NonEmptyArrayOfPeopleTokenType
     * @uses EwsNonEmptyArrayOfPeopleTokenType::setPeopleToken()
     * @param array $peopleToken
     */
    public function __construct(array $peopleToken = array())
    {
        $this
            ->setPeopleToken($peopleToken);
    }
    /**
     * Get PeopleToken value
     * @return array
     */
    public function getPeopleToken()
    {
        return $this->PeopleToken;
    }
    /**
     * Set PeopleToken value
     * @param array $peopleToken
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function setPeopleToken(array $peopleToken = array())
    {
        $this->PeopleToken = $peopleToken;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PeopleToken
     */
    public function getAttributeName()
    {
        return 'PeopleToken';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
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
