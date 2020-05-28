<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $BeginTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The MaxItems
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 200
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int
     */
    public $MaxItems;
    /**
     * The ReminderType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsReminderType
     */
    public $ReminderType;
    /**
     * Constructor method for GetRemindersType
     * @uses EwsGetRemindersType::setBeginTime()
     * @uses EwsGetRemindersType::setEndTime()
     * @uses EwsGetRemindersType::setMaxItems()
     * @uses EwsGetRemindersType::setReminderType()
     * @param string $beginTime
     * @param string $endTime
     * @param int $maxItems
     * @param \Ews\StructType\EwsReminderType $reminderType
     */
    public function __construct($beginTime = null, $endTime = null, $maxItems = null, \Ews\StructType\EwsReminderType $reminderType = null)
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
    public function getBeginTime()
    {
        return $this->BeginTime;
    }
    /**
     * Set BeginTime value
     * @param string $beginTime
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setBeginTime($beginTime = null)
    {
        // validation for constraint: string
        if (!is_null($beginTime) && !is_string($beginTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginTime, true), gettype($beginTime)), __LINE__);
        }
        $this->BeginTime = $beginTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get MaxItems value
     * @return int|null
     */
    public function getMaxItems()
    {
        return $this->MaxItems;
    }
    /**
     * Set MaxItems value
     * @param int $maxItems
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setMaxItems($maxItems = null)
    {
        // validation for constraint: int
        if (!is_null($maxItems) && !(is_int($maxItems) || ctype_digit($maxItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItems, true), gettype($maxItems)), __LINE__);
        }
        // validation for constraint: maxInclusive(200)
        if (!is_null($maxItems) && $maxItems > 200) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 200', var_export($maxItems, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maxItems) && $maxItems < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maxItems, true)), __LINE__);
        }
        $this->MaxItems = $maxItems;
        return $this;
    }
    /**
     * Get ReminderType value
     * @return \Ews\StructType\EwsReminderType|null
     */
    public function getReminderType()
    {
        return $this->ReminderType;
    }
    /**
     * Set ReminderType value
     * @param \Ews\StructType\EwsReminderType $reminderType
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setReminderType(\Ews\StructType\EwsReminderType $reminderType = null)
    {
        $this->ReminderType = $reminderType;
        return $this;
    }
}
