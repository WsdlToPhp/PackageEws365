<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberedRecurrenceRangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNumberedRecurrenceRangeType extends EwsRecurrenceRangeBaseType
{
    /**
     * The NumberOfOccurrences
     * @var int|null
     */
    protected ?int $NumberOfOccurrences = null;
    /**
     * Constructor method for NumberedRecurrenceRangeType
     * @uses EwsNumberedRecurrenceRangeType::setNumberOfOccurrences()
     * @param int $numberOfOccurrences
     */
    public function __construct(?int $numberOfOccurrences = null)
    {
        $this
            ->setNumberOfOccurrences($numberOfOccurrences);
    }
    /**
     * Get NumberOfOccurrences value
     * @return int|null
     */
    public function getNumberOfOccurrences(): ?int
    {
        return $this->NumberOfOccurrences;
    }
    /**
     * Set NumberOfOccurrences value
     * @param int $numberOfOccurrences
     * @return \StructType\EwsNumberedRecurrenceRangeType
     */
    public function setNumberOfOccurrences(?int $numberOfOccurrences = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfOccurrences) && !(is_int($numberOfOccurrences) || ctype_digit($numberOfOccurrences))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfOccurrences, true), gettype($numberOfOccurrences)), __LINE__);
        }
        $this->NumberOfOccurrences = $numberOfOccurrences;
        
        return $this;
    }
}
