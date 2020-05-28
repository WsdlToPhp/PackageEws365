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
     * Meta information extracted from the WSDL
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
        if (!is_null($maxCandidates) && !(is_int($maxCandidates) || ctype_digit($maxCandidates))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCandidates, true), gettype($maxCandidates)), __LINE__);
        }
        $this->MaxCandidates = $maxCandidates;
        return $this;
    }
}
