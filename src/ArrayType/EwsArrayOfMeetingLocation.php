<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsMeetingLocation[]
     */
    protected array $MeetingLocation = [];
    /**
     * Constructor method for ArrayOfMeetingLocation
     * @uses EwsArrayOfMeetingLocation::setMeetingLocation()
     * @param \StructType\EwsMeetingLocation[] $meetingLocation
     */
    public function __construct(array $meetingLocation = [])
    {
        $this
            ->setMeetingLocation($meetingLocation);
    }
    /**
     * Get MeetingLocation value
     * @return \StructType\EwsMeetingLocation[]
     */
    public function getMeetingLocation(): array
    {
        return $this->MeetingLocation;
    }
    /**
     * This method is responsible for validating the values passed to the setMeetingLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingLocationForArrayConstraintsFromSetMeetingLocation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingLocationMeetingLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingLocationMeetingLocationItem instanceof \StructType\EwsMeetingLocation) {
                $invalidValues[] = is_object($arrayOfMeetingLocationMeetingLocationItem) ? get_class($arrayOfMeetingLocationMeetingLocationItem) : sprintf('%s(%s)', gettype($arrayOfMeetingLocationMeetingLocationItem), var_export($arrayOfMeetingLocationMeetingLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingLocation property can only contain items of type \StructType\EwsMeetingLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MeetingLocation value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingLocation[] $meetingLocation
     * @return \ArrayType\EwsArrayOfMeetingLocation
     */
    public function setMeetingLocation(array $meetingLocation = []): self
    {
        // validation for constraint: array
        if ('' !== ($meetingLocationArrayErrorMessage = self::validateMeetingLocationForArrayConstraintsFromSetMeetingLocation($meetingLocation))) {
            throw new InvalidArgumentException($meetingLocationArrayErrorMessage, __LINE__);
        }
        $this->MeetingLocation = $meetingLocation;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMeetingLocation|null
     */
    public function current(): ?\StructType\EwsMeetingLocation
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMeetingLocation|null
     */
    public function item($index): ?\StructType\EwsMeetingLocation
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMeetingLocation|null
     */
    public function first(): ?\StructType\EwsMeetingLocation
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMeetingLocation|null
     */
    public function last(): ?\StructType\EwsMeetingLocation
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMeetingLocation|null
     */
    public function offsetGet($offset): ?\StructType\EwsMeetingLocation
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingLocation $item
     * @return \ArrayType\EwsArrayOfMeetingLocation
     */
    public function add(\StructType\EwsMeetingLocation $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingLocation
     */
    public function getAttributeName(): string
    {
        return 'MeetingLocation';
    }
}
