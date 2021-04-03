<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUnifiedGroupIdentityType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUnifiedGroupIdentityType extends AbstractStructArrayBase
{
    /**
     * The GroupIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsUnifiedGroupIdentity[]
     */
    protected array $GroupIdentity = [];
    /**
     * Constructor method for NonEmptyArrayOfUnifiedGroupIdentityType
     * @uses EwsNonEmptyArrayOfUnifiedGroupIdentityType::setGroupIdentity()
     * @param \StructType\EwsUnifiedGroupIdentity[] $groupIdentity
     */
    public function __construct(array $groupIdentity)
    {
        $this
            ->setGroupIdentity($groupIdentity);
    }
    /**
     * Get GroupIdentity value
     * @return \StructType\EwsUnifiedGroupIdentity[]
     */
    public function getGroupIdentity(): array
    {
        return $this->GroupIdentity;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupIdentity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupIdentity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupIdentityForArrayConstraintsFromSetGroupIdentity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem instanceof \StructType\EwsUnifiedGroupIdentity) {
                $invalidValues[] = is_object($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) ? get_class($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem), var_export($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupIdentity property can only contain items of type \StructType\EwsUnifiedGroupIdentity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupIdentity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupIdentity[] $groupIdentity
     * @return \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function setGroupIdentity(array $groupIdentity): self
    {
        // validation for constraint: array
        if ('' !== ($groupIdentityArrayErrorMessage = self::validateGroupIdentityForArrayConstraintsFromSetGroupIdentity($groupIdentity))) {
            throw new InvalidArgumentException($groupIdentityArrayErrorMessage, __LINE__);
        }
        $this->GroupIdentity = $groupIdentity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupIdentity
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupIdentity
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupIdentity
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupIdentity
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupIdentity
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupIdentity $item
     * @return \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function add(\StructType\EwsUnifiedGroupIdentity $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GroupIdentity
     */
    public function getAttributeName(): string
    {
        return 'GroupIdentity';
    }
}
