<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUseenDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUseenDataType extends AbstractStructArrayBase
{
    /**
     * The Unseen
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsUnseenDataType[]
     */
    protected array $Unseen = [];
    /**
     * Constructor method for NonEmptyArrayOfUseenDataType
     * @uses EwsNonEmptyArrayOfUseenDataType::setUnseen()
     * @param \StructType\EwsUnseenDataType[] $unseen
     */
    public function __construct(array $unseen)
    {
        $this
            ->setUnseen($unseen);
    }
    /**
     * Get Unseen value
     * @return \StructType\EwsUnseenDataType[]
     */
    public function getUnseen(): array
    {
        return $this->Unseen;
    }
    /**
     * This method is responsible for validating the values passed to the setUnseen method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnseen method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnseenForArrayConstraintsFromSetUnseen(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfUseenDataTypeUnseenItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUseenDataTypeUnseenItem instanceof \StructType\EwsUnseenDataType) {
                $invalidValues[] = is_object($nonEmptyArrayOfUseenDataTypeUnseenItem) ? get_class($nonEmptyArrayOfUseenDataTypeUnseenItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfUseenDataTypeUnseenItem), var_export($nonEmptyArrayOfUseenDataTypeUnseenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Unseen property can only contain items of type \StructType\EwsUnseenDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Unseen value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnseenDataType[] $unseen
     * @return \ArrayType\EwsNonEmptyArrayOfUseenDataType
     */
    public function setUnseen(array $unseen): self
    {
        // validation for constraint: array
        if ('' !== ($unseenArrayErrorMessage = self::validateUnseenForArrayConstraintsFromSetUnseen($unseen))) {
            throw new InvalidArgumentException($unseenArrayErrorMessage, __LINE__);
        }
        $this->Unseen = $unseen;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnseenDataType|null
     */
    public function current(): ?\StructType\EwsUnseenDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnseenDataType|null
     */
    public function item($index): ?\StructType\EwsUnseenDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnseenDataType|null
     */
    public function first(): ?\StructType\EwsUnseenDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnseenDataType|null
     */
    public function last(): ?\StructType\EwsUnseenDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnseenDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnseenDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnseenDataType $item
     * @return \ArrayType\EwsNonEmptyArrayOfUseenDataType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsUnseenDataType) {
            throw new InvalidArgumentException(sprintf('The Unseen property can only contain items of type \StructType\EwsUnseenDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Unseen
     */
    public function getAttributeName(): string
    {
        return 'Unseen';
    }
}
