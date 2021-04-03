<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Install ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInstall extends SoapClientBase
{
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsInstall
     */
    public function setSoapHeaderRequestServerVersion(\StructType\EwsRequestServerVersion $requestServerVersion, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named InstallApp
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsInstallAppType $request
     * @return \StructType\EwsInstallAppResponseType|bool
     */
    public function InstallApp(\StructType\EwsInstallAppType $request)
    {
        try {
            $this->setResult($resultInstallApp = $this->getSoapClient()->__soapCall('InstallApp', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultInstallApp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsInstallAppResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
