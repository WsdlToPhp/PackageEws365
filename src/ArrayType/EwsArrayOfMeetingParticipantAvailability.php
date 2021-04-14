<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsMeetingParticipantAvailability[]
     */
    protected array $MeetingParticipantAvailability = [];
    /**
     * Constructor method for ArrayOfMeetingParticipantAvailability
     * @uses EwsArrayOfMeetingParticipantAvailability::setMeetingParticipantAvailability()
     * @param \StructType\EwsMeetingParticipantAvailability[] $meetingParticipantAvailability
     */
    public function __construct(array $meetingParticipantAvailability = [])
    {
        $this
            ->setMeetingParticipantAvailability($meetingParticipantAvailability);
    }
    /**
     * Get MeetingParticipantAvailability value
     * @return \StructType\EwsMeetingParticipantAvailability[]
     */
    public function getMeetingParticipantAvailability(): array
    {
        return $this->MeetingParticipantAvailability;
    }
    /**
     * This method is responsible for validating the values passed to the setMeetingParticipantAvailability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingParticipantAvailability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingParticipantAvailabilityForArrayConstraintsFromSetMeetingParticipantAvailability(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem instanceof \StructType\EwsMeetingParticipantAvailability) {
                $invalidValues[] = is_object($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) ? get_class($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem) : sprintf('%s(%s)', gettype($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem), var_export($arrayOfMeetingParticipantAvailabilityMeetingParticipantAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingParticipantAvailability property can only contain items of type \StructType\EwsMeetingParticipantAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MeetingParticipantAvailability value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingParticipantAvailability[] $meetingParticipantAvailability
     * @return \ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function setMeetingParticipantAvailability(array $meetingParticipantAvailability = []): self
    {
        // validation for constraint: array
        if ('' !== ($meetingParticipantAvailabilityArrayErrorMessage = self::validateMeetingParticipantAvailabilityForArrayConstraintsFromSetMeetingParticipantAvailability($meetingParticipantAvailability))) {
            throw new InvalidArgumentException($meetingParticipantAvailabilityArrayErrorMessage, __LINE__);
        }
        $this->MeetingParticipantAvailability = $meetingParticipantAvailability;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMeetingParticipantAvailability|null
     */
    public function current(): ?\StructType\EwsMeetingParticipantAvailability
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMeetingParticipantAvailability|null
     */
    public function item($index): ?\StructType\EwsMeetingParticipantAvailability
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMeetingParticipantAvailability|null
     */
    public function first(): ?\StructType\EwsMeetingParticipantAvailability
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMeetingParticipantAvailability|null
     */
    public function last(): ?\StructType\EwsMeetingParticipantAvailability
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMeetingParticipantAvailability|null
     */
    public function offsetGet($offset): ?\StructType\EwsMeetingParticipantAvailability
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingParticipantAvailability $item
     * @return \ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsMeetingParticipantAvailability) {
            throw new InvalidArgumentException(sprintf('The MeetingParticipantAvailability property can only contain items of type \StructType\EwsMeetingParticipantAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingParticipantAvailability
     */
    public function getAttributeName(): string
    {
        return 'MeetingParticipantAvailability';
    }
}
