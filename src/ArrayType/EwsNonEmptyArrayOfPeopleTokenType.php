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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setPeopleToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeopleToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeopleTokenForArrayConstraintsFromSetPeopleToken(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfPeopleTokenTypePeopleTokenItem instanceof \Ews\StructType\EwsPeopleTokenType) {
                $invalidValues[] = is_object($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) ? get_class($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem), var_export($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PeopleToken property can only contain items of type \Ews\StructType\EwsPeopleTokenType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PeopleToken value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPeopleTokenType[] $peopleToken
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function setPeopleToken(array $peopleToken = array())
    {
        // validation for constraint: array
        if ('' !== ($peopleTokenArrayErrorMessage = self::validatePeopleTokenForArrayConstraintsFromSetPeopleToken($peopleToken))) {
            throw new \InvalidArgumentException($peopleTokenArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PeopleToken property can only contain items of type \Ews\StructType\EwsPeopleTokenType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
