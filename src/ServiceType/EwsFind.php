<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Find ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFind extends SoapClientBase
{
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsFind
     */
    public function setSoapHeaderExchangeImpersonation(\StructType\EwsExchangeImpersonationType $exchangeImpersonation, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ExchangeImpersonation', $exchangeImpersonation, $mustUnderstand, $actor);
    }
    /**
     * Sets the MailboxCulture SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsMailboxCultureType $mailboxCulture
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsFind
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
     * @return \ServiceType\EwsFind
     */
    public function setSoapHeaderRequestServerVersion(\StructType\EwsRequestServerVersion $requestServerVersion, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Sets the TimeZoneContext SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsTimeZoneContextType $timeZoneContext
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsFind
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
     * @return \ServiceType\EwsFind
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
     * @return \ServiceType\EwsFind
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
     * Method to call the operation originally named FindFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindFolderType $request
     * @return \StructType\EwsFindFolderResponseType|bool
     */
    public function FindFolder(\StructType\EwsFindFolderType $request)
    {
        try {
            $this->setResult($resultFindFolder = $this->getSoapClient()->__soapCall('FindFolder', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, DateTimePrecision, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType, \EnumType\EwsDateTimePrecisionType, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindItemType $request
     * @return \StructType\EwsFindItemResponseType|bool
     */
    public function FindItem(\StructType\EwsFindItemType $request)
    {
        try {
            $this->setResult($resultFindItem = $this->getSoapClient()->__soapCall('FindItem', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindMessageTrackingReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindMessageTrackingReportRequestType $request
     * @return \StructType\EwsFindMessageTrackingReportResponseMessageType|bool
     */
    public function FindMessageTrackingReport(\StructType\EwsFindMessageTrackingReportRequestType $request)
    {
        try {
            $this->setResult($resultFindMessageTrackingReport = $this->getSoapClient()->__soapCall('FindMessageTrackingReport', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindMessageTrackingReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindConversation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindConversationType $request
     * @return \StructType\EwsFindConversationResponseMessageType|bool
     */
    public function FindConversation(\StructType\EwsFindConversationType $request)
    {
        try {
            $this->setResult($resultFindConversation = $this->getSoapClient()->__soapCall('FindConversation', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindConversation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindPeople
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindPeopleType $request
     * @return \StructType\EwsFindPeopleResponseMessageType|bool
     */
    public function FindPeople(\StructType\EwsFindPeopleType $request)
    {
        try {
            $this->setResult($resultFindPeople = $this->getSoapClient()->__soapCall('FindPeople', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPeople;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindAvailableMeetingTimes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindAvailableMeetingTimesType $request
     * @return \StructType\EwsFindAvailableMeetingTimesResponseMessageType|bool
     */
    public function FindAvailableMeetingTimes(\StructType\EwsFindAvailableMeetingTimesType $request)
    {
        try {
            $this->setResult($resultFindAvailableMeetingTimes = $this->getSoapClient()->__soapCall('FindAvailableMeetingTimes', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindAvailableMeetingTimes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindMeetingTimeCandidates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsFindMeetingTimeCandidatesType $request
     * @return \StructType\EwsFindMeetingTimeCandidatesResponseMessageType|bool
     */
    public function FindMeetingTimeCandidates(\StructType\EwsFindMeetingTimeCandidatesType $request)
    {
        try {
            $this->setResult($resultFindMeetingTimeCandidates = $this->getSoapClient()->__soapCall('FindMeetingTimeCandidates', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFindMeetingTimeCandidates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsFindAvailableMeetingTimesResponseMessageType|\StructType\EwsFindConversationResponseMessageType|\StructType\EwsFindFolderResponseType|\StructType\EwsFindItemResponseType|\StructType\EwsFindMeetingTimeCandidatesResponseMessageType|\StructType\EwsFindMessageTrackingReportResponseMessageType|\StructType\EwsFindPeopleResponseMessageType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
