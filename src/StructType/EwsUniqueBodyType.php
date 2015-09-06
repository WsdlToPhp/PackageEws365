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
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IsTruncated;
    /**
     * Constructor method for UniqueBodyType
     * @uses EwsUniqueBodyType::setUniqueBodyType()
     * @uses EwsUniqueBodyType::set_()
     * @uses EwsUniqueBodyType::setIsTruncated()
     * @param string $uniqueBodyType
     * @param string $_
     * @param boolean $isTruncated
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
     * @param string $uniqueBodyType
     * @return \Ews\StructType\EwsUniqueBodyType
     */
    public function setUniqueBodyType($uniqueBodyType = null)
    {
        if (!\Ews\EnumType\EwsBodyTypeType::valueIsValid($uniqueBodyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $uniqueBodyType, implode(', ', \Ews\EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
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
     * @return \Ews\StructType\EwsUniqueBodyType
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
     * @return \Ews\StructType\EwsUniqueBodyType
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
