<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPersonType extends AbstractStructBase
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
     * The GivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GivenName;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Surname;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The SMSNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SMSNumber;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The LinkedInProfileLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkedInProfileLink;
    /**
     * The Skills
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSkillInsightValue
     */
    public $Skills;
    /**
     * The ProfessionalBiography
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfessionalBiography;
    /**
     * The ManagementChain
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfProfileInsightValue
     */
    public $ManagementChain;
    /**
     * The DirectReports
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfProfileInsightValue
     */
    public $DirectReports;
    /**
     * The Peers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfProfileInsightValue
     */
    public $Peers;
    /**
     * The TeamSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TeamSize;
    /**
     * The CurrentJob
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfJobInsightValue
     */
    public $CurrentJob;
    /**
     * The Birthday
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Birthday;
    /**
     * The Hometown
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hometown;
    /**
     * The CurrentLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrentLocation;
    /**
     * The CompanyProfile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfCompanyInsightValue
     */
    public $CompanyProfile;
    /**
     * The Office
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Office;
    /**
     * The Headline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Headline;
    /**
     * The MutualConnections
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfProfileInsightValue
     */
    public $MutualConnections;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The MutualManager
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsProfileInsightValue
     */
    public $MutualManager;
    /**
     * The Insights
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfInsight
     */
    public $Insights;
    /**
     * The UserProfilePicture
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserProfilePicture
     */
    public $UserProfilePicture;
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
     * @param \Ews\ArrayType\EwsArrayOfSkillInsightValue $skills
     * @param string $professionalBiography
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $managementChain
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $directReports
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $peers
     * @param string $teamSize
     * @param \Ews\ArrayType\EwsArrayOfJobInsightValue $currentJob
     * @param string $birthday
     * @param string $hometown
     * @param string $currentLocation
     * @param \Ews\ArrayType\EwsArrayOfCompanyInsightValue $companyProfile
     * @param string $office
     * @param string $headline
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $mutualConnections
     * @param string $title
     * @param \Ews\StructType\EwsProfileInsightValue $mutualManager
     * @param \Ews\ArrayType\EwsArrayOfInsight $insights
     * @param \Ews\StructType\EwsUserProfilePicture $userProfilePicture
     */
    public function __construct($fullName = null, $givenName = null, $surname = null, $phoneNumber = null, $sMSNumber = null, $emailAddress = null, $alias = null, $department = null, $linkedInProfileLink = null, \Ews\ArrayType\EwsArrayOfSkillInsightValue $skills = null, $professionalBiography = null, \Ews\ArrayType\EwsArrayOfProfileInsightValue $managementChain = null, \Ews\ArrayType\EwsArrayOfProfileInsightValue $directReports = null, \Ews\ArrayType\EwsArrayOfProfileInsightValue $peers = null, $teamSize = null, \Ews\ArrayType\EwsArrayOfJobInsightValue $currentJob = null, $birthday = null, $hometown = null, $currentLocation = null, \Ews\ArrayType\EwsArrayOfCompanyInsightValue $companyProfile = null, $office = null, $headline = null, \Ews\ArrayType\EwsArrayOfProfileInsightValue $mutualConnections = null, $title = null, \Ews\StructType\EwsProfileInsightValue $mutualManager = null, \Ews\ArrayType\EwsArrayOfInsight $insights = null, \Ews\StructType\EwsUserProfilePicture $userProfilePicture = null)
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
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \Ews\StructType\EwsPersonType
     */
    public function setFullName($fullName = null)
    {
        $this->FullName = $fullName;
        return $this;
    }
    /**
     * Get GivenName value
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @param string $givenName
     * @return \Ews\StructType\EwsPersonType
     */
    public function setGivenName($givenName = null)
    {
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \Ews\StructType\EwsPersonType
     */
    public function setSurname($surname = null)
    {
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Ews\StructType\EwsPersonType
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get SMSNumber value
     * @return string|null
     */
    public function getSMSNumber()
    {
        return $this->SMSNumber;
    }
    /**
     * Set SMSNumber value
     * @param string $sMSNumber
     * @return \Ews\StructType\EwsPersonType
     */
    public function setSMSNumber($sMSNumber = null)
    {
        $this->SMSNumber = $sMSNumber;
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
     * @return \Ews\StructType\EwsPersonType
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsPersonType
     */
    public function setAlias($alias = null)
    {
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \Ews\StructType\EwsPersonType
     */
    public function setDepartment($department = null)
    {
        $this->Department = $department;
        return $this;
    }
    /**
     * Get LinkedInProfileLink value
     * @return string|null
     */
    public function getLinkedInProfileLink()
    {
        return $this->LinkedInProfileLink;
    }
    /**
     * Set LinkedInProfileLink value
     * @param string $linkedInProfileLink
     * @return \Ews\StructType\EwsPersonType
     */
    public function setLinkedInProfileLink($linkedInProfileLink = null)
    {
        $this->LinkedInProfileLink = $linkedInProfileLink;
        return $this;
    }
    /**
     * Get Skills value
     * @return \Ews\ArrayType\EwsArrayOfSkillInsightValue|null
     */
    public function getSkills()
    {
        return $this->Skills;
    }
    /**
     * Set Skills value
     * @param \Ews\ArrayType\EwsArrayOfSkillInsightValue $skills
     * @return \Ews\StructType\EwsPersonType
     */
    public function setSkills(\Ews\ArrayType\EwsArrayOfSkillInsightValue $skills = null)
    {
        $this->Skills = $skills;
        return $this;
    }
    /**
     * Get ProfessionalBiography value
     * @return string|null
     */
    public function getProfessionalBiography()
    {
        return $this->ProfessionalBiography;
    }
    /**
     * Set ProfessionalBiography value
     * @param string $professionalBiography
     * @return \Ews\StructType\EwsPersonType
     */
    public function setProfessionalBiography($professionalBiography = null)
    {
        $this->ProfessionalBiography = $professionalBiography;
        return $this;
    }
    /**
     * Get ManagementChain value
     * @return \Ews\ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getManagementChain()
    {
        return $this->ManagementChain;
    }
    /**
     * Set ManagementChain value
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $managementChain
     * @return \Ews\StructType\EwsPersonType
     */
    public function setManagementChain(\Ews\ArrayType\EwsArrayOfProfileInsightValue $managementChain = null)
    {
        $this->ManagementChain = $managementChain;
        return $this;
    }
    /**
     * Get DirectReports value
     * @return \Ews\ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getDirectReports()
    {
        return $this->DirectReports;
    }
    /**
     * Set DirectReports value
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $directReports
     * @return \Ews\StructType\EwsPersonType
     */
    public function setDirectReports(\Ews\ArrayType\EwsArrayOfProfileInsightValue $directReports = null)
    {
        $this->DirectReports = $directReports;
        return $this;
    }
    /**
     * Get Peers value
     * @return \Ews\ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getPeers()
    {
        return $this->Peers;
    }
    /**
     * Set Peers value
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $peers
     * @return \Ews\StructType\EwsPersonType
     */
    public function setPeers(\Ews\ArrayType\EwsArrayOfProfileInsightValue $peers = null)
    {
        $this->Peers = $peers;
        return $this;
    }
    /**
     * Get TeamSize value
     * @return string|null
     */
    public function getTeamSize()
    {
        return $this->TeamSize;
    }
    /**
     * Set TeamSize value
     * @param string $teamSize
     * @return \Ews\StructType\EwsPersonType
     */
    public function setTeamSize($teamSize = null)
    {
        $this->TeamSize = $teamSize;
        return $this;
    }
    /**
     * Get CurrentJob value
     * @return \Ews\ArrayType\EwsArrayOfJobInsightValue|null
     */
    public function getCurrentJob()
    {
        return $this->CurrentJob;
    }
    /**
     * Set CurrentJob value
     * @param \Ews\ArrayType\EwsArrayOfJobInsightValue $currentJob
     * @return \Ews\StructType\EwsPersonType
     */
    public function setCurrentJob(\Ews\ArrayType\EwsArrayOfJobInsightValue $currentJob = null)
    {
        $this->CurrentJob = $currentJob;
        return $this;
    }
    /**
     * Get Birthday value
     * @return string|null
     */
    public function getBirthday()
    {
        return $this->Birthday;
    }
    /**
     * Set Birthday value
     * @param string $birthday
     * @return \Ews\StructType\EwsPersonType
     */
    public function setBirthday($birthday = null)
    {
        $this->Birthday = $birthday;
        return $this;
    }
    /**
     * Get Hometown value
     * @return string|null
     */
    public function getHometown()
    {
        return $this->Hometown;
    }
    /**
     * Set Hometown value
     * @param string $hometown
     * @return \Ews\StructType\EwsPersonType
     */
    public function setHometown($hometown = null)
    {
        $this->Hometown = $hometown;
        return $this;
    }
    /**
     * Get CurrentLocation value
     * @return string|null
     */
    public function getCurrentLocation()
    {
        return $this->CurrentLocation;
    }
    /**
     * Set CurrentLocation value
     * @param string $currentLocation
     * @return \Ews\StructType\EwsPersonType
     */
    public function setCurrentLocation($currentLocation = null)
    {
        $this->CurrentLocation = $currentLocation;
        return $this;
    }
    /**
     * Get CompanyProfile value
     * @return \Ews\ArrayType\EwsArrayOfCompanyInsightValue|null
     */
    public function getCompanyProfile()
    {
        return $this->CompanyProfile;
    }
    /**
     * Set CompanyProfile value
     * @param \Ews\ArrayType\EwsArrayOfCompanyInsightValue $companyProfile
     * @return \Ews\StructType\EwsPersonType
     */
    public function setCompanyProfile(\Ews\ArrayType\EwsArrayOfCompanyInsightValue $companyProfile = null)
    {
        $this->CompanyProfile = $companyProfile;
        return $this;
    }
    /**
     * Get Office value
     * @return string|null
     */
    public function getOffice()
    {
        return $this->Office;
    }
    /**
     * Set Office value
     * @param string $office
     * @return \Ews\StructType\EwsPersonType
     */
    public function setOffice($office = null)
    {
        $this->Office = $office;
        return $this;
    }
    /**
     * Get Headline value
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->Headline;
    }
    /**
     * Set Headline value
     * @param string $headline
     * @return \Ews\StructType\EwsPersonType
     */
    public function setHeadline($headline = null)
    {
        $this->Headline = $headline;
        return $this;
    }
    /**
     * Get MutualConnections value
     * @return \Ews\ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getMutualConnections()
    {
        return $this->MutualConnections;
    }
    /**
     * Set MutualConnections value
     * @param \Ews\ArrayType\EwsArrayOfProfileInsightValue $mutualConnections
     * @return \Ews\StructType\EwsPersonType
     */
    public function setMutualConnections(\Ews\ArrayType\EwsArrayOfProfileInsightValue $mutualConnections = null)
    {
        $this->MutualConnections = $mutualConnections;
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
     * @return \Ews\StructType\EwsPersonType
     */
    public function setTitle($title = null)
    {
        $this->Title = $title;
        return $this;
    }
    /**
     * Get MutualManager value
     * @return \Ews\StructType\EwsProfileInsightValue|null
     */
    public function getMutualManager()
    {
        return $this->MutualManager;
    }
    /**
     * Set MutualManager value
     * @param \Ews\StructType\EwsProfileInsightValue $mutualManager
     * @return \Ews\StructType\EwsPersonType
     */
    public function setMutualManager(\Ews\StructType\EwsProfileInsightValue $mutualManager = null)
    {
        $this->MutualManager = $mutualManager;
        return $this;
    }
    /**
     * Get Insights value
     * @return \Ews\ArrayType\EwsArrayOfInsight|null
     */
    public function getInsights()
    {
        return $this->Insights;
    }
    /**
     * Set Insights value
     * @param \Ews\ArrayType\EwsArrayOfInsight $insights
     * @return \Ews\StructType\EwsPersonType
     */
    public function setInsights(\Ews\ArrayType\EwsArrayOfInsight $insights = null)
    {
        $this->Insights = $insights;
        return $this;
    }
    /**
     * Get UserProfilePicture value
     * @return \Ews\StructType\EwsUserProfilePicture|null
     */
    public function getUserProfilePicture()
    {
        return $this->UserProfilePicture;
    }
    /**
     * Set UserProfilePicture value
     * @param \Ews\StructType\EwsUserProfilePicture $userProfilePicture
     * @return \Ews\StructType\EwsPersonType
     */
    public function setUserProfilePicture(\Ews\StructType\EwsUserProfilePicture $userProfilePicture = null)
    {
        $this->UserProfilePicture = $userProfilePicture;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPersonType
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
