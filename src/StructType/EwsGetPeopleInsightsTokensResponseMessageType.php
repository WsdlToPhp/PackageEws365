<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPeopleInsightsTokensResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPeopleInsightsTokensResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PeopleTokens
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public $PeopleTokens;
    /**
     * Constructor method for GetPeopleInsightsTokensResponseMessageType
     * @uses EwsGetPeopleInsightsTokensResponseMessageType::setPeopleTokens()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null)
    {
        $this
            ->setPeopleTokens($peopleTokens);
    }
    /**
     * Get PeopleTokens value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function getPeopleTokens()
    {
        return $this->PeopleTokens;
    }
    /**
     * Set PeopleTokens value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     * @return \Ews\StructType\EwsGetPeopleInsightsTokensResponseMessageType
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
     * @return \Ews\StructType\EwsGetPeopleInsightsTokensResponseMessageType
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
