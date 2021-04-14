<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfGroupIdentifiersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfGroupIdentifiersType extends AbstractStructArrayBase
{
    /**
     * The GroupIdentifier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsSidAndAttributesType[]
     */
    protected array $GroupIdentifier = [];
    /**
     * Constructor method for NonEmptyArrayOfGroupIdentifiersType
     * @uses EwsNonEmptyArrayOfGroupIdentifiersType::setGroupIdentifier()
     * @param \StructType\EwsSidAndAttributesType[] $groupIdentifier
     */
    public function __construct(array $groupIdentifier = [])
    {
        $this
            ->setGroupIdentifier($groupIdentifier);
    }
    /**
     * Get GroupIdentifier value
     * @return \StructType\EwsSidAndAttributesType[]
     */
    public function getGroupIdentifier(): array
    {
        return $this->GroupIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupIdentifierForArrayConstraintsFromSetGroupIdentifier(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem instanceof \StructType\EwsSidAndAttributesType) {
                $invalidValues[] = is_object($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) ? get_class($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem), var_export($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupIdentifier property can only contain items of type \StructType\EwsSidAndAttributesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupIdentifier value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSidAndAttributesType[] $groupIdentifier
     * @return \ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
     */
    public function setGroupIdentifier(array $groupIdentifier = []): self
    {
        // validation for constraint: array
        if ('' !== ($groupIdentifierArrayErrorMessage = self::validateGroupIdentifierForArrayConstraintsFromSetGroupIdentifier($groupIdentifier))) {
            throw new InvalidArgumentException($groupIdentifierArrayErrorMessage, __LINE__);
        }
        $this->GroupIdentifier = $groupIdentifier;
        
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
     * @return \ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSidAndAttributesType) {
            throw new InvalidArgumentException(sprintf('The GroupIdentifier property can only contain items of type \StructType\EwsSidAndAttributesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GroupIdentifier
     */
    public function getAttributeName(): string
    {
        return 'GroupIdentifier';
    }
}
