<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfRemindersType
     */
    protected \ArrayType\EwsArrayOfRemindersType $Reminders;
    /**
     * Constructor method for GetRemindersResponseMessageType
     * @uses EwsGetRemindersResponseMessageType::setReminders()
     * @param \ArrayType\EwsArrayOfRemindersType $reminders
     */
    public function __construct(\ArrayType\EwsArrayOfRemindersType $reminders)
    {
        $this
            ->setReminders($reminders);
    }
    /**
     * Get Reminders value
     * @return \ArrayType\EwsArrayOfRemindersType
     */
    public function getReminders(): \ArrayType\EwsArrayOfRemindersType
    {
        return $this->Reminders;
    }
    /**
     * Set Reminders value
     * @param \ArrayType\EwsArrayOfRemindersType $reminders
     * @return \StructType\EwsGetRemindersResponseMessageType
     */
    public function setReminders(\ArrayType\EwsArrayOfRemindersType $reminders): self
    {
        $this->Reminders = $reminders;
        
        return $this;
    }
}
