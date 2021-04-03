<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $QueryLanguage;
    /**
     * The SearchRestrictions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsRestrictionType
     */
    protected \StructType\EwsRestrictionType $SearchRestrictions;
    /**
     * Constructor method for AnalyzedQuery
     * @uses EwsAnalyzedQuery::setQueryLanguage()
     * @uses EwsAnalyzedQuery::setSearchRestrictions()
     * @param string $queryLanguage
     * @param \StructType\EwsRestrictionType $searchRestrictions
     */
    public function __construct(string $queryLanguage, \StructType\EwsRestrictionType $searchRestrictions)
    {
        $this
            ->setQueryLanguage($queryLanguage)
            ->setSearchRestrictions($searchRestrictions);
    }
    /**
     * Get QueryLanguage value
     * @return string
     */
    public function getQueryLanguage(): string
    {
        return $this->QueryLanguage;
    }
    /**
     * Set QueryLanguage value
     * @param string $queryLanguage
     * @return \StructType\EwsAnalyzedQuery
     */
    public function setQueryLanguage(string $queryLanguage): self
    {
        // validation for constraint: string
        if (!is_null($queryLanguage) && !is_string($queryLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryLanguage, true), gettype($queryLanguage)), __LINE__);
        }
        $this->QueryLanguage = $queryLanguage;
        
        return $this;
    }
    /**
     * Get SearchRestrictions value
     * @return \StructType\EwsRestrictionType
     */
    public function getSearchRestrictions(): \StructType\EwsRestrictionType
    {
        return $this->SearchRestrictions;
    }
    /**
     * Set SearchRestrictions value
     * @param \StructType\EwsRestrictionType $searchRestrictions
     * @return \StructType\EwsAnalyzedQuery
     */
    public function setSearchRestrictions(\StructType\EwsRestrictionType $searchRestrictions): self
    {
        $this->SearchRestrictions = $searchRestrictions;
        
        return $this;
    }
}
