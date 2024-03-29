<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfSubscriptionIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfSubscriptionIdsType extends AbstractStructArrayBase
{
    /**
     * The SubscriptionId
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - maxOccurs: unbounded
     * - minLength: 1
     * - minOccurs: 1
     * @var string[]
     */
    protected array $SubscriptionId = [];
    /**
     * Constructor method for NonEmptyArrayOfSubscriptionIdsType
     * @uses EwsNonEmptyArrayOfSubscriptionIdsType::setSubscriptionId()
     * @param string[] $subscriptionId
     */
    public function __construct(array $subscriptionId)
    {
        $this
            ->setSubscriptionId($subscriptionId);
    }
    /**
     * Get SubscriptionId value
     * @return string[]
     */
    public function getSubscriptionId(): array
    {
        return $this->SubscriptionId;
    }
    /**
     * This method is responsible for validating the values passed to the setSubscriptionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscriptionId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubscriptionIdForArrayConstraintsFromSetSubscriptionId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem)) {
                $invalidValues[] = is_object($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) ? get_class($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem), var_export($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SubscriptionId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSubscriptionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscriptionId method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubscriptionIdForMinLengthConstraintFromSetSubscriptionId($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) < 1) {
                $invalidValues[] = var_export($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SubscriptionId value
     * @throws InvalidArgumentException
     * @param string[] $subscriptionId
     * @return \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public function setSubscriptionId(array $subscriptionId): self
    {
        // validation for constraint: array
        if ('' !== ($subscriptionIdArrayErrorMessage = self::validateSubscriptionIdForArrayConstraintsFromSetSubscriptionId($subscriptionId))) {
            throw new InvalidArgumentException($subscriptionIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($subscriptionIdMinLengthErrorMessage = self::validateSubscriptionIdForMinLengthConstraintFromSetSubscriptionId($subscriptionId))) {
            throw new InvalidArgumentException($subscriptionIdMinLengthErrorMessage, __LINE__);
        }
        $this->SubscriptionId = $subscriptionId;
        
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
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SubscriptionId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SubscriptionId
     */
    public function getAttributeName(): string
    {
        return 'SubscriptionId';
    }
}
