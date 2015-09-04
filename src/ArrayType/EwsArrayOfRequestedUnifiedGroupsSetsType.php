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
 * @release 1.0.0
 */
class EwsArrayOfRequestedUnifiedGroupsSetsType extends AbstractStructArrayBase
{
    /**
     * The RequestedUnifiedGroupsSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Represents a set of unified groups in a GetUserUnifiedGroup request
     * @var array
     */
    public $RequestedUnifiedGroupsSet;
    /**
     * Constructor method for ArrayOfRequestedUnifiedGroupsSetsType
     * @uses EwsArrayOfRequestedUnifiedGroupsSetsType::setRequestedUnifiedGroupsSet()
     * @param array $requestedUnifiedGroupsSet
     */
    public function __construct(array $requestedUnifiedGroupsSet = array())
    {
        $this
            ->setRequestedUnifiedGroupsSet($requestedUnifiedGroupsSet);
    }
    /**
     * Get RequestedUnifiedGroupsSet value
     * @return array
     */
    public function getRequestedUnifiedGroupsSet()
    {
        return $this->RequestedUnifiedGroupsSet;
    }
    /**
     * Set RequestedUnifiedGroupsSet value
     * @param array $requestedUnifiedGroupsSet
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
     */
    public function setRequestedUnifiedGroupsSet(array $requestedUnifiedGroupsSet = array())
    {
        $this->RequestedUnifiedGroupsSet = $requestedUnifiedGroupsSet;
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
