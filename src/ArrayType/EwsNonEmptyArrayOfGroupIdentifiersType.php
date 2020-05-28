<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsSidAndAttributesType[]
     */
    public $GroupIdentifier;
    /**
     * Constructor method for NonEmptyArrayOfGroupIdentifiersType
     * @uses EwsNonEmptyArrayOfGroupIdentifiersType::setGroupIdentifier()
     * @param \Ews\StructType\EwsSidAndAttributesType[] $groupIdentifier
     */
    public function __construct(array $groupIdentifier = array())
    {
        $this
            ->setGroupIdentifier($groupIdentifier);
    }
    /**
     * Get GroupIdentifier value
     * @return \Ews\StructType\EwsSidAndAttributesType[]|null
     */
    public function getGroupIdentifier()
    {
        return $this->GroupIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupIdentifierForArrayConstraintsFromSetGroupIdentifier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem instanceof \Ews\StructType\EwsSidAndAttributesType) {
                $invalidValues[] = is_object($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) ? get_class($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem), var_export($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupIdentifier property can only contain items of type \Ews\StructType\EwsSidAndAttributesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GroupIdentifier value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSidAndAttributesType[] $groupIdentifier
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
     */
    public function setGroupIdentifier(array $groupIdentifier = array())
    {
        // validation for constraint: array
        if ('' !== ($groupIdentifierArrayErrorMessage = self::validateGroupIdentifierForArrayConstraintsFromSetGroupIdentifier($groupIdentifier))) {
            throw new \InvalidArgumentException($groupIdentifierArrayErrorMessage, __LINE__);
        }
        $this->GroupIdentifier = $groupIdentifier;
        return $this;
    }
    /**
     * Add item to GroupIdentifier value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSidAndAttributesType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
     */
    public function addToGroupIdentifier(\Ews\StructType\EwsSidAndAttributesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSidAndAttributesType) {
            throw new \InvalidArgumentException(sprintf('The GroupIdentifier property can only contain items of type \Ews\StructType\EwsSidAndAttributesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GroupIdentifier[] = $item;
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
     * @return string GroupIdentifier
     */
    public function getAttributeName()
    {
        return 'GroupIdentifier';
    }
}
