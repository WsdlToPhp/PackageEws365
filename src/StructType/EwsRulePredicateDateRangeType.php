<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RulePredicateDateRangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Date range type used for the WithinDateRange rule predicate.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRulePredicateDateRangeType extends AbstractStructBase
{
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartDateTime = null;
    /**
     * The EndDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndDateTime = null;
    /**
     * Constructor method for RulePredicateDateRangeType
     * @uses EwsRulePredicateDateRangeType::setStartDateTime()
     * @uses EwsRulePredicateDateRangeType::setEndDateTime()
     * @param string $startDateTime
     * @param string $endDateTime
     */
    public function __construct(?string $startDateTime = null, ?string $endDateTime = null)
    {
        $this
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime);
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \StructType\EwsRulePredicateDateRangeType
     */
    public function setStartDateTime(?string $startDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string|null
     */
    public function getEndDateTime(): ?string
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \StructType\EwsRulePredicateDateRangeType
     */
    public function setEndDateTime(?string $endDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateTime, true), gettype($endDateTime)), __LINE__);
        }
        $this->EndDateTime = $endDateTime;
        
        return $this;
    }
}
