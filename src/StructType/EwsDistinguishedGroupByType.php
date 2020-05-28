<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $StandardGroupBy;
    /**
     * Constructor method for DistinguishedGroupByType
     * @uses EwsDistinguishedGroupByType::setStandardGroupBy()
     * @param string $standardGroupBy
     */
    public function __construct($standardGroupBy = null)
    {
        $this
            ->setStandardGroupBy($standardGroupBy);
    }
    /**
     * Get StandardGroupBy value
     * @return string|null
     */
    public function getStandardGroupBy()
    {
        return $this->StandardGroupBy;
    }
    /**
     * Set StandardGroupBy value
     * @uses \Ews\EnumType\EwsStandardGroupByType::valueIsValid()
     * @uses \Ews\EnumType\EwsStandardGroupByType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $standardGroupBy
     * @return \Ews\StructType\EwsDistinguishedGroupByType
     */
    public function setStandardGroupBy($standardGroupBy = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsStandardGroupByType::valueIsValid($standardGroupBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsStandardGroupByType', is_array($standardGroupBy) ? implode(', ', $standardGroupBy) : var_export($standardGroupBy, true), implode(', ', \Ews\EnumType\EwsStandardGroupByType::getValidValues())), __LINE__);
        }
        $this->StandardGroupBy = $standardGroupBy;
        return $this;
    }
}
