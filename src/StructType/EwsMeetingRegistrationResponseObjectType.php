<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRegistrationResponseObjectType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingRegistrationResponseObjectType extends EwsWellKnownResponseObjectType
{
    /**
     * The ProposedStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ProposedStart;
    /**
     * The ProposedEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ProposedEnd;
    /**
     * Constructor method for MeetingRegistrationResponseObjectType
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedStart()
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedEnd()
     * @param dateTime $proposedStart
     * @param dateTime $proposedEnd
     */
    public function __construct($proposedStart = null, $proposedEnd = null)
    {
        $this
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd);
    }
    /**
     * Get ProposedStart value
     * @return dateTime|null
     */
    public function getProposedStart()
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param dateTime $proposedStart
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedStart($proposedStart = null)
    {
        $this->ProposedStart = $proposedStart;
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return dateTime|null
     */
    public function getProposedEnd()
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param dateTime $proposedEnd
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedEnd($proposedEnd = null)
    {
        $this->ProposedEnd = $proposedEnd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
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
