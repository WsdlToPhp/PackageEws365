<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Items StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItems extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsItemType[]
     */
    protected array $Item = [];
    /**
     * Constructor method for Items
     * @uses EwsItems::setItem()
     * @param \StructType\EwsItemType[] $item
     */
    public function __construct(array $item = [])
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\EwsItemType[]
     */
    public function getItem(): array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemsItemItem) {
            // validation for constraint: itemType
            if (!$itemsItemItem instanceof \StructType\EwsItemType) {
                $invalidValues[] = is_object($itemsItemItem) ? get_class($itemsItemItem) : sprintf('%s(%s)', gettype($itemsItemItem), var_export($itemsItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \StructType\EwsItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemType[] $item
     * @return \StructType\EwsItems
     */
    public function setItem(array $item = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Add item to Item value
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemType $item
     * @return \StructType\EwsItems
     */
    public function addToItem(\StructType\EwsItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsItemType) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \StructType\EwsItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Item[] = $item;
        
        return $this;
    }
}
