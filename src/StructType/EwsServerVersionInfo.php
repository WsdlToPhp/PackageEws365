<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServerVersionInfo StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsServerVersionInfo extends AbstractStructBase
{
    /**
     * The MajorVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MajorVersion;
    /**
     * The MinorVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MinorVersion;
    /**
     * The MajorBuildNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MajorBuildNumber;
    /**
     * The MinorBuildNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MinorBuildNumber;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * Constructor method for ServerVersionInfo
     * @uses EwsServerVersionInfo::setMajorVersion()
     * @uses EwsServerVersionInfo::setMinorVersion()
     * @uses EwsServerVersionInfo::setMajorBuildNumber()
     * @uses EwsServerVersionInfo::setMinorBuildNumber()
     * @uses EwsServerVersionInfo::setVersion()
     * @param int $majorVersion
     * @param int $minorVersion
     * @param int $majorBuildNumber
     * @param int $minorBuildNumber
     * @param string $version
     */
    public function __construct($majorVersion = null, $minorVersion = null, $majorBuildNumber = null, $minorBuildNumber = null, $version = null)
    {
        $this
            ->setMajorVersion($majorVersion)
            ->setMinorVersion($minorVersion)
            ->setMajorBuildNumber($majorBuildNumber)
            ->setMinorBuildNumber($minorBuildNumber)
            ->setVersion($version);
    }
    /**
     * Get MajorVersion value
     * @return int|null
     */
    public function getMajorVersion()
    {
        return $this->MajorVersion;
    }
    /**
     * Set MajorVersion value
     * @param int $majorVersion
     * @return \Ews\StructType\EwsServerVersionInfo
     */
    public function setMajorVersion($majorVersion = null)
    {
        // validation for constraint: int
        if (!is_null($majorVersion) && !(is_int($majorVersion) || ctype_digit($majorVersion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($majorVersion, true), gettype($majorVersion)), __LINE__);
        }
        $this->MajorVersion = $majorVersion;
        return $this;
    }
    /**
     * Get MinorVersion value
     * @return int|null
     */
    public function getMinorVersion()
    {
        return $this->MinorVersion;
    }
    /**
     * Set MinorVersion value
     * @param int $minorVersion
     * @return \Ews\StructType\EwsServerVersionInfo
     */
    public function setMinorVersion($minorVersion = null)
    {
        // validation for constraint: int
        if (!is_null($minorVersion) && !(is_int($minorVersion) || ctype_digit($minorVersion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minorVersion, true), gettype($minorVersion)), __LINE__);
        }
        $this->MinorVersion = $minorVersion;
        return $this;
    }
    /**
     * Get MajorBuildNumber value
     * @return int|null
     */
    public function getMajorBuildNumber()
    {
        return $this->MajorBuildNumber;
    }
    /**
     * Set MajorBuildNumber value
     * @param int $majorBuildNumber
     * @return \Ews\StructType\EwsServerVersionInfo
     */
    public function setMajorBuildNumber($majorBuildNumber = null)
    {
        // validation for constraint: int
        if (!is_null($majorBuildNumber) && !(is_int($majorBuildNumber) || ctype_digit($majorBuildNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($majorBuildNumber, true), gettype($majorBuildNumber)), __LINE__);
        }
        $this->MajorBuildNumber = $majorBuildNumber;
        return $this;
    }
    /**
     * Get MinorBuildNumber value
     * @return int|null
     */
    public function getMinorBuildNumber()
    {
        return $this->MinorBuildNumber;
    }
    /**
     * Set MinorBuildNumber value
     * @param int $minorBuildNumber
     * @return \Ews\StructType\EwsServerVersionInfo
     */
    public function setMinorBuildNumber($minorBuildNumber = null)
    {
        // validation for constraint: int
        if (!is_null($minorBuildNumber) && !(is_int($minorBuildNumber) || ctype_digit($minorBuildNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minorBuildNumber, true), gettype($minorBuildNumber)), __LINE__);
        }
        $this->MinorBuildNumber = $minorBuildNumber;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Ews\StructType\EwsServerVersionInfo
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
}
