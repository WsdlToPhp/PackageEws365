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
     * Meta information extracted from the WSDL
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
}
