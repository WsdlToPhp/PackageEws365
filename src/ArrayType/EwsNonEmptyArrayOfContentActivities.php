<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfContentActivities ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfContentActivities extends AbstractStructArrayBase
{
    /**
     * The ContentActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsContentActivity[]
     */
    public $ContentActivity;
    /**
     * Constructor method for NonEmptyArrayOfContentActivities
     * @uses EwsNonEmptyArrayOfContentActivities::setContentActivity()
     * @param \Ews\StructType\EwsContentActivity[] $contentActivity
     */
    public function __construct(array $contentActivity = array())
    {
        $this
            ->setContentActivity($contentActivity);
    }
    /**
     * Get ContentActivity value
     * @return \Ews\StructType\EwsContentActivity[]|null
     */
    public function getContentActivity()
    {
        return $this->ContentActivity;
    }
    /**
     * This method is responsible for validating the values passed to the setContentActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContentActivity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentActivityForArrayConstraintsFromSetContentActivity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfContentActivitiesContentActivityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfContentActivitiesContentActivityItem instanceof \Ews\StructType\EwsContentActivity) {
                $invalidValues[] = is_object($nonEmptyArrayOfContentActivitiesContentActivityItem) ? get_class($nonEmptyArrayOfContentActivitiesContentActivityItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfContentActivitiesContentActivityItem), var_export($nonEmptyArrayOfContentActivitiesContentActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContentActivity property can only contain items of type \Ews\StructType\EwsContentActivity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ContentActivity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContentActivity[] $contentActivity
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public function setContentActivity(array $contentActivity = array())
    {
        // validation for constraint: array
        if ('' !== ($contentActivityArrayErrorMessage = self::validateContentActivityForArrayConstraintsFromSetContentActivity($contentActivity))) {
            throw new \InvalidArgumentException($contentActivityArrayErrorMessage, __LINE__);
        }
        $this->ContentActivity = $contentActivity;
        return $this;
    }
    /**
     * Add item to ContentActivity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContentActivity $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public function addToContentActivity(\Ews\StructType\EwsContentActivity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsContentActivity) {
            throw new \InvalidArgumentException(sprintf('The ContentActivity property can only contain items of type \Ews\StructType\EwsContentActivity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ContentActivity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContentActivity
     */
    public function getAttributeName()
    {
        return 'ContentActivity';
    }
}
