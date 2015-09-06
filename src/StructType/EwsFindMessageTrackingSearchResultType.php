<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMessageTrackingSearchResultType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMessageTrackingSearchResultType extends AbstractStructBase
{
    /**
     * The Subject
     * @var string
     */
    public $Subject;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
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
     * The Recipients
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $Recipients;
    /**
     * The SubmittedTime
     * @var dateTime
     */
    public $SubmittedTime;
    /**
     * The MessageTrackingReportId
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $MessageTrackingReportId;
    /**
     * The PreviousHopServer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $PreviousHopServer;
    /**
     * The FirstHopServer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $FirstHopServer;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public $Properties;
    /**
     * Constructor method for FindMessageTrackingSearchResultType
     * @uses EwsFindMessageTrackingSearchResultType::setSubject()
     * @uses EwsFindMessageTrackingSearchResultType::setSender()
     * @uses EwsFindMessageTrackingSearchResultType::setPurportedSender()
     * @uses EwsFindMessageTrackingSearchResultType::setRecipients()
     * @uses EwsFindMessageTrackingSearchResultType::setSubmittedTime()
     * @uses EwsFindMessageTrackingSearchResultType::setMessageTrackingReportId()
     * @uses EwsFindMessageTrackingSearchResultType::setPreviousHopServer()
     * @uses EwsFindMessageTrackingSearchResultType::setFirstHopServer()
     * @uses EwsFindMessageTrackingSearchResultType::setProperties()
     * @param string $subject
     * @param \Ews\StructType\EwsEmailAddressType $sender
     * @param \Ews\StructType\EwsEmailAddressType $purportedSender
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $recipients
     * @param dateTime $submittedTime
     * @param string $messageTrackingReportId
     * @param string $previousHopServer
     * @param string $firstHopServer
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct($subject = null, \Ews\StructType\EwsEmailAddressType $sender = null, \Ews\StructType\EwsEmailAddressType $purportedSender = null, \Ews\ArrayType\EwsArrayOfRecipientsType $recipients = null, $submittedTime = null, $messageTrackingReportId = null, $previousHopServer = null, $firstHopServer = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setSubject($subject)
            ->setSender($sender)
            ->setPurportedSender($purportedSender)
            ->setRecipients($recipients)
            ->setSubmittedTime($submittedTime)
            ->setMessageTrackingReportId($messageTrackingReportId)
            ->setPreviousHopServer($previousHopServer)
            ->setFirstHopServer($firstHopServer)
            ->setProperties($properties);
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
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setSubject($subject = null)
    {
        $this->Subject = $subject;
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
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
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
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setPurportedSender(\Ews\StructType\EwsEmailAddressType $purportedSender = null)
    {
        $this->PurportedSender = $purportedSender;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $recipients
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Get SubmittedTime value
     * @return dateTime|null
     */
    public function getSubmittedTime()
    {
        return $this->SubmittedTime;
    }
    /**
     * Set SubmittedTime value
     * @param dateTime $submittedTime
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setSubmittedTime($submittedTime = null)
    {
        $this->SubmittedTime = $submittedTime;
        return $this;
    }
    /**
     * Get MessageTrackingReportId value
     * @return string|null
     */
    public function getMessageTrackingReportId()
    {
        return $this->MessageTrackingReportId;
    }
    /**
     * Set MessageTrackingReportId value
     * @param string $messageTrackingReportId
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setMessageTrackingReportId($messageTrackingReportId = null)
    {
        $this->MessageTrackingReportId = $messageTrackingReportId;
        return $this;
    }
    /**
     * Get PreviousHopServer value
     * @return string|null
     */
    public function getPreviousHopServer()
    {
        return $this->PreviousHopServer;
    }
    /**
     * Set PreviousHopServer value
     * @param string $previousHopServer
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setPreviousHopServer($previousHopServer = null)
    {
        $this->PreviousHopServer = $previousHopServer;
        return $this;
    }
    /**
     * Get FirstHopServer value
     * @return string|null
     */
    public function getFirstHopServer()
    {
        return $this->FirstHopServer;
    }
    /**
     * Set FirstHopServer value
     * @param string $firstHopServer
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setFirstHopServer($firstHopServer = null)
    {
        $this->FirstHopServer = $firstHopServer;
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
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
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
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType
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
