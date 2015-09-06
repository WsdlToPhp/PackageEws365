<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClientExtensionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfClientExtensionsType extends AbstractStructArrayBase
{
    /**
     * The ClientExtension
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $ClientExtension;
    /**
     * Constructor method for ArrayOfClientExtensionsType
     * @uses EwsArrayOfClientExtensionsType::setClientExtension()
     * @param array $clientExtension
     */
    public function __construct(array $clientExtension = array())
    {
        $this
            ->setClientExtension($clientExtension);
    }
    /**
     * Get ClientExtension value
     * @return array
     */
    public function getClientExtension()
    {
        return $this->ClientExtension;
    }
    /**
     * Set ClientExtension value
     * @param array $clientExtension
     * @return \Ews\ArrayType\EwsArrayOfClientExtensionsType
     */
    public function setClientExtension(array $clientExtension = array())
    {
        $this->ClientExtension = $clientExtension;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClientExtension
     */
    public function getAttributeName()
    {
        return 'ClientExtension';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfClientExtensionsType
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
