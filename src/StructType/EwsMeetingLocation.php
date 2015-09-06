<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingLocation StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingLocation extends AbstractStructBase
{
    /**
     * The EmailAddress
     * @var string
     */
    public $EmailAddress;
    /**
     * The DisplayName
     * @var string
     */
    public $DisplayName;
    /**
     * Constructor method for MeetingLocation
     * @uses EwsMeetingLocation::setEmailAddress()
     * @uses EwsMeetingLocation::setDisplayName()
     * @param string $emailAddress
     * @param string $displayName
     */
    public function __construct($emailAddress = null, $displayName = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setDisplayName($displayName);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Ews\StructType\EwsMeetingLocation
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsMeetingLocation
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingLocation
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
