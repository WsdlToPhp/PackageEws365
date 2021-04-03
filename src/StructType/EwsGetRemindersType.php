<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemindersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetRemindersType extends EwsBaseRequestType
{
    /**
     * The BeginTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BeginTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The MaxItems
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 200
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxItems = null;
    /**
     * The ReminderType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsReminderType|null
     */
    protected ?\StructType\EwsReminderType $ReminderType = null;
    /**
     * Constructor method for GetRemindersType
     * @uses EwsGetRemindersType::setBeginTime()
     * @uses EwsGetRemindersType::setEndTime()
     * @uses EwsGetRemindersType::setMaxItems()
     * @uses EwsGetRemindersType::setReminderType()
     * @param string $beginTime
     * @param string $endTime
     * @param int $maxItems
     * @param \StructType\EwsReminderType $reminderType
     */
    public function __construct(?string $beginTime = null, ?string $endTime = null, ?int $maxItems = null, ?\StructType\EwsReminderType $reminderType = null)
    {
        $this
            ->setBeginTime($beginTime)
            ->setEndTime($endTime)
            ->setMaxItems($maxItems)
            ->setReminderType($reminderType);
    }
    /**
     * Get BeginTime value
     * @return string|null
     */
    public function getBeginTime(): ?string
    {
        return $this->BeginTime;
    }
    /**
     * Set BeginTime value
     * @param string $beginTime
     * @return \StructType\EwsGetRemindersType
     */
    public function setBeginTime(?string $beginTime = null): self
    {
        // validation for constraint: string
        if (!is_null($beginTime) && !is_string($beginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginTime, true), gettype($beginTime)), __LINE__);
        }
        $this->BeginTime = $beginTime;
        
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
     * @return \StructType\EwsGetRemindersType
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
     * Get MaxItems value
     * @return int|null
     */
    public function getMaxItems(): ?int
    {
        return $this->MaxItems;
    }
    /**
     * Set MaxItems value
     * @param int $maxItems
     * @return \StructType\EwsGetRemindersType
     */
    public function setMaxItems(?int $maxItems = null): self
    {
        // validation for constraint: int
        if (!is_null($maxItems) && !(is_int($maxItems) || ctype_digit($maxItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItems, true), gettype($maxItems)), __LINE__);
        }
        // validation for constraint: maxInclusive(200)
        if (!is_null($maxItems) && $maxItems > 200) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 200', var_export($maxItems, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maxItems) && $maxItems < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maxItems, true)), __LINE__);
        }
        $this->MaxItems = $maxItems;
        
        return $this;
    }
    /**
     * Get ReminderType value
     * @return \StructType\EwsReminderType|null
     */
    public function getReminderType(): ?\StructType\EwsReminderType
    {
        return $this->ReminderType;
    }
    /**
     * Set ReminderType value
     * @param \StructType\EwsReminderType $reminderType
     * @return \StructType\EwsGetRemindersType
     */
    public function setReminderType(?\StructType\EwsReminderType $reminderType = null): self
    {
        $this->ReminderType = $reminderType;
        
        return $this;
    }
}
