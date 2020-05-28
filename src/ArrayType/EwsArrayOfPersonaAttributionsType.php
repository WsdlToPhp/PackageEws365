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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAttribution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribution method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributionForArrayConstraintsFromSetAttribution(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPersonaAttributionsTypeAttributionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPersonaAttributionsTypeAttributionItem instanceof \Ews\StructType\EwsPersonaAttributionType) {
                $invalidValues[] = is_object($arrayOfPersonaAttributionsTypeAttributionItem) ? get_class($arrayOfPersonaAttributionsTypeAttributionItem) : sprintf('%s(%s)', gettype($arrayOfPersonaAttributionsTypeAttributionItem), var_export($arrayOfPersonaAttributionsTypeAttributionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribution property can only contain items of type \Ews\StructType\EwsPersonaAttributionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attribution value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaAttributionType[] $attribution
     * @return \Ews\ArrayType\EwsArrayOfPersonaAttributionsType
     */
    public function setAttribution(array $attribution = array())
    {
        // validation for constraint: array
        if ('' !== ($attributionArrayErrorMessage = self::validateAttributionForArrayConstraintsFromSetAttribution($attribution))) {
            throw new \InvalidArgumentException($attributionArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Attribution property can only contain items of type \Ews\StructType\EwsPersonaAttributionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
