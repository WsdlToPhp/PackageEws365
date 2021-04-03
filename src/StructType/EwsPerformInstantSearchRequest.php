<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformInstantSearchRequest StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPerformInstantSearchRequest extends EwsBaseRequestType
{
    /**
     * The SearchSessionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SearchSessionId;
    /**
     * The ItemType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ItemType;
    /**
     * The QueryOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $QueryOptions;
    /**
     * The SearchRequestId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $SearchRequestId;
    /**
     * The KqlQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $KqlQuery;
    /**
     * The FolderScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfFolderIdType
     */
    protected \ArrayType\EwsArrayOfFolderIdType $FolderScope;
    /**
     * The DistinguishedFolderScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfDistinguishedFolderIdType|null
     */
    protected ?\ArrayType\EwsArrayOfDistinguishedFolderIdType $DistinguishedFolderScope = null;
    /**
     * The IsDeepTraversal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDeepTraversal = null;
    /**
     * The WaitOnSearchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $WaitOnSearchResults = null;
    /**
     * Constructor method for PerformInstantSearchRequest
     * @uses EwsPerformInstantSearchRequest::setSearchSessionId()
     * @uses EwsPerformInstantSearchRequest::setItemType()
     * @uses EwsPerformInstantSearchRequest::setQueryOptions()
     * @uses EwsPerformInstantSearchRequest::setSearchRequestId()
     * @uses EwsPerformInstantSearchRequest::setKqlQuery()
     * @uses EwsPerformInstantSearchRequest::setFolderScope()
     * @uses EwsPerformInstantSearchRequest::setDistinguishedFolderScope()
     * @uses EwsPerformInstantSearchRequest::setIsDeepTraversal()
     * @uses EwsPerformInstantSearchRequest::setWaitOnSearchResults()
     * @param string $searchSessionId
     * @param array|string $itemType
     * @param array|string $queryOptions
     * @param int $searchRequestId
     * @param string $kqlQuery
     * @param \ArrayType\EwsArrayOfFolderIdType $folderScope
     * @param \ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope
     * @param bool $isDeepTraversal
     * @param bool $waitOnSearchResults
     */
    public function __construct(string $searchSessionId, $itemType, $queryOptions, int $searchRequestId, string $kqlQuery, \ArrayType\EwsArrayOfFolderIdType $folderScope, ?\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope = null, ?bool $isDeepTraversal = null, ?bool $waitOnSearchResults = null)
    {
        $this
            ->setSearchSessionId($searchSessionId)
            ->setItemType($itemType)
            ->setQueryOptions($queryOptions)
            ->setSearchRequestId($searchRequestId)
            ->setKqlQuery($kqlQuery)
            ->setFolderScope($folderScope)
            ->setDistinguishedFolderScope($distinguishedFolderScope)
            ->setIsDeepTraversal($isDeepTraversal)
            ->setWaitOnSearchResults($waitOnSearchResults);
    }
    /**
     * Get SearchSessionId value
     * @return string
     */
    public function getSearchSessionId(): string
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setSearchSessionId(string $searchSessionId): self
    {
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        
        return $this;
    }
    /**
     * Get ItemType value
     * @return string
     */
    public function getItemType(): string
    {
        return $this->ItemType;
    }
    /**
     * This method is responsible for validating the values passed to the setItemType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTypeForArrayConstraintsFromSetItemType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performInstantSearchRequestItemTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsInstantSearchItemType::valueIsValid($performInstantSearchRequestItemTypeItem)) {
                $invalidValues[] = is_object($performInstantSearchRequestItemTypeItem) ? get_class($performInstantSearchRequestItemTypeItem) : sprintf('%s(%s)', gettype($performInstantSearchRequestItemTypeItem), var_export($performInstantSearchRequestItemTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsInstantSearchItemType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsInstantSearchItemType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemType value
     * @uses \EnumType\EwsInstantSearchItemType::valueIsValid()
     * @uses \EnumType\EwsInstantSearchItemType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $itemType
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setItemType($itemType): self
    {
        // validation for constraint: list
        if ('' !== ($itemTypeArrayErrorMessage = self::validateItemTypeForArrayConstraintsFromSetItemType(is_string($itemType) ? explode(' ', $itemType) : $itemType))) {
            throw new InvalidArgumentException($itemTypeArrayErrorMessage, __LINE__);
        }
        $this->ItemType = is_array($itemType) ? implode(' ', $itemType) : $itemType;
        
        return $this;
    }
    /**
     * Get QueryOptions value
     * @return string
     */
    public function getQueryOptions(): string
    {
        return $this->QueryOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setQueryOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQueryOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQueryOptionsForArrayConstraintsFromSetQueryOptions(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performInstantSearchRequestQueryOptionsItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsQueryOptionsType::valueIsValid($performInstantSearchRequestQueryOptionsItem)) {
                $invalidValues[] = is_object($performInstantSearchRequestQueryOptionsItem) ? get_class($performInstantSearchRequestQueryOptionsItem) : sprintf('%s(%s)', gettype($performInstantSearchRequestQueryOptionsItem), var_export($performInstantSearchRequestQueryOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsQueryOptionsType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsQueryOptionsType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set QueryOptions value
     * @uses \EnumType\EwsQueryOptionsType::valueIsValid()
     * @uses \EnumType\EwsQueryOptionsType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $queryOptions
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setQueryOptions($queryOptions): self
    {
        // validation for constraint: list
        if ('' !== ($queryOptionsArrayErrorMessage = self::validateQueryOptionsForArrayConstraintsFromSetQueryOptions(is_string($queryOptions) ? explode(' ', $queryOptions) : $queryOptions))) {
            throw new InvalidArgumentException($queryOptionsArrayErrorMessage, __LINE__);
        }
        $this->QueryOptions = is_array($queryOptions) ? implode(' ', $queryOptions) : $queryOptions;
        
        return $this;
    }
    /**
     * Get SearchRequestId value
     * @return int
     */
    public function getSearchRequestId(): int
    {
        return $this->SearchRequestId;
    }
    /**
     * Set SearchRequestId value
     * @param int $searchRequestId
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setSearchRequestId(int $searchRequestId): self
    {
        // validation for constraint: int
        if (!is_null($searchRequestId) && !(is_int($searchRequestId) || ctype_digit($searchRequestId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchRequestId, true), gettype($searchRequestId)), __LINE__);
        }
        $this->SearchRequestId = $searchRequestId;
        
        return $this;
    }
    /**
     * Get KqlQuery value
     * @return string
     */
    public function getKqlQuery(): string
    {
        return $this->KqlQuery;
    }
    /**
     * Set KqlQuery value
     * @param string $kqlQuery
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setKqlQuery(string $kqlQuery): self
    {
        // validation for constraint: string
        if (!is_null($kqlQuery) && !is_string($kqlQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kqlQuery, true), gettype($kqlQuery)), __LINE__);
        }
        $this->KqlQuery = $kqlQuery;
        
        return $this;
    }
    /**
     * Get FolderScope value
     * @return \ArrayType\EwsArrayOfFolderIdType
     */
    public function getFolderScope(): \ArrayType\EwsArrayOfFolderIdType
    {
        return $this->FolderScope;
    }
    /**
     * Set FolderScope value
     * @param \ArrayType\EwsArrayOfFolderIdType $folderScope
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setFolderScope(\ArrayType\EwsArrayOfFolderIdType $folderScope): self
    {
        $this->FolderScope = $folderScope;
        
        return $this;
    }
    /**
     * Get DistinguishedFolderScope value
     * @return \ArrayType\EwsArrayOfDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderScope(): ?\ArrayType\EwsArrayOfDistinguishedFolderIdType
    {
        return $this->DistinguishedFolderScope;
    }
    /**
     * Set DistinguishedFolderScope value
     * @param \ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setDistinguishedFolderScope(?\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope = null): self
    {
        $this->DistinguishedFolderScope = $distinguishedFolderScope;
        
        return $this;
    }
    /**
     * Get IsDeepTraversal value
     * @return bool|null
     */
    public function getIsDeepTraversal(): ?bool
    {
        return $this->IsDeepTraversal;
    }
    /**
     * Set IsDeepTraversal value
     * @param bool $isDeepTraversal
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setIsDeepTraversal(?bool $isDeepTraversal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeepTraversal) && !is_bool($isDeepTraversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeepTraversal, true), gettype($isDeepTraversal)), __LINE__);
        }
        $this->IsDeepTraversal = $isDeepTraversal;
        
        return $this;
    }
    /**
     * Get WaitOnSearchResults value
     * @return bool|null
     */
    public function getWaitOnSearchResults(): ?bool
    {
        return $this->WaitOnSearchResults;
    }
    /**
     * Set WaitOnSearchResults value
     * @param bool $waitOnSearchResults
     * @return \StructType\EwsPerformInstantSearchRequest
     */
    public function setWaitOnSearchResults(?bool $waitOnSearchResults = null): self
    {
        // validation for constraint: boolean
        if (!is_null($waitOnSearchResults) && !is_bool($waitOnSearchResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waitOnSearchResults, true), gettype($waitOnSearchResults)), __LINE__);
        }
        $this->WaitOnSearchResults = $waitOnSearchResults;
        
        return $this;
    }
}
