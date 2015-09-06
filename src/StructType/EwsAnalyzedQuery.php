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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $QueryLanguage;
    /**
     * The SearchRestrictions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: t:SearchExpression
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAnalyzedQuery
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
