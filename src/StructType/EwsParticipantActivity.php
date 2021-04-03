<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParticipantActivity StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsParticipantActivity extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $Id;
    /**
     * The CreatedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $CreatedBy;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EndTime;
    /**
     * The ClientVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ClientVersion;
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Role;
    /**
     * The MediaType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MediaType;
    /**
     * The MediaDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MediaDetails = null;
    /**
     * Constructor method for ParticipantActivity
     * @uses EwsParticipantActivity::setId()
     * @uses EwsParticipantActivity::setCreatedBy()
     * @uses EwsParticipantActivity::setStartTime()
     * @uses EwsParticipantActivity::setEndTime()
     * @uses EwsParticipantActivity::setClientVersion()
     * @uses EwsParticipantActivity::setRole()
     * @uses EwsParticipantActivity::setMediaType()
     * @uses EwsParticipantActivity::setMediaDetails()
     * @param string $id
     * @param string $createdBy
     * @param string $startTime
     * @param string $endTime
     * @param string $clientVersion
     * @param string $role
     * @param string $mediaType
     * @param string $mediaDetails
     */
    public function __construct(string $id, string $createdBy, string $startTime, string $endTime, string $clientVersion, string $role, string $mediaType, ?string $mediaDetails = null)
    {
        $this
            ->setId($id)
            ->setCreatedBy($createdBy)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setClientVersion($clientVersion)
            ->setRole($role)
            ->setMediaType($mediaType)
            ->setMediaDetails($mediaDetails);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsParticipantActivity
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($id) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \StructType\EwsParticipantActivity
     */
    public function setCreatedBy(string $createdBy): self
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsParticipantActivity
     */
    public function setStartTime(string $startTime): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EwsParticipantActivity
     */
    public function setEndTime(string $endTime): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get ClientVersion value
     * @return string
     */
    public function getClientVersion(): string
    {
        return $this->ClientVersion;
    }
    /**
     * Set ClientVersion value
     * @param string $clientVersion
     * @return \StructType\EwsParticipantActivity
     */
    public function setClientVersion(string $clientVersion): self
    {
        // validation for constraint: string
        if (!is_null($clientVersion) && !is_string($clientVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientVersion, true), gettype($clientVersion)), __LINE__);
        }
        $this->ClientVersion = $clientVersion;
        
        return $this;
    }
    /**
     * Get Role value
     * @return string
     */
    public function getRole(): string
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \EnumType\EwsParticipantActivityRole::valueIsValid()
     * @uses \EnumType\EwsParticipantActivityRole::getValidValues()
     * @throws InvalidArgumentException
     * @param string $role
     * @return \StructType\EwsParticipantActivity
     */
    public function setRole(string $role): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsParticipantActivityRole::valueIsValid($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsParticipantActivityRole', is_array($role) ? implode(', ', $role) : var_export($role, true), implode(', ', \EnumType\EwsParticipantActivityRole::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        
        return $this;
    }
    /**
     * Get MediaType value
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->MediaType;
    }
    /**
     * Set MediaType value
     * @uses \EnumType\EwsParticipantActivityMediaType::valueIsValid()
     * @uses \EnumType\EwsParticipantActivityMediaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mediaType
     * @return \StructType\EwsParticipantActivity
     */
    public function setMediaType(string $mediaType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsParticipantActivityMediaType::valueIsValid($mediaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsParticipantActivityMediaType', is_array($mediaType) ? implode(', ', $mediaType) : var_export($mediaType, true), implode(', ', \EnumType\EwsParticipantActivityMediaType::getValidValues())), __LINE__);
        }
        $this->MediaType = $mediaType;
        
        return $this;
    }
    /**
     * Get MediaDetails value
     * @return string|null
     */
    public function getMediaDetails(): ?string
    {
        return $this->MediaDetails;
    }
    /**
     * Set MediaDetails value
     * @param string $mediaDetails
     * @return \StructType\EwsParticipantActivity
     */
    public function setMediaDetails(?string $mediaDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaDetails) && !is_string($mediaDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaDetails, true), gettype($mediaDetails)), __LINE__);
        }
        $this->MediaDetails = $mediaDetails;
        
        return $this;
    }
}
