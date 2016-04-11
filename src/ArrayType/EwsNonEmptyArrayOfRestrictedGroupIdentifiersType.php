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
     * Meta informations extracted from the WSDL
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
     * Set RestrictedGroupIdentifier value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSidAndAttributesType[] $restrictedGroupIdentifier
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public function setRestrictedGroupIdentifier(array $restrictedGroupIdentifier = array())
    {
        foreach ($restrictedGroupIdentifier as $nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem instanceof \Ews\StructType\EwsSidAndAttributesType) {
                throw new \InvalidArgumentException(sprintf('The RestrictedGroupIdentifier property can only contain items of \Ews\StructType\EwsSidAndAttributesType, "%s" given', is_object($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) ? get_class($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem) : gettype($nonEmptyArrayOfRestrictedGroupIdentifiersTypeRestrictedGroupIdentifierItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The RestrictedGroupIdentifier property can only contain items of \Ews\StructType\EwsSidAndAttributesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
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
