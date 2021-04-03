<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfTimeZoneIdType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfTimeZoneIdType extends AbstractStructArrayBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $Id = [];
    /**
     * Constructor method for NonEmptyArrayOfTimeZoneIdType
     * @uses EwsNonEmptyArrayOfTimeZoneIdType::setId()
     * @param string[] $id
     */
    public function __construct(array $id = [])
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return string[]
     */
    public function getId(): array
    {
        return $this->Id;
    }
    /**
     * This method is responsible for validating the values passed to the setId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdForArrayConstraintsFromSetId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfTimeZoneIdTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfTimeZoneIdTypeIdItem)) {
                $invalidValues[] = is_object($nonEmptyArrayOfTimeZoneIdTypeIdItem) ? get_class($nonEmptyArrayOfTimeZoneIdTypeIdItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfTimeZoneIdTypeIdItem), var_export($nonEmptyArrayOfTimeZoneIdTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Id property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Id value
     * @throws InvalidArgumentException
     * @param string[] $id
     * @return \ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
     */
    public function setId(array $id = []): self
    {
        // validation for constraint: array
        if ('' !== ($idArrayErrorMessage = self::validateIdForArrayConstraintsFromSetId($id))) {
            throw new InvalidArgumentException($idArrayErrorMessage, __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Id
     */
    public function getAttributeName(): string
    {
        return 'Id';
    }
}
