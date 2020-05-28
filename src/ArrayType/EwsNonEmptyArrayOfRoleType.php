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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoleForArrayConstraintsFromSetRole(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfRoleTypeRoleItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfRoleTypeRoleItem)) {
                $invalidValues[] = is_object($nonEmptyArrayOfRoleTypeRoleItem) ? get_class($nonEmptyArrayOfRoleTypeRoleItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfRoleTypeRoleItem), var_export($nonEmptyArrayOfRoleTypeRoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Role property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Role value
     * @throws \InvalidArgumentException
     * @param string[] $role
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public function setRole(array $role = array())
    {
        // validation for constraint: array
        if ('' !== ($roleArrayErrorMessage = self::validateRoleForArrayConstraintsFromSetRole($role))) {
            throw new \InvalidArgumentException($roleArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Role property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
