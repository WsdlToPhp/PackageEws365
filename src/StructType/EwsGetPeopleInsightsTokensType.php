<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPeopleInsightsTokensType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetPeopleInsightsTokensType extends EwsBaseRequestType
{
    /**
     * The AppId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AppId;
    /**
     * Constructor method for GetPeopleInsightsTokensType
     * @uses EwsGetPeopleInsightsTokensType::setAppId()
     * @param string $appId
     */
    public function __construct($appId = null)
    {
        $this
            ->setAppId($appId);
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
     * @return \Ews\StructType\EwsGetPeopleInsightsTokensType
     */
    public function setAppId($appId = null)
    {
        $this->AppId = $appId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPeopleInsightsTokensType
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
