<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NormalizedBodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNormalizedBodyType extends AbstractStructBase
{
    /**
     * The NormalizedBodyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $NormalizedBodyType;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The IsTruncated
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $IsTruncated;
    /**
     * Constructor method for NormalizedBodyType
     * @uses EwsNormalizedBodyType::setNormalizedBodyType()
     * @uses EwsNormalizedBodyType::set_()
     * @uses EwsNormalizedBodyType::setIsTruncated()
     * @param string $normalizedBodyType
     * @param string $_
     * @param bool $isTruncated
     */
    public function __construct($normalizedBodyType = null, $_ = null, $isTruncated = null)
    {
        $this
            ->setNormalizedBodyType($normalizedBodyType)
            ->set_($_)
            ->setIsTruncated($isTruncated);
    }
    /**
     * Get NormalizedBodyType value
     * @return string
     */
    public function getNormalizedBodyType()
    {
        return $this->NormalizedBodyType;
    }
    /**
     * Set NormalizedBodyType value
     * @uses \Ews\EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsBodyTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $normalizedBodyType
     * @return \Ews\StructType\EwsNormalizedBodyType
     */
    public function setNormalizedBodyType($normalizedBodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeType::valueIsValid($normalizedBodyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsBodyTypeType', is_array($normalizedBodyType) ? implode(', ', $normalizedBodyType) : var_export($normalizedBodyType, true), implode(', ', \Ews\EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->NormalizedBodyType = $normalizedBodyType;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsNormalizedBodyType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get IsTruncated value
     * @return bool|null
     */
    public function getIsTruncated()
    {
        return $this->IsTruncated;
    }
    /**
     * Set IsTruncated value
     * @param bool $isTruncated
     * @return \Ews\StructType\EwsNormalizedBodyType
     */
    public function setIsTruncated($isTruncated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTruncated) && !is_bool($isTruncated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTruncated, true), gettype($isTruncated)), __LINE__);
        }
        $this->IsTruncated = $isTruncated;
        return $this;
    }
}
