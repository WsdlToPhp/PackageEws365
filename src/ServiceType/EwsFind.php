<?php

namespace Ews\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Find ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFind extends SoapClientBase
{
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
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\EnumType\EwsDateTimePrecisionType $dateTimePrecision
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDateTimePrecision(\Ews\EnumType\EwsDateTimePrecisionType $dateTimePrecision, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'DateTimePrecision', $dateTimePrecision, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named FindFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, ManagementRole
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types,
     * http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType, \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders : required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindFolderType $request
     * @return \Ews\StructType\EwsFindFolderResponseType|bool
     */
    public function FindFolder(\Ews\StructType\EwsFindFolderType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindFolder($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, DateTimePrecision, ManagementRole
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types,
     * http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType, \Ews\EnumType\EwsDateTimePrecisionType,
     * \Ews\StructType\EwsManagementRoleType
     * - SOAPHeaders : required, required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindItemType $request
     * @return \Ews\StructType\EwsFindItemResponseType|bool
     */
    public function FindItem(\Ews\StructType\EwsFindItemType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindItem($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindMessageTrackingReport
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequestServerVersion
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindMessageTrackingReportRequestType $request
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType|bool
     */
    public function FindMessageTrackingReport(\Ews\StructType\EwsFindMessageTrackingReportRequestType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindMessageTrackingReport($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindConversation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsExchangeImpersonationType
     * - SOAPHeaders : required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindConversationType $request
     * @return \Ews\StructType\EwsFindConversationResponseMessageType|bool
     */
    public function FindConversation(\Ews\StructType\EwsFindConversationType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindConversation($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindPeople
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsExchangeImpersonationType
     * - SOAPHeaders : required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindPeopleType $request
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType|bool
     */
    public function FindPeople(\Ews\StructType\EwsFindPeopleType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindPeople($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindAvailableMeetingTimes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequestServerVersion
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindAvailableMeetingTimesType $request
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesResponseMessageType|bool
     */
    public function FindAvailableMeetingTimes(\Ews\StructType\EwsFindAvailableMeetingTimesType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindAvailableMeetingTimes($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindMeetingTimeCandidates
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequestServerVersion
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsFindMeetingTimeCandidatesType $request
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesResponseMessageType|bool
     */
    public function FindMeetingTimeCandidates(\Ews\StructType\EwsFindMeetingTimeCandidatesType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->FindMeetingTimeCandidates($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return
     * \Ews\StructType\EwsFindAvailableMeetingTimesResponseMessageType|\Ews\StructType\EwsFindConversationResponseMessageType|\Ews\StructType\EwsFindFolderResponseType|\Ews\StructType\EwsFindItemResponseType|\Ews\StructType\EwsFindMeetingTimeCandidatesRespo
     * nseMessageType|\Ews\StructType\EwsFindMessageTrackingReportResponseMessageType|\Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function getResult()
    {
        return parent::getResult();
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
