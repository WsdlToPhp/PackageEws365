<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentActivity StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContentActivity extends AbstractStructBase
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
     * The SharedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SharedBy;
    /**
     * The ContentLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ContentLocation;
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
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Type;
    /**
     * The MediaType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MediaType;
    /**
     * The Acl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Acl;
    /**
     * Constructor method for ContentActivity
     * @uses EwsContentActivity::setId()
     * @uses EwsContentActivity::setSharedBy()
     * @uses EwsContentActivity::setContentLocation()
     * @uses EwsContentActivity::setStartTime()
     * @uses EwsContentActivity::setEndTime()
     * @uses EwsContentActivity::setType()
     * @uses EwsContentActivity::setMediaType()
     * @uses EwsContentActivity::setAcl()
     * @param string $id
     * @param string $sharedBy
     * @param string $contentLocation
     * @param string $startTime
     * @param string $endTime
     * @param string $type
     * @param string $mediaType
     * @param string $acl
     */
    public function __construct(string $id, string $sharedBy, string $contentLocation, string $startTime, string $endTime, string $type, string $mediaType, string $acl)
    {
        $this
            ->setId($id)
            ->setSharedBy($sharedBy)
            ->setContentLocation($contentLocation)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setType($type)
            ->setMediaType($mediaType)
            ->setAcl($acl);
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
     * @return \StructType\EwsContentActivity
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
     * Get SharedBy value
     * @return string
     */
    public function getSharedBy(): string
    {
        return $this->SharedBy;
    }
    /**
     * Set SharedBy value
     * @param string $sharedBy
     * @return \StructType\EwsContentActivity
     */
    public function setSharedBy(string $sharedBy): self
    {
        // validation for constraint: string
        if (!is_null($sharedBy) && !is_string($sharedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharedBy, true), gettype($sharedBy)), __LINE__);
        }
        $this->SharedBy = $sharedBy;
        
        return $this;
    }
    /**
     * Get ContentLocation value
     * @return string
     */
    public function getContentLocation(): string
    {
        return $this->ContentLocation;
    }
    /**
     * Set ContentLocation value
     * @param string $contentLocation
     * @return \StructType\EwsContentActivity
     */
    public function setContentLocation(string $contentLocation): self
    {
        // validation for constraint: string
        if (!is_null($contentLocation) && !is_string($contentLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentLocation, true), gettype($contentLocation)), __LINE__);
        }
        $this->ContentLocation = $contentLocation;
        
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
     * @return \StructType\EwsContentActivity
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
     * @return \StructType\EwsContentActivity
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
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsContentActivityType::valueIsValid()
     * @uses \EnumType\EwsContentActivityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsContentActivity
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContentActivityType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContentActivityType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsContentActivityType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
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
     * @uses \EnumType\EwsContentActivityMediaType::valueIsValid()
     * @uses \EnumType\EwsContentActivityMediaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mediaType
     * @return \StructType\EwsContentActivity
     */
    public function setMediaType(string $mediaType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContentActivityMediaType::valueIsValid($mediaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContentActivityMediaType', is_array($mediaType) ? implode(', ', $mediaType) : var_export($mediaType, true), implode(', ', \EnumType\EwsContentActivityMediaType::getValidValues())), __LINE__);
        }
        $this->MediaType = $mediaType;
        
        return $this;
    }
    /**
     * Get Acl value
     * @return string
     */
    public function getAcl(): string
    {
        return $this->Acl;
    }
    /**
     * Set Acl value
     * @uses \EnumType\EwsContentActivityAcl::valueIsValid()
     * @uses \EnumType\EwsContentActivityAcl::getValidValues()
     * @throws InvalidArgumentException
     * @param string $acl
     * @return \StructType\EwsContentActivity
     */
    public function setAcl(string $acl): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContentActivityAcl::valueIsValid($acl)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContentActivityAcl', is_array($acl) ? implode(', ', $acl) : var_export($acl, true), implode(', ', \EnumType\EwsContentActivityAcl::getValidValues())), __LINE__);
        }
        $this->Acl = $acl;
        
        return $this;
    }
}
