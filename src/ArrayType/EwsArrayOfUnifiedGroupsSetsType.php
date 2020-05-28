<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupsSetType[]
     */
    public $UnifiedGroupsSet;
    /**
     * Constructor method for ArrayOfUnifiedGroupsSetsType
     * @uses EwsArrayOfUnifiedGroupsSetsType::setUnifiedGroupsSet()
     * @param \Ews\StructType\EwsUnifiedGroupsSetType[] $unifiedGroupsSet
     */
    public function __construct(array $unifiedGroupsSet = array())
    {
        $this
            ->setUnifiedGroupsSet($unifiedGroupsSet);
    }
    /**
     * Get UnifiedGroupsSet value
     * @return \Ews\StructType\EwsUnifiedGroupsSetType[]|null
     */
    public function getUnifiedGroupsSet()
    {
        return $this->UnifiedGroupsSet;
    }
    /**
     * This method is responsible for validating the values passed to the setUnifiedGroupsSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupsSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnifiedGroupsSetForArrayConstraintsFromSetUnifiedGroupsSet(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem instanceof \Ews\StructType\EwsUnifiedGroupsSetType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) ? get_class($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem), var_export($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnifiedGroupsSet property can only contain items of type \Ews\StructType\EwsUnifiedGroupsSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupsSetType[] $unifiedGroupsSet
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function setUnifiedGroupsSet(array $unifiedGroupsSet = array())
    {
        // validation for constraint: array
        if ('' !== ($unifiedGroupsSetArrayErrorMessage = self::validateUnifiedGroupsSetForArrayConstraintsFromSetUnifiedGroupsSet($unifiedGroupsSet))) {
            throw new \InvalidArgumentException($unifiedGroupsSetArrayErrorMessage, __LINE__);
        }
        $this->UnifiedGroupsSet = $unifiedGroupsSet;
        return $this;
    }
    /**
     * Add item to UnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupsSetType $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function addToUnifiedGroupsSet(\Ews\StructType\EwsUnifiedGroupsSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupsSetType) {
            throw new \InvalidArgumentException(sprintf('The UnifiedGroupsSet property can only contain items of type \Ews\StructType\EwsUnifiedGroupsSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnifiedGroupsSet[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupsSetType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupsSetType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupsSetType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupsSetType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupsSetType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnifiedGroupsSet
     */
    public function getAttributeName()
    {
        return 'UnifiedGroupsSet';
    }
}
