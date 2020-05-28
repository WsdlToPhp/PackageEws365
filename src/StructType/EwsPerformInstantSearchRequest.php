<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $SearchSessionId;
    /**
     * The ItemType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $ItemType;
    /**
     * The QueryOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $QueryOptions;
    /**
     * The SearchRequestId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SearchRequestId;
    /**
     * The KqlQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $KqlQuery;
    /**
     * The FolderScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfFolderIdType
     */
    public $FolderScope;
    /**
     * The DistinguishedFolderScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType
     */
    public $DistinguishedFolderScope;
    /**
     * The IsDeepTraversal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsDeepTraversal;
    /**
     * The WaitOnSearchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $WaitOnSearchResults;
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
     * @param string[] $itemType
     * @param string[] $queryOptions
     * @param int $searchRequestId
     * @param string $kqlQuery
     * @param \Ews\ArrayType\EwsArrayOfFolderIdType $folderScope
     * @param \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope
     * @param bool $isDeepTraversal
     * @param bool $waitOnSearchResults
     */
    public function __construct($searchSessionId = null, array $itemType = array(), array $queryOptions = array(), $searchRequestId = null, $kqlQuery = null, \Ews\ArrayType\EwsArrayOfFolderIdType $folderScope = null, \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope = null, $isDeepTraversal = null, $waitOnSearchResults = null)
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
    public function getSearchSessionId()
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get ItemType value
     * @return string[]
     */
    public function getItemType()
    {
        return $this->ItemType;
    }
    /**
     * This method is responsible for validating the values passed to the setItemType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTypeForArrayConstraintsFromSetItemType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performInstantSearchRequestItemTypeItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsInstantSearchItemType::valueIsValid($performInstantSearchRequestItemTypeItem)) {
                $invalidValues[] = is_object($performInstantSearchRequestItemTypeItem) ? get_class($performInstantSearchRequestItemTypeItem) : sprintf('%s(%s)', gettype($performInstantSearchRequestItemTypeItem), var_export($performInstantSearchRequestItemTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsInstantSearchItemType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsInstantSearchItemType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemType value
     * @uses \Ews\EnumType\EwsInstantSearchItemType::valueIsValid()
     * @uses \Ews\EnumType\EwsInstantSearchItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $itemType
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setItemType(array $itemType = array())
    {
        // validation for constraint: list
        if ('' !== ($itemTypeArrayErrorMessage = self::validateItemTypeForArrayConstraintsFromSetItemType($itemType))) {
            throw new \InvalidArgumentException($itemTypeArrayErrorMessage, __LINE__);
        }
        $this->ItemType = is_array($itemType) ? implode(' ', $itemType) : null;
        return $this;
    }
    /**
     * Get QueryOptions value
     * @return string[]
     */
    public function getQueryOptions()
    {
        return $this->QueryOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setQueryOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQueryOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQueryOptionsForArrayConstraintsFromSetQueryOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performInstantSearchRequestQueryOptionsItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsQueryOptionsType::valueIsValid($performInstantSearchRequestQueryOptionsItem)) {
                $invalidValues[] = is_object($performInstantSearchRequestQueryOptionsItem) ? get_class($performInstantSearchRequestQueryOptionsItem) : sprintf('%s(%s)', gettype($performInstantSearchRequestQueryOptionsItem), var_export($performInstantSearchRequestQueryOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsQueryOptionsType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsQueryOptionsType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set QueryOptions value
     * @uses \Ews\EnumType\EwsQueryOptionsType::valueIsValid()
     * @uses \Ews\EnumType\EwsQueryOptionsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $queryOptions
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setQueryOptions(array $queryOptions = array())
    {
        // validation for constraint: list
        if ('' !== ($queryOptionsArrayErrorMessage = self::validateQueryOptionsForArrayConstraintsFromSetQueryOptions($queryOptions))) {
            throw new \InvalidArgumentException($queryOptionsArrayErrorMessage, __LINE__);
        }
        $this->QueryOptions = is_array($queryOptions) ? implode(' ', $queryOptions) : null;
        return $this;
    }
    /**
     * Get SearchRequestId value
     * @return int
     */
    public function getSearchRequestId()
    {
        return $this->SearchRequestId;
    }
    /**
     * Set SearchRequestId value
     * @param int $searchRequestId
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setSearchRequestId($searchRequestId = null)
    {
        // validation for constraint: int
        if (!is_null($searchRequestId) && !(is_int($searchRequestId) || ctype_digit($searchRequestId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchRequestId, true), gettype($searchRequestId)), __LINE__);
        }
        $this->SearchRequestId = $searchRequestId;
        return $this;
    }
    /**
     * Get KqlQuery value
     * @return string
     */
    public function getKqlQuery()
    {
        return $this->KqlQuery;
    }
    /**
     * Set KqlQuery value
     * @param string $kqlQuery
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setKqlQuery($kqlQuery = null)
    {
        // validation for constraint: string
        if (!is_null($kqlQuery) && !is_string($kqlQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kqlQuery, true), gettype($kqlQuery)), __LINE__);
        }
        $this->KqlQuery = $kqlQuery;
        return $this;
    }
    /**
     * Get FolderScope value
     * @return \Ews\ArrayType\EwsArrayOfFolderIdType
     */
    public function getFolderScope()
    {
        return $this->FolderScope;
    }
    /**
     * Set FolderScope value
     * @param \Ews\ArrayType\EwsArrayOfFolderIdType $folderScope
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setFolderScope(\Ews\ArrayType\EwsArrayOfFolderIdType $folderScope = null)
    {
        $this->FolderScope = $folderScope;
        return $this;
    }
    /**
     * Get DistinguishedFolderScope value
     * @return \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderScope()
    {
        return $this->DistinguishedFolderScope;
    }
    /**
     * Set DistinguishedFolderScope value
     * @param \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setDistinguishedFolderScope(\Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope = null)
    {
        $this->DistinguishedFolderScope = $distinguishedFolderScope;
        return $this;
    }
    /**
     * Get IsDeepTraversal value
     * @return bool|null
     */
    public function getIsDeepTraversal()
    {
        return $this->IsDeepTraversal;
    }
    /**
     * Set IsDeepTraversal value
     * @param bool $isDeepTraversal
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setIsDeepTraversal($isDeepTraversal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDeepTraversal) && !is_bool($isDeepTraversal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeepTraversal, true), gettype($isDeepTraversal)), __LINE__);
        }
        $this->IsDeepTraversal = $isDeepTraversal;
        return $this;
    }
    /**
     * Get WaitOnSearchResults value
     * @return bool|null
     */
    public function getWaitOnSearchResults()
    {
        return $this->WaitOnSearchResults;
    }
    /**
     * Set WaitOnSearchResults value
     * @param bool $waitOnSearchResults
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setWaitOnSearchResults($waitOnSearchResults = null)
    {
        // validation for constraint: boolean
        if (!is_null($waitOnSearchResults) && !is_bool($waitOnSearchResults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waitOnSearchResults, true), gettype($waitOnSearchResults)), __LINE__);
        }
        $this->WaitOnSearchResults = $waitOnSearchResults;
        return $this;
    }
}
