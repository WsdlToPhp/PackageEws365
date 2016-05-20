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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BeginTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The MaxItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxInclusive: 200
     * - minInclusive: 0
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
     * @param string $beginTime
     * @param string $endTime
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($beginTime)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
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
        if (!is_null($maxItems) && !is_numeric($maxItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxItems)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $reminderType
     * @return \Ews\StructType\EwsGetRemindersType
     */
    public function setReminderType($reminderType = null)
    {
        // validation for constraint: enumeration
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
