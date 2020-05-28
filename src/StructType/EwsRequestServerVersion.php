<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestServerVersion StructType
 * Meta information extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRequestServerVersion extends AbstractStructBase
{
    /**
     * The Version
     * Meta information extracted from the WSDL
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
     * @throws \InvalidArgumentException
     * @param string $version
     * @return \Ews\StructType\EwsRequestServerVersion
     */
    public function setVersion($version = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsExchangeVersionType::valueIsValid($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsExchangeVersionType', is_array($version) ? implode(', ', $version) : var_export($version, true), implode(', ', \Ews\EnumType\EwsExchangeVersionType::getValidValues())), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
}
