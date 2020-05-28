<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueBodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUniqueBodyType extends AbstractStructBase
{
    /**
     * The UniqueBodyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $UniqueBodyType;
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
     * Constructor method for UniqueBodyType
     * @uses EwsUniqueBodyType::setUniqueBodyType()
     * @uses EwsUniqueBodyType::set_()
     * @uses EwsUniqueBodyType::setIsTruncated()
     * @param string $uniqueBodyType
     * @param string $_
     * @param bool $isTruncated
     */
    public function __construct($uniqueBodyType = null, $_ = null, $isTruncated = null)
    {
        $this
            ->setUniqueBodyType($uniqueBodyType)
            ->set_($_)
            ->setIsTruncated($isTruncated);
    }
    /**
     * Get UniqueBodyType value
     * @return string
     */
    public function getUniqueBodyType()
    {
        return $this->UniqueBodyType;
    }
    /**
     * Set UniqueBodyType value
     * @uses \Ews\EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsBodyTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uniqueBodyType
     * @return \Ews\StructType\EwsUniqueBodyType
     */
    public function setUniqueBodyType($uniqueBodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeType::valueIsValid($uniqueBodyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsBodyTypeType', is_array($uniqueBodyType) ? implode(', ', $uniqueBodyType) : var_export($uniqueBodyType, true), implode(', ', \Ews\EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->UniqueBodyType = $uniqueBodyType;
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
     * @return \Ews\StructType\EwsUniqueBodyType
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
     * @return \Ews\StructType\EwsUniqueBodyType
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
