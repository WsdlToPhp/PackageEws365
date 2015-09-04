<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentActivity StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContentActivity extends AbstractStructBase
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
     * The SharedBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SharedBy;
    /**
     * The ContentLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ContentLocation;
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
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The MediaType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MediaType;
    /**
     * The Acl
     * Meta informations extracted from the WSDL
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
     * @param string $type
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setType($type = null)
    {
        if (!\Ews\EnumType\EwsContentActivityType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsContentActivityType::getValidValues())), __LINE__);
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
     * @param string $mediaType
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setMediaType($mediaType = null)
    {
        if (!\Ews\EnumType\EwsContentActivityMediaType::valueIsValid($mediaType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mediaType, implode(', ', \Ews\EnumType\EwsContentActivityMediaType::getValidValues())), __LINE__);
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
     * @param string $acl
     * @return \Ews\StructType\EwsContentActivity
     */
    public function setAcl($acl = null)
    {
        if (!\Ews\EnumType\EwsContentActivityAcl::valueIsValid($acl)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $acl, implode(', ', \Ews\EnumType\EwsContentActivityAcl::getValidValues())), __LINE__);
        }
        $this->Acl = $acl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContentActivity
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
