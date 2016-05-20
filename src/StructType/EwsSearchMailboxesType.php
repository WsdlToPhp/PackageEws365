<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMailboxesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the SearchMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchMailboxesType extends EwsBaseRequestType
{
    /**
     * The SearchQueries
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public $SearchQueries;
    /**
     * The ResultType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ResultType;
    /**
     * The PreviewItemResponseShape
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPreviewItemResponseShapeType
     */
    public $PreviewItemResponseShape;
    /**
     * The SortBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFieldOrderType
     */
    public $SortBy;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * The Deduplication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Deduplication;
    /**
     * The PageSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageSize;
    /**
     * The PageItemReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PageItemReference;
    /**
     * The PageDirection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PageDirection;
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
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @param string $resultType
     * @param \Ews\StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape
     * @param \Ews\StructType\EwsFieldOrderType $sortBy
     * @param string $language
     * @param bool $deduplication
     * @param int $pageSize
     * @param string $pageItemReference
     * @param string $pageDirection
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries = null, $resultType = null, \Ews\StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape = null, \Ews\StructType\EwsFieldOrderType $sortBy = null, $language = null, $deduplication = null, $pageSize = null, $pageItemReference = null, $pageDirection = null)
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
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function getSearchQueries()
    {
        return $this->SearchQueries;
    }
    /**
     * Set SearchQueries value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setSearchQueries(\Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries = null)
    {
        $this->SearchQueries = $searchQueries;
        return $this;
    }
    /**
     * Get ResultType value
     * @return string
     */
    public function getResultType()
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @uses \Ews\EnumType\EwsSearchResultType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchResultType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resultType
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setResultType($resultType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchResultType::valueIsValid($resultType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resultType, implode(', ', \Ews\EnumType\EwsSearchResultType::getValidValues())), __LINE__);
        }
        $this->ResultType = $resultType;
        return $this;
    }
    /**
     * Get PreviewItemResponseShape value
     * @return \Ews\StructType\EwsPreviewItemResponseShapeType|null
     */
    public function getPreviewItemResponseShape()
    {
        return $this->PreviewItemResponseShape;
    }
    /**
     * Set PreviewItemResponseShape value
     * @param \Ews\StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setPreviewItemResponseShape(\Ews\StructType\EwsPreviewItemResponseShapeType $previewItemResponseShape = null)
    {
        $this->PreviewItemResponseShape = $previewItemResponseShape;
        return $this;
    }
    /**
     * Get SortBy value
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function getSortBy()
    {
        return $this->SortBy;
    }
    /**
     * Set SortBy value
     * @param \Ews\StructType\EwsFieldOrderType $sortBy
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setSortBy(\Ews\StructType\EwsFieldOrderType $sortBy = null)
    {
        $this->SortBy = $sortBy;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get Deduplication value
     * @return bool|null
     */
    public function getDeduplication()
    {
        return $this->Deduplication;
    }
    /**
     * Set Deduplication value
     * @param bool $deduplication
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setDeduplication($deduplication = null)
    {
        $this->Deduplication = $deduplication;
        return $this;
    }
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setPageSize($pageSize = null)
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !is_numeric($pageSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        return $this;
    }
    /**
     * Get PageItemReference value
     * @return string|null
     */
    public function getPageItemReference()
    {
        return $this->PageItemReference;
    }
    /**
     * Set PageItemReference value
     * @param string $pageItemReference
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setPageItemReference($pageItemReference = null)
    {
        // validation for constraint: string
        if (!is_null($pageItemReference) && !is_string($pageItemReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageItemReference)), __LINE__);
        }
        $this->PageItemReference = $pageItemReference;
        return $this;
    }
    /**
     * Get PageDirection value
     * @return string|null
     */
    public function getPageDirection()
    {
        return $this->PageDirection;
    }
    /**
     * Set PageDirection value
     * @uses \Ews\EnumType\EwsSearchPageDirectionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchPageDirectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pageDirection
     * @return \Ews\StructType\EwsSearchMailboxesType
     */
    public function setPageDirection($pageDirection = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchPageDirectionType::valueIsValid($pageDirection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pageDirection, implode(', ', \Ews\EnumType\EwsSearchPageDirectionType::getValidValues())), __LINE__);
        }
        $this->PageDirection = $pageDirection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchMailboxesType
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
