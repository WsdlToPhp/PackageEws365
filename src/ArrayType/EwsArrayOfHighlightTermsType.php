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
     * Meta informations extracted from the WSDL
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
     * Set Term value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsHighlightTermType[] $term
     * @return \Ews\ArrayType\EwsArrayOfHighlightTermsType
     */
    public function setTerm(array $term = array())
    {
        foreach ($term as $arrayOfHighlightTermsTypeTermItem) {
            // validation for constraint: itemType
            if (!$arrayOfHighlightTermsTypeTermItem instanceof \Ews\StructType\EwsHighlightTermType) {
                throw new \InvalidArgumentException(sprintf('The Term property can only contain items of \Ews\StructType\EwsHighlightTermType, "%s" given', is_object($arrayOfHighlightTermsTypeTermItem) ? get_class($arrayOfHighlightTermsTypeTermItem) : gettype($arrayOfHighlightTermsTypeTermItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Term property can only contain items of \Ews\StructType\EwsHighlightTermType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfHighlightTermsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
