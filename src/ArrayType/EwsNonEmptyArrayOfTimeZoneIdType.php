<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Id;
    /**
     * Constructor method for NonEmptyArrayOfTimeZoneIdType
     * @uses EwsNonEmptyArrayOfTimeZoneIdType::setId()
     * @param string[] $id
     */
    public function __construct(array $id = array())
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return string[]|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @throws \InvalidArgumentException
     * @param string[] $id
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
     */
    public function setId(array $id = array())
    {
        foreach ($id as $nonEmptyArrayOfTimeZoneIdTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfTimeZoneIdTypeIdItem)) {
                throw new \InvalidArgumentException(sprintf('The Id property can only contain items of string, "%s" given', is_object($nonEmptyArrayOfTimeZoneIdTypeIdItem) ? get_class($nonEmptyArrayOfTimeZoneIdTypeIdItem) : gettype($nonEmptyArrayOfTimeZoneIdTypeIdItem)), __LINE__);
            }
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Add item to Id value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
     */
    public function addToId($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Id property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Id[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Id
     */
    public function getAttributeName()
    {
        return 'Id';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
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
