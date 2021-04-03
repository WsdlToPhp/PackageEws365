<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindFolderParentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindFolderParentType extends AbstractStructBase
{
    /**
     * The Folders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfFoldersType|null
     */
    protected ?\StructType\EwsArrayOfFoldersType $Folders = null;
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
     * Constructor method for FindFolderParentType
     * @uses EwsFindFolderParentType::setFolders()
     * @uses EwsFindFolderParentType::setIndexedPagingOffset()
     * @uses EwsFindFolderParentType::setNumeratorOffset()
     * @uses EwsFindFolderParentType::setAbsoluteDenominator()
     * @uses EwsFindFolderParentType::setIncludesLastItemInRange()
     * @uses EwsFindFolderParentType::setTotalItemsInView()
     * @param \StructType\EwsArrayOfFoldersType $folders
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(?\StructType\EwsArrayOfFoldersType $folders = null, ?int $indexedPagingOffset = null, ?int $numeratorOffset = null, ?int $absoluteDenominator = null, ?bool $includesLastItemInRange = null, ?int $totalItemsInView = null)
    {
        $this
            ->setFolders($folders)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Folders value
     * @return \StructType\EwsArrayOfFoldersType|null
     */
    public function getFolders(): ?\StructType\EwsArrayOfFoldersType
    {
        return $this->Folders;
    }
    /**
     * Set Folders value
     * @param \StructType\EwsArrayOfFoldersType $folders
     * @return \StructType\EwsFindFolderParentType
     */
    public function setFolders(?\StructType\EwsArrayOfFoldersType $folders = null): self
    {
        $this->Folders = $folders;
        
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
     * @return \StructType\EwsFindFolderParentType
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
     * @return \StructType\EwsFindFolderParentType
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
     * @return \StructType\EwsFindFolderParentType
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
     * @return \StructType\EwsFindFolderParentType
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
     * @return \StructType\EwsFindFolderParentType
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
