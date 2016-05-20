<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DomainId;
    /**
     * The DomainTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DomainTag;
    /**
     * The UserTileUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserTileUrl;
    /**
     * The ProfileUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProfileUrl;
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Settings;
    /**
     * The IsDefault
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDefault;
    /**
     * The AutoLinkError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AutoLinkError;
    /**
     * The AutoLinkSuccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AutoLinkSuccess;
    /**
     * The UserEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserEmail;
    /**
     * The ClientPublishSecret
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClientPublishSecret;
    /**
     * The ClientToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClientToken;
    /**
     * The ClientToken2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClientToken2;
    /**
     * The ContactSyncError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactSyncError;
    /**
     * The ContactSyncSuccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactSyncSuccess;
    /**
     * The ErrorOffers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ErrorOffers;
    /**
     * The FirstAuthErrorDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstAuthErrorDates;
    /**
     * The LastVersionSaved
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LastVersionSaved;
    /**
     * The LastWelcomeContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastWelcomeContact;
    /**
     * The Offers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Offers;
    /**
     * The PsaLastChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PsaLastChanged;
    /**
     * The RefreshToken2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RefreshToken2;
    /**
     * The RefreshTokenExpiry2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RefreshTokenExpiry2;
    /**
     * The SessionHandle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SessionHandle;
    /**
     * The RejectedOffers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RejectedOffers;
    /**
     * The SyncEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SyncEnabled;
    /**
     * The TokenRefreshLastAttempted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenRefreshLastAttempted;
    /**
     * The TokenRefreshLastCompleted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenRefreshLastCompleted;
    /**
     * The PsaState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PsaState;
    /**
     * The SourceEntryID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $SourceEntryID;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * The LastSync
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastSync;
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
     * @param base64Binary $sourceEntryID
     * @param string $accountName
     * @param string $lastSync
     */
    public function __construct($domainId = null, $domainTag = null, $userTileUrl = null, $profileUrl = null, $settings = null, $isDefault = null, $autoLinkError = null, $autoLinkSuccess = null, $userEmail = null, $clientPublishSecret = null, $clientToken = null, $clientToken2 = null, $contactSyncError = null, $contactSyncSuccess = null, $errorOffers = null, $firstAuthErrorDates = null, $lastVersionSaved = null, $lastWelcomeContact = null, $offers = null, $psaLastChanged = null, $refreshToken2 = null, $refreshTokenExpiry2 = null, $sessionHandle = null, $rejectedOffers = null, $syncEnabled = null, $tokenRefreshLastAttempted = null, $tokenRefreshLastCompleted = null, $psaState = null, base64Binary $sourceEntryID = null, $accountName = null, $lastSync = null)
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
    public function getDomainId()
    {
        return $this->DomainId;
    }
    /**
     * Set DomainId value
     * @param int $domainId
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setDomainId($domainId = null)
    {
        // validation for constraint: int
        if (!is_null($domainId) && !is_numeric($domainId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($domainId)), __LINE__);
        }
        $this->DomainId = $domainId;
        return $this;
    }
    /**
     * Get DomainTag value
     * @return string|null
     */
    public function getDomainTag()
    {
        return $this->DomainTag;
    }
    /**
     * Set DomainTag value
     * @param string $domainTag
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setDomainTag($domainTag = null)
    {
        // validation for constraint: string
        if (!is_null($domainTag) && !is_string($domainTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainTag)), __LINE__);
        }
        $this->DomainTag = $domainTag;
        return $this;
    }
    /**
     * Get UserTileUrl value
     * @return string|null
     */
    public function getUserTileUrl()
    {
        return $this->UserTileUrl;
    }
    /**
     * Set UserTileUrl value
     * @param string $userTileUrl
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setUserTileUrl($userTileUrl = null)
    {
        // validation for constraint: string
        if (!is_null($userTileUrl) && !is_string($userTileUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userTileUrl)), __LINE__);
        }
        $this->UserTileUrl = $userTileUrl;
        return $this;
    }
    /**
     * Get ProfileUrl value
     * @return string|null
     */
    public function getProfileUrl()
    {
        return $this->ProfileUrl;
    }
    /**
     * Set ProfileUrl value
     * @param string $profileUrl
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setProfileUrl($profileUrl = null)
    {
        // validation for constraint: string
        if (!is_null($profileUrl) && !is_string($profileUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileUrl)), __LINE__);
        }
        $this->ProfileUrl = $profileUrl;
        return $this;
    }
    /**
     * Get Settings value
     * @return int|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param int $settings
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setSettings($settings = null)
    {
        // validation for constraint: int
        if (!is_null($settings) && !is_numeric($settings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($settings)), __LINE__);
        }
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get IsDefault value
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setIsDefault($isDefault = null)
    {
        $this->IsDefault = $isDefault;
        return $this;
    }
    /**
     * Get AutoLinkError value
     * @return string|null
     */
    public function getAutoLinkError()
    {
        return $this->AutoLinkError;
    }
    /**
     * Set AutoLinkError value
     * @param string $autoLinkError
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setAutoLinkError($autoLinkError = null)
    {
        // validation for constraint: string
        if (!is_null($autoLinkError) && !is_string($autoLinkError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($autoLinkError)), __LINE__);
        }
        $this->AutoLinkError = $autoLinkError;
        return $this;
    }
    /**
     * Get AutoLinkSuccess value
     * @return string|null
     */
    public function getAutoLinkSuccess()
    {
        return $this->AutoLinkSuccess;
    }
    /**
     * Set AutoLinkSuccess value
     * @param string $autoLinkSuccess
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setAutoLinkSuccess($autoLinkSuccess = null)
    {
        // validation for constraint: string
        if (!is_null($autoLinkSuccess) && !is_string($autoLinkSuccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($autoLinkSuccess)), __LINE__);
        }
        $this->AutoLinkSuccess = $autoLinkSuccess;
        return $this;
    }
    /**
     * Get UserEmail value
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->UserEmail;
    }
    /**
     * Set UserEmail value
     * @param string $userEmail
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setUserEmail($userEmail = null)
    {
        // validation for constraint: string
        if (!is_null($userEmail) && !is_string($userEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userEmail)), __LINE__);
        }
        $this->UserEmail = $userEmail;
        return $this;
    }
    /**
     * Get ClientPublishSecret value
     * @return string|null
     */
    public function getClientPublishSecret()
    {
        return $this->ClientPublishSecret;
    }
    /**
     * Set ClientPublishSecret value
     * @param string $clientPublishSecret
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setClientPublishSecret($clientPublishSecret = null)
    {
        // validation for constraint: string
        if (!is_null($clientPublishSecret) && !is_string($clientPublishSecret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientPublishSecret)), __LINE__);
        }
        $this->ClientPublishSecret = $clientPublishSecret;
        return $this;
    }
    /**
     * Get ClientToken value
     * @return string|null
     */
    public function getClientToken()
    {
        return $this->ClientToken;
    }
    /**
     * Set ClientToken value
     * @param string $clientToken
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setClientToken($clientToken = null)
    {
        // validation for constraint: string
        if (!is_null($clientToken) && !is_string($clientToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientToken)), __LINE__);
        }
        $this->ClientToken = $clientToken;
        return $this;
    }
    /**
     * Get ClientToken2 value
     * @return string|null
     */
    public function getClientToken2()
    {
        return $this->ClientToken2;
    }
    /**
     * Set ClientToken2 value
     * @param string $clientToken2
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setClientToken2($clientToken2 = null)
    {
        // validation for constraint: string
        if (!is_null($clientToken2) && !is_string($clientToken2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientToken2)), __LINE__);
        }
        $this->ClientToken2 = $clientToken2;
        return $this;
    }
    /**
     * Get ContactSyncError value
     * @return string|null
     */
    public function getContactSyncError()
    {
        return $this->ContactSyncError;
    }
    /**
     * Set ContactSyncError value
     * @param string $contactSyncError
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setContactSyncError($contactSyncError = null)
    {
        // validation for constraint: string
        if (!is_null($contactSyncError) && !is_string($contactSyncError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactSyncError)), __LINE__);
        }
        $this->ContactSyncError = $contactSyncError;
        return $this;
    }
    /**
     * Get ContactSyncSuccess value
     * @return string|null
     */
    public function getContactSyncSuccess()
    {
        return $this->ContactSyncSuccess;
    }
    /**
     * Set ContactSyncSuccess value
     * @param string $contactSyncSuccess
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setContactSyncSuccess($contactSyncSuccess = null)
    {
        // validation for constraint: string
        if (!is_null($contactSyncSuccess) && !is_string($contactSyncSuccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactSyncSuccess)), __LINE__);
        }
        $this->ContactSyncSuccess = $contactSyncSuccess;
        return $this;
    }
    /**
     * Get ErrorOffers value
     * @return int|null
     */
    public function getErrorOffers()
    {
        return $this->ErrorOffers;
    }
    /**
     * Set ErrorOffers value
     * @param int $errorOffers
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setErrorOffers($errorOffers = null)
    {
        // validation for constraint: int
        if (!is_null($errorOffers) && !is_numeric($errorOffers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorOffers)), __LINE__);
        }
        $this->ErrorOffers = $errorOffers;
        return $this;
    }
    /**
     * Get FirstAuthErrorDates value
     * @return string|null
     */
    public function getFirstAuthErrorDates()
    {
        return $this->FirstAuthErrorDates;
    }
    /**
     * Set FirstAuthErrorDates value
     * @param string $firstAuthErrorDates
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setFirstAuthErrorDates($firstAuthErrorDates = null)
    {
        // validation for constraint: string
        if (!is_null($firstAuthErrorDates) && !is_string($firstAuthErrorDates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstAuthErrorDates)), __LINE__);
        }
        $this->FirstAuthErrorDates = $firstAuthErrorDates;
        return $this;
    }
    /**
     * Get LastVersionSaved value
     * @return int|null
     */
    public function getLastVersionSaved()
    {
        return $this->LastVersionSaved;
    }
    /**
     * Set LastVersionSaved value
     * @param int $lastVersionSaved
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setLastVersionSaved($lastVersionSaved = null)
    {
        // validation for constraint: int
        if (!is_null($lastVersionSaved) && !is_numeric($lastVersionSaved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lastVersionSaved)), __LINE__);
        }
        $this->LastVersionSaved = $lastVersionSaved;
        return $this;
    }
    /**
     * Get LastWelcomeContact value
     * @return string|null
     */
    public function getLastWelcomeContact()
    {
        return $this->LastWelcomeContact;
    }
    /**
     * Set LastWelcomeContact value
     * @param string $lastWelcomeContact
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setLastWelcomeContact($lastWelcomeContact = null)
    {
        // validation for constraint: string
        if (!is_null($lastWelcomeContact) && !is_string($lastWelcomeContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastWelcomeContact)), __LINE__);
        }
        $this->LastWelcomeContact = $lastWelcomeContact;
        return $this;
    }
    /**
     * Get Offers value
     * @return int|null
     */
    public function getOffers()
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param int $offers
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setOffers($offers = null)
    {
        // validation for constraint: int
        if (!is_null($offers) && !is_numeric($offers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offers)), __LINE__);
        }
        $this->Offers = $offers;
        return $this;
    }
    /**
     * Get PsaLastChanged value
     * @return string|null
     */
    public function getPsaLastChanged()
    {
        return $this->PsaLastChanged;
    }
    /**
     * Set PsaLastChanged value
     * @param string $psaLastChanged
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setPsaLastChanged($psaLastChanged = null)
    {
        // validation for constraint: string
        if (!is_null($psaLastChanged) && !is_string($psaLastChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($psaLastChanged)), __LINE__);
        }
        $this->PsaLastChanged = $psaLastChanged;
        return $this;
    }
    /**
     * Get RefreshToken2 value
     * @return string|null
     */
    public function getRefreshToken2()
    {
        return $this->RefreshToken2;
    }
    /**
     * Set RefreshToken2 value
     * @param string $refreshToken2
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setRefreshToken2($refreshToken2 = null)
    {
        // validation for constraint: string
        if (!is_null($refreshToken2) && !is_string($refreshToken2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refreshToken2)), __LINE__);
        }
        $this->RefreshToken2 = $refreshToken2;
        return $this;
    }
    /**
     * Get RefreshTokenExpiry2 value
     * @return string|null
     */
    public function getRefreshTokenExpiry2()
    {
        return $this->RefreshTokenExpiry2;
    }
    /**
     * Set RefreshTokenExpiry2 value
     * @param string $refreshTokenExpiry2
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setRefreshTokenExpiry2($refreshTokenExpiry2 = null)
    {
        // validation for constraint: string
        if (!is_null($refreshTokenExpiry2) && !is_string($refreshTokenExpiry2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refreshTokenExpiry2)), __LINE__);
        }
        $this->RefreshTokenExpiry2 = $refreshTokenExpiry2;
        return $this;
    }
    /**
     * Get SessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->SessionHandle;
    }
    /**
     * Set SessionHandle value
     * @param string $sessionHandle
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setSessionHandle($sessionHandle = null)
    {
        // validation for constraint: string
        if (!is_null($sessionHandle) && !is_string($sessionHandle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionHandle)), __LINE__);
        }
        $this->SessionHandle = $sessionHandle;
        return $this;
    }
    /**
     * Get RejectedOffers value
     * @return int|null
     */
    public function getRejectedOffers()
    {
        return $this->RejectedOffers;
    }
    /**
     * Set RejectedOffers value
     * @param int $rejectedOffers
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setRejectedOffers($rejectedOffers = null)
    {
        // validation for constraint: int
        if (!is_null($rejectedOffers) && !is_numeric($rejectedOffers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rejectedOffers)), __LINE__);
        }
        $this->RejectedOffers = $rejectedOffers;
        return $this;
    }
    /**
     * Get SyncEnabled value
     * @return bool|null
     */
    public function getSyncEnabled()
    {
        return $this->SyncEnabled;
    }
    /**
     * Set SyncEnabled value
     * @param bool $syncEnabled
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setSyncEnabled($syncEnabled = null)
    {
        $this->SyncEnabled = $syncEnabled;
        return $this;
    }
    /**
     * Get TokenRefreshLastAttempted value
     * @return string|null
     */
    public function getTokenRefreshLastAttempted()
    {
        return $this->TokenRefreshLastAttempted;
    }
    /**
     * Set TokenRefreshLastAttempted value
     * @param string $tokenRefreshLastAttempted
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setTokenRefreshLastAttempted($tokenRefreshLastAttempted = null)
    {
        // validation for constraint: string
        if (!is_null($tokenRefreshLastAttempted) && !is_string($tokenRefreshLastAttempted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenRefreshLastAttempted)), __LINE__);
        }
        $this->TokenRefreshLastAttempted = $tokenRefreshLastAttempted;
        return $this;
    }
    /**
     * Get TokenRefreshLastCompleted value
     * @return string|null
     */
    public function getTokenRefreshLastCompleted()
    {
        return $this->TokenRefreshLastCompleted;
    }
    /**
     * Set TokenRefreshLastCompleted value
     * @param string $tokenRefreshLastCompleted
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setTokenRefreshLastCompleted($tokenRefreshLastCompleted = null)
    {
        // validation for constraint: string
        if (!is_null($tokenRefreshLastCompleted) && !is_string($tokenRefreshLastCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenRefreshLastCompleted)), __LINE__);
        }
        $this->TokenRefreshLastCompleted = $tokenRefreshLastCompleted;
        return $this;
    }
    /**
     * Get PsaState value
     * @return string|null
     */
    public function getPsaState()
    {
        return $this->PsaState;
    }
    /**
     * Set PsaState value
     * @param string $psaState
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setPsaState($psaState = null)
    {
        // validation for constraint: string
        if (!is_null($psaState) && !is_string($psaState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($psaState)), __LINE__);
        }
        $this->PsaState = $psaState;
        return $this;
    }
    /**
     * Get SourceEntryID value
     * @return base64Binary|null
     */
    public function getSourceEntryID()
    {
        return $this->SourceEntryID;
    }
    /**
     * Set SourceEntryID value
     * @param base64Binary $sourceEntryID
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setSourceEntryID(base64Binary $sourceEntryID = null)
    {
        $this->SourceEntryID = $sourceEntryID;
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
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get LastSync value
     * @return string|null
     */
    public function getLastSync()
    {
        return $this->LastSync;
    }
    /**
     * Set LastSync value
     * @param string $lastSync
     * @return \Ews\StructType\EwsNetworkItemType
     */
    public function setLastSync($lastSync = null)
    {
        // validation for constraint: string
        if (!is_null($lastSync) && !is_string($lastSync)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastSync)), __LINE__);
        }
        $this->LastSync = $lastSync;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNetworkItemType
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
