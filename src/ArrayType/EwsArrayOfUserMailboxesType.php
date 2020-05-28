<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUserMailboxType[]
     */
    public $UserMailbox;
    /**
     * Constructor method for ArrayOfUserMailboxesType
     * @uses EwsArrayOfUserMailboxesType::setUserMailbox()
     * @param \Ews\StructType\EwsUserMailboxType[] $userMailbox
     */
    public function __construct(array $userMailbox = array())
    {
        $this
            ->setUserMailbox($userMailbox);
    }
    /**
     * Get UserMailbox value
     * @return \Ews\StructType\EwsUserMailboxType[]
     */
    public function getUserMailbox()
    {
        return $this->UserMailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setUserMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserMailboxForArrayConstraintsFromSetUserMailbox(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserMailboxesTypeUserMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserMailboxesTypeUserMailboxItem instanceof \Ews\StructType\EwsUserMailboxType) {
                $invalidValues[] = is_object($arrayOfUserMailboxesTypeUserMailboxItem) ? get_class($arrayOfUserMailboxesTypeUserMailboxItem) : sprintf('%s(%s)', gettype($arrayOfUserMailboxesTypeUserMailboxItem), var_export($arrayOfUserMailboxesTypeUserMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserMailbox property can only contain items of type \Ews\StructType\EwsUserMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserMailboxType[] $userMailbox
     * @return \Ews\ArrayType\EwsArrayOfUserMailboxesType
     */
    public function setUserMailbox(array $userMailbox = array())
    {
        // validation for constraint: array
        if ('' !== ($userMailboxArrayErrorMessage = self::validateUserMailboxForArrayConstraintsFromSetUserMailbox($userMailbox))) {
            throw new \InvalidArgumentException($userMailboxArrayErrorMessage, __LINE__);
        }
        $this->UserMailbox = $userMailbox;
        return $this;
    }
    /**
     * Add item to UserMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfUserMailboxesType
     */
    public function addToUserMailbox(\Ews\StructType\EwsUserMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUserMailboxType) {
            throw new \InvalidArgumentException(sprintf('The UserMailbox property can only contain items of type \Ews\StructType\EwsUserMailboxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserMailbox[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserMailbox
     */
    public function getAttributeName()
    {
        return 'UserMailbox';
    }
}
