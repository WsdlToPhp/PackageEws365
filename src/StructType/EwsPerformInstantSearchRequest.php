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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchSessionId;
    /**
     * The ItemType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ItemType;
    /**
     * The QueryOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $QueryOptions;
    /**
     * The SearchRequestId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SearchRequestId;
    /**
     * The KqlQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $KqlQuery;
    /**
     * The FolderScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfFolderIdType
     */
    public $FolderScope;
    /**
     * The DistinguishedFolderScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType
     */
    public $DistinguishedFolderScope;
    /**
     * The IsDeepTraversal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsDeepTraversal;
    /**
     * The WaitOnSearchResults
     * Meta informations extracted from the WSDL
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
     * @param string $itemType
     * @param string $queryOptions
     * @param int $searchRequestId
     * @param string $kqlQuery
     * @param \Ews\ArrayType\EwsArrayOfFolderIdType $folderScope
     * @param \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope
     * @param bool $isDeepTraversal
     * @param bool $waitOnSearchResults
     */
    public function __construct($searchSessionId = null, $itemType = null, $queryOptions = null, $searchRequestId = null, $kqlQuery = null, \Ews\ArrayType\EwsArrayOfFolderIdType $folderScope = null, \Ews\ArrayType\EwsArrayOfDistinguishedFolderIdType $distinguishedFolderScope = null, $isDeepTraversal = null, $waitOnSearchResults = null)
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get ItemType value
     * @return string
     */
    public function getItemType()
    {
        return $this->ItemType;
    }
    /**
     * Set ItemType value
     * @uses \Ews\EnumType\EwsInstantSearchItemType::valueIsValid()
     * @uses \Ews\EnumType\EwsInstantSearchItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemType
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setItemType($itemType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsInstantSearchItemType::valueIsValid($itemType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemType, implode(', ', \Ews\EnumType\EwsInstantSearchItemType::getValidValues())), __LINE__);
        }
        $this->ItemType = $itemType;
        return $this;
    }
    /**
     * Get QueryOptions value
     * @return string
     */
    public function getQueryOptions()
    {
        return $this->QueryOptions;
    }
    /**
     * Set QueryOptions value
     * @uses \Ews\EnumType\EwsQueryOptionsType::valueIsValid()
     * @uses \Ews\EnumType\EwsQueryOptionsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $queryOptions
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
     */
    public function setQueryOptions($queryOptions = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsQueryOptionsType::valueIsValid($queryOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $queryOptions, implode(', ', \Ews\EnumType\EwsQueryOptionsType::getValidValues())), __LINE__);
        }
        $this->QueryOptions = $queryOptions;
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
        if (!is_null($searchRequestId) && !is_numeric($searchRequestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($searchRequestId)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kqlQuery)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDeepTraversal)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($waitOnSearchResults)), __LINE__);
        }
        $this->WaitOnSearchResults = $waitOnSearchResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPerformInstantSearchRequest
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
