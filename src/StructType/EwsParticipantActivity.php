<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $Id;
    /**
     * The CreatedBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CreatedBy;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EndTime;
    /**
     * The ClientVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ClientVersion;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Role;
    /**
     * The MediaType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MediaType;
    /**
     * The MediaDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MediaDetails;
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
    public function __construct($id = null, $createdBy = null, $startTime = null, $endTime = null, $clientVersion = null, $role = null, $mediaType = null, $mediaDetails = null)
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
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (!is_null($id) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($id)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setCreatedBy($createdBy = null)
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get ClientVersion value
     * @return string
     */
    public function getClientVersion()
    {
        return $this->ClientVersion;
    }
    /**
     * Set ClientVersion value
     * @param string $clientVersion
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setClientVersion($clientVersion = null)
    {
        // validation for constraint: string
        if (!is_null($clientVersion) && !is_string($clientVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientVersion)), __LINE__);
        }
        $this->ClientVersion = $clientVersion;
        return $this;
    }
    /**
     * Get Role value
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \Ews\EnumType\EwsParticipantActivityRole::valueIsValid()
     * @uses \Ews\EnumType\EwsParticipantActivityRole::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsParticipantActivityRole::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \Ews\EnumType\EwsParticipantActivityRole::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get MediaType value
     * @return string
     */
    public function getMediaType()
    {
        return $this->MediaType;
    }
    /**
     * Set MediaType value
     * @uses \Ews\EnumType\EwsParticipantActivityMediaType::valueIsValid()
     * @uses \Ews\EnumType\EwsParticipantActivityMediaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mediaType
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setMediaType($mediaType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsParticipantActivityMediaType::valueIsValid($mediaType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mediaType, implode(', ', \Ews\EnumType\EwsParticipantActivityMediaType::getValidValues())), __LINE__);
        }
        $this->MediaType = $mediaType;
        return $this;
    }
    /**
     * Get MediaDetails value
     * @return string|null
     */
    public function getMediaDetails()
    {
        return $this->MediaDetails;
    }
    /**
     * Set MediaDetails value
     * @param string $mediaDetails
     * @return \Ews\StructType\EwsParticipantActivity
     */
    public function setMediaDetails($mediaDetails = null)
    {
        // validation for constraint: string
        if (!is_null($mediaDetails) && !is_string($mediaDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mediaDetails)), __LINE__);
        }
        $this->MediaDetails = $mediaDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsParticipantActivity
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
