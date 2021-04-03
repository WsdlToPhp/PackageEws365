<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfNonIndexableItemDetailsType|null
     */
    protected ?\ArrayType\EwsArrayOfNonIndexableItemDetailsType $Items = null;
    /**
     * The FailedMailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    protected ?\ArrayType\EwsArrayOfFailedSearchMailboxesType $FailedMailboxes = null;
    /**
     * Constructor method for NonIndexableItemDetailResultType
     * @uses EwsNonIndexableItemDetailResultType::setItems()
     * @uses EwsNonIndexableItemDetailResultType::setFailedMailboxes()
     * @param \ArrayType\EwsArrayOfNonIndexableItemDetailsType $items
     * @param \ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     */
    public function __construct(?\ArrayType\EwsArrayOfNonIndexableItemDetailsType $items = null, ?\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this
            ->setItems($items)
            ->setFailedMailboxes($failedMailboxes);
    }
    /**
     * Get Items value
     * @return \ArrayType\EwsArrayOfNonIndexableItemDetailsType|null
     */
    public function getItems(): ?\ArrayType\EwsArrayOfNonIndexableItemDetailsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \ArrayType\EwsArrayOfNonIndexableItemDetailsType $items
     * @return \StructType\EwsNonIndexableItemDetailResultType
     */
    public function setItems(?\ArrayType\EwsArrayOfNonIndexableItemDetailsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get FailedMailboxes value
     * @return \ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    public function getFailedMailboxes(): ?\ArrayType\EwsArrayOfFailedSearchMailboxesType
    {
        return $this->FailedMailboxes;
    }
    /**
     * Set FailedMailboxes value
     * @param \ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @return \StructType\EwsNonIndexableItemDetailResultType
     */
    public function setFailedMailboxes(?\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null): self
    {
        $this->FailedMailboxes = $failedMailboxes;
        
        return $this;
    }
}
