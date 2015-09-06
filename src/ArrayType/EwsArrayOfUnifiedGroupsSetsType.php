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
     * - documentation: Represents a set of unified groups in a GetUserUnifiedGroup response
     * @var array
     */
    public $UnifiedGroupsSet;
    /**
     * Constructor method for ArrayOfUnifiedGroupsSetsType
     * @uses EwsArrayOfUnifiedGroupsSetsType::setUnifiedGroupsSet()
     * @param array $unifiedGroupsSet
     */
    public function __construct(array $unifiedGroupsSet = array())
    {
        $this
            ->setUnifiedGroupsSet($unifiedGroupsSet);
    }
    /**
     * Get UnifiedGroupsSet value
     * @return array
     */
    public function getUnifiedGroupsSet()
    {
        return $this->UnifiedGroupsSet;
    }
    /**
     * Set UnifiedGroupsSet value
     * @param array $unifiedGroupsSet
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function setUnifiedGroupsSet(array $unifiedGroupsSet = array())
    {
        $this->UnifiedGroupsSet = $unifiedGroupsSet;
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
