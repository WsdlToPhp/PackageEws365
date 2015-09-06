<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformReminderActionResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPerformReminderActionResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UpdatedItemIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public $UpdatedItemIds;
    /**
     * Constructor method for PerformReminderActionResponseMessageType
     * @uses EwsPerformReminderActionResponseMessageType::setUpdatedItemIds()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds = null)
    {
        $this
            ->setUpdatedItemIds($updatedItemIds);
    }
    /**
     * Get UpdatedItemIds value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public function getUpdatedItemIds()
    {
        return $this->UpdatedItemIds;
    }
    /**
     * Set UpdatedItemIds value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds
     * @return \Ews\StructType\EwsPerformReminderActionResponseMessageType
     */
    public function setUpdatedItemIds(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds = null)
    {
        $this->UpdatedItemIds = $updatedItemIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPerformReminderActionResponseMessageType
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
