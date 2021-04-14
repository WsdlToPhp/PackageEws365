<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFailedSearchMailboxesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of failed mailbox and error message.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFailedSearchMailboxesType extends AbstractStructArrayBase
{
    /**
     * The FailedMailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsFailedSearchMailboxType[]
     */
    protected array $FailedMailbox = [];
    /**
     * Constructor method for ArrayOfFailedSearchMailboxesType
     * @uses EwsArrayOfFailedSearchMailboxesType::setFailedMailbox()
     * @param \StructType\EwsFailedSearchMailboxType[] $failedMailbox
     */
    public function __construct(array $failedMailbox = [])
    {
        $this
            ->setFailedMailbox($failedMailbox);
    }
    /**
     * Get FailedMailbox value
     * @return \StructType\EwsFailedSearchMailboxType[]
     */
    public function getFailedMailbox(): array
    {
        return $this->FailedMailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setFailedMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFailedMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFailedMailboxForArrayConstraintsFromSetFailedMailbox(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFailedSearchMailboxesTypeFailedMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfFailedSearchMailboxesTypeFailedMailboxItem instanceof \StructType\EwsFailedSearchMailboxType) {
                $invalidValues[] = is_object($arrayOfFailedSearchMailboxesTypeFailedMailboxItem) ? get_class($arrayOfFailedSearchMailboxesTypeFailedMailboxItem) : sprintf('%s(%s)', gettype($arrayOfFailedSearchMailboxesTypeFailedMailboxItem), var_export($arrayOfFailedSearchMailboxesTypeFailedMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FailedMailbox property can only contain items of type \StructType\EwsFailedSearchMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FailedMailbox value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFailedSearchMailboxType[] $failedMailbox
     * @return \ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function setFailedMailbox(array $failedMailbox = []): self
    {
        // validation for constraint: array
        if ('' !== ($failedMailboxArrayErrorMessage = self::validateFailedMailboxForArrayConstraintsFromSetFailedMailbox($failedMailbox))) {
            throw new InvalidArgumentException($failedMailboxArrayErrorMessage, __LINE__);
        }
        $this->FailedMailbox = $failedMailbox;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFailedSearchMailboxType|null
     */
    public function current(): ?\StructType\EwsFailedSearchMailboxType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFailedSearchMailboxType|null
     */
    public function item($index): ?\StructType\EwsFailedSearchMailboxType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFailedSearchMailboxType|null
     */
    public function first(): ?\StructType\EwsFailedSearchMailboxType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFailedSearchMailboxType|null
     */
    public function last(): ?\StructType\EwsFailedSearchMailboxType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFailedSearchMailboxType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFailedSearchMailboxType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFailedSearchMailboxType $item
     * @return \ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsFailedSearchMailboxType) {
            throw new InvalidArgumentException(sprintf('The FailedMailbox property can only contain items of type \StructType\EwsFailedSearchMailboxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FailedMailbox
     */
    public function getAttributeName(): string
    {
        return 'FailedMailbox';
    }
}
