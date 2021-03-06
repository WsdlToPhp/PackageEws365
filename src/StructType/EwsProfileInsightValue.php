<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProfileInsightValue extends EwsInsightValue
{
    /**
     * The FullName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FullName;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Avatar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Avatar;
    /**
     * The JoinedUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $JoinedUtcTicks;
    /**
     * The ProfilePicture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserProfilePicture
     */
    public $ProfilePicture;
    /**
     * The Title
     * Meta information extracted from the WSDL
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
     * @param int $joinedUtcTicks
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
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($avatar) && !is_string($avatar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($avatar, true), gettype($avatar)), __LINE__);
        }
        $this->Avatar = $avatar;
        return $this;
    }
    /**
     * Get JoinedUtcTicks value
     * @return int|null
     */
    public function getJoinedUtcTicks()
    {
        return $this->JoinedUtcTicks;
    }
    /**
     * Set JoinedUtcTicks value
     * @param int $joinedUtcTicks
     * @return \Ews\StructType\EwsProfileInsightValue
     */
    public function setJoinedUtcTicks($joinedUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($joinedUtcTicks) && !(is_int($joinedUtcTicks) || ctype_digit($joinedUtcTicks))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($joinedUtcTicks, true), gettype($joinedUtcTicks)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
}
