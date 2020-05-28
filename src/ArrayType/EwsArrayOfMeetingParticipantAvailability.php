<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMeetingParticipantAvailability ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMeetingParticipantAvailability extends AbstractStructArrayBase
{
    /**
     * The MeetingParticipantAvailability
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsMeetingParticipantAvailability[]
     */
    public $MeetingParticipantAvailability;
    /**
     * Constructor method for ArrayOfMeetingParticipantAvailability
     * @uses EwsArrayOfMeetingParticipantAvailability::setMeetingParticipantAvailability()
     * @param \Ews\StructType\EwsMeetingParticipantAvailability[] $meetingParticipantAvailability
     */
    public function __construct(array $meetingParticipantAvailability = array())
    {
        $this
            ->setMeetingParticipantAvailability($meetingParticipantAvailability);
    }
    /**
     * Get MeetingParticipantAvailability value
     * @return \Ews\StructType\EwsMeetingParticipantAvailability[]|null
     */
    public function getMeetingParticipantAvailability()
    {
        return $this->MeetingParticipantAvailability;
    }
    /**
     * This method is responsible for validating the values passed to the setMeetingParticipantAvailability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingParticipantAvailability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingParticipantAvailabilityForArrayConstraintsFromSetMeetingParticipantAvailability(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem instanceof \Ews\StructType\EwsMeetingParticipantAvailability) {
                $invalidValues[] = is_object($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) ? get_class($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) : sprintf('%s(%s)', gettype($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem), var_export($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingParticipantAvailability property can only contain items of type \Ews\StructType\EwsMeetingParticipantAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MeetingParticipantAvailability value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingParticipantAvailability[] $meetingParticipantAvailability
     * @return \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function setMeetingParticipantAvailability(array $meetingParticipantAvailability = array())
    {
        // validation for constraint: array
        if ('' !== ($meetingParticipantAvailabilityArrayErrorMessage = self::validateMeetingParticipantAvailabilityForArrayConstraintsFromSetMeetingParticipantAvailability($meetingParticipantAvailability))) {
            throw new \InvalidArgumentException($meetingParticipantAvailabilityArrayErrorMessage, __LINE__);
        }
        $this->MeetingParticipantAvailability = $meetingParticipantAvailability;
        return $this;
    }
    /**
     * Add item to MeetingParticipantAvailability value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingParticipantAvailability $item
     * @return \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function addToMeetingParticipantAvailability(\Ews\StructType\EwsMeetingParticipantAvailability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMeetingParticipantAvailability) {
            throw new \InvalidArgumentException(sprintf('The MeetingParticipantAvailability property can only contain items of type \Ews\StructType\EwsMeetingParticipantAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MeetingParticipantAvailability[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMeetingParticipantAvailability|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMeetingParticipantAvailability|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMeetingParticipantAvailability|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMeetingParticipantAvailability|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMeetingParticipantAvailability|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingParticipantAvailability
     */
    public function getAttributeName()
    {
        return 'MeetingParticipantAvailability';
    }
}
