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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setMeetingLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingLocationForArrayConstraintsFromSetMeetingLocation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingLocationMeetingLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingLocationMeetingLocationItem instanceof \Ews\StructType\EwsMeetingLocation) {
                $invalidValues[] = is_object($arrayOfMeetingLocationMeetingLocationItem) ? get_class($arrayOfMeetingLocationMeetingLocationItem) : sprintf('%s(%s)', gettype($arrayOfMeetingLocationMeetingLocationItem), var_export($arrayOfMeetingLocationMeetingLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingLocation property can only contain items of type \Ews\StructType\EwsMeetingLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MeetingLocation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingLocation[] $meetingLocation
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocation
     */
    public function setMeetingLocation(array $meetingLocation = array())
    {
        // validation for constraint: array
        if ('' !== ($meetingLocationArrayErrorMessage = self::validateMeetingLocationForArrayConstraintsFromSetMeetingLocation($meetingLocation))) {
            throw new \InvalidArgumentException($meetingLocationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The MeetingLocation property can only contain items of type \Ews\StructType\EwsMeetingLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
