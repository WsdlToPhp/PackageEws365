<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Sender;
    /**
     * The PurportedSender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $PurportedSender;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The SubmitTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SubmitTime;
    /**
     * The OriginalRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $OriginalRecipients;
    /**
     * The RecipientTrackingEvents
     * @var \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType
     */
    public $RecipientTrackingEvents;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public $Properties;
    /**
     * Constructor method for MessageTrackingReportType
     * @uses EwsMessageTrackingReportType::setSender()
     * @uses EwsMessageTrackingReportType::setPurportedSender()
     * @uses EwsMessageTrackingReportType::setSubject()
     * @uses EwsMessageTrackingReportType::setSubmitTime()
     * @uses EwsMessageTrackingReportType::setOriginalRecipients()
     * @uses EwsMessageTrackingReportType::setRecipientTrackingEvents()
     * @uses EwsMessageTrackingReportType::setProperties()
     * @param \Ews\StructType\EwsEmailAddressType $sender
     * @param \Ews\StructType\EwsEmailAddressType $purportedSender
     * @param string $subject
     * @param string $submitTime
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $originalRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $sender = null, \Ews\StructType\EwsEmailAddressType $purportedSender = null, $subject = null, $submitTime = null, \Ews\ArrayType\EwsArrayOfEmailAddressesType $originalRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
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
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Ews\StructType\EwsEmailAddressType $sender
     * @return \Ews\StructType\EwsMessageTrackingReportType
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
     * @return \Ews\StructType\EwsMessageTrackingReportType
     */
    public function setPurportedSender(\Ews\StructType\EwsEmailAddressType $purportedSender = null)
    {
        $this->PurportedSender = $purportedSender;
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
     * @return \Ews\StructType\EwsMessageTrackingReportType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get SubmitTime value
     * @return string|null
     */
    public function getSubmitTime()
    {
        return $this->SubmitTime;
    }
    /**
     * Set SubmitTime value
     * @param string $submitTime
     * @return \Ews\StructType\EwsMessageTrackingReportType
     */
    public function setSubmitTime($submitTime = null)
    {
        // validation for constraint: string
        if (!is_null($submitTime) && !is_string($submitTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submitTime, true), gettype($submitTime)), __LINE__);
        }
        $this->SubmitTime = $submitTime;
        return $this;
    }
    /**
     * Get OriginalRecipients value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getOriginalRecipients()
    {
        return $this->OriginalRecipients;
    }
    /**
     * Set OriginalRecipients value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $originalRecipients
     * @return \Ews\StructType\EwsMessageTrackingReportType
     */
    public function setOriginalRecipients(\Ews\ArrayType\EwsArrayOfEmailAddressesType $originalRecipients = null)
    {
        $this->OriginalRecipients = $originalRecipients;
        return $this;
    }
    /**
     * Get RecipientTrackingEvents value
     * @return \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType|null
     */
    public function getRecipientTrackingEvents()
    {
        return $this->RecipientTrackingEvents;
    }
    /**
     * Set RecipientTrackingEvents value
     * @param \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents
     * @return \Ews\StructType\EwsMessageTrackingReportType
     */
    public function setRecipientTrackingEvents(\Ews\ArrayType\EwsArrayOfRecipientTrackingEventType $recipientTrackingEvents = null)
    {
        $this->RecipientTrackingEvents = $recipientTrackingEvents;
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
     * @return \Ews\StructType\EwsMessageTrackingReportType
     */
    public function setProperties(\Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
}
