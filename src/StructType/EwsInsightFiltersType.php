<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightFiltersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightFiltersType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Types
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Types = null;
    /**
     * The KeyInsightsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $KeyInsightsOnly = null;
    /**
     * Constructor method for InsightFiltersType
     * @uses EwsInsightFiltersType::setCount()
     * @uses EwsInsightFiltersType::setTypes()
     * @uses EwsInsightFiltersType::setKeyInsightsOnly()
     * @param int $count
     * @param \ArrayType\EwsArrayOfStringsType $types
     * @param bool $keyInsightsOnly
     */
    public function __construct(?int $count = null, ?\ArrayType\EwsArrayOfStringsType $types = null, ?bool $keyInsightsOnly = null)
    {
        $this
            ->setCount($count)
            ->setTypes($types)
            ->setKeyInsightsOnly($keyInsightsOnly);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\EwsInsightFiltersType
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Types value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getTypes(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @param \ArrayType\EwsArrayOfStringsType $types
     * @return \StructType\EwsInsightFiltersType
     */
    public function setTypes(?\ArrayType\EwsArrayOfStringsType $types = null): self
    {
        $this->Types = $types;
        
        return $this;
    }
    /**
     * Get KeyInsightsOnly value
     * @return bool|null
     */
    public function getKeyInsightsOnly(): ?bool
    {
        return $this->KeyInsightsOnly;
    }
    /**
     * Set KeyInsightsOnly value
     * @param bool $keyInsightsOnly
     * @return \StructType\EwsInsightFiltersType
     */
    public function setKeyInsightsOnly(?bool $keyInsightsOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyInsightsOnly) && !is_bool($keyInsightsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyInsightsOnly, true), gettype($keyInsightsOnly)), __LINE__);
        }
        $this->KeyInsightsOnly = $keyInsightsOnly;
        
        return $this;
    }
}
