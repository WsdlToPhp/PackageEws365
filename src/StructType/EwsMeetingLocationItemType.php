<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingLocationItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMeetingLocationItemType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The PostalAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPersonaPostalAddressType
     */
    public $PostalAddress;
    /**
     * The StartTimeInUTC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var dateTime
     */
    public $StartTimeInUTC;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Source;
    /**
     * The Capacity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Capacity;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $Score;
    /**
     * Constructor method for MeetingLocationItemType
     * @uses EwsMeetingLocationItemType::setDisplayName()
     * @uses EwsMeetingLocationItemType::setPostalAddress()
     * @uses EwsMeetingLocationItemType::setStartTimeInUTC()
     * @uses EwsMeetingLocationItemType::setSource()
     * @uses EwsMeetingLocationItemType::setCapacity()
     * @uses EwsMeetingLocationItemType::setScore()
     * @param string $displayName
     * @param \Ews\StructType\EwsPersonaPostalAddressType $postalAddress
     * @param dateTime $startTimeInUTC
     * @param string $source
     * @param int $capacity
     * @param double $score
     */
    public function __construct($displayName = null, \Ews\StructType\EwsPersonaPostalAddressType $postalAddress = null, $startTimeInUTC = null, $source = null, $capacity = null, $score = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setPostalAddress($postalAddress)
            ->setStartTimeInUTC($startTimeInUTC)
            ->setSource($source)
            ->setCapacity($capacity)
            ->setScore($score);
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsMeetingLocationItemType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get PostalAddress value
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function getPostalAddress()
    {
        return $this->PostalAddress;
    }
    /**
     * Set PostalAddress value
     * @param \Ews\StructType\EwsPersonaPostalAddressType $postalAddress
     * @return \Ews\StructType\EwsMeetingLocationItemType
     */
    public function setPostalAddress(\Ews\StructType\EwsPersonaPostalAddressType $postalAddress = null)
    {
        $this->PostalAddress = $postalAddress;
        return $this;
    }
    /**
     * Get StartTimeInUTC value
     * @return dateTime
     */
    public function getStartTimeInUTC()
    {
        return $this->StartTimeInUTC;
    }
    /**
     * Set StartTimeInUTC value
     * @param dateTime $startTimeInUTC
     * @return \Ews\StructType\EwsMeetingLocationItemType
     */
    public function setStartTimeInUTC($startTimeInUTC = null)
    {
        $this->StartTimeInUTC = $startTimeInUTC;
        return $this;
    }
    /**
     * Get Source value
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Ews\StructType\EwsMeetingLocationItemType
     */
    public function setSource($source = null)
    {
        $this->Source = $source;
        return $this;
    }
    /**
     * Get Capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int $capacity
     * @return \Ews\StructType\EwsMeetingLocationItemType
     */
    public function setCapacity($capacity = null)
    {
        $this->Capacity = $capacity;
        return $this;
    }
    /**
     * Get Score value
     * @return double|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param double $score
     * @return \Ews\StructType\EwsMeetingLocationItemType
     */
    public function setScore($score = null)
    {
        $this->Score = $score;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingLocationItemType
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
