<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Update ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdate extends SoapClientBase
{
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsUpdate
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
     * @return \ServiceType\EwsUpdate
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
     * @return \ServiceType\EwsUpdate
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
     * @return \ServiceType\EwsUpdate
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
     * @return \ServiceType\EwsUpdate
     */
    public function setSoapHeaderManagementRole(\StructType\EwsManagementRoleType $managementRole, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ManagementRole', $managementRole, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named UpdateFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsUpdateFolderType $request
     * @return \StructType\EwsUpdateFolderResponseType|bool
     */
    public function UpdateFolder(\StructType\EwsUpdateFolderType $request)
    {
        try {
            $this->setResult($resultUpdateFolder = $this->getSoapClient()->__soapCall('UpdateFolder', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsUpdateItemType $request
     * @return \StructType\EwsUpdateItemResponseType|bool
     */
    public function UpdateItem(\StructType\EwsUpdateItemType $request)
    {
        try {
            $this->setResult($resultUpdateItem = $this->getSoapClient()->__soapCall('UpdateItem', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateItemInRecoverableItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsUpdateItemInRecoverableItemsType $request
     * @return \StructType\EwsUpdateItemInRecoverableItemsResponseType|bool
     */
    public function UpdateItemInRecoverableItems(\StructType\EwsUpdateItemInRecoverableItemsType $request)
    {
        try {
            $this->setResult($resultUpdateItemInRecoverableItems = $this->getSoapClient()->__soapCall('UpdateItemInRecoverableItems', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateItemInRecoverableItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateDelegate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsUpdateDelegateType $request
     * @return \StructType\EwsUpdateDelegateResponseMessageType|bool
     */
    public function UpdateDelegate(\StructType\EwsUpdateDelegateType $request)
    {
        try {
            $this->setResult($resultUpdateDelegate = $this->getSoapClient()->__soapCall('UpdateDelegate', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateDelegate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateUserConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsUpdateUserConfigurationType $request
     * @return \StructType\EwsUpdateUserConfigurationResponseType|bool
     */
    public function UpdateUserConfiguration(\StructType\EwsUpdateUserConfigurationType $request)
    {
        try {
            $this->setResult($resultUpdateUserConfiguration = $this->getSoapClient()->__soapCall('UpdateUserConfiguration', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateUserConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateInboxRules
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsUpdateInboxRulesRequestType $request
     * @return \StructType\EwsUpdateInboxRulesResponseType|bool
     */
    public function UpdateInboxRules(\StructType\EwsUpdateInboxRulesRequestType $request)
    {
        try {
            $this->setResult($resultUpdateInboxRules = $this->getSoapClient()->__soapCall('UpdateInboxRules', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateInboxRules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsUpdateDelegateResponseMessageType|\StructType\EwsUpdateFolderResponseType|\StructType\EwsUpdateInboxRulesResponseType|\StructType\EwsUpdateItemInRecoverableItemsResponseType|\StructType\EwsUpdateItemResponseType|\StructType\EwsUpdateUserConfigurationResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
