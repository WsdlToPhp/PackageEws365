<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfValueAttributionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfValueAttributionsType extends AbstractStructArrayBase
{
    /**
     * The Attribution
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $Attribution;
    /**
     * Constructor method for ArrayOfValueAttributionsType
     * @uses EwsArrayOfValueAttributionsType::setAttribution()
     * @param string[] $attribution
     */
    public function __construct(array $attribution = array())
    {
        $this
            ->setAttribution($attribution);
    }
    /**
     * Get Attribution value
     * @return string[]
     */
    public function getAttribution()
    {
        return $this->Attribution;
    }
    /**
     * Set Attribution value
     * @throws \InvalidArgumentException
     * @param string[] $attribution
     * @return \Ews\ArrayType\EwsArrayOfValueAttributionsType
     */
    public function setAttribution(array $attribution = array())
    {
        foreach ($attribution as $arrayOfValueAttributionsTypeAttributionItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfValueAttributionsTypeAttributionItem)) {
                throw new \InvalidArgumentException(sprintf('The Attribution property can only contain items of string, "%s" given', is_object($arrayOfValueAttributionsTypeAttributionItem) ? get_class($arrayOfValueAttributionsTypeAttributionItem) : gettype($arrayOfValueAttributionsTypeAttributionItem)), __LINE__);
            }
        }
        $this->Attribution = $attribution;
        return $this;
    }
    /**
     * Add item to Attribution value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfValueAttributionsType
     */
    public function addToAttribution($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Attribution property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribution[] = $item;
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
     * @return \Ews\ArrayType\EwsArrayOfValueAttributionsType
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
