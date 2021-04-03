<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Get ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGet extends SoapClientBase
{
    /**
     * Sets the MailboxCulture SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsMailboxCultureType $mailboxCulture
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsGet
     */
    public function setSoapHeaderMailboxCulture(\StructType\EwsMailboxCultureType $mailboxCulture, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MailboxCulture', $mailboxCulture, $mustUnderstand, $actor);
    }
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsGet
     */
    public function setSoapHeaderRequestServerVersion(\StructType\EwsRequestServerVersion $requestServerVersion, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsGet
     */
    public function setSoapHeaderExchangeImpersonation(\StructType\EwsExchangeImpersonationType $exchangeImpersonation, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ExchangeImpersonation', $exchangeImpersonation, $mustUnderstand, $actor);
    }
    /**
     * Sets the TimeZoneContext SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsTimeZoneContextType $timeZoneContext
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsGet
     */
    public function setSoapHeaderTimeZoneContext(\StructType\EwsTimeZoneContextType $timeZoneContext, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'TimeZoneContext', $timeZoneContext, $mustUnderstand, $actor);
    }
    /**
     * Sets the ManagementRole SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsManagementRoleType $managementRole
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsGet
     */
    public function setSoapHeaderManagementRole(\StructType\EwsManagementRoleType $managementRole, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ManagementRole', $managementRole, $mustUnderstand, $actor);
    }
    /**
     * Sets the DateTimePrecision SoapHeader param
     * @uses \EnumType\EwsDateTimePrecisionType::valueIsValid()
     * @uses \EnumType\EwsDateTimePrecisionType::getValidValues()
     * @throws InvalidArgumentException
     * @uses SoapClientBase::setSoapHeader()
     * @param string $dateTimePrecision
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsGet
     */
    public function setSoapHeaderDateTimePrecision(string $dateTimePrecision, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDateTimePrecisionType::valueIsValid($dateTimePrecision)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDateTimePrecisionType', is_array($dateTimePrecision) ? implode(', ', $dateTimePrecision) : var_export($dateTimePrecision, true), implode(', ', \EnumType\EwsDateTimePrecisionType::getValidValues())), __LINE__);
        }
        return $this->setSoapHeader($namespace, 'DateTimePrecision', $dateTimePrecision, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetServerTimeZones
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetServerTimeZonesType $request
     * @return \StructType\EwsGetServerTimeZonesResponseType|bool
     */
    public function GetServerTimeZones(\StructType\EwsGetServerTimeZonesType $request)
    {
        try {
            $this->setResult($resultGetServerTimeZones = $this->getSoapClient()->__soapCall('GetServerTimeZones', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetServerTimeZones;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetFolderType $request
     * @return \StructType\EwsGetFolderResponseType|bool
     */
    public function GetFolder(\StructType\EwsGetFolderType $request)
    {
        try {
            $this->setResult($resultGetFolder = $this->getSoapClient()->__soapCall('GetFolder', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEvents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetEventsType $request
     * @return \StructType\EwsGetEventsResponseType|bool
     */
    public function GetEvents(\StructType\EwsGetEventsType $request)
    {
        try {
            $this->setResult($resultGetEvents = $this->getSoapClient()->__soapCall('GetEvents', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEvents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStreamingEvents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetStreamingEventsType $request
     * @return \StructType\EwsGetStreamingEventsResponseType|bool
     */
    public function GetStreamingEvents(\StructType\EwsGetStreamingEventsType $request)
    {
        try {
            $this->setResult($resultGetStreamingEvents = $this->getSoapClient()->__soapCall('GetStreamingEvents', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStreamingEvents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, DateTimePrecision, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType, \EnumType\EwsDateTimePrecisionType, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetItemType $request
     * @return \StructType\EwsGetItemResponseType|bool
     */
    public function GetItem(\StructType\EwsGetItemType $request)
    {
        try {
            $this->setResult($resultGetItem = $this->getSoapClient()->__soapCall('GetItem', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAttachment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetAttachmentType $request
     * @return \StructType\EwsGetAttachmentResponseType|bool
     */
    public function GetAttachment(\StructType\EwsGetAttachmentType $request)
    {
        try {
            $this->setResult($resultGetAttachment = $this->getSoapClient()->__soapCall('GetAttachment', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAttachment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientAccessToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetClientAccessTokenType $request
     * @return \StructType\EwsGetClientAccessTokenResponseType|bool
     */
    public function GetClientAccessToken(\StructType\EwsGetClientAccessTokenType $request)
    {
        try {
            $this->setResult($resultGetClientAccessToken = $this->getSoapClient()->__soapCall('GetClientAccessToken', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetClientAccessToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDelegate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetDelegateType $request
     * @return \StructType\EwsGetDelegateResponseMessageType|bool
     */
    public function GetDelegate(\StructType\EwsGetDelegateType $request)
    {
        try {
            $this->setResult($resultGetDelegate = $this->getSoapClient()->__soapCall('GetDelegate', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDelegate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetUserConfigurationType $request
     * @return \StructType\EwsGetUserConfigurationResponseType|bool
     */
    public function GetUserConfiguration(\StructType\EwsGetUserConfigurationType $request)
    {
        try {
            $this->setResult($resultGetUserConfiguration = $this->getSoapClient()->__soapCall('GetUserConfiguration', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserAvailability
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, TimeZoneContext, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsTimeZoneContextType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetUserAvailabilityRequestType $getUserAvailabilityRequest
     * @return \StructType\EwsGetUserAvailabilityResponseType|bool
     */
    public function GetUserAvailability(\StructType\EwsGetUserAvailabilityRequestType $getUserAvailabilityRequest)
    {
        try {
            $this->setResult($resultGetUserAvailability = $this->getSoapClient()->__soapCall('GetUserAvailability', [
                $getUserAvailabilityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserOofSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetUserOofSettingsRequest $getUserOofSettingsRequest
     * @return \StructType\EwsGetUserOofSettingsResponse|bool
     */
    public function GetUserOofSettings(\StructType\EwsGetUserOofSettingsRequest $getUserOofSettingsRequest)
    {
        try {
            $this->setResult($resultGetUserOofSettings = $this->getSoapClient()->__soapCall('GetUserOofSettings', [
                $getUserOofSettingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserOofSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetServiceConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, RequestServerVersion, MailboxCulture
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsRequestServerVersion, \StructType\EwsMailboxCultureType
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetServiceConfigurationType $request
     * @return \StructType\EwsGetServiceConfigurationResponseMessageType|bool
     */
    public function GetServiceConfiguration(\StructType\EwsGetServiceConfigurationType $request)
    {
        try {
            $this->setResult($resultGetServiceConfiguration = $this->getSoapClient()->__soapCall('GetServiceConfiguration', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetServiceConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMailTips
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, MailboxCulture
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsMailboxCultureType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetMailTipsType $request
     * @return \StructType\EwsGetMailTipsResponseMessageType|bool
     */
    public function GetMailTips(\StructType\EwsGetMailTipsType $request)
    {
        try {
            $this->setResult($resultGetMailTips = $this->getSoapClient()->__soapCall('GetMailTips', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMailTips;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPhoneCallInformation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetPhoneCallInformationType $request
     * @return \StructType\EwsGetPhoneCallInformationResponseMessageType|bool
     */
    public function GetPhoneCallInformation(\StructType\EwsGetPhoneCallInformationType $request)
    {
        try {
            $this->setResult($resultGetPhoneCallInformation = $this->getSoapClient()->__soapCall('GetPhoneCallInformation', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPhoneCallInformation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSharingMetadata
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetSharingMetadataType $request
     * @return \StructType\EwsGetSharingMetadataResponseMessageType|bool
     */
    public function GetSharingMetadata(\StructType\EwsGetSharingMetadataType $request)
    {
        try {
            $this->setResult($resultGetSharingMetadata = $this->getSoapClient()->__soapCall('GetSharingMetadata', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSharingMetadata;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSharingFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetSharingFolderType $request
     * @return \StructType\EwsGetSharingFolderResponseMessageType|bool
     */
    public function GetSharingFolder(\StructType\EwsGetSharingFolderType $request)
    {
        try {
            $this->setResult($resultGetSharingFolder = $this->getSoapClient()->__soapCall('GetSharingFolder', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSharingFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRoomLists
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetRoomListsType $getRoomListsRequest
     * @return \StructType\EwsGetRoomListsResponseMessageType|bool
     */
    public function GetRoomLists(\StructType\EwsGetRoomListsType $getRoomListsRequest)
    {
        try {
            $this->setResult($resultGetRoomLists = $this->getSoapClient()->__soapCall('GetRoomLists', [
                $getRoomListsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRoomLists;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRooms
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetRoomsType $getRoomsRequest
     * @return \StructType\EwsGetRoomsResponseMessageType|bool
     */
    public function GetRooms(\StructType\EwsGetRoomsType $getRoomsRequest)
    {
        try {
            $this->setResult($resultGetRooms = $this->getSoapClient()->__soapCall('GetRooms', [
                $getRoomsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRooms;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessageTrackingReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetMessageTrackingReportRequestType $request
     * @return \StructType\EwsGetMessageTrackingReportResponseMessageType|bool
     */
    public function GetMessageTrackingReport(\StructType\EwsGetMessageTrackingReportRequestType $request)
    {
        try {
            $this->setResult($resultGetMessageTrackingReport = $this->getSoapClient()->__soapCall('GetMessageTrackingReport', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMessageTrackingReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConversationItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetConversationItemsType $request
     * @return \StructType\EwsGetConversationItemsResponseType|bool
     */
    public function GetConversationItems(\StructType\EwsGetConversationItemsType $request)
    {
        try {
            $this->setResult($resultGetConversationItems = $this->getSoapClient()->__soapCall('GetConversationItems', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConversationItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPersona
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetPersonaType $request
     * @return \StructType\EwsGetPersonaResponseMessageType|bool
     */
    public function GetPersona(\StructType\EwsGetPersonaType $request)
    {
        try {
            $this->setResult($resultGetPersona = $this->getSoapClient()->__soapCall('GetPersona', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPersona;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetInboxRules
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetInboxRulesRequestType $request
     * @return \StructType\EwsGetInboxRulesResponseType|bool
     */
    public function GetInboxRules(\StructType\EwsGetInboxRulesRequestType $request)
    {
        try {
            $this->setResult($resultGetInboxRules = $this->getSoapClient()->__soapCall('GetInboxRules', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInboxRules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPasswordExpirationDate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetPasswordExpirationDateType $request
     * @return \StructType\EwsGetPasswordExpirationDateResponseMessageType|bool
     */
    public function GetPasswordExpirationDate(\StructType\EwsGetPasswordExpirationDateType $request)
    {
        try {
            $this->setResult($resultGetPasswordExpirationDate = $this->getSoapClient()->__soapCall('GetPasswordExpirationDate', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPasswordExpirationDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDiscoverySearchConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetDiscoverySearchConfigurationType $request
     * @return \StructType\EwsGetDiscoverySearchConfigurationResponseMessageType|bool
     */
    public function GetDiscoverySearchConfiguration(\StructType\EwsGetDiscoverySearchConfigurationType $request)
    {
        try {
            $this->setResult($resultGetDiscoverySearchConfiguration = $this->getSoapClient()->__soapCall('GetDiscoverySearchConfiguration', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDiscoverySearchConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSearchableMailboxes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetSearchableMailboxesType $request
     * @return \StructType\EwsGetSearchableMailboxesResponseMessageType|bool
     */
    public function GetSearchableMailboxes(\StructType\EwsGetSearchableMailboxesType $request)
    {
        try {
            $this->setResult($resultGetSearchableMailboxes = $this->getSoapClient()->__soapCall('GetSearchableMailboxes', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSearchableMailboxes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetHoldOnMailboxes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetHoldOnMailboxesType $request
     * @return \StructType\EwsGetHoldOnMailboxesResponseMessageType|bool
     */
    public function GetHoldOnMailboxes(\StructType\EwsGetHoldOnMailboxesType $request)
    {
        try {
            $this->setResult($resultGetHoldOnMailboxes = $this->getSoapClient()->__soapCall('GetHoldOnMailboxes', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHoldOnMailboxes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNonIndexableItemStatistics
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetNonIndexableItemStatisticsType $request
     * @return \StructType\EwsGetNonIndexableItemStatisticsResponseMessageType|bool
     */
    public function GetNonIndexableItemStatistics(\StructType\EwsGetNonIndexableItemStatisticsType $request)
    {
        try {
            $this->setResult($resultGetNonIndexableItemStatistics = $this->getSoapClient()->__soapCall('GetNonIndexableItemStatistics', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNonIndexableItemStatistics;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNonIndexableItemDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetNonIndexableItemDetailsType $request
     * @return \StructType\EwsGetNonIndexableItemDetailsResponseMessageType|bool
     */
    public function GetNonIndexableItemDetails(\StructType\EwsGetNonIndexableItemDetailsType $request)
    {
        try {
            $this->setResult($resultGetNonIndexableItemDetails = $this->getSoapClient()->__soapCall('GetNonIndexableItemDetails', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNonIndexableItemDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAppManifests
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetAppManifestsType $request
     * @return \StructType\EwsGetAppManifestsResponseType|bool
     */
    public function GetAppManifests(\StructType\EwsGetAppManifestsType $request)
    {
        try {
            $this->setResult($resultGetAppManifests = $this->getSoapClient()->__soapCall('GetAppManifests', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAppManifests;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetImItemList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetImItemListType $request
     * @return \StructType\EwsGetImItemListResponseMessageType|bool
     */
    public function GetImItemList(\StructType\EwsGetImItemListType $request)
    {
        try {
            $this->setResult($resultGetImItemList = $this->getSoapClient()->__soapCall('GetImItemList', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetImItemList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetImItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetImItemsType $request
     * @return \StructType\EwsGetImItemsResponseMessageType|bool
     */
    public function GetImItems(\StructType\EwsGetImItemsType $request)
    {
        try {
            $this->setResult($resultGetImItems = $this->getSoapClient()->__soapCall('GetImItems', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetImItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserRetentionPolicyTags
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetUserRetentionPolicyTagsType $request
     * @return \StructType\EwsGetUserRetentionPolicyTagsResponseMessageType|bool
     */
    public function GetUserRetentionPolicyTags(\StructType\EwsGetUserRetentionPolicyTagsType $request)
    {
        try {
            $this->setResult($resultGetUserRetentionPolicyTags = $this->getSoapClient()->__soapCall('GetUserRetentionPolicyTags', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserRetentionPolicyTags;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAppMarketplaceUrl
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetAppMarketplaceUrlType $request
     * @return \StructType\EwsGetAppMarketplaceUrlResponseMessageType|bool
     */
    public function GetAppMarketplaceUrl(\StructType\EwsGetAppMarketplaceUrlType $request)
    {
        try {
            $this->setResult($resultGetAppMarketplaceUrl = $this->getSoapClient()->__soapCall('GetAppMarketplaceUrl', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAppMarketplaceUrl;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserPhoto
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsGetUserPhotoType $request
     * @return \StructType\EwsGetUserPhotoResponseMessageType|bool
     */
    public function GetUserPhoto(\StructType\EwsGetUserPhotoType $request)
    {
        try {
            $this->setResult($resultGetUserPhoto = $this->getSoapClient()->__soapCall('GetUserPhoto', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserPhoto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsGetAppManifestsResponseType|\StructType\EwsGetAppMarketplaceUrlResponseMessageType|\StructType\EwsGetAttachmentResponseType|\StructType\EwsGetClientAccessTokenResponseType|\StructType\EwsGetConversationItemsResponseType|\StructType\EwsGetDelegateResponseMessageType|\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType|\StructType\EwsGetEventsResponseType|\StructType\EwsGetFolderResponseType|\StructType\EwsGetHoldOnMailboxesResponseMessageType|\StructType\EwsGetImItemListResponseMessageType|\StructType\EwsGetImItemsResponseMessageType|\StructType\EwsGetInboxRulesResponseType|\StructType\EwsGetItemResponseType|\StructType\EwsGetMailTipsResponseMessageType|\StructType\EwsGetMessageTrackingReportResponseMessageType|\StructType\EwsGetNonIndexableItemDetailsResponseMessageType|\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType|\StructType\EwsGetPasswordExpirationDateResponseMessageType|\StructType\EwsGetPersonaResponseMessageType|\StructType\EwsGetPhoneCallInformationResponseMessageType|\StructType\EwsGetRoomListsResponseMessageType|\StructType\EwsGetRoomsResponseMessageType|\StructType\EwsGetSearchableMailboxesResponseMessageType|\StructType\EwsGetServerTimeZonesResponseType|\StructType\EwsGetServiceConfigurationResponseMessageType|\StructType\EwsGetSharingFolderResponseMessageType|\StructType\EwsGetSharingMetadataResponseMessageType|\StructType\EwsGetStreamingEventsResponseType|\StructType\EwsGetUserAvailabilityResponseType|\StructType\EwsGetUserConfigurationResponseType|\StructType\EwsGetUserOofSettingsResponse|\StructType\EwsGetUserPhotoResponseMessageType|\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
