<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    protected \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $PeopleTokens;
    /**
     * Constructor method for GetPeopleInsightsTokensResponseMessageType
     * @uses EwsGetPeopleInsightsTokensResponseMessageType::setPeopleTokens()
     * @param \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens)
    {
        $this
            ->setPeopleTokens($peopleTokens);
    }
    /**
     * Get PeopleTokens value
     * @return \ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public function getPeopleTokens(): \ArrayType\EwsNonEmptyArrayOfPeopleTokenType
    {
        return $this->PeopleTokens;
    }
    /**
     * Set PeopleTokens value
     * @param \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     * @return \StructType\EwsGetPeopleInsightsTokensResponseMessageType
     */
    public function setPeopleTokens(\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens): self
    {
        $this->PeopleTokens = $peopleTokens;
        
        return $this;
    }
}
