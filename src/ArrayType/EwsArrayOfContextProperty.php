<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContextProperty ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfContextProperty extends AbstractStructArrayBase
{
    /**
     * The ContextProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsContextPropertyType[]
     */
    public $ContextProperty;
    /**
     * Constructor method for ArrayOfContextProperty
     * @uses EwsArrayOfContextProperty::setContextProperty()
     * @param \Ews\StructType\EwsContextPropertyType[] $contextProperty
     */
    public function __construct(array $contextProperty = array())
    {
        $this
            ->setContextProperty($contextProperty);
    }
    /**
     * Get ContextProperty value
     * @return \Ews\StructType\EwsContextPropertyType[]
     */
    public function getContextProperty()
    {
        return $this->ContextProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setContextProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContextProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextPropertyForArrayConstraintsFromSetContextProperty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContextPropertyContextPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfContextPropertyContextPropertyItem instanceof \Ews\StructType\EwsContextPropertyType) {
                $invalidValues[] = is_object($arrayOfContextPropertyContextPropertyItem) ? get_class($arrayOfContextPropertyContextPropertyItem) : sprintf('%s(%s)', gettype($arrayOfContextPropertyContextPropertyItem), var_export($arrayOfContextPropertyContextPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContextProperty property can only contain items of type \Ews\StructType\EwsContextPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ContextProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContextPropertyType[] $contextProperty
     * @return \Ews\ArrayType\EwsArrayOfContextProperty
     */
    public function setContextProperty(array $contextProperty = array())
    {
        // validation for constraint: array
        if ('' !== ($contextPropertyArrayErrorMessage = self::validateContextPropertyForArrayConstraintsFromSetContextProperty($contextProperty))) {
            throw new \InvalidArgumentException($contextPropertyArrayErrorMessage, __LINE__);
        }
        $this->ContextProperty = $contextProperty;
        return $this;
    }
    /**
     * Add item to ContextProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContextPropertyType $item
     * @return \Ews\ArrayType\EwsArrayOfContextProperty
     */
    public function addToContextProperty(\Ews\StructType\EwsContextPropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsContextPropertyType) {
            throw new \InvalidArgumentException(sprintf('The ContextProperty property can only contain items of type \Ews\StructType\EwsContextPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ContextProperty[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContextProperty
     */
    public function getAttributeName()
    {
        return 'ContextProperty';
    }
}
