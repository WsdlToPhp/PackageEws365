<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemClassType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfItemClassType extends AbstractStructArrayBase
{
    /**
     * The ItemClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - choice: ItemClass
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $ItemClass;
    /**
     * Constructor method for ArrayOfItemClassType
     * @uses EwsArrayOfItemClassType::setItemClass()
     * @param string $itemClass
     */
    public function __construct($itemClass = null)
    {
        $this
            ->setItemClass($itemClass);
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass()
    {
        return isset($this->ItemClass) ? $this->ItemClass : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItemClass method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemClass method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemClassForChoiceConstraintsFromSetItemClass($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ItemClass can\'t be set as the property %s is already set. Only one property must be set among these properties: ItemClass, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ItemClass value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $itemClass
     * @return \Ews\ArrayType\EwsArrayOfItemClassType
     */
    public function setItemClass($itemClass = null)
    {
        // validation for constraint: string
        if (!is_null($itemClass) && !is_string($itemClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemClass, true), gettype($itemClass)), __LINE__);
        }
        // validation for constraint: choice(ItemClass)
        if ('' !== ($itemClassChoiceErrorMessage = self::validateItemClassForChoiceConstraintsFromSetItemClass($itemClass))) {
            throw new \InvalidArgumentException($itemClassChoiceErrorMessage, __LINE__);
        }
        if (is_null($itemClass) || (is_array($itemClass) && empty($itemClass))) {
            unset($this->ItemClass);
        } else {
            $this->ItemClass = $itemClass;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemClass
     */
    public function getAttributeName()
    {
        return 'ItemClass';
    }
}
