<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupType[]
     */
    public $UnifiedGroup;
    /**
     * Constructor method for ArrayOfUnifiedGroupsType
     * @uses EwsArrayOfUnifiedGroupsType::setUnifiedGroup()
     * @param \Ews\StructType\EwsUnifiedGroupType[] $unifiedGroup
     */
    public function __construct(array $unifiedGroup = array())
    {
        $this
            ->setUnifiedGroup($unifiedGroup);
    }
    /**
     * Get UnifiedGroup value
     * @return \Ews\StructType\EwsUnifiedGroupType[]|null
     */
    public function getUnifiedGroup()
    {
        return $this->UnifiedGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setUnifiedGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnifiedGroupForArrayConstraintsFromSetUnifiedGroup(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupsTypeUnifiedGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupsTypeUnifiedGroupItem instanceof \Ews\StructType\EwsUnifiedGroupType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupsTypeUnifiedGroupItem) ? get_class($arrayOfUnifiedGroupsTypeUnifiedGroupItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupsTypeUnifiedGroupItem), var_export($arrayOfUnifiedGroupsTypeUnifiedGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnifiedGroup property can only contain items of type \Ews\StructType\EwsUnifiedGroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UnifiedGroup value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupType[] $unifiedGroup
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsType
     */
    public function setUnifiedGroup(array $unifiedGroup = array())
    {
        // validation for constraint: array
        if ('' !== ($unifiedGroupArrayErrorMessage = self::validateUnifiedGroupForArrayConstraintsFromSetUnifiedGroup($unifiedGroup))) {
            throw new \InvalidArgumentException($unifiedGroupArrayErrorMessage, __LINE__);
        }
        $this->UnifiedGroup = $unifiedGroup;
        return $this;
    }
    /**
     * Add item to UnifiedGroup value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupType $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsType
     */
    public function addToUnifiedGroup(\Ews\StructType\EwsUnifiedGroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupType) {
            throw new \InvalidArgumentException(sprintf('The UnifiedGroup property can only contain items of type \Ews\StructType\EwsUnifiedGroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnifiedGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnifiedGroup
     */
    public function getAttributeName()
    {
        return 'UnifiedGroup';
    }
}
