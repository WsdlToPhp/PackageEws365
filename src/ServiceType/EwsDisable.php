<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Disable ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDisable extends SoapClientBase
{
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsDisable
     */
    public function setSoapHeaderRequestServerVersion(\StructType\EwsRequestServerVersion $requestServerVersion, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named DisableApp
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsDisableAppType $request
     * @return \StructType\EwsDisableAppResponseType|bool
     */
    public function DisableApp(\StructType\EwsDisableAppType $request)
    {
        try {
            $this->setResult($resultDisableApp = $this->getSoapClient()->__soapCall('DisableApp', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultDisableApp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsDisableAppResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
