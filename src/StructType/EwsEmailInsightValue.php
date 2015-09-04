<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsEmailInsightValue extends EwsInsightValue
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The ThreadId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ThreadId;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The LastEmailDateUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var long
     */
    public $LastEmailDateUtcTicks;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Body;
    /**
     * The LastEmailSender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsProfileInsightValue
     */
    public $LastEmailSender;
    /**
     * The EmailsCount
     * Meta informations extracted from the WSDL
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
     * @param long $lastEmailDateUtcTicks
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
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get LastEmailDateUtcTicks value
     * @return long|null
     */
    public function getLastEmailDateUtcTicks()
    {
        return $this->LastEmailDateUtcTicks;
    }
    /**
     * Set LastEmailDateUtcTicks value
     * @param long $lastEmailDateUtcTicks
     * @return \Ews\StructType\EwsEmailInsightValue
     */
    public function setLastEmailDateUtcTicks($lastEmailDateUtcTicks = null)
    {
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
        $this->EmailsCount = $emailsCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEmailInsightValue
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
