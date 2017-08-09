<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesLocationConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimesLocationConstraints extends AbstractStructBase
{
    /**
     * The LocationEntries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfLocationConstraintItems
     */
    public $LocationEntries;
    /**
     * The IsRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRequired;
    /**
     * The SuggestLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SuggestLocation;
    /**
     * Constructor method for FindMeetingTimesLocationConstraints
     * @uses EwsFindMeetingTimesLocationConstraints::setLocationEntries()
     * @uses EwsFindMeetingTimesLocationConstraints::setIsRequired()
     * @uses EwsFindMeetingTimesLocationConstraints::setSuggestLocation()
     * @param \Ews\ArrayType\EwsArrayOfLocationConstraintItems $locationEntries
     * @param bool $isRequired
     * @param bool $suggestLocation
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfLocationConstraintItems $locationEntries = null, $isRequired = null, $suggestLocation = null)
    {
        $this
            ->setLocationEntries($locationEntries)
            ->setIsRequired($isRequired)
            ->setSuggestLocation($suggestLocation);
    }
    /**
     * Get LocationEntries value
     * @return \Ews\ArrayType\EwsArrayOfLocationConstraintItems|null
     */
    public function getLocationEntries()
    {
        return $this->LocationEntries;
    }
    /**
     * Set LocationEntries value
     * @param \Ews\ArrayType\EwsArrayOfLocationConstraintItems $locationEntries
     * @return \Ews\StructType\EwsFindMeetingTimesLocationConstraints
     */
    public function setLocationEntries(\Ews\ArrayType\EwsArrayOfLocationConstraintItems $locationEntries = null)
    {
        $this->LocationEntries = $locationEntries;
        return $this;
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \Ews\StructType\EwsFindMeetingTimesLocationConstraints
     */
    public function setIsRequired($isRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        return $this;
    }
    /**
     * Get SuggestLocation value
     * @return bool|null
     */
    public function getSuggestLocation()
    {
        return $this->SuggestLocation;
    }
    /**
     * Set SuggestLocation value
     * @param bool $suggestLocation
     * @return \Ews\StructType\EwsFindMeetingTimesLocationConstraints
     */
    public function setSuggestLocation($suggestLocation = null)
    {
        // validation for constraint: boolean
        if (!is_null($suggestLocation) && !is_bool($suggestLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suggestLocation)), __LINE__);
        }
        $this->SuggestLocation = $suggestLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMeetingTimesLocationConstraints
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
