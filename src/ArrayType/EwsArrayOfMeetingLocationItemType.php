<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMeetingLocationItemType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMeetingLocationItemType extends AbstractStructArrayBase
{
    /**
     * The MeetingLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMeetingLocationItemType[]
     */
    public $MeetingLocation;
    /**
     * Constructor method for ArrayOfMeetingLocationItemType
     * @uses EwsArrayOfMeetingLocationItemType::setMeetingLocation()
     * @param \Ews\StructType\EwsMeetingLocationItemType[] $meetingLocation
     */
    public function __construct(array $meetingLocation = array())
    {
        $this
            ->setMeetingLocation($meetingLocation);
    }
    /**
     * Get MeetingLocation value
     * @return \Ews\StructType\EwsMeetingLocationItemType[]|null
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
        foreach ($values as $arrayOfMeetingLocationItemTypeMeetingLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingLocationItemTypeMeetingLocationItem instanceof \Ews\StructType\EwsMeetingLocationItemType) {
                $invalidValues[] = is_object($arrayOfMeetingLocationItemTypeMeetingLocationItem) ? get_class($arrayOfMeetingLocationItemTypeMeetingLocationItem) : sprintf('%s(%s)', gettype($arrayOfMeetingLocationItemTypeMeetingLocationItem), var_export($arrayOfMeetingLocationItemTypeMeetingLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingLocation property can only contain items of type \Ews\StructType\EwsMeetingLocationItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MeetingLocation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingLocationItemType[] $meetingLocation
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
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
     * @param \Ews\StructType\EwsMeetingLocationItemType $item
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public function addToMeetingLocation(\Ews\StructType\EwsMeetingLocationItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMeetingLocationItemType) {
            throw new \InvalidArgumentException(sprintf('The MeetingLocation property can only contain items of type \Ews\StructType\EwsMeetingLocationItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MeetingLocation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMeetingLocationItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMeetingLocationItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMeetingLocationItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMeetingLocationItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMeetingLocationItemType|null
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
