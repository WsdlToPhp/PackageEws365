<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupedItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupedItemsType extends AbstractStructBase
{
    /**
     * The GroupIndex
     * @var string|null
     */
    protected ?string $GroupIndex = null;
    /**
     * The Items
     * @var \StructType\EwsArrayOfRealItemsType|null
     */
    protected ?\StructType\EwsArrayOfRealItemsType $Items = null;
    /**
     * Constructor method for GroupedItemsType
     * @uses EwsGroupedItemsType::setGroupIndex()
     * @uses EwsGroupedItemsType::setItems()
     * @param string $groupIndex
     * @param \StructType\EwsArrayOfRealItemsType $items
     */
    public function __construct(?string $groupIndex = null, ?\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this
            ->setGroupIndex($groupIndex)
            ->setItems($items);
    }
    /**
     * Get GroupIndex value
     * @return string|null
     */
    public function getGroupIndex(): ?string
    {
        return $this->GroupIndex;
    }
    /**
     * Set GroupIndex value
     * @param string $groupIndex
     * @return \StructType\EwsGroupedItemsType
     */
    public function setGroupIndex(?string $groupIndex = null): self
    {
        // validation for constraint: string
        if (!is_null($groupIndex) && !is_string($groupIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupIndex, true), gettype($groupIndex)), __LINE__);
        }
        $this->GroupIndex = $groupIndex;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \StructType\EwsArrayOfRealItemsType|null
     */
    public function getItems(): ?\StructType\EwsArrayOfRealItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \StructType\EwsArrayOfRealItemsType $items
     * @return \StructType\EwsGroupedItemsType
     */
    public function setItems(?\StructType\EwsArrayOfRealItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
}
