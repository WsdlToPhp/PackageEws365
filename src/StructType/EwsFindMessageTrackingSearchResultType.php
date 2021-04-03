<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Sender
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
     * The Recipients
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $Recipients = null;
    /**
     * The SubmittedTime
     * @var string|null
     */
    protected ?string $SubmittedTime = null;
    /**
     * The MessageTrackingReportId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $MessageTrackingReportId = null;
    /**
     * The PreviousHopServer
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PreviousHopServer = null;
    /**
     * The FirstHopServer
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstHopServer = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $Properties = null;
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
     * @param \StructType\EwsEmailAddressType $sender
     * @param \StructType\EwsEmailAddressType $purportedSender
     * @param \ArrayType\EwsArrayOfRecipientsType $recipients
     * @param string $submittedTime
     * @param string $messageTrackingReportId
     * @param string $previousHopServer
     * @param string $firstHopServer
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?string $subject = null, ?\StructType\EwsEmailAddressType $sender = null, ?\StructType\EwsEmailAddressType $purportedSender = null, ?\ArrayType\EwsArrayOfRecipientsType $recipients = null, ?string $submittedTime = null, ?string $messageTrackingReportId = null, ?string $previousHopServer = null, ?string $firstHopServer = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
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
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsFindMessageTrackingSearchResultType
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
     * @return \StructType\EwsFindMessageTrackingSearchResultType
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
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setPurportedSender(?\StructType\EwsEmailAddressType $purportedSender = null): self
    {
        $this->PurportedSender = $purportedSender;
        
        return $this;
    }
    /**
     * Get Recipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $recipients
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setRecipients(?\ArrayType\EwsArrayOfRecipientsType $recipients = null): self
    {
        $this->Recipients = $recipients;
        
        return $this;
    }
    /**
     * Get SubmittedTime value
     * @return string|null
     */
    public function getSubmittedTime(): ?string
    {
        return $this->SubmittedTime;
    }
    /**
     * Set SubmittedTime value
     * @param string $submittedTime
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setSubmittedTime(?string $submittedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($submittedTime) && !is_string($submittedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submittedTime, true), gettype($submittedTime)), __LINE__);
        }
        $this->SubmittedTime = $submittedTime;
        
        return $this;
    }
    /**
     * Get MessageTrackingReportId value
     * @return string|null
     */
    public function getMessageTrackingReportId(): ?string
    {
        return $this->MessageTrackingReportId;
    }
    /**
     * Set MessageTrackingReportId value
     * @param string $messageTrackingReportId
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setMessageTrackingReportId(?string $messageTrackingReportId = null): self
    {
        // validation for constraint: string
        if (!is_null($messageTrackingReportId) && !is_string($messageTrackingReportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageTrackingReportId, true), gettype($messageTrackingReportId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($messageTrackingReportId) && mb_strlen((string) $messageTrackingReportId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $messageTrackingReportId)), __LINE__);
        }
        $this->MessageTrackingReportId = $messageTrackingReportId;
        
        return $this;
    }
    /**
     * Get PreviousHopServer value
     * @return string|null
     */
    public function getPreviousHopServer(): ?string
    {
        return $this->PreviousHopServer;
    }
    /**
     * Set PreviousHopServer value
     * @param string $previousHopServer
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setPreviousHopServer(?string $previousHopServer = null): self
    {
        // validation for constraint: string
        if (!is_null($previousHopServer) && !is_string($previousHopServer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previousHopServer, true), gettype($previousHopServer)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($previousHopServer) && mb_strlen((string) $previousHopServer) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $previousHopServer)), __LINE__);
        }
        $this->PreviousHopServer = $previousHopServer;
        
        return $this;
    }
    /**
     * Get FirstHopServer value
     * @return string|null
     */
    public function getFirstHopServer(): ?string
    {
        return $this->FirstHopServer;
    }
    /**
     * Set FirstHopServer value
     * @param string $firstHopServer
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setFirstHopServer(?string $firstHopServer = null): self
    {
        // validation for constraint: string
        if (!is_null($firstHopServer) && !is_string($firstHopServer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstHopServer, true), gettype($firstHopServer)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($firstHopServer) && mb_strlen((string) $firstHopServer) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $firstHopServer)), __LINE__);
        }
        $this->FirstHopServer = $firstHopServer;
        
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
     * @return \StructType\EwsFindMessageTrackingSearchResultType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
