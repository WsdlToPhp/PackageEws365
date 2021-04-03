<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPermissionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPermissionsType extends AbstractStructArrayBase
{
    /**
     * The Permission
     * Meta information extracted from the WSDL
     * - choice: Permission
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsPermissionType|null
     */
    protected ?\StructType\EwsPermissionType $Permission = null;
    /**
     * Constructor method for ArrayOfPermissionsType
     * @uses EwsArrayOfPermissionsType::setPermission()
     * @param \StructType\EwsPermissionType $permission
     */
    public function __construct(?\StructType\EwsPermissionType $permission = null)
    {
        $this
            ->setPermission($permission);
    }
    /**
     * Get Permission value
     * @return \StructType\EwsPermissionType|null
     */
    public function getPermission(): ?\StructType\EwsPermissionType
    {
        return isset($this->Permission) ? $this->Permission : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPermission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPermission method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePermissionForChoiceConstraintsFromSetPermission($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Permission can\'t be set as the property %s is already set. Only one property must be set among these properties: Permission, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Permission value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPermissionType $permission
     * @return \ArrayType\EwsArrayOfPermissionsType
     */
    public function setPermission(?\StructType\EwsPermissionType $permission = null): self
    {
        // validation for constraint: choice(Permission)
        if ('' !== ($permissionChoiceErrorMessage = self::validatePermissionForChoiceConstraintsFromSetPermission($permission))) {
            throw new InvalidArgumentException($permissionChoiceErrorMessage, __LINE__);
        }
        if (is_null($permission) || (is_array($permission) && empty($permission))) {
            unset($this->Permission);
        } else {
            $this->Permission = $permission;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPermissionType|null
     */
    public function current(): ?\StructType\EwsPermissionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPermissionType|null
     */
    public function item($index): ?\StructType\EwsPermissionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPermissionType|null
     */
    public function first(): ?\StructType\EwsPermissionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPermissionType|null
     */
    public function last(): ?\StructType\EwsPermissionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPermissionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPermissionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPermissionType $item
     * @return \ArrayType\EwsArrayOfPermissionsType
     */
    public function add(\StructType\EwsPermissionType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Permission
     */
    public function getAttributeName(): string
    {
        return 'Permission';
    }
}
