<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalEntries StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAdditionalEntries extends AbstractStructBase
{
    /**
     * The Entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Entry = [];
    /**
     * Constructor method for AdditionalEntries
     * @uses EwsAdditionalEntries::setEntry()
     * @param string[] $entry
     */
    public function __construct(array $entry = [])
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return string[]
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
        foreach ($values as $additionalEntriesEntryItem) {
            // validation for constraint: itemType
            if (!is_string($additionalEntriesEntryItem)) {
                $invalidValues[] = is_object($additionalEntriesEntryItem) ? get_class($additionalEntriesEntryItem) : sprintf('%s(%s)', gettype($additionalEntriesEntryItem), var_export($additionalEntriesEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entry property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Entry value
     * @throws InvalidArgumentException
     * @param string[] $entry
     * @return \StructType\EwsAdditionalEntries
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
     * @param string $item
     * @return \StructType\EwsAdditionalEntries
     */
    public function addToEntry(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Entry property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Entry[] = $item;
        
        return $this;
    }
}
