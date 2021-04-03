<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Set ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSet extends SoapClientBase
{
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsSet
     */
    public function setSoapHeaderExchangeImpersonation(\StructType\EwsExchangeImpersonationType $exchangeImpersonation, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ExchangeImpersonation', $exchangeImpersonation, $mustUnderstand, $actor);
    }
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsSet
     */
    public function setSoapHeaderRequestServerVersion(\StructType\EwsRequestServerVersion $requestServerVersion, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Sets the ManagementRole SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsManagementRoleType $managementRole
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsSet
     */
    public function setSoapHeaderManagementRole(\StructType\EwsManagementRoleType $managementRole, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'ManagementRole', $managementRole, $mustUnderstand, $actor);
    }
    /**
     * Sets the MailboxCulture SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \StructType\EwsMailboxCultureType $mailboxCulture
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \ServiceType\EwsSet
     */
    public function setSoapHeaderMailboxCulture(\StructType\EwsMailboxCultureType $mailboxCulture, string $namespace = 'http://schemas.microsoft.com/exchange/services/2006/types', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MailboxCulture', $mailboxCulture, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named SetUserOofSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsSetUserOofSettingsRequest $setUserOofSettingsRequest
     * @return \StructType\EwsSetUserOofSettingsResponse|bool
     */
    public function SetUserOofSettings(\StructType\EwsSetUserOofSettingsRequest $setUserOofSettingsRequest)
    {
        try {
            $this->setResult($resultSetUserOofSettings = $this->getSoapClient()->__soapCall('SetUserOofSettings', [
                $setUserOofSettingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUserOofSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetTeamMailbox
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsSetTeamMailboxRequestType $request
     * @return \StructType\EwsSetTeamMailboxResponseMessageType|bool
     */
    public function SetTeamMailbox(\StructType\EwsSetTeamMailboxRequestType $request)
    {
        try {
            $this->setResult($resultSetTeamMailbox = $this->getSoapClient()->__soapCall('SetTeamMailbox', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSetTeamMailbox;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetHoldOnMailboxes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion, ManagementRole
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion, \StructType\EwsManagementRoleType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsSetHoldOnMailboxesType $request
     * @return \StructType\EwsSetHoldOnMailboxesResponseMessageType|bool
     */
    public function SetHoldOnMailboxes(\StructType\EwsSetHoldOnMailboxesType $request)
    {
        try {
            $this->setResult($resultSetHoldOnMailboxes = $this->getSoapClient()->__soapCall('SetHoldOnMailboxes', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSetHoldOnMailboxes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetImGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsSetImGroupType $request
     * @return \StructType\EwsSetImGroupResponseMessageType|bool
     */
    public function SetImGroup(\StructType\EwsSetImGroupType $request)
    {
        try {
            $this->setResult($resultSetImGroup = $this->getSoapClient()->__soapCall('SetImGroup', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSetImGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetImListMigrationCompleted
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsExchangeImpersonationType, \StructType\EwsMailboxCultureType, \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsSetImListMigrationCompletedType $request
     * @return \StructType\EwsSetImListMigrationCompletedResponseMessageType|bool
     */
    public function SetImListMigrationCompleted(\StructType\EwsSetImListMigrationCompletedType $request)
    {
        try {
            $this->setResult($resultSetImListMigrationCompleted = $this->getSoapClient()->__soapCall('SetImListMigrationCompleted', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSetImListMigrationCompleted;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserPhoto
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \StructType\EwsRequestServerVersion
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \StructType\EwsSetUserPhotoType $request
     * @return \StructType\EwsSetUserPhotoResponseMessageType|bool
     */
    public function SetUserPhoto(\StructType\EwsSetUserPhotoType $request)
    {
        try {
            $this->setResult($resultSetUserPhoto = $this->getSoapClient()->__soapCall('SetUserPhoto', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUserPhoto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \StructType\EwsSetHoldOnMailboxesResponseMessageType|\StructType\EwsSetImGroupResponseMessageType|\StructType\EwsSetImListMigrationCompletedResponseMessageType|\StructType\EwsSetTeamMailboxResponseMessageType|\StructType\EwsSetUserOofSettingsResponse|\StructType\EwsSetUserPhotoResponseMessageType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
