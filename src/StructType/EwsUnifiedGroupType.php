<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents a unified group with favorite state
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupType extends EwsUnifiedGroupBaseType
{
    /**
     * The IsFavorite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFavorite = null;
    /**
     * The LastVisitedTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastVisitedTimeUtc = null;
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalDirectoryObjectId = null;
    /**
     * Constructor method for UnifiedGroupType
     * @uses EwsUnifiedGroupType::setIsFavorite()
     * @uses EwsUnifiedGroupType::setLastVisitedTimeUtc()
     * @uses EwsUnifiedGroupType::setExternalDirectoryObjectId()
     * @param bool $isFavorite
     * @param string $lastVisitedTimeUtc
     * @param string $externalDirectoryObjectId
     */
    public function __construct(?bool $isFavorite = null, ?string $lastVisitedTimeUtc = null, ?string $externalDirectoryObjectId = null)
    {
        $this
            ->setIsFavorite($isFavorite)
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc)
            ->setExternalDirectoryObjectId($externalDirectoryObjectId);
    }
    /**
     * Get IsFavorite value
     * @return bool|null
     */
    public function getIsFavorite(): ?bool
    {
        return $this->IsFavorite;
    }
    /**
     * Set IsFavorite value
     * @param bool $isFavorite
     * @return \StructType\EwsUnifiedGroupType
     */
    public function setIsFavorite(?bool $isFavorite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFavorite) && !is_bool($isFavorite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFavorite, true), gettype($isFavorite)), __LINE__);
        }
        $this->IsFavorite = $isFavorite;
        
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return string|null
     */
    public function getLastVisitedTimeUtc(): ?string
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param string $lastVisitedTimeUtc
     * @return \StructType\EwsUnifiedGroupType
     */
    public function setLastVisitedTimeUtc(?string $lastVisitedTimeUtc = null): self
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTimeUtc) && !is_string($lastVisitedTimeUtc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedTimeUtc, true), gettype($lastVisitedTimeUtc)), __LINE__);
        }
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId(): ?string
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \StructType\EwsUnifiedGroupType
     */
    public function setExternalDirectoryObjectId(?string $externalDirectoryObjectId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        
        return $this;
    }
}
