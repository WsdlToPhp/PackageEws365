<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMeetingLocation ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMeetingLocation extends AbstractStructArrayBase
{
    /**
     * The MeetingLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMeetingLocation[]
     */
    public $MeetingLocation;
    /**
     * Constructor method for ArrayOfMeetingLocation
     * @uses EwsArrayOfMeetingLocation::setMeetingLocation()
     * @param \Ews\StructType\EwsMeetingLocation[] $meetingLocation
     */
    public function __construct(array $meetingLocation = array())
    {
        $this
            ->setMeetingLocation($meetingLocation);
    }
    /**
     * Get MeetingLocation value
     * @return \Ews\StructType\EwsMeetingLocation[]|null
     */
    public function getMeetingLocation()
    {
        return $this->MeetingLocation;
    }
    /**
     * Set MeetingLocation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingLocation[] $meetingLocation
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocation
     */
    public function setMeetingLocation(array $meetingLocation = array())
    {
        foreach ($meetingLocation as $arrayOfMeetingLocationMeetingLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingLocationMeetingLocationItem instanceof \Ews\StructType\EwsMeetingLocation) {
                throw new \InvalidArgumentException(sprintf('The MeetingLocation property can only contain items of \Ews\StructType\EwsMeetingLocation, "%s" given', is_object($arrayOfMeetingLocationMeetingLocationItem) ? get_class($arrayOfMeetingLocationMeetingLocationItem) : gettype($arrayOfMeetingLocationMeetingLocationItem)), __LINE__);
            }
        }
        $this->MeetingLocation = $meetingLocation;
        return $this;
    }
    /**
     * Add item to MeetingLocation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingLocation $item
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocation
     */
    public function addToMeetingLocation(\Ews\StructType\EwsMeetingLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMeetingLocation) {
            throw new \InvalidArgumentException(sprintf('The MeetingLocation property can only contain items of \Ews\StructType\EwsMeetingLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MeetingLocation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMeetingLocation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMeetingLocation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMeetingLocation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMeetingLocation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMeetingLocation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingLocation
     */
    public function getAttributeName()
    {
        return 'MeetingLocation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocation
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
