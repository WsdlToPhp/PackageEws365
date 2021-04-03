<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $Scope = null;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $Domain = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Sender = null;
    /**
     * The PurportedSender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $PurportedSender = null;
    /**
     * The Recipient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Recipient = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartDateTime = null;
    /**
     * The EndDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndDateTime = null;
    /**
     * The MessageId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageId = null;
    /**
     * The FederatedDeliveryMailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $FederatedDeliveryMailbox = null;
    /**
     * The DiagnosticsLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiagnosticsLevel = null;
    /**
     * The ServerHint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServerHint = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $Properties = null;
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
     * @param \StructType\EwsEmailAddressType $sender
     * @param \StructType\EwsEmailAddressType $purportedSender
     * @param \StructType\EwsEmailAddressType $recipient
     * @param string $subject
     * @param string $startDateTime
     * @param string $endDateTime
     * @param string $messageId
     * @param \StructType\EwsEmailAddressType $federatedDeliveryMailbox
     * @param string $diagnosticsLevel
     * @param string $serverHint
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?string $scope = null, ?string $domain = null, ?\StructType\EwsEmailAddressType $sender = null, ?\StructType\EwsEmailAddressType $purportedSender = null, ?\StructType\EwsEmailAddressType $recipient = null, ?string $subject = null, ?string $startDateTime = null, ?string $endDateTime = null, ?string $messageId = null, ?\StructType\EwsEmailAddressType $federatedDeliveryMailbox = null, ?string $diagnosticsLevel = null, ?string $serverHint = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
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
    public function getScope(): ?string
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($scope) && mb_strlen((string) $scope) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $scope)), __LINE__);
        }
        $this->Scope = $scope;
        
        return $this;
    }
    /**
     * Get Domain value
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param string $domain
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setDomain(?string $domain = null): self
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($domain) && mb_strlen((string) $domain) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $domain)), __LINE__);
        }
        $this->Domain = $domain;
        
        return $this;
    }
    /**
     * Get Sender value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getSender(): ?\StructType\EwsEmailAddressType
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \StructType\EwsEmailAddressType $sender
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setSender(?\StructType\EwsEmailAddressType $sender = null): self
    {
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Get PurportedSender value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getPurportedSender(): ?\StructType\EwsEmailAddressType
    {
        return $this->PurportedSender;
    }
    /**
     * Set PurportedSender value
     * @param \StructType\EwsEmailAddressType $purportedSender
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setPurportedSender(?\StructType\EwsEmailAddressType $purportedSender = null): self
    {
        $this->PurportedSender = $purportedSender;
        
        return $this;
    }
    /**
     * Get Recipient value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getRecipient(): ?\StructType\EwsEmailAddressType
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \StructType\EwsEmailAddressType $recipient
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setRecipient(?\StructType\EwsEmailAddressType $recipient = null): self
    {
        $this->Recipient = $recipient;
        
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setStartDateTime(?string $startDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string|null
     */
    public function getEndDateTime(): ?string
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setEndDateTime(?string $endDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateTime, true), gettype($endDateTime)), __LINE__);
        }
        $this->EndDateTime = $endDateTime;
        
        return $this;
    }
    /**
     * Get MessageId value
     * @return string|null
     */
    public function getMessageId(): ?string
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setMessageId(?string $messageId = null): self
    {
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($messageId) && mb_strlen((string) $messageId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $messageId)), __LINE__);
        }
        $this->MessageId = $messageId;
        
        return $this;
    }
    /**
     * Get FederatedDeliveryMailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getFederatedDeliveryMailbox(): ?\StructType\EwsEmailAddressType
    {
        return $this->FederatedDeliveryMailbox;
    }
    /**
     * Set FederatedDeliveryMailbox value
     * @param \StructType\EwsEmailAddressType $federatedDeliveryMailbox
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setFederatedDeliveryMailbox(?\StructType\EwsEmailAddressType $federatedDeliveryMailbox = null): self
    {
        $this->FederatedDeliveryMailbox = $federatedDeliveryMailbox;
        
        return $this;
    }
    /**
     * Get DiagnosticsLevel value
     * @return string|null
     */
    public function getDiagnosticsLevel(): ?string
    {
        return $this->DiagnosticsLevel;
    }
    /**
     * Set DiagnosticsLevel value
     * @param string $diagnosticsLevel
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setDiagnosticsLevel(?string $diagnosticsLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($diagnosticsLevel) && !is_string($diagnosticsLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diagnosticsLevel, true), gettype($diagnosticsLevel)), __LINE__);
        }
        $this->DiagnosticsLevel = $diagnosticsLevel;
        
        return $this;
    }
    /**
     * Get ServerHint value
     * @return string|null
     */
    public function getServerHint(): ?string
    {
        return $this->ServerHint;
    }
    /**
     * Set ServerHint value
     * @param string $serverHint
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setServerHint(?string $serverHint = null): self
    {
        // validation for constraint: string
        if (!is_null($serverHint) && !is_string($serverHint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverHint, true), gettype($serverHint)), __LINE__);
        }
        $this->ServerHint = $serverHint;
        
        return $this;
    }
    /**
     * Get Properties value
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getProperties(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     * @return \StructType\EwsFindMessageTrackingReportRequestType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
