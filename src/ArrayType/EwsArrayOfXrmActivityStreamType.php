<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmActivityStreamType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmActivityStreamType extends AbstractStructArrayBase
{
    /**
     * The Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsXrmActivityStreamType[]
     */
    public $Activity;
    /**
     * Constructor method for ArrayOfXrmActivityStreamType
     * @uses EwsArrayOfXrmActivityStreamType::setActivity()
     * @param \Ews\StructType\EwsXrmActivityStreamType[] $activity
     */
    public function __construct(array $activity = array())
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \Ews\StructType\EwsXrmActivityStreamType[]|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * This method is responsible for validating the values passed to the setActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActivity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActivityForArrayConstraintsFromSetActivity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmActivityStreamTypeActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmActivityStreamTypeActivityItem instanceof \Ews\StructType\EwsXrmActivityStreamType) {
                $invalidValues[] = is_object($arrayOfXrmActivityStreamTypeActivityItem) ? get_class($arrayOfXrmActivityStreamTypeActivityItem) : sprintf('%s(%s)', gettype($arrayOfXrmActivityStreamTypeActivityItem), var_export($arrayOfXrmActivityStreamTypeActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Activity property can only contain items of type \Ews\StructType\EwsXrmActivityStreamType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Activity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmActivityStreamType[] $activity
     * @return \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function setActivity(array $activity = array())
    {
        // validation for constraint: array
        if ('' !== ($activityArrayErrorMessage = self::validateActivityForArrayConstraintsFromSetActivity($activity))) {
            throw new \InvalidArgumentException($activityArrayErrorMessage, __LINE__);
        }
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Add item to Activity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmActivityStreamType $item
     * @return \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function addToActivity(\Ews\StructType\EwsXrmActivityStreamType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsXrmActivityStreamType) {
            throw new \InvalidArgumentException(sprintf('The Activity property can only contain items of type \Ews\StructType\EwsXrmActivityStreamType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Activity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Activity
     */
    public function getAttributeName()
    {
        return 'Activity';
    }
}
