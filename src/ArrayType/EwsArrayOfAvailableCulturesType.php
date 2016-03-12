<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailableCulturesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAvailableCulturesType extends AbstractStructArrayBase
{
    /**
     * The AvailableCulture
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCultureInfoDataType[]
     */
    public $AvailableCulture;
    /**
     * Constructor method for ArrayOfAvailableCulturesType
     * @uses EwsArrayOfAvailableCulturesType::setAvailableCulture()
     * @param \Ews\StructType\EwsCultureInfoDataType[] $availableCulture
     */
    public function __construct(array $availableCulture = array())
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return \Ews\StructType\EwsCultureInfoDataType[]|null
     */
    public function getAvailableCulture()
    {
        return $this->AvailableCulture;
    }
    /**
     * Set AvailableCulture value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCultureInfoDataType[] $availableCulture
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function setAvailableCulture(array $availableCulture = array())
    {
        foreach ($availableCulture as $arrayOfAvailableCulturesTypeAvailableCultureItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailableCulturesTypeAvailableCultureItem instanceof \Ews\StructType\EwsCultureInfoDataType) {
                throw new \InvalidArgumentException(sprintf('The AvailableCulture property can only contain items of \Ews\StructType\EwsCultureInfoDataType, "%s" given', is_object($arrayOfAvailableCulturesTypeAvailableCultureItem) ? get_class($arrayOfAvailableCulturesTypeAvailableCultureItem) : gettype($arrayOfAvailableCulturesTypeAvailableCultureItem)), __LINE__);
            }
        }
        $this->AvailableCulture = $availableCulture;
        return $this;
    }
    /**
     * Add item to AvailableCulture value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCultureInfoDataType $item
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function addToAvailableCulture(\Ews\StructType\EwsCultureInfoDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCultureInfoDataType) {
            throw new \InvalidArgumentException(sprintf('The AvailableCulture property can only contain items of \Ews\StructType\EwsCultureInfoDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailableCulture[] = $item;
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
