<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfImGroupType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfImGroupType extends AbstractStructArrayBase
{
    /**
     * The ImGroup
     * Meta information extracted from the WSDL
     * - choice: ImGroup
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsImGroupType|null
     */
    protected ?\StructType\EwsImGroupType $ImGroup = null;
    /**
     * Constructor method for ArrayOfImGroupType
     * @uses EwsArrayOfImGroupType::setImGroup()
     * @param \StructType\EwsImGroupType $imGroup
     */
    public function __construct(?\StructType\EwsImGroupType $imGroup = null)
    {
        $this
            ->setImGroup($imGroup);
    }
    /**
     * Get ImGroup value
     * @return \StructType\EwsImGroupType|null
     */
    public function getImGroup(): ?\StructType\EwsImGroupType
    {
        return isset($this->ImGroup) ? $this->ImGroup : null;
    }
    /**
     * This method is responsible for validating the value passed to the setImGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImGroup method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateImGroupForChoiceConstraintsFromSetImGroup($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ImGroup can\'t be set as the property %s is already set. Only one property must be set among these properties: ImGroup, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ImGroup value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsImGroupType $imGroup
     * @return \ArrayType\EwsArrayOfImGroupType
     */
    public function setImGroup(?\StructType\EwsImGroupType $imGroup = null): self
    {
        // validation for constraint: choice(ImGroup)
        if ('' !== ($imGroupChoiceErrorMessage = self::validateImGroupForChoiceConstraintsFromSetImGroup($imGroup))) {
            throw new InvalidArgumentException($imGroupChoiceErrorMessage, __LINE__);
        }
        if (is_null($imGroup) || (is_array($imGroup) && empty($imGroup))) {
            unset($this->ImGroup);
        } else {
            $this->ImGroup = $imGroup;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsImGroupType|null
     */
    public function current(): ?\StructType\EwsImGroupType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsImGroupType|null
     */
    public function item($index): ?\StructType\EwsImGroupType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsImGroupType|null
     */
    public function first(): ?\StructType\EwsImGroupType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsImGroupType|null
     */
    public function last(): ?\StructType\EwsImGroupType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsImGroupType|null
     */
    public function offsetGet($offset): ?\StructType\EwsImGroupType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsImGroupType $item
     * @return \ArrayType\EwsArrayOfImGroupType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsImGroupType) {
            throw new InvalidArgumentException(sprintf('The ImGroup property can only contain items of type \StructType\EwsImGroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ImGroup
     */
    public function getAttributeName(): string
    {
        return 'ImGroup';
    }
}
