<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupsSetsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an array of unified groups sets in a GetUserUnifiedGroups response
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupsSetsType extends AbstractStructArrayBase
{
    /**
     * The UnifiedGroupsSet
     * Meta informations extracted from the WSDL
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
     * Set UnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupsSetType[] $unifiedGroupsSet
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function setUnifiedGroupsSet(array $unifiedGroupsSet = array())
    {
        foreach ($unifiedGroupsSet as $arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem instanceof \Ews\StructType\EwsUnifiedGroupsSetType) {
                throw new \InvalidArgumentException(sprintf('The UnifiedGroupsSet property can only contain items of \Ews\StructType\EwsUnifiedGroupsSetType, "%s" given', is_object($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) ? get_class($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem) : gettype($arrayOfUnifiedGroupsSetsTypeUnifiedGroupsSetItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The UnifiedGroupsSet property can only contain items of \Ews\StructType\EwsUnifiedGroupsSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
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
