<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientExtensionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientExtensionType extends EwsBaseRequestType
{
    /**
     * The RequestedExtensionIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $RequestedExtensionIds;
    /**
     * The UserParameters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsGetClientExtensionUserParametersType
     */
    public $UserParameters;
    /**
     * The IsDebug
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsDebug;
    /**
     * Constructor method for GetClientExtensionType
     * @uses EwsGetClientExtensionType::setRequestedExtensionIds()
     * @uses EwsGetClientExtensionType::setUserParameters()
     * @uses EwsGetClientExtensionType::setIsDebug()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $requestedExtensionIds
     * @param \Ews\StructType\EwsGetClientExtensionUserParametersType $userParameters
     * @param bool $isDebug
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $requestedExtensionIds = null, \Ews\StructType\EwsGetClientExtensionUserParametersType $userParameters = null, $isDebug = null)
    {
        $this
            ->setRequestedExtensionIds($requestedExtensionIds)
            ->setUserParameters($userParameters)
            ->setIsDebug($isDebug);
    }
    /**
     * Get RequestedExtensionIds value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getRequestedExtensionIds()
    {
        return $this->RequestedExtensionIds;
    }
    /**
     * Set RequestedExtensionIds value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $requestedExtensionIds
     * @return \Ews\StructType\EwsGetClientExtensionType
     */
    public function setRequestedExtensionIds(\Ews\ArrayType\EwsArrayOfStringsType $requestedExtensionIds = null)
    {
        $this->RequestedExtensionIds = $requestedExtensionIds;
        return $this;
    }
    /**
     * Get UserParameters value
     * @return \Ews\StructType\EwsGetClientExtensionUserParametersType|null
     */
    public function getUserParameters()
    {
        return $this->UserParameters;
    }
    /**
     * Set UserParameters value
     * @param \Ews\StructType\EwsGetClientExtensionUserParametersType $userParameters
     * @return \Ews\StructType\EwsGetClientExtensionType
     */
    public function setUserParameters(\Ews\StructType\EwsGetClientExtensionUserParametersType $userParameters = null)
    {
        $this->UserParameters = $userParameters;
        return $this;
    }
    /**
     * Get IsDebug value
     * @return bool|null
     */
    public function getIsDebug()
    {
        return $this->IsDebug;
    }
    /**
     * Set IsDebug value
     * @param bool $isDebug
     * @return \Ews\StructType\EwsGetClientExtensionType
     */
    public function setIsDebug($isDebug = null)
    {
        $this->IsDebug = $isDebug;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetClientExtensionType
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
