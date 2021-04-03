<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpandDLResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExpandDLResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DLExpansion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfDLExpansionType|null
     */
    protected ?\StructType\EwsArrayOfDLExpansionType $DLExpansion = null;
    /**
     * The IndexedPagingOffset
     * @var int|null
     */
    protected ?int $IndexedPagingOffset = null;
    /**
     * The NumeratorOffset
     * @var int|null
     */
    protected ?int $NumeratorOffset = null;
    /**
     * The AbsoluteDenominator
     * @var int|null
     */
    protected ?int $AbsoluteDenominator = null;
    /**
     * The IncludesLastItemInRange
     * @var bool|null
     */
    protected ?bool $IncludesLastItemInRange = null;
    /**
     * The TotalItemsInView
     * @var int|null
     */
    protected ?int $TotalItemsInView = null;
    /**
     * Constructor method for ExpandDLResponseMessageType
     * @uses EwsExpandDLResponseMessageType::setDLExpansion()
     * @uses EwsExpandDLResponseMessageType::setIndexedPagingOffset()
     * @uses EwsExpandDLResponseMessageType::setNumeratorOffset()
     * @uses EwsExpandDLResponseMessageType::setAbsoluteDenominator()
     * @uses EwsExpandDLResponseMessageType::setIncludesLastItemInRange()
     * @uses EwsExpandDLResponseMessageType::setTotalItemsInView()
     * @param \StructType\EwsArrayOfDLExpansionType $dLExpansion
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(?\StructType\EwsArrayOfDLExpansionType $dLExpansion = null, ?int $indexedPagingOffset = null, ?int $numeratorOffset = null, ?int $absoluteDenominator = null, ?bool $includesLastItemInRange = null, ?int $totalItemsInView = null)
    {
        $this
            ->setDLExpansion($dLExpansion)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get DLExpansion value
     * @return \StructType\EwsArrayOfDLExpansionType|null
     */
    public function getDLExpansion(): ?\StructType\EwsArrayOfDLExpansionType
    {
        return $this->DLExpansion;
    }
    /**
     * Set DLExpansion value
     * @param \StructType\EwsArrayOfDLExpansionType $dLExpansion
     * @return \StructType\EwsExpandDLResponseMessageType
     */
    public function setDLExpansion(?\StructType\EwsArrayOfDLExpansionType $dLExpansion = null): self
    {
        $this->DLExpansion = $dLExpansion;
        
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
     * @return \StructType\EwsExpandDLResponseMessageType
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
     * @return \StructType\EwsExpandDLResponseMessageType
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
     * @return \StructType\EwsExpandDLResponseMessageType
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
     * @return \StructType\EwsExpandDLResponseMessageType
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
     * @return \StructType\EwsExpandDLResponseMessageType
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
