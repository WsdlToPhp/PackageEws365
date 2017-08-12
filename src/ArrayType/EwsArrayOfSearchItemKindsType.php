<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchItemKindsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of search item kind enum.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchItemKindsType extends AbstractStructArrayBase
{
    /**
     * The SearchItemKind
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $SearchItemKind;
    /**
     * Constructor method for ArrayOfSearchItemKindsType
     * @uses EwsArrayOfSearchItemKindsType::setSearchItemKind()
     * @param string[] $searchItemKind
     */
    public function __construct(array $searchItemKind = array())
    {
        $this
            ->setSearchItemKind($searchItemKind);
    }
    /**
     * Get SearchItemKind value
     * @return string[]
     */
    public function getSearchItemKind()
    {
        return $this->SearchItemKind;
    }
    /**
     * Set SearchItemKind value
     * @uses \Ews\EnumType\EwsSearchItemKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchItemKindType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $searchItemKind
     * @return \Ews\ArrayType\EwsArrayOfSearchItemKindsType
     */
    public function setSearchItemKind(array $searchItemKind = array())
    {
        $invalidValues = array();
        foreach ($searchItemKind as $arrayOfSearchItemKindsTypeSearchItemKindItem) {
            if (!\Ews\EnumType\EwsSearchItemKindType::valueIsValid($arrayOfSearchItemKindsTypeSearchItemKindItem)) {
                $invalidValues[] = var_export($arrayOfSearchItemKindsTypeSearchItemKindItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Ews\EnumType\EwsSearchItemKindType::getValidValues())), __LINE__);
        }
        $this->SearchItemKind = $searchItemKind;
        return $this;
    }
    /**
     * Add item to SearchItemKind value
     * @uses \Ews\EnumType\EwsSearchItemKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchItemKindType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfSearchItemKindsType
     */
    public function addToSearchItemKind($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchItemKindType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsSearchItemKindType::getValidValues())), __LINE__);
        }
        $this->SearchItemKind[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Ews\EnumType\EwsSearchItemKindType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfSearchItemKindsType
     */
    public function add($item)
    {
        if (!\Ews\EnumType\EwsSearchItemKindType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsSearchItemKindType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchItemKind
     */
    public function getAttributeName()
    {
        return 'SearchItemKind';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSearchItemKindsType
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
