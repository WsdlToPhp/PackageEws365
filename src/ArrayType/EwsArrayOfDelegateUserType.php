<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDelegateUserType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDelegateUserType extends AbstractStructArrayBase
{
    /**
     * The DelegateUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDelegateUserType[]
     */
    public $DelegateUser;
    /**
     * Constructor method for ArrayOfDelegateUserType
     * @uses EwsArrayOfDelegateUserType::setDelegateUser()
     * @param \Ews\StructType\EwsDelegateUserType[] $delegateUser
     */
    public function __construct(array $delegateUser = array())
    {
        $this
            ->setDelegateUser($delegateUser);
    }
    /**
     * Get DelegateUser value
     * @return \Ews\StructType\EwsDelegateUserType[]
     */
    public function getDelegateUser()
    {
        return $this->DelegateUser;
    }
    /**
     * This method is responsible for validating the values passed to the setDelegateUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelegateUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelegateUserForArrayConstraintsFromSetDelegateUser(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDelegateUserTypeDelegateUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfDelegateUserTypeDelegateUserItem instanceof \Ews\StructType\EwsDelegateUserType) {
                $invalidValues[] = is_object($arrayOfDelegateUserTypeDelegateUserItem) ? get_class($arrayOfDelegateUserTypeDelegateUserItem) : sprintf('%s(%s)', gettype($arrayOfDelegateUserTypeDelegateUserItem), var_export($arrayOfDelegateUserTypeDelegateUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DelegateUser property can only contain items of type \Ews\StructType\EwsDelegateUserType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DelegateUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserType[] $delegateUser
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType
     */
    public function setDelegateUser(array $delegateUser = array())
    {
        // validation for constraint: array
        if ('' !== ($delegateUserArrayErrorMessage = self::validateDelegateUserForArrayConstraintsFromSetDelegateUser($delegateUser))) {
            throw new \InvalidArgumentException($delegateUserArrayErrorMessage, __LINE__);
        }
        $this->DelegateUser = $delegateUser;
        return $this;
    }
    /**
     * Add item to DelegateUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserType $item
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType
     */
    public function addToDelegateUser(\Ews\StructType\EwsDelegateUserType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsDelegateUserType) {
            throw new \InvalidArgumentException(sprintf('The DelegateUser property can only contain items of type \Ews\StructType\EwsDelegateUserType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DelegateUser[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DelegateUser
     */
    public function getAttributeName()
    {
        return 'DelegateUser';
    }
}
