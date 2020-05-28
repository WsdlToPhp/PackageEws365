<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsSearchableMailboxType[]
     */
    public $SearchableMailbox;
    /**
     * Constructor method for ArrayOfSearchableMailboxesType
     * @uses EwsArrayOfSearchableMailboxesType::setSearchableMailbox()
     * @param \Ews\StructType\EwsSearchableMailboxType[] $searchableMailbox
     */
    public function __construct(array $searchableMailbox = array())
    {
        $this
            ->setSearchableMailbox($searchableMailbox);
    }
    /**
     * Get SearchableMailbox value
     * @return \Ews\StructType\EwsSearchableMailboxType[]|null
     */
    public function getSearchableMailbox()
    {
        return $this->SearchableMailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchableMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchableMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchableMailboxForArrayConstraintsFromSetSearchableMailbox(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchableMailboxesTypeSearchableMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchableMailboxesTypeSearchableMailboxItem instanceof \Ews\StructType\EwsSearchableMailboxType) {
                $invalidValues[] = is_object($arrayOfSearchableMailboxesTypeSearchableMailboxItem) ? get_class($arrayOfSearchableMailboxesTypeSearchableMailboxItem) : sprintf('%s(%s)', gettype($arrayOfSearchableMailboxesTypeSearchableMailboxItem), var_export($arrayOfSearchableMailboxesTypeSearchableMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchableMailbox property can only contain items of type \Ews\StructType\EwsSearchableMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SearchableMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchableMailboxType[] $searchableMailbox
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function setSearchableMailbox(array $searchableMailbox = array())
    {
        // validation for constraint: array
        if ('' !== ($searchableMailboxArrayErrorMessage = self::validateSearchableMailboxForArrayConstraintsFromSetSearchableMailbox($searchableMailbox))) {
            throw new \InvalidArgumentException($searchableMailboxArrayErrorMessage, __LINE__);
        }
        $this->SearchableMailbox = $searchableMailbox;
        return $this;
    }
    /**
     * Add item to SearchableMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchableMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function addToSearchableMailbox(\Ews\StructType\EwsSearchableMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSearchableMailboxType) {
            throw new \InvalidArgumentException(sprintf('The SearchableMailbox property can only contain items of type \Ews\StructType\EwsSearchableMailboxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SearchableMailbox[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchableMailbox
     */
    public function getAttributeName()
    {
        return 'SearchableMailbox';
    }
}
