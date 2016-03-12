<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBinaryType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBinaryType extends AbstractStructArrayBase
{
    /**
     * The Base64Binary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var base64Binary[]
     */
    public $Base64Binary;
    /**
     * Constructor method for ArrayOfBinaryType
     * @uses EwsArrayOfBinaryType::setBase64Binary()
     * @param base64Binary[] $base64Binary
     */
    public function __construct(array $base64Binary = array())
    {
        $this
            ->setBase64Binary($base64Binary);
    }
    /**
     * Get Base64Binary value
     * @return base64Binary[]|null
     */
    public function getBase64Binary()
    {
        return $this->Base64Binary;
    }
    /**
     * Set Base64Binary value
     * @throws \InvalidArgumentException
     * @param base64Binary[] $base64Binary
     * @return \Ews\ArrayType\EwsArrayOfBinaryType
     */
    public function setBase64Binary(array $base64Binary = array())
    {
        foreach ($base64Binary as $arrayOfBinaryTypeBase64BinaryItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfBinaryTypeBase64BinaryItem)) {
                throw new \InvalidArgumentException(sprintf('The Base64Binary property can only contain items of base64Binary, "%s" given', is_object($arrayOfBinaryTypeBase64BinaryItem) ? get_class($arrayOfBinaryTypeBase64BinaryItem) : gettype($arrayOfBinaryTypeBase64BinaryItem)), __LINE__);
            }
        }
        $this->Base64Binary = $base64Binary;
        return $this;
    }
    /**
     * Add item to Base64Binary value
     * @throws \InvalidArgumentException
     * @param base64Binary $item
     * @return \Ews\ArrayType\EwsArrayOfBinaryType
     */
    public function addToBase64Binary(base64Binary $item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Base64Binary property can only contain items of base64Binary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Base64Binary[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return base64Binary|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return base64Binary|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return base64Binary|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return base64Binary|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return base64Binary|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Base64Binary
     */
    public function getAttributeName()
    {
        return 'Base64Binary';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfBinaryType
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
