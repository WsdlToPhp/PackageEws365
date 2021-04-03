<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsPeopleTokenType[]
     */
    protected array $PeopleToken = [];
    /**
     * Constructor method for NonEmptyArrayOfPeopleTokenType
     * @uses EwsNonEmptyArrayOfPeopleTokenType::setPeopleToken()
     * @param \StructType\EwsPeopleTokenType[] $peopleToken
     */
    public function __construct(array $peopleToken)
    {
        $this
            ->setPeopleToken($peopleToken);
    }
    /**
     * Get PeopleToken value
     * @return \StructType\EwsPeopleTokenType[]
     */
    public function getPeopleToken(): array
    {
        return $this->PeopleToken;
    }
    /**
     * This method is responsible for validating the values passed to the setPeopleToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeopleToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeopleTokenForArrayConstraintsFromSetPeopleToken(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfPeopleTokenTypePeopleTokenItem instanceof \StructType\EwsPeopleTokenType) {
                $invalidValues[] = is_object($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) ? get_class($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem), var_export($nonEmptyArrayOfPeopleTokenTypePeopleTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PeopleToken property can only contain items of type \StructType\EwsPeopleTokenType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PeopleToken value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPeopleTokenType[] $peopleToken
     * @return \ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function setPeopleToken(array $peopleToken): self
    {
        // validation for constraint: array
        if ('' !== ($peopleTokenArrayErrorMessage = self::validatePeopleTokenForArrayConstraintsFromSetPeopleToken($peopleToken))) {
            throw new InvalidArgumentException($peopleTokenArrayErrorMessage, __LINE__);
        }
        $this->PeopleToken = $peopleToken;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPeopleTokenType|null
     */
    public function current(): ?\StructType\EwsPeopleTokenType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPeopleTokenType|null
     */
    public function item($index): ?\StructType\EwsPeopleTokenType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPeopleTokenType|null
     */
    public function first(): ?\StructType\EwsPeopleTokenType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPeopleTokenType|null
     */
    public function last(): ?\StructType\EwsPeopleTokenType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPeopleTokenType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPeopleTokenType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPeopleTokenType $item
     * @return \ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function add(\StructType\EwsPeopleTokenType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PeopleToken
     */
    public function getAttributeName(): string
    {
        return 'PeopleToken';
    }
}
