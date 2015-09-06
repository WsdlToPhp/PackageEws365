<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingInstanceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingInstanceType extends AbstractStructBase
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
     * The ParentGoid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ParentGoid;
    /**
     * The ParticipantActivities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public $ParticipantActivities;
    /**
     * The ContentActivities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public $ContentActivities;
    /**
     * Constructor method for MeetingInstanceType
     * @uses EwsMeetingInstanceType::setId()
     * @uses EwsMeetingInstanceType::setChangeKey()
     * @uses EwsMeetingInstanceType::setVersion()
     * @uses EwsMeetingInstanceType::setJoinUrl()
     * @uses EwsMeetingInstanceType::setDateTimeCreated()
     * @uses EwsMeetingInstanceType::setDateTimeModified()
     * @uses EwsMeetingInstanceType::setMeadata()
     * @uses EwsMeetingInstanceType::setTag()
     * @uses EwsMeetingInstanceType::setParentGoid()
     * @uses EwsMeetingInstanceType::setParticipantActivities()
     * @uses EwsMeetingInstanceType::setContentActivities()
     * @param string $id
     * @param string $changeKey
     * @param string $version
     * @param string $joinUrl
     * @param string $dateTimeCreated
     * @param string $dateTimeModified
     * @param string $meadata
     * @param string $tag
     * @param string $parentGoid
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     * $participantActivities
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities
     */
    public function __construct($id = null, $changeKey = null, $version = null, $joinUrl = null, $dateTimeCreated = null, $dateTimeModified = null, $meadata = null, $tag = null, $parentGoid = null, \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivities = null, \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities = null)
    {
        $this
            ->setId($id)
            ->setChangeKey($changeKey)
            ->setVersion($version)
            ->setJoinUrl($joinUrl)
            ->setDateTimeCreated($dateTimeCreated)
            ->setDateTimeModified($dateTimeModified)
            ->setMeadata($meadata)
            ->setTag($tag)
            ->setParentGoid($parentGoid)
            ->setParticipantActivities($participantActivities)
            ->setContentActivities($contentActivities);
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
     * @return \Ews\StructType\EwsMeetingInstanceType
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
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function setChangeKey($changeKey = null)
    {
        $this->ChangeKey = $changeKey;
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
     * @return \Ews\StructType\EwsMeetingInstanceType
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
     * @return \Ews\StructType\EwsMeetingInstanceType
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
     * @return \Ews\StructType\EwsMeetingInstanceType
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
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function setDateTimeModified($dateTimeModified = null)
    {
        $this->DateTimeModified = $dateTimeModified;
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
     * @return \Ews\StructType\EwsMeetingInstanceType
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
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function setTag($tag = null)
    {
        $this->Tag = $tag;
        return $this;
    }
    /**
     * Get ParentGoid value
     * @return string|null
     */
    public function getParentGoid()
    {
        return $this->ParentGoid;
    }
    /**
     * Set ParentGoid value
     * @param string $parentGoid
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function setParentGoid($parentGoid = null)
    {
        $this->ParentGoid = $parentGoid;
        return $this;
    }
    /**
     * Get ParticipantActivities value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities|null
     */
    public function getParticipantActivities()
    {
        return $this->ParticipantActivities;
    }
    /**
     * Set ParticipantActivities value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     * $participantActivities
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function setParticipantActivities(\Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivities = null)
    {
        $this->ParticipantActivities = $participantActivities;
        return $this;
    }
    /**
     * Get ContentActivities value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities|null
     */
    public function getContentActivities()
    {
        return $this->ContentActivities;
    }
    /**
     * Set ContentActivities value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function setContentActivities(\Ews\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities = null)
    {
        $this->ContentActivities = $contentActivities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingInstanceType
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
