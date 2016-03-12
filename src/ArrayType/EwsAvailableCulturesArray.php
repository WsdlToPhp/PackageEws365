<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AvailableCulturesArray ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAvailableCulturesArray extends AbstractStructArrayBase
{
    /**
     * The AvailableCulture
     * @var \Ews\StructType\EwsCultureInfoDataType
     */
    public $AvailableCulture;
    /**
     * Constructor method for AvailableCulturesArray
     * @uses EwsAvailableCulturesArray::setAvailableCulture()
     * @param \Ews\StructType\EwsCultureInfoDataType $availableCulture
     */
    public function __construct(\Ews\StructType\EwsCultureInfoDataType $availableCulture = null)
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function getAvailableCulture()
    {
        return $this->AvailableCulture;
    }
    /**
     * Set AvailableCulture value
     * @param \Ews\StructType\EwsCultureInfoDataType $availableCulture
     * @return \Ews\ArrayType\EwsAvailableCulturesArray
     */
    public function setAvailableCulture(\Ews\StructType\EwsCultureInfoDataType $availableCulture = null)
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
     * @return \Ews\ArrayType\EwsAvailableCulturesArray
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
