<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRequestedUnifiedGroupsSetsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an array of unified groups sets in a GetUserUnifiedGroup request
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRequestedUnifiedGroupsSetsType extends AbstractStructArrayBase
{
    /**
     * The RequestedUnifiedGroupsSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRequestedUnifiedGroupsSetType[]
     */
    public $RequestedUnifiedGroupsSet;
    /**
     * Constructor method for ArrayOfRequestedUnifiedGroupsSetsType
     * @uses EwsArrayOfRequestedUnifiedGroupsSetsType::setRequestedUnifiedGroupsSet()
     * @param \Ews\StructType\EwsRequestedUnifiedGroupsSetType[]
     * $requestedUnifiedGroupsSet
     */
    public function __construct(array $requestedUnifiedGroupsSet = array())
    {
        $this
            ->setRequestedUnifiedGroupsSet($requestedUnifiedGroupsSet);
    }
    /**
     * Get RequestedUnifiedGroupsSet value
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType[]|null
     */
    public function getRequestedUnifiedGroupsSet()
    {
        return $this->RequestedUnifiedGroupsSet;
    }
    /**
     * Set RequestedUnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRequestedUnifiedGroupsSetType[]
     * $requestedUnifiedGroupsSet
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
     */
    public function setRequestedUnifiedGroupsSet(array $requestedUnifiedGroupsSet = array())
    {
        foreach ($requestedUnifiedGroupsSet as $arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem) {
            // validation for constraint: itemType
            if (!$arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem instanceof \Ews\StructType\EwsRequestedUnifiedGroupsSetType) {
                throw new \InvalidArgumentException(sprintf('The RequestedUnifiedGroupsSet property can only contain items of \Ews\StructType\EwsRequestedUnifiedGroupsSetType, "%s" given', is_object($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem) ? get_class($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem) : gettype($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem)), __LINE__);
            }
        }
        $this->RequestedUnifiedGroupsSet = $requestedUnifiedGroupsSet;
        return $this;
    }
    /**
     * Add item to RequestedUnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRequestedUnifiedGroupsSetType $item
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
     */
    public function addToRequestedUnifiedGroupsSet(\Ews\StructType\EwsRequestedUnifiedGroupsSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRequestedUnifiedGroupsSetType) {
            throw new \InvalidArgumentException(sprintf('The RequestedUnifiedGroupsSet property can only contain items of \Ews\StructType\EwsRequestedUnifiedGroupsSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestedUnifiedGroupsSet[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequestedUnifiedGroupsSet
     */
    public function getAttributeName()
    {
        return 'RequestedUnifiedGroupsSet';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
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
