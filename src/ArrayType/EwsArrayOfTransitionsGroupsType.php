<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransitionsGroupsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTransitionsGroupsType extends AbstractStructArrayBase
{
    /**
     * The TransitionsGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsArrayOfTransitionsType[]
     */
    protected array $TransitionsGroup = [];
    /**
     * Constructor method for ArrayOfTransitionsGroupsType
     * @uses EwsArrayOfTransitionsGroupsType::setTransitionsGroup()
     * @param \StructType\EwsArrayOfTransitionsType[] $transitionsGroup
     */
    public function __construct(array $transitionsGroup = [])
    {
        $this
            ->setTransitionsGroup($transitionsGroup);
    }
    /**
     * Get TransitionsGroup value
     * @return \StructType\EwsArrayOfTransitionsType[]
     */
    public function getTransitionsGroup(): array
    {
        return $this->TransitionsGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setTransitionsGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransitionsGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransitionsGroupForArrayConstraintsFromSetTransitionsGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransitionsGroupsTypeTransitionsGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransitionsGroupsTypeTransitionsGroupItem instanceof \StructType\EwsArrayOfTransitionsType) {
                $invalidValues[] = is_object($arrayOfTransitionsGroupsTypeTransitionsGroupItem) ? get_class($arrayOfTransitionsGroupsTypeTransitionsGroupItem) : sprintf('%s(%s)', gettype($arrayOfTransitionsGroupsTypeTransitionsGroupItem), var_export($arrayOfTransitionsGroupsTypeTransitionsGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TransitionsGroup property can only contain items of type \StructType\EwsArrayOfTransitionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TransitionsGroup value
     * @throws InvalidArgumentException
     * @param \StructType\EwsArrayOfTransitionsType[] $transitionsGroup
     * @return \ArrayType\EwsArrayOfTransitionsGroupsType
     */
    public function setTransitionsGroup(array $transitionsGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($transitionsGroupArrayErrorMessage = self::validateTransitionsGroupForArrayConstraintsFromSetTransitionsGroup($transitionsGroup))) {
            throw new InvalidArgumentException($transitionsGroupArrayErrorMessage, __LINE__);
        }
        $this->TransitionsGroup = $transitionsGroup;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsArrayOfTransitionsType|null
     */
    public function current(): ?\StructType\EwsArrayOfTransitionsType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsArrayOfTransitionsType|null
     */
    public function item($index): ?\StructType\EwsArrayOfTransitionsType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsArrayOfTransitionsType|null
     */
    public function first(): ?\StructType\EwsArrayOfTransitionsType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsArrayOfTransitionsType|null
     */
    public function last(): ?\StructType\EwsArrayOfTransitionsType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsArrayOfTransitionsType|null
     */
    public function offsetGet($offset): ?\StructType\EwsArrayOfTransitionsType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsArrayOfTransitionsType $item
     * @return \ArrayType\EwsArrayOfTransitionsGroupsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsArrayOfTransitionsType) {
            throw new InvalidArgumentException(sprintf('The TransitionsGroup property can only contain items of type \StructType\EwsArrayOfTransitionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TransitionsGroup
     */
    public function getAttributeName(): string
    {
        return 'TransitionsGroup';
    }
}
