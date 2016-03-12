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
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bodyType, implode(', ', \Ews\EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
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
        $this->IsTruncated = $isTruncated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBodyType
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
