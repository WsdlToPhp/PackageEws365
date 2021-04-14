<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxHoldStatusType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of mailbox hold status.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailboxHoldStatusType extends AbstractStructArrayBase
{
    /**
     * The MailboxHoldStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsMailboxHoldStatusType[]
     */
    protected array $MailboxHoldStatus = [];
    /**
     * Constructor method for ArrayOfMailboxHoldStatusType
     * @uses EwsArrayOfMailboxHoldStatusType::setMailboxHoldStatus()
     * @param \StructType\EwsMailboxHoldStatusType[] $mailboxHoldStatus
     */
    public function __construct(array $mailboxHoldStatus = [])
    {
        $this
            ->setMailboxHoldStatus($mailboxHoldStatus);
    }
    /**
     * Get MailboxHoldStatus value
     * @return \StructType\EwsMailboxHoldStatusType[]
     */
    public function getMailboxHoldStatus(): array
    {
        return $this->MailboxHoldStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxHoldStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxHoldStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxHoldStatusForArrayConstraintsFromSetMailboxHoldStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem instanceof \StructType\EwsMailboxHoldStatusType) {
                $invalidValues[] = is_object($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) ? get_class($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) : sprintf('%s(%s)', gettype($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem), var_export($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxHoldStatus property can only contain items of type \StructType\EwsMailboxHoldStatusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MailboxHoldStatus value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxHoldStatusType[] $mailboxHoldStatus
     * @return \ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public function setMailboxHoldStatus(array $mailboxHoldStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($mailboxHoldStatusArrayErrorMessage = self::validateMailboxHoldStatusForArrayConstraintsFromSetMailboxHoldStatus($mailboxHoldStatus))) {
            throw new InvalidArgumentException($mailboxHoldStatusArrayErrorMessage, __LINE__);
        }
        $this->MailboxHoldStatus = $mailboxHoldStatus;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMailboxHoldStatusType|null
     */
    public function current(): ?\StructType\EwsMailboxHoldStatusType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMailboxHoldStatusType|null
     */
    public function item($index): ?\StructType\EwsMailboxHoldStatusType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMailboxHoldStatusType|null
     */
    public function first(): ?\StructType\EwsMailboxHoldStatusType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMailboxHoldStatusType|null
     */
    public function last(): ?\StructType\EwsMailboxHoldStatusType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMailboxHoldStatusType|null
     */
    public function offsetGet($offset): ?\StructType\EwsMailboxHoldStatusType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxHoldStatusType $item
     * @return \ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsMailboxHoldStatusType) {
            throw new InvalidArgumentException(sprintf('The MailboxHoldStatus property can only contain items of type \StructType\EwsMailboxHoldStatusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxHoldStatus
     */
    public function getAttributeName(): string
    {
        return 'MailboxHoldStatus';
    }
}
