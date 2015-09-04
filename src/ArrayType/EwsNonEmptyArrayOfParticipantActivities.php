<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfParticipantActivities ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfParticipantActivities extends AbstractStructArrayBase
{
    /**
     * The ParticipantActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var array
     */
    public $ParticipantActivity;
    /**
     * Constructor method for NonEmptyArrayOfParticipantActivities
     * @uses EwsNonEmptyArrayOfParticipantActivities::setParticipantActivity()
     * @param array $participantActivity
     */
    public function __construct(array $participantActivity = array())
    {
        $this
            ->setParticipantActivity($participantActivity);
    }
    /**
     * Get ParticipantActivity value
     * @return array
     */
    public function getParticipantActivity()
    {
        return $this->ParticipantActivity;
    }
    /**
     * Set ParticipantActivity value
     * @param array $participantActivity
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public function setParticipantActivity(array $participantActivity = array())
    {
        $this->ParticipantActivity = $participantActivity;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsParticipantActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParticipantActivity
     */
    public function getAttributeName()
    {
        return 'ParticipantActivity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
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
