<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistinguishedGroupByType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allows consumers to access standard groupings for FindItem queries. This is in contrast to the arbitrary (custom) groupings available via the t:GroupByType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedGroupByType extends EwsBaseGroupByType
{
    /**
     * The StandardGroupBy
     * Meta informations extracted from the WSDL
     * - documentation: Represents standard groupings for GroupBy queries.
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
     * @param string $standardGroupBy
     * @return \Ews\StructType\EwsDistinguishedGroupByType
     */
    public function setStandardGroupBy($standardGroupBy = null)
    {
        if (!\Ews\EnumType\EwsStandardGroupByType::valueIsValid($standardGroupBy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $standardGroupBy, implode(', ', \Ews\EnumType\EwsStandardGroupByType::getValidValues())), __LINE__);
        }
        $this->StandardGroupBy = $standardGroupBy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDistinguishedGroupByType
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
