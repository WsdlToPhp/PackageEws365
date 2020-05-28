<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformReminderActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPerformReminderActionType extends EwsBaseRequestType
{
    /**
     * The ReminderItemActions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public $ReminderItemActions;
    /**
     * Constructor method for PerformReminderActionType
     * @uses EwsPerformReminderActionType::setReminderItemActions()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions = null)
    {
        $this
            ->setReminderItemActions($reminderItemActions);
    }
    /**
     * Get ReminderItemActions value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function getReminderItemActions()
    {
        return $this->ReminderItemActions;
    }
    /**
     * Set ReminderItemActions value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions
     * @return \Ews\StructType\EwsPerformReminderActionType
     */
    public function setReminderItemActions(\Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions = null)
    {
        $this->ReminderItemActions = $reminderItemActions;
        return $this;
    }
}
