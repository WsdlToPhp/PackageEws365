<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfResolutionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfResolutionType extends AbstractStructBase
{
    /**
     * The Resolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \StructType\EwsResolutionType[]
     */
    protected array $Resolution = [];
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
     * Constructor method for ArrayOfResolutionType
     * @uses EwsArrayOfResolutionType::setResolution()
     * @uses EwsArrayOfResolutionType::setIndexedPagingOffset()
     * @uses EwsArrayOfResolutionType::setNumeratorOffset()
     * @uses EwsArrayOfResolutionType::setAbsoluteDenominator()
     * @uses EwsArrayOfResolutionType::setIncludesLastItemInRange()
     * @uses EwsArrayOfResolutionType::setTotalItemsInView()
     * @param \StructType\EwsResolutionType[] $resolution
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(array $resolution = [], ?int $indexedPagingOffset = null, ?int $numeratorOffset = null, ?int $absoluteDenominator = null, ?bool $includesLastItemInRange = null, ?int $totalItemsInView = null)
    {
        $this
            ->setResolution($resolution)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Resolution value
     * @return \StructType\EwsResolutionType[]
     */
    public function getResolution(): array
    {
        return $this->Resolution;
    }
    /**
     * This method is responsible for validating the values passed to the setResolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResolution method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResolutionForArrayConstraintsFromSetResolution(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResolutionTypeResolutionItem) {
            // validation for constraint: itemType
            if (!$arrayOfResolutionTypeResolutionItem instanceof \StructType\EwsResolutionType) {
                $invalidValues[] = is_object($arrayOfResolutionTypeResolutionItem) ? get_class($arrayOfResolutionTypeResolutionItem) : sprintf('%s(%s)', gettype($arrayOfResolutionTypeResolutionItem), var_export($arrayOfResolutionTypeResolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Resolution property can only contain items of type \StructType\EwsResolutionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Resolution value
     * @throws InvalidArgumentException
     * @param \StructType\EwsResolutionType[] $resolution
     * @return \StructType\EwsArrayOfResolutionType
     */
    public function setResolution(array $resolution = []): self
    {
        // validation for constraint: array
        if ('' !== ($resolutionArrayErrorMessage = self::validateResolutionForArrayConstraintsFromSetResolution($resolution))) {
            throw new InvalidArgumentException($resolutionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($resolution) && count($resolution) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($resolution)), __LINE__);
        }
        $this->Resolution = $resolution;
        
        return $this;
    }
    /**
     * Add item to Resolution value
     * @throws InvalidArgumentException
     * @param \StructType\EwsResolutionType $item
     * @return \StructType\EwsArrayOfResolutionType
     */
    public function addToResolution(\StructType\EwsResolutionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsResolutionType) {
            throw new InvalidArgumentException(sprintf('The Resolution property can only contain items of type \StructType\EwsResolutionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->Resolution) && count($this->Resolution) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->Resolution)), __LINE__);
        }
        $this->Resolution[] = $item;
        
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
     * @return \StructType\EwsArrayOfResolutionType
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
     * @return \StructType\EwsArrayOfResolutionType
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
     * @return \StructType\EwsArrayOfResolutionType
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
     * @return \StructType\EwsArrayOfResolutionType
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
     * @return \StructType\EwsArrayOfResolutionType
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
