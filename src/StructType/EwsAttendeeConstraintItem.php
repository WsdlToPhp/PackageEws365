<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttendeeConstraintItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttendeeConstraintItem extends EwsMeetingTimeCandidatesConstraintItem
{
    /**
     * The IsRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRequired = null;
    /**
     * Constructor method for AttendeeConstraintItem
     * @uses EwsAttendeeConstraintItem::setIsRequired()
     * @param bool $isRequired
     */
    public function __construct(?bool $isRequired = null)
    {
        $this
            ->setIsRequired($isRequired);
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \StructType\EwsAttendeeConstraintItem
     */
    public function setIsRequired(?bool $isRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequired, true), gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        
        return $this;
    }
}
