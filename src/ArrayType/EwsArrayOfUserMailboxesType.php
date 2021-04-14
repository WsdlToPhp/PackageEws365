<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserMailboxesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of user mailbox.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUserMailboxesType extends AbstractStructArrayBase
{
    /**
     * The UserMailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsUserMailboxType[]
     */
    protected array $UserMailbox = [];
    /**
     * Constructor method for ArrayOfUserMailboxesType
     * @uses EwsArrayOfUserMailboxesType::setUserMailbox()
     * @param \StructType\EwsUserMailboxType[] $userMailbox
     */
    public function __construct(array $userMailbox)
    {
        $this
            ->setUserMailbox($userMailbox);
    }
    /**
     * Get UserMailbox value
     * @return \StructType\EwsUserMailboxType[]
     */
    public function getUserMailbox(): array
    {
        return $this->UserMailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setUserMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserMailboxForArrayConstraintsFromSetUserMailbox(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserMailboxesTypeUserMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserMailboxesTypeUserMailboxItem instanceof \StructType\EwsUserMailboxType) {
                $invalidValues[] = is_object($arrayOfUserMailboxesTypeUserMailboxItem) ? get_class($arrayOfUserMailboxesTypeUserMailboxItem) : sprintf('%s(%s)', gettype($arrayOfUserMailboxesTypeUserMailboxItem), var_export($arrayOfUserMailboxesTypeUserMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserMailbox property can only contain items of type \StructType\EwsUserMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserMailbox value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUserMailboxType[] $userMailbox
     * @return \ArrayType\EwsArrayOfUserMailboxesType
     */
    public function setUserMailbox(array $userMailbox): self
    {
        // validation for constraint: array
        if ('' !== ($userMailboxArrayErrorMessage = self::validateUserMailboxForArrayConstraintsFromSetUserMailbox($userMailbox))) {
            throw new InvalidArgumentException($userMailboxArrayErrorMessage, __LINE__);
        }
        $this->UserMailbox = $userMailbox;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUserMailboxType|null
     */
    public function current(): ?\StructType\EwsUserMailboxType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUserMailboxType|null
     */
    public function item($index): ?\StructType\EwsUserMailboxType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUserMailboxType|null
     */
    public function first(): ?\StructType\EwsUserMailboxType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUserMailboxType|null
     */
    public function last(): ?\StructType\EwsUserMailboxType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUserMailboxType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUserMailboxType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUserMailboxType $item
     * @return \ArrayType\EwsArrayOfUserMailboxesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsUserMailboxType) {
            throw new InvalidArgumentException(sprintf('The UserMailbox property can only contain items of type \StructType\EwsUserMailboxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserMailbox
     */
    public function getAttributeName(): string
    {
        return 'UserMailbox';
    }
}
