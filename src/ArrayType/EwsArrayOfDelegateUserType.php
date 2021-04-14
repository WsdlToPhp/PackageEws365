<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsDelegateUserType[]
     */
    protected array $DelegateUser = [];
    /**
     * Constructor method for ArrayOfDelegateUserType
     * @uses EwsArrayOfDelegateUserType::setDelegateUser()
     * @param \StructType\EwsDelegateUserType[] $delegateUser
     */
    public function __construct(array $delegateUser)
    {
        $this
            ->setDelegateUser($delegateUser);
    }
    /**
     * Get DelegateUser value
     * @return \StructType\EwsDelegateUserType[]
     */
    public function getDelegateUser(): array
    {
        return $this->DelegateUser;
    }
    /**
     * This method is responsible for validating the values passed to the setDelegateUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelegateUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelegateUserForArrayConstraintsFromSetDelegateUser(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDelegateUserTypeDelegateUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfDelegateUserTypeDelegateUserItem instanceof \StructType\EwsDelegateUserType) {
                $invalidValues[] = is_object($arrayOfDelegateUserTypeDelegateUserItem) ? get_class($arrayOfDelegateUserTypeDelegateUserItem) : sprintf('%s(%s)', gettype($arrayOfDelegateUserTypeDelegateUserItem), var_export($arrayOfDelegateUserTypeDelegateUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DelegateUser property can only contain items of type \StructType\EwsDelegateUserType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DelegateUser value
     * @throws InvalidArgumentException
     * @param \StructType\EwsDelegateUserType[] $delegateUser
     * @return \ArrayType\EwsArrayOfDelegateUserType
     */
    public function setDelegateUser(array $delegateUser): self
    {
        // validation for constraint: array
        if ('' !== ($delegateUserArrayErrorMessage = self::validateDelegateUserForArrayConstraintsFromSetDelegateUser($delegateUser))) {
            throw new InvalidArgumentException($delegateUserArrayErrorMessage, __LINE__);
        }
        $this->DelegateUser = $delegateUser;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsDelegateUserType|null
     */
    public function current(): ?\StructType\EwsDelegateUserType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsDelegateUserType|null
     */
    public function item($index): ?\StructType\EwsDelegateUserType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsDelegateUserType|null
     */
    public function first(): ?\StructType\EwsDelegateUserType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsDelegateUserType|null
     */
    public function last(): ?\StructType\EwsDelegateUserType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsDelegateUserType|null
     */
    public function offsetGet($offset): ?\StructType\EwsDelegateUserType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsDelegateUserType $item
     * @return \ArrayType\EwsArrayOfDelegateUserType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsDelegateUserType) {
            throw new InvalidArgumentException(sprintf('The DelegateUser property can only contain items of type \StructType\EwsDelegateUserType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DelegateUser
     */
    public function getAttributeName(): string
    {
        return 'DelegateUser';
    }
}
