<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAbchPersonContactHandlesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAbchPersonContactHandlesType extends AbstractStructArrayBase
{
    /**
     * The ContactHandle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsAbchPersonContactHandle[]
     */
    protected array $ContactHandle = [];
    /**
     * Constructor method for ArrayOfAbchPersonContactHandlesType
     * @uses EwsArrayOfAbchPersonContactHandlesType::setContactHandle()
     * @param \StructType\EwsAbchPersonContactHandle[] $contactHandle
     */
    public function __construct(array $contactHandle = [])
    {
        $this
            ->setContactHandle($contactHandle);
    }
    /**
     * Get ContactHandle value
     * @return \StructType\EwsAbchPersonContactHandle[]
     */
    public function getContactHandle(): array
    {
        return $this->ContactHandle;
    }
    /**
     * This method is responsible for validating the values passed to the setContactHandle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactHandle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactHandleForArrayConstraintsFromSetContactHandle(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAbchPersonContactHandlesTypeContactHandleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAbchPersonContactHandlesTypeContactHandleItem instanceof \StructType\EwsAbchPersonContactHandle) {
                $invalidValues[] = is_object($arrayOfAbchPersonContactHandlesTypeContactHandleItem) ? get_class($arrayOfAbchPersonContactHandlesTypeContactHandleItem) : sprintf('%s(%s)', gettype($arrayOfAbchPersonContactHandlesTypeContactHandleItem), var_export($arrayOfAbchPersonContactHandlesTypeContactHandleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContactHandle property can only contain items of type \StructType\EwsAbchPersonContactHandle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContactHandle value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAbchPersonContactHandle[] $contactHandle
     * @return \ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public function setContactHandle(array $contactHandle = []): self
    {
        // validation for constraint: array
        if ('' !== ($contactHandleArrayErrorMessage = self::validateContactHandleForArrayConstraintsFromSetContactHandle($contactHandle))) {
            throw new InvalidArgumentException($contactHandleArrayErrorMessage, __LINE__);
        }
        $this->ContactHandle = $contactHandle;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsAbchPersonContactHandle|null
     */
    public function current(): ?\StructType\EwsAbchPersonContactHandle
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsAbchPersonContactHandle|null
     */
    public function item($index): ?\StructType\EwsAbchPersonContactHandle
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsAbchPersonContactHandle|null
     */
    public function first(): ?\StructType\EwsAbchPersonContactHandle
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsAbchPersonContactHandle|null
     */
    public function last(): ?\StructType\EwsAbchPersonContactHandle
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsAbchPersonContactHandle|null
     */
    public function offsetGet($offset): ?\StructType\EwsAbchPersonContactHandle
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsAbchPersonContactHandle $item
     * @return \ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsAbchPersonContactHandle) {
            throw new InvalidArgumentException(sprintf('The ContactHandle property can only contain items of type \StructType\EwsAbchPersonContactHandle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContactHandle
     */
    public function getAttributeName(): string
    {
        return 'ContactHandle';
    }
}
