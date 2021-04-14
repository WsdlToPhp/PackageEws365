<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfRestrictedGroupIdentifiersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfRestrictedGroupIdentifiersType extends AbstractStructArrayBase
{
    /**
     * The RestrictedGroupIdentifier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsSidAndAttributesType[]
     */
    protected array $RestrictedGroupIdentifier = [];
    /**
     * Constructor method for NonEmptyArrayOfRestrictedGroupIdentifiersType
     * @uses EwsNonEmptyArrayOfRestrictedGroupIdentifiersType::setRestrictedGroupIdentifier()
     * @param \StructType\EwsSidAndAttributesType[] $restrictedGroupIdentifier
     */
    public function __construct(array $restrictedGroupIdentifier = [])
    {
        $this
            ->setRestrictedGroupIdentifier($restrictedGroupIdentifier);
    }
    /**
     * Get RestrictedGroupIdentifier value
     * @return \StructType\EwsSidAndAttributesType[]
     */
    public function getRestrictedGroupIdentifier(): array
    {
        return $this->RestrictedGroupIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setRestrictedGroupIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestrictedGroupIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictedGroupIdentifierForArrayConstraintsFromSetRestrictedGroupIdentifier(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem instanceof \StructType\EwsSidAndAttributesType) {
                $invalidValues[] = is_object($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) ? get_class($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem), var_export($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RestrictedGroupIdentifier property can only contain items of type \StructType\EwsSidAndAttributesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RestrictedGroupIdentifier value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSidAndAttributesType[] $restrictedGroupIdentifier
     * @return \ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public function setRestrictedGroupIdentifier(array $restrictedGroupIdentifier = []): self
    {
        // validation for constraint: array
        if ('' !== ($restrictedGroupIdentifierArrayErrorMessage = self::validateRestrictedGroupIdentifierForArrayConstraintsFromSetRestrictedGroupIdentifier($restrictedGroupIdentifier))) {
            throw new InvalidArgumentException($restrictedGroupIdentifierArrayErrorMessage, __LINE__);
        }
        $this->RestrictedGroupIdentifier = $restrictedGroupIdentifier;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSidAndAttributesType|null
     */
    public function current(): ?\StructType\EwsSidAndAttributesType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSidAndAttributesType|null
     */
    public function item($index): ?\StructType\EwsSidAndAttributesType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSidAndAttributesType|null
     */
    public function first(): ?\StructType\EwsSidAndAttributesType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSidAndAttributesType|null
     */
    public function last(): ?\StructType\EwsSidAndAttributesType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSidAndAttributesType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSidAndAttributesType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSidAndAttributesType $item
     * @return \ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSidAndAttributesType) {
            throw new InvalidArgumentException(sprintf('The RestrictedGroupIdentifier property can only contain items of type \StructType\EwsSidAndAttributesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RestrictedGroupIdentifier
     */
    public function getAttributeName(): string
    {
        return 'RestrictedGroupIdentifier';
    }
}
