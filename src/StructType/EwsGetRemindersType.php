<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemindersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetRemindersType extends EwsBaseRequestType
{
    /**
     * The BeginTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $BeginTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $EndTime;
    /**
     * The MaxItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxItems;
    /**
     * The ReminderType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReminderType;
    /**
     * Constructor method for GetRemindersType
     * @uses EwsGetRemindersType::setBeginTime()
     * @uses EwsGetRemindersType::setEndTime()
     * @uses EwsGetRemindersType::setMaxItems()
     * @uses EwsGetRemindersType::setReminderType()
     * @param dateTime $beginTime
     * @param dateTime $endTime
     * @param int $maxItems
     * @param string $reminderType
     */
    public function __construct($beginTime = null, $endTime = null, $maxItems = null, $reminderType = null)
    {
        $this
            ->setBeginTime($beginTime)
            ->setEndTime($endTime)
            ->setMaxItems($maxItems)
            ->setReminderType($reminderType);
    }
    /**
     * Get BeginTime value
     * @return dateTime|null
     */
    public function getBeginTime()
    {
        return $this->BeginTime;
    }
    /**
     * Set BeginTime value
     * @param dateTime $beginTime
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setBeginTime($beginTime = null)
    {
        $this->BeginTime = $beginTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return dateTime|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param dateTime $endTime
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setEndTime($endTime = null)
    {
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
        $this->MaxItems = $maxItems;
        return $this;
    }
    /**
     * Get ReminderType value
     * @return string|null
     */
    public function getReminderType()
    {
        return $this->ReminderType;
    }
    /**
     * Set ReminderType value
     * @uses \Ews\EnumType\EwsReminderType::valueIsValid()
     * @uses \Ews\EnumType\EwsReminderType::getValidValues()
     * @param string $reminderType
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setReminderType($reminderType = null)
    {
        if (!\Ews\EnumType\EwsReminderType::valueIsValid($reminderType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reminderType, implode(', ', \Ews\EnumType\EwsReminderType::getValidValues())), __LINE__);
        }
        $this->ReminderType = $reminderType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetRemindersType
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
