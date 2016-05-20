<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimesConstraints extends AbstractStructBase
{
    /**
     * The MaxCandidates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxCandidates;
    /**
     * Constructor method for FindMeetingTimesConstraints
     * @uses EwsFindMeetingTimesConstraints::setMaxCandidates()
     * @param int $maxCandidates
     */
    public function __construct($maxCandidates = null)
    {
        $this
            ->setMaxCandidates($maxCandidates);
    }
    /**
     * Get MaxCandidates value
     * @return int|null
     */
    public function getMaxCandidates()
    {
        return $this->MaxCandidates;
    }
    /**
     * Set MaxCandidates value
     * @param int $maxCandidates
     * @return \Ews\StructType\EwsFindMeetingTimesConstraints
     */
    public function setMaxCandidates($maxCandidates = null)
    {
        // validation for constraint: int
        if (!is_null($maxCandidates) && !is_numeric($maxCandidates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCandidates)), __LINE__);
        }
        $this->MaxCandidates = $maxCandidates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMeetingTimesConstraints
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
