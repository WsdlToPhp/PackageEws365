<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetworkItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNetworkItemType extends EwsItemType
{
    /**
     * The DomainId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DomainId = null;
    /**
     * The DomainTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DomainTag = null;
    /**
     * The UserTileUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserTileUrl = null;
    /**
     * The ProfileUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProfileUrl = null;
    /**
     * The Settings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Settings = null;
    /**
     * The IsDefault
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDefault = null;
    /**
     * The AutoLinkError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AutoLinkError = null;
    /**
     * The AutoLinkSuccess
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AutoLinkSuccess = null;
    /**
     * The UserEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserEmail = null;
    /**
     * The ClientPublishSecret
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClientPublishSecret = null;
    /**
     * The ClientToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClientToken = null;
    /**
     * The ClientToken2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClientToken2 = null;
    /**
     * The ContactSyncError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactSyncError = null;
    /**
     * The ContactSyncSuccess
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactSyncSuccess = null;
    /**
     * The ErrorOffers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ErrorOffers = null;
    /**
     * The FirstAuthErrorDates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstAuthErrorDates = null;
    /**
     * The LastVersionSaved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LastVersionSaved = null;
    /**
     * The LastWelcomeContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastWelcomeContact = null;
    /**
     * The Offers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Offers = null;
    /**
     * The PsaLastChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PsaLastChanged = null;
    /**
     * The RefreshToken2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefreshToken2 = null;
    /**
     * The RefreshTokenExpiry2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefreshTokenExpiry2 = null;
    /**
     * The SessionHandle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SessionHandle = null;
    /**
     * The RejectedOffers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RejectedOffers = null;
    /**
     * The SyncEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SyncEnabled = null;
    /**
     * The TokenRefreshLastAttempted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TokenRefreshLastAttempted = null;
    /**
     * The TokenRefreshLastCompleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TokenRefreshLastCompleted = null;
    /**
     * The PsaState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PsaState = null;
    /**
     * The SourceEntryID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SourceEntryID = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * The LastSync
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastSync = null;
    /**
     * Constructor method for NetworkItemType
     * @uses EwsNetworkItemType::setDomainId()
     * @uses EwsNetworkItemType::setDomainTag()
     * @uses EwsNetworkItemType::setUserTileUrl()
     * @uses EwsNetworkItemType::setProfileUrl()
     * @uses EwsNetworkItemType::setSettings()
     * @uses EwsNetworkItemType::setIsDefault()
     * @uses EwsNetworkItemType::setAutoLinkError()
     * @uses EwsNetworkItemType::setAutoLinkSuccess()
     * @uses EwsNetworkItemType::setUserEmail()
     * @uses EwsNetworkItemType::setClientPublishSecret()
     * @uses EwsNetworkItemType::setClientToken()
     * @uses EwsNetworkItemType::setClientToken2()
     * @uses EwsNetworkItemType::setContactSyncError()
     * @uses EwsNetworkItemType::setContactSyncSuccess()
     * @uses EwsNetworkItemType::setErrorOffers()
     * @uses EwsNetworkItemType::setFirstAuthErrorDates()
     * @uses EwsNetworkItemType::setLastVersionSaved()
     * @uses EwsNetworkItemType::setLastWelcomeContact()
     * @uses EwsNetworkItemType::setOffers()
     * @uses EwsNetworkItemType::setPsaLastChanged()
     * @uses EwsNetworkItemType::setRefreshToken2()
     * @uses EwsNetworkItemType::setRefreshTokenExpiry2()
     * @uses EwsNetworkItemType::setSessionHandle()
     * @uses EwsNetworkItemType::setRejectedOffers()
     * @uses EwsNetworkItemType::setSyncEnabled()
     * @uses EwsNetworkItemType::setTokenRefreshLastAttempted()
     * @uses EwsNetworkItemType::setTokenRefreshLastCompleted()
     * @uses EwsNetworkItemType::setPsaState()
     * @uses EwsNetworkItemType::setSourceEntryID()
     * @uses EwsNetworkItemType::setAccountName()
     * @uses EwsNetworkItemType::setLastSync()
     * @param int $domainId
     * @param string $domainTag
     * @param string $userTileUrl
     * @param string $profileUrl
     * @param int $settings
     * @param bool $isDefault
     * @param string $autoLinkError
     * @param string $autoLinkSuccess
     * @param string $userEmail
     * @param string $clientPublishSecret
     * @param string $clientToken
     * @param string $clientToken2
     * @param string $contactSyncError
     * @param string $contactSyncSuccess
     * @param int $errorOffers
     * @param string $firstAuthErrorDates
     * @param int $lastVersionSaved
     * @param string $lastWelcomeContact
     * @param int $offers
     * @param string $psaLastChanged
     * @param string $refreshToken2
     * @param string $refreshTokenExpiry2
     * @param string $sessionHandle
     * @param int $rejectedOffers
     * @param bool $syncEnabled
     * @param string $tokenRefreshLastAttempted
     * @param string $tokenRefreshLastCompleted
     * @param string $psaState
     * @param string $sourceEntryID
     * @param string $accountName
     * @param string $lastSync
     */
    public function __construct(?int $domainId = null, ?string $domainTag = null, ?string $userTileUrl = null, ?string $profileUrl = null, ?int $settings = null, ?bool $isDefault = null, ?string $autoLinkError = null, ?string $autoLinkSuccess = null, ?string $userEmail = null, ?string $clientPublishSecret = null, ?string $clientToken = null, ?string $clientToken2 = null, ?string $contactSyncError = null, ?string $contactSyncSuccess = null, ?int $errorOffers = null, ?string $firstAuthErrorDates = null, ?int $lastVersionSaved = null, ?string $lastWelcomeContact = null, ?int $offers = null, ?string $psaLastChanged = null, ?string $refreshToken2 = null, ?string $refreshTokenExpiry2 = null, ?string $sessionHandle = null, ?int $rejectedOffers = null, ?bool $syncEnabled = null, ?string $tokenRefreshLastAttempted = null, ?string $tokenRefreshLastCompleted = null, ?string $psaState = null, ?string $sourceEntryID = null, ?string $accountName = null, ?string $lastSync = null)
    {
        $this
            ->setDomainId($domainId)
            ->setDomainTag($domainTag)
            ->setUserTileUrl($userTileUrl)
            ->setProfileUrl($profileUrl)
            ->setSettings($settings)
            ->setIsDefault($isDefault)
            ->setAutoLinkError($autoLinkError)
            ->setAutoLinkSuccess($autoLinkSuccess)
            ->setUserEmail($userEmail)
            ->setClientPublishSecret($clientPublishSecret)
            ->setClientToken($clientToken)
            ->setClientToken2($clientToken2)
            ->setContactSyncError($contactSyncError)
            ->setContactSyncSuccess($contactSyncSuccess)
            ->setErrorOffers($errorOffers)
            ->setFirstAuthErrorDates($firstAuthErrorDates)
            ->setLastVersionSaved($lastVersionSaved)
            ->setLastWelcomeContact($lastWelcomeContact)
            ->setOffers($offers)
            ->setPsaLastChanged($psaLastChanged)
            ->setRefreshToken2($refreshToken2)
            ->setRefreshTokenExpiry2($refreshTokenExpiry2)
            ->setSessionHandle($sessionHandle)
            ->setRejectedOffers($rejectedOffers)
            ->setSyncEnabled($syncEnabled)
            ->setTokenRefreshLastAttempted($tokenRefreshLastAttempted)
            ->setTokenRefreshLastCompleted($tokenRefreshLastCompleted)
            ->setPsaState($psaState)
            ->setSourceEntryID($sourceEntryID)
            ->setAccountName($accountName)
            ->setLastSync($lastSync);
    }
    /**
     * Get DomainId value
     * @return int|null
     */
    public function getDomainId(): ?int
    {
        return $this->DomainId;
    }
    /**
     * Set DomainId value
     * @param int $domainId
     * @return \StructType\EwsNetworkItemType
     */
    public function setDomainId(?int $domainId = null): self
    {
        // validation for constraint: int
        if (!is_null($domainId) && !(is_int($domainId) || ctype_digit($domainId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($domainId, true), gettype($domainId)), __LINE__);
        }
        $this->DomainId = $domainId;
        
        return $this;
    }
    /**
     * Get DomainTag value
     * @return string|null
     */
    public function getDomainTag(): ?string
    {
        return $this->DomainTag;
    }
    /**
     * Set DomainTag value
     * @param string $domainTag
     * @return \StructType\EwsNetworkItemType
     */
    public function setDomainTag(?string $domainTag = null): self
    {
        // validation for constraint: string
        if (!is_null($domainTag) && !is_string($domainTag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainTag, true), gettype($domainTag)), __LINE__);
        }
        $this->DomainTag = $domainTag;
        
        return $this;
    }
    /**
     * Get UserTileUrl value
     * @return string|null
     */
    public function getUserTileUrl(): ?string
    {
        return $this->UserTileUrl;
    }
    /**
     * Set UserTileUrl value
     * @param string $userTileUrl
     * @return \StructType\EwsNetworkItemType
     */
    public function setUserTileUrl(?string $userTileUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($userTileUrl) && !is_string($userTileUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userTileUrl, true), gettype($userTileUrl)), __LINE__);
        }
        $this->UserTileUrl = $userTileUrl;
        
        return $this;
    }
    /**
     * Get ProfileUrl value
     * @return string|null
     */
    public function getProfileUrl(): ?string
    {
        return $this->ProfileUrl;
    }
    /**
     * Set ProfileUrl value
     * @param string $profileUrl
     * @return \StructType\EwsNetworkItemType
     */
    public function setProfileUrl(?string $profileUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($profileUrl) && !is_string($profileUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileUrl, true), gettype($profileUrl)), __LINE__);
        }
        $this->ProfileUrl = $profileUrl;
        
        return $this;
    }
    /**
     * Get Settings value
     * @return int|null
     */
    public function getSettings(): ?int
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param int $settings
     * @return \StructType\EwsNetworkItemType
     */
    public function setSettings(?int $settings = null): self
    {
        // validation for constraint: int
        if (!is_null($settings) && !(is_int($settings) || ctype_digit($settings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settings, true), gettype($settings)), __LINE__);
        }
        $this->Settings = $settings;
        
        return $this;
    }
    /**
     * Get IsDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \StructType\EwsNetworkItemType
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->IsDefault = $isDefault;
        
        return $this;
    }
    /**
     * Get AutoLinkError value
     * @return string|null
     */
    public function getAutoLinkError(): ?string
    {
        return $this->AutoLinkError;
    }
    /**
     * Set AutoLinkError value
     * @param string $autoLinkError
     * @return \StructType\EwsNetworkItemType
     */
    public function setAutoLinkError(?string $autoLinkError = null): self
    {
        // validation for constraint: string
        if (!is_null($autoLinkError) && !is_string($autoLinkError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoLinkError, true), gettype($autoLinkError)), __LINE__);
        }
        $this->AutoLinkError = $autoLinkError;
        
        return $this;
    }
    /**
     * Get AutoLinkSuccess value
     * @return string|null
     */
    public function getAutoLinkSuccess(): ?string
    {
        return $this->AutoLinkSuccess;
    }
    /**
     * Set AutoLinkSuccess value
     * @param string $autoLinkSuccess
     * @return \StructType\EwsNetworkItemType
     */
    public function setAutoLinkSuccess(?string $autoLinkSuccess = null): self
    {
        // validation for constraint: string
        if (!is_null($autoLinkSuccess) && !is_string($autoLinkSuccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoLinkSuccess, true), gettype($autoLinkSuccess)), __LINE__);
        }
        $this->AutoLinkSuccess = $autoLinkSuccess;
        
        return $this;
    }
    /**
     * Get UserEmail value
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->UserEmail;
    }
    /**
     * Set UserEmail value
     * @param string $userEmail
     * @return \StructType\EwsNetworkItemType
     */
    public function setUserEmail(?string $userEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($userEmail) && !is_string($userEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userEmail, true), gettype($userEmail)), __LINE__);
        }
        $this->UserEmail = $userEmail;
        
        return $this;
    }
    /**
     * Get ClientPublishSecret value
     * @return string|null
     */
    public function getClientPublishSecret(): ?string
    {
        return $this->ClientPublishSecret;
    }
    /**
     * Set ClientPublishSecret value
     * @param string $clientPublishSecret
     * @return \StructType\EwsNetworkItemType
     */
    public function setClientPublishSecret(?string $clientPublishSecret = null): self
    {
        // validation for constraint: string
        if (!is_null($clientPublishSecret) && !is_string($clientPublishSecret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientPublishSecret, true), gettype($clientPublishSecret)), __LINE__);
        }
        $this->ClientPublishSecret = $clientPublishSecret;
        
        return $this;
    }
    /**
     * Get ClientToken value
     * @return string|null
     */
    public function getClientToken(): ?string
    {
        return $this->ClientToken;
    }
    /**
     * Set ClientToken value
     * @param string $clientToken
     * @return \StructType\EwsNetworkItemType
     */
    public function setClientToken(?string $clientToken = null): self
    {
        // validation for constraint: string
        if (!is_null($clientToken) && !is_string($clientToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientToken, true), gettype($clientToken)), __LINE__);
        }
        $this->ClientToken = $clientToken;
        
        return $this;
    }
    /**
     * Get ClientToken2 value
     * @return string|null
     */
    public function getClientToken2(): ?string
    {
        return $this->ClientToken2;
    }
    /**
     * Set ClientToken2 value
     * @param string $clientToken2
     * @return \StructType\EwsNetworkItemType
     */
    public function setClientToken2(?string $clientToken2 = null): self
    {
        // validation for constraint: string
        if (!is_null($clientToken2) && !is_string($clientToken2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientToken2, true), gettype($clientToken2)), __LINE__);
        }
        $this->ClientToken2 = $clientToken2;
        
        return $this;
    }
    /**
     * Get ContactSyncError value
     * @return string|null
     */
    public function getContactSyncError(): ?string
    {
        return $this->ContactSyncError;
    }
    /**
     * Set ContactSyncError value
     * @param string $contactSyncError
     * @return \StructType\EwsNetworkItemType
     */
    public function setContactSyncError(?string $contactSyncError = null): self
    {
        // validation for constraint: string
        if (!is_null($contactSyncError) && !is_string($contactSyncError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactSyncError, true), gettype($contactSyncError)), __LINE__);
        }
        $this->ContactSyncError = $contactSyncError;
        
        return $this;
    }
    /**
     * Get ContactSyncSuccess value
     * @return string|null
     */
    public function getContactSyncSuccess(): ?string
    {
        return $this->ContactSyncSuccess;
    }
    /**
     * Set ContactSyncSuccess value
     * @param string $contactSyncSuccess
     * @return \StructType\EwsNetworkItemType
     */
    public function setContactSyncSuccess(?string $contactSyncSuccess = null): self
    {
        // validation for constraint: string
        if (!is_null($contactSyncSuccess) && !is_string($contactSyncSuccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactSyncSuccess, true), gettype($contactSyncSuccess)), __LINE__);
        }
        $this->ContactSyncSuccess = $contactSyncSuccess;
        
        return $this;
    }
    /**
     * Get ErrorOffers value
     * @return int|null
     */
    public function getErrorOffers(): ?int
    {
        return $this->ErrorOffers;
    }
    /**
     * Set ErrorOffers value
     * @param int $errorOffers
     * @return \StructType\EwsNetworkItemType
     */
    public function setErrorOffers(?int $errorOffers = null): self
    {
        // validation for constraint: int
        if (!is_null($errorOffers) && !(is_int($errorOffers) || ctype_digit($errorOffers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorOffers, true), gettype($errorOffers)), __LINE__);
        }
        $this->ErrorOffers = $errorOffers;
        
        return $this;
    }
    /**
     * Get FirstAuthErrorDates value
     * @return string|null
     */
    public function getFirstAuthErrorDates(): ?string
    {
        return $this->FirstAuthErrorDates;
    }
    /**
     * Set FirstAuthErrorDates value
     * @param string $firstAuthErrorDates
     * @return \StructType\EwsNetworkItemType
     */
    public function setFirstAuthErrorDates(?string $firstAuthErrorDates = null): self
    {
        // validation for constraint: string
        if (!is_null($firstAuthErrorDates) && !is_string($firstAuthErrorDates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstAuthErrorDates, true), gettype($firstAuthErrorDates)), __LINE__);
        }
        $this->FirstAuthErrorDates = $firstAuthErrorDates;
        
        return $this;
    }
    /**
     * Get LastVersionSaved value
     * @return int|null
     */
    public function getLastVersionSaved(): ?int
    {
        return $this->LastVersionSaved;
    }
    /**
     * Set LastVersionSaved value
     * @param int $lastVersionSaved
     * @return \StructType\EwsNetworkItemType
     */
    public function setLastVersionSaved(?int $lastVersionSaved = null): self
    {
        // validation for constraint: int
        if (!is_null($lastVersionSaved) && !(is_int($lastVersionSaved) || ctype_digit($lastVersionSaved))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastVersionSaved, true), gettype($lastVersionSaved)), __LINE__);
        }
        $this->LastVersionSaved = $lastVersionSaved;
        
        return $this;
    }
    /**
     * Get LastWelcomeContact value
     * @return string|null
     */
    public function getLastWelcomeContact(): ?string
    {
        return $this->LastWelcomeContact;
    }
    /**
     * Set LastWelcomeContact value
     * @param string $lastWelcomeContact
     * @return \StructType\EwsNetworkItemType
     */
    public function setLastWelcomeContact(?string $lastWelcomeContact = null): self
    {
        // validation for constraint: string
        if (!is_null($lastWelcomeContact) && !is_string($lastWelcomeContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastWelcomeContact, true), gettype($lastWelcomeContact)), __LINE__);
        }
        $this->LastWelcomeContact = $lastWelcomeContact;
        
        return $this;
    }
    /**
     * Get Offers value
     * @return int|null
     */
    public function getOffers(): ?int
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param int $offers
     * @return \StructType\EwsNetworkItemType
     */
    public function setOffers(?int $offers = null): self
    {
        // validation for constraint: int
        if (!is_null($offers) && !(is_int($offers) || ctype_digit($offers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offers, true), gettype($offers)), __LINE__);
        }
        $this->Offers = $offers;
        
        return $this;
    }
    /**
     * Get PsaLastChanged value
     * @return string|null
     */
    public function getPsaLastChanged(): ?string
    {
        return $this->PsaLastChanged;
    }
    /**
     * Set PsaLastChanged value
     * @param string $psaLastChanged
     * @return \StructType\EwsNetworkItemType
     */
    public function setPsaLastChanged(?string $psaLastChanged = null): self
    {
        // validation for constraint: string
        if (!is_null($psaLastChanged) && !is_string($psaLastChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($psaLastChanged, true), gettype($psaLastChanged)), __LINE__);
        }
        $this->PsaLastChanged = $psaLastChanged;
        
        return $this;
    }
    /**
     * Get RefreshToken2 value
     * @return string|null
     */
    public function getRefreshToken2(): ?string
    {
        return $this->RefreshToken2;
    }
    /**
     * Set RefreshToken2 value
     * @param string $refreshToken2
     * @return \StructType\EwsNetworkItemType
     */
    public function setRefreshToken2(?string $refreshToken2 = null): self
    {
        // validation for constraint: string
        if (!is_null($refreshToken2) && !is_string($refreshToken2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refreshToken2, true), gettype($refreshToken2)), __LINE__);
        }
        $this->RefreshToken2 = $refreshToken2;
        
        return $this;
    }
    /**
     * Get RefreshTokenExpiry2 value
     * @return string|null
     */
    public function getRefreshTokenExpiry2(): ?string
    {
        return $this->RefreshTokenExpiry2;
    }
    /**
     * Set RefreshTokenExpiry2 value
     * @param string $refreshTokenExpiry2
     * @return \StructType\EwsNetworkItemType
     */
    public function setRefreshTokenExpiry2(?string $refreshTokenExpiry2 = null): self
    {
        // validation for constraint: string
        if (!is_null($refreshTokenExpiry2) && !is_string($refreshTokenExpiry2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refreshTokenExpiry2, true), gettype($refreshTokenExpiry2)), __LINE__);
        }
        $this->RefreshTokenExpiry2 = $refreshTokenExpiry2;
        
        return $this;
    }
    /**
     * Get SessionHandle value
     * @return string|null
     */
    public function getSessionHandle(): ?string
    {
        return $this->SessionHandle;
    }
    /**
     * Set SessionHandle value
     * @param string $sessionHandle
     * @return \StructType\EwsNetworkItemType
     */
    public function setSessionHandle(?string $sessionHandle = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionHandle) && !is_string($sessionHandle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionHandle, true), gettype($sessionHandle)), __LINE__);
        }
        $this->SessionHandle = $sessionHandle;
        
        return $this;
    }
    /**
     * Get RejectedOffers value
     * @return int|null
     */
    public function getRejectedOffers(): ?int
    {
        return $this->RejectedOffers;
    }
    /**
     * Set RejectedOffers value
     * @param int $rejectedOffers
     * @return \StructType\EwsNetworkItemType
     */
    public function setRejectedOffers(?int $rejectedOffers = null): self
    {
        // validation for constraint: int
        if (!is_null($rejectedOffers) && !(is_int($rejectedOffers) || ctype_digit($rejectedOffers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rejectedOffers, true), gettype($rejectedOffers)), __LINE__);
        }
        $this->RejectedOffers = $rejectedOffers;
        
        return $this;
    }
    /**
     * Get SyncEnabled value
     * @return bool|null
     */
    public function getSyncEnabled(): ?bool
    {
        return $this->SyncEnabled;
    }
    /**
     * Set SyncEnabled value
     * @param bool $syncEnabled
     * @return \StructType\EwsNetworkItemType
     */
    public function setSyncEnabled(?bool $syncEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($syncEnabled) && !is_bool($syncEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($syncEnabled, true), gettype($syncEnabled)), __LINE__);
        }
        $this->SyncEnabled = $syncEnabled;
        
        return $this;
    }
    /**
     * Get TokenRefreshLastAttempted value
     * @return string|null
     */
    public function getTokenRefreshLastAttempted(): ?string
    {
        return $this->TokenRefreshLastAttempted;
    }
    /**
     * Set TokenRefreshLastAttempted value
     * @param string $tokenRefreshLastAttempted
     * @return \StructType\EwsNetworkItemType
     */
    public function setTokenRefreshLastAttempted(?string $tokenRefreshLastAttempted = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenRefreshLastAttempted) && !is_string($tokenRefreshLastAttempted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenRefreshLastAttempted, true), gettype($tokenRefreshLastAttempted)), __LINE__);
        }
        $this->TokenRefreshLastAttempted = $tokenRefreshLastAttempted;
        
        return $this;
    }
    /**
     * Get TokenRefreshLastCompleted value
     * @return string|null
     */
    public function getTokenRefreshLastCompleted(): ?string
    {
        return $this->TokenRefreshLastCompleted;
    }
    /**
     * Set TokenRefreshLastCompleted value
     * @param string $tokenRefreshLastCompleted
     * @return \StructType\EwsNetworkItemType
     */
    public function setTokenRefreshLastCompleted(?string $tokenRefreshLastCompleted = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenRefreshLastCompleted) && !is_string($tokenRefreshLastCompleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenRefreshLastCompleted, true), gettype($tokenRefreshLastCompleted)), __LINE__);
        }
        $this->TokenRefreshLastCompleted = $tokenRefreshLastCompleted;
        
        return $this;
    }
    /**
     * Get PsaState value
     * @return string|null
     */
    public function getPsaState(): ?string
    {
        return $this->PsaState;
    }
    /**
     * Set PsaState value
     * @param string $psaState
     * @return \StructType\EwsNetworkItemType
     */
    public function setPsaState(?string $psaState = null): self
    {
        // validation for constraint: string
        if (!is_null($psaState) && !is_string($psaState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($psaState, true), gettype($psaState)), __LINE__);
        }
        $this->PsaState = $psaState;
        
        return $this;
    }
    /**
     * Get SourceEntryID value
     * @return string|null
     */
    public function getSourceEntryID(): ?string
    {
        return $this->SourceEntryID;
    }
    /**
     * Set SourceEntryID value
     * @param string $sourceEntryID
     * @return \StructType\EwsNetworkItemType
     */
    public function setSourceEntryID(?string $sourceEntryID = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceEntryID) && !is_string($sourceEntryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceEntryID, true), gettype($sourceEntryID)), __LINE__);
        }
        $this->SourceEntryID = $sourceEntryID;
        
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
     * @return \StructType\EwsNetworkItemType
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
     * Get LastSync value
     * @return string|null
     */
    public function getLastSync(): ?string
    {
        return $this->LastSync;
    }
    /**
     * Set LastSync value
     * @param string $lastSync
     * @return \StructType\EwsNetworkItemType
     */
    public function setLastSync(?string $lastSync = null): self
    {
        // validation for constraint: string
        if (!is_null($lastSync) && !is_string($lastSync)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastSync, true), gettype($lastSync)), __LINE__);
        }
        $this->LastSync = $lastSync;
        
        return $this;
    }
}
