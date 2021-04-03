<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageTrackingReportType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMessageTrackingReportType extends AbstractStructBase
{
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
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The SubmitTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SubmitTime = null;
    /**
     * The OriginalRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $OriginalRecipients = null;
    /**
     * The RecipientTrackingEvents
     * @var \ArrayType\EwsArrayOfRecipientTrackingEventType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientTrackingEventType $RecipientTrackingEvents = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $Properties = null;
    /**
     * Constructor method for MessageTrackingReportType
     * @uses EwsMessageTrackingReportType::setSender()
     * @uses EwsMessageTrackingReportType::setPurportedSender()
     * @uses EwsMessageTrackingReportType::setSubject()
     * @uses EwsMessageTrackingReportType::setSubmitTime()
     * @uses EwsMessageTrackingReportType::setOriginalRecipients()
     * @uses EwsMessageTrackingReportType::setRecipientTrackingEvents()
     * @uses EwsMessageTrackingReportType::setProperties()
     * @param \StructType\EwsEmailAddressType $sender
     * @param \StructType\EwsEmailAddressType $purportedSender
     * @param string $subject
     * @param string $submitTime
     * @param \ArrayType\EwsArrayOfEmailAddressesType $originalRecipients
     * @param \ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?\StructType\EwsEmailAddressType $sender = null, ?\StructType\EwsEmailAddressType $purportedSender = null, ?string $subject = null, ?string $submitTime = null, ?\ArrayType\EwsArrayOfEmailAddressesType $originalRecipients = null, ?\ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setSender($sender)
            ->setPurportedSender($purportedSender)
            ->setSubject($subject)
            ->setSubmitTime($submitTime)
            ->setOriginalRecipients($originalRecipients)
            ->setRecipientTrackingEvents($recipientTrackingEvents)
            ->setProperties($properties);
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
     * @return \StructType\EwsMessageTrackingReportType
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
     * @return \StructType\EwsMessageTrackingReportType
     */
    public function setPurportedSender(?\StructType\EwsEmailAddressType $purportedSender = null): self
    {
        $this->PurportedSender = $purportedSender;
        
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
     * @return \StructType\EwsMessageTrackingReportType
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
     * Get SubmitTime value
     * @return string|null
     */
    public function getSubmitTime(): ?string
    {
        return $this->SubmitTime;
    }
    /**
     * Set SubmitTime value
     * @param string $submitTime
     * @return \StructType\EwsMessageTrackingReportType
     */
    public function setSubmitTime(?string $submitTime = null): self
    {
        // validation for constraint: string
        if (!is_null($submitTime) && !is_string($submitTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submitTime, true), gettype($submitTime)), __LINE__);
        }
        $this->SubmitTime = $submitTime;
        
        return $this;
    }
    /**
     * Get OriginalRecipients value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getOriginalRecipients(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->OriginalRecipients;
    }
    /**
     * Set OriginalRecipients value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $originalRecipients
     * @return \StructType\EwsMessageTrackingReportType
     */
    public function setOriginalRecipients(?\ArrayType\EwsArrayOfEmailAddressesType $originalRecipients = null): self
    {
        $this->OriginalRecipients = $originalRecipients;
        
        return $this;
    }
    /**
     * Get RecipientTrackingEvents value
     * @return \ArrayType\EwsArrayOfRecipientTrackingEventType|null
     */
    public function getRecipientTrackingEvents(): ?\ArrayType\EwsArrayOfRecipientTrackingEventType
    {
        return $this->RecipientTrackingEvents;
    }
    /**
     * Set RecipientTrackingEvents value
     * @param \ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents
     * @return \StructType\EwsMessageTrackingReportType
     */
    public function setRecipientTrackingEvents(?\ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents = null): self
    {
        $this->RecipientTrackingEvents = $recipientTrackingEvents;
        
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
     * @return \StructType\EwsMessageTrackingReportType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
