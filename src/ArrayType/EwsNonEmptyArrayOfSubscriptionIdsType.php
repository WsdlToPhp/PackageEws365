<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfSubscriptionIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfSubscriptionIdsType extends AbstractStructArrayBase
{
    /**
     * The SubscriptionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - minLength: 1
     * @var string[]
     */
    public $SubscriptionId;
    /**
     * Constructor method for NonEmptyArrayOfSubscriptionIdsType
     * @uses EwsNonEmptyArrayOfSubscriptionIdsType::setSubscriptionId()
     * @param string[] $subscriptionId
     */
    public function __construct(array $subscriptionId = array())
    {
        $this
            ->setSubscriptionId($subscriptionId);
    }
    /**
     * Get SubscriptionId value
     * @return string[]
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @throws \InvalidArgumentException
     * @param string[] $subscriptionId
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public function setSubscriptionId(array $subscriptionId = array())
    {
        // validation for constraint: minLength
        if ((is_scalar(subscriptionId) && strlen(subscriptionId) < 1) || (is_array(subscriptionId) && count(subscriptionId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        foreach ($subscriptionId as $nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem)) {
                throw new \InvalidArgumentException(sprintf('The SubscriptionId property can only contain items of string, "%s" given', is_object($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) ? get_class($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem) : gettype($nonEmptyArrayOfSubscriptionIdsTypeSubscriptionIdItem)), __LINE__);
            }
        }
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Add item to SubscriptionId value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public function addToSubscriptionId($item)
    {
        // validation for constraint: minLength
        if ((is_scalar(item) && strlen(item) < 1) || (is_array(item) && count(item) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SubscriptionId property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubscriptionId[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SubscriptionId
     */
    public function getAttributeName()
    {
        return 'SubscriptionId';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
