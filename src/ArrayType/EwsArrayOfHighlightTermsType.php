<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsHighlightTermType[]
     */
    public $Term;
    /**
     * Constructor method for ArrayOfHighlightTermsType
     * @uses EwsArrayOfHighlightTermsType::setTerm()
     * @param \Ews\StructType\EwsHighlightTermType[] $term
     */
    public function __construct(array $term = array())
    {
        $this
            ->setTerm($term);
    }
    /**
     * Get Term value
     * @return \Ews\StructType\EwsHighlightTermType[]|null
     */
    public function getTerm()
    {
        return $this->Term;
    }
    /**
     * This method is responsible for validating the values passed to the setTerm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTerm method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTermForArrayConstraintsFromSetTerm(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfHighlightTermsTypeTermItem) {
            // validation for constraint: itemType
            if (!$arrayOfHighlightTermsTypeTermItem instanceof \Ews\StructType\EwsHighlightTermType) {
                $invalidValues[] = is_object($arrayOfHighlightTermsTypeTermItem) ? get_class($arrayOfHighlightTermsTypeTermItem) : sprintf('%s(%s)', gettype($arrayOfHighlightTermsTypeTermItem), var_export($arrayOfHighlightTermsTypeTermItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Term property can only contain items of type \Ews\StructType\EwsHighlightTermType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Term value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsHighlightTermType[] $term
     * @return \Ews\ArrayType\EwsArrayOfHighlightTermsType
     */
    public function setTerm(array $term = array())
    {
        // validation for constraint: array
        if ('' !== ($termArrayErrorMessage = self::validateTermForArrayConstraintsFromSetTerm($term))) {
            throw new \InvalidArgumentException($termArrayErrorMessage, __LINE__);
        }
        $this->Term = $term;
        return $this;
    }
    /**
     * Add item to Term value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsHighlightTermType $item
     * @return \Ews\ArrayType\EwsArrayOfHighlightTermsType
     */
    public function addToTerm(\Ews\StructType\EwsHighlightTermType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsHighlightTermType) {
            throw new \InvalidArgumentException(sprintf('The Term property can only contain items of type \Ews\StructType\EwsHighlightTermType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Term[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsHighlightTermType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsHighlightTermType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsHighlightTermType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsHighlightTermType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsHighlightTermType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Term
     */
    public function getAttributeName()
    {
        return 'Term';
    }
}
