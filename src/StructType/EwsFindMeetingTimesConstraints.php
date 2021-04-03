<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $MaxCandidates = null;
    /**
     * Constructor method for FindMeetingTimesConstraints
     * @uses EwsFindMeetingTimesConstraints::setMaxCandidates()
     * @param int $maxCandidates
     */
    public function __construct(?int $maxCandidates = null)
    {
        $this
            ->setMaxCandidates($maxCandidates);
    }
    /**
     * Get MaxCandidates value
     * @return int|null
     */
    public function getMaxCandidates(): ?int
    {
        return $this->MaxCandidates;
    }
    /**
     * Set MaxCandidates value
     * @param int $maxCandidates
     * @return \StructType\EwsFindMeetingTimesConstraints
     */
    public function setMaxCandidates(?int $maxCandidates = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCandidates) && !(is_int($maxCandidates) || ctype_digit($maxCandidates))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCandidates, true), gettype($maxCandidates)), __LINE__);
        }
        $this->MaxCandidates = $maxCandidates;
        
        return $this;
    }
}
