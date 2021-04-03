<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSearch StructType
 * Meta information extracted from the WSDL
 * - type: m:ExecuteSearch
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExecuteSearch extends EwsBaseRequestType
{
    /**
     * The ApplicationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ApplicationId;
    /**
     * The Scenario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Scenario;
    /**
     * The SearchSessionId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $SearchSessionId;
    /**
     * The SearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsArrayOfSearchScopeType
     */
    protected \StructType\EwsArrayOfSearchScopeType $SearchScope;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Query;
    /**
     * The ItemTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ItemTypes;
    /**
     * The AnalyzedQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAnalyzedQuery|null
     */
    protected ?\StructType\EwsAnalyzedQuery $AnalyzedQuery = null;
    /**
     * The ResultRowCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ResultRowCount = null;
    /**
     * The ResultRowOffset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ResultRowOffset = null;
    /**
     * The MaxResultsCountHint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxResultsCountHint = null;
    /**
     * The MaxPreviewLength
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxPreviewLength = null;
    /**
     * The SearchRefiners
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSearchRefiners|null
     */
    protected ?\StructType\EwsSearchRefiners $SearchRefiners = null;
    /**
     * The RetrieveRefiners
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RetrieveRefiners = null;
    /**
     * The MaxRefinersCountPerRefinerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxRefinersCountPerRefinerType = null;
    /**
     * The IdFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdFormat = null;
    /**
     * The PropertySetName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PropertySetName = null;
    /**
     * The SearchRestrictions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $SearchRestrictions = null;
    /**
     * The IncludeDeleted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeDeleted = null;
    /**
     * Constructor method for ExecuteSearch
     * @uses EwsExecuteSearch::setApplicationId()
     * @uses EwsExecuteSearch::setScenario()
     * @uses EwsExecuteSearch::setSearchSessionId()
     * @uses EwsExecuteSearch::setSearchScope()
     * @uses EwsExecuteSearch::setQuery()
     * @uses EwsExecuteSearch::setItemTypes()
     * @uses EwsExecuteSearch::setAnalyzedQuery()
     * @uses EwsExecuteSearch::setResultRowCount()
     * @uses EwsExecuteSearch::setResultRowOffset()
     * @uses EwsExecuteSearch::setMaxResultsCountHint()
     * @uses EwsExecuteSearch::setMaxPreviewLength()
     * @uses EwsExecuteSearch::setSearchRefiners()
     * @uses EwsExecuteSearch::setRetrieveRefiners()
     * @uses EwsExecuteSearch::setMaxRefinersCountPerRefinerType()
     * @uses EwsExecuteSearch::setIdFormat()
     * @uses EwsExecuteSearch::setPropertySetName()
     * @uses EwsExecuteSearch::setSearchRestrictions()
     * @uses EwsExecuteSearch::setIncludeDeleted()
     * @param string $applicationId
     * @param string $scenario
     * @param string $searchSessionId
     * @param \StructType\EwsArrayOfSearchScopeType $searchScope
     * @param string $query
     * @param array|string $itemTypes
     * @param \StructType\EwsAnalyzedQuery $analyzedQuery
     * @param int $resultRowCount
     * @param int $resultRowOffset
     * @param int $maxResultsCountHint
     * @param int $maxPreviewLength
     * @param \StructType\EwsSearchRefiners $searchRefiners
     * @param bool $retrieveRefiners
     * @param int $maxRefinersCountPerRefinerType
     * @param string $idFormat
     * @param string $propertySetName
     * @param \StructType\EwsRestrictionType $searchRestrictions
     * @param bool $includeDeleted
     */
    public function __construct(string $applicationId, string $scenario, string $searchSessionId, \StructType\EwsArrayOfSearchScopeType $searchScope, string $query, $itemTypes, ?\StructType\EwsAnalyzedQuery $analyzedQuery = null, ?int $resultRowCount = null, ?int $resultRowOffset = null, ?int $maxResultsCountHint = null, ?int $maxPreviewLength = null, ?\StructType\EwsSearchRefiners $searchRefiners = null, ?bool $retrieveRefiners = null, ?int $maxRefinersCountPerRefinerType = null, ?string $idFormat = null, ?string $propertySetName = null, ?\StructType\EwsRestrictionType $searchRestrictions = null, ?bool $includeDeleted = null)
    {
        $this
            ->setApplicationId($applicationId)
            ->setScenario($scenario)
            ->setSearchSessionId($searchSessionId)
            ->setSearchScope($searchScope)
            ->setQuery($query)
            ->setItemTypes($itemTypes)
            ->setAnalyzedQuery($analyzedQuery)
            ->setResultRowCount($resultRowCount)
            ->setResultRowOffset($resultRowOffset)
            ->setMaxResultsCountHint($maxResultsCountHint)
            ->setMaxPreviewLength($maxPreviewLength)
            ->setSearchRefiners($searchRefiners)
            ->setRetrieveRefiners($retrieveRefiners)
            ->setMaxRefinersCountPerRefinerType($maxRefinersCountPerRefinerType)
            ->setIdFormat($idFormat)
            ->setPropertySetName($propertySetName)
            ->setSearchRestrictions($searchRestrictions)
            ->setIncludeDeleted($includeDeleted);
    }
    /**
     * Get ApplicationId value
     * @return string
     */
    public function getApplicationId(): string
    {
        return $this->ApplicationId;
    }
    /**
     * Set ApplicationId value
     * @uses \EnumType\EwsSearchApplicationIdType::valueIsValid()
     * @uses \EnumType\EwsSearchApplicationIdType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $applicationId
     * @return \StructType\EwsExecuteSearch
     */
    public function setApplicationId(string $applicationId): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchApplicationIdType::valueIsValid($applicationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchApplicationIdType', is_array($applicationId) ? implode(', ', $applicationId) : var_export($applicationId, true), implode(', ', \EnumType\EwsSearchApplicationIdType::getValidValues())), __LINE__);
        }
        $this->ApplicationId = $applicationId;
        
        return $this;
    }
    /**
     * Get Scenario value
     * @return string
     */
    public function getScenario(): string
    {
        return $this->Scenario;
    }
    /**
     * Set Scenario value
     * @param string $scenario
     * @return \StructType\EwsExecuteSearch
     */
    public function setScenario(string $scenario): self
    {
        // validation for constraint: string
        if (!is_null($scenario) && !is_string($scenario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scenario, true), gettype($scenario)), __LINE__);
        }
        $this->Scenario = $scenario;
        
        return $this;
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
     * @return \StructType\EwsExecuteSearch
     */
    public function setSearchSessionId(string $searchSessionId): self
    {
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($searchSessionId, true)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        
        return $this;
    }
    /**
     * Get SearchScope value
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function getSearchScope(): \StructType\EwsArrayOfSearchScopeType
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @param \StructType\EwsArrayOfSearchScopeType $searchScope
     * @return \StructType\EwsExecuteSearch
     */
    public function setSearchScope(\StructType\EwsArrayOfSearchScopeType $searchScope): self
    {
        $this->SearchScope = $searchScope;
        
        return $this;
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery(): string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\EwsExecuteSearch
     */
    public function setQuery(string $query): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        
        return $this;
    }
    /**
     * Get ItemTypes value
     * @return string
     */
    public function getItemTypes(): string
    {
        return $this->ItemTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setItemTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTypesForArrayConstraintsFromSetItemTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeSearchItemTypesItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsItemTypesFilterType::valueIsValid($executeSearchItemTypesItem)) {
                $invalidValues[] = is_object($executeSearchItemTypesItem) ? get_class($executeSearchItemTypesItem) : sprintf('%s(%s)', gettype($executeSearchItemTypesItem), var_export($executeSearchItemTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsItemTypesFilterType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsItemTypesFilterType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemTypes value
     * @uses \EnumType\EwsItemTypesFilterType::valueIsValid()
     * @uses \EnumType\EwsItemTypesFilterType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $itemTypes
     * @return \StructType\EwsExecuteSearch
     */
    public function setItemTypes($itemTypes): self
    {
        // validation for constraint: list
        if ('' !== ($itemTypesArrayErrorMessage = self::validateItemTypesForArrayConstraintsFromSetItemTypes(is_string($itemTypes) ? explode(' ', $itemTypes) : $itemTypes))) {
            throw new InvalidArgumentException($itemTypesArrayErrorMessage, __LINE__);
        }
        $this->ItemTypes = is_array($itemTypes) ? implode(' ', $itemTypes) : $itemTypes;
        
        return $this;
    }
    /**
     * Get AnalyzedQuery value
     * @return \StructType\EwsAnalyzedQuery|null
     */
    public function getAnalyzedQuery(): ?\StructType\EwsAnalyzedQuery
    {
        return $this->AnalyzedQuery;
    }
    /**
     * Set AnalyzedQuery value
     * @param \StructType\EwsAnalyzedQuery $analyzedQuery
     * @return \StructType\EwsExecuteSearch
     */
    public function setAnalyzedQuery(?\StructType\EwsAnalyzedQuery $analyzedQuery = null): self
    {
        $this->AnalyzedQuery = $analyzedQuery;
        
        return $this;
    }
    /**
     * Get ResultRowCount value
     * @return int|null
     */
    public function getResultRowCount(): ?int
    {
        return $this->ResultRowCount;
    }
    /**
     * Set ResultRowCount value
     * @param int $resultRowCount
     * @return \StructType\EwsExecuteSearch
     */
    public function setResultRowCount(?int $resultRowCount = null): self
    {
        // validation for constraint: int
        if (!is_null($resultRowCount) && !(is_int($resultRowCount) || ctype_digit($resultRowCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resultRowCount, true), gettype($resultRowCount)), __LINE__);
        }
        $this->ResultRowCount = $resultRowCount;
        
        return $this;
    }
    /**
     * Get ResultRowOffset value
     * @return int|null
     */
    public function getResultRowOffset(): ?int
    {
        return $this->ResultRowOffset;
    }
    /**
     * Set ResultRowOffset value
     * @param int $resultRowOffset
     * @return \StructType\EwsExecuteSearch
     */
    public function setResultRowOffset(?int $resultRowOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($resultRowOffset) && !(is_int($resultRowOffset) || ctype_digit($resultRowOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resultRowOffset, true), gettype($resultRowOffset)), __LINE__);
        }
        $this->ResultRowOffset = $resultRowOffset;
        
        return $this;
    }
    /**
     * Get MaxResultsCountHint value
     * @return int|null
     */
    public function getMaxResultsCountHint(): ?int
    {
        return $this->MaxResultsCountHint;
    }
    /**
     * Set MaxResultsCountHint value
     * @param int $maxResultsCountHint
     * @return \StructType\EwsExecuteSearch
     */
    public function setMaxResultsCountHint(?int $maxResultsCountHint = null): self
    {
        // validation for constraint: int
        if (!is_null($maxResultsCountHint) && !(is_int($maxResultsCountHint) || ctype_digit($maxResultsCountHint))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResultsCountHint, true), gettype($maxResultsCountHint)), __LINE__);
        }
        $this->MaxResultsCountHint = $maxResultsCountHint;
        
        return $this;
    }
    /**
     * Get MaxPreviewLength value
     * @return int|null
     */
    public function getMaxPreviewLength(): ?int
    {
        return $this->MaxPreviewLength;
    }
    /**
     * Set MaxPreviewLength value
     * @param int $maxPreviewLength
     * @return \StructType\EwsExecuteSearch
     */
    public function setMaxPreviewLength(?int $maxPreviewLength = null): self
    {
        // validation for constraint: int
        if (!is_null($maxPreviewLength) && !(is_int($maxPreviewLength) || ctype_digit($maxPreviewLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxPreviewLength, true), gettype($maxPreviewLength)), __LINE__);
        }
        $this->MaxPreviewLength = $maxPreviewLength;
        
        return $this;
    }
    /**
     * Get SearchRefiners value
     * @return \StructType\EwsSearchRefiners|null
     */
    public function getSearchRefiners(): ?\StructType\EwsSearchRefiners
    {
        return $this->SearchRefiners;
    }
    /**
     * Set SearchRefiners value
     * @param \StructType\EwsSearchRefiners $searchRefiners
     * @return \StructType\EwsExecuteSearch
     */
    public function setSearchRefiners(?\StructType\EwsSearchRefiners $searchRefiners = null): self
    {
        $this->SearchRefiners = $searchRefiners;
        
        return $this;
    }
    /**
     * Get RetrieveRefiners value
     * @return bool|null
     */
    public function getRetrieveRefiners(): ?bool
    {
        return $this->RetrieveRefiners;
    }
    /**
     * Set RetrieveRefiners value
     * @param bool $retrieveRefiners
     * @return \StructType\EwsExecuteSearch
     */
    public function setRetrieveRefiners(?bool $retrieveRefiners = null): self
    {
        // validation for constraint: boolean
        if (!is_null($retrieveRefiners) && !is_bool($retrieveRefiners)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retrieveRefiners, true), gettype($retrieveRefiners)), __LINE__);
        }
        $this->RetrieveRefiners = $retrieveRefiners;
        
        return $this;
    }
    /**
     * Get MaxRefinersCountPerRefinerType value
     * @return int|null
     */
    public function getMaxRefinersCountPerRefinerType(): ?int
    {
        return $this->MaxRefinersCountPerRefinerType;
    }
    /**
     * Set MaxRefinersCountPerRefinerType value
     * @param int $maxRefinersCountPerRefinerType
     * @return \StructType\EwsExecuteSearch
     */
    public function setMaxRefinersCountPerRefinerType(?int $maxRefinersCountPerRefinerType = null): self
    {
        // validation for constraint: int
        if (!is_null($maxRefinersCountPerRefinerType) && !(is_int($maxRefinersCountPerRefinerType) || ctype_digit($maxRefinersCountPerRefinerType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxRefinersCountPerRefinerType, true), gettype($maxRefinersCountPerRefinerType)), __LINE__);
        }
        $this->MaxRefinersCountPerRefinerType = $maxRefinersCountPerRefinerType;
        
        return $this;
    }
    /**
     * Get IdFormat value
     * @return string|null
     */
    public function getIdFormat(): ?string
    {
        return $this->IdFormat;
    }
    /**
     * Set IdFormat value
     * @uses \EnumType\EwsIdFormatType::valueIsValid()
     * @uses \EnumType\EwsIdFormatType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $idFormat
     * @return \StructType\EwsExecuteSearch
     */
    public function setIdFormat(?string $idFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsIdFormatType::valueIsValid($idFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsIdFormatType', is_array($idFormat) ? implode(', ', $idFormat) : var_export($idFormat, true), implode(', ', \EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->IdFormat = $idFormat;
        
        return $this;
    }
    /**
     * Get PropertySetName value
     * @return string|null
     */
    public function getPropertySetName(): ?string
    {
        return $this->PropertySetName;
    }
    /**
     * Set PropertySetName value
     * @uses \EnumType\EwsSearchResultsPropertySetNameType::valueIsValid()
     * @uses \EnumType\EwsSearchResultsPropertySetNameType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $propertySetName
     * @return \StructType\EwsExecuteSearch
     */
    public function setPropertySetName(?string $propertySetName = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchResultsPropertySetNameType::valueIsValid($propertySetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchResultsPropertySetNameType', is_array($propertySetName) ? implode(', ', $propertySetName) : var_export($propertySetName, true), implode(', ', \EnumType\EwsSearchResultsPropertySetNameType::getValidValues())), __LINE__);
        }
        $this->PropertySetName = $propertySetName;
        
        return $this;
    }
    /**
     * Get SearchRestrictions value
     * @return \StructType\EwsRestrictionType|null
     */
    public function getSearchRestrictions(): ?\StructType\EwsRestrictionType
    {
        return $this->SearchRestrictions;
    }
    /**
     * Set SearchRestrictions value
     * @param \StructType\EwsRestrictionType $searchRestrictions
     * @return \StructType\EwsExecuteSearch
     */
    public function setSearchRestrictions(?\StructType\EwsRestrictionType $searchRestrictions = null): self
    {
        $this->SearchRestrictions = $searchRestrictions;
        
        return $this;
    }
    /**
     * Get IncludeDeleted value
     * @return bool|null
     */
    public function getIncludeDeleted(): ?bool
    {
        return $this->IncludeDeleted;
    }
    /**
     * Set IncludeDeleted value
     * @param bool $includeDeleted
     * @return \StructType\EwsExecuteSearch
     */
    public function setIncludeDeleted(?bool $includeDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeDeleted) && !is_bool($includeDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDeleted, true), gettype($includeDeleted)), __LINE__);
        }
        $this->IncludeDeleted = $includeDeleted;
        
        return $this;
    }
}
