<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingMessageType extends EwsMessageType
{
    /**
     * The AssociatedCalendarItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $AssociatedCalendarItemId;
    /**
     * The IsDelegated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsDelegated;
    /**
     * The IsOutOfDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOutOfDate;
    /**
     * The HasBeenProcessed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasBeenProcessed;
    /**
     * The ResponseType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResponseType;
    /**
     * The UID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UID;
    /**
     * The RecurrenceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $RecurrenceId;
    /**
     * The DateTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DateTimeStamp;
    /**
     * The IsOrganizer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOrganizer;
    /**
     * Constructor method for MeetingMessageType
     * @uses EwsMeetingMessageType::setAssociatedCalendarItemId()
     * @uses EwsMeetingMessageType::setIsDelegated()
     * @uses EwsMeetingMessageType::setIsOutOfDate()
     * @uses EwsMeetingMessageType::setHasBeenProcessed()
     * @uses EwsMeetingMessageType::setResponseType()
     * @uses EwsMeetingMessageType::setUID()
     * @uses EwsMeetingMessageType::setRecurrenceId()
     * @uses EwsMeetingMessageType::setDateTimeStamp()
     * @uses EwsMeetingMessageType::setIsOrganizer()
     * @param \Ews\StructType\EwsItemIdType $associatedCalendarItemId
     * @param boolean $isDelegated
     * @param boolean $isOutOfDate
     * @param boolean $hasBeenProcessed
     * @param string $responseType
     * @param string $uID
     * @param dateTime $recurrenceId
     * @param dateTime $dateTimeStamp
     * @param boolean $isOrganizer
     */
    public function __construct(\Ews\StructType\EwsItemIdType $associatedCalendarItemId = null, $isDelegated = null, $isOutOfDate = null, $hasBeenProcessed = null, $responseType = null, $uID = null, $recurrenceId = null, $dateTimeStamp = null, $isOrganizer = null)
    {
        $this
            ->setAssociatedCalendarItemId($associatedCalendarItemId)
            ->setIsDelegated($isDelegated)
            ->setIsOutOfDate($isOutOfDate)
            ->setHasBeenProcessed($hasBeenProcessed)
            ->setResponseType($responseType)
            ->setUID($uID)
            ->setRecurrenceId($recurrenceId)
            ->setDateTimeStamp($dateTimeStamp)
            ->setIsOrganizer($isOrganizer);
    }
    /**
     * Get AssociatedCalendarItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getAssociatedCalendarItemId()
    {
        return $this->AssociatedCalendarItemId;
    }
    /**
     * Set AssociatedCalendarItemId value
     * @param \Ews\StructType\EwsItemIdType $associatedCalendarItemId
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setAssociatedCalendarItemId(\Ews\StructType\EwsItemIdType $associatedCalendarItemId = null)
    {
        $this->AssociatedCalendarItemId = $associatedCalendarItemId;
        return $this;
    }
    /**
     * Get IsDelegated value
     * @return boolean|null
     */
    public function getIsDelegated()
    {
        return $this->IsDelegated;
    }
    /**
     * Set IsDelegated value
     * @param boolean $isDelegated
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setIsDelegated($isDelegated = null)
    {
        $this->IsDelegated = $isDelegated;
        return $this;
    }
    /**
     * Get IsOutOfDate value
     * @return boolean|null
     */
    public function getIsOutOfDate()
    {
        return $this->IsOutOfDate;
    }
    /**
     * Set IsOutOfDate value
     * @param boolean $isOutOfDate
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setIsOutOfDate($isOutOfDate = null)
    {
        $this->IsOutOfDate = $isOutOfDate;
        return $this;
    }
    /**
     * Get HasBeenProcessed value
     * @return boolean|null
     */
    public function getHasBeenProcessed()
    {
        return $this->HasBeenProcessed;
    }
    /**
     * Set HasBeenProcessed value
     * @param boolean $hasBeenProcessed
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setHasBeenProcessed($hasBeenProcessed = null)
    {
        $this->HasBeenProcessed = $hasBeenProcessed;
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
     * @param string $responseType
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setResponseType($responseType = null)
    {
        if (!\Ews\EnumType\EwsResponseTypeType::valueIsValid($responseType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseType, implode(', ', \Ews\EnumType\EwsResponseTypeType::getValidValues())), __LINE__);
        }
        $this->ResponseType = $responseType;
        return $this;
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setUID($uID = null)
    {
        $this->UID = $uID;
        return $this;
    }
    /**
     * Get RecurrenceId value
     * @return dateTime|null
     */
    public function getRecurrenceId()
    {
        return $this->RecurrenceId;
    }
    /**
     * Set RecurrenceId value
     * @param dateTime $recurrenceId
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setRecurrenceId($recurrenceId = null)
    {
        $this->RecurrenceId = $recurrenceId;
        return $this;
    }
    /**
     * Get DateTimeStamp value
     * @return dateTime|null
     */
    public function getDateTimeStamp()
    {
        return $this->DateTimeStamp;
    }
    /**
     * Set DateTimeStamp value
     * @param dateTime $dateTimeStamp
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setDateTimeStamp($dateTimeStamp = null)
    {
        $this->DateTimeStamp = $dateTimeStamp;
        return $this;
    }
    /**
     * Get IsOrganizer value
     * @return boolean|null
     */
    public function getIsOrganizer()
    {
        return $this->IsOrganizer;
    }
    /**
     * Set IsOrganizer value
     * @param boolean $isOrganizer
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setIsOrganizer($isOrganizer = null)
    {
        $this->IsOrganizer = $isOrganizer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingMessageType
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
