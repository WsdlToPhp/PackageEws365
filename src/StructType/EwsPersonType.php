<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonType extends AbstractStructBase
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
     * The GivenName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GivenName = null;
    /**
     * The Surname
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Surname = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The SMSNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SMSNumber = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The Alias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Alias = null;
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Department = null;
    /**
     * The LinkedInProfileLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LinkedInProfileLink = null;
    /**
     * The Skills
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSkillInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfSkillInsightValue $Skills = null;
    /**
     * The ProfessionalBiography
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProfessionalBiography = null;
    /**
     * The ManagementChain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfProfileInsightValue $ManagementChain = null;
    /**
     * The DirectReports
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfProfileInsightValue $DirectReports = null;
    /**
     * The Peers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfProfileInsightValue $Peers = null;
    /**
     * The TeamSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TeamSize = null;
    /**
     * The CurrentJob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfJobInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfJobInsightValue $CurrentJob = null;
    /**
     * The Birthday
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Birthday = null;
    /**
     * The Hometown
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Hometown = null;
    /**
     * The CurrentLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrentLocation = null;
    /**
     * The CompanyProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfCompanyInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfCompanyInsightValue $CompanyProfile = null;
    /**
     * The Office
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Office = null;
    /**
     * The Headline
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Headline = null;
    /**
     * The MutualConnections
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfProfileInsightValue $MutualConnections = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The MutualManager
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsProfileInsightValue|null
     */
    protected ?\StructType\EwsProfileInsightValue $MutualManager = null;
    /**
     * The Insights
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfInsight|null
     */
    protected ?\ArrayType\EwsArrayOfInsight $Insights = null;
    /**
     * The UserProfilePicture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUserProfilePicture|null
     */
    protected ?\StructType\EwsUserProfilePicture $UserProfilePicture = null;
    /**
     * Constructor method for PersonType
     * @uses EwsPersonType::setFullName()
     * @uses EwsPersonType::setGivenName()
     * @uses EwsPersonType::setSurname()
     * @uses EwsPersonType::setPhoneNumber()
     * @uses EwsPersonType::setSMSNumber()
     * @uses EwsPersonType::setEmailAddress()
     * @uses EwsPersonType::setAlias()
     * @uses EwsPersonType::setDepartment()
     * @uses EwsPersonType::setLinkedInProfileLink()
     * @uses EwsPersonType::setSkills()
     * @uses EwsPersonType::setProfessionalBiography()
     * @uses EwsPersonType::setManagementChain()
     * @uses EwsPersonType::setDirectReports()
     * @uses EwsPersonType::setPeers()
     * @uses EwsPersonType::setTeamSize()
     * @uses EwsPersonType::setCurrentJob()
     * @uses EwsPersonType::setBirthday()
     * @uses EwsPersonType::setHometown()
     * @uses EwsPersonType::setCurrentLocation()
     * @uses EwsPersonType::setCompanyProfile()
     * @uses EwsPersonType::setOffice()
     * @uses EwsPersonType::setHeadline()
     * @uses EwsPersonType::setMutualConnections()
     * @uses EwsPersonType::setTitle()
     * @uses EwsPersonType::setMutualManager()
     * @uses EwsPersonType::setInsights()
     * @uses EwsPersonType::setUserProfilePicture()
     * @param string $fullName
     * @param string $givenName
     * @param string $surname
     * @param string $phoneNumber
     * @param string $sMSNumber
     * @param string $emailAddress
     * @param string $alias
     * @param string $department
     * @param string $linkedInProfileLink
     * @param \ArrayType\EwsArrayOfSkillInsightValue $skills
     * @param string $professionalBiography
     * @param \ArrayType\EwsArrayOfProfileInsightValue $managementChain
     * @param \ArrayType\EwsArrayOfProfileInsightValue $directReports
     * @param \ArrayType\EwsArrayOfProfileInsightValue $peers
     * @param string $teamSize
     * @param \ArrayType\EwsArrayOfJobInsightValue $currentJob
     * @param string $birthday
     * @param string $hometown
     * @param string $currentLocation
     * @param \ArrayType\EwsArrayOfCompanyInsightValue $companyProfile
     * @param string $office
     * @param string $headline
     * @param \ArrayType\EwsArrayOfProfileInsightValue $mutualConnections
     * @param string $title
     * @param \StructType\EwsProfileInsightValue $mutualManager
     * @param \ArrayType\EwsArrayOfInsight $insights
     * @param \StructType\EwsUserProfilePicture $userProfilePicture
     */
    public function __construct(?string $fullName = null, ?string $givenName = null, ?string $surname = null, ?string $phoneNumber = null, ?string $sMSNumber = null, ?string $emailAddress = null, ?string $alias = null, ?string $department = null, ?string $linkedInProfileLink = null, ?\ArrayType\EwsArrayOfSkillInsightValue $skills = null, ?string $professionalBiography = null, ?\ArrayType\EwsArrayOfProfileInsightValue $managementChain = null, ?\ArrayType\EwsArrayOfProfileInsightValue $directReports = null, ?\ArrayType\EwsArrayOfProfileInsightValue $peers = null, ?string $teamSize = null, ?\ArrayType\EwsArrayOfJobInsightValue $currentJob = null, ?string $birthday = null, ?string $hometown = null, ?string $currentLocation = null, ?\ArrayType\EwsArrayOfCompanyInsightValue $companyProfile = null, ?string $office = null, ?string $headline = null, ?\ArrayType\EwsArrayOfProfileInsightValue $mutualConnections = null, ?string $title = null, ?\StructType\EwsProfileInsightValue $mutualManager = null, ?\ArrayType\EwsArrayOfInsight $insights = null, ?\StructType\EwsUserProfilePicture $userProfilePicture = null)
    {
        $this
            ->setFullName($fullName)
            ->setGivenName($givenName)
            ->setSurname($surname)
            ->setPhoneNumber($phoneNumber)
            ->setSMSNumber($sMSNumber)
            ->setEmailAddress($emailAddress)
            ->setAlias($alias)
            ->setDepartment($department)
            ->setLinkedInProfileLink($linkedInProfileLink)
            ->setSkills($skills)
            ->setProfessionalBiography($professionalBiography)
            ->setManagementChain($managementChain)
            ->setDirectReports($directReports)
            ->setPeers($peers)
            ->setTeamSize($teamSize)
            ->setCurrentJob($currentJob)
            ->setBirthday($birthday)
            ->setHometown($hometown)
            ->setCurrentLocation($currentLocation)
            ->setCompanyProfile($companyProfile)
            ->setOffice($office)
            ->setHeadline($headline)
            ->setMutualConnections($mutualConnections)
            ->setTitle($title)
            ->setMutualManager($mutualManager)
            ->setInsights($insights)
            ->setUserProfilePicture($userProfilePicture);
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
     * @return \StructType\EwsPersonType
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
     * Get GivenName value
     * @return string|null
     */
    public function getGivenName(): ?string
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @param string $givenName
     * @return \StructType\EwsPersonType
     */
    public function setGivenName(?string $givenName = null): self
    {
        // validation for constraint: string
        if (!is_null($givenName) && !is_string($givenName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($givenName, true), gettype($givenName)), __LINE__);
        }
        $this->GivenName = $givenName;
        
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \StructType\EwsPersonType
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \StructType\EwsPersonType
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get SMSNumber value
     * @return string|null
     */
    public function getSMSNumber(): ?string
    {
        return $this->SMSNumber;
    }
    /**
     * Set SMSNumber value
     * @param string $sMSNumber
     * @return \StructType\EwsPersonType
     */
    public function setSMSNumber(?string $sMSNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sMSNumber) && !is_string($sMSNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMSNumber, true), gettype($sMSNumber)), __LINE__);
        }
        $this->SMSNumber = $sMSNumber;
        
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
     * @return \StructType\EwsPersonType
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
     * Get Alias value
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \StructType\EwsPersonType
     */
    public function setAlias(?string $alias = null): self
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \StructType\EwsPersonType
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->Department = $department;
        
        return $this;
    }
    /**
     * Get LinkedInProfileLink value
     * @return string|null
     */
    public function getLinkedInProfileLink(): ?string
    {
        return $this->LinkedInProfileLink;
    }
    /**
     * Set LinkedInProfileLink value
     * @param string $linkedInProfileLink
     * @return \StructType\EwsPersonType
     */
    public function setLinkedInProfileLink(?string $linkedInProfileLink = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedInProfileLink) && !is_string($linkedInProfileLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedInProfileLink, true), gettype($linkedInProfileLink)), __LINE__);
        }
        $this->LinkedInProfileLink = $linkedInProfileLink;
        
        return $this;
    }
    /**
     * Get Skills value
     * @return \ArrayType\EwsArrayOfSkillInsightValue|null
     */
    public function getSkills(): ?\ArrayType\EwsArrayOfSkillInsightValue
    {
        return $this->Skills;
    }
    /**
     * Set Skills value
     * @param \ArrayType\EwsArrayOfSkillInsightValue $skills
     * @return \StructType\EwsPersonType
     */
    public function setSkills(?\ArrayType\EwsArrayOfSkillInsightValue $skills = null): self
    {
        $this->Skills = $skills;
        
        return $this;
    }
    /**
     * Get ProfessionalBiography value
     * @return string|null
     */
    public function getProfessionalBiography(): ?string
    {
        return $this->ProfessionalBiography;
    }
    /**
     * Set ProfessionalBiography value
     * @param string $professionalBiography
     * @return \StructType\EwsPersonType
     */
    public function setProfessionalBiography(?string $professionalBiography = null): self
    {
        // validation for constraint: string
        if (!is_null($professionalBiography) && !is_string($professionalBiography)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professionalBiography, true), gettype($professionalBiography)), __LINE__);
        }
        $this->ProfessionalBiography = $professionalBiography;
        
        return $this;
    }
    /**
     * Get ManagementChain value
     * @return \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getManagementChain(): ?\ArrayType\EwsArrayOfProfileInsightValue
    {
        return $this->ManagementChain;
    }
    /**
     * Set ManagementChain value
     * @param \ArrayType\EwsArrayOfProfileInsightValue $managementChain
     * @return \StructType\EwsPersonType
     */
    public function setManagementChain(?\ArrayType\EwsArrayOfProfileInsightValue $managementChain = null): self
    {
        $this->ManagementChain = $managementChain;
        
        return $this;
    }
    /**
     * Get DirectReports value
     * @return \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getDirectReports(): ?\ArrayType\EwsArrayOfProfileInsightValue
    {
        return $this->DirectReports;
    }
    /**
     * Set DirectReports value
     * @param \ArrayType\EwsArrayOfProfileInsightValue $directReports
     * @return \StructType\EwsPersonType
     */
    public function setDirectReports(?\ArrayType\EwsArrayOfProfileInsightValue $directReports = null): self
    {
        $this->DirectReports = $directReports;
        
        return $this;
    }
    /**
     * Get Peers value
     * @return \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getPeers(): ?\ArrayType\EwsArrayOfProfileInsightValue
    {
        return $this->Peers;
    }
    /**
     * Set Peers value
     * @param \ArrayType\EwsArrayOfProfileInsightValue $peers
     * @return \StructType\EwsPersonType
     */
    public function setPeers(?\ArrayType\EwsArrayOfProfileInsightValue $peers = null): self
    {
        $this->Peers = $peers;
        
        return $this;
    }
    /**
     * Get TeamSize value
     * @return string|null
     */
    public function getTeamSize(): ?string
    {
        return $this->TeamSize;
    }
    /**
     * Set TeamSize value
     * @param string $teamSize
     * @return \StructType\EwsPersonType
     */
    public function setTeamSize(?string $teamSize = null): self
    {
        // validation for constraint: string
        if (!is_null($teamSize) && !is_string($teamSize)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($teamSize, true), gettype($teamSize)), __LINE__);
        }
        $this->TeamSize = $teamSize;
        
        return $this;
    }
    /**
     * Get CurrentJob value
     * @return \ArrayType\EwsArrayOfJobInsightValue|null
     */
    public function getCurrentJob(): ?\ArrayType\EwsArrayOfJobInsightValue
    {
        return $this->CurrentJob;
    }
    /**
     * Set CurrentJob value
     * @param \ArrayType\EwsArrayOfJobInsightValue $currentJob
     * @return \StructType\EwsPersonType
     */
    public function setCurrentJob(?\ArrayType\EwsArrayOfJobInsightValue $currentJob = null): self
    {
        $this->CurrentJob = $currentJob;
        
        return $this;
    }
    /**
     * Get Birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->Birthday;
    }
    /**
     * Set Birthday value
     * @param string $birthday
     * @return \StructType\EwsPersonType
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->Birthday = $birthday;
        
        return $this;
    }
    /**
     * Get Hometown value
     * @return string|null
     */
    public function getHometown(): ?string
    {
        return $this->Hometown;
    }
    /**
     * Set Hometown value
     * @param string $hometown
     * @return \StructType\EwsPersonType
     */
    public function setHometown(?string $hometown = null): self
    {
        // validation for constraint: string
        if (!is_null($hometown) && !is_string($hometown)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hometown, true), gettype($hometown)), __LINE__);
        }
        $this->Hometown = $hometown;
        
        return $this;
    }
    /**
     * Get CurrentLocation value
     * @return string|null
     */
    public function getCurrentLocation(): ?string
    {
        return $this->CurrentLocation;
    }
    /**
     * Set CurrentLocation value
     * @param string $currentLocation
     * @return \StructType\EwsPersonType
     */
    public function setCurrentLocation(?string $currentLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($currentLocation) && !is_string($currentLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentLocation, true), gettype($currentLocation)), __LINE__);
        }
        $this->CurrentLocation = $currentLocation;
        
        return $this;
    }
    /**
     * Get CompanyProfile value
     * @return \ArrayType\EwsArrayOfCompanyInsightValue|null
     */
    public function getCompanyProfile(): ?\ArrayType\EwsArrayOfCompanyInsightValue
    {
        return $this->CompanyProfile;
    }
    /**
     * Set CompanyProfile value
     * @param \ArrayType\EwsArrayOfCompanyInsightValue $companyProfile
     * @return \StructType\EwsPersonType
     */
    public function setCompanyProfile(?\ArrayType\EwsArrayOfCompanyInsightValue $companyProfile = null): self
    {
        $this->CompanyProfile = $companyProfile;
        
        return $this;
    }
    /**
     * Get Office value
     * @return string|null
     */
    public function getOffice(): ?string
    {
        return $this->Office;
    }
    /**
     * Set Office value
     * @param string $office
     * @return \StructType\EwsPersonType
     */
    public function setOffice(?string $office = null): self
    {
        // validation for constraint: string
        if (!is_null($office) && !is_string($office)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($office, true), gettype($office)), __LINE__);
        }
        $this->Office = $office;
        
        return $this;
    }
    /**
     * Get Headline value
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        return $this->Headline;
    }
    /**
     * Set Headline value
     * @param string $headline
     * @return \StructType\EwsPersonType
     */
    public function setHeadline(?string $headline = null): self
    {
        // validation for constraint: string
        if (!is_null($headline) && !is_string($headline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($headline, true), gettype($headline)), __LINE__);
        }
        $this->Headline = $headline;
        
        return $this;
    }
    /**
     * Get MutualConnections value
     * @return \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getMutualConnections(): ?\ArrayType\EwsArrayOfProfileInsightValue
    {
        return $this->MutualConnections;
    }
    /**
     * Set MutualConnections value
     * @param \ArrayType\EwsArrayOfProfileInsightValue $mutualConnections
     * @return \StructType\EwsPersonType
     */
    public function setMutualConnections(?\ArrayType\EwsArrayOfProfileInsightValue $mutualConnections = null): self
    {
        $this->MutualConnections = $mutualConnections;
        
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
     * @return \StructType\EwsPersonType
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
     * Get MutualManager value
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function getMutualManager(): ?\StructType\EwsProfileInsightValue
    {
        return $this->MutualManager;
    }
    /**
     * Set MutualManager value
     * @param \StructType\EwsProfileInsightValue $mutualManager
     * @return \StructType\EwsPersonType
     */
    public function setMutualManager(?\StructType\EwsProfileInsightValue $mutualManager = null): self
    {
        $this->MutualManager = $mutualManager;
        
        return $this;
    }
    /**
     * Get Insights value
     * @return \ArrayType\EwsArrayOfInsight|null
     */
    public function getInsights(): ?\ArrayType\EwsArrayOfInsight
    {
        return $this->Insights;
    }
    /**
     * Set Insights value
     * @param \ArrayType\EwsArrayOfInsight $insights
     * @return \StructType\EwsPersonType
     */
    public function setInsights(?\ArrayType\EwsArrayOfInsight $insights = null): self
    {
        $this->Insights = $insights;
        
        return $this;
    }
    /**
     * Get UserProfilePicture value
     * @return \StructType\EwsUserProfilePicture|null
     */
    public function getUserProfilePicture(): ?\StructType\EwsUserProfilePicture
    {
        return $this->UserProfilePicture;
    }
    /**
     * Set UserProfilePicture value
     * @param \StructType\EwsUserProfilePicture $userProfilePicture
     * @return \StructType\EwsPersonType
     */
    public function setUserProfilePicture(?\StructType\EwsUserProfilePicture $userProfilePicture = null): self
    {
        $this->UserProfilePicture = $userProfilePicture;
        
        return $this;
    }
}
