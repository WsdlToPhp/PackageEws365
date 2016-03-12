<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPeopleQuerySource ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPeopleQuerySource extends AbstractStructArrayBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $Source;
    /**
     * Constructor method for ArrayOfPeopleQuerySource
     * @uses EwsArrayOfPeopleQuerySource::setSource()
     * @param string[] $source
     */
    public function __construct(array $source = array())
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return string[]
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @throws \InvalidArgumentException
     * @param string[] $source
     * @return \Ews\ArrayType\EwsArrayOfPeopleQuerySource
     */
    public function setSource(array $source = array())
    {
        foreach ($source as $arrayOfPeopleQuerySourceSourceItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfPeopleQuerySourceSourceItem)) {
                throw new \InvalidArgumentException(sprintf('The Source property can only contain items of string, "%s" given', is_object($arrayOfPeopleQuerySourceSourceItem) ? get_class($arrayOfPeopleQuerySourceSourceItem) : gettype($arrayOfPeopleQuerySourceSourceItem)), __LINE__);
            }
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Add item to Source value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfPeopleQuerySource
     */
    public function addToSource($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Source property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Source[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Source
     */
    public function getAttributeName()
    {
        return 'Source';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfPeopleQuerySource
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
