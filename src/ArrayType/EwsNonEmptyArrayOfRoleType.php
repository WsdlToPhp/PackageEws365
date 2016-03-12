<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfRoleType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfRoleType extends AbstractStructArrayBase
{
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Role;
    /**
     * Constructor method for NonEmptyArrayOfRoleType
     * @uses EwsNonEmptyArrayOfRoleType::setRole()
     * @param string[] $role
     */
    public function __construct(array $role = array())
    {
        $this
            ->setRole($role);
    }
    /**
     * Get Role value
     * @return string[]|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @throws \InvalidArgumentException
     * @param string[] $role
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public function setRole(array $role = array())
    {
        foreach ($role as $nonEmptyArrayOfRoleTypeRoleItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfRoleTypeRoleItem)) {
                throw new \InvalidArgumentException(sprintf('The Role property can only contain items of string, "%s" given', is_object($nonEmptyArrayOfRoleTypeRoleItem) ? get_class($nonEmptyArrayOfRoleTypeRoleItem) : gettype($nonEmptyArrayOfRoleTypeRoleItem)), __LINE__);
            }
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Add item to Role value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public function addToRole($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Role property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Role[] = $item;
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
     * @return string Role
     */
    public function getAttributeName()
    {
        return 'Role';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
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
