<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserIdType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUserIdType extends AbstractStructArrayBase
{
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsUserIdType[]
     */
    protected array $UserId = [];
    /**
     * Constructor method for ArrayOfUserIdType
     * @uses EwsArrayOfUserIdType::setUserId()
     * @param \StructType\EwsUserIdType[] $userId
     */
    public function __construct(array $userId)
    {
        $this
            ->setUserId($userId);
    }
    /**
     * Get UserId value
     * @return \StructType\EwsUserIdType[]
     */
    public function getUserId(): array
    {
        return $this->UserId;
    }
    /**
     * This method is responsible for validating the values passed to the setUserId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserIdForArrayConstraintsFromSetUserId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserIdTypeUserIdItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserIdTypeUserIdItem instanceof \StructType\EwsUserIdType) {
                $invalidValues[] = is_object($arrayOfUserIdTypeUserIdItem) ? get_class($arrayOfUserIdTypeUserIdItem) : sprintf('%s(%s)', gettype($arrayOfUserIdTypeUserIdItem), var_export($arrayOfUserIdTypeUserIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserId property can only contain items of type \StructType\EwsUserIdType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserId value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUserIdType[] $userId
     * @return \ArrayType\EwsArrayOfUserIdType
     */
    public function setUserId(array $userId): self
    {
        // validation for constraint: array
        if ('' !== ($userIdArrayErrorMessage = self::validateUserIdForArrayConstraintsFromSetUserId($userId))) {
            throw new InvalidArgumentException($userIdArrayErrorMessage, __LINE__);
        }
        $this->UserId = $userId;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUserIdType|null
     */
    public function current(): ?\StructType\EwsUserIdType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUserIdType|null
     */
    public function item($index): ?\StructType\EwsUserIdType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUserIdType|null
     */
    public function first(): ?\StructType\EwsUserIdType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUserIdType|null
     */
    public function last(): ?\StructType\EwsUserIdType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUserIdType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUserIdType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUserIdType $item
     * @return \ArrayType\EwsArrayOfUserIdType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsUserIdType) {
            throw new InvalidArgumentException(sprintf('The UserId property can only contain items of type \StructType\EwsUserIdType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserId
     */
    public function getAttributeName(): string
    {
        return 'UserId';
    }
}
