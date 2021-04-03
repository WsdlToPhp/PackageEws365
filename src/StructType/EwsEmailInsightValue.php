<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailInsightValue extends EwsInsightValue
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The ThreadId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ThreadId = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The LastEmailDateUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LastEmailDateUtcTicks = null;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Body = null;
    /**
     * The LastEmailSender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsProfileInsightValue|null
     */
    protected ?\StructType\EwsProfileInsightValue $LastEmailSender = null;
    /**
     * The EmailsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EmailsCount = null;
    /**
     * Constructor method for EmailInsightValue
     * @uses EwsEmailInsightValue::setId()
     * @uses EwsEmailInsightValue::setThreadId()
     * @uses EwsEmailInsightValue::setSubject()
     * @uses EwsEmailInsightValue::setLastEmailDateUtcTicks()
     * @uses EwsEmailInsightValue::setBody()
     * @uses EwsEmailInsightValue::setLastEmailSender()
     * @uses EwsEmailInsightValue::setEmailsCount()
     * @param string $id
     * @param string $threadId
     * @param string $subject
     * @param int $lastEmailDateUtcTicks
     * @param string $body
     * @param \StructType\EwsProfileInsightValue $lastEmailSender
     * @param int $emailsCount
     */
    public function __construct(?string $id = null, ?string $threadId = null, ?string $subject = null, ?int $lastEmailDateUtcTicks = null, ?string $body = null, ?\StructType\EwsProfileInsightValue $lastEmailSender = null, ?int $emailsCount = null)
    {
        $this
            ->setId($id)
            ->setThreadId($threadId)
            ->setSubject($subject)
            ->setLastEmailDateUtcTicks($lastEmailDateUtcTicks)
            ->setBody($body)
            ->setLastEmailSender($lastEmailSender)
            ->setEmailsCount($emailsCount);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsEmailInsightValue
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ThreadId value
     * @return string|null
     */
    public function getThreadId(): ?string
    {
        return $this->ThreadId;
    }
    /**
     * Set ThreadId value
     * @param string $threadId
     * @return \StructType\EwsEmailInsightValue
     */
    public function setThreadId(?string $threadId = null): self
    {
        // validation for constraint: string
        if (!is_null($threadId) && !is_string($threadId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threadId, true), gettype($threadId)), __LINE__);
        }
        $this->ThreadId = $threadId;
        
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
     * @return \StructType\EwsEmailInsightValue
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
     * Get LastEmailDateUtcTicks value
     * @return int|null
     */
    public function getLastEmailDateUtcTicks(): ?int
    {
        return $this->LastEmailDateUtcTicks;
    }
    /**
     * Set LastEmailDateUtcTicks value
     * @param int $lastEmailDateUtcTicks
     * @return \StructType\EwsEmailInsightValue
     */
    public function setLastEmailDateUtcTicks(?int $lastEmailDateUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($lastEmailDateUtcTicks) && !(is_int($lastEmailDateUtcTicks) || ctype_digit($lastEmailDateUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastEmailDateUtcTicks, true), gettype($lastEmailDateUtcTicks)), __LINE__);
        }
        $this->LastEmailDateUtcTicks = $lastEmailDateUtcTicks;
        
        return $this;
    }
    /**
     * Get Body value
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param string $body
     * @return \StructType\EwsEmailInsightValue
     */
    public function setBody(?string $body = null): self
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->Body = $body;
        
        return $this;
    }
    /**
     * Get LastEmailSender value
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function getLastEmailSender(): ?\StructType\EwsProfileInsightValue
    {
        return $this->LastEmailSender;
    }
    /**
     * Set LastEmailSender value
     * @param \StructType\EwsProfileInsightValue $lastEmailSender
     * @return \StructType\EwsEmailInsightValue
     */
    public function setLastEmailSender(?\StructType\EwsProfileInsightValue $lastEmailSender = null): self
    {
        $this->LastEmailSender = $lastEmailSender;
        
        return $this;
    }
    /**
     * Get EmailsCount value
     * @return int|null
     */
    public function getEmailsCount(): ?int
    {
        return $this->EmailsCount;
    }
    /**
     * Set EmailsCount value
     * @param int $emailsCount
     * @return \StructType\EwsEmailInsightValue
     */
    public function setEmailsCount(?int $emailsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($emailsCount) && !(is_int($emailsCount) || ctype_digit($emailsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailsCount, true), gettype($emailsCount)), __LINE__);
        }
        $this->EmailsCount = $emailsCount;
        
        return $this;
    }
}
