<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Add ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAdd extends SoapClientBase
{
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsAdd
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
     * @return \ServiceType\EwsAdd
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
     * @return \ServiceType\EwsAdd
     */
    public function setSoapHeaderRequestServerVersion(\StructType\EwsRequestServerVersion $requestServerVersion, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named AddDelegate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsAddDelegateType $request
     * @return \StructType\EwsAddDelegateResponseMessageType|bool
     */
    public function AddDelegate(\StructType\EwsAddDelegateType $request)
    {
        try {
            $this->setResult($resultAddDelegate = $this->getSoapClient()->__soapCall('AddDelegate', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAddDelegate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNewImContactToGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsAddNewImContactToGroupType $request
     * @return \StructType\EwsAddNewImContactToGroupResponseMessageType|bool
     */
    public function AddNewImContactToGroup(\StructType\EwsAddNewImContactToGroupType $request)
    {
        try {
            $this->setResult($resultAddNewImContactToGroup = $this->getSoapClient()->__soapCall('AddNewImContactToGroup', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAddNewImContactToGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNewTelUriContactToGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsAddNewTelUriContactToGroupType $request
     * @return \StructType\EwsAddNewTelUriContactToGroupResponseMessageType|bool
     */
    public function AddNewTelUriContactToGroup(\StructType\EwsAddNewTelUriContactToGroupType $request)
    {
        try {
            $this->setResult($resultAddNewTelUriContactToGroup = $this->getSoapClient()->__soapCall('AddNewTelUriContactToGroup', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAddNewTelUriContactToGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddImContactToGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsAddImContactToGroupType $request
     * @return \StructType\EwsAddImContactToGroupResponseMessageType|bool
     */
    public function AddImContactToGroup(\StructType\EwsAddImContactToGroupType $request)
    {
        try {
            $this->setResult($resultAddImContactToGroup = $this->getSoapClient()->__soapCall('AddImContactToGroup', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAddImContactToGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddImGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsAddImGroupType $request
     * @return \StructType\EwsAddImGroupResponseMessageType|bool
     */
    public function AddImGroup(\StructType\EwsAddImGroupType $request)
    {
        try {
            $this->setResult($resultAddImGroup = $this->getSoapClient()->__soapCall('AddImGroup', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAddImGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDistributionGroupToImList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsAddDistributionGroupToImListType $request
     * @return \StructType\EwsAddDistributionGroupToImListResponseMessageType|bool
     */
    public function AddDistributionGroupToImList(\StructType\EwsAddDistributionGroupToImListType $request)
    {
        try {
            $this->setResult($resultAddDistributionGroupToImList = $this->getSoapClient()->__soapCall('AddDistributionGroupToImList', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAddDistributionGroupToImList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsAddDelegateResponseMessageType|\StructType\EwsAddDistributionGroupToImListResponseMessageType|\StructType\EwsAddImContactToGroupResponseMessageType|\StructType\EwsAddImGroupResponseMessageType|\StructType\EwsAddNewImContactToGroupResponseMessageType|\StructType\EwsAddNewTelUriContactToGroupResponseMessageType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
