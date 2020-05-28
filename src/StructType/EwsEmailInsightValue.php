<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Id;
    /**
     * The ThreadId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ThreadId;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The LastEmailDateUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $LastEmailDateUtcTicks;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Body;
    /**
     * The LastEmailSender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsProfileInsightValue
     */
    public $LastEmailSender;
    /**
     * The EmailsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $EmailsCount;
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
     * @param \Ews\StructType\EwsProfileInsightValue $lastEmailSender
     * @param int $emailsCount
     */
    public function __construct($id = null, $threadId = null, $subject = null, $lastEmailDateUtcTicks = null, $body = null, \Ews\StructType\EwsProfileInsightValue $lastEmailSender = null, $emailsCount = null)
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
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ThreadId value
     * @return string|null
     */
    public function getThreadId()
    {
        return $this->ThreadId;
    }
    /**
     * Set ThreadId value
     * @param string $threadId
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setThreadId($threadId = null)
    {
        // validation for constraint: string
        if (!is_null($threadId) && !is_string($threadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threadId, true), gettype($threadId)), __LINE__);
        }
        $this->ThreadId = $threadId;
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
     * @return \Ews\StructType\EwsEmailInsightValue
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
     * Get LastEmailDateUtcTicks value
     * @return int|null
     */
    public function getLastEmailDateUtcTicks()
    {
        return $this->LastEmailDateUtcTicks;
    }
    /**
     * Set LastEmailDateUtcTicks value
     * @param int $lastEmailDateUtcTicks
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setLastEmailDateUtcTicks($lastEmailDateUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($lastEmailDateUtcTicks) && !(is_int($lastEmailDateUtcTicks) || ctype_digit($lastEmailDateUtcTicks))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastEmailDateUtcTicks, true), gettype($lastEmailDateUtcTicks)), __LINE__);
        }
        $this->LastEmailDateUtcTicks = $lastEmailDateUtcTicks;
        return $this;
    }
    /**
     * Get Body value
     * @return string|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param string $body
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->Body = $body;
        return $this;
    }
    /**
     * Get LastEmailSender value
     * @return \Ews\StructType\EwsProfileInsightValue|null
     */
    public function getLastEmailSender()
    {
        return $this->LastEmailSender;
    }
    /**
     * Set LastEmailSender value
     * @param \Ews\StructType\EwsProfileInsightValue $lastEmailSender
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setLastEmailSender(\Ews\StructType\EwsProfileInsightValue $lastEmailSender = null)
    {
        $this->LastEmailSender = $lastEmailSender;
        return $this;
    }
    /**
     * Get EmailsCount value
     * @return int|null
     */
    public function getEmailsCount()
    {
        return $this->EmailsCount;
    }
    /**
     * Set EmailsCount value
     * @param int $emailsCount
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setEmailsCount($emailsCount = null)
    {
        // validation for constraint: int
        if (!is_null($emailsCount) && !(is_int($emailsCount) || ctype_digit($emailsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailsCount, true), gettype($emailsCount)), __LINE__);
        }
        $this->EmailsCount = $emailsCount;
        return $this;
    }
}
