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
     * Meta informations extracted from the WSDL
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
     * Set GroupIdentifier value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSidAndAttributesType[] $groupIdentifier
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
     */
    public function setGroupIdentifier(array $groupIdentifier = array())
    {
        foreach ($groupIdentifier as $nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem instanceof \Ews\StructType\EwsSidAndAttributesType) {
                throw new \InvalidArgumentException(sprintf('The GroupIdentifier property can only contain items of \Ews\StructType\EwsSidAndAttributesType, "%s" given', is_object($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) ? get_class($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem) : gettype($nonEmptyArrayOfGroupIdentifiersTypeGroupIdentifierItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The GroupIdentifier property can only contain items of \Ews\StructType\EwsSidAndAttributesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
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
