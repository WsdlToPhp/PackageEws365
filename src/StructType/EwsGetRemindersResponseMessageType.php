<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemindersResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetRemindersResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Reminders
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public $Reminders;
    /**
     * Constructor method for GetRemindersResponseMessageType
     * @uses EwsGetRemindersResponseMessageType::setReminders()
     * @param \Ews\ArrayType\EwsArrayOfRemindersType $reminders
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfRemindersType $reminders = null)
    {
        $this
            ->setReminders($reminders);
    }
    /**
     * Get Reminders value
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function getReminders()
    {
        return $this->Reminders;
    }
    /**
     * Set Reminders value
     * @param \Ews\ArrayType\EwsArrayOfRemindersType $reminders
     * @return \Ews\StructType\EwsGetRemindersResponseMessageType
     */
    public function setReminders(\Ews\ArrayType\EwsArrayOfRemindersType $reminders = null)
    {
        $this->Reminders = $reminders;
        return $this;
    }
}
