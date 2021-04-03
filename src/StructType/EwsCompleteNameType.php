<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteNameType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCompleteNameType extends AbstractStructBase
{
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The MiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MiddleName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The Suffix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Suffix = null;
    /**
     * The Initials
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Initials = null;
    /**
     * The FullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FullName = null;
    /**
     * The Nickname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Nickname = null;
    /**
     * The YomiFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YomiFirstName = null;
    /**
     * The YomiLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YomiLastName = null;
    /**
     * Constructor method for CompleteNameType
     * @uses EwsCompleteNameType::setTitle()
     * @uses EwsCompleteNameType::setFirstName()
     * @uses EwsCompleteNameType::setMiddleName()
     * @uses EwsCompleteNameType::setLastName()
     * @uses EwsCompleteNameType::setSuffix()
     * @uses EwsCompleteNameType::setInitials()
     * @uses EwsCompleteNameType::setFullName()
     * @uses EwsCompleteNameType::setNickname()
     * @uses EwsCompleteNameType::setYomiFirstName()
     * @uses EwsCompleteNameType::setYomiLastName()
     * @param string $title
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $suffix
     * @param string $initials
     * @param string $fullName
     * @param string $nickname
     * @param string $yomiFirstName
     * @param string $yomiLastName
     */
    public function __construct(?string $title = null, ?string $firstName = null, ?string $middleName = null, ?string $lastName = null, ?string $suffix = null, ?string $initials = null, ?string $fullName = null, ?string $nickname = null, ?string $yomiFirstName = null, ?string $yomiLastName = null)
    {
        $this
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setLastName($lastName)
            ->setSuffix($suffix)
            ->setInitials($initials)
            ->setFullName($fullName)
            ->setNickname($nickname)
            ->setYomiFirstName($yomiFirstName)
            ->setYomiLastName($yomiLastName);
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
     * @return \StructType\EwsCompleteNameType
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
     * @return \StructType\EwsCompleteNameType
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
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \StructType\EwsCompleteNameType
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->MiddleName = $middleName;
        
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
     * @return \StructType\EwsCompleteNameType
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
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \StructType\EwsCompleteNameType
     */
    public function setSuffix(?string $suffix = null): self
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suffix, true), gettype($suffix)), __LINE__);
        }
        $this->Suffix = $suffix;
        
        return $this;
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials(): ?string
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $initials
     * @return \StructType\EwsCompleteNameType
     */
    public function setInitials(?string $initials = null): self
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initials, true), gettype($initials)), __LINE__);
        }
        $this->Initials = $initials;
        
        return $this;
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
     * @return \StructType\EwsCompleteNameType
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
     * Get Nickname value
     * @return string|null
     */
    public function getNickname(): ?string
    {
        return $this->Nickname;
    }
    /**
     * Set Nickname value
     * @param string $nickname
     * @return \StructType\EwsCompleteNameType
     */
    public function setNickname(?string $nickname = null): self
    {
        // validation for constraint: string
        if (!is_null($nickname) && !is_string($nickname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nickname, true), gettype($nickname)), __LINE__);
        }
        $this->Nickname = $nickname;
        
        return $this;
    }
    /**
     * Get YomiFirstName value
     * @return string|null
     */
    public function getYomiFirstName(): ?string
    {
        return $this->YomiFirstName;
    }
    /**
     * Set YomiFirstName value
     * @param string $yomiFirstName
     * @return \StructType\EwsCompleteNameType
     */
    public function setYomiFirstName(?string $yomiFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($yomiFirstName) && !is_string($yomiFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yomiFirstName, true), gettype($yomiFirstName)), __LINE__);
        }
        $this->YomiFirstName = $yomiFirstName;
        
        return $this;
    }
    /**
     * Get YomiLastName value
     * @return string|null
     */
    public function getYomiLastName(): ?string
    {
        return $this->YomiLastName;
    }
    /**
     * Set YomiLastName value
     * @param string $yomiLastName
     * @return \StructType\EwsCompleteNameType
     */
    public function setYomiLastName(?string $yomiLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($yomiLastName) && !is_string($yomiLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yomiLastName, true), gettype($yomiLastName)), __LINE__);
        }
        $this->YomiLastName = $yomiLastName;
        
        return $this;
    }
}
