<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailableCulturesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfAvailableCulturesType extends AbstractStructArrayBase
{
    /**
     * The AvailableCulture
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $AvailableCulture;
    /**
     * Constructor method for ArrayOfAvailableCulturesType
     * @uses EwsArrayOfAvailableCulturesType::setAvailableCulture()
     * @param array $availableCulture
     */
    public function __construct(array $availableCulture = array())
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return array
     */
    public function getAvailableCulture()
    {
        return $this->AvailableCulture;
    }
    /**
     * Set AvailableCulture value
     * @param array $availableCulture
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function setAvailableCulture(array $availableCulture = array())
    {
        $this->AvailableCulture = $availableCulture;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailableCulture
     */
    public function getAttributeName()
    {
        return 'AvailableCulture';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType
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