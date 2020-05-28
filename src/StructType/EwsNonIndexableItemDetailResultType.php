<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonIndexableItemDetailResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Non indexable item details result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonIndexableItemDetailResultType extends AbstractStructBase
{
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public $Items;
    /**
     * The FailedMailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public $FailedMailboxes;
    /**
     * Constructor method for NonIndexableItemDetailResultType
     * @uses EwsNonIndexableItemDetailResultType::setItems()
     * @uses EwsNonIndexableItemDetailResultType::setFailedMailboxes()
     * @param \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType $items
     * @param \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType $items = null, \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this
            ->setItems($items)
            ->setFailedMailboxes($failedMailboxes);
    }
    /**
     * Get Items value
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType $items
     * @return \Ews\StructType\EwsNonIndexableItemDetailResultType
     */
    public function setItems(\Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Get FailedMailboxes value
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    public function getFailedMailboxes()
    {
        return $this->FailedMailboxes;
    }
    /**
     * Set FailedMailboxes value
     * @param \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @return \Ews\StructType\EwsNonIndexableItemDetailResultType
     */
    public function setFailedMailboxes(\Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this->FailedMailboxes = $failedMailboxes;
        return $this;
    }
}
