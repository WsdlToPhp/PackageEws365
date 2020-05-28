<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnalyzedQuery StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAnalyzedQuery extends AbstractStructBase
{
    /**
     * The QueryLanguage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $QueryLanguage;
    /**
     * The SearchRestrictions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $SearchRestrictions;
    /**
     * Constructor method for AnalyzedQuery
     * @uses EwsAnalyzedQuery::setQueryLanguage()
     * @uses EwsAnalyzedQuery::setSearchRestrictions()
     * @param string $queryLanguage
     * @param \Ews\StructType\EwsRestrictionType $searchRestrictions
     */
    public function __construct($queryLanguage = null, \Ews\StructType\EwsRestrictionType $searchRestrictions = null)
    {
        $this
            ->setQueryLanguage($queryLanguage)
            ->setSearchRestrictions($searchRestrictions);
    }
    /**
     * Get QueryLanguage value
     * @return string
     */
    public function getQueryLanguage()
    {
        return $this->QueryLanguage;
    }
    /**
     * Set QueryLanguage value
     * @param string $queryLanguage
     * @return \Ews\StructType\EwsAnalyzedQuery
     */
    public function setQueryLanguage($queryLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($queryLanguage) && !is_string($queryLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryLanguage, true), gettype($queryLanguage)), __LINE__);
        }
        $this->QueryLanguage = $queryLanguage;
        return $this;
    }
    /**
     * Get SearchRestrictions value
     * @return \Ews\StructType\EwsRestrictionType
     */
    public function getSearchRestrictions()
    {
        return $this->SearchRestrictions;
    }
    /**
     * Set SearchRestrictions value
     * @param \Ews\StructType\EwsRestrictionType $searchRestrictions
     * @return \Ews\StructType\EwsAnalyzedQuery
     */
    public function setSearchRestrictions(\Ews\StructType\EwsRestrictionType $searchRestrictions = null)
    {
        $this->SearchRestrictions = $searchRestrictions;
        return $this;
    }
}
