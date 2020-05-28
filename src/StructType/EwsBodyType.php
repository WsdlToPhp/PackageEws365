<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBodyType extends AbstractStructBase
{
    /**
     * The BodyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BodyType;
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
     * Constructor method for BodyType
     * @uses EwsBodyType::setBodyType()
     * @uses EwsBodyType::set_()
     * @uses EwsBodyType::setIsTruncated()
     * @param string $bodyType
     * @param string $_
     * @param bool $isTruncated
     */
    public function __construct($bodyType = null, $_ = null, $isTruncated = null)
    {
        $this
            ->setBodyType($bodyType)
            ->set_($_)
            ->setIsTruncated($isTruncated);
    }
    /**
     * Get BodyType value
     * @return string
     */
    public function getBodyType()
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @uses \Ews\EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsBodyTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bodyType
     * @return \Ews\StructType\EwsBodyType
     */
    public function setBodyType($bodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeType::valueIsValid($bodyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsBodyTypeType', is_array($bodyType) ? implode(', ', $bodyType) : var_export($bodyType, true), implode(', ', \Ews\EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->BodyType = $bodyType;
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
     * @return \Ews\StructType\EwsBodyType
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
     * @return \Ews\StructType\EwsBodyType
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
