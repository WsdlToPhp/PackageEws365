<?php

namespace Ews\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Update ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdate extends SoapClientBase
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
     * Method to call the operation originally named UpdateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types,
     * http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType
     * - SOAPHeaders : required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsUpdateFolderType $request
     * @return \Ews\StructType\EwsUpdateFolderResponseType|bool
     */
    public function UpdateFolder(\Ews\StructType\EwsUpdateFolderType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateFolder($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types,
     * http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType
     * - SOAPHeaders : required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsUpdateItemType $request
     * @return \Ews\StructType\EwsUpdateItemResponseType|bool
     */
    public function UpdateItem(\Ews\StructType\EwsUpdateItemType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateItem($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateItemInRecoverableItems
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
     * @param \Ews\StructType\EwsUpdateItemInRecoverableItemsType $request
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseType|bool
     */
    public function UpdateItemInRecoverableItems(\Ews\StructType\EwsUpdateItemInRecoverableItemsType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateItemInRecoverableItems($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateDelegate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders : required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsUpdateDelegateType $request
     * @return \Ews\StructType\EwsUpdateDelegateResponseMessageType|bool
     */
    public function UpdateDelegate(\Ews\StructType\EwsUpdateDelegateType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateDelegate($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateUserConfiguration
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders : required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsUpdateUserConfigurationType $request
     * @return \Ews\StructType\EwsUpdateUserConfigurationResponseType|bool
     */
    public function UpdateUserConfiguration(\Ews\StructType\EwsUpdateUserConfigurationType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateUserConfiguration($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateInboxRules
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types,
     * http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion, \Ews\StructType\EwsTimeZoneContextType
     * - SOAPHeaders : required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsUpdateInboxRulesRequestType $request
     * @return \Ews\StructType\EwsUpdateInboxRulesResponseType|bool
     */
    public function UpdateInboxRules(\Ews\StructType\EwsUpdateInboxRulesRequestType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateInboxRules($request));
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
     * \Ews\StructType\EwsUpdateDelegateResponseMessageType|\Ews\StructType\EwsUpdateFolderResponseType|\Ews\StructType\EwsUpdateInboxRulesResponseType|\Ews\StructType\EwsUpdateItemInRecoverableItemsResponseType|\Ews\StructType\EwsUpdateItemResponseType|\Ew
     * s\StructType\EwsUpdateUserConfigurationResponseType
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
