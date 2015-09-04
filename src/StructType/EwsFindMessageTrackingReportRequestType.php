<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMessageTrackingReportRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindMessageTrackingReportRequestType extends EwsBaseRequestType
{
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $Scope;
    /**
     * The Domain
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $Domain;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Sender;
    /**
     * The PurportedSender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $PurportedSender;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Recipient;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The StartDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $EndDateTime;
    /**
     * The MessageId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $MessageId;
    /**
     * The FederatedDeliveryMailbox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $FederatedDeliveryMailbox;
    /**
     * The DiagnosticsLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiagnosticsLevel;
    /**
     * The ServerHint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServerHint;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public $Properties;
    /**
     * Constructor method for FindMessageTrackingReportRequestType
     * @uses EwsFindMessageTrackingReportRequestType::setScope()
     * @uses EwsFindMessageTrackingReportRequestType::setDomain()
     * @uses EwsFindMessageTrackingReportRequestType::setSender()
     * @uses EwsFindMessageTrackingReportRequestType::setPurportedSender()
     * @uses EwsFindMessageTrackingReportRequestType::setRecipient()
     * @uses EwsFindMessageTrackingReportRequestType::setSubject()
     * @uses EwsFindMessageTrackingReportRequestType::setStartDateTime()
     * @uses EwsFindMessageTrackingReportRequestType::setEndDateTime()
     * @uses EwsFindMessageTrackingReportRequestType::setMessageId()
     * @uses EwsFindMessageTrackingReportRequestType::setFederatedDeliveryMailbox()
     * @uses EwsFindMessageTrackingReportRequestType::setDiagnosticsLevel()
     * @uses EwsFindMessageTrackingReportRequestType::setServerHint()
     * @uses EwsFindMessageTrackingReportRequestType::setProperties()
     * @param string $scope
     * @param string $domain
     * @param \Ews\StructType\EwsEmailAddressType $sender
     * @param \Ews\StructType\EwsEmailAddressType $purportedSender
     * @param \Ews\StructType\EwsEmailAddressType $recipient
     * @param string $subject
     * @param dateTime $startDateTime
     * @param dateTime $endDateTime
     * @param string $messageId
     * @param \Ews\StructType\EwsEmailAddressType $federatedDeliveryMailbox
     * @param string $diagnosticsLevel
     * @param string $serverHint
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct($scope = null, $domain = null, \Ews\StructType\EwsEmailAddressType $sender = null, \Ews\StructType\EwsEmailAddressType $purportedSender = null, \Ews\StructType\EwsEmailAddressType $recipient = null, $subject = null, $startDateTime = null, $endDateTime = null, $messageId = null, \Ews\StructType\EwsEmailAddressType $federatedDeliveryMailbox = null, $diagnosticsLevel = null, $serverHint = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setScope($scope)
            ->setDomain($domain)
            ->setSender($sender)
            ->setPurportedSender($purportedSender)
            ->setRecipient($recipient)
            ->setSubject($subject)
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime)
            ->setMessageId($messageId)
            ->setFederatedDeliveryMailbox($federatedDeliveryMailbox)
            ->setDiagnosticsLevel($diagnosticsLevel)
            ->setServerHint($serverHint)
            ->setProperties($properties);
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setScope($scope = null)
    {
        $this->Scope = $scope;
        return $this;
    }
    /**
     * Get Domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param string $domain
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setDomain($domain = null)
    {
        $this->Domain = $domain;
        return $this;
    }
    /**
     * Get Sender value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Ews\StructType\EwsEmailAddressType $sender
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setSender(\Ews\StructType\EwsEmailAddressType $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get PurportedSender value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getPurportedSender()
    {
        return $this->PurportedSender;
    }
    /**
     * Set PurportedSender value
     * @param \Ews\StructType\EwsEmailAddressType $purportedSender
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setPurportedSender(\Ews\StructType\EwsEmailAddressType $purportedSender = null)
    {
        $this->PurportedSender = $purportedSender;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Ews\StructType\EwsEmailAddressType $recipient
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setRecipient(\Ews\StructType\EwsEmailAddressType $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setSubject($subject = null)
    {
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return dateTime|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param dateTime $startDateTime
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setStartDateTime($startDateTime = null)
    {
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return dateTime|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param dateTime $endDateTime
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setEndDateTime($endDateTime = null)
    {
        $this->EndDateTime = $endDateTime;
        return $this;
    }
    /**
     * Get MessageId value
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setMessageId($messageId = null)
    {
        $this->MessageId = $messageId;
        return $this;
    }
    /**
     * Get FederatedDeliveryMailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getFederatedDeliveryMailbox()
    {
        return $this->FederatedDeliveryMailbox;
    }
    /**
     * Set FederatedDeliveryMailbox value
     * @param \Ews\StructType\EwsEmailAddressType $federatedDeliveryMailbox
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setFederatedDeliveryMailbox(\Ews\StructType\EwsEmailAddressType $federatedDeliveryMailbox = null)
    {
        $this->FederatedDeliveryMailbox = $federatedDeliveryMailbox;
        return $this;
    }
    /**
     * Get DiagnosticsLevel value
     * @return string|null
     */
    public function getDiagnosticsLevel()
    {
        return $this->DiagnosticsLevel;
    }
    /**
     * Set DiagnosticsLevel value
     * @param string $diagnosticsLevel
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setDiagnosticsLevel($diagnosticsLevel = null)
    {
        $this->DiagnosticsLevel = $diagnosticsLevel;
        return $this;
    }
    /**
     * Get ServerHint value
     * @return string|null
     */
    public function getServerHint()
    {
        return $this->ServerHint;
    }
    /**
     * Set ServerHint value
     * @param string $serverHint
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setServerHint($serverHint = null)
    {
        $this->ServerHint = $serverHint;
        return $this;
    }
    /**
     * Get Properties value
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setProperties(\Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
