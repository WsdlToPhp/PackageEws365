<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHighlightTermsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfHighlightTermsType extends AbstractStructArrayBase
{
    /**
     * The Term
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsHighlightTermType[]
     */
    protected array $Term = [];
    /**
     * Constructor method for ArrayOfHighlightTermsType
     * @uses EwsArrayOfHighlightTermsType::setTerm()
     * @param \StructType\EwsHighlightTermType[] $term
     */
    public function __construct(array $term = [])
    {
        $this
            ->setTerm($term);
    }
    /**
     * Get Term value
     * @return \StructType\EwsHighlightTermType[]
     */
    public function getTerm(): array
    {
        return $this->Term;
    }
    /**
     * This method is responsible for validating the values passed to the setTerm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTerm method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTermForArrayConstraintsFromSetTerm(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfHighlightTermsTypeTermItem) {
            // validation for constraint: itemType
            if (!$arrayOfHighlightTermsTypeTermItem instanceof \StructType\EwsHighlightTermType) {
                $invalidValues[] = is_object($arrayOfHighlightTermsTypeTermItem) ? get_class($arrayOfHighlightTermsTypeTermItem) : sprintf('%s(%s)', gettype($arrayOfHighlightTermsTypeTermItem), var_export($arrayOfHighlightTermsTypeTermItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Term property can only contain items of type \StructType\EwsHighlightTermType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Term value
     * @throws InvalidArgumentException
     * @param \StructType\EwsHighlightTermType[] $term
     * @return \ArrayType\EwsArrayOfHighlightTermsType
     */
    public function setTerm(array $term = []): self
    {
        // validation for constraint: array
        if ('' !== ($termArrayErrorMessage = self::validateTermForArrayConstraintsFromSetTerm($term))) {
            throw new InvalidArgumentException($termArrayErrorMessage, __LINE__);
        }
        $this->Term = $term;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsHighlightTermType|null
     */
    public function current(): ?\StructType\EwsHighlightTermType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsHighlightTermType|null
     */
    public function item($index): ?\StructType\EwsHighlightTermType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsHighlightTermType|null
     */
    public function first(): ?\StructType\EwsHighlightTermType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsHighlightTermType|null
     */
    public function last(): ?\StructType\EwsHighlightTermType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsHighlightTermType|null
     */
    public function offsetGet($offset): ?\StructType\EwsHighlightTermType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsHighlightTermType $item
     * @return \ArrayType\EwsArrayOfHighlightTermsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsHighlightTermType) {
            throw new InvalidArgumentException(sprintf('The Term property can only contain items of type \StructType\EwsHighlightTermType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Term
     */
    public function getAttributeName(): string
    {
        return 'Term';
    }
}
