<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NormalizedBodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNormalizedBodyType extends AbstractStructBase
{
    /**
     * The NormalizedBodyType
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IsTruncated;
    /**
     * Constructor method for NormalizedBodyType
     * @uses EwsNormalizedBodyType::setNormalizedBodyType()
     * @uses EwsNormalizedBodyType::set_()
     * @uses EwsNormalizedBodyType::setIsTruncated()
     * @param string $normalizedBodyType
     * @param string $_
     * @param boolean $isTruncated
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
     * @param string $normalizedBodyType
     * @return \Ews\StructType\EwsNormalizedBodyType
     */
    public function setNormalizedBodyType($normalizedBodyType = null)
    {
        if (!\Ews\EnumType\EwsBodyTypeType::valueIsValid($normalizedBodyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $normalizedBodyType, implode(', ', \Ews\EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
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
        $this->_ = $_;
        return $this;
    }
    /**
     * Get IsTruncated value
     * @return boolean|null
     */
    public function getIsTruncated()
    {
        return $this->IsTruncated;
    }
    /**
     * Set IsTruncated value
     * @param boolean $isTruncated
     * @return \Ews\StructType\EwsNormalizedBodyType
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
     * @return \Ews\StructType\EwsNormalizedBodyType
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
