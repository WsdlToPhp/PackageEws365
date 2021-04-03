<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $FullName = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The Avatar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Avatar = null;
    /**
     * The JoinedUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $JoinedUtcTicks = null;
    /**
     * The ProfilePicture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUserProfilePicture|null
     */
    protected ?\StructType\EwsUserProfilePicture $ProfilePicture = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
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
     * @param \StructType\EwsUserProfilePicture $profilePicture
     * @param string $title
     */
    public function __construct(?string $fullName = null, ?string $firstName = null, ?string $lastName = null, ?string $emailAddress = null, ?string $avatar = null, ?int $joinedUtcTicks = null, ?\StructType\EwsUserProfilePicture $profilePicture = null, ?string $title = null)
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
    public function getFullName(): ?string
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \StructType\EwsProfileInsightValue
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->FullName = $fullName;
        
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \StructType\EwsProfileInsightValue
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \StructType\EwsProfileInsightValue
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\EwsProfileInsightValue
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get Avatar value
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->Avatar;
    }
    /**
     * Set Avatar value
     * @param string $avatar
     * @return \StructType\EwsProfileInsightValue
     */
    public function setAvatar(?string $avatar = null): self
    {
        // validation for constraint: string
        if (!is_null($avatar) && !is_string($avatar)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($avatar, true), gettype($avatar)), __LINE__);
        }
        $this->Avatar = $avatar;
        
        return $this;
    }
    /**
     * Get JoinedUtcTicks value
     * @return int|null
     */
    public function getJoinedUtcTicks(): ?int
    {
        return $this->JoinedUtcTicks;
    }
    /**
     * Set JoinedUtcTicks value
     * @param int $joinedUtcTicks
     * @return \StructType\EwsProfileInsightValue
     */
    public function setJoinedUtcTicks(?int $joinedUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($joinedUtcTicks) && !(is_int($joinedUtcTicks) || ctype_digit($joinedUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($joinedUtcTicks, true), gettype($joinedUtcTicks)), __LINE__);
        }
        $this->JoinedUtcTicks = $joinedUtcTicks;
        
        return $this;
    }
    /**
     * Get ProfilePicture value
     * @return \StructType\EwsUserProfilePicture|null
     */
    public function getProfilePicture(): ?\StructType\EwsUserProfilePicture
    {
        return $this->ProfilePicture;
    }
    /**
     * Set ProfilePicture value
     * @param \StructType\EwsUserProfilePicture $profilePicture
     * @return \StructType\EwsProfileInsightValue
     */
    public function setProfilePicture(?\StructType\EwsUserProfilePicture $profilePicture = null): self
    {
        $this->ProfilePicture = $profilePicture;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\EwsProfileInsightValue
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
}
