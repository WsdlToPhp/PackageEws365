<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPersonaAttributionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPersonaAttributionsType extends AbstractStructArrayBase
{
    /**
     * The Attribution
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPersonaAttributionType[]
     */
    public $Attribution;
    /**
     * Constructor method for ArrayOfPersonaAttributionsType
     * @uses EwsArrayOfPersonaAttributionsType::setAttribution()
     * @param \Ews\StructType\EwsPersonaAttributionType[] $attribution
     */
    public function __construct(array $attribution = array())
    {
        $this
            ->setAttribution($attribution);
    }
    /**
     * Get Attribution value
     * @return \Ews\StructType\EwsPersonaAttributionType[]
     */
    public function getAttribution()
    {
        return $this->Attribution;
    }
    /**
     * Set Attribution value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaAttributionType[] $attribution
     * @return \Ews\ArrayType\EwsArrayOfPersonaAttributionsType
     */
    public function setAttribution(array $attribution = array())
    {
        foreach ($attribution as $arrayOfPersonaAttributionsTypeAttributionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPersonaAttributionsTypeAttributionItem instanceof \Ews\StructType\EwsPersonaAttributionType) {
                throw new \InvalidArgumentException(sprintf('The Attribution property can only contain items of \Ews\StructType\EwsPersonaAttributionType, "%s" given', is_object($arrayOfPersonaAttributionsTypeAttributionItem) ? get_class($arrayOfPersonaAttributionsTypeAttributionItem) : gettype($arrayOfPersonaAttributionsTypeAttributionItem)), __LINE__);
            }
        }
        $this->Attribution = $attribution;
        return $this;
    }
    /**
     * Add item to Attribution value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaAttributionType $item
     * @return \Ews\ArrayType\EwsArrayOfPersonaAttributionsType
     */
    public function addToAttribution(\Ews\StructType\EwsPersonaAttributionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPersonaAttributionType) {
            throw new \InvalidArgumentException(sprintf('The Attribution property can only contain items of \Ews\StructType\EwsPersonaAttributionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribution[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attribution
     */
    public function getAttributeName()
    {
        return 'Attribution';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfPersonaAttributionsType
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
