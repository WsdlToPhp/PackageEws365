<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupsSetsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Represents an array of unified groups sets in a GetUserUnifiedGroups response
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupsSetsType extends AbstractStructArrayBase
{
    /**
     * The UnifiedGroupsSet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupsSetType[]
     */
    protected array $UnifiedGroupsSet = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupsSetsType
     * @uses EwsArrayOfUnifiedGroupsSetsType::setUnifiedGroupsSet()
     * @param \StructType\EwsUnifiedGroupsSetType[] $unifiedGroupsSet
     */
    public function __construct(array $unifiedGroupsSet = [])
    {
        $this
            ->setUnifiedGroupsSet($unifiedGroupsSet);
    }
    /**
     * Get UnifiedGroupsSet value
     * @return \StructType\EwsUnifiedGroupsSetType[]
     */
    public function getUnifiedGroupsSet(): array
    {
        return $this->UnifiedGroupsSet;
    }
    /**
     * This method is responsible for validating the values passed to the setUnifiedGroupsSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupsSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnifiedGroupsSetForArrayConstraintsFromSetUnifiedGroupsSet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem instanceof \StructType\EwsUnifiedGroupsSetType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) ? get_class($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem), var_export($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnifiedGroupsSet property can only contain items of type \StructType\EwsUnifiedGroupsSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnifiedGroupsSet value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupsSetType[] $unifiedGroupsSet
     * @return \ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function setUnifiedGroupsSet(array $unifiedGroupsSet = []): self
    {
        // validation for constraint: array
        if ('' !== ($unifiedGroupsSetArrayErrorMessage = self::validateUnifiedGroupsSetForArrayConstraintsFromSetUnifiedGroupsSet($unifiedGroupsSet))) {
            throw new InvalidArgumentException($unifiedGroupsSetArrayErrorMessage, __LINE__);
        }
        $this->UnifiedGroupsSet = $unifiedGroupsSet;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnifiedGroupsSetType|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupsSetType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupsSetType|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupsSetType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupsSetType|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupsSetType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupsSetType|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupsSetType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupsSetType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupsSetType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupsSetType $item
     * @return \ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function add(\StructType\EwsUnifiedGroupsSetType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnifiedGroupsSet
     */
    public function getAttributeName(): string
    {
        return 'UnifiedGroupsSet';
    }
}
