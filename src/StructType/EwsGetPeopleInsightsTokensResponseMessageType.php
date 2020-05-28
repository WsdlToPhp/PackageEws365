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
     * Meta information extracted from the WSDL
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
}
