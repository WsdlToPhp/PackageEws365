<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfParticipantActivities ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfParticipantActivities extends AbstractStructArrayBase
{
    /**
     * The ParticipantActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsParticipantActivity[]
     */
    public $ParticipantActivity;
    /**
     * Constructor method for NonEmptyArrayOfParticipantActivities
     * @uses EwsNonEmptyArrayOfParticipantActivities::setParticipantActivity()
     * @param \Ews\StructType\EwsParticipantActivity[] $participantActivity
     */
    public function __construct(array $participantActivity = array())
    {
        $this
            ->setParticipantActivity($participantActivity);
    }
    /**
     * Get ParticipantActivity value
     * @return \Ews\StructType\EwsParticipantActivity[]|null
     */
    public function getParticipantActivity()
    {
        return $this->ParticipantActivity;
    }
    /**
     * This method is responsible for validating the values passed to the setParticipantActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParticipantActivity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParticipantActivityForArrayConstraintsFromSetParticipantActivity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfParticipantActivitiesParticipantActivityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfParticipantActivitiesParticipantActivityItem instanceof \Ews\StructType\EwsParticipantActivity) {
                $invalidValues[] = is_object($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem) ? get_class($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem), var_export($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParticipantActivity property can only contain items of type \Ews\StructType\EwsParticipantActivity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ParticipantActivity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsParticipantActivity[] $participantActivity
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public function setParticipantActivity(array $participantActivity = array())
    {
        // validation for constraint: array
        if ('' !== ($participantActivityArrayErrorMessage = self::validateParticipantActivityForArrayConstraintsFromSetParticipantActivity($participantActivity))) {
            throw new \InvalidArgumentException($participantActivityArrayErrorMessage, __LINE__);
        }
        $this->ParticipantActivity = $participantActivity;
        return $this;
    }
    /**
     * Add item to ParticipantActivity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsParticipantActivity $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public function addToParticipantActivity(\Ews\StructType\EwsParticipantActivity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsParticipantActivity) {
            throw new \InvalidArgumentException(sprintf('The ParticipantActivity property can only contain items of type \Ews\StructType\EwsParticipantActivity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ParticipantActivity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParticipantActivity
     */
    public function getAttributeName()
    {
        return 'ParticipantActivity';
    }
}
