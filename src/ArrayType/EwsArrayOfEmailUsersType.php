<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsEmailUserType[]
     */
    protected array $EmailUser = [];
    /**
     * Constructor method for ArrayOfEmailUsersType
     * @uses EwsArrayOfEmailUsersType::setEmailUser()
     * @param \StructType\EwsEmailUserType[] $emailUser
     */
    public function __construct(array $emailUser = [])
    {
        $this
            ->setEmailUser($emailUser);
    }
    /**
     * Get EmailUser value
     * @return \StructType\EwsEmailUserType[]
     */
    public function getEmailUser(): array
    {
        return $this->EmailUser;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailUserForArrayConstraintsFromSetEmailUser(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailUsersTypeEmailUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailUsersTypeEmailUserItem instanceof \StructType\EwsEmailUserType) {
                $invalidValues[] = is_object($arrayOfEmailUsersTypeEmailUserItem) ? get_class($arrayOfEmailUsersTypeEmailUserItem) : sprintf('%s(%s)', gettype($arrayOfEmailUsersTypeEmailUserItem), var_export($arrayOfEmailUsersTypeEmailUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailUser property can only contain items of type \StructType\EwsEmailUserType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailUser value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailUserType[] $emailUser
     * @return \ArrayType\EwsArrayOfEmailUsersType
     */
    public function setEmailUser(array $emailUser = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailUserArrayErrorMessage = self::validateEmailUserForArrayConstraintsFromSetEmailUser($emailUser))) {
            throw new InvalidArgumentException($emailUserArrayErrorMessage, __LINE__);
        }
        $this->EmailUser = $emailUser;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEmailUserType|null
     */
    public function current(): ?\StructType\EwsEmailUserType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEmailUserType|null
     */
    public function item($index): ?\StructType\EwsEmailUserType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEmailUserType|null
     */
    public function first(): ?\StructType\EwsEmailUserType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEmailUserType|null
     */
    public function last(): ?\StructType\EwsEmailUserType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEmailUserType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEmailUserType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailUserType $item
     * @return \ArrayType\EwsArrayOfEmailUsersType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsEmailUserType) {
            throw new InvalidArgumentException(sprintf('The EmailUser property can only contain items of type \StructType\EwsEmailUserType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailUser
     */
    public function getAttributeName(): string
    {
        return 'EmailUser';
    }
}
