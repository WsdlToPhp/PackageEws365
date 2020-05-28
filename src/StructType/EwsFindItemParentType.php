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
     * Meta information extracted from the WSDL
     * - choice: Items | Groups
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsArrayOfRealItemsType
     */
    public $Items;
    /**
     * The Groups
     * Meta information extracted from the WSDL
     * - choice: Items | Groups
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfGroupedItemsType
     */
    public $Groups;
    /**
     * The IndexedPagingOffset
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int
     */
    public $IndexedPagingOffset;
    /**
     * The NumeratorOffset
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int
     */
    public $NumeratorOffset;
    /**
     * The AbsoluteDenominator
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int
     */
    public $AbsoluteDenominator;
    /**
     * The IncludesLastItemInRange
     * Meta information extracted from the WSDL
     * - type: xs:boolean
     * - use: optional
     * @var bool
     */
    public $IncludesLastItemInRange;
    /**
     * The TotalItemsInView
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
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
        return isset($this->Items) ? $this->Items : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItems method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemsForChoiceConstraintsFromSetItems($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Groups',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Items can\'t be set as the property %s is already set. Only one property must be set among these properties: Items, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Items value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsArrayOfRealItemsType $items
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setItems(\Ews\StructType\EwsArrayOfRealItemsType $items = null)
    {
        // validation for constraint: choice(Items, Groups)
        if ('' !== ($itemsChoiceErrorMessage = self::validateItemsForChoiceConstraintsFromSetItems($items))) {
            throw new \InvalidArgumentException($itemsChoiceErrorMessage, __LINE__);
        }
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        return $this;
    }
    /**
     * Get Groups value
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType|null
     */
    public function getGroups()
    {
        return isset($this->Groups) ? $this->Groups : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGroups method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroups method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGroupsForChoiceConstraintsFromSetGroups($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Items',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Groups can\'t be set as the property %s is already set. Only one property must be set among these properties: Groups, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Groups value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\ArrayType\EwsArrayOfGroupedItemsType $groups
     * @return \Ews\StructType\EwsFindItemParentType
     */
    public function setGroups(\Ews\ArrayType\EwsArrayOfGroupedItemsType $groups = null)
    {
        // validation for constraint: choice(Items, Groups)
        if ('' !== ($groupsChoiceErrorMessage = self::validateGroupsForChoiceConstraintsFromSetGroups($groups))) {
            throw new \InvalidArgumentException($groupsChoiceErrorMessage, __LINE__);
        }
        if (is_null($groups) || (is_array($groups) && empty($groups))) {
            unset($this->Groups);
        } else {
            $this->Groups = $groups;
        }
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
        if (!is_null($indexedPagingOffset) && !(is_int($indexedPagingOffset) || ctype_digit($indexedPagingOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexedPagingOffset, true), gettype($indexedPagingOffset)), __LINE__);
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
        if (!is_null($numeratorOffset) && !(is_int($numeratorOffset) || ctype_digit($numeratorOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeratorOffset, true), gettype($numeratorOffset)), __LINE__);
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
        if (!is_null($absoluteDenominator) && !(is_int($absoluteDenominator) || ctype_digit($absoluteDenominator))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($absoluteDenominator, true), gettype($absoluteDenominator)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastItemInRange, true), gettype($includesLastItemInRange)), __LINE__);
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
        if (!is_null($totalItemsInView) && !(is_int($totalItemsInView) || ctype_digit($totalItemsInView))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalItemsInView, true), gettype($totalItemsInView)), __LINE__);
        }
        $this->TotalItemsInView = $totalItemsInView;
        return $this;
    }
}
