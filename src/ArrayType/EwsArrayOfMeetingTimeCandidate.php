<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMeetingTimeCandidate ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMeetingTimeCandidate extends AbstractStructArrayBase
{
    /**
     * The MeetingTimeCandidate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsMeetingTimeCandidate[]
     */
    protected array $MeetingTimeCandidate = [];
    /**
     * Constructor method for ArrayOfMeetingTimeCandidate
     * @uses EwsArrayOfMeetingTimeCandidate::setMeetingTimeCandidate()
     * @param \StructType\EwsMeetingTimeCandidate[] $meetingTimeCandidate
     */
    public function __construct(array $meetingTimeCandidate = [])
    {
        $this
            ->setMeetingTimeCandidate($meetingTimeCandidate);
    }
    /**
     * Get MeetingTimeCandidate value
     * @return \StructType\EwsMeetingTimeCandidate[]
     */
    public function getMeetingTimeCandidate(): array
    {
        return $this->MeetingTimeCandidate;
    }
    /**
     * This method is responsible for validating the values passed to the setMeetingTimeCandidate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingTimeCandidate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingTimeCandidateForArrayConstraintsFromSetMeetingTimeCandidate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingTimeCandidateMeetingTimeCandidateItem instanceof \StructType\EwsMeetingTimeCandidate) {
                $invalidValues[] = is_object($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) ? get_class($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) : sprintf('%s(%s)', gettype($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem), var_export($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingTimeCandidate property can only contain items of type \StructType\EwsMeetingTimeCandidate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MeetingTimeCandidate value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingTimeCandidate[] $meetingTimeCandidate
     * @return \ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function setMeetingTimeCandidate(array $meetingTimeCandidate = []): self
    {
        // validation for constraint: array
        if ('' !== ($meetingTimeCandidateArrayErrorMessage = self::validateMeetingTimeCandidateForArrayConstraintsFromSetMeetingTimeCandidate($meetingTimeCandidate))) {
            throw new InvalidArgumentException($meetingTimeCandidateArrayErrorMessage, __LINE__);
        }
        $this->MeetingTimeCandidate = $meetingTimeCandidate;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMeetingTimeCandidate|null
     */
    public function current(): ?\StructType\EwsMeetingTimeCandidate
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMeetingTimeCandidate|null
     */
    public function item($index): ?\StructType\EwsMeetingTimeCandidate
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMeetingTimeCandidate|null
     */
    public function first(): ?\StructType\EwsMeetingTimeCandidate
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMeetingTimeCandidate|null
     */
    public function last(): ?\StructType\EwsMeetingTimeCandidate
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMeetingTimeCandidate|null
     */
    public function offsetGet($offset): ?\StructType\EwsMeetingTimeCandidate
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingTimeCandidate $item
     * @return \ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function add(\StructType\EwsMeetingTimeCandidate $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingTimeCandidate
     */
    public function getAttributeName(): string
    {
        return 'MeetingTimeCandidate';
    }
}
