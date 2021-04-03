<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Apply ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsApply extends SoapClientBase
{
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsApply
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
     * @return \ServiceType\EwsApply
     */
    public function setSoapHeaderExchangeImpersonation(\StructType\EwsExchangeImpersonationType $exchangeImpersonation, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ExchangeImpersonation', $exchangeImpersonation, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named ApplyConversationAction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsApplyConversationActionType $request
     * @return \StructType\EwsApplyConversationActionResponseType|bool
     */
    public function ApplyConversationAction(\StructType\EwsApplyConversationActionType $request)
    {
        try {
            $this->setResult($resultApplyConversationAction = $this->getSoapClient()->__soapCall('ApplyConversationAction', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultApplyConversationAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsApplyConversationActionResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
