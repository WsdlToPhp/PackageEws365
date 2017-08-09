<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemParentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindItemParentType extends AbstractStructBase
{
    /**
     * The Items
     * @var \Ews\StructType\EwsArrayOfRealItemsType
     */
    public $Items;
    /**
     * The Groups
     * @var \Ews\ArrayType\EwsArrayOfGroupedItemsType
     */
    public $Groups;
    /**
     * The IndexedPagingOffset
     * @var int
     */
    public $IndexedPagingOffset;
    /**
     * The NumeratorOffset
     * @var int
     */
    public $NumeratorOffset;
    /**
     * The AbsoluteDenominator
     * @var int
     */
    public $AbsoluteDenominator;
    /**
     * The IncludesLastItemInRange
     * @var bool
     */
    public $IncludesLastItemInRange;
    /**
     * The TotalItemsInView
     * @var int
     */
    public $TotalItemsInView;
    /**
     * Constructor method for FindItemParentType
     * @uses EwsFindItemParentType::setItems()
     * @uses EwsFindItemParentType::setGroups()
     * @uses EwsFindItemParentType::setIndexedPagingOffset()
     * @uses EwsFindItemParentType::setNumeratorOffset()
     * @uses EwsFindItemParentType::setAbsoluteDenominator()
     * @uses EwsFindItemParentType::setIncludesLastItemInRange()
     * @uses EwsFindItemParentType::setTotalItemsInView()
     * @param \Ews\StructType\EwsArrayOfRealItemsType $items
     * @param \Ews\ArrayType\EwsArrayOfGroupedItemsType $groups
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(\Ews\StructType\EwsArrayOfRealItemsType $items = null, \Ews\ArrayType\EwsArrayOfGroupedItemsType $groups = null, $indexedPagingOffset = null, $numeratorOffset = null, $absoluteDenominator = null, $includesLastItemInRange = null, $totalItemsInView = null)
    {
        $this
            ->setItems($items)
            ->setGroups($groups)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Items value
     * @return \Ews\StructType\EwsArrayOfRealItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\StructType\EwsArrayOfRealItemsType $items
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setItems(\Ews\StructType\EwsArrayOfRealItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Get Groups value
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType|null
     */
    public function getGroups()
    {
        return $this->Groups;
    }
    /**
     * Set Groups value
     * @param \Ews\ArrayType\EwsArrayOfGroupedItemsType $groups
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setGroups(\Ews\ArrayType\EwsArrayOfGroupedItemsType $groups = null)
    {
        $this->Groups = $groups;
        return $this;
    }
    /**
     * Get IndexedPagingOffset value
     * @return int|null
     */
    public function getIndexedPagingOffset()
    {
        return $this->IndexedPagingOffset;
    }
    /**
     * Set IndexedPagingOffset value
     * @param int $indexedPagingOffset
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setIndexedPagingOffset($indexedPagingOffset = null)
    {
        // validation for constraint: int
        if (!is_null($indexedPagingOffset) && !is_numeric($indexedPagingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($indexedPagingOffset)), __LINE__);
        }
        $this->IndexedPagingOffset = $indexedPagingOffset;
        return $this;
    }
    /**
     * Get NumeratorOffset value
     * @return int|null
     */
    public function getNumeratorOffset()
    {
        return $this->NumeratorOffset;
    }
    /**
     * Set NumeratorOffset value
     * @param int $numeratorOffset
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setNumeratorOffset($numeratorOffset = null)
    {
        // validation for constraint: int
        if (!is_null($numeratorOffset) && !is_numeric($numeratorOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numeratorOffset)), __LINE__);
        }
        $this->NumeratorOffset = $numeratorOffset;
        return $this;
    }
    /**
     * Get AbsoluteDenominator value
     * @return int|null
     */
    public function getAbsoluteDenominator()
    {
        return $this->AbsoluteDenominator;
    }
    /**
     * Set AbsoluteDenominator value
     * @param int $absoluteDenominator
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setAbsoluteDenominator($absoluteDenominator = null)
    {
        // validation for constraint: int
        if (!is_null($absoluteDenominator) && !is_numeric($absoluteDenominator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($absoluteDenominator)), __LINE__);
        }
        $this->AbsoluteDenominator = $absoluteDenominator;
        return $this;
    }
    /**
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange()
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setIncludesLastItemInRange($includesLastItemInRange = null)
    {
        // validation for constraint: boolean
        if (!is_null($includesLastItemInRange) && !is_bool($includesLastItemInRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includesLastItemInRange)), __LINE__);
        }
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        return $this;
    }
    /**
     * Get TotalItemsInView value
     * @return int|null
     */
    public function getTotalItemsInView()
    {
        return $this->TotalItemsInView;
    }
    /**
     * Set TotalItemsInView value
     * @param int $totalItemsInView
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setTotalItemsInView($totalItemsInView = null)
    {
        // validation for constraint: int
        if (!is_null($totalItemsInView) && !is_numeric($totalItemsInView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalItemsInView)), __LINE__);
        }
        $this->TotalItemsInView = $totalItemsInView;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindItemParentType
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
