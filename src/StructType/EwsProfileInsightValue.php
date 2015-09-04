<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsProfileInsightValue extends EwsInsightValue
{
    /**
     * The FullName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FullName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Avatar
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Avatar;
    /**
     * The JoinedUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var long
     */
    public $JoinedUtcTicks;
    /**
     * The ProfilePicture
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserProfilePicture
     */
    public $ProfilePicture;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * Constructor method for ProfileInsightValue
     * @uses EwsProfileInsightValue::setFullName()
     * @uses EwsProfileInsightValue::setFirstName()
     * @uses EwsProfileInsightValue::setLastName()
     * @uses EwsProfileInsightValue::setEmailAddress()
     * @uses EwsProfileInsightValue::setAvatar()
     * @uses EwsProfileInsightValue::setJoinedUtcTicks()
     * @uses EwsProfileInsightValue::setProfilePicture()
     * @uses EwsProfileInsightValue::setTitle()
     * @param string $fullName
     * @param string $firstName
     * @param string $lastName
     * @param string $emailAddress
     * @param string $avatar
     * @param long $joinedUtcTicks
     * @param \Ews\StructType\EwsUserProfilePicture $profilePicture
     * @param string $title
     */
    public function __construct($fullName = null, $firstName = null, $lastName = null, $emailAddress = null, $avatar = null, $joinedUtcTicks = null, \Ews\StructType\EwsUserProfilePicture $profilePicture = null, $title = null)
    {
        $this
            ->setFullName($fullName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmailAddress($emailAddress)
            ->setAvatar($avatar)
            ->setJoinedUtcTicks($joinedUtcTicks)
            ->setProfilePicture($profilePicture)
            ->setTitle($title);
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setFullName($fullName = null)
    {
        $this->FullName = $fullName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setFirstName($firstName = null)
    {
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setLastName($lastName = null)
    {
        $this->LastName = $lastName;
        return $this;
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
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get Avatar value
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->Avatar;
    }
    /**
     * Set Avatar value
     * @param string $avatar
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setAvatar($avatar = null)
    {
        $this->Avatar = $avatar;
        return $this;
    }
    /**
     * Get JoinedUtcTicks value
     * @return long|null
     */
    public function getJoinedUtcTicks()
    {
        return $this->JoinedUtcTicks;
    }
    /**
     * Set JoinedUtcTicks value
     * @param long $joinedUtcTicks
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setJoinedUtcTicks($joinedUtcTicks = null)
    {
        $this->JoinedUtcTicks = $joinedUtcTicks;
        return $this;
    }
    /**
     * Get ProfilePicture value
     * @return \Ews\StructType\EwsUserProfilePicture|null
     */
    public function getProfilePicture()
    {
        return $this->ProfilePicture;
    }
    /**
     * Set ProfilePicture value
     * @param \Ews\StructType\EwsUserProfilePicture $profilePicture
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setProfilePicture(\Ews\StructType\EwsUserProfilePicture $profilePicture = null)
    {
        $this->ProfilePicture = $profilePicture;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setTitle($title = null)
    {
        $this->Title = $title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProfileInsightValue
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
