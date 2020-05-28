<?php

namespace Ews\ServiceType;

use \SoapClient\SoapClientBase;

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
     * @param \Ews\StructType\EwsMailboxCultureType $mailboxCulture
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderMailboxCulture(\Ews\StructType\EwsMailboxCultureType $mailboxCulture, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'MailboxCulture', $mailboxCulture, $mustUnderstand, $actor);
    }
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderRequestServerVersion(\Ews\StructType\EwsRequestServerVersion $requestServerVersion, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderExchangeImpersonation(\Ews\StructType\EwsExchangeImpersonationType $exchangeImpersonation, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ExchangeImpersonation', $exchangeImpersonation, $mustUnderstand, $actor);
    }
    /**
     * Sets the TimeZoneContext SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsTimeZoneContextType $timeZoneContext
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderTimeZoneContext(\Ews\StructType\EwsTimeZoneContextType $timeZoneContext, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'TimeZoneContext', $timeZoneContext, $mustUnderstand, $actor);
    }
    /**
     * Sets the ManagementRole SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsManagementRoleType $managementRole
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderManagementRole(\Ews\StructType\EwsManagementRoleType $managementRole, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ManagementRole', $managementRole, $mustUnderstand, $actor);
    }
    /**
     * Sets the DateTimePrecision SoapHeader param
     * @uses \Ews\EnumType\EwsDateTimePrecisionType::valueIsValid()
     * @uses \Ews\EnumType\EwsDateTimePrecisionType::getValidValues()
     * @throws \InvalidArgumentException
     * @uses SoapClientBase::setSoapHeader()
     * @param string $dateTimePrecision
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDateTimePrecision($dateTimePrecision, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDateTimePrecisionType::valueIsValid($dateTimePrecision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDateTimePrecisionType', is_array($dateTimePrecision) ? implode(', ', $dateTimePrecision) : var_export($dateTimePrecision, true), implode(', ', \Ews\EnumType\EwsDateTimePrecisionType::getValidValues())), __LINE__);
        }
        return $this->setSoapHeader($nameSpace, 'DateTimePrecision', $dateTimePrecision, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetServerTimeZones
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetServerTimeZonesType $request
     * @return \Ews\StructType\EwsGetServerTimeZonesResponseType|bool
     */
    public function GetServerTimeZones(\Ews\StructType\EwsGetServerTimeZonesType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetServerTimeZones($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetFolderType $request
     * @return \Ews\StructType\EwsGetFolderResponseType|bool
     */
    public function GetFolder(\Ews\StructType\EwsGetFolderType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFolder($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEvents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetEventsType $request
     * @return \Ews\StructType\EwsGetEventsResponseType|bool
     */
    public function GetEvents(\Ews\StructType\EwsGetEventsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetEvents($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStreamingEvents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetStreamingEventsType $request
     * @return \Ews\StructType\EwsGetStreamingEventsResponseType|bool
     */
    public function GetStreamingEvents(\Ews\StructType\EwsGetStreamingEventsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStreamingEvents($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, DateTimePrecision, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType, \Ews\EnumType\EwsDateTimePrecisionType, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetItemType $request
     * @return \Ews\StructType\EwsGetItemResponseType|bool
     */
    public function GetItem(\Ews\StructType\EwsGetItemType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItem($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAttachment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetAttachmentType $request
     * @return \Ews\StructType\EwsGetAttachmentResponseType|bool
     */
    public function GetAttachment(\Ews\StructType\EwsGetAttachmentType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAttachment($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientAccessToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetClientAccessTokenType $request
     * @return \Ews\StructType\EwsGetClientAccessTokenResponseType|bool
     */
    public function GetClientAccessToken(\Ews\StructType\EwsGetClientAccessTokenType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetClientAccessToken($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDelegate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetDelegateType $request
     * @return \Ews\StructType\EwsGetDelegateResponseMessageType|bool
     */
    public function GetDelegate(\Ews\StructType\EwsGetDelegateType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDelegate($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetUserConfigurationType $request
     * @return \Ews\StructType\EwsGetUserConfigurationResponseType|bool
     */
    public function GetUserConfiguration(\Ews\StructType\EwsGetUserConfigurationType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserConfiguration($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserAvailability
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, TimeZoneContext, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsTimeZoneContextType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetUserAvailabilityRequestType $getUserAvailabilityRequest
     * @return \Ews\StructType\EwsGetUserAvailabilityResponseType|bool
     */
    public function GetUserAvailability(\Ews\StructType\EwsGetUserAvailabilityRequestType $getUserAvailabilityRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserAvailability($getUserAvailabilityRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserOofSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetUserOofSettingsRequest $getUserOofSettingsRequest
     * @return \Ews\StructType\EwsGetUserOofSettingsResponse|bool
     */
    public function GetUserOofSettings(\Ews\StructType\EwsGetUserOofSettingsRequest $getUserOofSettingsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserOofSettings($getUserOofSettingsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetServiceConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, RequestServerVersion, MailboxCulture
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsMailboxCultureType
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetServiceConfigurationType $request
     * @return \Ews\StructType\EwsGetServiceConfigurationResponseMessageType|bool
     */
    public function GetServiceConfiguration(\Ews\StructType\EwsGetServiceConfigurationType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetServiceConfiguration($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMailTips
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, MailboxCulture
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsMailboxCultureType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetMailTipsType $request
     * @return \Ews\StructType\EwsGetMailTipsResponseMessageType|bool
     */
    public function GetMailTips(\Ews\StructType\EwsGetMailTipsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMailTips($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPhoneCallInformation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetPhoneCallInformationType $request
     * @return \Ews\StructType\EwsGetPhoneCallInformationResponseMessageType|bool
     */
    public function GetPhoneCallInformation(\Ews\StructType\EwsGetPhoneCallInformationType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPhoneCallInformation($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSharingMetadata
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetSharingMetadataType $request
     * @return \Ews\StructType\EwsGetSharingMetadataResponseMessageType|bool
     */
    public function GetSharingMetadata(\Ews\StructType\EwsGetSharingMetadataType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSharingMetadata($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSharingFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetSharingFolderType $request
     * @return \Ews\StructType\EwsGetSharingFolderResponseMessageType|bool
     */
    public function GetSharingFolder(\Ews\StructType\EwsGetSharingFolderType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSharingFolder($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRoomLists
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetRoomListsType $getRoomListsRequest
     * @return \Ews\StructType\EwsGetRoomListsResponseMessageType|bool
     */
    public function GetRoomLists(\Ews\StructType\EwsGetRoomListsType $getRoomListsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRoomLists($getRoomListsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRooms
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetRoomsType $getRoomsRequest
     * @return \Ews\StructType\EwsGetRoomsResponseMessageType|bool
     */
    public function GetRooms(\Ews\StructType\EwsGetRoomsType $getRoomsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRooms($getRoomsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessageTrackingReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetMessageTrackingReportRequestType $request
     * @return \Ews\StructType\EwsGetMessageTrackingReportResponseMessageType|bool
     */
    public function GetMessageTrackingReport(\Ews\StructType\EwsGetMessageTrackingReportRequestType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMessageTrackingReport($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConversationItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetConversationItemsType $request
     * @return \Ews\StructType\EwsGetConversationItemsResponseType|bool
     */
    public function GetConversationItems(\Ews\StructType\EwsGetConversationItemsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetConversationItems($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPersona
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetPersonaType $request
     * @return \Ews\StructType\EwsGetPersonaResponseMessageType|bool
     */
    public function GetPersona(\Ews\StructType\EwsGetPersonaType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPersona($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetInboxRules
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetInboxRulesRequestType $request
     * @return \Ews\StructType\EwsGetInboxRulesResponseType|bool
     */
    public function GetInboxRules(\Ews\StructType\EwsGetInboxRulesRequestType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetInboxRules($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPasswordExpirationDate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetPasswordExpirationDateType $request
     * @return \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType|bool
     */
    public function GetPasswordExpirationDate(\Ews\StructType\EwsGetPasswordExpirationDateType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPasswordExpirationDate($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDiscoverySearchConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetDiscoverySearchConfigurationType $request
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType|bool
     */
    public function GetDiscoverySearchConfiguration(\Ews\StructType\EwsGetDiscoverySearchConfigurationType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDiscoverySearchConfiguration($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSearchableMailboxes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetSearchableMailboxesType $request
     * @return \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType|bool
     */
    public function GetSearchableMailboxes(\Ews\StructType\EwsGetSearchableMailboxesType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSearchableMailboxes($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetHoldOnMailboxes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetHoldOnMailboxesType $request
     * @return \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType|bool
     */
    public function GetHoldOnMailboxes(\Ews\StructType\EwsGetHoldOnMailboxesType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetHoldOnMailboxes($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNonIndexableItemStatistics
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetNonIndexableItemStatisticsType $request
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType|bool
     */
    public function GetNonIndexableItemStatistics(\Ews\StructType\EwsGetNonIndexableItemStatisticsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNonIndexableItemStatistics($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNonIndexableItemDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetNonIndexableItemDetailsType $request
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType|bool
     */
    public function GetNonIndexableItemDetails(\Ews\StructType\EwsGetNonIndexableItemDetailsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNonIndexableItemDetails($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAppManifests
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetAppManifestsType $request
     * @return \Ews\StructType\EwsGetAppManifestsResponseType|bool
     */
    public function GetAppManifests(\Ews\StructType\EwsGetAppManifestsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAppManifests($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetImItemList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetImItemListType $request
     * @return \Ews\StructType\EwsGetImItemListResponseMessageType|bool
     */
    public function GetImItemList(\Ews\StructType\EwsGetImItemListType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetImItemList($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetImItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetImItemsType $request
     * @return \Ews\StructType\EwsGetImItemsResponseMessageType|bool
     */
    public function GetImItems(\Ews\StructType\EwsGetImItemsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetImItems($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserRetentionPolicyTags
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetUserRetentionPolicyTagsType $request
     * @return \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType|bool
     */
    public function GetUserRetentionPolicyTags(\Ews\StructType\EwsGetUserRetentionPolicyTagsType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserRetentionPolicyTags($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAppMarketplaceUrl
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetAppMarketplaceUrlType $request
     * @return \Ews\StructType\EwsGetAppMarketplaceUrlResponseMessageType|bool
     */
    public function GetAppMarketplaceUrl(\Ews\StructType\EwsGetAppMarketplaceUrlType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAppMarketplaceUrl($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserPhoto
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsGetUserPhotoType $request
     * @return \Ews\StructType\EwsGetUserPhotoResponseMessageType|bool
     */
    public function GetUserPhoto(\Ews\StructType\EwsGetUserPhotoType $request)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserPhoto($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ews\StructType\EwsGetAppManifestsResponseType|\Ews\StructType\EwsGetAppMarketplaceUrlResponseMessageType|\Ews\StructType\EwsGetAttachmentResponseType|\Ews\StructType\EwsGetClientAccessTokenResponseType|\Ews\StructType\EwsGetConversationItemsResponseType|\Ews\StructType\EwsGetDelegateResponseMessageType|\Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType|\Ews\StructType\EwsGetEventsResponseType|\Ews\StructType\EwsGetFolderResponseType|\Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType|\Ews\StructType\EwsGetImItemListResponseMessageType|\Ews\StructType\EwsGetImItemsResponseMessageType|\Ews\StructType\EwsGetInboxRulesResponseType|\Ews\StructType\EwsGetItemResponseType|\Ews\StructType\EwsGetMailTipsResponseMessageType|\Ews\StructType\EwsGetMessageTrackingReportResponseMessageType|\Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType|\Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType|\Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType|\Ews\StructType\EwsGetPersonaResponseMessageType|\Ews\StructType\EwsGetPhoneCallInformationResponseMessageType|\Ews\StructType\EwsGetRoomListsResponseMessageType|\Ews\StructType\EwsGetRoomsResponseMessageType|\Ews\StructType\EwsGetSearchableMailboxesResponseMessageType|\Ews\StructType\EwsGetServerTimeZonesResponseType|\Ews\StructType\EwsGetServiceConfigurationResponseMessageType|\Ews\StructType\EwsGetSharingFolderResponseMessageType|\Ews\StructType\EwsGetSharingMetadataResponseMessageType|\Ews\StructType\EwsGetStreamingEventsResponseType|\Ews\StructType\EwsGetUserAvailabilityResponseType|\Ews\StructType\EwsGetUserConfigurationResponseType|\Ews\StructType\EwsGetUserOofSettingsResponse|\Ews\StructType\EwsGetUserPhotoResponseMessageType|\Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
