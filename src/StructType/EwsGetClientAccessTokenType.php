<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientAccessTokenType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientAccessTokenType extends EwsBaseRequestType
{
    /**
     * The TokenRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    public $TokenRequests;
    /**
     * Constructor method for GetClientAccessTokenType
     * @uses EwsGetClientAccessTokenType::setTokenRequests()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     * $tokenRequests
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $tokenRequests = null)
    {
        $this
            ->setTokenRequests($tokenRequests);
    }
    /**
     * Get TokenRequests value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    public function getTokenRequests()
    {
        return $this->TokenRequests;
    }
    /**
     * Set TokenRequests value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     * $tokenRequests
     * @return \Ews\StructType\EwsGetClientAccessTokenType
     */
    public function setTokenRequests(\Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $tokenRequests = null)
    {
        $this->TokenRequests = $tokenRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetClientAccessTokenType
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
