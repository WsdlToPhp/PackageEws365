<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    protected \ArrayType\EwsNonEmptyArrayOfReminderItemActionType $ReminderItemActions;
    /**
     * Constructor method for PerformReminderActionType
     * @uses EwsPerformReminderActionType::setReminderItemActions()
     * @param \ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions)
    {
        $this
            ->setReminderItemActions($reminderItemActions);
    }
    /**
     * Get ReminderItemActions value
     * @return \ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function getReminderItemActions(): \ArrayType\EwsNonEmptyArrayOfReminderItemActionType
    {
        return $this->ReminderItemActions;
    }
    /**
     * Set ReminderItemActions value
     * @param \ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions
     * @return \StructType\EwsPerformReminderActionType
     */
    public function setReminderItemActions(\ArrayType\EwsNonEmptyArrayOfReminderItemActionType $reminderItemActions): self
    {
        $this->ReminderItemActions = $reminderItemActions;
        
        return $this;
    }
}
