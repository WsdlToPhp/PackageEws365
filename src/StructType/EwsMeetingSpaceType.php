<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingSpaceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingSpaceType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The ChangeKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChangeKey;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * The JoinUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $JoinUrl;
    /**
     * The DateTimeCreated
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DateTimeCreated;
    /**
     * The DateTimeModified
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DateTimeModified;
    /**
     * The ExpiryTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryTime;
    /**
     * The Meadata
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Meadata;
    /**
     * The Tag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Tag;
    /**
     * Constructor method for MeetingSpaceType
     * @uses EwsMeetingSpaceType::setId()
     * @uses EwsMeetingSpaceType::setChangeKey()
     * @uses EwsMeetingSpaceType::setType()
     * @uses EwsMeetingSpaceType::setVersion()
     * @uses EwsMeetingSpaceType::setJoinUrl()
     * @uses EwsMeetingSpaceType::setDateTimeCreated()
     * @uses EwsMeetingSpaceType::setDateTimeModified()
     * @uses EwsMeetingSpaceType::setExpiryTime()
     * @uses EwsMeetingSpaceType::setMeadata()
     * @uses EwsMeetingSpaceType::setTag()
     * @param string $id
     * @param string $changeKey
     * @param string $type
     * @param string $version
     * @param string $joinUrl
     * @param string $dateTimeCreated
     * @param string $dateTimeModified
     * @param string $expiryTime
     * @param string $meadata
     * @param string $tag
     */
    public function __construct($id = null, $changeKey = null, $type = null, $version = null, $joinUrl = null, $dateTimeCreated = null, $dateTimeModified = null, $expiryTime = null, $meadata = null, $tag = null)
    {
        $this
            ->setId($id)
            ->setChangeKey($changeKey)
            ->setType($type)
            ->setVersion($version)
            ->setJoinUrl($joinUrl)
            ->setDateTimeCreated($dateTimeCreated)
            ->setDateTimeModified($dateTimeModified)
            ->setExpiryTime($expiryTime)
            ->setMeadata($meadata)
            ->setTag($tag);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ChangeKey value
     * @return string|null
     */
    public function getChangeKey()
    {
        return $this->ChangeKey;
    }
    /**
     * Set ChangeKey value
     * @param string $changeKey
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setChangeKey($changeKey = null)
    {
        $this->ChangeKey = $changeKey;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsMeetingSpaceTypeEnum::valueIsValid()
     * @uses \Ews\EnumType\EwsMeetingSpaceTypeEnum::getValidValues()
     * @param string $type
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setType($type = null)
    {
        if (!\Ews\EnumType\EwsMeetingSpaceTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsMeetingSpaceTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setVersion($version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get JoinUrl value
     * @return string|null
     */
    public function getJoinUrl()
    {
        return $this->JoinUrl;
    }
    /**
     * Set JoinUrl value
     * @param string $joinUrl
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setJoinUrl($joinUrl = null)
    {
        $this->JoinUrl = $joinUrl;
        return $this;
    }
    /**
     * Get DateTimeCreated value
     * @return string|null
     */
    public function getDateTimeCreated()
    {
        return $this->DateTimeCreated;
    }
    /**
     * Set DateTimeCreated value
     * @param string $dateTimeCreated
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setDateTimeCreated($dateTimeCreated = null)
    {
        $this->DateTimeCreated = $dateTimeCreated;
        return $this;
    }
    /**
     * Get DateTimeModified value
     * @return string|null
     */
    public function getDateTimeModified()
    {
        return $this->DateTimeModified;
    }
    /**
     * Set DateTimeModified value
     * @param string $dateTimeModified
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setDateTimeModified($dateTimeModified = null)
    {
        $this->DateTimeModified = $dateTimeModified;
        return $this;
    }
    /**
     * Get ExpiryTime value
     * @return string|null
     */
    public function getExpiryTime()
    {
        return $this->ExpiryTime;
    }
    /**
     * Set ExpiryTime value
     * @param string $expiryTime
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setExpiryTime($expiryTime = null)
    {
        $this->ExpiryTime = $expiryTime;
        return $this;
    }
    /**
     * Get Meadata value
     * @return string|null
     */
    public function getMeadata()
    {
        return $this->Meadata;
    }
    /**
     * Set Meadata value
     * @param string $meadata
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setMeadata($meadata = null)
    {
        $this->Meadata = $meadata;
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function setTag($tag = null)
    {
        $this->Tag = $tag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingSpaceType
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
