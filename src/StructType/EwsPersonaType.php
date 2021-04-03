<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonaType extends AbstractStructBase
{
    /**
     * The PersonaId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $PersonaId;
    /**
     * The PersonaType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PersonaType = null;
    /**
     * The PersonaObjectStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PersonaObjectStatus = null;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationTime = null;
    /**
     * The Bodies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfBodyContentAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfBodyContentAttributedValuesType $Bodies = null;
    /**
     * The DisplayNameFirstLastSortKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNameFirstLastSortKey = null;
    /**
     * The DisplayNameLastFirstSortKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNameLastFirstSortKey = null;
    /**
     * The CompanyNameSortKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyNameSortKey = null;
    /**
     * The HomeCitySortKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HomeCitySortKey = null;
    /**
     * The WorkCitySortKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WorkCitySortKey = null;
    /**
     * The DisplayNameFirstLastHeader
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNameFirstLastHeader = null;
    /**
     * The DisplayNameLastFirstHeader
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNameLastFirstHeader = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The DisplayNameFirstLast
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNameFirstLast = null;
    /**
     * The DisplayNameLastFirst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNameLastFirst = null;
    /**
     * The FileAs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileAs = null;
    /**
     * The FileAsId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileAsId = null;
    /**
     * The DisplayNamePrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayNamePrefix = null;
    /**
     * The GivenName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GivenName = null;
    /**
     * The MiddleName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MiddleName = null;
    /**
     * The Surname
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Surname = null;
    /**
     * The Generation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Generation = null;
    /**
     * The Nickname
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Nickname = null;
    /**
     * The YomiCompanyName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YomiCompanyName = null;
    /**
     * The YomiFirstName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YomiFirstName = null;
    /**
     * The YomiLastName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YomiLastName = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Department = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyName = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $EmailAddress = null;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $EmailAddresses = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPersonaPhoneNumberType|null
     */
    protected ?\StructType\EwsPersonaPhoneNumberType $PhoneNumber = null;
    /**
     * The ImAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImAddress = null;
    /**
     * The HomeCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HomeCity = null;
    /**
     * The WorkCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WorkCity = null;
    /**
     * The RelevanceScore
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RelevanceScore = null;
    /**
     * The RankingWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $RankingWeight = null;
    /**
     * The FolderIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFolderIdType|null
     */
    protected ?\ArrayType\EwsArrayOfFolderIdType $FolderIds = null;
    /**
     * The Attributions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPersonaAttributionsType|null
     */
    protected ?\ArrayType\EwsArrayOfPersonaAttributionsType $Attributions = null;
    /**
     * The DisplayNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $DisplayNames = null;
    /**
     * The FileAses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $FileAses = null;
    /**
     * The FileAsIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $FileAsIds = null;
    /**
     * The DisplayNamePrefixes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $DisplayNamePrefixes = null;
    /**
     * The GivenNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $GivenNames = null;
    /**
     * The MiddleNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $MiddleNames = null;
    /**
     * The Surnames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Surnames = null;
    /**
     * The Generations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Generations = null;
    /**
     * The Nicknames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Nicknames = null;
    /**
     * The Initials
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Initials = null;
    /**
     * The YomiCompanyNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $YomiCompanyNames = null;
    /**
     * The YomiFirstNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $YomiFirstNames = null;
    /**
     * The YomiLastNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $YomiLastNames = null;
    /**
     * The BusinessPhoneNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $BusinessPhoneNumbers = null;
    /**
     * The BusinessPhoneNumbers2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $BusinessPhoneNumbers2 = null;
    /**
     * The HomePhones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $HomePhones = null;
    /**
     * The HomePhones2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $HomePhones2 = null;
    /**
     * The MobilePhones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $MobilePhones = null;
    /**
     * The MobilePhones2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $MobilePhones2 = null;
    /**
     * The AssistantPhoneNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $AssistantPhoneNumbers = null;
    /**
     * The CallbackPhones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $CallbackPhones = null;
    /**
     * The CarPhones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $CarPhones = null;
    /**
     * The HomeFaxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $HomeFaxes = null;
    /**
     * The OrganizationMainPhones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $OrganizationMainPhones = null;
    /**
     * The OtherFaxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $OtherFaxes = null;
    /**
     * The OtherTelephones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $OtherTelephones = null;
    /**
     * The OtherPhones2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $OtherPhones2 = null;
    /**
     * The Pagers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $Pagers = null;
    /**
     * The RadioPhones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $RadioPhones = null;
    /**
     * The TelexNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $TelexNumbers = null;
    /**
     * The TTYTDDPhoneNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $TTYTDDPhoneNumbers = null;
    /**
     * The WorkFaxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $WorkFaxes = null;
    /**
     * The Emails1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $Emails1 = null;
    /**
     * The Emails2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $Emails2 = null;
    /**
     * The Emails3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $Emails3 = null;
    /**
     * The BusinessHomePages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $BusinessHomePages = null;
    /**
     * The PersonalHomePages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $PersonalHomePages = null;
    /**
     * The OfficeLocations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $OfficeLocations = null;
    /**
     * The ImAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $ImAddresses = null;
    /**
     * The ImAddresses2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $ImAddresses2 = null;
    /**
     * The ImAddresses3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $ImAddresses3 = null;
    /**
     * The BusinessAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $BusinessAddresses = null;
    /**
     * The HomeAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $HomeAddresses = null;
    /**
     * The OtherAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $OtherAddresses = null;
    /**
     * The Titles
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Titles = null;
    /**
     * The Departments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Departments = null;
    /**
     * The CompanyNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $CompanyNames = null;
    /**
     * The Managers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Managers = null;
    /**
     * The AssistantNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $AssistantNames = null;
    /**
     * The Professions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Professions = null;
    /**
     * The SpouseNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $SpouseNames = null;
    /**
     * The Children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringArrayAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringArrayAttributedValuesType $Children = null;
    /**
     * The Schools
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Schools = null;
    /**
     * The Hobbies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Hobbies = null;
    /**
     * The WeddingAnniversaries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $WeddingAnniversaries = null;
    /**
     * The Birthdays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Birthdays = null;
    /**
     * The Locations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    protected ?\ArrayType\EwsArrayOfStringAttributedValuesType $Locations = null;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfExtendedPropertyAttributedValueType|null
     */
    protected ?\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $ExtendedProperties = null;
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
     * @param \StructType\EwsItemIdType $personaId
     * @param string $personaType
     * @param string $personaObjectStatus
     * @param string $creationTime
     * @param \ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies
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
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @param \ArrayType\EwsArrayOfEmailAddressesType $emailAddresses
     * @param \StructType\EwsPersonaPhoneNumberType $phoneNumber
     * @param string $imAddress
     * @param string $homeCity
     * @param string $workCity
     * @param int $relevanceScore
     * @param float $rankingWeight
     * @param \ArrayType\EwsArrayOfFolderIdType $folderIds
     * @param \ArrayType\EwsArrayOfPersonaAttributionsType $attributions
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $displayNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $fileAses
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $givenNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $middleNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $surnames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $generations
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $nicknames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $initials
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers2
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $assistantPhoneNumbers
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $organizationMainPhones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $tTYTDDPhoneNumbers
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes
     * @param \ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1
     * @param \ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2
     * @param \ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3
     * @param \ArrayType\EwsArrayOfPostalAddressAttributedValuesType $businessAddresses
     * @param \ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses
     * @param \ArrayType\EwsArrayOfPostalAddressAttributedValuesType $otherAddresses
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $titles
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $departments
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $companyNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $managers
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $professions
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames
     * @param \ArrayType\EwsArrayOfStringArrayAttributedValuesType $children
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $schools
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $hobbies
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $birthdays
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $locations
     * @param \ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $extendedProperties
     */
    public function __construct(\StructType\EwsItemIdType $personaId, ?string $personaType = null, ?string $personaObjectStatus = null, ?string $creationTime = null, ?\ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies = null, ?string $displayNameFirstLastSortKey = null, ?string $displayNameLastFirstSortKey = null, ?string $companyNameSortKey = null, ?string $homeCitySortKey = null, ?string $workCitySortKey = null, ?string $displayNameFirstLastHeader = null, ?string $displayNameLastFirstHeader = null, ?string $displayName = null, ?string $displayNameFirstLast = null, ?string $displayNameLastFirst = null, ?string $fileAs = null, ?string $fileAsId = null, ?string $displayNamePrefix = null, ?string $givenName = null, ?string $middleName = null, ?string $surname = null, ?string $generation = null, ?string $nickname = null, ?string $yomiCompanyName = null, ?string $yomiFirstName = null, ?string $yomiLastName = null, ?string $title = null, ?string $department = null, ?string $companyName = null, ?string $location = null, ?\StructType\EwsEmailAddressType $emailAddress = null, ?\ArrayType\EwsArrayOfEmailAddressesType $emailAddresses = null, ?\StructType\EwsPersonaPhoneNumberType $phoneNumber = null, ?string $imAddress = null, ?string $homeCity = null, ?string $workCity = null, ?int $relevanceScore = null, ?float $rankingWeight = null, ?\ArrayType\EwsArrayOfFolderIdType $folderIds = null, ?\ArrayType\EwsArrayOfPersonaAttributionsType $attributions = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $displayNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $fileAses = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $givenNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $middleNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $surnames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $generations = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $nicknames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $initials = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers2 = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2 = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2 = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $assistantPhoneNumbers = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $organizationMainPhones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2 = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $tTYTDDPhoneNumbers = null, ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes = null, ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1 = null, ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2 = null, ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3 = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2 = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3 = null, ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $businessAddresses = null, ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses = null, ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $otherAddresses = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $titles = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $departments = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $companyNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $managers = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $professions = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames = null, ?\ArrayType\EwsArrayOfStringArrayAttributedValuesType $children = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $schools = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $hobbies = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $birthdays = null, ?\ArrayType\EwsArrayOfStringAttributedValuesType $locations = null, ?\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $extendedProperties = null)
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
     * @return \StructType\EwsItemIdType
     */
    public function getPersonaId(): \StructType\EwsItemIdType
    {
        return $this->PersonaId;
    }
    /**
     * Set PersonaId value
     * @param \StructType\EwsItemIdType $personaId
     * @return \StructType\EwsPersonaType
     */
    public function setPersonaId(\StructType\EwsItemIdType $personaId): self
    {
        $this->PersonaId = $personaId;
        
        return $this;
    }
    /**
     * Get PersonaType value
     * @return string|null
     */
    public function getPersonaType(): ?string
    {
        return $this->PersonaType;
    }
    /**
     * Set PersonaType value
     * @param string $personaType
     * @return \StructType\EwsPersonaType
     */
    public function setPersonaType(?string $personaType = null): self
    {
        // validation for constraint: string
        if (!is_null($personaType) && !is_string($personaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaType, true), gettype($personaType)), __LINE__);
        }
        $this->PersonaType = $personaType;
        
        return $this;
    }
    /**
     * Get PersonaObjectStatus value
     * @return string|null
     */
    public function getPersonaObjectStatus(): ?string
    {
        return $this->PersonaObjectStatus;
    }
    /**
     * Set PersonaObjectStatus value
     * @param string $personaObjectStatus
     * @return \StructType\EwsPersonaType
     */
    public function setPersonaObjectStatus(?string $personaObjectStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($personaObjectStatus) && !is_string($personaObjectStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaObjectStatus, true), gettype($personaObjectStatus)), __LINE__);
        }
        $this->PersonaObjectStatus = $personaObjectStatus;
        
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\EwsPersonaType
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get Bodies value
     * @return \ArrayType\EwsArrayOfBodyContentAttributedValuesType|null
     */
    public function getBodies(): ?\ArrayType\EwsArrayOfBodyContentAttributedValuesType
    {
        return $this->Bodies;
    }
    /**
     * Set Bodies value
     * @param \ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies
     * @return \StructType\EwsPersonaType
     */
    public function setBodies(?\ArrayType\EwsArrayOfBodyContentAttributedValuesType $bodies = null): self
    {
        $this->Bodies = $bodies;
        
        return $this;
    }
    /**
     * Get DisplayNameFirstLastSortKey value
     * @return string|null
     */
    public function getDisplayNameFirstLastSortKey(): ?string
    {
        return $this->DisplayNameFirstLastSortKey;
    }
    /**
     * Set DisplayNameFirstLastSortKey value
     * @param string $displayNameFirstLastSortKey
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNameFirstLastSortKey(?string $displayNameFirstLastSortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNameFirstLastSortKey) && !is_string($displayNameFirstLastSortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNameFirstLastSortKey, true), gettype($displayNameFirstLastSortKey)), __LINE__);
        }
        $this->DisplayNameFirstLastSortKey = $displayNameFirstLastSortKey;
        
        return $this;
    }
    /**
     * Get DisplayNameLastFirstSortKey value
     * @return string|null
     */
    public function getDisplayNameLastFirstSortKey(): ?string
    {
        return $this->DisplayNameLastFirstSortKey;
    }
    /**
     * Set DisplayNameLastFirstSortKey value
     * @param string $displayNameLastFirstSortKey
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNameLastFirstSortKey(?string $displayNameLastFirstSortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNameLastFirstSortKey) && !is_string($displayNameLastFirstSortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNameLastFirstSortKey, true), gettype($displayNameLastFirstSortKey)), __LINE__);
        }
        $this->DisplayNameLastFirstSortKey = $displayNameLastFirstSortKey;
        
        return $this;
    }
    /**
     * Get CompanyNameSortKey value
     * @return string|null
     */
    public function getCompanyNameSortKey(): ?string
    {
        return $this->CompanyNameSortKey;
    }
    /**
     * Set CompanyNameSortKey value
     * @param string $companyNameSortKey
     * @return \StructType\EwsPersonaType
     */
    public function setCompanyNameSortKey(?string $companyNameSortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($companyNameSortKey) && !is_string($companyNameSortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyNameSortKey, true), gettype($companyNameSortKey)), __LINE__);
        }
        $this->CompanyNameSortKey = $companyNameSortKey;
        
        return $this;
    }
    /**
     * Get HomeCitySortKey value
     * @return string|null
     */
    public function getHomeCitySortKey(): ?string
    {
        return $this->HomeCitySortKey;
    }
    /**
     * Set HomeCitySortKey value
     * @param string $homeCitySortKey
     * @return \StructType\EwsPersonaType
     */
    public function setHomeCitySortKey(?string $homeCitySortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($homeCitySortKey) && !is_string($homeCitySortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homeCitySortKey, true), gettype($homeCitySortKey)), __LINE__);
        }
        $this->HomeCitySortKey = $homeCitySortKey;
        
        return $this;
    }
    /**
     * Get WorkCitySortKey value
     * @return string|null
     */
    public function getWorkCitySortKey(): ?string
    {
        return $this->WorkCitySortKey;
    }
    /**
     * Set WorkCitySortKey value
     * @param string $workCitySortKey
     * @return \StructType\EwsPersonaType
     */
    public function setWorkCitySortKey(?string $workCitySortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($workCitySortKey) && !is_string($workCitySortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workCitySortKey, true), gettype($workCitySortKey)), __LINE__);
        }
        $this->WorkCitySortKey = $workCitySortKey;
        
        return $this;
    }
    /**
     * Get DisplayNameFirstLastHeader value
     * @return string|null
     */
    public function getDisplayNameFirstLastHeader(): ?string
    {
        return $this->DisplayNameFirstLastHeader;
    }
    /**
     * Set DisplayNameFirstLastHeader value
     * @param string $displayNameFirstLastHeader
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNameFirstLastHeader(?string $displayNameFirstLastHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNameFirstLastHeader) && !is_string($displayNameFirstLastHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNameFirstLastHeader, true), gettype($displayNameFirstLastHeader)), __LINE__);
        }
        $this->DisplayNameFirstLastHeader = $displayNameFirstLastHeader;
        
        return $this;
    }
    /**
     * Get DisplayNameLastFirstHeader value
     * @return string|null
     */
    public function getDisplayNameLastFirstHeader(): ?string
    {
        return $this->DisplayNameLastFirstHeader;
    }
    /**
     * Set DisplayNameLastFirstHeader value
     * @param string $displayNameLastFirstHeader
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNameLastFirstHeader(?string $displayNameLastFirstHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNameLastFirstHeader) && !is_string($displayNameLastFirstHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNameLastFirstHeader, true), gettype($displayNameLastFirstHeader)), __LINE__);
        }
        $this->DisplayNameLastFirstHeader = $displayNameLastFirstHeader;
        
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
     * @return \StructType\EwsPersonaType
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
     * Get DisplayNameFirstLast value
     * @return string|null
     */
    public function getDisplayNameFirstLast(): ?string
    {
        return $this->DisplayNameFirstLast;
    }
    /**
     * Set DisplayNameFirstLast value
     * @param string $displayNameFirstLast
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNameFirstLast(?string $displayNameFirstLast = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNameFirstLast) && !is_string($displayNameFirstLast)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNameFirstLast, true), gettype($displayNameFirstLast)), __LINE__);
        }
        $this->DisplayNameFirstLast = $displayNameFirstLast;
        
        return $this;
    }
    /**
     * Get DisplayNameLastFirst value
     * @return string|null
     */
    public function getDisplayNameLastFirst(): ?string
    {
        return $this->DisplayNameLastFirst;
    }
    /**
     * Set DisplayNameLastFirst value
     * @param string $displayNameLastFirst
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNameLastFirst(?string $displayNameLastFirst = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNameLastFirst) && !is_string($displayNameLastFirst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNameLastFirst, true), gettype($displayNameLastFirst)), __LINE__);
        }
        $this->DisplayNameLastFirst = $displayNameLastFirst;
        
        return $this;
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
     * @return \StructType\EwsPersonaType
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
     * Get FileAsId value
     * @return string|null
     */
    public function getFileAsId(): ?string
    {
        return $this->FileAsId;
    }
    /**
     * Set FileAsId value
     * @param string $fileAsId
     * @return \StructType\EwsPersonaType
     */
    public function setFileAsId(?string $fileAsId = null): self
    {
        // validation for constraint: string
        if (!is_null($fileAsId) && !is_string($fileAsId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileAsId, true), gettype($fileAsId)), __LINE__);
        }
        $this->FileAsId = $fileAsId;
        
        return $this;
    }
    /**
     * Get DisplayNamePrefix value
     * @return string|null
     */
    public function getDisplayNamePrefix(): ?string
    {
        return $this->DisplayNamePrefix;
    }
    /**
     * Set DisplayNamePrefix value
     * @param string $displayNamePrefix
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNamePrefix(?string $displayNamePrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($displayNamePrefix) && !is_string($displayNamePrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayNamePrefix, true), gettype($displayNamePrefix)), __LINE__);
        }
        $this->DisplayNamePrefix = $displayNamePrefix;
        
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * Get YomiCompanyName value
     * @return string|null
     */
    public function getYomiCompanyName(): ?string
    {
        return $this->YomiCompanyName;
    }
    /**
     * Set YomiCompanyName value
     * @param string $yomiCompanyName
     * @return \StructType\EwsPersonaType
     */
    public function setYomiCompanyName(?string $yomiCompanyName = null): self
    {
        // validation for constraint: string
        if (!is_null($yomiCompanyName) && !is_string($yomiCompanyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yomiCompanyName, true), gettype($yomiCompanyName)), __LINE__);
        }
        $this->YomiCompanyName = $yomiCompanyName;
        
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * @return \StructType\EwsPersonaType
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
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\EwsPersonaType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress(): ?\StructType\EwsEmailAddressType
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @return \StructType\EwsPersonaType
     */
    public function setEmailAddress(?\StructType\EwsEmailAddressType $emailAddress = null): self
    {
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getEmailAddresses(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $emailAddresses
     * @return \StructType\EwsPersonaType
     */
    public function setEmailAddresses(?\ArrayType\EwsArrayOfEmailAddressesType $emailAddresses = null): self
    {
        $this->EmailAddresses = $emailAddresses;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \StructType\EwsPersonaPhoneNumberType|null
     */
    public function getPhoneNumber(): ?\StructType\EwsPersonaPhoneNumberType
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \StructType\EwsPersonaPhoneNumberType $phoneNumber
     * @return \StructType\EwsPersonaType
     */
    public function setPhoneNumber(?\StructType\EwsPersonaPhoneNumberType $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get ImAddress value
     * @return string|null
     */
    public function getImAddress(): ?string
    {
        return $this->ImAddress;
    }
    /**
     * Set ImAddress value
     * @param string $imAddress
     * @return \StructType\EwsPersonaType
     */
    public function setImAddress(?string $imAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($imAddress) && !is_string($imAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imAddress, true), gettype($imAddress)), __LINE__);
        }
        $this->ImAddress = $imAddress;
        
        return $this;
    }
    /**
     * Get HomeCity value
     * @return string|null
     */
    public function getHomeCity(): ?string
    {
        return $this->HomeCity;
    }
    /**
     * Set HomeCity value
     * @param string $homeCity
     * @return \StructType\EwsPersonaType
     */
    public function setHomeCity(?string $homeCity = null): self
    {
        // validation for constraint: string
        if (!is_null($homeCity) && !is_string($homeCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homeCity, true), gettype($homeCity)), __LINE__);
        }
        $this->HomeCity = $homeCity;
        
        return $this;
    }
    /**
     * Get WorkCity value
     * @return string|null
     */
    public function getWorkCity(): ?string
    {
        return $this->WorkCity;
    }
    /**
     * Set WorkCity value
     * @param string $workCity
     * @return \StructType\EwsPersonaType
     */
    public function setWorkCity(?string $workCity = null): self
    {
        // validation for constraint: string
        if (!is_null($workCity) && !is_string($workCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workCity, true), gettype($workCity)), __LINE__);
        }
        $this->WorkCity = $workCity;
        
        return $this;
    }
    /**
     * Get RelevanceScore value
     * @return int|null
     */
    public function getRelevanceScore(): ?int
    {
        return $this->RelevanceScore;
    }
    /**
     * Set RelevanceScore value
     * @param int $relevanceScore
     * @return \StructType\EwsPersonaType
     */
    public function setRelevanceScore(?int $relevanceScore = null): self
    {
        // validation for constraint: int
        if (!is_null($relevanceScore) && !(is_int($relevanceScore) || ctype_digit($relevanceScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relevanceScore, true), gettype($relevanceScore)), __LINE__);
        }
        $this->RelevanceScore = $relevanceScore;
        
        return $this;
    }
    /**
     * Get RankingWeight value
     * @return float|null
     */
    public function getRankingWeight(): ?float
    {
        return $this->RankingWeight;
    }
    /**
     * Set RankingWeight value
     * @param float $rankingWeight
     * @return \StructType\EwsPersonaType
     */
    public function setRankingWeight(?float $rankingWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($rankingWeight) && !(is_float($rankingWeight) || is_numeric($rankingWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rankingWeight, true), gettype($rankingWeight)), __LINE__);
        }
        $this->RankingWeight = $rankingWeight;
        
        return $this;
    }
    /**
     * Get FolderIds value
     * @return \ArrayType\EwsArrayOfFolderIdType|null
     */
    public function getFolderIds(): ?\ArrayType\EwsArrayOfFolderIdType
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \ArrayType\EwsArrayOfFolderIdType $folderIds
     * @return \StructType\EwsPersonaType
     */
    public function setFolderIds(?\ArrayType\EwsArrayOfFolderIdType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
    /**
     * Get Attributions value
     * @return \ArrayType\EwsArrayOfPersonaAttributionsType|null
     */
    public function getAttributions(): ?\ArrayType\EwsArrayOfPersonaAttributionsType
    {
        return $this->Attributions;
    }
    /**
     * Set Attributions value
     * @param \ArrayType\EwsArrayOfPersonaAttributionsType $attributions
     * @return \StructType\EwsPersonaType
     */
    public function setAttributions(?\ArrayType\EwsArrayOfPersonaAttributionsType $attributions = null): self
    {
        $this->Attributions = $attributions;
        
        return $this;
    }
    /**
     * Get DisplayNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getDisplayNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->DisplayNames;
    }
    /**
     * Set DisplayNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $displayNames
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $displayNames = null): self
    {
        $this->DisplayNames = $displayNames;
        
        return $this;
    }
    /**
     * Get FileAses value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getFileAses(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->FileAses;
    }
    /**
     * Set FileAses value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $fileAses
     * @return \StructType\EwsPersonaType
     */
    public function setFileAses(?\ArrayType\EwsArrayOfStringAttributedValuesType $fileAses = null): self
    {
        $this->FileAses = $fileAses;
        
        return $this;
    }
    /**
     * Get FileAsIds value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getFileAsIds(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->FileAsIds;
    }
    /**
     * Set FileAsIds value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds
     * @return \StructType\EwsPersonaType
     */
    public function setFileAsIds(?\ArrayType\EwsArrayOfStringAttributedValuesType $fileAsIds = null): self
    {
        $this->FileAsIds = $fileAsIds;
        
        return $this;
    }
    /**
     * Get DisplayNamePrefixes value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getDisplayNamePrefixes(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->DisplayNamePrefixes;
    }
    /**
     * Set DisplayNamePrefixes value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes
     * @return \StructType\EwsPersonaType
     */
    public function setDisplayNamePrefixes(?\ArrayType\EwsArrayOfStringAttributedValuesType $displayNamePrefixes = null): self
    {
        $this->DisplayNamePrefixes = $displayNamePrefixes;
        
        return $this;
    }
    /**
     * Get GivenNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getGivenNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->GivenNames;
    }
    /**
     * Set GivenNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $givenNames
     * @return \StructType\EwsPersonaType
     */
    public function setGivenNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $givenNames = null): self
    {
        $this->GivenNames = $givenNames;
        
        return $this;
    }
    /**
     * Get MiddleNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getMiddleNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->MiddleNames;
    }
    /**
     * Set MiddleNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $middleNames
     * @return \StructType\EwsPersonaType
     */
    public function setMiddleNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $middleNames = null): self
    {
        $this->MiddleNames = $middleNames;
        
        return $this;
    }
    /**
     * Get Surnames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getSurnames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Surnames;
    }
    /**
     * Set Surnames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $surnames
     * @return \StructType\EwsPersonaType
     */
    public function setSurnames(?\ArrayType\EwsArrayOfStringAttributedValuesType $surnames = null): self
    {
        $this->Surnames = $surnames;
        
        return $this;
    }
    /**
     * Get Generations value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getGenerations(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Generations;
    }
    /**
     * Set Generations value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $generations
     * @return \StructType\EwsPersonaType
     */
    public function setGenerations(?\ArrayType\EwsArrayOfStringAttributedValuesType $generations = null): self
    {
        $this->Generations = $generations;
        
        return $this;
    }
    /**
     * Get Nicknames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getNicknames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Nicknames;
    }
    /**
     * Set Nicknames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $nicknames
     * @return \StructType\EwsPersonaType
     */
    public function setNicknames(?\ArrayType\EwsArrayOfStringAttributedValuesType $nicknames = null): self
    {
        $this->Nicknames = $nicknames;
        
        return $this;
    }
    /**
     * Get Initials value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getInitials(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $initials
     * @return \StructType\EwsPersonaType
     */
    public function setInitials(?\ArrayType\EwsArrayOfStringAttributedValuesType $initials = null): self
    {
        $this->Initials = $initials;
        
        return $this;
    }
    /**
     * Get YomiCompanyNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getYomiCompanyNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->YomiCompanyNames;
    }
    /**
     * Set YomiCompanyNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames
     * @return \StructType\EwsPersonaType
     */
    public function setYomiCompanyNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $yomiCompanyNames = null): self
    {
        $this->YomiCompanyNames = $yomiCompanyNames;
        
        return $this;
    }
    /**
     * Get YomiFirstNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getYomiFirstNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->YomiFirstNames;
    }
    /**
     * Set YomiFirstNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames
     * @return \StructType\EwsPersonaType
     */
    public function setYomiFirstNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $yomiFirstNames = null): self
    {
        $this->YomiFirstNames = $yomiFirstNames;
        
        return $this;
    }
    /**
     * Get YomiLastNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getYomiLastNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->YomiLastNames;
    }
    /**
     * Set YomiLastNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames
     * @return \StructType\EwsPersonaType
     */
    public function setYomiLastNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $yomiLastNames = null): self
    {
        $this->YomiLastNames = $yomiLastNames;
        
        return $this;
    }
    /**
     * Get BusinessPhoneNumbers value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getBusinessPhoneNumbers(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->BusinessPhoneNumbers;
    }
    /**
     * Set BusinessPhoneNumbers value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers
     * @return \StructType\EwsPersonaType
     */
    public function setBusinessPhoneNumbers(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers = null): self
    {
        $this->BusinessPhoneNumbers = $businessPhoneNumbers;
        
        return $this;
    }
    /**
     * Get BusinessPhoneNumbers2 value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getBusinessPhoneNumbers2(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->BusinessPhoneNumbers2;
    }
    /**
     * Set BusinessPhoneNumbers2 value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers2
     * @return \StructType\EwsPersonaType
     */
    public function setBusinessPhoneNumbers2(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $businessPhoneNumbers2 = null): self
    {
        $this->BusinessPhoneNumbers2 = $businessPhoneNumbers2;
        
        return $this;
    }
    /**
     * Get HomePhones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getHomePhones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->HomePhones;
    }
    /**
     * Set HomePhones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones
     * @return \StructType\EwsPersonaType
     */
    public function setHomePhones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones = null): self
    {
        $this->HomePhones = $homePhones;
        
        return $this;
    }
    /**
     * Get HomePhones2 value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getHomePhones2(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->HomePhones2;
    }
    /**
     * Set HomePhones2 value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2
     * @return \StructType\EwsPersonaType
     */
    public function setHomePhones2(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homePhones2 = null): self
    {
        $this->HomePhones2 = $homePhones2;
        
        return $this;
    }
    /**
     * Get MobilePhones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getMobilePhones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->MobilePhones;
    }
    /**
     * Set MobilePhones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones
     * @return \StructType\EwsPersonaType
     */
    public function setMobilePhones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones = null): self
    {
        $this->MobilePhones = $mobilePhones;
        
        return $this;
    }
    /**
     * Get MobilePhones2 value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getMobilePhones2(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->MobilePhones2;
    }
    /**
     * Set MobilePhones2 value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2
     * @return \StructType\EwsPersonaType
     */
    public function setMobilePhones2(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $mobilePhones2 = null): self
    {
        $this->MobilePhones2 = $mobilePhones2;
        
        return $this;
    }
    /**
     * Get AssistantPhoneNumbers value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getAssistantPhoneNumbers(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->AssistantPhoneNumbers;
    }
    /**
     * Set AssistantPhoneNumbers value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $assistantPhoneNumbers
     * @return \StructType\EwsPersonaType
     */
    public function setAssistantPhoneNumbers(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $assistantPhoneNumbers = null): self
    {
        $this->AssistantPhoneNumbers = $assistantPhoneNumbers;
        
        return $this;
    }
    /**
     * Get CallbackPhones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getCallbackPhones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->CallbackPhones;
    }
    /**
     * Set CallbackPhones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones
     * @return \StructType\EwsPersonaType
     */
    public function setCallbackPhones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $callbackPhones = null): self
    {
        $this->CallbackPhones = $callbackPhones;
        
        return $this;
    }
    /**
     * Get CarPhones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getCarPhones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->CarPhones;
    }
    /**
     * Set CarPhones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones
     * @return \StructType\EwsPersonaType
     */
    public function setCarPhones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $carPhones = null): self
    {
        $this->CarPhones = $carPhones;
        
        return $this;
    }
    /**
     * Get HomeFaxes value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getHomeFaxes(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->HomeFaxes;
    }
    /**
     * Set HomeFaxes value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes
     * @return \StructType\EwsPersonaType
     */
    public function setHomeFaxes(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $homeFaxes = null): self
    {
        $this->HomeFaxes = $homeFaxes;
        
        return $this;
    }
    /**
     * Get OrganizationMainPhones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOrganizationMainPhones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->OrganizationMainPhones;
    }
    /**
     * Set OrganizationMainPhones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $organizationMainPhones
     * @return \StructType\EwsPersonaType
     */
    public function setOrganizationMainPhones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $organizationMainPhones = null): self
    {
        $this->OrganizationMainPhones = $organizationMainPhones;
        
        return $this;
    }
    /**
     * Get OtherFaxes value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOtherFaxes(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->OtherFaxes;
    }
    /**
     * Set OtherFaxes value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes
     * @return \StructType\EwsPersonaType
     */
    public function setOtherFaxes(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherFaxes = null): self
    {
        $this->OtherFaxes = $otherFaxes;
        
        return $this;
    }
    /**
     * Get OtherTelephones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOtherTelephones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->OtherTelephones;
    }
    /**
     * Set OtherTelephones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones
     * @return \StructType\EwsPersonaType
     */
    public function setOtherTelephones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherTelephones = null): self
    {
        $this->OtherTelephones = $otherTelephones;
        
        return $this;
    }
    /**
     * Get OtherPhones2 value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getOtherPhones2(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->OtherPhones2;
    }
    /**
     * Set OtherPhones2 value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2
     * @return \StructType\EwsPersonaType
     */
    public function setOtherPhones2(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $otherPhones2 = null): self
    {
        $this->OtherPhones2 = $otherPhones2;
        
        return $this;
    }
    /**
     * Get Pagers value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getPagers(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->Pagers;
    }
    /**
     * Set Pagers value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers
     * @return \StructType\EwsPersonaType
     */
    public function setPagers(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $pagers = null): self
    {
        $this->Pagers = $pagers;
        
        return $this;
    }
    /**
     * Get RadioPhones value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getRadioPhones(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->RadioPhones;
    }
    /**
     * Set RadioPhones value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones
     * @return \StructType\EwsPersonaType
     */
    public function setRadioPhones(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $radioPhones = null): self
    {
        $this->RadioPhones = $radioPhones;
        
        return $this;
    }
    /**
     * Get TelexNumbers value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getTelexNumbers(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->TelexNumbers;
    }
    /**
     * Set TelexNumbers value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers
     * @return \StructType\EwsPersonaType
     */
    public function setTelexNumbers(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $telexNumbers = null): self
    {
        $this->TelexNumbers = $telexNumbers;
        
        return $this;
    }
    /**
     * Get TTYTDDPhoneNumbers value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getTTYTDDPhoneNumbers(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->TTYTDDPhoneNumbers;
    }
    /**
     * Set TTYTDDPhoneNumbers value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $tTYTDDPhoneNumbers
     * @return \StructType\EwsPersonaType
     */
    public function setTTYTDDPhoneNumbers(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $tTYTDDPhoneNumbers = null): self
    {
        $this->TTYTDDPhoneNumbers = $tTYTDDPhoneNumbers;
        
        return $this;
    }
    /**
     * Get WorkFaxes value
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType|null
     */
    public function getWorkFaxes(): ?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
    {
        return $this->WorkFaxes;
    }
    /**
     * Set WorkFaxes value
     * @param \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes
     * @return \StructType\EwsPersonaType
     */
    public function setWorkFaxes(?\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType $workFaxes = null): self
    {
        $this->WorkFaxes = $workFaxes;
        
        return $this;
    }
    /**
     * Get Emails1 value
     * @return \ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    public function getEmails1(): ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
    {
        return $this->Emails1;
    }
    /**
     * Set Emails1 value
     * @param \ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1
     * @return \StructType\EwsPersonaType
     */
    public function setEmails1(?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails1 = null): self
    {
        $this->Emails1 = $emails1;
        
        return $this;
    }
    /**
     * Get Emails2 value
     * @return \ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    public function getEmails2(): ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
    {
        return $this->Emails2;
    }
    /**
     * Set Emails2 value
     * @param \ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2
     * @return \StructType\EwsPersonaType
     */
    public function setEmails2(?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails2 = null): self
    {
        $this->Emails2 = $emails2;
        
        return $this;
    }
    /**
     * Get Emails3 value
     * @return \ArrayType\EwsArrayOfEmailAddressAttributedValuesType|null
     */
    public function getEmails3(): ?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
    {
        return $this->Emails3;
    }
    /**
     * Set Emails3 value
     * @param \ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3
     * @return \StructType\EwsPersonaType
     */
    public function setEmails3(?\ArrayType\EwsArrayOfEmailAddressAttributedValuesType $emails3 = null): self
    {
        $this->Emails3 = $emails3;
        
        return $this;
    }
    /**
     * Get BusinessHomePages value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getBusinessHomePages(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->BusinessHomePages;
    }
    /**
     * Set BusinessHomePages value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages
     * @return \StructType\EwsPersonaType
     */
    public function setBusinessHomePages(?\ArrayType\EwsArrayOfStringAttributedValuesType $businessHomePages = null): self
    {
        $this->BusinessHomePages = $businessHomePages;
        
        return $this;
    }
    /**
     * Get PersonalHomePages value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getPersonalHomePages(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->PersonalHomePages;
    }
    /**
     * Set PersonalHomePages value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages
     * @return \StructType\EwsPersonaType
     */
    public function setPersonalHomePages(?\ArrayType\EwsArrayOfStringAttributedValuesType $personalHomePages = null): self
    {
        $this->PersonalHomePages = $personalHomePages;
        
        return $this;
    }
    /**
     * Get OfficeLocations value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getOfficeLocations(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->OfficeLocations;
    }
    /**
     * Set OfficeLocations value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations
     * @return \StructType\EwsPersonaType
     */
    public function setOfficeLocations(?\ArrayType\EwsArrayOfStringAttributedValuesType $officeLocations = null): self
    {
        $this->OfficeLocations = $officeLocations;
        
        return $this;
    }
    /**
     * Get ImAddresses value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getImAddresses(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->ImAddresses;
    }
    /**
     * Set ImAddresses value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses
     * @return \StructType\EwsPersonaType
     */
    public function setImAddresses(?\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses = null): self
    {
        $this->ImAddresses = $imAddresses;
        
        return $this;
    }
    /**
     * Get ImAddresses2 value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getImAddresses2(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->ImAddresses2;
    }
    /**
     * Set ImAddresses2 value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2
     * @return \StructType\EwsPersonaType
     */
    public function setImAddresses2(?\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses2 = null): self
    {
        $this->ImAddresses2 = $imAddresses2;
        
        return $this;
    }
    /**
     * Get ImAddresses3 value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getImAddresses3(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->ImAddresses3;
    }
    /**
     * Set ImAddresses3 value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3
     * @return \StructType\EwsPersonaType
     */
    public function setImAddresses3(?\ArrayType\EwsArrayOfStringAttributedValuesType $imAddresses3 = null): self
    {
        $this->ImAddresses3 = $imAddresses3;
        
        return $this;
    }
    /**
     * Get BusinessAddresses value
     * @return \ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    public function getBusinessAddresses(): ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
    {
        return $this->BusinessAddresses;
    }
    /**
     * Set BusinessAddresses value
     * @param \ArrayType\EwsArrayOfPostalAddressAttributedValuesType $businessAddresses
     * @return \StructType\EwsPersonaType
     */
    public function setBusinessAddresses(?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $businessAddresses = null): self
    {
        $this->BusinessAddresses = $businessAddresses;
        
        return $this;
    }
    /**
     * Get HomeAddresses value
     * @return \ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    public function getHomeAddresses(): ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
    {
        return $this->HomeAddresses;
    }
    /**
     * Set HomeAddresses value
     * @param \ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses
     * @return \StructType\EwsPersonaType
     */
    public function setHomeAddresses(?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $homeAddresses = null): self
    {
        $this->HomeAddresses = $homeAddresses;
        
        return $this;
    }
    /**
     * Get OtherAddresses value
     * @return \ArrayType\EwsArrayOfPostalAddressAttributedValuesType|null
     */
    public function getOtherAddresses(): ?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
    {
        return $this->OtherAddresses;
    }
    /**
     * Set OtherAddresses value
     * @param \ArrayType\EwsArrayOfPostalAddressAttributedValuesType $otherAddresses
     * @return \StructType\EwsPersonaType
     */
    public function setOtherAddresses(?\ArrayType\EwsArrayOfPostalAddressAttributedValuesType $otherAddresses = null): self
    {
        $this->OtherAddresses = $otherAddresses;
        
        return $this;
    }
    /**
     * Get Titles value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getTitles(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Titles;
    }
    /**
     * Set Titles value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $titles
     * @return \StructType\EwsPersonaType
     */
    public function setTitles(?\ArrayType\EwsArrayOfStringAttributedValuesType $titles = null): self
    {
        $this->Titles = $titles;
        
        return $this;
    }
    /**
     * Get Departments value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getDepartments(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Departments;
    }
    /**
     * Set Departments value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $departments
     * @return \StructType\EwsPersonaType
     */
    public function setDepartments(?\ArrayType\EwsArrayOfStringAttributedValuesType $departments = null): self
    {
        $this->Departments = $departments;
        
        return $this;
    }
    /**
     * Get CompanyNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getCompanyNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->CompanyNames;
    }
    /**
     * Set CompanyNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $companyNames
     * @return \StructType\EwsPersonaType
     */
    public function setCompanyNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $companyNames = null): self
    {
        $this->CompanyNames = $companyNames;
        
        return $this;
    }
    /**
     * Get Managers value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getManagers(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Managers;
    }
    /**
     * Set Managers value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $managers
     * @return \StructType\EwsPersonaType
     */
    public function setManagers(?\ArrayType\EwsArrayOfStringAttributedValuesType $managers = null): self
    {
        $this->Managers = $managers;
        
        return $this;
    }
    /**
     * Get AssistantNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getAssistantNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->AssistantNames;
    }
    /**
     * Set AssistantNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames
     * @return \StructType\EwsPersonaType
     */
    public function setAssistantNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $assistantNames = null): self
    {
        $this->AssistantNames = $assistantNames;
        
        return $this;
    }
    /**
     * Get Professions value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getProfessions(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Professions;
    }
    /**
     * Set Professions value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $professions
     * @return \StructType\EwsPersonaType
     */
    public function setProfessions(?\ArrayType\EwsArrayOfStringAttributedValuesType $professions = null): self
    {
        $this->Professions = $professions;
        
        return $this;
    }
    /**
     * Get SpouseNames value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getSpouseNames(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->SpouseNames;
    }
    /**
     * Set SpouseNames value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames
     * @return \StructType\EwsPersonaType
     */
    public function setSpouseNames(?\ArrayType\EwsArrayOfStringAttributedValuesType $spouseNames = null): self
    {
        $this->SpouseNames = $spouseNames;
        
        return $this;
    }
    /**
     * Get Children value
     * @return \ArrayType\EwsArrayOfStringArrayAttributedValuesType|null
     */
    public function getChildren(): ?\ArrayType\EwsArrayOfStringArrayAttributedValuesType
    {
        return $this->Children;
    }
    /**
     * Set Children value
     * @param \ArrayType\EwsArrayOfStringArrayAttributedValuesType $children
     * @return \StructType\EwsPersonaType
     */
    public function setChildren(?\ArrayType\EwsArrayOfStringArrayAttributedValuesType $children = null): self
    {
        $this->Children = $children;
        
        return $this;
    }
    /**
     * Get Schools value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getSchools(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Schools;
    }
    /**
     * Set Schools value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $schools
     * @return \StructType\EwsPersonaType
     */
    public function setSchools(?\ArrayType\EwsArrayOfStringAttributedValuesType $schools = null): self
    {
        $this->Schools = $schools;
        
        return $this;
    }
    /**
     * Get Hobbies value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getHobbies(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Hobbies;
    }
    /**
     * Set Hobbies value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $hobbies
     * @return \StructType\EwsPersonaType
     */
    public function setHobbies(?\ArrayType\EwsArrayOfStringAttributedValuesType $hobbies = null): self
    {
        $this->Hobbies = $hobbies;
        
        return $this;
    }
    /**
     * Get WeddingAnniversaries value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getWeddingAnniversaries(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->WeddingAnniversaries;
    }
    /**
     * Set WeddingAnniversaries value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries
     * @return \StructType\EwsPersonaType
     */
    public function setWeddingAnniversaries(?\ArrayType\EwsArrayOfStringAttributedValuesType $weddingAnniversaries = null): self
    {
        $this->WeddingAnniversaries = $weddingAnniversaries;
        
        return $this;
    }
    /**
     * Get Birthdays value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getBirthdays(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Birthdays;
    }
    /**
     * Set Birthdays value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $birthdays
     * @return \StructType\EwsPersonaType
     */
    public function setBirthdays(?\ArrayType\EwsArrayOfStringAttributedValuesType $birthdays = null): self
    {
        $this->Birthdays = $birthdays;
        
        return $this;
    }
    /**
     * Get Locations value
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType|null
     */
    public function getLocations(): ?\ArrayType\EwsArrayOfStringAttributedValuesType
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \ArrayType\EwsArrayOfStringAttributedValuesType $locations
     * @return \StructType\EwsPersonaType
     */
    public function setLocations(?\ArrayType\EwsArrayOfStringAttributedValuesType $locations = null): self
    {
        $this->Locations = $locations;
        
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \ArrayType\EwsArrayOfExtendedPropertyAttributedValueType|null
     */
    public function getExtendedProperties(): ?\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $extendedProperties
     * @return \StructType\EwsPersonaType
     */
    public function setExtendedProperties(?\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType $extendedProperties = null): self
    {
        $this->ExtendedProperties = $extendedProperties;
        
        return $this;
    }
}
