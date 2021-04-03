<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $MajorVersion = null;
    /**
     * The MinorVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $MinorVersion = null;
    /**
     * The MajorBuildNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $MajorBuildNumber = null;
    /**
     * The MinorBuildNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $MinorBuildNumber = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Version = null;
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
    public function __construct(?int $majorVersion = null, ?int $minorVersion = null, ?int $majorBuildNumber = null, ?int $minorBuildNumber = null, ?string $version = null)
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
    public function getMajorVersion(): ?int
    {
        return $this->MajorVersion;
    }
    /**
     * Set MajorVersion value
     * @param int $majorVersion
     * @return \StructType\EwsServerVersionInfo
     */
    public function setMajorVersion(?int $majorVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($majorVersion) && !(is_int($majorVersion) || ctype_digit($majorVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($majorVersion, true), gettype($majorVersion)), __LINE__);
        }
        $this->MajorVersion = $majorVersion;
        
        return $this;
    }
    /**
     * Get MinorVersion value
     * @return int|null
     */
    public function getMinorVersion(): ?int
    {
        return $this->MinorVersion;
    }
    /**
     * Set MinorVersion value
     * @param int $minorVersion
     * @return \StructType\EwsServerVersionInfo
     */
    public function setMinorVersion(?int $minorVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($minorVersion) && !(is_int($minorVersion) || ctype_digit($minorVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minorVersion, true), gettype($minorVersion)), __LINE__);
        }
        $this->MinorVersion = $minorVersion;
        
        return $this;
    }
    /**
     * Get MajorBuildNumber value
     * @return int|null
     */
    public function getMajorBuildNumber(): ?int
    {
        return $this->MajorBuildNumber;
    }
    /**
     * Set MajorBuildNumber value
     * @param int $majorBuildNumber
     * @return \StructType\EwsServerVersionInfo
     */
    public function setMajorBuildNumber(?int $majorBuildNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($majorBuildNumber) && !(is_int($majorBuildNumber) || ctype_digit($majorBuildNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($majorBuildNumber, true), gettype($majorBuildNumber)), __LINE__);
        }
        $this->MajorBuildNumber = $majorBuildNumber;
        
        return $this;
    }
    /**
     * Get MinorBuildNumber value
     * @return int|null
     */
    public function getMinorBuildNumber(): ?int
    {
        return $this->MinorBuildNumber;
    }
    /**
     * Set MinorBuildNumber value
     * @param int $minorBuildNumber
     * @return \StructType\EwsServerVersionInfo
     */
    public function setMinorBuildNumber(?int $minorBuildNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($minorBuildNumber) && !(is_int($minorBuildNumber) || ctype_digit($minorBuildNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minorBuildNumber, true), gettype($minorBuildNumber)), __LINE__);
        }
        $this->MinorBuildNumber = $minorBuildNumber;
        
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \StructType\EwsServerVersionInfo
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
