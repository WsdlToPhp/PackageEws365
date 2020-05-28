<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsFailedSearchMailboxType[]
     */
    public $FailedMailbox;
    /**
     * Constructor method for ArrayOfFailedSearchMailboxesType
     * @uses EwsArrayOfFailedSearchMailboxesType::setFailedMailbox()
     * @param \Ews\StructType\EwsFailedSearchMailboxType[] $failedMailbox
     */
    public function __construct(array $failedMailbox = array())
    {
        $this
            ->setFailedMailbox($failedMailbox);
    }
    /**
     * Get FailedMailbox value
     * @return \Ews\StructType\EwsFailedSearchMailboxType[]|null
     */
    public function getFailedMailbox()
    {
        return $this->FailedMailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setFailedMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFailedMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFailedMailboxForArrayConstraintsFromSetFailedMailbox(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFailedSearchMailboxesTypeFailedMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfFailedSearchMailboxesTypeFailedMailboxItem instanceof \Ews\StructType\EwsFailedSearchMailboxType) {
                $invalidValues[] = is_object($arrayOfFailedSearchMailboxesTypeFailedMailboxItem) ? get_class($arrayOfFailedSearchMailboxesTypeFailedMailboxItem) : sprintf('%s(%s)', gettype($arrayOfFailedSearchMailboxesTypeFailedMailboxItem), var_export($arrayOfFailedSearchMailboxesTypeFailedMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FailedMailbox property can only contain items of type \Ews\StructType\EwsFailedSearchMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FailedMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFailedSearchMailboxType[] $failedMailbox
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function setFailedMailbox(array $failedMailbox = array())
    {
        // validation for constraint: array
        if ('' !== ($failedMailboxArrayErrorMessage = self::validateFailedMailboxForArrayConstraintsFromSetFailedMailbox($failedMailbox))) {
            throw new \InvalidArgumentException($failedMailboxArrayErrorMessage, __LINE__);
        }
        $this->FailedMailbox = $failedMailbox;
        return $this;
    }
    /**
     * Add item to FailedMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFailedSearchMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function addToFailedMailbox(\Ews\StructType\EwsFailedSearchMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFailedSearchMailboxType) {
            throw new \InvalidArgumentException(sprintf('The FailedMailbox property can only contain items of type \Ews\StructType\EwsFailedSearchMailboxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FailedMailbox[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FailedMailbox
     */
    public function getAttributeName()
    {
        return 'FailedMailbox';
    }
}
