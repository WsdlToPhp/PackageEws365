<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientExtensionUserParametersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientExtensionUserParametersType extends AbstractStructBase
{
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $UserId;
    /**
     * The UserEnabledExtensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $UserEnabledExtensions;
    /**
     * The UserDisabledExtensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $UserDisabledExtensions;
    /**
     * The EnabledOnly
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $EnabledOnly;
    /**
     * Constructor method for GetClientExtensionUserParametersType
     * @uses EwsGetClientExtensionUserParametersType::setUserId()
     * @uses EwsGetClientExtensionUserParametersType::setUserEnabledExtensions()
     * @uses EwsGetClientExtensionUserParametersType::setUserDisabledExtensions()
     * @uses EwsGetClientExtensionUserParametersType::setEnabledOnly()
     * @param string $userId
     * @param \Ews\ArrayType\EwsArrayOfStringsType $userEnabledExtensions
     * @param \Ews\ArrayType\EwsArrayOfStringsType $userDisabledExtensions
     * @param bool $enabledOnly
     */
    public function __construct($userId = null, \Ews\ArrayType\EwsArrayOfStringsType $userEnabledExtensions = null, \Ews\ArrayType\EwsArrayOfStringsType $userDisabledExtensions = null, $enabledOnly = null)
    {
        $this
            ->setUserId($userId)
            ->setUserEnabledExtensions($userEnabledExtensions)
            ->setUserDisabledExtensions($userDisabledExtensions)
            ->setEnabledOnly($enabledOnly);
    }
    /**
     * Get UserId value
     * @return string
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \Ews\StructType\EwsGetClientExtensionUserParametersType
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get UserEnabledExtensions value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getUserEnabledExtensions()
    {
        return $this->UserEnabledExtensions;
    }
    /**
     * Set UserEnabledExtensions value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $userEnabledExtensions
     * @return \Ews\StructType\EwsGetClientExtensionUserParametersType
     */
    public function setUserEnabledExtensions(\Ews\ArrayType\EwsArrayOfStringsType $userEnabledExtensions = null)
    {
        $this->UserEnabledExtensions = $userEnabledExtensions;
        return $this;
    }
    /**
     * Get UserDisabledExtensions value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getUserDisabledExtensions()
    {
        return $this->UserDisabledExtensions;
    }
    /**
     * Set UserDisabledExtensions value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $userDisabledExtensions
     * @return \Ews\StructType\EwsGetClientExtensionUserParametersType
     */
    public function setUserDisabledExtensions(\Ews\ArrayType\EwsArrayOfStringsType $userDisabledExtensions = null)
    {
        $this->UserDisabledExtensions = $userDisabledExtensions;
        return $this;
    }
    /**
     * Get EnabledOnly value
     * @return bool|null
     */
    public function getEnabledOnly()
    {
        return $this->EnabledOnly;
    }
    /**
     * Set EnabledOnly value
     * @param bool $enabledOnly
     * @return \Ews\StructType\EwsGetClientExtensionUserParametersType
     */
    public function setEnabledOnly($enabledOnly = null)
    {
        $this->EnabledOnly = $enabledOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetClientExtensionUserParametersType
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
