<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    protected \ArrayType\EwsNonEmptyArrayOfItemIdsType $UpdatedItemIds;
    /**
     * Constructor method for PerformReminderActionResponseMessageType
     * @uses EwsPerformReminderActionResponseMessageType::setUpdatedItemIds()
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds)
    {
        $this
            ->setUpdatedItemIds($updatedItemIds);
    }
    /**
     * Get UpdatedItemIds value
     * @return \ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public function getUpdatedItemIds(): \ArrayType\EwsNonEmptyArrayOfItemIdsType
    {
        return $this->UpdatedItemIds;
    }
    /**
     * Set UpdatedItemIds value
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds
     * @return \StructType\EwsPerformReminderActionResponseMessageType
     */
    public function setUpdatedItemIds(\ArrayType\EwsNonEmptyArrayOfItemIdsType $updatedItemIds): self
    {
        $this->UpdatedItemIds = $updatedItemIds;
        
        return $this;
    }
}
