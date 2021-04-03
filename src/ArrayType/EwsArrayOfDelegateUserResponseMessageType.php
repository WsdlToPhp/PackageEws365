<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDelegateUserResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDelegateUserResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The DelegateUserResponseMessageType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsDelegateUserResponseMessageType[]
     */
    protected array $DelegateUserResponseMessageType = [];
    /**
     * Constructor method for ArrayOfDelegateUserResponseMessageType
     * @uses EwsArrayOfDelegateUserResponseMessageType::setDelegateUserResponseMessageType()
     * @param \StructType\EwsDelegateUserResponseMessageType[] $delegateUserResponseMessageType
     */
    public function __construct(array $delegateUserResponseMessageType)
    {
        $this
            ->setDelegateUserResponseMessageType($delegateUserResponseMessageType);
    }
    /**
     * Get DelegateUserResponseMessageType value
     * @return \StructType\EwsDelegateUserResponseMessageType[]
     */
    public function getDelegateUserResponseMessageType(): array
    {
        return $this->DelegateUserResponseMessageType;
    }
    /**
     * This method is responsible for validating the values passed to the setDelegateUserResponseMessageType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelegateUserResponseMessageType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelegateUserResponseMessageTypeForArrayConstraintsFromSetDelegateUserResponseMessageType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem instanceof \StructType\EwsDelegateUserResponseMessageType) {
                $invalidValues[] = is_object($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) ? get_class($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) : sprintf('%s(%s)', gettype($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem), var_export($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DelegateUserResponseMessageType property can only contain items of type \StructType\EwsDelegateUserResponseMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DelegateUserResponseMessageType value
     * @throws InvalidArgumentException
     * @param \StructType\EwsDelegateUserResponseMessageType[] $delegateUserResponseMessageType
     * @return \ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public function setDelegateUserResponseMessageType(array $delegateUserResponseMessageType): self
    {
        // validation for constraint: array
        if ('' !== ($delegateUserResponseMessageTypeArrayErrorMessage = self::validateDelegateUserResponseMessageTypeForArrayConstraintsFromSetDelegateUserResponseMessageType($delegateUserResponseMessageType))) {
            throw new InvalidArgumentException($delegateUserResponseMessageTypeArrayErrorMessage, __LINE__);
        }
        $this->DelegateUserResponseMessageType = $delegateUserResponseMessageType;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsDelegateUserResponseMessageType|null
     */
    public function current(): ?\StructType\EwsDelegateUserResponseMessageType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsDelegateUserResponseMessageType|null
     */
    public function item($index): ?\StructType\EwsDelegateUserResponseMessageType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsDelegateUserResponseMessageType|null
     */
    public function first(): ?\StructType\EwsDelegateUserResponseMessageType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsDelegateUserResponseMessageType|null
     */
    public function last(): ?\StructType\EwsDelegateUserResponseMessageType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsDelegateUserResponseMessageType|null
     */
    public function offsetGet($offset): ?\StructType\EwsDelegateUserResponseMessageType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsDelegateUserResponseMessageType $item
     * @return \ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public function add(\StructType\EwsDelegateUserResponseMessageType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DelegateUserResponseMessageType
     */
    public function getAttributeName(): string
    {
        return 'DelegateUserResponseMessageType';
    }
}
