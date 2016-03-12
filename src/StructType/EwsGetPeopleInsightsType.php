<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPeopleInsightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPeopleInsightsType extends EwsBaseRequestType
{
    /**
     * The PersonShape
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonResponseShapeType
     */
    public $PersonShape;
    /**
     * The EmailAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $EmailAddresses;
    /**
     * The InsightFilters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsightFiltersType
     */
    public $InsightFilters;
    /**
     * The AppId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AppId;
    /**
     * The PeopleTokens
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public $PeopleTokens;
    /**
     * Constructor method for GetPeopleInsightsType
     * @uses EwsGetPeopleInsightsType::setPersonShape()
     * @uses EwsGetPeopleInsightsType::setEmailAddresses()
     * @uses EwsGetPeopleInsightsType::setInsightFilters()
     * @uses EwsGetPeopleInsightsType::setAppId()
     * @uses EwsGetPeopleInsightsType::setPeopleTokens()
     * @param \Ews\StructType\EwsPersonResponseShapeType $personShape
     * @param \Ews\ArrayType\EwsArrayOfStringsType $emailAddresses
     * @param \Ews\StructType\EwsInsightFiltersType $insightFilters
     * @param string $appId
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     */
    public function __construct(\Ews\StructType\EwsPersonResponseShapeType $personShape = null, \Ews\ArrayType\EwsArrayOfStringsType $emailAddresses = null, \Ews\StructType\EwsInsightFiltersType $insightFilters = null, $appId = null, \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null)
    {
        $this
            ->setPersonShape($personShape)
            ->setEmailAddresses($emailAddresses)
            ->setInsightFilters($insightFilters)
            ->setAppId($appId)
            ->setPeopleTokens($peopleTokens);
    }
    /**
     * Get PersonShape value
     * @return \Ews\StructType\EwsPersonResponseShapeType|null
     */
    public function getPersonShape()
    {
        return $this->PersonShape;
    }
    /**
     * Set PersonShape value
     * @param \Ews\StructType\EwsPersonResponseShapeType $personShape
     * @return \Ews\StructType\EwsGetPeopleInsightsType
     */
    public function setPersonShape(\Ews\StructType\EwsPersonResponseShapeType $personShape = null)
    {
        $this->PersonShape = $personShape;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $emailAddresses
     * @return \Ews\StructType\EwsGetPeopleInsightsType
     */
    public function setEmailAddresses(\Ews\ArrayType\EwsArrayOfStringsType $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get InsightFilters value
     * @return \Ews\StructType\EwsInsightFiltersType|null
     */
    public function getInsightFilters()
    {
        return $this->InsightFilters;
    }
    /**
     * Set InsightFilters value
     * @param \Ews\StructType\EwsInsightFiltersType $insightFilters
     * @return \Ews\StructType\EwsGetPeopleInsightsType
     */
    public function setInsightFilters(\Ews\StructType\EwsInsightFiltersType $insightFilters = null)
    {
        $this->InsightFilters = $insightFilters;
        return $this;
    }
    /**
     * Get AppId value
     * @return string|null
     */
    public function getAppId()
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \Ews\StructType\EwsGetPeopleInsightsType
     */
    public function setAppId($appId = null)
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        return $this;
    }
    /**
     * Get PeopleTokens value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType|null
     */
    public function getPeopleTokens()
    {
        return $this->PeopleTokens;
    }
    /**
     * Set PeopleTokens value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     * @return \Ews\StructType\EwsGetPeopleInsightsType
     */
    public function setPeopleTokens(\Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null)
    {
        $this->PeopleTokens = $peopleTokens;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPeopleInsightsType
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
