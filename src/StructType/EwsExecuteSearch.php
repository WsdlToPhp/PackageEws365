<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSearch StructType
 * Meta informations extracted from the WSDL
 * - type: m:ExecuteSearch
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExecuteSearch extends EwsBaseRequestType
{
    /**
     * The ApplicationId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ApplicationId;
    /**
     * The Scenario
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Scenario;
    /**
     * The SearchSessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $SearchSessionId;
    /**
     * The SearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public $SearchScope;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Query;
    /**
     * The ItemTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ItemTypes;
    /**
     * The AnalyzedQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAnalyzedQuery
     */
    public $AnalyzedQuery;
    /**
     * The ResultRowCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ResultRowCount;
    /**
     * The ResultRowOffset
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ResultRowOffset;
    /**
     * The MaxResultsCountHint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxResultsCountHint;
    /**
     * The MaxPreviewLength
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxPreviewLength;
    /**
     * The SearchRefiners
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchRefiners
     */
    public $SearchRefiners;
    /**
     * The RetrieveRefiners
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RetrieveRefiners;
    /**
     * The MaxRefinersCountPerRefinerType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxRefinersCountPerRefinerType;
    /**
     * The IdFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdFormat;
    /**
     * The PropertySetName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PropertySetName;
    /**
     * The SearchRestrictions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $SearchRestrictions;
    /**
     * The IncludeDeleted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeDeleted;
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
     * @param \Ews\StructType\EwsArrayOfSearchScopeType $searchScope
     * @param string $query
     * @param string $itemTypes
     * @param \Ews\StructType\EwsAnalyzedQuery $analyzedQuery
     * @param int $resultRowCount
     * @param int $resultRowOffset
     * @param int $maxResultsCountHint
     * @param int $maxPreviewLength
     * @param \Ews\StructType\EwsSearchRefiners $searchRefiners
     * @param bool $retrieveRefiners
     * @param int $maxRefinersCountPerRefinerType
     * @param string $idFormat
     * @param string $propertySetName
     * @param \Ews\StructType\EwsRestrictionType $searchRestrictions
     * @param bool $includeDeleted
     */
    public function __construct($applicationId = null, $scenario = null, $searchSessionId = null, \Ews\StructType\EwsArrayOfSearchScopeType $searchScope = null, $query = null, $itemTypes = null, \Ews\StructType\EwsAnalyzedQuery $analyzedQuery = null, $resultRowCount = null, $resultRowOffset = null, $maxResultsCountHint = null, $maxPreviewLength = null, \Ews\StructType\EwsSearchRefiners $searchRefiners = null, $retrieveRefiners = null, $maxRefinersCountPerRefinerType = null, $idFormat = null, $propertySetName = null, \Ews\StructType\EwsRestrictionType $searchRestrictions = null, $includeDeleted = null)
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
    public function getApplicationId()
    {
        return $this->ApplicationId;
    }
    /**
     * Set ApplicationId value
     * @uses \Ews\EnumType\EwsSearchApplicationIdType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchApplicationIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $applicationId
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setApplicationId($applicationId = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchApplicationIdType::valueIsValid($applicationId)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $applicationId, implode(', ', \Ews\EnumType\EwsSearchApplicationIdType::getValidValues())), __LINE__);
        }
        $this->ApplicationId = $applicationId;
        return $this;
    }
    /**
     * Get Scenario value
     * @return string
     */
    public function getScenario()
    {
        return $this->Scenario;
    }
    /**
     * Set Scenario value
     * @param string $scenario
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setScenario($scenario = null)
    {
        // validation for constraint: string
        if (!is_null($scenario) && !is_string($scenario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scenario)), __LINE__);
        }
        $this->Scenario = $scenario;
        return $this;
    }
    /**
     * Get SearchSessionId value
     * @return string
     */
    public function getSearchSessionId()
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        // validation for constraint: pattern
        if (!is_null($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get SearchScope value
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function getSearchScope()
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @param \Ews\StructType\EwsArrayOfSearchScopeType $searchScope
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setSearchScope(\Ews\StructType\EwsArrayOfSearchScopeType $searchScope = null)
    {
        $this->SearchScope = $searchScope;
        return $this;
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Get ItemTypes value
     * @return string
     */
    public function getItemTypes()
    {
        return $this->ItemTypes;
    }
    /**
     * Set ItemTypes value
     * @uses \Ews\EnumType\EwsItemTypesFilterType::valueIsValid()
     * @uses \Ews\EnumType\EwsItemTypesFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemTypes
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setItemTypes($itemTypes = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsItemTypesFilterType::valueIsValid($itemTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemTypes, implode(', ', \Ews\EnumType\EwsItemTypesFilterType::getValidValues())), __LINE__);
        }
        $this->ItemTypes = $itemTypes;
        return $this;
    }
    /**
     * Get AnalyzedQuery value
     * @return \Ews\StructType\EwsAnalyzedQuery|null
     */
    public function getAnalyzedQuery()
    {
        return $this->AnalyzedQuery;
    }
    /**
     * Set AnalyzedQuery value
     * @param \Ews\StructType\EwsAnalyzedQuery $analyzedQuery
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setAnalyzedQuery(\Ews\StructType\EwsAnalyzedQuery $analyzedQuery = null)
    {
        $this->AnalyzedQuery = $analyzedQuery;
        return $this;
    }
    /**
     * Get ResultRowCount value
     * @return int|null
     */
    public function getResultRowCount()
    {
        return $this->ResultRowCount;
    }
    /**
     * Set ResultRowCount value
     * @param int $resultRowCount
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setResultRowCount($resultRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($resultRowCount) && !is_int($resultRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($resultRowCount)), __LINE__);
        }
        $this->ResultRowCount = $resultRowCount;
        return $this;
    }
    /**
     * Get ResultRowOffset value
     * @return int|null
     */
    public function getResultRowOffset()
    {
        return $this->ResultRowOffset;
    }
    /**
     * Set ResultRowOffset value
     * @param int $resultRowOffset
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setResultRowOffset($resultRowOffset = null)
    {
        // validation for constraint: int
        if (!is_null($resultRowOffset) && !is_int($resultRowOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($resultRowOffset)), __LINE__);
        }
        $this->ResultRowOffset = $resultRowOffset;
        return $this;
    }
    /**
     * Get MaxResultsCountHint value
     * @return int|null
     */
    public function getMaxResultsCountHint()
    {
        return $this->MaxResultsCountHint;
    }
    /**
     * Set MaxResultsCountHint value
     * @param int $maxResultsCountHint
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setMaxResultsCountHint($maxResultsCountHint = null)
    {
        // validation for constraint: int
        if (!is_null($maxResultsCountHint) && !is_int($maxResultsCountHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($maxResultsCountHint)), __LINE__);
        }
        $this->MaxResultsCountHint = $maxResultsCountHint;
        return $this;
    }
    /**
     * Get MaxPreviewLength value
     * @return int|null
     */
    public function getMaxPreviewLength()
    {
        return $this->MaxPreviewLength;
    }
    /**
     * Set MaxPreviewLength value
     * @param int $maxPreviewLength
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setMaxPreviewLength($maxPreviewLength = null)
    {
        // validation for constraint: int
        if (!is_null($maxPreviewLength) && !is_int($maxPreviewLength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($maxPreviewLength)), __LINE__);
        }
        $this->MaxPreviewLength = $maxPreviewLength;
        return $this;
    }
    /**
     * Get SearchRefiners value
     * @return \Ews\StructType\EwsSearchRefiners|null
     */
    public function getSearchRefiners()
    {
        return $this->SearchRefiners;
    }
    /**
     * Set SearchRefiners value
     * @param \Ews\StructType\EwsSearchRefiners $searchRefiners
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setSearchRefiners(\Ews\StructType\EwsSearchRefiners $searchRefiners = null)
    {
        $this->SearchRefiners = $searchRefiners;
        return $this;
    }
    /**
     * Get RetrieveRefiners value
     * @return bool|null
     */
    public function getRetrieveRefiners()
    {
        return $this->RetrieveRefiners;
    }
    /**
     * Set RetrieveRefiners value
     * @param bool $retrieveRefiners
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setRetrieveRefiners($retrieveRefiners = null)
    {
        $this->RetrieveRefiners = $retrieveRefiners;
        return $this;
    }
    /**
     * Get MaxRefinersCountPerRefinerType value
     * @return int|null
     */
    public function getMaxRefinersCountPerRefinerType()
    {
        return $this->MaxRefinersCountPerRefinerType;
    }
    /**
     * Set MaxRefinersCountPerRefinerType value
     * @param int $maxRefinersCountPerRefinerType
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setMaxRefinersCountPerRefinerType($maxRefinersCountPerRefinerType = null)
    {
        // validation for constraint: int
        if (!is_null($maxRefinersCountPerRefinerType) && !is_int($maxRefinersCountPerRefinerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($maxRefinersCountPerRefinerType)), __LINE__);
        }
        $this->MaxRefinersCountPerRefinerType = $maxRefinersCountPerRefinerType;
        return $this;
    }
    /**
     * Get IdFormat value
     * @return string|null
     */
    public function getIdFormat()
    {
        return $this->IdFormat;
    }
    /**
     * Set IdFormat value
     * @uses \Ews\EnumType\EwsIdFormatType::valueIsValid()
     * @uses \Ews\EnumType\EwsIdFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $idFormat
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setIdFormat($idFormat = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIdFormatType::valueIsValid($idFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $idFormat, implode(', ', \Ews\EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->IdFormat = $idFormat;
        return $this;
    }
    /**
     * Get PropertySetName value
     * @return string|null
     */
    public function getPropertySetName()
    {
        return $this->PropertySetName;
    }
    /**
     * Set PropertySetName value
     * @uses \Ews\EnumType\EwsSearchResultsPropertySetNameType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchResultsPropertySetNameType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $propertySetName
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setPropertySetName($propertySetName = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchResultsPropertySetNameType::valueIsValid($propertySetName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $propertySetName, implode(', ', \Ews\EnumType\EwsSearchResultsPropertySetNameType::getValidValues())), __LINE__);
        }
        $this->PropertySetName = $propertySetName;
        return $this;
    }
    /**
     * Get SearchRestrictions value
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getSearchRestrictions()
    {
        return $this->SearchRestrictions;
    }
    /**
     * Set SearchRestrictions value
     * @param \Ews\StructType\EwsRestrictionType $searchRestrictions
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setSearchRestrictions(\Ews\StructType\EwsRestrictionType $searchRestrictions = null)
    {
        $this->SearchRestrictions = $searchRestrictions;
        return $this;
    }
    /**
     * Get IncludeDeleted value
     * @return bool|null
     */
    public function getIncludeDeleted()
    {
        return $this->IncludeDeleted;
    }
    /**
     * Set IncludeDeleted value
     * @param bool $includeDeleted
     * @return \Ews\StructType\EwsExecuteSearch
     */
    public function setIncludeDeleted($includeDeleted = null)
    {
        $this->IncludeDeleted = $includeDeleted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExecuteSearch
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
