<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkHours ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkHours extends AbstractStructArrayBase
{
    /**
     * The WorkHours
     * Meta information extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * @var \Ews\StructType\EwsWorkHoursType[]
     */
    public $WorkHours;
    /**
     * Constructor method for ArrayOfWorkHours
     * @uses EwsArrayOfWorkHours::setWorkHours()
     * @param \Ews\StructType\EwsWorkHoursType[] $workHours
     */
    public function __construct(array $workHours = array())
    {
        $this
            ->setWorkHours($workHours);
    }
    /**
     * Get WorkHours value
     * @return \Ews\StructType\EwsWorkHoursType[]|null
     */
    public function getWorkHours()
    {
        return $this->WorkHours;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkHours method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkHours method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkHoursForArrayConstraintsFromSetWorkHours(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkHoursWorkHoursItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkHoursWorkHoursItem instanceof \Ews\StructType\EwsWorkHoursType) {
                $invalidValues[] = is_object($arrayOfWorkHoursWorkHoursItem) ? get_class($arrayOfWorkHoursWorkHoursItem) : sprintf('%s(%s)', gettype($arrayOfWorkHoursWorkHoursItem), var_export($arrayOfWorkHoursWorkHoursItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkHours property can only contain items of type \Ews\StructType\EwsWorkHoursType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WorkHours value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkHoursType[] $workHours
     * @return \Ews\ArrayType\EwsArrayOfWorkHours
     */
    public function setWorkHours(array $workHours = array())
    {
        // validation for constraint: array
        if ('' !== ($workHoursArrayErrorMessage = self::validateWorkHoursForArrayConstraintsFromSetWorkHours($workHours))) {
            throw new \InvalidArgumentException($workHoursArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($workHours) && count($workHours) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 7', count($workHours)), __LINE__);
        }
        $this->WorkHours = $workHours;
        return $this;
    }
    /**
     * Add item to WorkHours value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkHoursType $item
     * @return \Ews\ArrayType\EwsArrayOfWorkHours
     */
    public function addToWorkHours(\Ews\StructType\EwsWorkHoursType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsWorkHoursType) {
            throw new \InvalidArgumentException(sprintf('The WorkHours property can only contain items of type \Ews\StructType\EwsWorkHoursType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($this->WorkHours) && count($this->WorkHours) >= 7) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 7', count($this->WorkHours)), __LINE__);
        }
        $this->WorkHours[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkHours
     */
    public function getAttributeName()
    {
        return 'WorkHours';
    }
}
