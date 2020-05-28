<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $AppId;
    /**
     * The PeopleTokens
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
     */
    public $PeopleTokens;
    /**
     * Constructor method for SetPeopleInsightsTokensType
     * @uses EwsSetPeopleInsightsTokensType::setAppId()
     * @uses EwsSetPeopleInsightsTokensType::setPeopleTokens()
     * @param string $appId
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     */
    public function __construct($appId = null, \Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null)
    {
        $this
            ->setAppId($appId)
            ->setPeopleTokens($peopleTokens);
    }
    /**
     * Get AppId value
     * @return string
     */
    public function getAppId()
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \Ews\StructType\EwsSetPeopleInsightsTokensType
     */
    public function setAppId($appId = null)
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        return $this;
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
     * @return \Ews\StructType\EwsSetPeopleInsightsTokensType
     */
    public function setPeopleTokens(\Ews\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null)
    {
        $this->PeopleTokens = $peopleTokens;
        return $this;
    }
}
