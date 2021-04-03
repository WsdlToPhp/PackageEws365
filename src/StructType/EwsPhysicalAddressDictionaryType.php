<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysicalAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhysicalAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsPhysicalAddressDictionaryEntryType[]
     */
    protected array $Entry = [];
    /**
     * Constructor method for PhysicalAddressDictionaryType
     * @uses EwsPhysicalAddressDictionaryType::setEntry()
     * @param \StructType\EwsPhysicalAddressDictionaryEntryType[] $entry
     */
    public function __construct(array $entry = [])
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType[]
     */
    public function getEntry(): array
    {
        return $this->Entry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $physicalAddressDictionaryTypeEntryItem) {
            // validation for constraint: itemType
            if (!$physicalAddressDictionaryTypeEntryItem instanceof \StructType\EwsPhysicalAddressDictionaryEntryType) {
                $invalidValues[] = is_object($physicalAddressDictionaryTypeEntryItem) ? get_class($physicalAddressDictionaryTypeEntryItem) : sprintf('%s(%s)', gettype($physicalAddressDictionaryTypeEntryItem), var_export($physicalAddressDictionaryTypeEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entry property can only contain items of type \StructType\EwsPhysicalAddressDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Entry value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhysicalAddressDictionaryEntryType[] $entry
     * @return \StructType\EwsPhysicalAddressDictionaryType
     */
    public function setEntry(array $entry = []): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        $this->Entry = $entry;
        
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhysicalAddressDictionaryEntryType $item
     * @return \StructType\EwsPhysicalAddressDictionaryType
     */
    public function addToEntry(\StructType\EwsPhysicalAddressDictionaryEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPhysicalAddressDictionaryEntryType) {
            throw new InvalidArgumentException(sprintf('The Entry property can only contain items of type \StructType\EwsPhysicalAddressDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Entry[] = $item;
        
        return $this;
    }
}
