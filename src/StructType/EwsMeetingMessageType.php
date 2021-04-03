<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $AssociatedCalendarItemId = null;
    /**
     * The IsDelegated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDelegated = null;
    /**
     * The IsOutOfDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOutOfDate = null;
    /**
     * The HasBeenProcessed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasBeenProcessed = null;
    /**
     * The ResponseType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResponseType = null;
    /**
     * The UID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UID = null;
    /**
     * The RecurrenceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecurrenceId = null;
    /**
     * The DateTimeStamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeStamp = null;
    /**
     * The IsOrganizer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOrganizer = null;
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
     * @param \StructType\EwsItemIdType $associatedCalendarItemId
     * @param bool $isDelegated
     * @param bool $isOutOfDate
     * @param bool $hasBeenProcessed
     * @param string $responseType
     * @param string $uID
     * @param string $recurrenceId
     * @param string $dateTimeStamp
     * @param bool $isOrganizer
     */
    public function __construct(?\StructType\EwsItemIdType $associatedCalendarItemId = null, ?bool $isDelegated = null, ?bool $isOutOfDate = null, ?bool $hasBeenProcessed = null, ?string $responseType = null, ?string $uID = null, ?string $recurrenceId = null, ?string $dateTimeStamp = null, ?bool $isOrganizer = null)
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
     * @return \StructType\EwsItemIdType|null
     */
    public function getAssociatedCalendarItemId(): ?\StructType\EwsItemIdType
    {
        return $this->AssociatedCalendarItemId;
    }
    /**
     * Set AssociatedCalendarItemId value
     * @param \StructType\EwsItemIdType $associatedCalendarItemId
     * @return \StructType\EwsMeetingMessageType
     */
    public function setAssociatedCalendarItemId(?\StructType\EwsItemIdType $associatedCalendarItemId = null): self
    {
        $this->AssociatedCalendarItemId = $associatedCalendarItemId;
        
        return $this;
    }
    /**
     * Get IsDelegated value
     * @return bool|null
     */
    public function getIsDelegated(): ?bool
    {
        return $this->IsDelegated;
    }
    /**
     * Set IsDelegated value
     * @param bool $isDelegated
     * @return \StructType\EwsMeetingMessageType
     */
    public function setIsDelegated(?bool $isDelegated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDelegated) && !is_bool($isDelegated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDelegated, true), gettype($isDelegated)), __LINE__);
        }
        $this->IsDelegated = $isDelegated;
        
        return $this;
    }
    /**
     * Get IsOutOfDate value
     * @return bool|null
     */
    public function getIsOutOfDate(): ?bool
    {
        return $this->IsOutOfDate;
    }
    /**
     * Set IsOutOfDate value
     * @param bool $isOutOfDate
     * @return \StructType\EwsMeetingMessageType
     */
    public function setIsOutOfDate(?bool $isOutOfDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOutOfDate) && !is_bool($isOutOfDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOutOfDate, true), gettype($isOutOfDate)), __LINE__);
        }
        $this->IsOutOfDate = $isOutOfDate;
        
        return $this;
    }
    /**
     * Get HasBeenProcessed value
     * @return bool|null
     */
    public function getHasBeenProcessed(): ?bool
    {
        return $this->HasBeenProcessed;
    }
    /**
     * Set HasBeenProcessed value
     * @param bool $hasBeenProcessed
     * @return \StructType\EwsMeetingMessageType
     */
    public function setHasBeenProcessed(?bool $hasBeenProcessed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasBeenProcessed) && !is_bool($hasBeenProcessed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasBeenProcessed, true), gettype($hasBeenProcessed)), __LINE__);
        }
        $this->HasBeenProcessed = $hasBeenProcessed;
        
        return $this;
    }
    /**
     * Get ResponseType value
     * @return string|null
     */
    public function getResponseType(): ?string
    {
        return $this->ResponseType;
    }
    /**
     * Set ResponseType value
     * @uses \EnumType\EwsResponseTypeType::valueIsValid()
     * @uses \EnumType\EwsResponseTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseType
     * @return \StructType\EwsMeetingMessageType
     */
    public function setResponseType(?string $responseType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsResponseTypeType::valueIsValid($responseType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsResponseTypeType', is_array($responseType) ? implode(', ', $responseType) : var_export($responseType, true), implode(', ', \EnumType\EwsResponseTypeType::getValidValues())), __LINE__);
        }
        $this->ResponseType = $responseType;
        
        return $this;
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID(): ?string
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \StructType\EwsMeetingMessageType
     */
    public function setUID(?string $uID = null): self
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uID, true), gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        
        return $this;
    }
    /**
     * Get RecurrenceId value
     * @return string|null
     */
    public function getRecurrenceId(): ?string
    {
        return $this->RecurrenceId;
    }
    /**
     * Set RecurrenceId value
     * @param string $recurrenceId
     * @return \StructType\EwsMeetingMessageType
     */
    public function setRecurrenceId(?string $recurrenceId = null): self
    {
        // validation for constraint: string
        if (!is_null($recurrenceId) && !is_string($recurrenceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurrenceId, true), gettype($recurrenceId)), __LINE__);
        }
        $this->RecurrenceId = $recurrenceId;
        
        return $this;
    }
    /**
     * Get DateTimeStamp value
     * @return string|null
     */
    public function getDateTimeStamp(): ?string
    {
        return $this->DateTimeStamp;
    }
    /**
     * Set DateTimeStamp value
     * @param string $dateTimeStamp
     * @return \StructType\EwsMeetingMessageType
     */
    public function setDateTimeStamp(?string $dateTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeStamp) && !is_string($dateTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeStamp, true), gettype($dateTimeStamp)), __LINE__);
        }
        $this->DateTimeStamp = $dateTimeStamp;
        
        return $this;
    }
    /**
     * Get IsOrganizer value
     * @return bool|null
     */
    public function getIsOrganizer(): ?bool
    {
        return $this->IsOrganizer;
    }
    /**
     * Set IsOrganizer value
     * @param bool $isOrganizer
     * @return \StructType\EwsMeetingMessageType
     */
    public function setIsOrganizer(?bool $isOrganizer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrganizer) && !is_bool($isOrganizer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrganizer, true), gettype($isOrganizer)), __LINE__);
        }
        $this->IsOrganizer = $isOrganizer;
        
        return $this;
    }
}
