<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPeopleInsightsTokensType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSetPeopleInsightsTokensType extends EwsBaseRequestType
{
    /**
     * The AppId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AppId;
    /**
     * The PeopleTokens
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetPeopleInsightsTokensType
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
