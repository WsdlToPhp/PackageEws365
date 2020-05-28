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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $UmEnabled;
    /**
     * The PlayOnPhoneDialString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PlayOnPhoneDialString;
    /**
     * The PlayOnPhoneEnabled
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($umEnabled, true), gettype($umEnabled)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($playOnPhoneDialString, true), gettype($playOnPhoneDialString)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($playOnPhoneEnabled, true), gettype($playOnPhoneEnabled)), __LINE__);
        }
        $this->PlayOnPhoneEnabled = $playOnPhoneEnabled;
        return $this;
    }
}
