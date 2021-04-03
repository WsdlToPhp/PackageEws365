<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $FileAs = null;
    /**
     * The FileAsMapping
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileAsMapping = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The GivenName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GivenName = null;
    /**
     * The Initials
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Initials = null;
    /**
     * The MiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MiddleName = null;
    /**
     * The Nickname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Nickname = null;
    /**
     * The CompleteName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsCompleteNameType|null
     */
    protected ?\StructType\EwsCompleteNameType $CompleteName = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyName = null;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressDictionaryType|null
     */
    protected ?\StructType\EwsEmailAddressDictionaryType $EmailAddresses = null;
    /**
     * The AbchEmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsAbchEmailAddressDictionaryType|null
     */
    protected ?\StructType\EwsAbchEmailAddressDictionaryType $AbchEmailAddresses = null;
    /**
     * The PhysicalAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsPhysicalAddressDictionaryType|null
     */
    protected ?\StructType\EwsPhysicalAddressDictionaryType $PhysicalAddresses = null;
    /**
     * The PhoneNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsPhoneNumberDictionaryType|null
     */
    protected ?\StructType\EwsPhoneNumberDictionaryType $PhoneNumbers = null;
    /**
     * The AssistantName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssistantName = null;
    /**
     * The Birthday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Birthday = null;
    /**
     * The BusinessHomePage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BusinessHomePage = null;
    /**
     * The Children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Children = null;
    /**
     * The Companies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Companies = null;
    /**
     * The ContactSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactSource = null;
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Department = null;
    /**
     * The Generation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Generation = null;
    /**
     * The ImAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsImAddressDictionaryType|null
     */
    protected ?\StructType\EwsImAddressDictionaryType $ImAddresses = null;
    /**
     * The JobTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JobTitle = null;
    /**
     * The Manager
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Manager = null;
    /**
     * The Mileage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Mileage = null;
    /**
     * The OfficeLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OfficeLocation = null;
    /**
     * The PostalAddressIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalAddressIndex = null;
    /**
     * The Profession
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Profession = null;
    /**
     * The SpouseName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SpouseName = null;
    /**
     * The Surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Surname = null;
    /**
     * The WeddingAnniversary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WeddingAnniversary = null;
    /**
     * The HasPicture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasPicture = null;
    /**
     * The PhoneticFullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneticFullName = null;
    /**
     * The PhoneticFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneticFirstName = null;
    /**
     * The PhoneticLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneticLastName = null;
    /**
     * The Alias
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Alias = null;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Notes = null;
    /**
     * The Photo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Photo = null;
    /**
     * The UserSMIMECertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfBinaryType|null
     */
    protected ?\ArrayType\EwsArrayOfBinaryType $UserSMIMECertificate = null;
    /**
     * The MSExchangeCertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfBinaryType|null
     */
    protected ?\ArrayType\EwsArrayOfBinaryType $MSExchangeCertificate = null;
    /**
     * The DirectoryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DirectoryId = null;
    /**
     * The ManagerMailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $ManagerMailbox = null;
    /**
     * The DirectReports
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $DirectReports = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * The IsAutoUpdateDisabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAutoUpdateDisabled = null;
    /**
     * The IsMessengerEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMessengerEnabled = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The ContactShortId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ContactShortId = null;
    /**
     * The ContactType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactType = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The IsHidden
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsHidden = null;
    /**
     * The ObjectId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ObjectId = null;
    /**
     * The PassportId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PassportId = null;
    /**
     * The IsPrivate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsPrivate = null;
    /**
     * The SourceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SourceId = null;
    /**
     * The TrustLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TrustLevel = null;
    /**
     * The CreatedBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatedBy = null;
    /**
     * The Urls
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsContactUrlDictionaryType|null
     */
    protected ?\StructType\EwsContactUrlDictionaryType $Urls = null;
    /**
     * The Cid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Cid = null;
    /**
     * The SkypeAuthCertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SkypeAuthCertificate = null;
    /**
     * The SkypeContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SkypeContext = null;
    /**
     * The SkypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SkypeId = null;
    /**
     * The SkypeRelationship
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SkypeRelationship = null;
    /**
     * The YomiNickname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YomiNickname = null;
    /**
     * The XboxLiveTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $XboxLiveTag = null;
    /**
     * The InviteFree
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InviteFree = null;
    /**
     * The HidePresenceAndProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HidePresenceAndProfile = null;
    /**
     * The IsPendingOutbound
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsPendingOutbound = null;
    /**
     * The SupportGroupFeeds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SupportGroupFeeds = null;
    /**
     * The UserTileHash
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserTileHash = null;
    /**
     * The UnifiedInbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UnifiedInbox = null;
    /**
     * The Mris
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Mris = null;
    /**
     * The Wlid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Wlid = null;
    /**
     * The AbchContactId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $AbchContactId = null;
    /**
     * The NotInBirthdayCalendar
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NotInBirthdayCalendar = null;
    /**
     * The ShellContactType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShellContactType = null;
    /**
     * The ImMri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImMri = null;
    /**
     * The PresenceTrustLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PresenceTrustLevel = null;
    /**
     * The OtherMri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OtherMri = null;
    /**
     * The ProfileLastChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProfileLastChanged = null;
    /**
     * The MobileIMEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MobileIMEnabled = null;
    /**
     * The PartnerNetworkProfilePhotoUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PartnerNetworkProfilePhotoUrl = null;
    /**
     * The PartnerNetworkThumbnailPhotoUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PartnerNetworkThumbnailPhotoUrl = null;
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
     * @param \StructType\EwsCompleteNameType $completeName
     * @param string $companyName
     * @param \StructType\EwsEmailAddressDictionaryType $emailAddresses
     * @param \StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses
     * @param \StructType\EwsPhysicalAddressDictionaryType $physicalAddresses
     * @param \StructType\EwsPhoneNumberDictionaryType $phoneNumbers
     * @param string $assistantName
     * @param string $birthday
     * @param string $businessHomePage
     * @param \ArrayType\EwsArrayOfStringsType $children
     * @param \ArrayType\EwsArrayOfStringsType $companies
     * @param string $contactSource
     * @param string $department
     * @param string $generation
     * @param \StructType\EwsImAddressDictionaryType $imAddresses
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
     * @param \ArrayType\EwsArrayOfBinaryType $userSMIMECertificate
     * @param \ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate
     * @param string $directoryId
     * @param \StructType\EwsSingleRecipientType $managerMailbox
     * @param \ArrayType\EwsArrayOfRecipientsType $directReports
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
     * @param \StructType\EwsContactUrlDictionaryType $urls
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
     * @param \ArrayType\EwsArrayOfStringsType $mris
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
    public function __construct(?string $fileAs = null, ?string $fileAsMapping = null, ?string $displayName = null, ?string $givenName = null, ?string $initials = null, ?string $middleName = null, ?string $nickname = null, ?\StructType\EwsCompleteNameType $completeName = null, ?string $companyName = null, ?\StructType\EwsEmailAddressDictionaryType $emailAddresses = null, ?\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses = null, ?\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses = null, ?\StructType\EwsPhoneNumberDictionaryType $phoneNumbers = null, ?string $assistantName = null, ?string $birthday = null, ?string $businessHomePage = null, ?\ArrayType\EwsArrayOfStringsType $children = null, ?\ArrayType\EwsArrayOfStringsType $companies = null, ?string $contactSource = null, ?string $department = null, ?string $generation = null, ?\StructType\EwsImAddressDictionaryType $imAddresses = null, ?string $jobTitle = null, ?string $manager = null, ?string $mileage = null, ?string $officeLocation = null, ?string $postalAddressIndex = null, ?string $profession = null, ?string $spouseName = null, ?string $surname = null, ?string $weddingAnniversary = null, ?bool $hasPicture = null, ?string $phoneticFullName = null, ?string $phoneticFirstName = null, ?string $phoneticLastName = null, ?string $alias = null, ?string $notes = null, ?string $photo = null, ?\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate = null, ?\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate = null, ?string $directoryId = null, ?\StructType\EwsSingleRecipientType $managerMailbox = null, ?\ArrayType\EwsArrayOfRecipientsType $directReports = null, ?string $accountName = null, ?bool $isAutoUpdateDisabled = null, ?bool $isMessengerEnabled = null, ?string $comment = null, ?int $contactShortId = null, ?string $contactType = null, ?string $gender = null, ?bool $isHidden = null, ?string $objectId = null, ?int $passportId = null, ?bool $isPrivate = null, ?string $sourceId = null, ?int $trustLevel = null, ?string $createdBy = null, ?\StructType\EwsContactUrlDictionaryType $urls = null, ?int $cid = null, ?string $skypeAuthCertificate = null, ?string $skypeContext = null, ?string $skypeId = null, ?string $skypeRelationship = null, ?string $yomiNickname = null, ?string $xboxLiveTag = null, ?bool $inviteFree = null, ?bool $hidePresenceAndProfile = null, ?bool $isPendingOutbound = null, ?bool $supportGroupFeeds = null, ?string $userTileHash = null, ?bool $unifiedInbox = null, ?\ArrayType\EwsArrayOfStringsType $mris = null, ?string $wlid = null, ?string $abchContactId = null, ?bool $notInBirthdayCalendar = null, ?string $shellContactType = null, ?string $imMri = null, ?int $presenceTrustLevel = null, ?string $otherMri = null, ?string $profileLastChanged = null, ?bool $mobileIMEnabled = null, ?string $partnerNetworkProfilePhotoUrl = null, ?string $partnerNetworkThumbnailPhotoUrl = null)
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
    public function getFileAs(): ?string
    {
        return $this->FileAs;
    }
    /**
     * Set FileAs value
     * @param string $fileAs
     * @return \StructType\EwsContactItemType
     */
    public function setFileAs(?string $fileAs = null): self
    {
        // validation for constraint: string
        if (!is_null($fileAs) && !is_string($fileAs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileAs, true), gettype($fileAs)), __LINE__);
        }
        $this->FileAs = $fileAs;
        
        return $this;
    }
    /**
     * Get FileAsMapping value
     * @return string|null
     */
    public function getFileAsMapping(): ?string
    {
        return $this->FileAsMapping;
    }
    /**
     * Set FileAsMapping value
     * @uses \EnumType\EwsFileAsMappingType::valueIsValid()
     * @uses \EnumType\EwsFileAsMappingType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fileAsMapping
     * @return \StructType\EwsContactItemType
     */
    public function setFileAsMapping(?string $fileAsMapping = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsFileAsMappingType::valueIsValid($fileAsMapping)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFileAsMappingType', is_array($fileAsMapping) ? implode(', ', $fileAsMapping) : var_export($fileAsMapping, true), implode(', ', \EnumType\EwsFileAsMappingType::getValidValues())), __LINE__);
        }
        $this->FileAsMapping = $fileAsMapping;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsContactItemType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
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
     * @return \StructType\EwsContactItemType
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
     * @return \StructType\EwsContactItemType
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
     * @return \StructType\EwsContactItemType
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
     * @return \StructType\EwsContactItemType
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
     * Get CompleteName value
     * @return \StructType\EwsCompleteNameType|null
     */
    public function getCompleteName(): ?\StructType\EwsCompleteNameType
    {
        return $this->CompleteName;
    }
    /**
     * Set CompleteName value
     * @param \StructType\EwsCompleteNameType $completeName
     * @return \StructType\EwsContactItemType
     */
    public function setCompleteName(?\StructType\EwsCompleteNameType $completeName = null): self
    {
        $this->CompleteName = $completeName;
        
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \StructType\EwsContactItemType
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \StructType\EwsEmailAddressDictionaryType|null
     */
    public function getEmailAddresses(): ?\StructType\EwsEmailAddressDictionaryType
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \StructType\EwsEmailAddressDictionaryType $emailAddresses
     * @return \StructType\EwsContactItemType
     */
    public function setEmailAddresses(?\StructType\EwsEmailAddressDictionaryType $emailAddresses = null): self
    {
        $this->EmailAddresses = $emailAddresses;
        
        return $this;
    }
    /**
     * Get AbchEmailAddresses value
     * @return \StructType\EwsAbchEmailAddressDictionaryType|null
     */
    public function getAbchEmailAddresses(): ?\StructType\EwsAbchEmailAddressDictionaryType
    {
        return $this->AbchEmailAddresses;
    }
    /**
     * Set AbchEmailAddresses value
     * @param \StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses
     * @return \StructType\EwsContactItemType
     */
    public function setAbchEmailAddresses(?\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses = null): self
    {
        $this->AbchEmailAddresses = $abchEmailAddresses;
        
        return $this;
    }
    /**
     * Get PhysicalAddresses value
     * @return \StructType\EwsPhysicalAddressDictionaryType|null
     */
    public function getPhysicalAddresses(): ?\StructType\EwsPhysicalAddressDictionaryType
    {
        return $this->PhysicalAddresses;
    }
    /**
     * Set PhysicalAddresses value
     * @param \StructType\EwsPhysicalAddressDictionaryType $physicalAddresses
     * @return \StructType\EwsContactItemType
     */
    public function setPhysicalAddresses(?\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses = null): self
    {
        $this->PhysicalAddresses = $physicalAddresses;
        
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \StructType\EwsPhoneNumberDictionaryType|null
     */
    public function getPhoneNumbers(): ?\StructType\EwsPhoneNumberDictionaryType
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \StructType\EwsPhoneNumberDictionaryType $phoneNumbers
     * @return \StructType\EwsContactItemType
     */
    public function setPhoneNumbers(?\StructType\EwsPhoneNumberDictionaryType $phoneNumbers = null): self
    {
        $this->PhoneNumbers = $phoneNumbers;
        
        return $this;
    }
    /**
     * Get AssistantName value
     * @return string|null
     */
    public function getAssistantName(): ?string
    {
        return $this->AssistantName;
    }
    /**
     * Set AssistantName value
     * @param string $assistantName
     * @return \StructType\EwsContactItemType
     */
    public function setAssistantName(?string $assistantName = null): self
    {
        // validation for constraint: string
        if (!is_null($assistantName) && !is_string($assistantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assistantName, true), gettype($assistantName)), __LINE__);
        }
        $this->AssistantName = $assistantName;
        
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
     * @return \StructType\EwsContactItemType
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
     * Get BusinessHomePage value
     * @return string|null
     */
    public function getBusinessHomePage(): ?string
    {
        return $this->BusinessHomePage;
    }
    /**
     * Set BusinessHomePage value
     * @param string $businessHomePage
     * @return \StructType\EwsContactItemType
     */
    public function setBusinessHomePage(?string $businessHomePage = null): self
    {
        // validation for constraint: string
        if (!is_null($businessHomePage) && !is_string($businessHomePage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessHomePage, true), gettype($businessHomePage)), __LINE__);
        }
        $this->BusinessHomePage = $businessHomePage;
        
        return $this;
    }
    /**
     * Get Children value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getChildren(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Children;
    }
    /**
     * Set Children value
     * @param \ArrayType\EwsArrayOfStringsType $children
     * @return \StructType\EwsContactItemType
     */
    public function setChildren(?\ArrayType\EwsArrayOfStringsType $children = null): self
    {
        $this->Children = $children;
        
        return $this;
    }
    /**
     * Get Companies value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getCompanies(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Companies;
    }
    /**
     * Set Companies value
     * @param \ArrayType\EwsArrayOfStringsType $companies
     * @return \StructType\EwsContactItemType
     */
    public function setCompanies(?\ArrayType\EwsArrayOfStringsType $companies = null): self
    {
        $this->Companies = $companies;
        
        return $this;
    }
    /**
     * Get ContactSource value
     * @return string|null
     */
    public function getContactSource(): ?string
    {
        return $this->ContactSource;
    }
    /**
     * Set ContactSource value
     * @uses \EnumType\EwsContactSourceType::valueIsValid()
     * @uses \EnumType\EwsContactSourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $contactSource
     * @return \StructType\EwsContactItemType
     */
    public function setContactSource(?string $contactSource = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContactSourceType::valueIsValid($contactSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContactSourceType', is_array($contactSource) ? implode(', ', $contactSource) : var_export($contactSource, true), implode(', ', \EnumType\EwsContactSourceType::getValidValues())), __LINE__);
        }
        $this->ContactSource = $contactSource;
        
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
     * @return \StructType\EwsContactItemType
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
     * Get Generation value
     * @return string|null
     */
    public function getGeneration(): ?string
    {
        return $this->Generation;
    }
    /**
     * Set Generation value
     * @param string $generation
     * @return \StructType\EwsContactItemType
     */
    public function setGeneration(?string $generation = null): self
    {
        // validation for constraint: string
        if (!is_null($generation) && !is_string($generation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($generation, true), gettype($generation)), __LINE__);
        }
        $this->Generation = $generation;
        
        return $this;
    }
    /**
     * Get ImAddresses value
     * @return \StructType\EwsImAddressDictionaryType|null
     */
    public function getImAddresses(): ?\StructType\EwsImAddressDictionaryType
    {
        return $this->ImAddresses;
    }
    /**
     * Set ImAddresses value
     * @param \StructType\EwsImAddressDictionaryType $imAddresses
     * @return \StructType\EwsContactItemType
     */
    public function setImAddresses(?\StructType\EwsImAddressDictionaryType $imAddresses = null): self
    {
        $this->ImAddresses = $imAddresses;
        
        return $this;
    }
    /**
     * Get JobTitle value
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->JobTitle;
    }
    /**
     * Set JobTitle value
     * @param string $jobTitle
     * @return \StructType\EwsContactItemType
     */
    public function setJobTitle(?string $jobTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($jobTitle) && !is_string($jobTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobTitle, true), gettype($jobTitle)), __LINE__);
        }
        $this->JobTitle = $jobTitle;
        
        return $this;
    }
    /**
     * Get Manager value
     * @return string|null
     */
    public function getManager(): ?string
    {
        return $this->Manager;
    }
    /**
     * Set Manager value
     * @param string $manager
     * @return \StructType\EwsContactItemType
     */
    public function setManager(?string $manager = null): self
    {
        // validation for constraint: string
        if (!is_null($manager) && !is_string($manager)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manager, true), gettype($manager)), __LINE__);
        }
        $this->Manager = $manager;
        
        return $this;
    }
    /**
     * Get Mileage value
     * @return string|null
     */
    public function getMileage(): ?string
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param string $mileage
     * @return \StructType\EwsContactItemType
     */
    public function setMileage(?string $mileage = null): self
    {
        // validation for constraint: string
        if (!is_null($mileage) && !is_string($mileage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mileage, true), gettype($mileage)), __LINE__);
        }
        $this->Mileage = $mileage;
        
        return $this;
    }
    /**
     * Get OfficeLocation value
     * @return string|null
     */
    public function getOfficeLocation(): ?string
    {
        return $this->OfficeLocation;
    }
    /**
     * Set OfficeLocation value
     * @param string $officeLocation
     * @return \StructType\EwsContactItemType
     */
    public function setOfficeLocation(?string $officeLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($officeLocation) && !is_string($officeLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeLocation, true), gettype($officeLocation)), __LINE__);
        }
        $this->OfficeLocation = $officeLocation;
        
        return $this;
    }
    /**
     * Get PostalAddressIndex value
     * @return string|null
     */
    public function getPostalAddressIndex(): ?string
    {
        return $this->PostalAddressIndex;
    }
    /**
     * Set PostalAddressIndex value
     * @uses \EnumType\EwsPhysicalAddressIndexType::valueIsValid()
     * @uses \EnumType\EwsPhysicalAddressIndexType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $postalAddressIndex
     * @return \StructType\EwsContactItemType
     */
    public function setPostalAddressIndex(?string $postalAddressIndex = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPhysicalAddressIndexType::valueIsValid($postalAddressIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPhysicalAddressIndexType', is_array($postalAddressIndex) ? implode(', ', $postalAddressIndex) : var_export($postalAddressIndex, true), implode(', ', \EnumType\EwsPhysicalAddressIndexType::getValidValues())), __LINE__);
        }
        $this->PostalAddressIndex = $postalAddressIndex;
        
        return $this;
    }
    /**
     * Get Profession value
     * @return string|null
     */
    public function getProfession(): ?string
    {
        return $this->Profession;
    }
    /**
     * Set Profession value
     * @param string $profession
     * @return \StructType\EwsContactItemType
     */
    public function setProfession(?string $profession = null): self
    {
        // validation for constraint: string
        if (!is_null($profession) && !is_string($profession)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profession, true), gettype($profession)), __LINE__);
        }
        $this->Profession = $profession;
        
        return $this;
    }
    /**
     * Get SpouseName value
     * @return string|null
     */
    public function getSpouseName(): ?string
    {
        return $this->SpouseName;
    }
    /**
     * Set SpouseName value
     * @param string $spouseName
     * @return \StructType\EwsContactItemType
     */
    public function setSpouseName(?string $spouseName = null): self
    {
        // validation for constraint: string
        if (!is_null($spouseName) && !is_string($spouseName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spouseName, true), gettype($spouseName)), __LINE__);
        }
        $this->SpouseName = $spouseName;
        
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
     * @return \StructType\EwsContactItemType
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
     * Get WeddingAnniversary value
     * @return string|null
     */
    public function getWeddingAnniversary(): ?string
    {
        return $this->WeddingAnniversary;
    }
    /**
     * Set WeddingAnniversary value
     * @param string $weddingAnniversary
     * @return \StructType\EwsContactItemType
     */
    public function setWeddingAnniversary(?string $weddingAnniversary = null): self
    {
        // validation for constraint: string
        if (!is_null($weddingAnniversary) && !is_string($weddingAnniversary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weddingAnniversary, true), gettype($weddingAnniversary)), __LINE__);
        }
        $this->WeddingAnniversary = $weddingAnniversary;
        
        return $this;
    }
    /**
     * Get HasPicture value
     * @return bool|null
     */
    public function getHasPicture(): ?bool
    {
        return $this->HasPicture;
    }
    /**
     * Set HasPicture value
     * @param bool $hasPicture
     * @return \StructType\EwsContactItemType
     */
    public function setHasPicture(?bool $hasPicture = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasPicture) && !is_bool($hasPicture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPicture, true), gettype($hasPicture)), __LINE__);
        }
        $this->HasPicture = $hasPicture;
        
        return $this;
    }
    /**
     * Get PhoneticFullName value
     * @return string|null
     */
    public function getPhoneticFullName(): ?string
    {
        return $this->PhoneticFullName;
    }
    /**
     * Set PhoneticFullName value
     * @param string $phoneticFullName
     * @return \StructType\EwsContactItemType
     */
    public function setPhoneticFullName(?string $phoneticFullName = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneticFullName) && !is_string($phoneticFullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneticFullName, true), gettype($phoneticFullName)), __LINE__);
        }
        $this->PhoneticFullName = $phoneticFullName;
        
        return $this;
    }
    /**
     * Get PhoneticFirstName value
     * @return string|null
     */
    public function getPhoneticFirstName(): ?string
    {
        return $this->PhoneticFirstName;
    }
    /**
     * Set PhoneticFirstName value
     * @param string $phoneticFirstName
     * @return \StructType\EwsContactItemType
     */
    public function setPhoneticFirstName(?string $phoneticFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneticFirstName) && !is_string($phoneticFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneticFirstName, true), gettype($phoneticFirstName)), __LINE__);
        }
        $this->PhoneticFirstName = $phoneticFirstName;
        
        return $this;
    }
    /**
     * Get PhoneticLastName value
     * @return string|null
     */
    public function getPhoneticLastName(): ?string
    {
        return $this->PhoneticLastName;
    }
    /**
     * Set PhoneticLastName value
     * @param string $phoneticLastName
     * @return \StructType\EwsContactItemType
     */
    public function setPhoneticLastName(?string $phoneticLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneticLastName) && !is_string($phoneticLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneticLastName, true), gettype($phoneticLastName)), __LINE__);
        }
        $this->PhoneticLastName = $phoneticLastName;
        
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
     * @return \StructType\EwsContactItemType
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
     * Get Notes value
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \StructType\EwsContactItemType
     */
    public function setNotes(?string $notes = null): self
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        
        return $this;
    }
    /**
     * Get Photo value
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->Photo;
    }
    /**
     * Set Photo value
     * @param string $photo
     * @return \StructType\EwsContactItemType
     */
    public function setPhoto(?string $photo = null): self
    {
        // validation for constraint: string
        if (!is_null($photo) && !is_string($photo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photo, true), gettype($photo)), __LINE__);
        }
        $this->Photo = $photo;
        
        return $this;
    }
    /**
     * Get UserSMIMECertificate value
     * @return \ArrayType\EwsArrayOfBinaryType|null
     */
    public function getUserSMIMECertificate(): ?\ArrayType\EwsArrayOfBinaryType
    {
        return $this->UserSMIMECertificate;
    }
    /**
     * Set UserSMIMECertificate value
     * @param \ArrayType\EwsArrayOfBinaryType $userSMIMECertificate
     * @return \StructType\EwsContactItemType
     */
    public function setUserSMIMECertificate(?\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate = null): self
    {
        $this->UserSMIMECertificate = $userSMIMECertificate;
        
        return $this;
    }
    /**
     * Get MSExchangeCertificate value
     * @return \ArrayType\EwsArrayOfBinaryType|null
     */
    public function getMSExchangeCertificate(): ?\ArrayType\EwsArrayOfBinaryType
    {
        return $this->MSExchangeCertificate;
    }
    /**
     * Set MSExchangeCertificate value
     * @param \ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate
     * @return \StructType\EwsContactItemType
     */
    public function setMSExchangeCertificate(?\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate = null): self
    {
        $this->MSExchangeCertificate = $mSExchangeCertificate;
        
        return $this;
    }
    /**
     * Get DirectoryId value
     * @return string|null
     */
    public function getDirectoryId(): ?string
    {
        return $this->DirectoryId;
    }
    /**
     * Set DirectoryId value
     * @param string $directoryId
     * @return \StructType\EwsContactItemType
     */
    public function setDirectoryId(?string $directoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($directoryId) && !is_string($directoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directoryId, true), gettype($directoryId)), __LINE__);
        }
        $this->DirectoryId = $directoryId;
        
        return $this;
    }
    /**
     * Get ManagerMailbox value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getManagerMailbox(): ?\StructType\EwsSingleRecipientType
    {
        return $this->ManagerMailbox;
    }
    /**
     * Set ManagerMailbox value
     * @param \StructType\EwsSingleRecipientType $managerMailbox
     * @return \StructType\EwsContactItemType
     */
    public function setManagerMailbox(?\StructType\EwsSingleRecipientType $managerMailbox = null): self
    {
        $this->ManagerMailbox = $managerMailbox;
        
        return $this;
    }
    /**
     * Get DirectReports value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getDirectReports(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->DirectReports;
    }
    /**
     * Set DirectReports value
     * @param \ArrayType\EwsArrayOfRecipientsType $directReports
     * @return \StructType\EwsContactItemType
     */
    public function setDirectReports(?\ArrayType\EwsArrayOfRecipientsType $directReports = null): self
    {
        $this->DirectReports = $directReports;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \StructType\EwsContactItemType
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        
        return $this;
    }
    /**
     * Get IsAutoUpdateDisabled value
     * @return bool|null
     */
    public function getIsAutoUpdateDisabled(): ?bool
    {
        return $this->IsAutoUpdateDisabled;
    }
    /**
     * Set IsAutoUpdateDisabled value
     * @param bool $isAutoUpdateDisabled
     * @return \StructType\EwsContactItemType
     */
    public function setIsAutoUpdateDisabled(?bool $isAutoUpdateDisabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutoUpdateDisabled) && !is_bool($isAutoUpdateDisabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutoUpdateDisabled, true), gettype($isAutoUpdateDisabled)), __LINE__);
        }
        $this->IsAutoUpdateDisabled = $isAutoUpdateDisabled;
        
        return $this;
    }
    /**
     * Get IsMessengerEnabled value
     * @return bool|null
     */
    public function getIsMessengerEnabled(): ?bool
    {
        return $this->IsMessengerEnabled;
    }
    /**
     * Set IsMessengerEnabled value
     * @param bool $isMessengerEnabled
     * @return \StructType\EwsContactItemType
     */
    public function setIsMessengerEnabled(?bool $isMessengerEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMessengerEnabled) && !is_bool($isMessengerEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMessengerEnabled, true), gettype($isMessengerEnabled)), __LINE__);
        }
        $this->IsMessengerEnabled = $isMessengerEnabled;
        
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \StructType\EwsContactItemType
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        
        return $this;
    }
    /**
     * Get ContactShortId value
     * @return int|null
     */
    public function getContactShortId(): ?int
    {
        return $this->ContactShortId;
    }
    /**
     * Set ContactShortId value
     * @param int $contactShortId
     * @return \StructType\EwsContactItemType
     */
    public function setContactShortId(?int $contactShortId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactShortId) && !(is_int($contactShortId) || ctype_digit($contactShortId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactShortId, true), gettype($contactShortId)), __LINE__);
        }
        $this->ContactShortId = $contactShortId;
        
        return $this;
    }
    /**
     * Get ContactType value
     * @return string|null
     */
    public function getContactType(): ?string
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param string $contactType
     * @return \StructType\EwsContactItemType
     */
    public function setContactType(?string $contactType = null): self
    {
        // validation for constraint: string
        if (!is_null($contactType) && !is_string($contactType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactType, true), gettype($contactType)), __LINE__);
        }
        $this->ContactType = $contactType;
        
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \StructType\EwsContactItemType
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        
        return $this;
    }
    /**
     * Get IsHidden value
     * @return bool|null
     */
    public function getIsHidden(): ?bool
    {
        return $this->IsHidden;
    }
    /**
     * Set IsHidden value
     * @param bool $isHidden
     * @return \StructType\EwsContactItemType
     */
    public function setIsHidden(?bool $isHidden = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHidden) && !is_bool($isHidden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHidden, true), gettype($isHidden)), __LINE__);
        }
        $this->IsHidden = $isHidden;
        
        return $this;
    }
    /**
     * Get ObjectId value
     * @return string|null
     */
    public function getObjectId(): ?string
    {
        return $this->ObjectId;
    }
    /**
     * Set ObjectId value
     * @param string $objectId
     * @return \StructType\EwsContactItemType
     */
    public function setObjectId(?string $objectId = null): self
    {
        // validation for constraint: string
        if (!is_null($objectId) && !is_string($objectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectId, true), gettype($objectId)), __LINE__);
        }
        $this->ObjectId = $objectId;
        
        return $this;
    }
    /**
     * Get PassportId value
     * @return int|null
     */
    public function getPassportId(): ?int
    {
        return $this->PassportId;
    }
    /**
     * Set PassportId value
     * @param int $passportId
     * @return \StructType\EwsContactItemType
     */
    public function setPassportId(?int $passportId = null): self
    {
        // validation for constraint: int
        if (!is_null($passportId) && !(is_int($passportId) || ctype_digit($passportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passportId, true), gettype($passportId)), __LINE__);
        }
        $this->PassportId = $passportId;
        
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return bool|null
     */
    public function getIsPrivate(): ?bool
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param bool $isPrivate
     * @return \StructType\EwsContactItemType
     */
    public function setIsPrivate(?bool $isPrivate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrivate, true), gettype($isPrivate)), __LINE__);
        }
        $this->IsPrivate = $isPrivate;
        
        return $this;
    }
    /**
     * Get SourceId value
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \StructType\EwsContactItemType
     */
    public function setSourceId(?string $sourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        
        return $this;
    }
    /**
     * Get TrustLevel value
     * @return int|null
     */
    public function getTrustLevel(): ?int
    {
        return $this->TrustLevel;
    }
    /**
     * Set TrustLevel value
     * @param int $trustLevel
     * @return \StructType\EwsContactItemType
     */
    public function setTrustLevel(?int $trustLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($trustLevel) && !(is_int($trustLevel) || ctype_digit($trustLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($trustLevel, true), gettype($trustLevel)), __LINE__);
        }
        $this->TrustLevel = $trustLevel;
        
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \StructType\EwsContactItemType
     */
    public function setCreatedBy(?string $createdBy = null): self
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        
        return $this;
    }
    /**
     * Get Urls value
     * @return \StructType\EwsContactUrlDictionaryType|null
     */
    public function getUrls(): ?\StructType\EwsContactUrlDictionaryType
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \StructType\EwsContactUrlDictionaryType $urls
     * @return \StructType\EwsContactItemType
     */
    public function setUrls(?\StructType\EwsContactUrlDictionaryType $urls = null): self
    {
        $this->Urls = $urls;
        
        return $this;
    }
    /**
     * Get Cid value
     * @return int|null
     */
    public function getCid(): ?int
    {
        return $this->Cid;
    }
    /**
     * Set Cid value
     * @param int $cid
     * @return \StructType\EwsContactItemType
     */
    public function setCid(?int $cid = null): self
    {
        // validation for constraint: int
        if (!is_null($cid) && !(is_int($cid) || ctype_digit($cid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cid, true), gettype($cid)), __LINE__);
        }
        $this->Cid = $cid;
        
        return $this;
    }
    /**
     * Get SkypeAuthCertificate value
     * @return string|null
     */
    public function getSkypeAuthCertificate(): ?string
    {
        return $this->SkypeAuthCertificate;
    }
    /**
     * Set SkypeAuthCertificate value
     * @param string $skypeAuthCertificate
     * @return \StructType\EwsContactItemType
     */
    public function setSkypeAuthCertificate(?string $skypeAuthCertificate = null): self
    {
        // validation for constraint: string
        if (!is_null($skypeAuthCertificate) && !is_string($skypeAuthCertificate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeAuthCertificate, true), gettype($skypeAuthCertificate)), __LINE__);
        }
        $this->SkypeAuthCertificate = $skypeAuthCertificate;
        
        return $this;
    }
    /**
     * Get SkypeContext value
     * @return string|null
     */
    public function getSkypeContext(): ?string
    {
        return $this->SkypeContext;
    }
    /**
     * Set SkypeContext value
     * @param string $skypeContext
     * @return \StructType\EwsContactItemType
     */
    public function setSkypeContext(?string $skypeContext = null): self
    {
        // validation for constraint: string
        if (!is_null($skypeContext) && !is_string($skypeContext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeContext, true), gettype($skypeContext)), __LINE__);
        }
        $this->SkypeContext = $skypeContext;
        
        return $this;
    }
    /**
     * Get SkypeId value
     * @return string|null
     */
    public function getSkypeId(): ?string
    {
        return $this->SkypeId;
    }
    /**
     * Set SkypeId value
     * @param string $skypeId
     * @return \StructType\EwsContactItemType
     */
    public function setSkypeId(?string $skypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($skypeId) && !is_string($skypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeId, true), gettype($skypeId)), __LINE__);
        }
        $this->SkypeId = $skypeId;
        
        return $this;
    }
    /**
     * Get SkypeRelationship value
     * @return string|null
     */
    public function getSkypeRelationship(): ?string
    {
        return $this->SkypeRelationship;
    }
    /**
     * Set SkypeRelationship value
     * @param string $skypeRelationship
     * @return \StructType\EwsContactItemType
     */
    public function setSkypeRelationship(?string $skypeRelationship = null): self
    {
        // validation for constraint: string
        if (!is_null($skypeRelationship) && !is_string($skypeRelationship)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skypeRelationship, true), gettype($skypeRelationship)), __LINE__);
        }
        $this->SkypeRelationship = $skypeRelationship;
        
        return $this;
    }
    /**
     * Get YomiNickname value
     * @return string|null
     */
    public function getYomiNickname(): ?string
    {
        return $this->YomiNickname;
    }
    /**
     * Set YomiNickname value
     * @param string $yomiNickname
     * @return \StructType\EwsContactItemType
     */
    public function setYomiNickname(?string $yomiNickname = null): self
    {
        // validation for constraint: string
        if (!is_null($yomiNickname) && !is_string($yomiNickname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yomiNickname, true), gettype($yomiNickname)), __LINE__);
        }
        $this->YomiNickname = $yomiNickname;
        
        return $this;
    }
    /**
     * Get XboxLiveTag value
     * @return string|null
     */
    public function getXboxLiveTag(): ?string
    {
        return $this->XboxLiveTag;
    }
    /**
     * Set XboxLiveTag value
     * @param string $xboxLiveTag
     * @return \StructType\EwsContactItemType
     */
    public function setXboxLiveTag(?string $xboxLiveTag = null): self
    {
        // validation for constraint: string
        if (!is_null($xboxLiveTag) && !is_string($xboxLiveTag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xboxLiveTag, true), gettype($xboxLiveTag)), __LINE__);
        }
        $this->XboxLiveTag = $xboxLiveTag;
        
        return $this;
    }
    /**
     * Get InviteFree value
     * @return bool|null
     */
    public function getInviteFree(): ?bool
    {
        return $this->InviteFree;
    }
    /**
     * Set InviteFree value
     * @param bool $inviteFree
     * @return \StructType\EwsContactItemType
     */
    public function setInviteFree(?bool $inviteFree = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inviteFree) && !is_bool($inviteFree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inviteFree, true), gettype($inviteFree)), __LINE__);
        }
        $this->InviteFree = $inviteFree;
        
        return $this;
    }
    /**
     * Get HidePresenceAndProfile value
     * @return bool|null
     */
    public function getHidePresenceAndProfile(): ?bool
    {
        return $this->HidePresenceAndProfile;
    }
    /**
     * Set HidePresenceAndProfile value
     * @param bool $hidePresenceAndProfile
     * @return \StructType\EwsContactItemType
     */
    public function setHidePresenceAndProfile(?bool $hidePresenceAndProfile = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hidePresenceAndProfile) && !is_bool($hidePresenceAndProfile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hidePresenceAndProfile, true), gettype($hidePresenceAndProfile)), __LINE__);
        }
        $this->HidePresenceAndProfile = $hidePresenceAndProfile;
        
        return $this;
    }
    /**
     * Get IsPendingOutbound value
     * @return bool|null
     */
    public function getIsPendingOutbound(): ?bool
    {
        return $this->IsPendingOutbound;
    }
    /**
     * Set IsPendingOutbound value
     * @param bool $isPendingOutbound
     * @return \StructType\EwsContactItemType
     */
    public function setIsPendingOutbound(?bool $isPendingOutbound = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPendingOutbound) && !is_bool($isPendingOutbound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPendingOutbound, true), gettype($isPendingOutbound)), __LINE__);
        }
        $this->IsPendingOutbound = $isPendingOutbound;
        
        return $this;
    }
    /**
     * Get SupportGroupFeeds value
     * @return bool|null
     */
    public function getSupportGroupFeeds(): ?bool
    {
        return $this->SupportGroupFeeds;
    }
    /**
     * Set SupportGroupFeeds value
     * @param bool $supportGroupFeeds
     * @return \StructType\EwsContactItemType
     */
    public function setSupportGroupFeeds(?bool $supportGroupFeeds = null): self
    {
        // validation for constraint: boolean
        if (!is_null($supportGroupFeeds) && !is_bool($supportGroupFeeds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supportGroupFeeds, true), gettype($supportGroupFeeds)), __LINE__);
        }
        $this->SupportGroupFeeds = $supportGroupFeeds;
        
        return $this;
    }
    /**
     * Get UserTileHash value
     * @return string|null
     */
    public function getUserTileHash(): ?string
    {
        return $this->UserTileHash;
    }
    /**
     * Set UserTileHash value
     * @param string $userTileHash
     * @return \StructType\EwsContactItemType
     */
    public function setUserTileHash(?string $userTileHash = null): self
    {
        // validation for constraint: string
        if (!is_null($userTileHash) && !is_string($userTileHash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userTileHash, true), gettype($userTileHash)), __LINE__);
        }
        $this->UserTileHash = $userTileHash;
        
        return $this;
    }
    /**
     * Get UnifiedInbox value
     * @return bool|null
     */
    public function getUnifiedInbox(): ?bool
    {
        return $this->UnifiedInbox;
    }
    /**
     * Set UnifiedInbox value
     * @param bool $unifiedInbox
     * @return \StructType\EwsContactItemType
     */
    public function setUnifiedInbox(?bool $unifiedInbox = null): self
    {
        // validation for constraint: boolean
        if (!is_null($unifiedInbox) && !is_bool($unifiedInbox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unifiedInbox, true), gettype($unifiedInbox)), __LINE__);
        }
        $this->UnifiedInbox = $unifiedInbox;
        
        return $this;
    }
    /**
     * Get Mris value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getMris(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Mris;
    }
    /**
     * Set Mris value
     * @param \ArrayType\EwsArrayOfStringsType $mris
     * @return \StructType\EwsContactItemType
     */
    public function setMris(?\ArrayType\EwsArrayOfStringsType $mris = null): self
    {
        $this->Mris = $mris;
        
        return $this;
    }
    /**
     * Get Wlid value
     * @return string|null
     */
    public function getWlid(): ?string
    {
        return $this->Wlid;
    }
    /**
     * Set Wlid value
     * @param string $wlid
     * @return \StructType\EwsContactItemType
     */
    public function setWlid(?string $wlid = null): self
    {
        // validation for constraint: string
        if (!is_null($wlid) && !is_string($wlid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wlid, true), gettype($wlid)), __LINE__);
        }
        $this->Wlid = $wlid;
        
        return $this;
    }
    /**
     * Get AbchContactId value
     * @return string|null
     */
    public function getAbchContactId(): ?string
    {
        return $this->AbchContactId;
    }
    /**
     * Set AbchContactId value
     * @param string $abchContactId
     * @return \StructType\EwsContactItemType
     */
    public function setAbchContactId(?string $abchContactId = null): self
    {
        // validation for constraint: string
        if (!is_null($abchContactId) && !is_string($abchContactId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abchContactId, true), gettype($abchContactId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($abchContactId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $abchContactId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($abchContactId, true)), __LINE__);
        }
        $this->AbchContactId = $abchContactId;
        
        return $this;
    }
    /**
     * Get NotInBirthdayCalendar value
     * @return bool|null
     */
    public function getNotInBirthdayCalendar(): ?bool
    {
        return $this->NotInBirthdayCalendar;
    }
    /**
     * Set NotInBirthdayCalendar value
     * @param bool $notInBirthdayCalendar
     * @return \StructType\EwsContactItemType
     */
    public function setNotInBirthdayCalendar(?bool $notInBirthdayCalendar = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notInBirthdayCalendar) && !is_bool($notInBirthdayCalendar)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notInBirthdayCalendar, true), gettype($notInBirthdayCalendar)), __LINE__);
        }
        $this->NotInBirthdayCalendar = $notInBirthdayCalendar;
        
        return $this;
    }
    /**
     * Get ShellContactType value
     * @return string|null
     */
    public function getShellContactType(): ?string
    {
        return $this->ShellContactType;
    }
    /**
     * Set ShellContactType value
     * @param string $shellContactType
     * @return \StructType\EwsContactItemType
     */
    public function setShellContactType(?string $shellContactType = null): self
    {
        // validation for constraint: string
        if (!is_null($shellContactType) && !is_string($shellContactType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shellContactType, true), gettype($shellContactType)), __LINE__);
        }
        $this->ShellContactType = $shellContactType;
        
        return $this;
    }
    /**
     * Get ImMri value
     * @return string|null
     */
    public function getImMri(): ?string
    {
        return $this->ImMri;
    }
    /**
     * Set ImMri value
     * @param string $imMri
     * @return \StructType\EwsContactItemType
     */
    public function setImMri(?string $imMri = null): self
    {
        // validation for constraint: string
        if (!is_null($imMri) && !is_string($imMri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imMri, true), gettype($imMri)), __LINE__);
        }
        $this->ImMri = $imMri;
        
        return $this;
    }
    /**
     * Get PresenceTrustLevel value
     * @return int|null
     */
    public function getPresenceTrustLevel(): ?int
    {
        return $this->PresenceTrustLevel;
    }
    /**
     * Set PresenceTrustLevel value
     * @param int $presenceTrustLevel
     * @return \StructType\EwsContactItemType
     */
    public function setPresenceTrustLevel(?int $presenceTrustLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($presenceTrustLevel) && !(is_int($presenceTrustLevel) || ctype_digit($presenceTrustLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($presenceTrustLevel, true), gettype($presenceTrustLevel)), __LINE__);
        }
        $this->PresenceTrustLevel = $presenceTrustLevel;
        
        return $this;
    }
    /**
     * Get OtherMri value
     * @return string|null
     */
    public function getOtherMri(): ?string
    {
        return $this->OtherMri;
    }
    /**
     * Set OtherMri value
     * @param string $otherMri
     * @return \StructType\EwsContactItemType
     */
    public function setOtherMri(?string $otherMri = null): self
    {
        // validation for constraint: string
        if (!is_null($otherMri) && !is_string($otherMri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherMri, true), gettype($otherMri)), __LINE__);
        }
        $this->OtherMri = $otherMri;
        
        return $this;
    }
    /**
     * Get ProfileLastChanged value
     * @return string|null
     */
    public function getProfileLastChanged(): ?string
    {
        return $this->ProfileLastChanged;
    }
    /**
     * Set ProfileLastChanged value
     * @param string $profileLastChanged
     * @return \StructType\EwsContactItemType
     */
    public function setProfileLastChanged(?string $profileLastChanged = null): self
    {
        // validation for constraint: string
        if (!is_null($profileLastChanged) && !is_string($profileLastChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileLastChanged, true), gettype($profileLastChanged)), __LINE__);
        }
        $this->ProfileLastChanged = $profileLastChanged;
        
        return $this;
    }
    /**
     * Get MobileIMEnabled value
     * @return bool|null
     */
    public function getMobileIMEnabled(): ?bool
    {
        return $this->MobileIMEnabled;
    }
    /**
     * Set MobileIMEnabled value
     * @param bool $mobileIMEnabled
     * @return \StructType\EwsContactItemType
     */
    public function setMobileIMEnabled(?bool $mobileIMEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mobileIMEnabled) && !is_bool($mobileIMEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobileIMEnabled, true), gettype($mobileIMEnabled)), __LINE__);
        }
        $this->MobileIMEnabled = $mobileIMEnabled;
        
        return $this;
    }
    /**
     * Get PartnerNetworkProfilePhotoUrl value
     * @return string|null
     */
    public function getPartnerNetworkProfilePhotoUrl(): ?string
    {
        return $this->PartnerNetworkProfilePhotoUrl;
    }
    /**
     * Set PartnerNetworkProfilePhotoUrl value
     * @param string $partnerNetworkProfilePhotoUrl
     * @return \StructType\EwsContactItemType
     */
    public function setPartnerNetworkProfilePhotoUrl(?string $partnerNetworkProfilePhotoUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerNetworkProfilePhotoUrl) && !is_string($partnerNetworkProfilePhotoUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerNetworkProfilePhotoUrl, true), gettype($partnerNetworkProfilePhotoUrl)), __LINE__);
        }
        $this->PartnerNetworkProfilePhotoUrl = $partnerNetworkProfilePhotoUrl;
        
        return $this;
    }
    /**
     * Get PartnerNetworkThumbnailPhotoUrl value
     * @return string|null
     */
    public function getPartnerNetworkThumbnailPhotoUrl(): ?string
    {
        return $this->PartnerNetworkThumbnailPhotoUrl;
    }
    /**
     * Set PartnerNetworkThumbnailPhotoUrl value
     * @param string $partnerNetworkThumbnailPhotoUrl
     * @return \StructType\EwsContactItemType
     */
    public function setPartnerNetworkThumbnailPhotoUrl(?string $partnerNetworkThumbnailPhotoUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerNetworkThumbnailPhotoUrl) && !is_string($partnerNetworkThumbnailPhotoUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerNetworkThumbnailPhotoUrl, true), gettype($partnerNetworkThumbnailPhotoUrl)), __LINE__);
        }
        $this->PartnerNetworkThumbnailPhotoUrl = $partnerNetworkThumbnailPhotoUrl;
        
        return $this;
    }
}
