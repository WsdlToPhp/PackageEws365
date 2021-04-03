<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPeopleInsightsTokensType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetPeopleInsightsTokensType extends EwsBaseRequestType
{
    /**
     * The AppId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $AppId;
    /**
     * The PeopleTokens
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    protected \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $PeopleTokens;
    /**
     * Constructor method for SetPeopleInsightsTokensType
     * @uses EwsSetPeopleInsightsTokensType::setAppId()
     * @uses EwsSetPeopleInsightsTokensType::setPeopleTokens()
     * @param string $appId
     * @param \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     */
    public function __construct(string $appId, \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens)
    {
        $this
            ->setAppId($appId)
            ->setPeopleTokens($peopleTokens);
    }
    /**
     * Get AppId value
     * @return string
     */
    public function getAppId(): string
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \StructType\EwsSetPeopleInsightsTokensType
     */
    public function setAppId(string $appId): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        
        return $this;
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
     * @return \StructType\EwsSetPeopleInsightsTokensType
     */
    public function setPeopleTokens(\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens): self
    {
        $this->PeopleTokens = $peopleTokens;
        
        return $this;
    }
}
