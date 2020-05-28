<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsMeetingTimeCandidate[]
     */
    public $MeetingTimeCandidate;
    /**
     * Constructor method for ArrayOfMeetingTimeCandidate
     * @uses EwsArrayOfMeetingTimeCandidate::setMeetingTimeCandidate()
     * @param \Ews\StructType\EwsMeetingTimeCandidate[] $meetingTimeCandidate
     */
    public function __construct(array $meetingTimeCandidate = array())
    {
        $this
            ->setMeetingTimeCandidate($meetingTimeCandidate);
    }
    /**
     * Get MeetingTimeCandidate value
     * @return \Ews\StructType\EwsMeetingTimeCandidate[]|null
     */
    public function getMeetingTimeCandidate()
    {
        return $this->MeetingTimeCandidate;
    }
    /**
     * This method is responsible for validating the values passed to the setMeetingTimeCandidate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingTimeCandidate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingTimeCandidateForArrayConstraintsFromSetMeetingTimeCandidate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingTimeCandidateMeetingTimeCandidateItem instanceof \Ews\StructType\EwsMeetingTimeCandidate) {
                $invalidValues[] = is_object($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) ? get_class($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) : sprintf('%s(%s)', gettype($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem), var_export($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingTimeCandidate property can only contain items of type \Ews\StructType\EwsMeetingTimeCandidate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MeetingTimeCandidate value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingTimeCandidate[] $meetingTimeCandidate
     * @return \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function setMeetingTimeCandidate(array $meetingTimeCandidate = array())
    {
        // validation for constraint: array
        if ('' !== ($meetingTimeCandidateArrayErrorMessage = self::validateMeetingTimeCandidateForArrayConstraintsFromSetMeetingTimeCandidate($meetingTimeCandidate))) {
            throw new \InvalidArgumentException($meetingTimeCandidateArrayErrorMessage, __LINE__);
        }
        $this->MeetingTimeCandidate = $meetingTimeCandidate;
        return $this;
    }
    /**
     * Add item to MeetingTimeCandidate value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingTimeCandidate $item
     * @return \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function addToMeetingTimeCandidate(\Ews\StructType\EwsMeetingTimeCandidate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMeetingTimeCandidate) {
            throw new \InvalidArgumentException(sprintf('The MeetingTimeCandidate property can only contain items of type \Ews\StructType\EwsMeetingTimeCandidate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MeetingTimeCandidate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMeetingTimeCandidate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMeetingTimeCandidate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMeetingTimeCandidate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMeetingTimeCandidate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMeetingTimeCandidate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingTimeCandidate
     */
    public function getAttributeName()
    {
        return 'MeetingTimeCandidate';
    }
}
