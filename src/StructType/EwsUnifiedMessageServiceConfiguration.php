<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedMessageServiceConfiguration StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedMessageServiceConfiguration extends EwsServiceConfiguration
{
    /**
     * The UmEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $UmEnabled;
    /**
     * The PlayOnPhoneDialString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PlayOnPhoneDialString;
    /**
     * The PlayOnPhoneEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $PlayOnPhoneEnabled;
    /**
     * Constructor method for UnifiedMessageServiceConfiguration
     * @uses EwsUnifiedMessageServiceConfiguration::setUmEnabled()
     * @uses EwsUnifiedMessageServiceConfiguration::setPlayOnPhoneDialString()
     * @uses EwsUnifiedMessageServiceConfiguration::setPlayOnPhoneEnabled()
     * @param bool $umEnabled
     * @param string $playOnPhoneDialString
     * @param bool $playOnPhoneEnabled
     */
    public function __construct($umEnabled = null, $playOnPhoneDialString = null, $playOnPhoneEnabled = null)
    {
        $this
            ->setUmEnabled($umEnabled)
            ->setPlayOnPhoneDialString($playOnPhoneDialString)
            ->setPlayOnPhoneEnabled($playOnPhoneEnabled);
    }
    /**
     * Get UmEnabled value
     * @return bool
     */
    public function getUmEnabled()
    {
        return $this->UmEnabled;
    }
    /**
     * Set UmEnabled value
     * @param bool $umEnabled
     * @return \Ews\StructType\EwsUnifiedMessageServiceConfiguration
     */
    public function setUmEnabled($umEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($umEnabled) && !is_bool($umEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($umEnabled)), __LINE__);
        }
        $this->UmEnabled = $umEnabled;
        return $this;
    }
    /**
     * Get PlayOnPhoneDialString value
     * @return string
     */
    public function getPlayOnPhoneDialString()
    {
        return $this->PlayOnPhoneDialString;
    }
    /**
     * Set PlayOnPhoneDialString value
     * @param string $playOnPhoneDialString
     * @return \Ews\StructType\EwsUnifiedMessageServiceConfiguration
     */
    public function setPlayOnPhoneDialString($playOnPhoneDialString = null)
    {
        // validation for constraint: string
        if (!is_null($playOnPhoneDialString) && !is_string($playOnPhoneDialString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($playOnPhoneDialString)), __LINE__);
        }
        $this->PlayOnPhoneDialString = $playOnPhoneDialString;
        return $this;
    }
    /**
     * Get PlayOnPhoneEnabled value
     * @return bool
     */
    public function getPlayOnPhoneEnabled()
    {
        return $this->PlayOnPhoneEnabled;
    }
    /**
     * Set PlayOnPhoneEnabled value
     * @param bool $playOnPhoneEnabled
     * @return \Ews\StructType\EwsUnifiedMessageServiceConfiguration
     */
    public function setPlayOnPhoneEnabled($playOnPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($playOnPhoneEnabled) && !is_bool($playOnPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($playOnPhoneEnabled)), __LINE__);
        }
        $this->PlayOnPhoneEnabled = $playOnPhoneEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedMessageServiceConfiguration
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
