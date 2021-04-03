<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Create ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreate extends SoapClientBase
{
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsCreate
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
     * @return \ServiceType\EwsCreate
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
     * @return \ServiceType\EwsCreate
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
     * @return \ServiceType\EwsCreate
     */
    public function setSoapHeaderTimeZoneContext(\StructType\EwsTimeZoneContextType $timeZoneContext, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'TimeZoneContext', $timeZoneContext, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named CreateFolderPath
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsCreateFolderPathType $request
     * @return \StructType\EwsCreateFolderPathResponseType|bool
     */
    public function CreateFolderPath(\StructType\EwsCreateFolderPathType $request)
    {
        try {
            $this->setResult($resultCreateFolderPath = $this->getSoapClient()->__soapCall('CreateFolderPath', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateFolderPath;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsCreateFolderType $request
     * @return \StructType\EwsCreateFolderResponseType|bool
     */
    public function CreateFolder(\StructType\EwsCreateFolderType $request)
    {
        try {
            $this->setResult($resultCreateFolder = $this->getSoapClient()->__soapCall('CreateFolder', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsCreateItemType $request
     * @return \StructType\EwsCreateItemResponseType|bool
     */
    public function CreateItem(\StructType\EwsCreateItemType $request)
    {
        try {
            $this->setResult($resultCreateItem = $this->getSoapClient()->__soapCall('CreateItem', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateAttachment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion, TimeZoneContext
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion, \StructType\EwsTimeZoneContextType
     * - SOAPHeaders: required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsCreateAttachmentType $request
     * @return \StructType\EwsCreateAttachmentResponseType|bool
     */
    public function CreateAttachment(\StructType\EwsCreateAttachmentType $request)
    {
        try {
            $this->setResult($resultCreateAttachment = $this->getSoapClient()->__soapCall('CreateAttachment', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAttachment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateManagedFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsCreateManagedFolderRequestType $request
     * @return \StructType\EwsCreateManagedFolderResponseType|bool
     */
    public function CreateManagedFolder(\StructType\EwsCreateManagedFolderRequestType $request)
    {
        try {
            $this->setResult($resultCreateManagedFolder = $this->getSoapClient()->__soapCall('CreateManagedFolder', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateManagedFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateUserConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsCreateUserConfigurationType $request
     * @return \StructType\EwsCreateUserConfigurationResponseType|bool
     */
    public function CreateUserConfiguration(\StructType\EwsCreateUserConfigurationType $request)
    {
        try {
            $this->setResult($resultCreateUserConfiguration = $this->getSoapClient()->__soapCall('CreateUserConfiguration', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateUserConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsCreateAttachmentResponseType|\StructType\EwsCreateFolderPathResponseType|\StructType\EwsCreateFolderResponseType|\StructType\EwsCreateItemResponseType|\StructType\EwsCreateManagedFolderResponseType|\StructType\EwsCreateUserConfigurationResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
