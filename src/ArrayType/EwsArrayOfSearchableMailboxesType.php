<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchableMailboxesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of searchable mailbox.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchableMailboxesType extends AbstractStructArrayBase
{
    /**
     * The SearchableMailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSearchableMailboxType[]
     */
    protected array $SearchableMailbox = [];
    /**
     * Constructor method for ArrayOfSearchableMailboxesType
     * @uses EwsArrayOfSearchableMailboxesType::setSearchableMailbox()
     * @param \StructType\EwsSearchableMailboxType[] $searchableMailbox
     */
    public function __construct(array $searchableMailbox = [])
    {
        $this
            ->setSearchableMailbox($searchableMailbox);
    }
    /**
     * Get SearchableMailbox value
     * @return \StructType\EwsSearchableMailboxType[]
     */
    public function getSearchableMailbox(): array
    {
        return $this->SearchableMailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchableMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchableMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchableMailboxForArrayConstraintsFromSetSearchableMailbox(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchableMailboxesTypeSearchableMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchableMailboxesTypeSearchableMailboxItem instanceof \StructType\EwsSearchableMailboxType) {
                $invalidValues[] = is_object($arrayOfSearchableMailboxesTypeSearchableMailboxItem) ? get_class($arrayOfSearchableMailboxesTypeSearchableMailboxItem) : sprintf('%s(%s)', gettype($arrayOfSearchableMailboxesTypeSearchableMailboxItem), var_export($arrayOfSearchableMailboxesTypeSearchableMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchableMailbox property can only contain items of type \StructType\EwsSearchableMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchableMailbox value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSearchableMailboxType[] $searchableMailbox
     * @return \ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function setSearchableMailbox(array $searchableMailbox = []): self
    {
        // validation for constraint: array
        if ('' !== ($searchableMailboxArrayErrorMessage = self::validateSearchableMailboxForArrayConstraintsFromSetSearchableMailbox($searchableMailbox))) {
            throw new InvalidArgumentException($searchableMailboxArrayErrorMessage, __LINE__);
        }
        $this->SearchableMailbox = $searchableMailbox;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSearchableMailboxType|null
     */
    public function current(): ?\StructType\EwsSearchableMailboxType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSearchableMailboxType|null
     */
    public function item($index): ?\StructType\EwsSearchableMailboxType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSearchableMailboxType|null
     */
    public function first(): ?\StructType\EwsSearchableMailboxType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSearchableMailboxType|null
     */
    public function last(): ?\StructType\EwsSearchableMailboxType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSearchableMailboxType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSearchableMailboxType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSearchableMailboxType $item
     * @return \ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function add(\StructType\EwsSearchableMailboxType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchableMailbox
     */
    public function getAttributeName(): string
    {
        return 'SearchableMailbox';
    }
}
