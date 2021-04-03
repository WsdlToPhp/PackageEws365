<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
    protected array $Role = [];
    /**
     * Constructor method for NonEmptyArrayOfRoleType
     * @uses EwsNonEmptyArrayOfRoleType::setRole()
     * @param string[] $role
     */
    public function __construct(array $role = [])
    {
        $this
            ->setRole($role);
    }
    /**
     * Get Role value
     * @return string[]
     */
    public function getRole(): array
    {
        return $this->Role;
    }
    /**
     * This method is responsible for validating the values passed to the setRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoleForArrayConstraintsFromSetRole(array $values = []): string
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
     * @throws InvalidArgumentException
     * @param string[] $role
     * @return \ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public function setRole(array $role = []): self
    {
        // validation for constraint: array
        if ('' !== ($roleArrayErrorMessage = self::validateRoleForArrayConstraintsFromSetRole($role))) {
            throw new InvalidArgumentException($roleArrayErrorMessage, __LINE__);
        }
        $this->Role = $role;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Role
     */
    public function getAttributeName(): string
    {
        return 'Role';
    }
}
