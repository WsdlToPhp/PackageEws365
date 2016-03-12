<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUseenDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUseenDataType extends AbstractStructArrayBase
{
    /**
     * The Unseen
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnseenDataType[]
     */
    public $Unseen;
    /**
     * Constructor method for NonEmptyArrayOfUseenDataType
     * @uses EwsNonEmptyArrayOfUseenDataType::setUnseen()
     * @param \Ews\StructType\EwsUnseenDataType[] $unseen
     */
    public function __construct(array $unseen = array())
    {
        $this
            ->setUnseen($unseen);
    }
    /**
     * Get Unseen value
     * @return \Ews\StructType\EwsUnseenDataType[]
     */
    public function getUnseen()
    {
        return $this->Unseen;
    }
    /**
     * Set Unseen value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnseenDataType[] $unseen
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUseenDataType
     */
    public function setUnseen(array $unseen = array())
    {
        foreach ($unseen as $nonEmptyArrayOfUseenDataTypeUnseenItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUseenDataTypeUnseenItem instanceof \Ews\StructType\EwsUnseenDataType) {
                throw new \InvalidArgumentException(sprintf('The Unseen property can only contain items of \Ews\StructType\EwsUnseenDataType, "%s" given', is_object($nonEmptyArrayOfUseenDataTypeUnseenItem) ? get_class($nonEmptyArrayOfUseenDataTypeUnseenItem) : gettype($nonEmptyArrayOfUseenDataTypeUnseenItem)), __LINE__);
            }
        }
        $this->Unseen = $unseen;
        return $this;
    }
    /**
     * Add item to Unseen value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnseenDataType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUseenDataType
     */
    public function addToUnseen(\Ews\StructType\EwsUnseenDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnseenDataType) {
            throw new \InvalidArgumentException(sprintf('The Unseen property can only contain items of \Ews\StructType\EwsUnseenDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Unseen[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Unseen
     */
    public function getAttributeName()
    {
        return 'Unseen';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUseenDataType
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
