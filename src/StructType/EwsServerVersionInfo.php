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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MajorVersion;
    /**
     * The MinorVersion
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MinorVersion;
    /**
     * The MajorBuildNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MajorBuildNumber;
    /**
     * The MinorBuildNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MinorBuildNumber;
    /**
     * The Version
     * Meta informations extracted from the WSDL
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
        if (!is_null($majorVersion) && !is_int($majorVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($majorVersion)), __LINE__);
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
        if (!is_null($minorVersion) && !is_int($minorVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($minorVersion)), __LINE__);
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
        if (!is_null($majorBuildNumber) && !is_int($majorBuildNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($majorBuildNumber)), __LINE__);
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
        if (!is_null($minorBuildNumber) && !is_int($minorBuildNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($minorBuildNumber)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
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
     * @return \Ews\StructType\EwsServerVersionInfo
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
