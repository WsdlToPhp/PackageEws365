<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactItemType extends EwsItemType
{
    /**
     * The FileAs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileAs;
    /**
     * The FileAsMapping
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileAsMapping;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The GivenName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GivenName;
    /**
     * The Initials
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Initials;
    /**
     * The MiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The Nickname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Nickname;
    /**
     * The CompleteName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCompleteNameType
     */
    public $CompleteName;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressDictionaryType
     */
    public $EmailAddresses;
    /**
     * The AbchEmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public $AbchEmailAddresses;
    /**
     * The PhysicalAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhysicalAddressDictionaryType
     */
    public $PhysicalAddresses;
    /**
     * The PhoneNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneNumberDictionaryType
     */
    public $PhoneNumbers;
    /**
     * The AssistantName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AssistantName;
    /**
     * The Birthday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Birthday;
    /**
     * The BusinessHomePage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BusinessHomePage;
    /**
     * The Children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Children;
    /**
     * The Companies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Companies;
    /**
     * The ContactSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactSource;
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The Generation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Generation;
    /**
     * The ImAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsImAddressDictionaryType
     */
    public $ImAddresses;
    /**
     * The JobTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $JobTitle;
    /**
     * The Manager
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Manager;
    /**
     * The Mileage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Mileage;
    /**
     * The OfficeLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfficeLocation;
    /**
     * The PostalAddressIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalAddressIndex;
    /**
     * The Profession
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Profession;
    /**
     * The SpouseName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpouseName;
    /**
     * The Surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Surname;
    /**
     * The WeddingAnniversary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WeddingAnniversary;
    /**
     * The HasPicture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasPicture;
    /**
     * The PhoneticFullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneticFullName;
    /**
     * The PhoneticFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneticFirstName;
    /**
     * The PhoneticLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneticLastName;
    /**
     * The Alias
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Photo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Photo;
    /**
     * The UserSMIMECertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBinaryType
     */
    public $UserSMIMECertificate;
    /**
     * The MSExchangeCertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBinaryType
     */
    public $MSExchangeCertificate;
    /**
     * The DirectoryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DirectoryId;
    /**
     * The ManagerMailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $ManagerMailbox;
    /**
     * The DirectReports
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $DirectReports;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * The IsAutoUpdateDisabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAutoUpdateDisabled;
    /**
     * The IsMessengerEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMessengerEnabled;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The ContactShortId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ContactShortId;
    /**
     * The ContactType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactType;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The IsHidden
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsHidden;
    /**
     * The ObjectId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectId;
    /**
     * The PassportId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PassportId;
    /**
     * The IsPrivate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPrivate;
    /**
     * The SourceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SourceId;
    /**
     * The TrustLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TrustLevel;
    /**
     * The CreatedBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreatedBy;
    /**
     * The Urls
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsContactUrlDictionaryType
     */
    public $Urls;
    /**
     * The Cid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Cid;
    /**
     * The SkypeAuthCertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeAuthCertificate;
    /**
     * The SkypeContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeContext;
    /**
     * The SkypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeId;
    /**
     * The SkypeRelationship
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeRelationship;
    /**
     * The YomiNickname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $YomiNickname;
    /**
     * The XboxLiveTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $XboxLiveTag;
    /**
     * The InviteFree
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $InviteFree;
    /**
     * The HidePresenceAndProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HidePresenceAndProfile;
    /**
     * The IsPendingOutbound
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPendingOutbound;
    /**
     * The SupportGroupFeeds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SupportGroupFeeds;
    /**
     * The UserTileHash
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserTileHash;
    /**
     * The UnifiedInbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UnifiedInbox;
    /**
     * The Mris
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Mris;
    /**
     * The Wlid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Wlid;
    /**
     * The AbchContactId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $AbchContactId;
    /**
     * The NotInBirthdayCalendar
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NotInBirthdayCalendar;
    /**
     * The ShellContactType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShellContactType;
    /**
     * The ImMri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImMri;
    /**
     * The PresenceTrustLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PresenceTrustLevel;
    /**
     * The OtherMri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OtherMri;
    /**
     * The ProfileLastChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProfileLastChanged;
    /**
     * The MobileIMEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MobileIMEnabled;
    /**
     * The PartnerNetworkProfilePhotoUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerNetworkProfilePhotoUrl;
    /**
     * The PartnerNetworkThumbnailPhotoUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerNetworkThumbnailPhotoUrl;
    /**
     * Constructor method for ContactItemType
     * @uses EwsContactItemType::setFileAs()
     * @uses EwsContactItemType::setFileAsMapping()
     * @uses EwsContactItemType::setDisplayName()
     * @uses EwsContactItemType::setGivenName()
     * @uses EwsContactItemType::setInitials()
     * @uses EwsContactItemType::setMiddleName()
     * @uses EwsContactItemType::setNickname()
     * @uses EwsContactItemType::setCompleteName()
     * @uses EwsContactItemType::setCompanyName()
     * @uses EwsContactItemType::setEmailAddresses()
     * @uses EwsContactItemType::setAbchEmailAddresses()
     * @uses EwsContactItemType::setPhysicalAddresses()
     * @uses EwsContactItemType::setPhoneNumbers()
     * @uses EwsContactItemType::setAssistantName()
     * @uses EwsContactItemType::setBirthday()
     * @uses EwsContactItemType::setBusinessHomePage()
     * @uses EwsContactItemType::setChildren()
     * @uses EwsContactItemType::setCompanies()
     * @uses EwsContactItemType::setContactSource()
     * @uses EwsContactItemType::setDepartment()
     * @uses EwsContactItemType::setGeneration()
     * @uses EwsContactItemType::setImAddresses()
     * @uses EwsContactItemType::setJobTitle()
     * @uses EwsContactItemType::setManager()
     * @uses EwsContactItemType::setMileage()
     * @uses EwsContactItemType::setOfficeLocation()
     * @uses EwsContactItemType::setPostalAddressIndex()
     * @uses EwsContactItemType::setProfession()
     * @uses EwsContactItemType::setSpouseName()
     * @uses EwsContactItemType::setSurname()
     * @uses EwsContactItemType::setWeddingAnniversary()
     * @uses EwsContactItemType::setHasPicture()
     * @uses EwsContactItemType::setPhoneticFullName()
     * @uses EwsContactItemType::setPhoneticFirstName()
     * @uses EwsContactItemType::setPhoneticLastName()
     * @uses EwsContactItemType::setAlias()
     * @uses EwsContactItemType::setNotes()
     * @uses EwsContactItemType::setPhoto()
     * @uses EwsContactItemType::setUserSMIMECertificate()
     * @uses EwsContactItemType::setMSExchangeCertificate()
     * @uses EwsContactItemType::setDirectoryId()
     * @uses EwsContactItemType::setManagerMailbox()
     * @uses EwsContactItemType::setDirectReports()
     * @uses EwsContactItemType::setAccountName()
     * @uses EwsContactItemType::setIsAutoUpdateDisabled()
     * @uses EwsContactItemType::setIsMessengerEnabled()
     * @uses EwsContactItemType::setComment()
     * @uses EwsContactItemType::setContactShortId()
     * @uses EwsContactItemType::setContactType()
     * @uses EwsContactItemType::setGender()
     * @uses EwsContactItemType::setIsHidden()
     * @uses EwsContactItemType::setObjectId()
     * @uses EwsContactItemType::setPassportId()
     * @uses EwsContactItemType::setIsPrivate()
     * @uses EwsContactItemType::setSourceId()
     * @uses EwsContactItemType::setTrustLevel()
     * @uses EwsContactItemType::setCreatedBy()
     * @uses EwsContactItemType::setUrls()
     * @uses EwsContactItemType::setCid()
     * @uses EwsContactItemType::setSkypeAuthCertificate()
     * @uses EwsContactItemType::setSkypeContext()
     * @uses EwsContactItemType::setSkypeId()
     * @uses EwsContactItemType::setSkypeRelationship()
     * @uses EwsContactItemType::setYomiNickname()
     * @uses EwsContactItemType::setXboxLiveTag()
     * @uses EwsContactItemType::setInviteFree()
     * @uses EwsContactItemType::setHidePresenceAndProfile()
     * @uses EwsContactItemType::setIsPendingOutbound()
     * @uses EwsContactItemType::setSupportGroupFeeds()
     * @uses EwsContactItemType::setUserTileHash()
     * @uses EwsContactItemType::setUnifiedInbox()
     * @uses EwsContactItemType::setMris()
     * @uses EwsContactItemType::setWlid()
     * @uses EwsContactItemType::setAbchContactId()
     * @uses EwsContactItemType::setNotInBirthdayCalendar()
     * @uses EwsContactItemType::setShellContactType()
     * @uses EwsContactItemType::setImMri()
     * @uses EwsContactItemType::setPresenceTrustLevel()
     * @uses EwsContactItemType::setOtherMri()
     * @uses EwsContactItemType::setProfileLastChanged()
     * @uses EwsContactItemType::setMobileIMEnabled()
     * @uses EwsContactItemType::setPartnerNetworkProfilePhotoUrl()
     * @uses EwsContactItemType::setPartnerNetworkThumbnailPhotoUrl()
     * @param string $fileAs
     * @param string $fileAsMapping
     * @param string $displayName
     * @param string $givenName
     * @param string $initials
     * @param string $middleName
     * @param string $nickname
     * @param \Ews\StructType\EwsCompleteNameType $completeName
     * @param string $companyName
     * @param \Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses
     * @param \Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers
     * @param string $assistantName
     * @param string $birthday
     * @param string $businessHomePage
     * @param \Ews\ArrayType\EwsArrayOfStringsType $children
     * @param \Ews\ArrayType\EwsArrayOfStringsType $companies
     * @param string $contactSource
     * @param string $department
     * @param string $generation
     * @param \Ews\StructType\EwsImAddressDictionaryType $imAddresses
     * @param string $jobTitle
     * @param string $manager
     * @param string $mileage
     * @param string $officeLocation
     * @param string $postalAddressIndex
     * @param string $profession
     * @param string $spouseName
     * @param string $surname
     * @param string $weddingAnniversary
     * @param bool $hasPicture
     * @param string $phoneticFullName
     * @param string $phoneticFirstName
     * @param string $phoneticLastName
     * @param string $alias
     * @param string $notes
     * @param string $photo
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate
     * @param string $directoryId
     * @param \Ews\StructType\EwsSingleRecipientType $managerMailbox
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $directReports
     * @param string $accountName
     * @param bool $isAutoUpdateDisabled
     * @param bool $isMessengerEnabled
     * @param string $comment
     * @param int $contactShortId
     * @param string $contactType
     * @param string $gender
     * @param bool $isHidden
     * @param string $objectId
     * @param int $passportId
     * @param bool $isPrivate
     * @param string $sourceId
     * @param int $trustLevel
     * @param string $createdBy
     * @param \Ews\StructType\EwsContactUrlDictionaryType $urls
     * @param int $cid
     * @param string $skypeAuthCertificate
     * @param string $skypeContext
     * @param string $skypeId
     * @param string $skypeRelationship
     * @param string $yomiNickname
     * @param string $xboxLiveTag
     * @param bool $inviteFree
     * @param bool $hidePresenceAndProfile
     * @param bool $isPendingOutbound
     * @param bool $supportGroupFeeds
     * @param string $userTileHash
     * @param bool $unifiedInbox
     * @param \Ews\ArrayType\EwsArrayOfStringsType $mris
     * @param string $wlid
     * @param string $abchContactId
     * @param bool $notInBirthdayCalendar
     * @param string $shellContactType
     * @param string $imMri
     * @param int $presenceTrustLevel
     * @param string $otherMri
     * @param string $profileLastChanged
     * @param bool $mobileIMEnabled
     * @param string $partnerNetworkProfilePhotoUrl
     * @param string $partnerNetworkThumbnailPhotoUrl
     */
    public function __construct($fileAs = null, $fileAsMapping = null, $displayName = null, $givenName = null, $initials = null, $middleName = null, $nickname = null, \Ews\StructType\EwsCompleteNameType $completeName = null, $companyName = null, \Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses = null, \Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses = null, \Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses = null, \Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers = null, $assistantName = null, $birthday = null, $businessHomePage = null, \Ews\ArrayType\EwsArrayOfStringsType $children = null, \Ews\ArrayType\EwsArrayOfStringsType $companies = null, $contactSource = null, $department = null, $generation = null, \Ews\StructType\EwsImAddressDictionaryType $imAddresses = null, $jobTitle = null, $manager = null, $mileage = null, $officeLocation = null, $postalAddressIndex = null, $profession = null, $spouseName = null, $surname = null, $weddingAnniversary = null, $hasPicture = null, $phoneticFullName = null, $phoneticFirstName = null, $phoneticLastName = null, $alias = null, $notes = null, $photo = null, \Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate = null, \Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate = null, $directoryId = null, \Ews\StructType\EwsSingleRecipientType $managerMailbox = null, \Ews\ArrayType\EwsArrayOfRecipientsType $directReports = null, $accountName = null, $isAutoUpdateDisabled = null, $isMessengerEnabled = null, $comment = null, $contactShortId = null, $contactType = null, $gender = null, $isHidden = null, $objectId = null, $passportId = null, $isPrivate = null, $sourceId = null, $trustLevel = null, $createdBy = null, \Ews\StructType\EwsContactUrlDictionaryType $urls = null, $cid = null, $skypeAuthCertificate = null, $skypeContext = null, $skypeId = null, $skypeRelationship = null, $yomiNickname = null, $xboxLiveTag = null, $inviteFree = null, $hidePresenceAndProfile = null, $isPendingOutbound = null, $supportGroupFeeds = null, $userTileHash = null, $unifiedInbox = null, \Ews\ArrayType\EwsArrayOfStringsType $mris = null, $wlid = null, $abchContactId = null, $notInBirthdayCalendar = null, $shellContactType = null, $imMri = null, $presenceTrustLevel = null, $otherMri = null, $profileLastChanged = null, $mobileIMEnabled = null, $partnerNetworkProfilePhotoUrl = null, $partnerNetworkThumbnailPhotoUrl = null)
    {
        $this
            ->setFileAs($fileAs)
            ->setFileAsMapping($fileAsMapping)
            ->setDisplayName($displayName)
            ->setGivenName($givenName)
            ->setInitials($initials)
            ->setMiddleName($middleName)
            ->setNickname($nickname)
            ->setCompleteName($completeName)
            ->setCompanyName($companyName)
            ->setEmailAddresses($emailAddresses)
            ->setAbchEmailAddresses($abchEmailAddresses)
            ->setPhysicalAddresses($physicalAddresses)
            ->setPhoneNumbers($phoneNumbers)
            ->setAssistantName($assistantName)
            ->setBirthday($birthday)
            ->setBusinessHomePage($businessHomePage)
            ->setChildren($children)
            ->setCompanies($companies)
            ->setContactSource($contactSource)
            ->setDepartment($department)
            ->setGeneration($generation)
            ->setImAddresses($imAddresses)
            ->setJobTitle($jobTitle)
            ->setManager($manager)
            ->setMileage($mileage)
            ->setOfficeLocation($officeLocation)
            ->setPostalAddressIndex($postalAddressIndex)
            ->setProfession($profession)
            ->setSpouseName($spouseName)
            ->setSurname($surname)
            ->setWeddingAnniversary($weddingAnniversary)
            ->setHasPicture($hasPicture)
            ->setPhoneticFullName($phoneticFullName)
            ->setPhoneticFirstName($phoneticFirstName)
            ->setPhoneticLastName($phoneticLastName)
            ->setAlias($alias)
            ->setNotes($notes)
            ->setPhoto($photo)
            ->setUserSMIMECertificate($userSMIMECertificate)
            ->setMSExchangeCertificate($mSExchangeCertificate)
            ->setDirectoryId($directoryId)
            ->setManagerMailbox($managerMailbox)
            ->setDirectReports($directReports)
            ->setAccountName($accountName)
            ->setIsAutoUpdateDisabled($isAutoUpdateDisabled)
            ->setIsMessengerEnabled($isMessengerEnabled)
            ->setComment($comment)
            ->setContactShortId($contactShortId)
            ->setContactType($contactType)
            ->setGender($gender)
            ->setIsHidden($isHidden)
            ->setObjectId($objectId)
            ->setPassportId($passportId)
            ->setIsPrivate($isPrivate)
            ->setSourceId($sourceId)
            ->setTrustLevel($trustLevel)
            ->setCreatedBy($createdBy)
            ->setUrls($urls)
            ->setCid($cid)
            ->setSkypeAuthCertificate($skypeAuthCertificate)
            ->setSkypeContext($skypeContext)
            ->setSkypeId($skypeId)
            ->setSkypeRelationship($skypeRelationship)
            ->setYomiNickname($yomiNickname)
            ->setXboxLiveTag($xboxLiveTag)
            ->setInviteFree($inviteFree)
            ->setHidePresenceAndProfile($hidePresenceAndProfile)
            ->setIsPendingOutbound($isPendingOutbound)
            ->setSupportGroupFeeds($supportGroupFeeds)
            ->setUserTileHash($userTileHash)
            ->setUnifiedInbox($unifiedInbox)
            ->setMris($mris)
            ->setWlid($wlid)
            ->setAbchContactId($abchContactId)
            ->setNotInBirthdayCalendar($notInBirthdayCalendar)
            ->setShellContactType($shellContactType)
            ->setImMri($imMri)
            ->setPresenceTrustLevel($presenceTrustLevel)
            ->setOtherMri($otherMri)
            ->setProfileLastChanged($profileLastChanged)
            ->setMobileIMEnabled($mobileIMEnabled)
            ->setPartnerNetworkProfilePhotoUrl($partnerNetworkProfilePhotoUrl)
            ->setPartnerNetworkThumbnailPhotoUrl($partnerNetworkThumbnailPhotoUrl);
    }
    /**
     * Get FileAs value
     * @return string|null
     */
    public function getFileAs()
    {
        return $this->FileAs;
    }
    /**
     * Set FileAs value
     * @param string $fileAs
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setFileAs($fileAs = null)
    {
        // validation for constraint: string
        if (!is_null($fileAs) && !is_string($fileAs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileAs, true), gettype($fileAs)), __LINE__);
        }
        $this->FileAs = $fileAs;
        return $this;
    }
    /**
     * Get FileAsMapping value
     * @return string|null
     */
    public function getFileAsMapping()
    {
        return $this->FileAsMapping;
    }
    /**
     * Set FileAsMapping value
     * @uses \Ews\EnumType\EwsFileAsMappingType::valueIsValid()
     * @uses \Ews\EnumType\EwsFileAsMappingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fileAsMapping
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setFileAsMapping($fileAsMapping = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFileAsMappingType::valueIsValid($fileAsMapping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFileAsMappingType', is_array($fileAsMapping) ? implode(', ', $fileAsMapping) : var_export($fileAsMapping, true), implode(', ', \Ews\EnumType\EwsFileAsMappingType::getValidValues())), __LINE__);
        }
        $this->FileAsMapping = $fileAsMapping;
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
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
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
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setGivenName($givenName = null)
    {
        // validation for constraint: string
        if (!is_null($givenName) && !is_string($givenName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($givenName, true), gettype($givenName)), __LINE__);
        }
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $initials
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initials, true), gettype($initials)), __LINE__);
        }
        $this->Initials = $initials;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get Nickname value
     * @return string|null
     */
    public function getNickname()
    {
        return $this->Nickname;
    }
    /**
     * Set Nickname value
     * @param string $nickname
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setNickname($nickname = null)
    {
        // validation for constraint: string
        if (!is_null($nickname) && !is_string($nickname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nickname, true), gettype($nickname)), __LINE__);
        }
        $this->Nickname = $nickname;
        return $this;
    }
    /**
     * Get CompleteName value
     * @return \Ews\StructType\EwsCompleteNameType|null
     */
    public function getCompleteName()
    {
        return $this->CompleteName;
    }
    /**
     * Set CompleteName value
     * @param \Ews\StructType\EwsCompleteNameType $completeName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCompleteName(\Ews\StructType\EwsCompleteNameType $completeName = null)
    {
        $this->CompleteName = $completeName;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Ews\StructType\EwsEmailAddressDictionaryType|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setEmailAddresses(\Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get AbchEmailAddresses value
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType|null
     */
    public function getAbchEmailAddresses()
    {
        return $this->AbchEmailAddresses;
    }
    /**
     * Set AbchEmailAddresses value
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAbchEmailAddresses(\Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses = null)
    {
        $this->AbchEmailAddresses = $abchEmailAddresses;
        return $this;
    }
    /**
     * Get PhysicalAddresses value
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType|null
     */
    public function getPhysicalAddresses()
    {
        return $this->PhysicalAddresses;
    }
    /**
     * Set PhysicalAddresses value
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhysicalAddresses(\Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses = null)
    {
        $this->PhysicalAddresses = $physicalAddresses;
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType|null
     */
    public function getPhoneNumbers()
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneNumbers(\Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get AssistantName value
     * @return string|null
     */
    public function getAssistantName()
    {
        return $this->AssistantName;
    }
    /**
     * Set AssistantName value
     * @param string $assistantName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAssistantName($assistantName = null)
    {
        // validation for constraint: string
        if (!is_null($assistantName) && !is_string($assistantName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assistantName, true), gettype($assistantName)), __LINE__);
        }
        $this->AssistantName = $assistantName;
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
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setBirthday($birthday = null)
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->Birthday = $birthday;
        return $this;
    }
    /**
     * Get BusinessHomePage value
     * @return string|null
     */
    public function getBusinessHomePage()
    {
        return $this->BusinessHomePage;
    }
    /**
     * Set BusinessHomePage value
     * @param string $businessHomePage
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setBusinessHomePage($businessHomePage = null)
    {
        // validation for constraint: string
        if (!is_null($businessHomePage) && !is_string($businessHomePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessHomePage, true), gettype($businessHomePage)), __LINE__);
        }
        $this->BusinessHomePage = $businessHomePage;
        return $this;
    }
    /**
     * Get Children value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getChildren()
    {
        return $this->Children;
    }
    /**
     * Set Children value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $children
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setChildren(\Ews\ArrayType\EwsArrayOfStringsType $children = null)
    {
        $this->Children = $children;
        return $this;
    }
    /**
     * Get Companies value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getCompanies()
    {
        return $this->Companies;
    }
    /**
     * Set Companies value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $companies
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCompanies(\Ews\ArrayType\EwsArrayOfStringsType $companies = null)
    {
        $this->Companies = $companies;
        return $this;
    }
    /**
     * Get ContactSource value
     * @return string|null
     */
    public function getContactSource()
    {
        return $this->ContactSource;
    }
    /**
     * Set ContactSource value
     * @uses \Ews\EnumType\EwsContactSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsContactSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contactSource
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setContactSource($contactSource = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContactSourceType::valueIsValid($contactSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContactSourceType', is_array($contactSource) ? implode(', ', $contactSource) : var_export($contactSource, true), implode(', ', \Ews\EnumType\EwsContactSourceType::getValidValues())), __LINE__);
        }
        $this->ContactSource = $contactSource;
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
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Get Generation value
     * @return string|null
     */
    public function getGeneration()
    {
        return $this->Generation;
    }
    /**
     * Set Generation value
     * @param string $generation
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setGeneration($generation = null)
    {
        // validation for constraint: string
        if (!is_null($generation) && !is_string($generation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($generation, true), gettype($generation)), __LINE__);
        }
        $this->Generation = $generation;
        return $this;
    }
    /**
     * Get ImAddresses value
     * @return \Ews\StructType\EwsImAddressDictionaryType|null
     */
    public function getImAddresses()
    {
        return $this->ImAddresses;
    }
    /**
     * Set ImAddresses value
     * @param \Ews\StructType\EwsImAddressDictionaryType $imAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setImAddresses(\Ews\StructType\EwsImAddressDictionaryType $imAddresses = null)
    {
        $this->ImAddresses = $imAddresses;
        return $this;
    }
    /**
     * Get JobTitle value
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }
    /**
     * Set JobTitle value
     * @param string $jobTitle
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setJobTitle($jobTitle = null)
    {
        // validation for constraint: string
        if (!is_null($jobTitle) && !is_string($jobTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobTitle, true), gettype($jobTitle)), __LINE__);
        }
        $this->JobTitle = $jobTitle;
        return $this;
    }
    /**
     * Get Manager value
     * @return string|null
     */
    public function getManager()
    {
        return $this->Manager;
    }
    /**
     * Set Manager value
     * @param string $manager
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setManager($manager = null)
    {
        // validation for constraint: string
        if (!is_null($manager) && !is_string($manager)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manager, true), gettype($manager)), __LINE__);
        }
        $this->Manager = $manager;
        return $this;
    }
    /**
     * Get Mileage value
     * @return string|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param string $mileage
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMileage($mileage = null)
    {
        // validation for constraint: string
        if (!is_null($mileage) && !is_string($mileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mileage, true), gettype($mileage)), __LINE__);
        }
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get OfficeLocation value
     * @return string|null
     */
    public function getOfficeLocation()
    {
        return $this->OfficeLocation;
    }
    /**
     * Set OfficeLocation value
     * @param string $officeLocation
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setOfficeLocation($officeLocation = null)
    {
        // validation for constraint: string
        if (!is_null($officeLocation) && !is_string($officeLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeLocation, true), gettype($officeLocation)), __LINE__);
        }
        $this->OfficeLocation = $officeLocation;
        return $this;
    }
    /**
     * Get PostalAddressIndex value
     * @return string|null
     */
    public function getPostalAddressIndex()
    {
        return $this->PostalAddressIndex;
    }
    /**
     * Set PostalAddressIndex value
     * @uses \Ews\EnumType\EwsPhysicalAddressIndexType::valueIsValid()
     * @uses \Ews\EnumType\EwsPhysicalAddressIndexType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $postalAddressIndex
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPostalAddressIndex($postalAddressIndex = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPhysicalAddressIndexType::valueIsValid($postalAddressIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPhysicalAddressIndexType', is_array($postalAddressIndex) ? implode(', ', $postalAddressIndex) : var_export($postalAddressIndex, true), implode(', ', \Ews\EnumType\EwsPhysicalAddressIndexType::getValidValues())), __LINE__);
        }
        $this->PostalAddressIndex = $postalAddressIndex;
        return $this;
    }
    /**
     * Get Profession value
     * @return string|null
     */
    public function getProfession()
    {
        return $this->Profession;
    }
    /**
     * Set Profession value
     * @param string $profession
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setProfession($profession = null)
    {
        // validation for constraint: string
        if (!is_null($profession) && !is_string($profession)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profession, true), gettype($profession)), __LINE__);
        }
        $this->Profession = $profession;
        return $this;
    }
    /**
     * Get SpouseName value
     * @return string|null
     */
    public function getSpouseName()
    {
        return $this->SpouseName;
    }
    /**
     * Set SpouseName value
     * @param string $spouseName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSpouseName($spouseName = null)
    {
        // validation for constraint: string
        if (!is_null($spouseName) && !is_string($spouseName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spouseName, true), gettype($spouseName)), __LINE__);
        }
        $this->SpouseName = $spouseName;
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
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get WeddingAnniversary value
     * @return string|null
     */
    public function getWeddingAnniversary()
    {
        return $this->WeddingAnniversary;
    }
    /**
     * Set WeddingAnniversary value
     * @param string $weddingAnniversary
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setWeddingAnniversary($weddingAnniversary = null)
    {
        // validation for constraint: string
        if (!is_null($weddingAnniversary) && !is_string($weddingAnniversary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weddingAnniversary, true), gettype($weddingAnniversary)), __LINE__);
        }
        $this->WeddingAnniversary = $weddingAnniversary;
        return $this;
    }
    /**
     * Get HasPicture value
     * @return bool|null
     */
    public function getHasPicture()
    {
        return $this->HasPicture;
    }
    /**
     * Set HasPicture value
     * @param bool $hasPicture
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setHasPicture($hasPicture = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPicture) && !is_bool($hasPicture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPicture, true), gettype($hasPicture)), __LINE__);
        }
        $this->HasPicture = $hasPicture;
        return $this;
    }
    /**
     * Get PhoneticFullName value
     * @return string|null
     */
    public function getPhoneticFullName()
    {
        return $this->PhoneticFullName;
    }
    /**
     * Set PhoneticFullName value
     * @param string $phoneticFullName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneticFullName($phoneticFullName = null)
    {
        // validation for constraint: string
        if (!is_null($phoneticFullName) && !is_string($phoneticFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneticFullName, true), gettype($phoneticFullName)), __LINE__);
        }
        $this->PhoneticFullName = $phoneticFullName;
        return $this;
    }
    /**
     * Get PhoneticFirstName value
     * @return string|null
     */
    public function getPhoneticFirstName()
    {
        return $this->PhoneticFirstName;
    }
    /**
     * Set PhoneticFirstName value
     * @param string $phoneticFirstName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneticFirstName($phoneticFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($phoneticFirstName) && !is_string($phoneticFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneticFirstName, true), gettype($phoneticFirstName)), __LINE__);
        }
        $this->PhoneticFirstName = $phoneticFirstName;
        return $this;
    }
    /**
     * Get PhoneticLastName value
     * @return string|null
     */
    public function getPhoneticLastName()
    {
        return $this->PhoneticLastName;
    }
    /**
     * Set PhoneticLastName value
     * @param string $phoneticLastName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneticLastName($phoneticLastName = null)
    {
        // validation for constraint: string
        if (!is_null($phoneticLastName) && !is_string($phoneticLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneticLastName, true), gettype($phoneticLastName)), __LINE__);
        }
        $this->PhoneticLastName = $phoneticLastName;
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
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Photo value
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->Photo;
    }
    /**
     * Set Photo value
     * @param string $photo
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoto($photo = null)
    {
        // validation for constraint: string
        if (!is_null($photo) && !is_string($photo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photo, true), gettype($photo)), __LINE__);
        }
        $this->Photo = $photo;
        return $this;
    }
    /**
     * Get UserSMIMECertificate value
     * @return \Ews\ArrayType\EwsArrayOfBinaryType|null
     */
    public function getUserSMIMECertificate()
    {
        return $this->UserSMIMECertificate;
    }
    /**
     * Set UserSMIMECertificate value
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUserSMIMECertificate(\Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate = null)
    {
        $this->UserSMIMECertificate = $userSMIMECertificate;
        return $this;
    }
    /**
     * Get MSExchangeCertificate value
     * @return \Ews\ArrayType\EwsArrayOfBinaryType|null
     */
    public function getMSExchangeCertificate()
    {
        return $this->MSExchangeCertificate;
    }
    /**
     * Set MSExchangeCertificate value
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMSExchangeCertificate(\Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate = null)
    {
        $this->MSExchangeCertificate = $mSExchangeCertificate;
        return $this;
    }
    /**
     * Get DirectoryId value
     * @return string|null
     */
    public function getDirectoryId()
    {
        return $this->DirectoryId;
    }
    /**
     * Set DirectoryId value
     * @param string $directoryId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDirectoryId($directoryId = null)
    {
        // validation for constraint: string
        if (!is_null($directoryId) && !is_string($directoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directoryId, true), gettype($directoryId)), __LINE__);
        }
        $this->DirectoryId = $directoryId;
        return $this;
    }
    /**
     * Get ManagerMailbox value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getManagerMailbox()
    {
        return $this->ManagerMailbox;
    }
    /**
     * Set ManagerMailbox value
     * @param \Ews\StructType\EwsSingleRecipientType $managerMailbox
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setManagerMailbox(\Ews\StructType\EwsSingleRecipientType $managerMailbox = null)
    {
        $this->ManagerMailbox = $managerMailbox;
        return $this;
    }
    /**
     * Get DirectReports value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getDirectReports()
    {
        return $this->DirectReports;
    }
    /**
     * Set DirectReports value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $directReports
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDirectReports(\Ews\ArrayType\EwsArrayOfRecipientsType $directReports = null)
    {
        $this->DirectReports = $directReports;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get IsAutoUpdateDisabled value
     * @return bool|null
     */
    public function getIsAutoUpdateDisabled()
    {
        return $this->IsAutoUpdateDisabled;
    }
    /**
     * Set IsAutoUpdateDisabled value
     * @param bool $isAutoUpdateDisabled
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsAutoUpdateDisabled($isAutoUpdateDisabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAutoUpdateDisabled) && !is_bool($isAutoUpdateDisabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutoUpdateDisabled, true), gettype($isAutoUpdateDisabled)), __LINE__);
        }
        $this->IsAutoUpdateDisabled = $isAutoUpdateDisabled;
        return $this;
    }
    /**
     * Get IsMessengerEnabled value
     * @return bool|null
     */
    public function getIsMessengerEnabled()
    {
        return $this->IsMessengerEnabled;
    }
    /**
     * Set IsMessengerEnabled value
     * @param bool $isMessengerEnabled
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsMessengerEnabled($isMessengerEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMessengerEnabled) && !is_bool($isMessengerEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMessengerEnabled, true), gettype($isMessengerEnabled)), __LINE__);
        }
        $this->IsMessengerEnabled = $isMessengerEnabled;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get ContactShortId value
     * @return int|null
     */
    public function getContactShortId()
    {
        return $this->ContactShortId;
    }
    /**
     * Set ContactShortId value
     * @param int $contactShortId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setContactShortId($contactShortId = null)
    {
        // validation for constraint: int
        if (!is_null($contactShortId) && !(is_int($contactShortId) || ctype_digit($contactShortId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactShortId, true), gettype($contactShortId)), __LINE__);
        }
        $this->ContactShortId = $contactShortId;
        return $this;
    }
    /**
     * Get ContactType value
     * @return string|null
     */
    public function getContactType()
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param string $contactType
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setContactType($contactType = null)
    {
        // validation for constraint: string
        if (!is_null($contactType) && !is_string($contactType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactType, true), gettype($contactType)), __LINE__);
        }
        $this->ContactType = $contactType;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get IsHidden value
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->IsHidden;
    }
    /**
     * Set IsHidden value
     * @param bool $isHidden
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsHidden($isHidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($isHidden) && !is_bool($isHidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHidden, true), gettype($isHidden)), __LINE__);
        }
        $this->IsHidden = $isHidden;
        return $this;
    }
    /**
     * Get ObjectId value
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }
    /**
     * Set ObjectId value
     * @param string $objectId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setObjectId($objectId = null)
    {
        // validation for constraint: string
        if (!is_null($objectId) && !is_string($objectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectId, true), gettype($objectId)), __LINE__);
        }
        $this->ObjectId = $objectId;
        return $this;
    }
    /**
     * Get PassportId value
     * @return int|null
     */
    public function getPassportId()
    {
        return $this->PassportId;
    }
    /**
     * Set PassportId value
     * @param int $passportId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPassportId($passportId = null)
    {
        // validation for constraint: int
        if (!is_null($passportId) && !(is_int($passportId) || ctype_digit($passportId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passportId, true), gettype($passportId)), __LINE__);
        }
        $this->PassportId = $passportId;
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return bool|null
     */
    public function getIsPrivate()
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param bool $isPrivate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsPrivate($isPrivate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrivate, true), gettype($isPrivate)), __LINE__);
        }
        $this->IsPrivate = $isPrivate;
        return $this;
    }
    /**
     * Get SourceId value
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSourceId($sourceId = null)
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        return $this;
    }
    /**
     * Get TrustLevel value
     * @return int|null
     */
    public function getTrustLevel()
    {
        return $this->TrustLevel;
    }
    /**
     * Set TrustLevel value
     * @param int $trustLevel
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setTrustLevel($trustLevel = null)
    {
        // validation for constraint: int
        if (!is_null($trustLevel) && !(is_int($trustLevel) || ctype_digit($trustLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($trustLevel, true), gettype($trustLevel)), __LINE__);
        }
        $this->TrustLevel = $trustLevel;
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCreatedBy($createdBy = null)
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get Urls value
     * @return \Ews\StructType\EwsContactUrlDictionaryType|null
     */
    public function getUrls()
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \Ews\StructType\EwsContactUrlDictionaryType $urls
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUrls(\Ews\StructType\EwsContactUrlDictionaryType $urls = null)
    {
        $this->Urls = $urls;
        return $this;
    }
    /**
     * Get Cid value
     * @return int|null
     */
    public function getCid()
    {
        return $this->Cid;
    }
    /**
     * Set Cid value
     * @param int $cid
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCid($cid = null)
    {
        // validation for constraint: int
        if (!is_null($cid) && !(is_int($cid) || ctype_digit($cid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cid, true), gettype($cid)), __LINE__);
        }
        $this->Cid = $cid;
        return $this;
    }
    /**
     * Get SkypeAuthCertificate value
     * @return string|null
     */
    public function getSkypeAuthCertificate()
    {
        return $this->SkypeAuthCertificate;
    }
    /**
     * Set SkypeAuthCertificate value
     * @param string $skypeAuthCertificate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeAuthCertificate($skypeAuthCertificate = null)
    {
        // validation for constraint: string
        if (!is_null($skypeAuthCertificate) && !is_string($skypeAuthCertificate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeAuthCertificate, true), gettype($skypeAuthCertificate)), __LINE__);
        }
        $this->SkypeAuthCertificate = $skypeAuthCertificate;
        return $this;
    }
    /**
     * Get SkypeContext value
     * @return string|null
     */
    public function getSkypeContext()
    {
        return $this->SkypeContext;
    }
    /**
     * Set SkypeContext value
     * @param string $skypeContext
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeContext($skypeContext = null)
    {
        // validation for constraint: string
        if (!is_null($skypeContext) && !is_string($skypeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeContext, true), gettype($skypeContext)), __LINE__);
        }
        $this->SkypeContext = $skypeContext;
        return $this;
    }
    /**
     * Get SkypeId value
     * @return string|null
     */
    public function getSkypeId()
    {
        return $this->SkypeId;
    }
    /**
     * Set SkypeId value
     * @param string $skypeId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeId($skypeId = null)
    {
        // validation for constraint: string
        if (!is_null($skypeId) && !is_string($skypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeId, true), gettype($skypeId)), __LINE__);
        }
        $this->SkypeId = $skypeId;
        return $this;
    }
    /**
     * Get SkypeRelationship value
     * @return string|null
     */
    public function getSkypeRelationship()
    {
        return $this->SkypeRelationship;
    }
    /**
     * Set SkypeRelationship value
     * @param string $skypeRelationship
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeRelationship($skypeRelationship = null)
    {
        // validation for constraint: string
        if (!is_null($skypeRelationship) && !is_string($skypeRelationship)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeRelationship, true), gettype($skypeRelationship)), __LINE__);
        }
        $this->SkypeRelationship = $skypeRelationship;
        return $this;
    }
    /**
     * Get YomiNickname value
     * @return string|null
     */
    public function getYomiNickname()
    {
        return $this->YomiNickname;
    }
    /**
     * Set YomiNickname value
     * @param string $yomiNickname
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setYomiNickname($yomiNickname = null)
    {
        // validation for constraint: string
        if (!is_null($yomiNickname) && !is_string($yomiNickname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yomiNickname, true), gettype($yomiNickname)), __LINE__);
        }
        $this->YomiNickname = $yomiNickname;
        return $this;
    }
    /**
     * Get XboxLiveTag value
     * @return string|null
     */
    public function getXboxLiveTag()
    {
        return $this->XboxLiveTag;
    }
    /**
     * Set XboxLiveTag value
     * @param string $xboxLiveTag
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setXboxLiveTag($xboxLiveTag = null)
    {
        // validation for constraint: string
        if (!is_null($xboxLiveTag) && !is_string($xboxLiveTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xboxLiveTag, true), gettype($xboxLiveTag)), __LINE__);
        }
        $this->XboxLiveTag = $xboxLiveTag;
        return $this;
    }
    /**
     * Get InviteFree value
     * @return bool|null
     */
    public function getInviteFree()
    {
        return $this->InviteFree;
    }
    /**
     * Set InviteFree value
     * @param bool $inviteFree
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setInviteFree($inviteFree = null)
    {
        // validation for constraint: boolean
        if (!is_null($inviteFree) && !is_bool($inviteFree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inviteFree, true), gettype($inviteFree)), __LINE__);
        }
        $this->InviteFree = $inviteFree;
        return $this;
    }
    /**
     * Get HidePresenceAndProfile value
     * @return bool|null
     */
    public function getHidePresenceAndProfile()
    {
        return $this->HidePresenceAndProfile;
    }
    /**
     * Set HidePresenceAndProfile value
     * @param bool $hidePresenceAndProfile
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setHidePresenceAndProfile($hidePresenceAndProfile = null)
    {
        // validation for constraint: boolean
        if (!is_null($hidePresenceAndProfile) && !is_bool($hidePresenceAndProfile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hidePresenceAndProfile, true), gettype($hidePresenceAndProfile)), __LINE__);
        }
        $this->HidePresenceAndProfile = $hidePresenceAndProfile;
        return $this;
    }
    /**
     * Get IsPendingOutbound value
     * @return bool|null
     */
    public function getIsPendingOutbound()
    {
        return $this->IsPendingOutbound;
    }
    /**
     * Set IsPendingOutbound value
     * @param bool $isPendingOutbound
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsPendingOutbound($isPendingOutbound = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPendingOutbound) && !is_bool($isPendingOutbound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPendingOutbound, true), gettype($isPendingOutbound)), __LINE__);
        }
        $this->IsPendingOutbound = $isPendingOutbound;
        return $this;
    }
    /**
     * Get SupportGroupFeeds value
     * @return bool|null
     */
    public function getSupportGroupFeeds()
    {
        return $this->SupportGroupFeeds;
    }
    /**
     * Set SupportGroupFeeds value
     * @param bool $supportGroupFeeds
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSupportGroupFeeds($supportGroupFeeds = null)
    {
        // validation for constraint: boolean
        if (!is_null($supportGroupFeeds) && !is_bool($supportGroupFeeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supportGroupFeeds, true), gettype($supportGroupFeeds)), __LINE__);
        }
        $this->SupportGroupFeeds = $supportGroupFeeds;
        return $this;
    }
    /**
     * Get UserTileHash value
     * @return string|null
     */
    public function getUserTileHash()
    {
        return $this->UserTileHash;
    }
    /**
     * Set UserTileHash value
     * @param string $userTileHash
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUserTileHash($userTileHash = null)
    {
        // validation for constraint: string
        if (!is_null($userTileHash) && !is_string($userTileHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userTileHash, true), gettype($userTileHash)), __LINE__);
        }
        $this->UserTileHash = $userTileHash;
        return $this;
    }
    /**
     * Get UnifiedInbox value
     * @return bool|null
     */
    public function getUnifiedInbox()
    {
        return $this->UnifiedInbox;
    }
    /**
     * Set UnifiedInbox value
     * @param bool $unifiedInbox
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUnifiedInbox($unifiedInbox = null)
    {
        // validation for constraint: boolean
        if (!is_null($unifiedInbox) && !is_bool($unifiedInbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unifiedInbox, true), gettype($unifiedInbox)), __LINE__);
        }
        $this->UnifiedInbox = $unifiedInbox;
        return $this;
    }
    /**
     * Get Mris value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getMris()
    {
        return $this->Mris;
    }
    /**
     * Set Mris value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $mris
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMris(\Ews\ArrayType\EwsArrayOfStringsType $mris = null)
    {
        $this->Mris = $mris;
        return $this;
    }
    /**
     * Get Wlid value
     * @return string|null
     */
    public function getWlid()
    {
        return $this->Wlid;
    }
    /**
     * Set Wlid value
     * @param string $wlid
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setWlid($wlid = null)
    {
        // validation for constraint: string
        if (!is_null($wlid) && !is_string($wlid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wlid, true), gettype($wlid)), __LINE__);
        }
        $this->Wlid = $wlid;
        return $this;
    }
    /**
     * Get AbchContactId value
     * @return string|null
     */
    public function getAbchContactId()
    {
        return $this->AbchContactId;
    }
    /**
     * Set AbchContactId value
     * @param string $abchContactId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAbchContactId($abchContactId = null)
    {
        // validation for constraint: string
        if (!is_null($abchContactId) && !is_string($abchContactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abchContactId, true), gettype($abchContactId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($abchContactId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $abchContactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($abchContactId, true)), __LINE__);
        }
        $this->AbchContactId = $abchContactId;
        return $this;
    }
    /**
     * Get NotInBirthdayCalendar value
     * @return bool|null
     */
    public function getNotInBirthdayCalendar()
    {
        return $this->NotInBirthdayCalendar;
    }
    /**
     * Set NotInBirthdayCalendar value
     * @param bool $notInBirthdayCalendar
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setNotInBirthdayCalendar($notInBirthdayCalendar = null)
    {
        // validation for constraint: boolean
        if (!is_null($notInBirthdayCalendar) && !is_bool($notInBirthdayCalendar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notInBirthdayCalendar, true), gettype($notInBirthdayCalendar)), __LINE__);
        }
        $this->NotInBirthdayCalendar = $notInBirthdayCalendar;
        return $this;
    }
    /**
     * Get ShellContactType value
     * @return string|null
     */
    public function getShellContactType()
    {
        return $this->ShellContactType;
    }
    /**
     * Set ShellContactType value
     * @param string $shellContactType
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setShellContactType($shellContactType = null)
    {
        // validation for constraint: string
        if (!is_null($shellContactType) && !is_string($shellContactType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shellContactType, true), gettype($shellContactType)), __LINE__);
        }
        $this->ShellContactType = $shellContactType;
        return $this;
    }
    /**
     * Get ImMri value
     * @return string|null
     */
    public function getImMri()
    {
        return $this->ImMri;
    }
    /**
     * Set ImMri value
     * @param string $imMri
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setImMri($imMri = null)
    {
        // validation for constraint: string
        if (!is_null($imMri) && !is_string($imMri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imMri, true), gettype($imMri)), __LINE__);
        }
        $this->ImMri = $imMri;
        return $this;
    }
    /**
     * Get PresenceTrustLevel value
     * @return int|null
     */
    public function getPresenceTrustLevel()
    {
        return $this->PresenceTrustLevel;
    }
    /**
     * Set PresenceTrustLevel value
     * @param int $presenceTrustLevel
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPresenceTrustLevel($presenceTrustLevel = null)
    {
        // validation for constraint: int
        if (!is_null($presenceTrustLevel) && !(is_int($presenceTrustLevel) || ctype_digit($presenceTrustLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($presenceTrustLevel, true), gettype($presenceTrustLevel)), __LINE__);
        }
        $this->PresenceTrustLevel = $presenceTrustLevel;
        return $this;
    }
    /**
     * Get OtherMri value
     * @return string|null
     */
    public function getOtherMri()
    {
        return $this->OtherMri;
    }
    /**
     * Set OtherMri value
     * @param string $otherMri
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setOtherMri($otherMri = null)
    {
        // validation for constraint: string
        if (!is_null($otherMri) && !is_string($otherMri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherMri, true), gettype($otherMri)), __LINE__);
        }
        $this->OtherMri = $otherMri;
        return $this;
    }
    /**
     * Get ProfileLastChanged value
     * @return string|null
     */
    public function getProfileLastChanged()
    {
        return $this->ProfileLastChanged;
    }
    /**
     * Set ProfileLastChanged value
     * @param string $profileLastChanged
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setProfileLastChanged($profileLastChanged = null)
    {
        // validation for constraint: string
        if (!is_null($profileLastChanged) && !is_string($profileLastChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileLastChanged, true), gettype($profileLastChanged)), __LINE__);
        }
        $this->ProfileLastChanged = $profileLastChanged;
        return $this;
    }
    /**
     * Get MobileIMEnabled value
     * @return bool|null
     */
    public function getMobileIMEnabled()
    {
        return $this->MobileIMEnabled;
    }
    /**
     * Set MobileIMEnabled value
     * @param bool $mobileIMEnabled
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMobileIMEnabled($mobileIMEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($mobileIMEnabled) && !is_bool($mobileIMEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobileIMEnabled, true), gettype($mobileIMEnabled)), __LINE__);
        }
        $this->MobileIMEnabled = $mobileIMEnabled;
        return $this;
    }
    /**
     * Get PartnerNetworkProfilePhotoUrl value
     * @return string|null
     */
    public function getPartnerNetworkProfilePhotoUrl()
    {
        return $this->PartnerNetworkProfilePhotoUrl;
    }
    /**
     * Set PartnerNetworkProfilePhotoUrl value
     * @param string $partnerNetworkProfilePhotoUrl
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPartnerNetworkProfilePhotoUrl($partnerNetworkProfilePhotoUrl = null)
    {
        // validation for constraint: string
        if (!is_null($partnerNetworkProfilePhotoUrl) && !is_string($partnerNetworkProfilePhotoUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerNetworkProfilePhotoUrl, true), gettype($partnerNetworkProfilePhotoUrl)), __LINE__);
        }
        $this->PartnerNetworkProfilePhotoUrl = $partnerNetworkProfilePhotoUrl;
        return $this;
    }
    /**
     * Get PartnerNetworkThumbnailPhotoUrl value
     * @return string|null
     */
    public function getPartnerNetworkThumbnailPhotoUrl()
    {
        return $this->PartnerNetworkThumbnailPhotoUrl;
    }
    /**
     * Set PartnerNetworkThumbnailPhotoUrl value
     * @param string $partnerNetworkThumbnailPhotoUrl
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPartnerNetworkThumbnailPhotoUrl($partnerNetworkThumbnailPhotoUrl = null)
    {
        // validation for constraint: string
        if (!is_null($partnerNetworkThumbnailPhotoUrl) && !is_string($partnerNetworkThumbnailPhotoUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerNetworkThumbnailPhotoUrl, true), gettype($partnerNetworkThumbnailPhotoUrl)), __LINE__);
        }
        $this->PartnerNetworkThumbnailPhotoUrl = $partnerNetworkThumbnailPhotoUrl;
        return $this;
    }
}
