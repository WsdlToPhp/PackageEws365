<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransitionsGroupsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTransitionsGroupsType extends AbstractStructArrayBase
{
    /**
     * The TransitionsGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsArrayOfTransitionsType[]
     */
    public $TransitionsGroup;
    /**
     * Constructor method for ArrayOfTransitionsGroupsType
     * @uses EwsArrayOfTransitionsGroupsType::setTransitionsGroup()
     * @param \Ews\StructType\EwsArrayOfTransitionsType[] $transitionsGroup
     */
    public function __construct(array $transitionsGroup = array())
    {
        $this
            ->setTransitionsGroup($transitionsGroup);
    }
    /**
     * Get TransitionsGroup value
     * @return \Ews\StructType\EwsArrayOfTransitionsType[]|null
     */
    public function getTransitionsGroup()
    {
        return $this->TransitionsGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setTransitionsGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransitionsGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransitionsGroupForArrayConstraintsFromSetTransitionsGroup(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransitionsGroupsTypeTransitionsGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransitionsGroupsTypeTransitionsGroupItem instanceof \Ews\StructType\EwsArrayOfTransitionsType) {
                $invalidValues[] = is_object($arrayOfTransitionsGroupsTypeTransitionsGroupItem) ? get_class($arrayOfTransitionsGroupsTypeTransitionsGroupItem) : sprintf('%s(%s)', gettype($arrayOfTransitionsGroupsTypeTransitionsGroupItem), var_export($arrayOfTransitionsGroupsTypeTransitionsGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TransitionsGroup property can only contain items of type \Ews\StructType\EwsArrayOfTransitionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TransitionsGroup value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsArrayOfTransitionsType[] $transitionsGroup
     * @return \Ews\ArrayType\EwsArrayOfTransitionsGroupsType
     */
    public function setTransitionsGroup(array $transitionsGroup = array())
    {
        // validation for constraint: array
        if ('' !== ($transitionsGroupArrayErrorMessage = self::validateTransitionsGroupForArrayConstraintsFromSetTransitionsGroup($transitionsGroup))) {
            throw new \InvalidArgumentException($transitionsGroupArrayErrorMessage, __LINE__);
        }
        $this->TransitionsGroup = $transitionsGroup;
        return $this;
    }
    /**
     * Add item to TransitionsGroup value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsArrayOfTransitionsType $item
     * @return \Ews\ArrayType\EwsArrayOfTransitionsGroupsType
     */
    public function addToTransitionsGroup(\Ews\StructType\EwsArrayOfTransitionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsArrayOfTransitionsType) {
            throw new \InvalidArgumentException(sprintf('The TransitionsGroup property can only contain items of type \Ews\StructType\EwsArrayOfTransitionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TransitionsGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TransitionsGroup
     */
    public function getAttributeName()
    {
        return 'TransitionsGroup';
    }
}
