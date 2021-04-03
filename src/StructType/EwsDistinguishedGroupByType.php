<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistinguishedGroupByType StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows consumers to access standard groupings for FindItem queries. This is in contrast to the arbitrary (custom) groupings available via the t:GroupByType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedGroupByType extends EwsBaseGroupByType
{
    /**
     * The StandardGroupBy
     * @var string|null
     */
    protected ?string $StandardGroupBy = null;
    /**
     * Constructor method for DistinguishedGroupByType
     * @uses EwsDistinguishedGroupByType::setStandardGroupBy()
     * @param string $standardGroupBy
     */
    public function __construct(?string $standardGroupBy = null)
    {
        $this
            ->setStandardGroupBy($standardGroupBy);
    }
    /**
     * Get StandardGroupBy value
     * @return string|null
     */
    public function getStandardGroupBy(): ?string
    {
        return $this->StandardGroupBy;
    }
    /**
     * Set StandardGroupBy value
     * @uses \EnumType\EwsStandardGroupByType::valueIsValid()
     * @uses \EnumType\EwsStandardGroupByType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $standardGroupBy
     * @return \StructType\EwsDistinguishedGroupByType
     */
    public function setStandardGroupBy(?string $standardGroupBy = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsStandardGroupByType::valueIsValid($standardGroupBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsStandardGroupByType', is_array($standardGroupBy) ? implode(', ', $standardGroupBy) : var_export($standardGroupBy, true), implode(', ', \EnumType\EwsStandardGroupByType::getValidValues())), __LINE__);
        }
        $this->StandardGroupBy = $standardGroupBy;
        
        return $this;
    }
}
