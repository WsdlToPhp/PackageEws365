<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsSidAndAttributesType[]
     */
    public $RestrictedGroupIdentifier;
    /**
     * Constructor method for NonEmptyArrayOfRestrictedGroupIdentifiersType
     * @uses EwsNonEmptyArrayOfRestrictedGroupIdentifiersType::setRestrictedGroupIdentifier()
     * @param \Ews\StructType\EwsSidAndAttributesType[] $restrictedGroupIdentifier
     */
    public function __construct(array $restrictedGroupIdentifier = array())
    {
        $this
            ->setRestrictedGroupIdentifier($restrictedGroupIdentifier);
    }
    /**
     * Get RestrictedGroupIdentifier value
     * @return \Ews\StructType\EwsSidAndAttributesType[]|null
     */
    public function getRestrictedGroupIdentifier()
    {
        return $this->RestrictedGroupIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setRestrictedGroupIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestrictedGroupIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictedGroupIdentifierForArrayConstraintsFromSetRestrictedGroupIdentifier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem instanceof \Ews\StructType\EwsSidAndAttributesType) {
                $invalidValues[] = is_object($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) ? get_class($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem), var_export($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RestrictedGroupIdentifier property can only contain items of type \Ews\StructType\EwsSidAndAttributesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RestrictedGroupIdentifier value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSidAndAttributesType[] $restrictedGroupIdentifier
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public function setRestrictedGroupIdentifier(array $restrictedGroupIdentifier = array())
    {
        // validation for constraint: array
        if ('' !== ($restrictedGroupIdentifierArrayErrorMessage = self::validateRestrictedGroupIdentifierForArrayConstraintsFromSetRestrictedGroupIdentifier($restrictedGroupIdentifier))) {
            throw new \InvalidArgumentException($restrictedGroupIdentifierArrayErrorMessage, __LINE__);
        }
        $this->RestrictedGroupIdentifier = $restrictedGroupIdentifier;
        return $this;
    }
    /**
     * Add item to RestrictedGroupIdentifier value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSidAndAttributesType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public function addToRestrictedGroupIdentifier(\Ews\StructType\EwsSidAndAttributesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSidAndAttributesType) {
            throw new \InvalidArgumentException(sprintf('The RestrictedGroupIdentifier property can only contain items of type \Ews\StructType\EwsSidAndAttributesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RestrictedGroupIdentifier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSidAndAttributesType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSidAndAttributesType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSidAndAttributesType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSidAndAttributesType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSidAndAttributesType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RestrictedGroupIdentifier
     */
    public function getAttributeName()
    {
        return 'RestrictedGroupIdentifier';
    }
}
