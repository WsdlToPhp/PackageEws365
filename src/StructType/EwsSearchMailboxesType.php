<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMailboxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the SearchMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchMailboxesType extends EwsBaseRequestType
{
    /**
     * The SearchQueries
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    protected \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $SearchQueries;
    /**
     * The ResultType
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $ResultType;
    /**
     * The PreviewItemResponseShape
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsPreviewItemResponseShapeType|null
     */
    protected ?\StructType\EwsPreviewItemResponseShapeType $PreviewItemResponseShape = null;
    /**
     * The SortBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFieldOrderType|null
     */
    protected ?\StructType\EwsFieldOrderType $SortBy = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Language = null;
    /**
     * The Deduplication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Deduplication = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The PageItemReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PageItemReference = null;
    /**
     * The PageDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PageDirection = null;
    /**
     * Constructor method for SearchMailboxesType
     * @uses EwsSearchMailboxesType::setSearchQueries()
     * @uses EwsSearchMailboxesType::setResultType()
     * @uses EwsSearchMailboxesType::setPreviewItemResponseShape()
     * @uses EwsSearchMailboxesType::setSortBy()
     * @uses EwsSearchMailboxesType::setLanguage()
     * @uses EwsSearchMailboxesType::setDeduplication()
     * @uses EwsSearchMailboxesType::setPageSize()
     * @uses EwsSearchMailboxesType::setPageItemReference()
     * @uses EwsSearchMailboxesType::setPageDirection()
     * @param \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @param string $resultType
     * @param \StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape
     * @param \StructType\EwsFieldOrderType $sortBy
     * @param string $language
     * @param bool $deduplication
     * @param int $pageSize
     * @param string $pageItemReference
     * @param string $pageDirection
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries, string $resultType, ?\StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape = null, ?\StructType\EwsFieldOrderType $sortBy = null, ?string $language = null, ?bool $deduplication = null, ?int $pageSize = null, ?string $pageItemReference = null, ?string $pageDirection = null)
    {
        $this
            ->setSearchQueries($searchQueries)
            ->setResultType($resultType)
            ->setPreviewItemResponseShape($previewItemResponseShape)
            ->setSortBy($sortBy)
            ->setLanguage($language)
            ->setDeduplication($deduplication)
            ->setPageSize($pageSize)
            ->setPageItemReference($pageItemReference)
            ->setPageDirection($pageDirection);
    }
    /**
     * Get SearchQueries value
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function getSearchQueries(): \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
    {
        return $this->SearchQueries;
    }
    /**
     * Set SearchQueries value
     * @param \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setSearchQueries(\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries): self
    {
        $this->SearchQueries = $searchQueries;
        
        return $this;
    }
    /**
     * Get ResultType value
     * @return string
     */
    public function getResultType(): string
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @uses \EnumType\EwsSearchResultType::valueIsValid()
     * @uses \EnumType\EwsSearchResultType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resultType
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setResultType(string $resultType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchResultType::valueIsValid($resultType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchResultType', is_array($resultType) ? implode(', ', $resultType) : var_export($resultType, true), implode(', ', \EnumType\EwsSearchResultType::getValidValues())), __LINE__);
        }
        $this->ResultType = $resultType;
        
        return $this;
    }
    /**
     * Get PreviewItemResponseShape value
     * @return \StructType\EwsPreviewItemResponseShapeType|null
     */
    public function getPreviewItemResponseShape(): ?\StructType\EwsPreviewItemResponseShapeType
    {
        return $this->PreviewItemResponseShape;
    }
    /**
     * Set PreviewItemResponseShape value
     * @param \StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setPreviewItemResponseShape(?\StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape = null): self
    {
        $this->PreviewItemResponseShape = $previewItemResponseShape;
        
        return $this;
    }
    /**
     * Get SortBy value
     * @return \StructType\EwsFieldOrderType|null
     */
    public function getSortBy(): ?\StructType\EwsFieldOrderType
    {
        return $this->SortBy;
    }
    /**
     * Set SortBy value
     * @param \StructType\EwsFieldOrderType $sortBy
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setSortBy(?\StructType\EwsFieldOrderType $sortBy = null): self
    {
        $this->SortBy = $sortBy;
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
    /**
     * Get Deduplication value
     * @return bool|null
     */
    public function getDeduplication(): ?bool
    {
        return $this->Deduplication;
    }
    /**
     * Set Deduplication value
     * @param bool $deduplication
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setDeduplication(?bool $deduplication = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deduplication) && !is_bool($deduplication)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deduplication, true), gettype($deduplication)), __LINE__);
        }
        $this->Deduplication = $deduplication;
        
        return $this;
    }
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get PageItemReference value
     * @return string|null
     */
    public function getPageItemReference(): ?string
    {
        return $this->PageItemReference;
    }
    /**
     * Set PageItemReference value
     * @param string $pageItemReference
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setPageItemReference(?string $pageItemReference = null): self
    {
        // validation for constraint: string
        if (!is_null($pageItemReference) && !is_string($pageItemReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageItemReference, true), gettype($pageItemReference)), __LINE__);
        }
        $this->PageItemReference = $pageItemReference;
        
        return $this;
    }
    /**
     * Get PageDirection value
     * @return string|null
     */
    public function getPageDirection(): ?string
    {
        return $this->PageDirection;
    }
    /**
     * Set PageDirection value
     * @uses \EnumType\EwsSearchPageDirectionType::valueIsValid()
     * @uses \EnumType\EwsSearchPageDirectionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pageDirection
     * @return \StructType\EwsSearchMailboxesType
     */
    public function setPageDirection(?string $pageDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchPageDirectionType::valueIsValid($pageDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchPageDirectionType', is_array($pageDirection) ? implode(', ', $pageDirection) : var_export($pageDirection, true), implode(', ', \EnumType\EwsSearchPageDirectionType::getValidValues())), __LINE__);
        }
        $this->PageDirection = $pageDirection;
        
        return $this;
    }
}
