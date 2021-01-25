<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Id;
    /**
     * The SharedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SharedBy;
    /**
     * The ContentLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ContentLocation;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EndTime;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The MediaType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MediaType;
    /**
     * The Acl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Acl;
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
    public function __construct($id = null, $sharedBy = null, $contentLocation = null, $startTime = null, $endTime = null, $type = null, $mediaType = null, $acl = null)
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
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($id) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get SharedBy value
     * @return string
     */
    public function getSharedBy()
    {
        return $this->SharedBy;
    }
    /**
     * Set SharedBy value
     * @param string $sharedBy
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setSharedBy($sharedBy = null)
    {
        // validation for constraint: string
        if (!is_null($sharedBy) && !is_string($sharedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharedBy, true), gettype($sharedBy)), __LINE__);
        }
        $this->SharedBy = $sharedBy;
        return $this;
    }
    /**
     * Get ContentLocation value
     * @return string
     */
    public function getContentLocation()
    {
        return $this->ContentLocation;
    }
    /**
     * Set ContentLocation value
     * @param string $contentLocation
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setContentLocation($contentLocation = null)
    {
        // validation for constraint: string
        if (!is_null($contentLocation) && !is_string($contentLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentLocation, true), gettype($contentLocation)), __LINE__);
        }
        $this->ContentLocation = $contentLocation;
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
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
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
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsContentActivityType::valueIsValid()
     * @uses \Ews\EnumType\EwsContentActivityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContentActivityType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContentActivityType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Ews\EnumType\EwsContentActivityType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @uses \Ews\EnumType\EwsContentActivityMediaType::valueIsValid()
     * @uses \Ews\EnumType\EwsContentActivityMediaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mediaType
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setMediaType($mediaType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContentActivityMediaType::valueIsValid($mediaType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContentActivityMediaType', is_array($mediaType) ? implode(', ', $mediaType) : var_export($mediaType, true), implode(', ', \Ews\EnumType\EwsContentActivityMediaType::getValidValues())), __LINE__);
        }
        $this->MediaType = $mediaType;
        return $this;
    }
    /**
     * Get Acl value
     * @return string
     */
    public function getAcl()
    {
        return $this->Acl;
    }
    /**
     * Set Acl value
     * @uses \Ews\EnumType\EwsContentActivityAcl::valueIsValid()
     * @uses \Ews\EnumType\EwsContentActivityAcl::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $acl
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setAcl($acl = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContentActivityAcl::valueIsValid($acl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContentActivityAcl', is_array($acl) ? implode(', ', $acl) : var_export($acl, true), implode(', ', \Ews\EnumType\EwsContentActivityAcl::getValidValues())), __LINE__);
        }
        $this->Acl = $acl;
        return $this;
    }
}
