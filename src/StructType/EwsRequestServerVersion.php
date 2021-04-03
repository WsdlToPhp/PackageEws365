<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Version;
    /**
     * Constructor method for RequestServerVersion
     * @uses EwsRequestServerVersion::setVersion()
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this
            ->setVersion($version);
    }
    /**
     * Get Version value
     * @return string
     */
    public function getVersion(): string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @uses \EnumType\EwsExchangeVersionType::valueIsValid()
     * @uses \EnumType\EwsExchangeVersionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $version
     * @return \StructType\EwsRequestServerVersion
     */
    public function setVersion(string $version): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsExchangeVersionType::valueIsValid($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsExchangeVersionType', is_array($version) ? implode(', ', $version) : var_export($version, true), implode(', ', \EnumType\EwsExchangeVersionType::getValidValues())), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
