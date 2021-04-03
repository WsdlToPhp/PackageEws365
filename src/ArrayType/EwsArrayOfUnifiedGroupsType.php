<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupsType extends AbstractStructArrayBase
{
    /**
     * The UnifiedGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupType[]
     */
    protected array $UnifiedGroup = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupsType
     * @uses EwsArrayOfUnifiedGroupsType::setUnifiedGroup()
     * @param \StructType\EwsUnifiedGroupType[] $unifiedGroup
     */
    public function __construct(array $unifiedGroup = [])
    {
        $this
            ->setUnifiedGroup($unifiedGroup);
    }
    /**
     * Get UnifiedGroup value
     * @return \StructType\EwsUnifiedGroupType[]
     */
    public function getUnifiedGroup(): array
    {
        return $this->UnifiedGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setUnifiedGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnifiedGroupForArrayConstraintsFromSetUnifiedGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupsTypeUnifiedGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupsTypeUnifiedGroupItem instanceof \StructType\EwsUnifiedGroupType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupsTypeUnifiedGroupItem) ? get_class($arrayOfUnifiedGroupsTypeUnifiedGroupItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupsTypeUnifiedGroupItem), var_export($arrayOfUnifiedGroupsTypeUnifiedGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnifiedGroup property can only contain items of type \StructType\EwsUnifiedGroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnifiedGroup value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupType[] $unifiedGroup
     * @return \ArrayType\EwsArrayOfUnifiedGroupsType
     */
    public function setUnifiedGroup(array $unifiedGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($unifiedGroupArrayErrorMessage = self::validateUnifiedGroupForArrayConstraintsFromSetUnifiedGroup($unifiedGroup))) {
            throw new InvalidArgumentException($unifiedGroupArrayErrorMessage, __LINE__);
        }
        $this->UnifiedGroup = $unifiedGroup;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnifiedGroupType|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupType|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupType|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupType|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupType $item
     * @return \ArrayType\EwsArrayOfUnifiedGroupsType
     */
    public function add(\StructType\EwsUnifiedGroupType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnifiedGroup
     */
    public function getAttributeName(): string
    {
        return 'UnifiedGroup';
    }
}
