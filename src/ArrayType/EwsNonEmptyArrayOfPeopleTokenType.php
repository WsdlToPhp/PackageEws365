<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfPeopleTokenType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfPeopleTokenType extends AbstractStructArrayBase
{
    /**
     * The PeopleToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPeopleTokenType[]
     */
    public $PeopleToken;
    /**
     * Constructor method for NonEmptyArrayOfPeopleTokenType
     * @uses EwsNonEmptyArrayOfPeopleTokenType::setPeopleToken()
     * @param \Ews\StructType\EwsPeopleTokenType[] $peopleToken
     */
    public function __construct(array $peopleToken = array())
    {
        $this
            ->setPeopleToken($peopleToken);
    }
    /**
     * Get PeopleToken value
     * @return \Ews\StructType\EwsPeopleTokenType[]
     */
    public function getPeopleToken()
    {
        return $this->PeopleToken;
    }
    /**
     * Set PeopleToken value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPeopleTokenType[] $peopleToken
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function setPeopleToken(array $peopleToken = array())
    {
        foreach ($peopleToken as $nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfPeopleTokenTypePeopleTokenItem instanceof \Ews\StructType\EwsPeopleTokenType) {
                throw new \InvalidArgumentException(sprintf('The PeopleToken property can only contain items of \Ews\StructType\EwsPeopleTokenType, "%s" given', is_object($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) ? get_class($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) : gettype($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem)), __LINE__);
            }
        }
        $this->PeopleToken = $peopleToken;
        return $this;
    }
    /**
     * Add item to PeopleToken value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPeopleTokenType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function addToPeopleToken(\Ews\StructType\EwsPeopleTokenType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPeopleTokenType) {
            throw new \InvalidArgumentException(sprintf('The PeopleToken property can only contain items of \Ews\StructType\EwsPeopleTokenType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PeopleToken[] = $item;
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
