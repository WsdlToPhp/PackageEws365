<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderItemActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderItemActionType extends AbstractStructBase
{
    /**
     * The ActionType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ActionType;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The NewReminderTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NewReminderTime;
    /**
     * Constructor method for ReminderItemActionType
     * @uses EwsReminderItemActionType::setActionType()
     * @uses EwsReminderItemActionType::setItemId()
     * @uses EwsReminderItemActionType::setNewReminderTime()
     * @param string $actionType
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $newReminderTime
     */
    public function __construct($actionType = null, \Ews\StructType\EwsItemIdType $itemId = null, $newReminderTime = null)
    {
        $this
            ->setActionType($actionType)
            ->setItemId($itemId)
            ->setNewReminderTime($newReminderTime);
    }
    /**
     * Get ActionType value
     * @return string
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @uses \Ews\EnumType\EwsReminderActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsReminderActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionType
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function setActionType($actionType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsReminderActionType::valueIsValid($actionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionType, implode(', ', \Ews\EnumType\EwsReminderActionType::getValidValues())), __LINE__);
        }
        $this->ActionType = $actionType;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get NewReminderTime value
     * @return string|null
     */
    public function getNewReminderTime()
    {
        return $this->NewReminderTime;
    }
    /**
     * Set NewReminderTime value
     * @param string $newReminderTime
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function setNewReminderTime($newReminderTime = null)
    {
        // validation for constraint: string
        if (!is_null($newReminderTime) && !is_string($newReminderTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newReminderTime)), __LINE__);
        }
        $this->NewReminderTime = $newReminderTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsReminderItemActionType
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
