<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderMessageDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderMessageDataType extends AbstractStructBase
{
    /**
     * The ReminderText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderText = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The AssociatedCalendarItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $AssociatedCalendarItemId = null;
    /**
     * Constructor method for ReminderMessageDataType
     * @uses EwsReminderMessageDataType::setReminderText()
     * @uses EwsReminderMessageDataType::setLocation()
     * @uses EwsReminderMessageDataType::setStartTime()
     * @uses EwsReminderMessageDataType::setEndTime()
     * @uses EwsReminderMessageDataType::setAssociatedCalendarItemId()
     * @param string $reminderText
     * @param string $location
     * @param string $startTime
     * @param string $endTime
     * @param \StructType\EwsItemIdType $associatedCalendarItemId
     */
    public function __construct(?string $reminderText = null, ?string $location = null, ?string $startTime = null, ?string $endTime = null, ?\StructType\EwsItemIdType $associatedCalendarItemId = null)
    {
        $this
            ->setReminderText($reminderText)
            ->setLocation($location)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setAssociatedCalendarItemId($associatedCalendarItemId);
    }
    /**
     * Get ReminderText value
     * @return string|null
     */
    public function getReminderText(): ?string
    {
        return $this->ReminderText;
    }
    /**
     * Set ReminderText value
     * @param string $reminderText
     * @return \StructType\EwsReminderMessageDataType
     */
    public function setReminderText(?string $reminderText = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderText) && !is_string($reminderText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderText, true), gettype($reminderText)), __LINE__);
        }
        $this->ReminderText = $reminderText;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\EwsReminderMessageDataType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsReminderMessageDataType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EwsReminderMessageDataType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
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
     * @return \StructType\EwsReminderMessageDataType
     */
    public function setAssociatedCalendarItemId(?\StructType\EwsItemIdType $associatedCalendarItemId = null): self
    {
        $this->AssociatedCalendarItemId = $associatedCalendarItemId;
        
        return $this;
    }
}
