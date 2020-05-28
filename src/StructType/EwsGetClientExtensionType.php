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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $RequestedExtensionIds;
    /**
     * The UserParameters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsGetClientExtensionUserParametersType
     */
    public $UserParameters;
    /**
     * The IsDebug
     * Meta information extracted from the WSDL
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
        // validation for constraint: boolean
        if (!is_null($isDebug) && !is_bool($isDebug)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDebug, true), gettype($isDebug)), __LINE__);
        }
        $this->IsDebug = $isDebug;
        return $this;
    }
}
