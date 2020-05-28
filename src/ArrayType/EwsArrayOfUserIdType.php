<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUserIdType[]
     */
    public $UserId;
    /**
     * Constructor method for ArrayOfUserIdType
     * @uses EwsArrayOfUserIdType::setUserId()
     * @param \Ews\StructType\EwsUserIdType[] $userId
     */
    public function __construct(array $userId = array())
    {
        $this
            ->setUserId($userId);
    }
    /**
     * Get UserId value
     * @return \Ews\StructType\EwsUserIdType[]
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * This method is responsible for validating the values passed to the setUserId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserIdForArrayConstraintsFromSetUserId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserIdTypeUserIdItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserIdTypeUserIdItem instanceof \Ews\StructType\EwsUserIdType) {
                $invalidValues[] = is_object($arrayOfUserIdTypeUserIdItem) ? get_class($arrayOfUserIdTypeUserIdItem) : sprintf('%s(%s)', gettype($arrayOfUserIdTypeUserIdItem), var_export($arrayOfUserIdTypeUserIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserId property can only contain items of type \Ews\StructType\EwsUserIdType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserIdType[] $userId
     * @return \Ews\ArrayType\EwsArrayOfUserIdType
     */
    public function setUserId(array $userId = array())
    {
        // validation for constraint: array
        if ('' !== ($userIdArrayErrorMessage = self::validateUserIdForArrayConstraintsFromSetUserId($userId))) {
            throw new \InvalidArgumentException($userIdArrayErrorMessage, __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Add item to UserId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserIdType $item
     * @return \Ews\ArrayType\EwsArrayOfUserIdType
     */
    public function addToUserId(\Ews\StructType\EwsUserIdType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUserIdType) {
            throw new \InvalidArgumentException(sprintf('The UserId property can only contain items of type \Ews\StructType\EwsUserIdType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserId[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUserIdType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUserIdType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUserIdType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUserIdType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUserIdType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserId
     */
    public function getAttributeName()
    {
        return 'UserId';
    }
}
