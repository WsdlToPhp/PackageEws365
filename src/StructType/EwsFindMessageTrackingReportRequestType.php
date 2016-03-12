<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMessageTrackingReportRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
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
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Sender;
    /**
     * The PurportedSender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $PurportedSender;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * @var string
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
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
     * @param string $startDateTime
     * @param string $endDateTime
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
        // validation for constraint: minLength
        if ((is_scalar(scope) && strlen(scope) < 1) || (is_array(scope) && count(scope) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scope)), __LINE__);
        }
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
        // validation for constraint: minLength
        if ((is_scalar(domain) && strlen(domain) < 1) || (is_array(domain) && count(domain) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \Ews\StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTime)), __LINE__);
        }
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
        // validation for constraint: minLength
        if ((is_scalar(messageId) && strlen(messageId) < 1) || (is_array(messageId) && count(messageId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageId)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($diagnosticsLevel) && !is_string($diagnosticsLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($diagnosticsLevel)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($serverHint) && !is_string($serverHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverHint)), __LINE__);
        }
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
