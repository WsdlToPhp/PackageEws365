<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartFindInGALSpeechRecognitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStartFindInGALSpeechRecognitionType extends EwsBaseRequestType
{
    /**
     * The Culture
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $Culture;
    /**
     * The TimeZone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $TimeZone;
    /**
     * The UserObjectGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $UserObjectGuid;
    /**
     * The TenantGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TenantGuid;
    /**
     * Constructor method for StartFindInGALSpeechRecognitionType
     * @uses EwsStartFindInGALSpeechRecognitionType::setCulture()
     * @uses EwsStartFindInGALSpeechRecognitionType::setTimeZone()
     * @uses EwsStartFindInGALSpeechRecognitionType::setUserObjectGuid()
     * @uses EwsStartFindInGALSpeechRecognitionType::setTenantGuid()
     * @param string $culture
     * @param string $timeZone
     * @param string $userObjectGuid
     * @param string $tenantGuid
     */
    public function __construct($culture = null, $timeZone = null, $userObjectGuid = null, $tenantGuid = null)
    {
        $this
            ->setCulture($culture)
            ->setTimeZone($timeZone)
            ->setUserObjectGuid($userObjectGuid)
            ->setTenantGuid($tenantGuid);
    }
    /**
     * Get Culture value
     * @return string
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setCulture($culture = null)
    {
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setTimeZone($timeZone = null)
    {
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get UserObjectGuid value
     * @return string
     */
    public function getUserObjectGuid()
    {
        return $this->UserObjectGuid;
    }
    /**
     * Set UserObjectGuid value
     * @param string $userObjectGuid
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setUserObjectGuid($userObjectGuid = null)
    {
        $this->UserObjectGuid = $userObjectGuid;
        return $this;
    }
    /**
     * Get TenantGuid value
     * @return string
     */
    public function getTenantGuid()
    {
        return $this->TenantGuid;
    }
    /**
     * Set TenantGuid value
     * @param string $tenantGuid
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setTenantGuid($tenantGuid = null)
    {
        $this->TenantGuid = $tenantGuid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionType
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
