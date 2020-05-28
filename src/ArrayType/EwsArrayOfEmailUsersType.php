<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailUsersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailUsersType extends AbstractStructArrayBase
{
    /**
     * The EmailUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailUserType[]
     */
    public $EmailUser;
    /**
     * Constructor method for ArrayOfEmailUsersType
     * @uses EwsArrayOfEmailUsersType::setEmailUser()
     * @param \Ews\StructType\EwsEmailUserType[] $emailUser
     */
    public function __construct(array $emailUser = array())
    {
        $this
            ->setEmailUser($emailUser);
    }
    /**
     * Get EmailUser value
     * @return \Ews\StructType\EwsEmailUserType[]|null
     */
    public function getEmailUser()
    {
        return $this->EmailUser;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailUserForArrayConstraintsFromSetEmailUser(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailUsersTypeEmailUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailUsersTypeEmailUserItem instanceof \Ews\StructType\EwsEmailUserType) {
                $invalidValues[] = is_object($arrayOfEmailUsersTypeEmailUserItem) ? get_class($arrayOfEmailUsersTypeEmailUserItem) : sprintf('%s(%s)', gettype($arrayOfEmailUsersTypeEmailUserItem), var_export($arrayOfEmailUsersTypeEmailUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailUser property can only contain items of type \Ews\StructType\EwsEmailUserType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailUserType[] $emailUser
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType
     */
    public function setEmailUser(array $emailUser = array())
    {
        // validation for constraint: array
        if ('' !== ($emailUserArrayErrorMessage = self::validateEmailUserForArrayConstraintsFromSetEmailUser($emailUser))) {
            throw new \InvalidArgumentException($emailUserArrayErrorMessage, __LINE__);
        }
        $this->EmailUser = $emailUser;
        return $this;
    }
    /**
     * Add item to EmailUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailUserType $item
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType
     */
    public function addToEmailUser(\Ews\StructType\EwsEmailUserType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailUserType) {
            throw new \InvalidArgumentException(sprintf('The EmailUser property can only contain items of type \Ews\StructType\EwsEmailUserType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailUser[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailUser
     */
    public function getAttributeName()
    {
        return 'EmailUser';
    }
}
