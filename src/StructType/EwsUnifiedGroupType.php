<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool
     */
    public $IsFavorite;
    /**
     * The LastVisitedTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastVisitedTimeUtc;
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalDirectoryObjectId;
    /**
     * Constructor method for UnifiedGroupType
     * @uses EwsUnifiedGroupType::setIsFavorite()
     * @uses EwsUnifiedGroupType::setLastVisitedTimeUtc()
     * @uses EwsUnifiedGroupType::setExternalDirectoryObjectId()
     * @param bool $isFavorite
     * @param string $lastVisitedTimeUtc
     * @param string $externalDirectoryObjectId
     */
    public function __construct($isFavorite = null, $lastVisitedTimeUtc = null, $externalDirectoryObjectId = null)
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
    public function getIsFavorite()
    {
        return $this->IsFavorite;
    }
    /**
     * Set IsFavorite value
     * @param bool $isFavorite
     * @return \Ews\StructType\EwsUnifiedGroupType
     */
    public function setIsFavorite($isFavorite = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFavorite) && !is_bool($isFavorite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFavorite, true), gettype($isFavorite)), __LINE__);
        }
        $this->IsFavorite = $isFavorite;
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return string|null
     */
    public function getLastVisitedTimeUtc()
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param string $lastVisitedTimeUtc
     * @return \Ews\StructType\EwsUnifiedGroupType
     */
    public function setLastVisitedTimeUtc($lastVisitedTimeUtc = null)
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTimeUtc) && !is_string($lastVisitedTimeUtc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedTimeUtc, true), gettype($lastVisitedTimeUtc)), __LINE__);
        }
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId()
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \Ews\StructType\EwsUnifiedGroupType
     */
    public function setExternalDirectoryObjectId($externalDirectoryObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }
}
