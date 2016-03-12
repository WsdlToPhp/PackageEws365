<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttendeeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttendeeType extends AbstractStructBase
{
    /**
     * The Mailbox
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The ResponseType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResponseType;
    /**
     * The LastResponseTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastResponseTime;
    /**
     * The ProposedStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedStart;
    /**
     * The ProposedEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedEnd;
    /**
     * Constructor method for AttendeeType
     * @uses EwsAttendeeType::setMailbox()
     * @uses EwsAttendeeType::setResponseType()
     * @uses EwsAttendeeType::setLastResponseTime()
     * @uses EwsAttendeeType::setProposedStart()
     * @uses EwsAttendeeType::setProposedEnd()
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @param string $responseType
     * @param string $lastResponseTime
     * @param string $proposedStart
     * @param string $proposedEnd
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $mailbox = null, $responseType = null, $lastResponseTime = null, $proposedStart = null, $proposedEnd = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setResponseType($responseType)
            ->setLastResponseTime($lastResponseTime)
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @return \Ews\StructType\EwsAttendeeType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get ResponseType value
     * @return string|null
     */
    public function getResponseType()
    {
        return $this->ResponseType;
    }
    /**
     * Set ResponseType value
     * @uses \Ews\EnumType\EwsResponseTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsResponseTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $responseType
     * @return \Ews\StructType\EwsAttendeeType
     */
    public function setResponseType($responseType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsResponseTypeType::valueIsValid($responseType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseType, implode(', ', \Ews\EnumType\EwsResponseTypeType::getValidValues())), __LINE__);
        }
        $this->ResponseType = $responseType;
        return $this;
    }
    /**
     * Get LastResponseTime value
     * @return string|null
     */
    public function getLastResponseTime()
    {
        return $this->LastResponseTime;
    }
    /**
     * Set LastResponseTime value
     * @param string $lastResponseTime
     * @return \Ews\StructType\EwsAttendeeType
     */
    public function setLastResponseTime($lastResponseTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastResponseTime) && !is_string($lastResponseTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastResponseTime)), __LINE__);
        }
        $this->LastResponseTime = $lastResponseTime;
        return $this;
    }
    /**
     * Get ProposedStart value
     * @return string|null
     */
    public function getProposedStart()
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param string $proposedStart
     * @return \Ews\StructType\EwsAttendeeType
     */
    public function setProposedStart($proposedStart = null)
    {
        // validation for constraint: string
        if (!is_null($proposedStart) && !is_string($proposedStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proposedStart)), __LINE__);
        }
        $this->ProposedStart = $proposedStart;
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return string|null
     */
    public function getProposedEnd()
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param string $proposedEnd
     * @return \Ews\StructType\EwsAttendeeType
     */
    public function setProposedEnd($proposedEnd = null)
    {
        // validation for constraint: string
        if (!is_null($proposedEnd) && !is_string($proposedEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proposedEnd)), __LINE__);
        }
        $this->ProposedEnd = $proposedEnd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAttendeeType
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
