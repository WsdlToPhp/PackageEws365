<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonIndexableItemDetailResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Non indexable item details result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonIndexableItemDetailResultType extends AbstractStructBase
{
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Array of non indexable item details.
     * @var \Ews\ArrayType\EwsArrayOfNonIndexableItemDetailsType
     */
    public $Items;
    /**
     * The FailedMailboxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Array of failed mailbox and error message.
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonIndexableItemDetailResultType
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
