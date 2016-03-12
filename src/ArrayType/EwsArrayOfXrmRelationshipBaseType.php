<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmRelationshipBaseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmRelationshipBaseType extends AbstractStructArrayBase
{
    /**
     * The XrmRelationshipBaseType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsXrmRelationshipBaseType[]
     */
    public $XrmRelationshipBaseType;
    /**
     * Constructor method for ArrayOfXrmRelationshipBaseType
     * @uses EwsArrayOfXrmRelationshipBaseType::setXrmRelationshipBaseType()
     * @param \Ews\StructType\EwsXrmRelationshipBaseType[] $xrmRelationshipBaseType
     */
    public function __construct(array $xrmRelationshipBaseType = array())
    {
        $this
            ->setXrmRelationshipBaseType($xrmRelationshipBaseType);
    }
    /**
     * Get XrmRelationshipBaseType value
     * @return \Ews\StructType\EwsXrmRelationshipBaseType[]|null
     */
    public function getXrmRelationshipBaseType()
    {
        return $this->XrmRelationshipBaseType;
    }
    /**
     * Set XrmRelationshipBaseType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmRelationshipBaseType[] $xrmRelationshipBaseType
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function setXrmRelationshipBaseType(array $xrmRelationshipBaseType = array())
    {
        foreach ($xrmRelationshipBaseType as $arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem instanceof \Ews\StructType\EwsXrmRelationshipBaseType) {
                throw new \InvalidArgumentException(sprintf('The XrmRelationshipBaseType property can only contain items of \Ews\StructType\EwsXrmRelationshipBaseType, "%s" given', is_object($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) ? get_class($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) : gettype($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem)), __LINE__);
            }
        }
        $this->XrmRelationshipBaseType = $xrmRelationshipBaseType;
        return $this;
    }
    /**
     * Add item to XrmRelationshipBaseType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmRelationshipBaseType $item
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function addToXrmRelationshipBaseType(\Ews\StructType\EwsXrmRelationshipBaseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsXrmRelationshipBaseType) {
            throw new \InvalidArgumentException(sprintf('The XrmRelationshipBaseType property can only contain items of \Ews\StructType\EwsXrmRelationshipBaseType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->XrmRelationshipBaseType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmRelationshipBaseType
     */
    public function getAttributeName()
    {
        return 'XrmRelationshipBaseType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
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
