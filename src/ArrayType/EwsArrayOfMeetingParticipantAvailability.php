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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsMeetingParticipantAvailability[]
     */
    public $MeetingParticipantAvailability;
    /**
     * Constructor method for ArrayOfMeetingParticipantAvailability
     * @uses
     * EwsArrayOfMeetingParticipantAvailability::setMeetingParticipantAvailability()
     * @param \Ews\StructType\EwsMeetingParticipantAvailability[]
     * $meetingParticipantAvailability
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
     * Set MeetingParticipantAvailability value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingParticipantAvailability[]
     * $meetingParticipantAvailability
     * @return \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function setMeetingParticipantAvailability(array $meetingParticipantAvailability = array())
    {
        foreach ($meetingParticipantAvailability as $arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem instanceof \Ews\StructType\EwsMeetingParticipantAvailability) {
                throw new \InvalidArgumentException(sprintf('The MeetingParticipantAvailability property can only contain items of \Ews\StructType\EwsMeetingParticipantAvailability, "%s" given', is_object($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) ? get_class($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) : gettype($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The MeetingParticipantAvailability property can only contain items of \Ews\StructType\EwsMeetingParticipantAvailability, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
