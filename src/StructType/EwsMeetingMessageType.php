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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $AssociatedCalendarItemId;
    /**
     * The IsDelegated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDelegated;
    /**
     * The IsOutOfDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOutOfDate;
    /**
     * The HasBeenProcessed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
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
     * @var string
     */
    public $RecurrenceId;
    /**
     * The DateTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateTimeStamp;
    /**
     * The IsOrganizer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
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
     * @param bool $isDelegated
     * @param bool $isOutOfDate
     * @param bool $hasBeenProcessed
     * @param string $responseType
     * @param string $uID
     * @param string $recurrenceId
     * @param string $dateTimeStamp
     * @param bool $isOrganizer
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
     * @return bool|null
     */
    public function getIsDelegated()
    {
        return $this->IsDelegated;
    }
    /**
     * Set IsDelegated value
     * @param bool $isDelegated
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setIsDelegated($isDelegated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDelegated) && !is_bool($isDelegated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDelegated)), __LINE__);
        }
        $this->IsDelegated = $isDelegated;
        return $this;
    }
    /**
     * Get IsOutOfDate value
     * @return bool|null
     */
    public function getIsOutOfDate()
    {
        return $this->IsOutOfDate;
    }
    /**
     * Set IsOutOfDate value
     * @param bool $isOutOfDate
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setIsOutOfDate($isOutOfDate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOutOfDate) && !is_bool($isOutOfDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOutOfDate)), __LINE__);
        }
        $this->IsOutOfDate = $isOutOfDate;
        return $this;
    }
    /**
     * Get HasBeenProcessed value
     * @return bool|null
     */
    public function getHasBeenProcessed()
    {
        return $this->HasBeenProcessed;
    }
    /**
     * Set HasBeenProcessed value
     * @param bool $hasBeenProcessed
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setHasBeenProcessed($hasBeenProcessed = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasBeenProcessed) && !is_bool($hasBeenProcessed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasBeenProcessed)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $responseType
     * @return \Ews\StructType\EwsMeetingMessageType
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
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        return $this;
    }
    /**
     * Get RecurrenceId value
     * @return string|null
     */
    public function getRecurrenceId()
    {
        return $this->RecurrenceId;
    }
    /**
     * Set RecurrenceId value
     * @param string $recurrenceId
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setRecurrenceId($recurrenceId = null)
    {
        // validation for constraint: string
        if (!is_null($recurrenceId) && !is_string($recurrenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recurrenceId)), __LINE__);
        }
        $this->RecurrenceId = $recurrenceId;
        return $this;
    }
    /**
     * Get DateTimeStamp value
     * @return string|null
     */
    public function getDateTimeStamp()
    {
        return $this->DateTimeStamp;
    }
    /**
     * Set DateTimeStamp value
     * @param string $dateTimeStamp
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setDateTimeStamp($dateTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($dateTimeStamp) && !is_string($dateTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTimeStamp)), __LINE__);
        }
        $this->DateTimeStamp = $dateTimeStamp;
        return $this;
    }
    /**
     * Get IsOrganizer value
     * @return bool|null
     */
    public function getIsOrganizer()
    {
        return $this->IsOrganizer;
    }
    /**
     * Set IsOrganizer value
     * @param bool $isOrganizer
     * @return \Ews\StructType\EwsMeetingMessageType
     */
    public function setIsOrganizer($isOrganizer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOrganizer) && !is_bool($isOrganizer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOrganizer)), __LINE__);
        }
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
