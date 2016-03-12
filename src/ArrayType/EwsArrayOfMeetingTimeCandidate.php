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
     * Meta informations extracted from the WSDL
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
     * Set MeetingTimeCandidate value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingTimeCandidate[] $meetingTimeCandidate
     * @return \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function setMeetingTimeCandidate(array $meetingTimeCandidate = array())
    {
        foreach ($meetingTimeCandidate as $arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingTimeCandidateMeetingTimeCandidateItem instanceof \Ews\StructType\EwsMeetingTimeCandidate) {
                throw new \InvalidArgumentException(sprintf('The MeetingTimeCandidate property can only contain items of \Ews\StructType\EwsMeetingTimeCandidate, "%s" given', is_object($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) ? get_class($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem) : gettype($arrayOfMeetingTimeCandidateMeetingTimeCandidateItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The MeetingTimeCandidate property can only contain items of \Ews\StructType\EwsMeetingTimeCandidate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
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
