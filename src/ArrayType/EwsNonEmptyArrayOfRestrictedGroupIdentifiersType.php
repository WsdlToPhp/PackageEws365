<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfRestrictedGroupIdentifiersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfRestrictedGroupIdentifiersType extends AbstractStructArrayBase
{
    /**
     * The RestrictedGroupIdentifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var array
     */
    public $RestrictedGroupIdentifier;
    /**
     * Constructor method for NonEmptyArrayOfRestrictedGroupIdentifiersType
     * @uses
     * EwsNonEmptyArrayOfRestrictedGroupIdentifiersType::setRestrictedGroupIdentifier()
     * @param array $restrictedGroupIdentifier
     */
    public function __construct(array $restrictedGroupIdentifier = array())
    {
        $this
            ->setRestrictedGroupIdentifier($restrictedGroupIdentifier);
    }
    /**
     * Get RestrictedGroupIdentifier value
     * @return array
     */
    public function getRestrictedGroupIdentifier()
    {
        return $this->RestrictedGroupIdentifier;
    }
    /**
     * Set RestrictedGroupIdentifier value
     * @param array $restrictedGroupIdentifier
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public function setRestrictedGroupIdentifier(array $restrictedGroupIdentifier = array())
    {
        $this->RestrictedGroupIdentifier = $restrictedGroupIdentifier;
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