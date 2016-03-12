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
     * @var string
     */
    public $ProposedStart;
    /**
     * The ProposedEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedEnd;
    /**
     * Constructor method for MeetingRegistrationResponseObjectType
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedStart()
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedEnd()
     * @param string $proposedStart
     * @param string $proposedEnd
     */
    public function __construct($proposedStart = null, $proposedEnd = null)
    {
        $this
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd);
    }
    /**
     * Get ProposedStart value
     * @return string|null
     */
    public function getProposedStart()
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param string $proposedStart
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedStart($proposedStart = null)
    {
        // validation for constraint: string
        if (!is_null($proposedStart) && !is_string($proposedStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proposedStart)), __LINE__);
        }
        $this->ProposedStart = $proposedStart;
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return string|null
     */
    public function getProposedEnd()
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param string $proposedEnd
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedEnd($proposedEnd = null)
    {
        // validation for constraint: string
        if (!is_null($proposedEnd) && !is_string($proposedEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proposedEnd)), __LINE__);
        }
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
