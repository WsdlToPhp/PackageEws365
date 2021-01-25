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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    public $Culture;
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    public $TimeZone;
    /**
     * The UserObjectGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $UserObjectGuid;
    /**
     * The TenantGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
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
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($culture) && mb_strlen($culture) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($culture)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZone, true), gettype($timeZone)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($timeZone) && mb_strlen($timeZone) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($timeZone)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($userObjectGuid) && !is_string($userObjectGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userObjectGuid, true), gettype($userObjectGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($userObjectGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $userObjectGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($userObjectGuid, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($tenantGuid) && !is_string($tenantGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tenantGuid, true), gettype($tenantGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($tenantGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $tenantGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($tenantGuid, true)), __LINE__);
        }
        $this->TenantGuid = $tenantGuid;
        return $this;
    }
}
