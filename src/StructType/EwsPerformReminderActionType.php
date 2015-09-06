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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public $ReminderItemActions;
    /**
     * Constructor method for PerformReminderActionType
     * @uses EwsPerformReminderActionType::setReminderItemActions()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     * $reminderItemActions
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
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     * $reminderItemActions
     * @return \Ews\StructType\EwsPerformReminderActionType
     */
    public function setReminderItemActions(\Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions = null)
    {
        $this->ReminderItemActions = $reminderItemActions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPerformReminderActionType
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
