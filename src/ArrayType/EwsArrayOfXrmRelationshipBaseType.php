<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmRelationshipBaseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmRelationshipBaseType extends AbstractStructArrayBase
{
    /**
     * The XrmRelationshipBaseType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsXrmRelationshipBaseType[]
     */
    public $XrmRelationshipBaseType;
    /**
     * Constructor method for ArrayOfXrmRelationshipBaseType
     * @uses EwsArrayOfXrmRelationshipBaseType::setXrmRelationshipBaseType()
     * @param \Ews\StructType\EwsXrmRelationshipBaseType[] $xrmRelationshipBaseType
     */
    public function __construct(array $xrmRelationshipBaseType = array())
    {
        $this
            ->setXrmRelationshipBaseType($xrmRelationshipBaseType);
    }
    /**
     * Get XrmRelationshipBaseType value
     * @return \Ews\StructType\EwsXrmRelationshipBaseType[]|null
     */
    public function getXrmRelationshipBaseType()
    {
        return $this->XrmRelationshipBaseType;
    }
    /**
     * This method is responsible for validating the values passed to the setXrmRelationshipBaseType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXrmRelationshipBaseType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXrmRelationshipBaseTypeForArrayConstraintsFromSetXrmRelationshipBaseType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem instanceof \Ews\StructType\EwsXrmRelationshipBaseType) {
                $invalidValues[] = is_object($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) ? get_class($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem) : sprintf('%s(%s)', gettype($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem), var_export($arrayOfXrmRelationshipBaseTypeXrmRelationshipBaseTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XrmRelationshipBaseType property can only contain items of type \Ews\StructType\EwsXrmRelationshipBaseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set XrmRelationshipBaseType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmRelationshipBaseType[] $xrmRelationshipBaseType
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function setXrmRelationshipBaseType(array $xrmRelationshipBaseType = array())
    {
        // validation for constraint: array
        if ('' !== ($xrmRelationshipBaseTypeArrayErrorMessage = self::validateXrmRelationshipBaseTypeForArrayConstraintsFromSetXrmRelationshipBaseType($xrmRelationshipBaseType))) {
            throw new \InvalidArgumentException($xrmRelationshipBaseTypeArrayErrorMessage, __LINE__);
        }
        $this->XrmRelationshipBaseType = $xrmRelationshipBaseType;
        return $this;
    }
    /**
     * Add item to XrmRelationshipBaseType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmRelationshipBaseType $item
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function addToXrmRelationshipBaseType(\Ews\StructType\EwsXrmRelationshipBaseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsXrmRelationshipBaseType) {
            throw new \InvalidArgumentException(sprintf('The XrmRelationshipBaseType property can only contain items of type \Ews\StructType\EwsXrmRelationshipBaseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->XrmRelationshipBaseType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmRelationshipBaseType
     */
    public function getAttributeName()
    {
        return 'XrmRelationshipBaseType';
    }
}
