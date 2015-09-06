<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestServerVersion StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRequestServerVersion extends AbstractStructBase
{
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - fixed: Exchange2013_SP1
     * - use: required
     * @var string
     */
    public $Version;
    /**
     * Constructor method for RequestServerVersion
     * @uses EwsRequestServerVersion::setVersion()
     * @param string $version
     */
    public function __construct($version = null)
    {
        $this
            ->setVersion($version);
    }
    /**
     * Get Version value
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @uses \Ews\EnumType\EwsExchangeVersionType::valueIsValid()
     * @uses \Ews\EnumType\EwsExchangeVersionType::getValidValues()
     * @param string $version
     * @return \Ews\StructType\EwsRequestServerVersion
     */
    public function setVersion($version = null)
    {
        if (!\Ews\EnumType\EwsExchangeVersionType::valueIsValid($version)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $version, implode(', ', \Ews\EnumType\EwsExchangeVersionType::getValidValues())), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRequestServerVersion
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
