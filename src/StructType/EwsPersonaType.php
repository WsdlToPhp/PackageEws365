<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPersonaType extends AbstractStructBase
{
    /**
     * The PersonaId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $PersonaId;
    /**
     * The PersonaType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PersonaType;
    /**
     * The PersonaObjectStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PersonaObjectStatus;
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $CreationTime;
    /**
     * The Bodies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType
     */
    public $Bodies;
    /**
     * The DisplayNameFirstLastSortKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNameFirstLastSortKey;
    /**
     * The DisplayNameLastFirstSortKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNameLastFirstSortKey;
    /**
     * The CompanyNameSortKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyNameSortKey;
    /**
     * The HomeCitySortKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HomeCitySortKey;
    /**
     * The WorkCitySortKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WorkCitySortKey;
    /**
     * The DisplayNameFirstLastHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNameFirstLastHeader;
    /**
     * The DisplayNameLastFirstHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNameLastFirstHeader;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The DisplayNameFirstLast
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNameFirstLast;
    /**
     * The DisplayNameLastFirst
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNameLastFirst;
    /**
     * The FileAs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileAs;
    /**
     * The FileAsId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileAsId;
    /**
     * The DisplayNamePrefix
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayNamePrefix;
    /**
     * The GivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GivenName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Surname;
    /**
     * The Generation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Generation;
    /**
     * The Nickname
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Nickname;
    /**
     * The YomiCompanyName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $YomiCompanyName;
    /**
     * The YomiFirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $YomiFirstName;
    /**
     * The YomiLastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $YomiLastName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $EmailAddress;
    /**
     * The EmailAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $EmailAddresses;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaPhoneNumberType
     */
    public $PhoneNumber;
    /**
     * The ImAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImAddress;
    /**
     * The HomeCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HomeCity;
    /**
     * The WorkCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WorkCity;
    /**
     * The RelevanceScore
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $RelevanceScore;
    /**
     * The RankingWeight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $RankingWeight;
    /**
     * The FolderIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFolderIdType
     */
    public $FolderIds;
    /**
     * The Attributions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPersonaAttributionsType
     */
    public $Attributions;
    /**
     * The DisplayNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $DisplayNames;
    /**
     * The FileAses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $FileAses;
    /**
     * The FileAsIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $FileAsIds;
    /**
     * The DisplayNamePrefixes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $DisplayNamePrefixes;
    /**
     * The GivenNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $GivenNames;
    /**
     * The MiddleNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $MiddleNames;
    /**
     * The Surnames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Surnames;
    /**
     * The Generations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Generations;
    /**
     * The Nicknames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Nicknames;
    /**
     * The Initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Initials;
    /**
     * The YomiCompanyNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $YomiCompanyNames;
    /**
     * The YomiFirstNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $YomiFirstNames;
    /**
     * The YomiLastNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $YomiLastNames;
    /**
     * The BusinessPhoneNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $BusinessPhoneNumbers;
    /**
     * The BusinessPhoneNumbers2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $BusinessPhoneNumbers2;
    /**
     * The HomePhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $HomePhones;
    /**
     * The HomePhones2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $HomePhones2;
    /**
     * The MobilePhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $MobilePhones;
    /**
     * The MobilePhones2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $MobilePhones2;
    /**
     * The AssistantPhoneNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $AssistantPhoneNumbers;
    /**
     * The CallbackPhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $CallbackPhones;
    /**
     * The CarPhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $CarPhones;
    /**
     * The HomeFaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $HomeFaxes;
    /**
     * The OrganizationMainPhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $OrganizationMainPhones;
    /**
     * The OtherFaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $OtherFaxes;
    /**
     * The OtherTelephones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $OtherTelephones;
    /**
     * The OtherPhones2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $OtherPhones2;
    /**
     * The Pagers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $Pagers;
    /**
     * The RadioPhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $RadioPhones;
    /**
     * The TelexNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $TelexNumbers;
    /**
     * The TTYTDDPhoneNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $TTYTDDPhoneNumbers;
    /**
     * The WorkFaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public $WorkFaxes;
    /**
     * The Emails1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public $Emails1;
    /**
     * The Emails2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public $Emails2;
    /**
     * The Emails3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public $Emails3;
    /**
     * The BusinessHomePages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $BusinessHomePages;
    /**
     * The PersonalHomePages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $PersonalHomePages;
    /**
     * The OfficeLocations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $OfficeLocations;
    /**
     * The ImAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $ImAddresses;
    /**
     * The ImAddresses2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $ImAddresses2;
    /**
     * The ImAddresses3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $ImAddresses3;
    /**
     * The BusinessAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public $BusinessAddresses;
    /**
     * The HomeAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public $HomeAddresses;
    /**
     * The OtherAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public $OtherAddresses;
    /**
     * The Titles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Titles;
    /**
     * The Departments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Departments;
    /**
     * The CompanyNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $CompanyNames;
    /**
     * The Managers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Managers;
    /**
     * The AssistantNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $AssistantNames;
    /**
     * The Professions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Professions;
    /**
     * The SpouseNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $SpouseNames;
    /**
     * The Children
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public $Children;
    /**
     * The Schools
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Schools;
    /**
     * The Hobbies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Hobbies;
    /**
     * The WeddingAnniversaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $WeddingAnniversaries;
    /**
     * The Birthdays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Birthdays;
    /**
     * The Locations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public $Locations;
    /**
     * The ExtendedProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     */
    public $ExtendedProperties;
    /**
     * Constructor method for PersonaType
     * @uses EwsPersonaType::setPersonaId()
     * @uses EwsPersonaType::setPersonaType()
     * @uses EwsPersonaType::setPersonaObjectStatus()
     * @uses EwsPersonaType::setCreationTime()
     * @uses EwsPersonaType::setBodies()
     * @uses EwsPersonaType::setDisplayNameFirstLastSortKey()
     * @uses EwsPersonaType::setDisplayNameLastFirstSortKey()
     * @uses EwsPersonaType::setCompanyNameSortKey()
     * @uses EwsPersonaType::setHomeCitySortKey()
     * @uses EwsPersonaType::setWorkCitySortKey()
     * @uses EwsPersonaType::setDisplayNameFirstLastHeader()
     * @uses EwsPersonaType::setDisplayNameLastFirstHeader()
     * @uses EwsPersonaType::setDisplayName()
     * @uses EwsPersonaType::setDisplayNameFirstLast()
     * @uses EwsPersonaType::setDisplayNameLastFirst()
     * @uses EwsPersonaType::setFileAs()
     * @uses EwsPersonaType::setFileAsId()
     * @uses EwsPersonaType::setDisplayNamePrefix()
     * @uses EwsPersonaType::setGivenName()
     * @uses EwsPersonaType::setMiddleName()
     * @uses EwsPersonaType::setSurname()
     * @uses EwsPersonaType::setGeneration()
     * @uses EwsPersonaType::setNickname()
     * @uses EwsPersonaType::setYomiCompanyName()
     * @uses EwsPersonaType::setYomiFirstName()
     * @uses EwsPersonaType::setYomiLastName()
     * @uses EwsPersonaType::setTitle()
     * @uses EwsPersonaType::setDepartment()
     * @uses EwsPersonaType::setCompanyName()
     * @uses EwsPersonaType::setLocation()
     * @uses EwsPersonaType::setEmailAddress()
     * @uses EwsPersonaType::setEmailAddresses()
     * @uses EwsPersonaType::setPhoneNumber()
     * @uses EwsPersonaType::setImAddress()
     * @uses EwsPersonaType::setHomeCity()
     * @uses EwsPersonaType::setWorkCity()
     * @uses EwsPersonaType::setRelevanceScore()
     * @uses EwsPersonaType::setRankingWeight()
     * @uses EwsPersonaType::setFolderIds()
     * @uses EwsPersonaType::setAttributions()
     * @uses EwsPersonaType::setDisplayNames()
     * @uses EwsPersonaType::setFileAses()
     * @uses EwsPersonaType::setFileAsIds()
     * @uses EwsPersonaType::setDisplayNamePrefixes()
     * @uses EwsPersonaType::setGivenNames()
     * @uses EwsPersonaType::setMiddleNames()
     * @uses EwsPersonaType::setSurnames()
     * @uses EwsPersonaType::setGenerations()
     * @uses EwsPersonaType::setNicknames()
     * @uses EwsPersonaType::setInitials()
     * @uses EwsPersonaType::setYomiCompanyNames()
     * @uses EwsPersonaType::setYomiFirstNames()
     * @uses EwsPersonaType::setYomiLastNames()
     * @uses EwsPersonaType::setBusinessPhoneNumbers()
     * @uses EwsPersonaType::setBusinessPhoneNumbers2()
     * @uses EwsPersonaType::setHomePhones()
     * @uses EwsPersonaType::setHomePhones2()
     * @uses EwsPersonaType::setMobilePhones()
     * @uses EwsPersonaType::setMobilePhones2()
     * @uses EwsPersonaType::setAssistantPhoneNumbers()
     * @uses EwsPersonaType::setCallbackPhones()
     * @uses EwsPersonaType::setCarPhones()
     * @uses EwsPersonaType::setHomeFaxes()
     * @uses EwsPersonaType::setOrganizationMainPhones()
     * @uses EwsPersonaType::setOtherFaxes()
     * @uses EwsPersonaType::setOtherTelephones()
     * @uses EwsPersonaType::setOtherPhones2()
     * @uses EwsPersonaType::setPagers()
     * @uses EwsPersonaType::setRadioPhones()
     * @uses EwsPersonaType::setTelexNumbers()
     * @uses EwsPersonaType::setTTYTDDPhoneNumbers()
     * @uses EwsPersonaType::setWorkFaxes()
     * @uses EwsPersonaType::setEmails1()
     * @uses EwsPersonaType::setEmails2()
     * @uses EwsPersonaType::setEmails3()
     * @uses EwsPersonaType::setBusinessHomePages()
     * @uses EwsPersonaType::setPersonalHomePages()
     * @uses EwsPersonaType::setOfficeLocations()
     * @uses EwsPersonaType::setImAddresses()
     * @uses EwsPersonaType::setImAddresses2()
     * @uses EwsPersonaType::setImAddresses3()
     * @uses EwsPersonaType::setBusinessAddresses()
     * @uses EwsPersonaType::setHomeAddresses()
     * @uses EwsPersonaType::setOtherAddresses()
     * @uses EwsPersonaType::setTitles()
     * @uses EwsPersonaType::setDepartments()
     * @uses EwsPersonaType::setCompanyNames()
     * @uses EwsPersonaType::setManagers()
     * @uses EwsPersonaType::setAssistantNames()
     * @uses EwsPersonaType::setProfessions()
     * @uses EwsPersonaType::setSpouseNames()
     * @uses EwsPersonaType::setChildren()
     * @uses EwsPersonaType::setSchools()
     * @uses EwsPersonaType::setHobbies()
     * @uses EwsPersonaType::setWeddingAnniversaries()
     * @uses EwsPersonaType::setBirthdays()
     * @uses EwsPersonaType::setLocations()
     * @uses EwsPersonaType::setExtendedProperties()
     * @param \Ews\StructType\EwsItemIdType $personaId
     * @param string $personaType
     * @param string $personaObjectStatus
     * @param dateTime $creationTime
     * @param \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies
     * @param string $displayNameFirstLastSortKey
     * @param string $displayNameLastFirstSortKey
     * @param string $companyNameSortKey
     * @param string $homeCitySortKey
     * @param string $workCitySortKey
     * @param string $displayNameFirstLastHeader
     * @param string $displayNameLastFirstHeader
     * @param string $displayName
     * @param string $displayNameFirstLast
     * @param string $displayNameLastFirst
     * @param string $fileAs
     * @param string $fileAsId
     * @param string $displayNamePrefix
     * @param string $givenName
     * @param string $middleName
     * @param string $surname
     * @param string $generation
     * @param string $nickname
     * @param string $yomiCompanyName
     * @param string $yomiFirstName
     * @param string $yomiLastName
     * @param string $title
     * @param string $department
     * @param string $companyName
     * @param string $location
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $emailAddresses
     * @param \Ews\StructType\EwsPersonaPhoneNumberType $phoneNumber
     * @param string $imAddress
     * @param string $homeCity
     * @param string $workCity
     * @param int $relevanceScore
     * @param double $rankingWeight
     * @param \Ews\ArrayType\EwsArrayOfFolderIdType $folderIds
     * @param \Ews\ArrayType\EwsArrayOfPersonaAttributionsType $attributions
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAses
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $givenNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $middleNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $surnames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $generations
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $nicknames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $initials
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $businessPhoneNumbers
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $businessPhoneNumbers2
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $assistantPhoneNumbers
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $organizationMainPhones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $tTYTDDPhoneNumbers
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3
     * @param \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     * $businessAddresses
     * @param \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses
     * @param \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     * $otherAddresses
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $titles
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $departments
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $companyNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $managers
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $professions
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames
     * @param \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType $children
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $schools
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $hobbies
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $birthdays
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $locations
     * @param \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     * $extendedProperties
     */
    public function __construct(\Ews\StructType\EwsItemIdType $personaId = null, $personaType = null, $personaObjectStatus = null, $creationTime = null, \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies = null, $displayNameFirstLastSortKey = null, $displayNameLastFirstSortKey = null, $companyNameSortKey = null, $homeCitySortKey = null, $workCitySortKey = null, $displayNameFirstLastHeader = null, $displayNameLastFirstHeader = null, $displayName = null, $displayNameFirstLast = null, $displayNameLastFirst = null, $fileAs = null, $fileAsId = null, $displayNamePrefix = null, $givenName = null, $middleName = null, $surname = null, $generation = null, $nickname = null, $yomiCompanyName = null, $yomiFirstName = null, $yomiLastName = null, $title = null, $department = null, $companyName = null, $location = null, \Ews\StructType\EwsEmailAddressType $emailAddress = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $emailAddresses = null, \Ews\StructType\EwsPersonaPhoneNumberType $phoneNumber = null, $imAddress = null, $homeCity = null, $workCity = null, $relevanceScore = null, $rankingWeight = null, \Ews\ArrayType\EwsArrayOfFolderIdType $folderIds = null, \Ews\ArrayType\EwsArrayOfPersonaAttributionsType $attributions = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAses = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $givenNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $middleNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $surnames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $generations = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $nicknames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $initials = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers2 = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2 = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2 = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $assistantPhoneNumbers = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $organizationMainPhones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2 = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $tTYTDDPhoneNumbers = null, \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes = null, \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1 = null, \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2 = null, \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3 = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2 = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3 = null, \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $businessAddresses = null, \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses = null, \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $otherAddresses = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $titles = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $departments = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $companyNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $managers = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $professions = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames = null, \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType $children = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $schools = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $hobbies = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $birthdays = null, \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $locations = null, \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $extendedProperties = null)
    {
        $this
            ->setPersonaId($personaId)
            ->setPersonaType($personaType)
            ->setPersonaObjectStatus($personaObjectStatus)
            ->setCreationTime($creationTime)
            ->setBodies($bodies)
            ->setDisplayNameFirstLastSortKey($displayNameFirstLastSortKey)
            ->setDisplayNameLastFirstSortKey($displayNameLastFirstSortKey)
            ->setCompanyNameSortKey($companyNameSortKey)
            ->setHomeCitySortKey($homeCitySortKey)
            ->setWorkCitySortKey($workCitySortKey)
            ->setDisplayNameFirstLastHeader($displayNameFirstLastHeader)
            ->setDisplayNameLastFirstHeader($displayNameLastFirstHeader)
            ->setDisplayName($displayName)
            ->setDisplayNameFirstLast($displayNameFirstLast)
            ->setDisplayNameLastFirst($displayNameLastFirst)
            ->setFileAs($fileAs)
            ->setFileAsId($fileAsId)
            ->setDisplayNamePrefix($displayNamePrefix)
            ->setGivenName($givenName)
            ->setMiddleName($middleName)
            ->setSurname($surname)
            ->setGeneration($generation)
            ->setNickname($nickname)
            ->setYomiCompanyName($yomiCompanyName)
            ->setYomiFirstName($yomiFirstName)
            ->setYomiLastName($yomiLastName)
            ->setTitle($title)
            ->setDepartment($department)
            ->setCompanyName($companyName)
            ->setLocation($location)
            ->setEmailAddress($emailAddress)
            ->setEmailAddresses($emailAddresses)
            ->setPhoneNumber($phoneNumber)
            ->setImAddress($imAddress)
            ->setHomeCity($homeCity)
            ->setWorkCity($workCity)
            ->setRelevanceScore($relevanceScore)
            ->setRankingWeight($rankingWeight)
            ->setFolderIds($folderIds)
            ->setAttributions($attributions)
            ->setDisplayNames($displayNames)
            ->setFileAses($fileAses)
            ->setFileAsIds($fileAsIds)
            ->setDisplayNamePrefixes($displayNamePrefixes)
            ->setGivenNames($givenNames)
            ->setMiddleNames($middleNames)
            ->setSurnames($surnames)
            ->setGenerations($generations)
            ->setNicknames($nicknames)
            ->setInitials($initials)
            ->setYomiCompanyNames($yomiCompanyNames)
            ->setYomiFirstNames($yomiFirstNames)
            ->setYomiLastNames($yomiLastNames)
            ->setBusinessPhoneNumbers($businessPhoneNumbers)
            ->setBusinessPhoneNumbers2($businessPhoneNumbers2)
            ->setHomePhones($homePhones)
            ->setHomePhones2($homePhones2)
            ->setMobilePhones($mobilePhones)
            ->setMobilePhones2($mobilePhones2)
            ->setAssistantPhoneNumbers($assistantPhoneNumbers)
            ->setCallbackPhones($callbackPhones)
            ->setCarPhones($carPhones)
            ->setHomeFaxes($homeFaxes)
            ->setOrganizationMainPhones($organizationMainPhones)
            ->setOtherFaxes($otherFaxes)
            ->setOtherTelephones($otherTelephones)
            ->setOtherPhones2($otherPhones2)
            ->setPagers($pagers)
            ->setRadioPhones($radioPhones)
            ->setTelexNumbers($telexNumbers)
            ->setTTYTDDPhoneNumbers($tTYTDDPhoneNumbers)
            ->setWorkFaxes($workFaxes)
            ->setEmails1($emails1)
            ->setEmails2($emails2)
            ->setEmails3($emails3)
            ->setBusinessHomePages($businessHomePages)
            ->setPersonalHomePages($personalHomePages)
            ->setOfficeLocations($officeLocations)
            ->setImAddresses($imAddresses)
            ->setImAddresses2($imAddresses2)
            ->setImAddresses3($imAddresses3)
            ->setBusinessAddresses($businessAddresses)
            ->setHomeAddresses($homeAddresses)
            ->setOtherAddresses($otherAddresses)
            ->setTitles($titles)
            ->setDepartments($departments)
            ->setCompanyNames($companyNames)
            ->setManagers($managers)
            ->setAssistantNames($assistantNames)
            ->setProfessions($professions)
            ->setSpouseNames($spouseNames)
            ->setChildren($children)
            ->setSchools($schools)
            ->setHobbies($hobbies)
            ->setWeddingAnniversaries($weddingAnniversaries)
            ->setBirthdays($birthdays)
            ->setLocations($locations)
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get PersonaId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getPersonaId()
    {
        return $this->PersonaId;
    }
    /**
     * Set PersonaId value
     * @param \Ews\StructType\EwsItemIdType $personaId
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setPersonaId(\Ews\StructType\EwsItemIdType $personaId = null)
    {
        $this->PersonaId = $personaId;
        return $this;
    }
    /**
     * Get PersonaType value
     * @return string|null
     */
    public function getPersonaType()
    {
        return $this->PersonaType;
    }
    /**
     * Set PersonaType value
     * @param string $personaType
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setPersonaType($personaType = null)
    {
        $this->PersonaType = $personaType;
        return $this;
    }
    /**
     * Get PersonaObjectStatus value
     * @return string|null
     */
    public function getPersonaObjectStatus()
    {
        return $this->PersonaObjectStatus;
    }
    /**
     * Set PersonaObjectStatus value
     * @param string $personaObjectStatus
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setPersonaObjectStatus($personaObjectStatus = null)
    {
        $this->PersonaObjectStatus = $personaObjectStatus;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return dateTime|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param dateTime $creationTime
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setCreationTime($creationTime = null)
    {
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get Bodies value
     * @return \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType|null
     */
    public function getBodies()
    {
        return $this->Bodies;
    }
    /**
     * Set Bodies value
     * @param \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setBodies(\Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies = null)
    {
        $this->Bodies = $bodies;
        return $this;
    }
    /**
     * Get DisplayNameFirstLastSortKey value
     * @return string|null
     */
    public function getDisplayNameFirstLastSortKey()
    {
        return $this->DisplayNameFirstLastSortKey;
    }
    /**
     * Set DisplayNameFirstLastSortKey value
     * @param string $displayNameFirstLastSortKey
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNameFirstLastSortKey($displayNameFirstLastSortKey = null)
    {
        $this->DisplayNameFirstLastSortKey = $displayNameFirstLastSortKey;
        return $this;
    }
    /**
     * Get DisplayNameLastFirstSortKey value
     * @return string|null
     */
    public function getDisplayNameLastFirstSortKey()
    {
        return $this->DisplayNameLastFirstSortKey;
    }
    /**
     * Set DisplayNameLastFirstSortKey value
     * @param string $displayNameLastFirstSortKey
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNameLastFirstSortKey($displayNameLastFirstSortKey = null)
    {
        $this->DisplayNameLastFirstSortKey = $displayNameLastFirstSortKey;
        return $this;
    }
    /**
     * Get CompanyNameSortKey value
     * @return string|null
     */
    public function getCompanyNameSortKey()
    {
        return $this->CompanyNameSortKey;
    }
    /**
     * Set CompanyNameSortKey value
     * @param string $companyNameSortKey
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setCompanyNameSortKey($companyNameSortKey = null)
    {
        $this->CompanyNameSortKey = $companyNameSortKey;
        return $this;
    }
    /**
     * Get HomeCitySortKey value
     * @return string|null
     */
    public function getHomeCitySortKey()
    {
        return $this->HomeCitySortKey;
    }
    /**
     * Set HomeCitySortKey value
     * @param string $homeCitySortKey
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHomeCitySortKey($homeCitySortKey = null)
    {
        $this->HomeCitySortKey = $homeCitySortKey;
        return $this;
    }
    /**
     * Get WorkCitySortKey value
     * @return string|null
     */
    public function getWorkCitySortKey()
    {
        return $this->WorkCitySortKey;
    }
    /**
     * Set WorkCitySortKey value
     * @param string $workCitySortKey
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setWorkCitySortKey($workCitySortKey = null)
    {
        $this->WorkCitySortKey = $workCitySortKey;
        return $this;
    }
    /**
     * Get DisplayNameFirstLastHeader value
     * @return string|null
     */
    public function getDisplayNameFirstLastHeader()
    {
        return $this->DisplayNameFirstLastHeader;
    }
    /**
     * Set DisplayNameFirstLastHeader value
     * @param string $displayNameFirstLastHeader
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNameFirstLastHeader($displayNameFirstLastHeader = null)
    {
        $this->DisplayNameFirstLastHeader = $displayNameFirstLastHeader;
        return $this;
    }
    /**
     * Get DisplayNameLastFirstHeader value
     * @return string|null
     */
    public function getDisplayNameLastFirstHeader()
    {
        return $this->DisplayNameLastFirstHeader;
    }
    /**
     * Set DisplayNameLastFirstHeader value
     * @param string $displayNameLastFirstHeader
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNameLastFirstHeader($displayNameLastFirstHeader = null)
    {
        $this->DisplayNameLastFirstHeader = $displayNameLastFirstHeader;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get DisplayNameFirstLast value
     * @return string|null
     */
    public function getDisplayNameFirstLast()
    {
        return $this->DisplayNameFirstLast;
    }
    /**
     * Set DisplayNameFirstLast value
     * @param string $displayNameFirstLast
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNameFirstLast($displayNameFirstLast = null)
    {
        $this->DisplayNameFirstLast = $displayNameFirstLast;
        return $this;
    }
    /**
     * Get DisplayNameLastFirst value
     * @return string|null
     */
    public function getDisplayNameLastFirst()
    {
        return $this->DisplayNameLastFirst;
    }
    /**
     * Set DisplayNameLastFirst value
     * @param string $displayNameLastFirst
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNameLastFirst($displayNameLastFirst = null)
    {
        $this->DisplayNameLastFirst = $displayNameLastFirst;
        return $this;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setFileAs($fileAs = null)
    {
        $this->FileAs = $fileAs;
        return $this;
    }
    /**
     * Get FileAsId value
     * @return string|null
     */
    public function getFileAsId()
    {
        return $this->FileAsId;
    }
    /**
     * Set FileAsId value
     * @param string $fileAsId
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setFileAsId($fileAsId = null)
    {
        $this->FileAsId = $fileAsId;
        return $this;
    }
    /**
     * Get DisplayNamePrefix value
     * @return string|null
     */
    public function getDisplayNamePrefix()
    {
        return $this->DisplayNamePrefix;
    }
    /**
     * Set DisplayNamePrefix value
     * @param string $displayNamePrefix
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNamePrefix($displayNamePrefix = null)
    {
        $this->DisplayNamePrefix = $displayNamePrefix;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setGivenName($givenName = null)
    {
        $this->GivenName = $givenName;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setMiddleName($middleName = null)
    {
        $this->MiddleName = $middleName;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setSurname($surname = null)
    {
        $this->Surname = $surname;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setGeneration($generation = null)
    {
        $this->Generation = $generation;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setNickname($nickname = null)
    {
        $this->Nickname = $nickname;
        return $this;
    }
    /**
     * Get YomiCompanyName value
     * @return string|null
     */
    public function getYomiCompanyName()
    {
        return $this->YomiCompanyName;
    }
    /**
     * Set YomiCompanyName value
     * @param string $yomiCompanyName
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setYomiCompanyName($yomiCompanyName = null)
    {
        $this->YomiCompanyName = $yomiCompanyName;
        return $this;
    }
    /**
     * Get YomiFirstName value
     * @return string|null
     */
    public function getYomiFirstName()
    {
        return $this->YomiFirstName;
    }
    /**
     * Set YomiFirstName value
     * @param string $yomiFirstName
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setYomiFirstName($yomiFirstName = null)
    {
        $this->YomiFirstName = $yomiFirstName;
        return $this;
    }
    /**
     * Get YomiLastName value
     * @return string|null
     */
    public function getYomiLastName()
    {
        return $this->YomiLastName;
    }
    /**
     * Set YomiLastName value
     * @param string $yomiLastName
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setYomiLastName($yomiLastName = null)
    {
        $this->YomiLastName = $yomiLastName;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setTitle($title = null)
    {
        $this->Title = $title;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDepartment($department = null)
    {
        $this->Department = $department;
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
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setLocation($location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setEmailAddress(\Ews\StructType\EwsEmailAddressType $emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $emailAddresses
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setEmailAddresses(\Ews\ArrayType\EwsArrayOfEmailAddressesType $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Ews\StructType\EwsPersonaPhoneNumberType|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Ews\StructType\EwsPersonaPhoneNumberType $phoneNumber
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setPhoneNumber(\Ews\StructType\EwsPersonaPhoneNumberType $phoneNumber = null)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get ImAddress value
     * @return string|null
     */
    public function getImAddress()
    {
        return $this->ImAddress;
    }
    /**
     * Set ImAddress value
     * @param string $imAddress
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setImAddress($imAddress = null)
    {
        $this->ImAddress = $imAddress;
        return $this;
    }
    /**
     * Get HomeCity value
     * @return string|null
     */
    public function getHomeCity()
    {
        return $this->HomeCity;
    }
    /**
     * Set HomeCity value
     * @param string $homeCity
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHomeCity($homeCity = null)
    {
        $this->HomeCity = $homeCity;
        return $this;
    }
    /**
     * Get WorkCity value
     * @return string|null
     */
    public function getWorkCity()
    {
        return $this->WorkCity;
    }
    /**
     * Set WorkCity value
     * @param string $workCity
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setWorkCity($workCity = null)
    {
        $this->WorkCity = $workCity;
        return $this;
    }
    /**
     * Get RelevanceScore value
     * @return int|null
     */
    public function getRelevanceScore()
    {
        return $this->RelevanceScore;
    }
    /**
     * Set RelevanceScore value
     * @param int $relevanceScore
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setRelevanceScore($relevanceScore = null)
    {
        $this->RelevanceScore = $relevanceScore;
        return $this;
    }
    /**
     * Get RankingWeight value
     * @return double|null
     */
    public function getRankingWeight()
    {
        return $this->RankingWeight;
    }
    /**
     * Set RankingWeight value
     * @param double $rankingWeight
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setRankingWeight($rankingWeight = null)
    {
        $this->RankingWeight = $rankingWeight;
        return $this;
    }
    /**
     * Get FolderIds value
     * @return \Ews\ArrayType\EwsArrayOfFolderIdType|null
     */
    public function getFolderIds()
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \Ews\ArrayType\EwsArrayOfFolderIdType $folderIds
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setFolderIds(\Ews\ArrayType\EwsArrayOfFolderIdType $folderIds = null)
    {
        $this->FolderIds = $folderIds;
        return $this;
    }
    /**
     * Get Attributions value
     * @return \Ews\ArrayType\EwsArrayOfPersonaAttributionsType|null
     */
    public function getAttributions()
    {
        return $this->Attributions;
    }
    /**
     * Set Attributions value
     * @param \Ews\ArrayType\EwsArrayOfPersonaAttributionsType $attributions
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setAttributions(\Ews\ArrayType\EwsArrayOfPersonaAttributionsType $attributions = null)
    {
        $this->Attributions = $attributions;
        return $this;
    }
    /**
     * Get DisplayNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getDisplayNames()
    {
        return $this->DisplayNames;
    }
    /**
     * Set DisplayNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNames = null)
    {
        $this->DisplayNames = $displayNames;
        return $this;
    }
    /**
     * Get FileAses value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getFileAses()
    {
        return $this->FileAses;
    }
    /**
     * Set FileAses value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAses
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setFileAses(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAses = null)
    {
        $this->FileAses = $fileAses;
        return $this;
    }
    /**
     * Get FileAsIds value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getFileAsIds()
    {
        return $this->FileAsIds;
    }
    /**
     * Set FileAsIds value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setFileAsIds(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds = null)
    {
        $this->FileAsIds = $fileAsIds;
        return $this;
    }
    /**
     * Get DisplayNamePrefixes value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getDisplayNamePrefixes()
    {
        return $this->DisplayNamePrefixes;
    }
    /**
     * Set DisplayNamePrefixes value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDisplayNamePrefixes(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes = null)
    {
        $this->DisplayNamePrefixes = $displayNamePrefixes;
        return $this;
    }
    /**
     * Get GivenNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getGivenNames()
    {
        return $this->GivenNames;
    }
    /**
     * Set GivenNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $givenNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setGivenNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $givenNames = null)
    {
        $this->GivenNames = $givenNames;
        return $this;
    }
    /**
     * Get MiddleNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getMiddleNames()
    {
        return $this->MiddleNames;
    }
    /**
     * Set MiddleNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $middleNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setMiddleNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $middleNames = null)
    {
        $this->MiddleNames = $middleNames;
        return $this;
    }
    /**
     * Get Surnames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getSurnames()
    {
        return $this->Surnames;
    }
    /**
     * Set Surnames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $surnames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setSurnames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $surnames = null)
    {
        $this->Surnames = $surnames;
        return $this;
    }
    /**
     * Get Generations value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getGenerations()
    {
        return $this->Generations;
    }
    /**
     * Set Generations value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $generations
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setGenerations(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $generations = null)
    {
        $this->Generations = $generations;
        return $this;
    }
    /**
     * Get Nicknames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getNicknames()
    {
        return $this->Nicknames;
    }
    /**
     * Set Nicknames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $nicknames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setNicknames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $nicknames = null)
    {
        $this->Nicknames = $nicknames;
        return $this;
    }
    /**
     * Get Initials value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $initials
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setInitials(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $initials = null)
    {
        $this->Initials = $initials;
        return $this;
    }
    /**
     * Get YomiCompanyNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getYomiCompanyNames()
    {
        return $this->YomiCompanyNames;
    }
    /**
     * Set YomiCompanyNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setYomiCompanyNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames = null)
    {
        $this->YomiCompanyNames = $yomiCompanyNames;
        return $this;
    }
    /**
     * Get YomiFirstNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getYomiFirstNames()
    {
        return $this->YomiFirstNames;
    }
    /**
     * Set YomiFirstNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setYomiFirstNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames = null)
    {
        $this->YomiFirstNames = $yomiFirstNames;
        return $this;
    }
    /**
     * Get YomiLastNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getYomiLastNames()
    {
        return $this->YomiLastNames;
    }
    /**
     * Set YomiLastNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setYomiLastNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames = null)
    {
        $this->YomiLastNames = $yomiLastNames;
        return $this;
    }
    /**
     * Get BusinessPhoneNumbers value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getBusinessPhoneNumbers()
    {
        return $this->BusinessPhoneNumbers;
    }
    /**
     * Set BusinessPhoneNumbers value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $businessPhoneNumbers
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setBusinessPhoneNumbers(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers = null)
    {
        $this->BusinessPhoneNumbers = $businessPhoneNumbers;
        return $this;
    }
    /**
     * Get BusinessPhoneNumbers2 value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getBusinessPhoneNumbers2()
    {
        return $this->BusinessPhoneNumbers2;
    }
    /**
     * Set BusinessPhoneNumbers2 value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $businessPhoneNumbers2
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setBusinessPhoneNumbers2(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers2 = null)
    {
        $this->BusinessPhoneNumbers2 = $businessPhoneNumbers2;
        return $this;
    }
    /**
     * Get HomePhones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getHomePhones()
    {
        return $this->HomePhones;
    }
    /**
     * Set HomePhones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHomePhones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones = null)
    {
        $this->HomePhones = $homePhones;
        return $this;
    }
    /**
     * Get HomePhones2 value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getHomePhones2()
    {
        return $this->HomePhones2;
    }
    /**
     * Set HomePhones2 value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHomePhones2(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2 = null)
    {
        $this->HomePhones2 = $homePhones2;
        return $this;
    }
    /**
     * Get MobilePhones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getMobilePhones()
    {
        return $this->MobilePhones;
    }
    /**
     * Set MobilePhones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setMobilePhones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones = null)
    {
        $this->MobilePhones = $mobilePhones;
        return $this;
    }
    /**
     * Get MobilePhones2 value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getMobilePhones2()
    {
        return $this->MobilePhones2;
    }
    /**
     * Set MobilePhones2 value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setMobilePhones2(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2 = null)
    {
        $this->MobilePhones2 = $mobilePhones2;
        return $this;
    }
    /**
     * Get AssistantPhoneNumbers value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getAssistantPhoneNumbers()
    {
        return $this->AssistantPhoneNumbers;
    }
    /**
     * Set AssistantPhoneNumbers value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $assistantPhoneNumbers
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setAssistantPhoneNumbers(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $assistantPhoneNumbers = null)
    {
        $this->AssistantPhoneNumbers = $assistantPhoneNumbers;
        return $this;
    }
    /**
     * Get CallbackPhones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getCallbackPhones()
    {
        return $this->CallbackPhones;
    }
    /**
     * Set CallbackPhones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setCallbackPhones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones = null)
    {
        $this->CallbackPhones = $callbackPhones;
        return $this;
    }
    /**
     * Get CarPhones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getCarPhones()
    {
        return $this->CarPhones;
    }
    /**
     * Set CarPhones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setCarPhones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones = null)
    {
        $this->CarPhones = $carPhones;
        return $this;
    }
    /**
     * Get HomeFaxes value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getHomeFaxes()
    {
        return $this->HomeFaxes;
    }
    /**
     * Set HomeFaxes value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHomeFaxes(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes = null)
    {
        $this->HomeFaxes = $homeFaxes;
        return $this;
    }
    /**
     * Get OrganizationMainPhones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOrganizationMainPhones()
    {
        return $this->OrganizationMainPhones;
    }
    /**
     * Set OrganizationMainPhones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $organizationMainPhones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setOrganizationMainPhones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $organizationMainPhones = null)
    {
        $this->OrganizationMainPhones = $organizationMainPhones;
        return $this;
    }
    /**
     * Get OtherFaxes value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOtherFaxes()
    {
        return $this->OtherFaxes;
    }
    /**
     * Set OtherFaxes value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setOtherFaxes(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes = null)
    {
        $this->OtherFaxes = $otherFaxes;
        return $this;
    }
    /**
     * Get OtherTelephones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOtherTelephones()
    {
        return $this->OtherTelephones;
    }
    /**
     * Set OtherTelephones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setOtherTelephones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones = null)
    {
        $this->OtherTelephones = $otherTelephones;
        return $this;
    }
    /**
     * Get OtherPhones2 value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOtherPhones2()
    {
        return $this->OtherPhones2;
    }
    /**
     * Set OtherPhones2 value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setOtherPhones2(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2 = null)
    {
        $this->OtherPhones2 = $otherPhones2;
        return $this;
    }
    /**
     * Get Pagers value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getPagers()
    {
        return $this->Pagers;
    }
    /**
     * Set Pagers value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setPagers(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers = null)
    {
        $this->Pagers = $pagers;
        return $this;
    }
    /**
     * Get RadioPhones value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getRadioPhones()
    {
        return $this->RadioPhones;
    }
    /**
     * Set RadioPhones value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setRadioPhones(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones = null)
    {
        $this->RadioPhones = $radioPhones;
        return $this;
    }
    /**
     * Get TelexNumbers value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getTelexNumbers()
    {
        return $this->TelexNumbers;
    }
    /**
     * Set TelexNumbers value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setTelexNumbers(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers = null)
    {
        $this->TelexNumbers = $telexNumbers;
        return $this;
    }
    /**
     * Get TTYTDDPhoneNumbers value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getTTYTDDPhoneNumbers()
    {
        return $this->TTYTDDPhoneNumbers;
    }
    /**
     * Set TTYTDDPhoneNumbers value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     * $tTYTDDPhoneNumbers
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setTTYTDDPhoneNumbers(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $tTYTDDPhoneNumbers = null)
    {
        $this->TTYTDDPhoneNumbers = $tTYTDDPhoneNumbers;
        return $this;
    }
    /**
     * Get WorkFaxes value
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getWorkFaxes()
    {
        return $this->WorkFaxes;
    }
    /**
     * Set WorkFaxes value
     * @param \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setWorkFaxes(\Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes = null)
    {
        $this->WorkFaxes = $workFaxes;
        return $this;
    }
    /**
     * Get Emails1 value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    public function getEmails1()
    {
        return $this->Emails1;
    }
    /**
     * Set Emails1 value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setEmails1(\Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1 = null)
    {
        $this->Emails1 = $emails1;
        return $this;
    }
    /**
     * Get Emails2 value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    public function getEmails2()
    {
        return $this->Emails2;
    }
    /**
     * Set Emails2 value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setEmails2(\Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2 = null)
    {
        $this->Emails2 = $emails2;
        return $this;
    }
    /**
     * Get Emails3 value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    public function getEmails3()
    {
        return $this->Emails3;
    }
    /**
     * Set Emails3 value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setEmails3(\Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3 = null)
    {
        $this->Emails3 = $emails3;
        return $this;
    }
    /**
     * Get BusinessHomePages value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getBusinessHomePages()
    {
        return $this->BusinessHomePages;
    }
    /**
     * Set BusinessHomePages value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setBusinessHomePages(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages = null)
    {
        $this->BusinessHomePages = $businessHomePages;
        return $this;
    }
    /**
     * Get PersonalHomePages value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getPersonalHomePages()
    {
        return $this->PersonalHomePages;
    }
    /**
     * Set PersonalHomePages value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setPersonalHomePages(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages = null)
    {
        $this->PersonalHomePages = $personalHomePages;
        return $this;
    }
    /**
     * Get OfficeLocations value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getOfficeLocations()
    {
        return $this->OfficeLocations;
    }
    /**
     * Set OfficeLocations value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setOfficeLocations(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations = null)
    {
        $this->OfficeLocations = $officeLocations;
        return $this;
    }
    /**
     * Get ImAddresses value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getImAddresses()
    {
        return $this->ImAddresses;
    }
    /**
     * Set ImAddresses value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setImAddresses(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses = null)
    {
        $this->ImAddresses = $imAddresses;
        return $this;
    }
    /**
     * Get ImAddresses2 value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getImAddresses2()
    {
        return $this->ImAddresses2;
    }
    /**
     * Set ImAddresses2 value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setImAddresses2(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2 = null)
    {
        $this->ImAddresses2 = $imAddresses2;
        return $this;
    }
    /**
     * Get ImAddresses3 value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getImAddresses3()
    {
        return $this->ImAddresses3;
    }
    /**
     * Set ImAddresses3 value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setImAddresses3(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3 = null)
    {
        $this->ImAddresses3 = $imAddresses3;
        return $this;
    }
    /**
     * Get BusinessAddresses value
     * @return \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    public function getBusinessAddresses()
    {
        return $this->BusinessAddresses;
    }
    /**
     * Set BusinessAddresses value
     * @param \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     * $businessAddresses
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setBusinessAddresses(\Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $businessAddresses = null)
    {
        $this->BusinessAddresses = $businessAddresses;
        return $this;
    }
    /**
     * Get HomeAddresses value
     * @return \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    public function getHomeAddresses()
    {
        return $this->HomeAddresses;
    }
    /**
     * Set HomeAddresses value
     * @param \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHomeAddresses(\Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses = null)
    {
        $this->HomeAddresses = $homeAddresses;
        return $this;
    }
    /**
     * Get OtherAddresses value
     * @return \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    public function getOtherAddresses()
    {
        return $this->OtherAddresses;
    }
    /**
     * Set OtherAddresses value
     * @param \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     * $otherAddresses
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setOtherAddresses(\Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $otherAddresses = null)
    {
        $this->OtherAddresses = $otherAddresses;
        return $this;
    }
    /**
     * Get Titles value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getTitles()
    {
        return $this->Titles;
    }
    /**
     * Set Titles value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $titles
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setTitles(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $titles = null)
    {
        $this->Titles = $titles;
        return $this;
    }
    /**
     * Get Departments value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getDepartments()
    {
        return $this->Departments;
    }
    /**
     * Set Departments value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $departments
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setDepartments(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $departments = null)
    {
        $this->Departments = $departments;
        return $this;
    }
    /**
     * Get CompanyNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getCompanyNames()
    {
        return $this->CompanyNames;
    }
    /**
     * Set CompanyNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $companyNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setCompanyNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $companyNames = null)
    {
        $this->CompanyNames = $companyNames;
        return $this;
    }
    /**
     * Get Managers value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getManagers()
    {
        return $this->Managers;
    }
    /**
     * Set Managers value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $managers
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setManagers(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $managers = null)
    {
        $this->Managers = $managers;
        return $this;
    }
    /**
     * Get AssistantNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getAssistantNames()
    {
        return $this->AssistantNames;
    }
    /**
     * Set AssistantNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setAssistantNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames = null)
    {
        $this->AssistantNames = $assistantNames;
        return $this;
    }
    /**
     * Get Professions value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getProfessions()
    {
        return $this->Professions;
    }
    /**
     * Set Professions value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $professions
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setProfessions(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $professions = null)
    {
        $this->Professions = $professions;
        return $this;
    }
    /**
     * Get SpouseNames value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getSpouseNames()
    {
        return $this->SpouseNames;
    }
    /**
     * Set SpouseNames value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setSpouseNames(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames = null)
    {
        $this->SpouseNames = $spouseNames;
        return $this;
    }
    /**
     * Get Children value
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType|null
     */
    public function getChildren()
    {
        return $this->Children;
    }
    /**
     * Set Children value
     * @param \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType $children
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setChildren(\Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType $children = null)
    {
        $this->Children = $children;
        return $this;
    }
    /**
     * Get Schools value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getSchools()
    {
        return $this->Schools;
    }
    /**
     * Set Schools value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $schools
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setSchools(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $schools = null)
    {
        $this->Schools = $schools;
        return $this;
    }
    /**
     * Get Hobbies value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getHobbies()
    {
        return $this->Hobbies;
    }
    /**
     * Set Hobbies value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $hobbies
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setHobbies(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $hobbies = null)
    {
        $this->Hobbies = $hobbies;
        return $this;
    }
    /**
     * Get WeddingAnniversaries value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getWeddingAnniversaries()
    {
        return $this->WeddingAnniversaries;
    }
    /**
     * Set WeddingAnniversaries value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setWeddingAnniversaries(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries = null)
    {
        $this->WeddingAnniversaries = $weddingAnniversaries;
        return $this;
    }
    /**
     * Get Birthdays value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getBirthdays()
    {
        return $this->Birthdays;
    }
    /**
     * Set Birthdays value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $birthdays
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setBirthdays(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $birthdays = null)
    {
        $this->Birthdays = $birthdays;
        return $this;
    }
    /**
     * Get Locations value
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \Ews\ArrayType\EwsArrayOfStringAttributedValuesType $locations
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setLocations(\Ews\ArrayType\EwsArrayOfStringAttributedValuesType $locations = null)
    {
        $this->Locations = $locations;
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType|null
     */
    public function getExtendedProperties()
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     * $extendedProperties
     * @return \Ews\StructType\EwsPersonaType
     */
    public function setExtendedProperties(\Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $extendedProperties = null)
    {
        $this->ExtendedProperties = $extendedProperties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPersonaType
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
