<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsArrayOfRealItemsType|null
     */
    protected ?\StructType\EwsArrayOfRealItemsType $Items = null;
    /**
     * The Groups
     * Meta information extracted from the WSDL
     * - choice: Items | Groups
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \ArrayType\EwsArrayOfGroupedItemsType|null
     */
    protected ?\ArrayType\EwsArrayOfGroupedItemsType $Groups = null;
    /**
     * The IndexedPagingOffset
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $IndexedPagingOffset = null;
    /**
     * The NumeratorOffset
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $NumeratorOffset = null;
    /**
     * The AbsoluteDenominator
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $AbsoluteDenominator = null;
    /**
     * The IncludesLastItemInRange
     * Meta information extracted from the WSDL
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludesLastItemInRange = null;
    /**
     * The TotalItemsInView
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $TotalItemsInView = null;
    /**
     * Constructor method for FindItemParentType
     * @uses EwsFindItemParentType::setItems()
     * @uses EwsFindItemParentType::setGroups()
     * @uses EwsFindItemParentType::setIndexedPagingOffset()
     * @uses EwsFindItemParentType::setNumeratorOffset()
     * @uses EwsFindItemParentType::setAbsoluteDenominator()
     * @uses EwsFindItemParentType::setIncludesLastItemInRange()
     * @uses EwsFindItemParentType::setTotalItemsInView()
     * @param \StructType\EwsArrayOfRealItemsType $items
     * @param \ArrayType\EwsArrayOfGroupedItemsType $groups
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(?\StructType\EwsArrayOfRealItemsType $items = null, ?\ArrayType\EwsArrayOfGroupedItemsType $groups = null, ?int $indexedPagingOffset = null, ?int $numeratorOffset = null, ?int $absoluteDenominator = null, ?bool $includesLastItemInRange = null, ?int $totalItemsInView = null)
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
     * @return \StructType\EwsArrayOfRealItemsType|null
     */
    public function getItems(): ?\StructType\EwsArrayOfRealItemsType
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
    public function validateItemsForChoiceConstraintsFromSetItems($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Items can\'t be set as the property %s is already set. Only one property must be set among these properties: Items, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Items value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsArrayOfRealItemsType $items
     * @return \StructType\EwsFindItemParentType
     */
    public function setItems(?\StructType\EwsArrayOfRealItemsType $items = null): self
    {
        // validation for constraint: choice(Items, Groups)
        if ('' !== ($itemsChoiceErrorMessage = self::validateItemsForChoiceConstraintsFromSetItems($items))) {
            throw new InvalidArgumentException($itemsChoiceErrorMessage, __LINE__);
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
     * @return \ArrayType\EwsArrayOfGroupedItemsType|null
     */
    public function getGroups(): ?\ArrayType\EwsArrayOfGroupedItemsType
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
    public function validateGroupsForChoiceConstraintsFromSetGroups($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Groups can\'t be set as the property %s is already set. Only one property must be set among these properties: Groups, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Groups value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ArrayType\EwsArrayOfGroupedItemsType $groups
     * @return \StructType\EwsFindItemParentType
     */
    public function setGroups(?\ArrayType\EwsArrayOfGroupedItemsType $groups = null): self
    {
        // validation for constraint: choice(Items, Groups)
        if ('' !== ($groupsChoiceErrorMessage = self::validateGroupsForChoiceConstraintsFromSetGroups($groups))) {
            throw new InvalidArgumentException($groupsChoiceErrorMessage, __LINE__);
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
    public function getIndexedPagingOffset(): ?int
    {
        return $this->IndexedPagingOffset;
    }
    /**
     * Set IndexedPagingOffset value
     * @param int $indexedPagingOffset
     * @return \StructType\EwsFindItemParentType
     */
    public function setIndexedPagingOffset(?int $indexedPagingOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($indexedPagingOffset) && !(is_int($indexedPagingOffset) || ctype_digit($indexedPagingOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexedPagingOffset, true), gettype($indexedPagingOffset)), __LINE__);
        }
        $this->IndexedPagingOffset = $indexedPagingOffset;
        
        return $this;
    }
    /**
     * Get NumeratorOffset value
     * @return int|null
     */
    public function getNumeratorOffset(): ?int
    {
        return $this->NumeratorOffset;
    }
    /**
     * Set NumeratorOffset value
     * @param int $numeratorOffset
     * @return \StructType\EwsFindItemParentType
     */
    public function setNumeratorOffset(?int $numeratorOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($numeratorOffset) && !(is_int($numeratorOffset) || ctype_digit($numeratorOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeratorOffset, true), gettype($numeratorOffset)), __LINE__);
        }
        $this->NumeratorOffset = $numeratorOffset;
        
        return $this;
    }
    /**
     * Get AbsoluteDenominator value
     * @return int|null
     */
    public function getAbsoluteDenominator(): ?int
    {
        return $this->AbsoluteDenominator;
    }
    /**
     * Set AbsoluteDenominator value
     * @param int $absoluteDenominator
     * @return \StructType\EwsFindItemParentType
     */
    public function setAbsoluteDenominator(?int $absoluteDenominator = null): self
    {
        // validation for constraint: int
        if (!is_null($absoluteDenominator) && !(is_int($absoluteDenominator) || ctype_digit($absoluteDenominator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($absoluteDenominator, true), gettype($absoluteDenominator)), __LINE__);
        }
        $this->AbsoluteDenominator = $absoluteDenominator;
        
        return $this;
    }
    /**
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange(): ?bool
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \StructType\EwsFindItemParentType
     */
    public function setIncludesLastItemInRange(?bool $includesLastItemInRange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includesLastItemInRange) && !is_bool($includesLastItemInRange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastItemInRange, true), gettype($includesLastItemInRange)), __LINE__);
        }
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        
        return $this;
    }
    /**
     * Get TotalItemsInView value
     * @return int|null
     */
    public function getTotalItemsInView(): ?int
    {
        return $this->TotalItemsInView;
    }
    /**
     * Set TotalItemsInView value
     * @param int $totalItemsInView
     * @return \StructType\EwsFindItemParentType
     */
    public function setTotalItemsInView(?int $totalItemsInView = null): self
    {
        // validation for constraint: int
        if (!is_null($totalItemsInView) && !(is_int($totalItemsInView) || ctype_digit($totalItemsInView))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalItemsInView, true), gettype($totalItemsInView)), __LINE__);
        }
        $this->TotalItemsInView = $totalItemsInView;
        
        return $this;
    }
}
