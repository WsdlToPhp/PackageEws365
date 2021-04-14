<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchItemKindsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of search item kind enum.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchItemKindsType extends AbstractStructArrayBase
{
    /**
     * The SearchItemKind
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $SearchItemKind = [];
    /**
     * Constructor method for ArrayOfSearchItemKindsType
     * @uses EwsArrayOfSearchItemKindsType::setSearchItemKind()
     * @param string[] $searchItemKind
     */
    public function __construct(array $searchItemKind)
    {
        $this
            ->setSearchItemKind($searchItemKind);
    }
    /**
     * Get SearchItemKind value
     * @return string[]
     */
    public function getSearchItemKind(): array
    {
        return $this->SearchItemKind;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchItemKind method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchItemKind method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchItemKindForArrayConstraintsFromSetSearchItemKind(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchItemKindsTypeSearchItemKindItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsSearchItemKindType::valueIsValid($arrayOfSearchItemKindsTypeSearchItemKindItem)) {
                $invalidValues[] = is_object($arrayOfSearchItemKindsTypeSearchItemKindItem) ? get_class($arrayOfSearchItemKindsTypeSearchItemKindItem) : sprintf('%s(%s)', gettype($arrayOfSearchItemKindsTypeSearchItemKindItem), var_export($arrayOfSearchItemKindsTypeSearchItemKindItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchItemKindType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsSearchItemKindType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchItemKind value
     * @uses \EnumType\EwsSearchItemKindType::valueIsValid()
     * @uses \EnumType\EwsSearchItemKindType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $searchItemKind
     * @return \ArrayType\EwsArrayOfSearchItemKindsType
     */
    public function setSearchItemKind(array $searchItemKind): self
    {
        // validation for constraint: array
        if ('' !== ($searchItemKindArrayErrorMessage = self::validateSearchItemKindForArrayConstraintsFromSetSearchItemKind($searchItemKind))) {
            throw new InvalidArgumentException($searchItemKindArrayErrorMessage, __LINE__);
        }
        $this->SearchItemKind = $searchItemKind;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ArrayType\EwsArrayOfSearchItemKindsType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchItemKindType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchItemKindType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\EwsSearchItemKindType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchItemKind
     */
    public function getAttributeName(): string
    {
        return 'SearchItemKind';
    }
}
